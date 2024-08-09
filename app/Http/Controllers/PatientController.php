<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function index(){
        return view('admin.patients');
    }

    public function view_patient_profile(){
        return view('admin.patient-profile');
    }

    public function view_registered_patients(){
        return view('admin.registered-patients');
    }
}
