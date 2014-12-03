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

       



        $validator = Validator::make($userdata, $rules);

        if ($validator->passes()) {
            unset($userdata['rut']);

            // Try to log the user in.
            if (Auth::attempt($userdata)) {
                // Redirect to homepage
                 return "hola";
            } else {
                // Redirect to the login page.
                return "no hola";
            }
        }

        // Something went wrong.
        return Redirect::to('login')->with('login_errors', true)->withErrors($validator)->withInput(Input::except('password'));
    }

    public function getLogout() {
        // Log out
        Auth::logout();

        // Redirect to homepage
        return Redirect::to('login')->with('exito', 'Se ha deslogueado exitosamente');
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
