<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard; //
use Session; // 
use Auth; //

class Redireccion
{
    protected $auth;

    public function __construct(Guard $auth) {
        $this->auth = $auth;
    }
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next) {
        if ($this->auth->guest()) {
            if ($request->ajax()) {
                return response('Unauthorized.', 401);
            } else {
                if (Auth::attempt(['correo' => $request['correo'], 'password' => $request['password']])) { //que esta validacion quede para saber si esta ingresando a su pantalla
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
            }
        }
        return $next($request);
    }
}
