<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/



/*
Route::get('login','Auth\AuthController@getLogin');

Route::post('login',[
	'as'  =>'login',
	'uses'=>'Auth\AuthController@postLogin']);

Route::post('login',[
	'as'  =>'login',
	'uses'=>'ViewController@index']);

Route::get('auth/logout','Auth\AuthController@getLogout');
*/

Route::resource('login','loginController'); //funcional


Route::get('/', [ 						//nombre de la URL (la que se puede ver en el navegador)
	'uses' => 'HomeController@index',	//nombre del controlador
	'as'   => 'inicio'					//nombre de la ruta (alias que invoca la ruta)
]);
//Route::post('inicio', 'HomeController@index');


Route::get('quienSomos', [						//nombre de la URL (la que se puede ver en el navegador)
	'uses' => 'ViewController@getQuienSomos', 	//nombre del controlador
	'as'   => 'quienSomos' 						//nombre de la ruta (alias que invoca la ruta)
]);
//Route::post('quienSomos', 'ViewController@postQuienSomos');


Route::get('mision', [						//nombre de la URL (la que se puede ver en el navegador)
	'uses' => 'ViewController@getMision', 	//nombre del controlador
	'as'   => 'mision' 						//nombre de la ruta (alias que invoca la ruta)
]);
//Route::post('mision', 'ViewController@postMision');


Route::get('vision', [						//nombre de la URL (la que se puede ver en el navegador)
	'uses' => 'ViewController@getVision', 	//nombre del controlador
	'as'   => 'vision' 						//nombre de la ruta (alias que invoca la ruta)
]);
//Route::post('vision', 'ViewController@postVision');


Route::get('estructura-organizativa', [			//nombre de la URL (la que se puede ver en el navegador)
	'uses' => 'ViewController@getEstrucOrg', 	//nombre del controlador
	'as'   => 'estrucOrg' 						//nombre de la ruta (alias que invoca la ruta)
]);
//Route::post('estructura-organizativa', 'ViewController@postEstrucOrg');


Route::get('noticias', [						//nombre de la URL (la que se puede ver en el navegador)
	'uses' => 'ViewController@getNoticias',		//nombre del controlador
	'as'   => 'noticias'						//nombre de la ruta (alias que invoca la ruta)
]);
//Route::post('noticas', 'ViewController@postNoticias');


Route::get('sugerencias', [						//nombre de la URL (la que se puede ver en el navegador)
	'uses' => 'ViewController@getSugerencia',	//nombre del controlador
	'as'   => 'contacto'						//nombre de la ruta (alias que invoca la ruta)
]);
//Route::post('sugerencias', 'ViewController@postSugerencia');


Route::get('registro', [						//nombre de la URL (la que se puede ver en el navegador)
	'uses' => 'ViewController@getRegistro',		//nombre del controlador
	'as'   => 'registro'						//nombre de la ruta (alias que invoca la ruta)
]);
//Route::post('registro', 'ViewController@postRegistro');


Route::get('olvido-contrasena', [					//nombre de la URL (la que se puede ver en el navegador)
	'uses' => 'ViewController@getOlvidoClave',	//nombre del controlador
	'as'   => 'olvidoClave'						//nombre de la ruta (alias que invoca la ruta)
]);
//Route::post('olvido-contrasena', 'ViewController@postOlvidoClave');


Route::get('seguir-leyendo-noticias', [			//nombre de la URL (la que se puede ver en el navegador)
	'uses' => 'ViewController@getMasNoticias',	//nombre del controlador
	'as'   => 'masNoticias'						//nombre de la ruta (alias que invoca la ruta)
]);
//Route::post('seguir-leyendo-noticias', 'ViewController@postMasNoticias');


Route::get('registro-exitoso', [					//nombre de la URL (la que se puede ver en el navegador)
	'uses' => 'ViewController@getRegistroExitoso',	//nombre del controlador
	'as'   => 'registroExito'						//nombre de la ruta (alias que invoca la ruta)
]);
//Route::post('registro-exitoso', 'ViewController@postRegistroExitoso');


Route::get('confirmar-correo', [					//nombre de la URL (la que se puede ver en el navegador)
	'uses' => 'ViewController@getConfirmarCorreo',	//nombre del controlador
	'as'   => 'confirmarCorreo'						//nombre de la ruta (alias que invoca la ruta)
]);
//Route::post('confirmar-correo', 'ViewController@postConfirmarCorreo');


Route::get('modificacion-exitosa', [					//nombre de la URL (la que se puede ver en el navegador)
	'uses' => 'ViewController@getModificarClaveExito',	//nombre del controlador
	'as'   => 'modificarClaveExito'						//nombre de la ruta (alias que invoca la ruta)
]);
//Route::post('modificacion-exitosa', 'ViewController@postModificarClaveExito');


Route::get('investigacion', [						//nombre de la URL (la que se puede ver en el navegador)
	'uses' => 'ViewController@getInvestigacion',	//nombre del controlador
	'as'   => 'investigacion'						//nombre de la ruta (alias que invoca la ruta)
]);
//Route::post('investigacion', 'ViewController@postInvestigacion');


Route::get('seguir-leyendo-investigacion', [			//nombre de la URL (la que se puede ver en el navegador)
	'uses' => 'ViewController@getMasInvestigacion',		//nombre del controlador
	'as'   => 'masInvestigacion'						//nombre de la ruta (alias que invoca la ruta)
]);
//Route::post('seguir-leyendo-investigacion', 'ViewController@postMasInvestigacion');


Route::get('postgrado', [						//nombre de la URL (la que se puede ver en el navegador)
	'uses' => 'ViewController@getPostgrado',	//nombre del controlador
	'as'   => 'postgrado'						//nombre de la ruta (alias que invoca la ruta)
]);
//Route::post('postgrado', 'ViewController@postPostgrado');


Route::get('seguir-leyendo-postgrado', [			//nombre de la URL (la que se puede ver en el navegador)
	'uses' => 'ViewController@getMasPostgrado',		//nombre del controlador
	'as'   => 'masPostgrado'						//nombre de la ruta (alias que invoca la ruta)
]);
//Route::post('seguir-leyendo-postgrado', 'ViewController@postMasPostgrado');


Route::get('pregrado', [						//nombre de la URL (la que se puede ver en el navegador)
	'uses' => 'ViewController@getPregrado',		//nombre del controlador
	'as'   => 'pregrado'						//nombre de la ruta (alias que invoca la ruta)
]);
//Route::post('pregrado', 'ViewController@postPregrado');


Route::get('eventos', [						//nombre de la URL (la que se puede ver en el navegador)
	'uses' => 'ViewController@getEvento',	//nombre del controlador
	'as'   => 'evento'						//nombre de la ruta (alias que invoca la ruta)
]);
//Route::post('eventos', 'ViewController@postEvento');


Route::get('creadores', [						//nombre de la URL (la que se puede ver en el navegador)
	'uses' => 'ViewController@getCreadores',	//nombre del controlador
	'as'   => 'creadores'						//nombre de la ruta (alias que invoca la ruta)
]);
//Route::post('creadores', 'ViewController@postCreadores');


Route::get('error-sesion', [					//nombre de la URL (la que se puede ver en el navegador)
	'uses' => 'ViewController@getErrorSesion',	//nombre del controlador
	'as'   => 'errorSesion'						//nombre de la ruta (alias que invoca la ruta)
]);
//Route::post('error-sesion', 'ViewController@postErrorSesion');
?>