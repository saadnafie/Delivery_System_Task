<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function index()
    {
        if (auth()->user()->user_type_id == 1) {
            return redirect()->route('create-parcel'); 
        }else if (auth()->user()->user_type_id == 2) {
            return redirect()->route('to-do'); 
        }
    }
}
