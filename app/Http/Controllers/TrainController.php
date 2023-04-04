<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Models\Train;

class TrainController extends Controller
{
    public function index()
    {
        $trains = Train::whereDate('departure_time', Carbon::today())->get();
        return view('home', compact('trains'));
    }
}

