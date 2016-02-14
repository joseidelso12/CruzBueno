<?php
class Vehiculo{

    public $matricula;
    private $color;
    protected $encendido;

    public function encender(){
        $this->encendido = true;
        echo 'Vehiculo encendido <br />';
    }

    public function apagar(){
        $this->encendido = false;
        echo 'Vehiculo apagado <br />';
    }
}

class Camion extends Vehiculo{

    private $carga;

    public function cargar($cantidad_a_cargar){
        $this->carga = $cantidad_a_cargar;
        echo 'Se ha cargado cantidad: '. $cantidad_a_cargar. ' <br />';
    }

    public function verificar_encendido(){
        if ($encendido == true){
            echo 'Camion encendido <br />';
        }else{
            echo 'Camion apagado <br />';
        }
    }
}

class Autobus extends Vehiculo{

    private $pasajeros;

    public function subir_pasajeros($cantidad_pasajeros){
        $this->pasajeros = $cantidad_pasajeros;
        echo 'Se han subido '.$cantidad_pasajeros.' pasajeros <br />';
    }

    public function verificar_encendido(){
        if ($encendido == true){
            echo 'Autobus encendido <br />';
        }else{
            echo 'Autobus apagado <br />';
        }
    }
}


$camion = new Camion();
$camion->encender();
// encender() es un metodo de la clase padre
// pero al ser un metodo publico es herado por la clase hijo
// en este caso Camion y por lo tanto puede ser llamado desde un
// objeto de Camion
$camion->cargar(10);
$camion->verificar_encendido();
$camion->matricula = 'MDU - 293';
// Lo mimsmo que ocurre con el metodo encender() se
// aplica para la propiedad de matricula y el metodo
// apagar. Son metodos y propiedades publicas
// por lo tanto el hijo las hereda sin ningun problema o limitacion
$camion->apagar();

$autobus = new Autobus();
$autobus->encender();
$autobus->subir_pasajeros(5);
$autobus->verificar_encendido();
$autobus->matricula = 'KDF - 923';
$autobus->apagar();

// Este codigo deberia imprimir la siguiente salida

/*
Vehiculo encendido
Se ha cargado cantidad: 10
Camion apagado
Vehi­culo apagado
Vehiculo encendido
Se han subido 5 pasajeros
Autobus apagado
Vehiculo apagado
*/

?>