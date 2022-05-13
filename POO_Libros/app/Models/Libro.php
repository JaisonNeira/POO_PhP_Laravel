<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    use HasFactory;


    var $titulo;
    var $autor;
    var $Npaginas;
    var $calificacion;

    public function __construct($titulo, $autor, $Npaginas, $calificacion){
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->Npaginas = $Npaginas;
        $this->calificacion = $calificacion;
    }


    function setTitulo($titulo){
        $this->titulo = $titulo;
    }

    function setAutor($autor){
        $this->autor = $autor;
    }

    function setNpaginas($Npaginas){
        $this->Npaginas = $Npaginas;
    }

    function setCalificacion($calificacion){
        $this->calificacion = $calificacion;
    }

    function getTitulo(){
        return $this->titulo;
    }

    function getAutor(){
        return $this->Npaginas;
    }

    function getNpaginas(){
        return $this->Npaginas;
    }

    function getCalificacion(){
        return $this->calificacion;
    }

}
