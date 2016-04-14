<?php

namespace App\Http\Controllers;

use App\GpsTracker;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Car;
use Illuminate\Support\Facades\Auth;

class AccountController extends Controller
{
//    public function index() {
//        $cars = Car::all();
//        //        $gpsTracker = GpsTracker::all();
//        return view('account', ['cars' => $cars]);
//    }

    public function index() {

        return view('account');
    }
}
