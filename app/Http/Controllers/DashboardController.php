<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        return view('v_dahsboard.main');
    }
    public function virtualtour(){
        return view('v_dahsboard.v_virtual_tour2');
    }
}