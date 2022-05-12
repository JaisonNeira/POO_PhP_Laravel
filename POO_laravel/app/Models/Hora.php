<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hora extends Model
{
    use HasFactory;

    private $hora;
    private $minutos;
    private $segundos;

    public function __construct(){
        $this->hora = 0;
        $this->minutos = 0;
        $this->segundos = 0;
    }

    public function __construct2($hora, $minutos, $segundos)
    {
        $this->hora = $hora;
        $this->minutos = $minutos;
        $this->segundos = $segundos;
    }

    private function getHoras(){
        return $this->hora;
    }

    private function getMinutos(){
        return $this->minutos;
    }

    private function getSegundos(){
        return $this->segundos;
    }

    private function setHoras(array $hora){
        $this->horas = $hora;
    }

    private function setMinutos(array $minutos){
        $this->minutos = $minutos;
    }

    private function setSegundos(array $segundos){
        $this->segundos = $segundos;
    }

    public function setHora($hora, $minutos, $segundos)
    {
        $Hora = new Hora();

        $Hora->horas = $hora;
        $Hora->minutos = $minutos;
        $Hora->segundos = $segundos;

        return $Hora;
    }

    public function getHora(){
        
        return;
    }

}
