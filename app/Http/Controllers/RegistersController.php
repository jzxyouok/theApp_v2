<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class RegistersController extends Controller
{
    public function create() {
    	return view('register.addregister');
    }
}
