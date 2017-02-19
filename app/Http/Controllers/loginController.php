<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Contracts\Auth\Guard; //
use App\Http\Requests\LoginRequest; //
use Auth; //
use Session; //
use Redirect; //

class loginController extends Controller
{
    protected $auth;

    public function __construct(Guard $auth) {
        $this->auth = $auth;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(LoginRequest $request) {
        if (Auth::attempt(['correo' => $request['correo'], 'password' => $request['password']])) {
            switch ($this->auth->user()->tipo) {
                case 'ad':
                    return view('admin');
                    break;
                case 'in':
                    return view('interno');
                    break;
                case 'co':
                    return view('comunitario');
                    break;
            }
        }
        Session::flash('message-errors','Combinación de credenciales incorrectas');
        return Redirect::to('/');
    }

}
