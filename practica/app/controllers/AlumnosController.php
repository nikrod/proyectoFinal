<?php

class AlumnosController extends \BaseController {


	public function getIndex()
	{
		return View::make('Alumnos.indexAlumno');
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return $this->layout->content = View::make('Alumnos.add');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
			$userdata = array(
            'nombres' => Input::get('nombres'),
            'apellidos' => Input::get('apelidos'),
            'rut' => Input::get('rut'),
            'carrera_fk'=>Input::get('1')
        );
            $rut = \App\RutUtils::rut($userdata['rut']);

        $rules = array(
            'rut' => 'Required',
            'nombres' => 'Required',
            'apellidos' => 'Required',
            'carrera_fk' => 'Required'
        );

                return $this->layout->content = View::make('Profesor.indexProfe');
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
