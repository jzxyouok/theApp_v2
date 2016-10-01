<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class StoresController extends Controller
{
    public function create() {
    	return view('store.addstore');
    }
}
