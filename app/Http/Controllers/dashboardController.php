<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dashboardController extends Controller
{
    //index action
    public function index()
    {
        return view('dashboard.index');
    }
}
