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
            $rut = \App\RutUtils::rut($userdata['rut']);

        $rules = array(
            'rut' => 'Required',
            'password' => 'Required'
        );

        if (Auth::attempt($userdata)) {
            $user = \App\Modelo\Usuario::whereRut($rut)->first();
               if($user->tipousuario()=='alumno')
                   return View::make("Alumnos.add");
               else
                    return View::make("Profesor.add");
        }
        else
        {
        	//return "no hola";
        	//return View::make("Alumnos.add");
            return Redirect::to('login')->with('login_errors', true);
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
