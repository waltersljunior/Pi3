<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdmController extends Controller
{
    //
    public function dashboard()
    {
        // if (Auth::check() === true) {

        // }
        return view('admin.dashboard');
    }
}
