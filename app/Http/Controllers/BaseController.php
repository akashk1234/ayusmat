<?php

namespace App\Http\Controllers;

use App\Models\Bookings;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class BaseController extends Controller
{
    public function index(){
        return view('front-end.index');
    }
    
    public function view_contact(){
        return view('front-end.contact');
    }

    public function view_package(){
        return view('front-end.packages');
    }

    public function view_package_details(){
        return view('front-end.package-details');
    }

    public function view_product(){
        return view('front-end.products');
    }

    public function view_product_details(){
        return view('front-end.product-details');
    }

    public function view_cart(){
        return view('front-end.cart');
    }

    public function view_checkout(){
        return view('front-end.checkout');
    }

    public function booking(Request $request){

        // validate data
        $validateData = $request -> validate([
            'date' => 'required|string',
            'time' => 'required|string',
            'name' => 'required|string',
            'mobile' => 'required|string',
            'package' => 'required|string',
        ]);

        // create new instance for bookings
        $bookings = new Bookings();
        $bookings -> date = $validateData['date'];
        $bookings -> time = $validateData['time'];
        $bookings -> name = $validateData['name'];
        $bookings -> mobile = $validateData['mobile'];
        $bookings -> package = $validateData['package'];

        $bookings->save();

        Alert::success('Booking successfull', 'We will get in touch with you soon');

        return redirect()->route('index')->with('Booking successfull'); 
    }
}
