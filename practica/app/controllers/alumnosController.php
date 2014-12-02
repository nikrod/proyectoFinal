<?php

class alumnosController extends Controller {

	public function getIndex()
	{
		return View::make('indexAlumno');
	}

	public function get_add()
	{
		return View::make('Alumnos.add');
	}

	public function post_add()
	{
		$Input=Input::All();
		$Alumnox=new Alumno;
		$Alumnox->Rut_Alum=$Input{"Rut_Alum"};
		$Alumnox->Clave=$Input{"Clave"};
		$Alumnox->Nombre=$Input{"Nombre"};
		$Alumnox->Apellido=$Input{"Apellido"};
		$Alumnox->Carrera_Cod_Carrera=$Input{"Carrera_Cod_Carrera"};
		$Alumnox->save();
	}

}
