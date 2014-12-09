<?php

class ArchivosController extends \BaseController {

	protected function Index()
	{
		
	}
	public function get_add()
	{
		return View::make('Archivo.add');
	}

	public function post_add($ramo)
	{
		
		$path='uploads';
		$file=Input::file('archivo');
		$Input=Input::All();
		$archivo=$file->getClientOriginalName();
		$upload=$file->move($path,$archivo);

		if($upload)
		{
		$archivox=new Archivo;
		$archivox->nombre=$Input{'nombre'};
		$archivox->ruta=('upload/'. $archivo);
		$archivox->asignaturas_fk = $ramo;
		$archivox->save();
		}
		return View::make('Profesor.indexProfe');
	}
	

}
