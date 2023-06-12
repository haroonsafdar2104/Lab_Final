<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GaurantorController extends Controller
{
    //
    public function index(){
        return view('Gaurantor.read');
    }
}
