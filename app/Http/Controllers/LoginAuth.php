<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// use hash;
// use session;
// use App\Models\user;
// use Illuminate\Support\Facades\Auth;

class LoginAuth extends Controller
{
    public function index()
    {
        return view('loginAuth');
    } //
   // return view('loginAuth');
    
}
