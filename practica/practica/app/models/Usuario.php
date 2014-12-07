<?php

namespace App\Modelo;

class Usuario extends \Eloquent {

    protected $table = "usuarios";
    public $timestamps = false;



public function tipousuario() {
	//$rut = '76063397';
    $rut = (string) $this->rut . \App\RutUtils::dv($this->rut);
       
        $service_url = "https://sepa.utem.cl/saap-rest/api/docente/$rut";
        $curl = curl_init($service_url);
        curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
        curl_setopt($curl, CURLOPT_HEADER, 0);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($curl, CURLOPT_USERPWD, '1-9:cdd76843b09fe09ab11876ab7986214e52e00791');
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

        $curl_response = curl_exec($curl);
        if ($curl_response === false) {
            $error = curl_error($curl);
            \Log::error("Error al procesar curl: '$error'");

            curl_close($curl);
            exit();
        } else {
            curl_close($curl);
            if($curl_response)
            	return 'profe';
            else
            	return 'alumno';
            return $curl_response;

            $salida = json_decode($curl_response, true);
            \Log::info("Salida: " . var_export($salida, true) . " '$curl_response'");

            $respuesta = (bool) $salida['respuesta'];
            $mensaje = (string) $salida['mensaje'];

            if ($respuesta) {

                // Guardo Acceso
                $rut = \App\RutUtils::rut($username);
                \Log::info("Rut: $username / $rut");
                $usuario = \App\Modelo\Usuario::where('rut', '=', $rut)->first();
                if ($usuario instanceof \App\Modelo\Usuario) {
                    \Log::info("Usuario encontrado: {$usuario->rut}");
                } else {
                    \Log::warning("Usuario no encontrado -> se creará uno");
                    $usuario = new \App\Modelo\Usuario();
                    $usuario->rut = $rut;
                    $usuario->nombre = "";
                    $usuario->save();
                }

                \Log::info("Usuario {$usuario->rut} autenticado exitosamente");

                $resultado = true;
            } else {
                \Log::error("Servicio REST respondió: '$mensaje'");
            }
        }
        return (bool) $resultado;
    }

}
