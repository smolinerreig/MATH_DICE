<?php

class Jugador {

    public $nombre;
    public $apellidos;
    public $edad;
    public $puntuacion;

    function __construct($nombre, $apellidos, $edad, $puntuacion) {
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->edad = $edad;
        $this->puntuacion = $puntuacion;
    }

    function getNombre() {
        return $this->nombre;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function getApellidos() {
        return $this->apellidos;
    }

    function setApellidos($apellidos) {
        $this->apellidos = $apellidos;
    }

    function getEdad() {
        return $this->edad;
    }

    function setEdad($edad) {
        $this->edad = $edad;
    }

    function getPuntuacion() {
        return $this->puntuacion;
    }

    function setPuntuacion($puntuacion) {
        $this->puntuacion = $puntuacion;
    }

    function addPoints($points) {
        $this->puntuacion = $this->puntuacion + $points;
    }

}
