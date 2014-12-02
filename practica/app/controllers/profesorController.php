<?php

class profesorController extends Controller {

	public function getIndex()
	{
		return View::make('profesor');
	}
	public function get_add()
	{
		return View::make('Profesor.add');
	}
	public function get_post()
	{

		$Input=Input::All();
		$Prof=new Profesor;
		$Prof->Rut_Prof=$Input{"Rut_Prof"};
		$Prof->Clave=$Input{"Clave"};
		$Prof->Nombre=$Input{"Nombre"};
		$Prof->Apellido=$Input{"Apellido"};
		$Prof->Departamento_Cod_Dpto=$Input{"Departamento_Cod_Dpto"};
		$Prof->save();
	}

}
