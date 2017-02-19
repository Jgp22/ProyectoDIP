<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
	public function __construct() {
		//$this->middleware('auth'); //si se desea cambiar el nombre, tambien cambiar en app/Http/kernel.php
	}
    public function index() {
    	return view('index');
    }
}
