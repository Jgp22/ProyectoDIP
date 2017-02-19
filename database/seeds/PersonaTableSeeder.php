<?php

use Illuminate\Database\Seeder;

	class PersonaTableSeeder extends Seeder {

		public function run() {

			\DB::table('persona')->insert(array (
				'nacionalidad' => 'V',
				'cedula' => '24218005',
				'nombre' => 'José',
				'apellido' => 'Pacheco',
				'FechaNacimiento' => '1995/08/09',
				'sexo' => 'M',
				'correo' => 'jose.gre@hotmail.es',
				'clave' => \Hash::make('123456'),
				'estado' => 'act',
				'tipo' => 'ad'
			));
		}
	}
?>