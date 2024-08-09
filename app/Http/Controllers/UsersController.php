<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class UsersController extends Controller
{
    public function index(){
        $users = User::all();
        return view('admin.users', compact('users'));
    }

    public function store(Request $request){
        try{ 
            // validate data
            $validateData = $request -> validate([
                'name' => 'required|string',
                'role' => 'required|string',
                'email' => 'required|string',
                'password' => 'required|string',
            ]);


            // create new instance for 
            $users = new User();
            $users -> name = $validateData['name'];
            $users -> role = $validateData['role'];
            $users -> email = $validateData['email'];
            $users -> password = $validateData['password'];

            $users ->save();
            return redirect()->route('users.index')->with('success', 'New user added');
        }
        catch (\Exception $e) {
            Log::error("Error occurred while storing data: " . $e->getMessage());

            return redirect()->back()->with('error', 'An error occurred. Please try again.');
        }
    }
}
