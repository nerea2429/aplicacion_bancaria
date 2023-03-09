<?php 
class Usuario{

    //atributo
    public $nombre;
    public $apellidos;
    public $direccion;
    public $email;
    public $dni;
    public $contraseña;

    //constructor
    public function __construct($nombre,$apellidos,
    $direccion,$email,$dni,$contraseña){
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->direccion = $direccion;
        $this->email = $email;
        $this->dni = $dni;
        $this->contraseña = $contraseña;
    }





}






?>