<?php


/* Este ejercicio lo hice con el localhost de xaamp */

class Hora  {
    private $horas;
    private $minutos;
    private $segundos;

    public function __construct($hora = "00", $minuto = "00", $segundo = "00") {
        $this->horas = $hora;
        $this->minutos = $minuto;
        $this->segundos = $segundo;
    }

    public function __construct2($hora, $minuto, $segundo){
        $this->horas = $hora;
        $this->minutos = $minuto;
        $this->segundos = $segundo;

        $this->validar();
    }

    private function validar() {

        /* Validadmos si algun argumento no cumple con los limites */
        if($this->horas < 0 || $this->horas > 23) {
            $hvalid = false;
        }
        else {
            $hvalid = true;
        }

        if($this->minutos < 0 || $this->minutos > 59) {
            $mvalid = false;
        }
        else {
            $mvalid = true;
        }

        if($this->segundos < 0 || $this->segundos > 59) {
            $svalid = false;
        }
        else {
            $svalid = true;
        }

        /* Si alguno no cumple todos se establece en 0 */
        if(!$hvalid || !$mvalid || !$svalid) {
            $this->horas = "00";
            $this->minutos = "00";
            $this->segundos = "00";
        }
    }

    public function setHoras($hora){
        $this->horas = $hora;
    }

    public function setMinutos($minuto){
        $this->minutos = $minuto;
    }

    public function setSegundos($segundo){
        $this->segundos = $segundo;
    }

    public function getHoras(){
        return $this->horas;
    }

    public function getMinutos(){
        return $this->minutos;
    }

    public function getSegundos(){
        return $this->segundos;
    }

    public function setHora($hora, $minuto, $segundo) {
        $this->horas = $hora;
        $this->minutos = $minuto;
        $this->segundos = $segundo;

        $this->validar();
    }

    public function getHora() {
        echo 'Hora: '.$this->horas.':'.$this->minutos.':'.$this->segundos, "\n";
    }

    public function imprimirHora() {
        echo 'Hora: '.$this->horas.':'.$this->minutos.':'.$this->segundos;
    }

}
$hora = new Hora();
$hora->setHora("7","20","50");
$hora->getHora();
?>
