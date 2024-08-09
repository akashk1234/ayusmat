<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function view_delivered_orders(){
        return view('admin.orders-delivered');
    }

    public function view_new_orders(){
        return view('admin.orders-new');
    }

    public function view_shipped_orders(){
        return view('admin.orders-shipped');
    }
}
