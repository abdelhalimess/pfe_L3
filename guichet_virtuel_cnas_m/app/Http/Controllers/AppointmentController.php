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
        //
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
            'selected_date' => 'required',
        ]);

        $selectedDate = $request->input('selected_date');

        // Retrieve existing appointments for the selected date
        $availableHours = [
            '08:00', '09:00', '10:00', '11:00', '13:00', '14:00', '15:00', '16:00',
        ];
        
        $existingAppointments = Appointment::whereDate('appointment_datetime', '=', $selectedDate)
            ->pluck('appointment_datetime')
            ->map(function ($datetime) {
                return Carbon::parse($datetime)->format('H:i');
            })
            ->toArray();
        
        // Remove the existing appointments from the available hours array
        $availableHours = array_diff($availableHours, $existingAppointments);
        return response()->json(['available_hours' => $availableHours]);
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

    // Convert selected date and hour to a DateTime object
    $selectedDateTime = Carbon::createFromFormat('Y-m-d H:i', $selectedDate . ' ' . $selectedHour);

    // Check if the selected time slot is already booked
    $isBooked = Appointment::whereDate('appointment_datetime', $selectedDateTime->toDateString())
        ->whereTime('appointment_datetime', $selectedDateTime->toTimeString())
        ->exists();

    if ($isBooked) { // this i added to check for two or more user booking at same time
        return response()->json(['message' => 'Selected time slot is not available. Please choose another time.'], 400);
    }
    $authUser = User::find(Auth::user()->id);
    $service = Service::where('id','=',$selectedService)->with("employee")->firstOrFail();
    // Save the appointment to the database
    Appointment::create([
        'appointment_datetime' => $selectedDateTime,
        'user_id' => $authUser->id,
        'employee_id' => $service->employee->id,
        'status' => 'created' // hna njibo id ta3 employee from the front end when we select a service psk employee taba3 l service wahed
    ]);

    return response()->json(['message' => 'Appointment created successfully']);
}
}
