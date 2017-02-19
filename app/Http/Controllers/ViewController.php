<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Http\Controllers\Input;


use App\Http\Requests;
use App\Http\Controllers\Controller;

class ViewController extends Controller
{
    public function index() {
        
    }
    /*----------------------------*/
    public function getQuienSomos() {
        return view('quienSomos');
    }
    
    public function postQuienSomos() {
        return view('quienSomos');        
    }
    /*----------------------------*/
    public function getMision() {
        return view('quienSomos');
    }
    
    public function postMision() {
        return view('quienSomos');        
    }
    /*----------------------------*/
    public function getVision() {
        return view('quienSomos');
    }
    
    public function postVision() {
        return view('quienSomos');        
    }
    /*----------------------------*/
    public function getEstrucOrg() {
        return view('quienSomos');
    }
    
    public function postEstrucOrg() {
        return view('quienSomos');        
    }
    /*----------------------------*/
    public function getNoticias() {
        return view('noticias');
    }
    public function postNoticias() {
        return view('noticias');
    }
    /*----------------------------*/
    public function getSugerencia() {
        return view('contacto');
    }
    public function postSugerencia() {
        return view('contacto');
    }
    /*----------------------------*/
    public function getRegistro() {
        return view('registro');
    }
    public function postRegistro() {
        return view('registro');
    }
    /*----------------------------*/
    public function getOlvidoClave() {
        return view('olvidoClave');
    }
    public function postOlvidoClave() {
        return view('olvidoClave');
    }
    /*----------------------------*/
    public function getMasNoticias() {
        return view('seguirLeyendoNoticias');
    }
    public function postMasNoticias() {
        return view('seguirLeyendoNoticias');
    }
    /*----------------------------*/
    public function getRegistroExitoso() {
        return view('registroExito');
    }
    public function postRegistroExitoso() {
        return view('registroExito');
    }
    /*----------------------------*/
    public function getConfirmarCorreo() {
        return view('mensajeOlvidoClave');
    }
    public function postConfirmarCorreo() {
        return view('mensajeOlvidoClave');
    }
    /*----------------------------*/
    public function getModificarClaveExito() {
        return view('modificarClaveExito');
    }
    public function postModificarClaveExito() {
        return view('modificarClaveExito');
    }
    /*----------------------------*/
    public function getInvestigacion() {
        return view('investigacion');
    }
    public function postInvestigacion() {
        return view('investigacion');
    }
    /*----------------------------*/
    public function getMasInvestigacion() {
        return view('seguirLeyendoInvestigacion');
    }
    public function postMasInvestigacion() {
        return view('seguirLeyendoInvestigacion');
    }
    /*----------------------------*/
    public function getPostgrado() {
        return view('postgrado');
    }
    public function postPostgrado() {
        return view('postgrado');
    }
    /*----------------------------*/
    public function getMasPostgrado() {
        return view('seguirLeyendoPostgrado');
    }
    public function postMasPostgrado() {
        return view('seguirLeyendoPostgrado');
    }
    /*----------------------------*/
    public function getPregrado() {
        return view('pregrado');
    }
    
    public function postPregrado() {
        return view('pregrado');        
    }
    /*----------------------------*/
    public function getEvento() {
        return view('eventos');
    }
    
    public function postEvento() {
        return view('eventos');        
    }
    /*----------------------------*/
    public function getCreadores() {
        return view('creadores');
    }
    
    public function postCreadores() {
        return view('creadores');        
    }
    /*----------------------------*/
    public function getErrorSesion() {
        return view('errorSesion');
    }
    
    public function postErrorSesion() {
        return view('errorSesion');        
    }
}
