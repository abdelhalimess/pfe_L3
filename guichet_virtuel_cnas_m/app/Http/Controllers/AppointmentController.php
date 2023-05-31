<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Service;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $appointments = Appointment::where('id', Auth::user()->id);
        return view('admin.appointments_list', compact('appointments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    /**
     * Get available hours for a selected date.
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function getAvailableHours(Request $request)
    {
        // Validate the request data
        $request->validate([
            'selected_date' => 'required|date',
        ]);

        $selectedDate = $request->input('selected_date');

        // Retrieve existing appointments for the selected date
        $existingAppointments = Appointment::whereDate('appointment_datetime', '=', $selectedDate)
            ->pluck('appointment_datetime')
            ->map(function ($datetime) {
                return Carbon::parse($datetime)->format('H:i');
            })
            ->toArray(); // convert to array so we can compare result later..

        // Define available hours range - each appointment takes one hour
        $availableHoursRange = [
            '08:00', '09:00', '10:00', '11:00', '13:00', '14:00', '15:00', '16:00',
        ];

        // Get the current date and time
        $currentDateTime = Carbon::now();

        // Check if the selected date is the same as the current date
        $isSameDay = Carbon::parse($selectedDate)->isSameDay($currentDateTime);

        // If it's the same day, filter the available hours based on the current hour
        if ($isSameDay) {
            $currentHour = $currentDateTime->hour;
            $currentMinute = $currentDateTime->minute;

            // Filter the available hours based on the current booking time
            $availableHours = array_filter($availableHoursRange, function ($hour) use ($currentHour, $currentMinute) {
                $hourParts = explode(':', $hour);
                $hourValue = (int) $hourParts[0];
                $minuteValue = (int) $hourParts[1];

                if ($hourValue > $currentHour) {
                    return true;
                } elseif ($hourValue === $currentHour && $minuteValue > $currentMinute) {
                    return true;
                }

                return false;
            });
        } else {
            // If it's not the same day, all hours are considered available
            $availableHours = $availableHoursRange;
        }

        // Filter the available hours based on existing appointments
        $availableHours = array_diff($availableHours, $existingAppointments);

        return response()->json(['available_hours' => array_values($availableHours)]);
    }
    public function createAppointment(Request $request)
    {
        // Validate the request data
        $request->validate([
            'selected_date' => 'required|date',
            'selected_hour' => 'required',
        ]);

        $selectedDate = $request->input('selected_date');
        $selectedHour = $request->input('selected_hour');
        $selectedService = $request->input('selected_service_id');
        $question_id = $request->input('question_id');

        // Convert selected date and hour to a DateTime object
        $selectedDateTime = Carbon::createFromFormat('Y-m-d H:i', $selectedDate . ' ' . $selectedHour);
        $authUser = User::find(Auth::user()->id);

        // Check if the user has a pending appointment for the selected service
        $hasPendingAppointments = Appointment::where('user_id', $authUser->id)
            ->where('status', 'PENDING')
            ->whereHas('employee', function ($query) use ($selectedService) {
                $query->where('service_id', $selectedService);
            })
            ->exists();
        if ($hasPendingAppointments) {
            return response()->json(['message' => 'You cannot book multiple appointments.'], 400);
        }

        // Check if the selected date is Friday or Saturday
        $dayOfWeek = $selectedDateTime->format('l');
        if ($dayOfWeek === 'Friday' || $dayOfWeek === 'Saturday') {
            return response()->json(['message' => 'Selected time slot is not available. Please choose another time.'], 400);
        }

        $isBooked = Appointment::whereDate('appointment_datetime', $selectedDateTime->toDateString())
            ->whereTime('appointment_datetime', $selectedDateTime->toTimeString())
            ->exists();

        if ($isBooked) {
            return response()->json(['message' => 'Selected time slot is not available. Please choose another time.'], 400);
        }

        $employee = User::where('service_id', '=', $selectedService)->firstOrFail();

        $appointment = Appointment::create([
            'appointment_datetime' => $selectedDateTime,
            'user_id' => $authUser->id,
            'employee_id' => $employee->id,
            'question_id' => $question_id,
            'status' => 'PENDING'
        ]);

        $theAppointment = Appointment::with('user.structure', 'question.documents', 'employee.service')
            ->where('id', '=', $appointment->id)->firstOrFail();

        return response()->json([
            'message' => 'Appointment created successfully',
            'appointment' => $theAppointment
        ]);
    }


    public function getAppointments()
    {
        $appointments = Appointment::with('user', 'question.documents')->where('employee_id', Auth::user()->id)
            ->orderBy('appointment_datetime', 'asc')
            ->get();
        return response()->json(['appointments' => $appointments]);
    }

    public function getMyAppointments()
    {
        $appointments = Appointment::with('user.structure', 'question.documents', 'employee.service')->where('user_id', Auth::user()->id)
            ->orderBy('appointment_datetime', 'asc')
            ->get();
        return response()->json(['appointments' => $appointments]);
    }

    public function updateAppointments($id)
    {
        $action = request('action');
        $appointment = Appointment::findOrFail($id);
        if ($action === 'approve') {
            $appointment->status = 'CONFIRMED';
        }
        if ($action === 'cancel') {
            $appointment->status = 'CANCELED';
        }
        if ($action === 'done') {
            $appointment->status = 'DONE';
        }
        if ($action === 'dismiss') {
            $appointment->status = 'DISMISSED';
        }

        $appointment->save();
        $appointments = Appointment::with('user', 'question.documents')->where('employee_id', Auth::user()->id)
            ->orderBy('appointment_datetime', 'asc')
            ->get();
        return response()->json([
            'success' => 'Appointments updated with success',
            'appointments' => $appointments,
        ]);
    }
}
