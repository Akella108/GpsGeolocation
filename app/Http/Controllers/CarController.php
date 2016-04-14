<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Car;
use App\User;
use Illuminate\Support\Facades\Auth;

class CarController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() {
        $cars = Car::where('users_id', Auth::user()->id)->get();
        return view('accounts.car', ['cars' => $cars]);
    }

    public function addCar(Request $request) {
        $car = Car::create($request->all());
        return view('accounts.car');
    }

    public function editCar($id)
    {
        $car = Car::where('id', $id)->get();
        return view('accounts.editCar', ['car' => $car]);
    }

    public function updateCar(Request $request, $id)
    {
        $car = Car::find($id);
        $car->brand_name = $request->brand_name;
        $car->model = $request->model;
        return redirect('accounts.car');
    }

    public function viewCar($id)
    {

    }

//    public function addCar(Request $request) {
//        $car = new Car;
//        $car->brand_name = $request->brand_name;
//        return view('accounts.car');
//    }

}
