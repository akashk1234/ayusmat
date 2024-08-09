<?php

namespace App\Http\Controllers;

use App\Models\Appointments;
use Illuminate\Http\Request;

class AppointmentsController extends Controller
{
    public function index(){
        return view('admin.appointments');
    }


    public function store(Request $request){
        try{
        // validate data
        $validateData = $request -> validate([
            'date' => 'string|required',
            "time" => 'string|required',
            "name" => 'string|required',
            "mobile" => 'string|required',
            "doctor" => 'string|required',
            "notes" => 'string|required',
            "status" => 'string|required',
        ]);


        // create instace of Appointments
        $appointments = new Appointments();
        $appointments -> date = $validateData['date'];
        $appointments -> time = $validateData['time'];
        $appointments -> name = $validateData['name'];
        $appointments -> mobile = $validateData['mobile'];
        $appointments -> doctor = $validateData['doctor'];
        $appointments -> notes = $validateData['notes'];
        $appointments -> status = $validateData['status'];

        $appointments -> save();

        return redirect()->route('admin-bookings.index')->with('success', 'Appointment Scheduled');
        } catch{
            
        }
    }

}
