<?php

namespace App\Http\Controllers;

use App\Models\Bookings;
use App\Models\User;
use Illuminate\Http\Request;

class BookingsController extends Controller
{
    public function index(){
        $bookings = Bookings::all();
        $users = User::all();
        return view('admin.bookings', compact('bookings','users'));
    }

    public function destroy($id){
        $booking = Bookings::findOrFail($id);
        $booking -> delete();
        return redirect()->route('admin-bookings.index')->with('success, booking deleted successfully');
    }

}

