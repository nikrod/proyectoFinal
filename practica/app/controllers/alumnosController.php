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
		$Alumnox->nombres=$Input{"nombres"};
		$Alumnox->apellidos=$Input{"apellidos"};
		$Alumnox->rut=$Input{"rut"};
		$Alumnox->carrera_fk="1";
		$Alumnox->save();
	}

}
