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
        $appointments = Appointment::where('id',Auth::user()->id);
        return view('admin.appointments_list',compact('appointments'));
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
    $authUser = User::find(Auth::user()->id);

    // Check if the selected time slot is already booked
    $hasPendingAppointments = Appointment::where('user_id', $authUser->id)->where('status','PENDING')->exists();
    if ($hasPendingAppointments) { // this i added to check for two or more user booking at same time
        return response()->json(['message' => 'You cannot book multiple appointments.'],400);//try
    }
    $isBooked = Appointment::whereDate('appointment_datetime', $selectedDateTime->toDateString())
        ->whereTime('appointment_datetime', $selectedDateTime->toTimeString())
        ->exists();

    if ($isBooked) { // this i added to check for two or more user booking at same time
        return response()->json(['message' => 'Selected time slot is not available. Please choose another time.'], 400);
    }
    $service = Service::where('id','=',$selectedService)->with("employee")->firstOrFail();
    // Save the appointment to the database
    Appointment::create([
        'appointment_datetime' => $selectedDateTime,
        'user_id' => $authUser->id,
        'employee_id' => $service->employee->id,
        'status' => 'PENDING' 
    ]);

    return response()->json(['message' => 'Appointment created successfully']);
}

public function getAppointments()
{
    $appointments = Appointment::with('user','question.documents')->where('employee_id', Auth::user()->id)
    ->orderBy('appointment_datetime', 'asc')
    ->get();
    return response()->json(['appointments' => $appointments]);
}

public function getMyAppointments()
{
    $appointments = Appointment::with('user','question')->where('user_id', Auth::user()->id)
    ->orderBy('appointment_datetime', 'asc')
    ->get();
    return response()->json(['appointments' => $appointments]);
}

public function updateAppointments($id)
{
    $action = request('action');
$appointment = Appointment::findOrFail($id);
if ($action === 'approve'){
$appointment->status = 'CONFIRMED';
}
if ($action === 'cancel'){
$appointment->status = 'CANCELED';
}
if ($action === 'done'){
    $appointment->status = 'DONE';
    }
    if ($action === 'dismiss'){
        $appointment->status = 'DISMISSED';
        } 

$appointment->save();
$appointments = Appointment::with('user','question.documents')->where('employee_id', Auth::user()->id)
    ->orderBy('appointment_datetime', 'asc')
    ->get();
return response()->json([
    'success' => 'Appointments updated with success',
    'appointments' => $appointments,
]);

}
}
