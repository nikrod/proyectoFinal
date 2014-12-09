<?php


class Asignatura extends Eloquent{

	protected $table = 'asignaturas';
	public $primaryKey = 'pk';

    public function archivos()
    {
        return $this->hasMany('Archivo', 'asignaturas_fk', 'pk');
    }
	
}
