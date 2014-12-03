<?php

class loginController extends BaseController {


	protected $layout='layouts.master';

	public function getIndex()
	{
		return $this->layout->content = View::make('login.login');
	}

	public function post_index()
	{
        	$userdata = array(
            'id' => Input::get('rut'),
            'rut' => Input::get('rut'),
            'password' => Input::get('password')
        );

        $rules = array(
            'rut' => 'Required',
            'password' => 'Required'
        );

        if (Auth::attempt($userdata)) {
                // Redirect to homepage
                return "hola";
        }
        else
        {
        	return "no hola";
        	return View::make("Alumnos.add");
        }
        

	}


	public function showProfesor()
	{
		return $this->layout->content = View::make('test.profesor');
	}


		public function showAlumno()
	{
		return $this->layout->content = View::make('test.alumno');
	}


}
