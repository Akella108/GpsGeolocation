<?php

namespace App\Http\Controllers;

use App\Car;
use App\GpsTracker;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class GpsTrackerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() {
        $cars = Car::where('users_id', Auth::user()->id)->get();
        return view('accounts.tracker', ['cars' => $cars]);
    }
//where('users_id', '=', Auth::user()->id)->get('id');
    public function addTracker(Request $request) {

//        $cars = Car::where('users_id', Auth::user()->id)->get();

//        dd($car[0]['id']);
//        dd($asd);
//        $gpsTracker = GpsTracker::create($request->all());
        $gpsTracker = new GpsTracker();
        $gpsTracker->name = $request->name;
        $gpsTracker->imei = $request->imei;
        $gpsTracker->car_id = $request->car_id;
        $gpsTracker->save();

        return view('accounts.tracker');
    }


//    public function addTracker(Request $request) {
//        $gpsTracker = new GpsTracker();
//        $gpsTracker->name = $request->name;
//        $gpsTracker->imei = $request->imei;
//        $gpsTracker->cars_id_cars = $request->cars_id_cars;
//        $gpsTracker->save();
//        return view('accounts.tracker');
//    }
}
