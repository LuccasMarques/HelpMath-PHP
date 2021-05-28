<?php

class Fases{

    public $idfase;
    public $fase;
    public $expfase;
    public $resultadofase;

    //id
    public function getIdfase(){
        return $this->idfase;
    }

    //nome
    public function getFase(){
        return $this->Fase;
    }

    public function setFase($fase){
        $this->fase = $fase;
    }


    //nome
    public function getExpfase(){
        return $this->expfase;
    }

    public function setExpfase($expfase){
        $this->expfase = $expfase;
    }


    //nome
    public function getResultado(){
        return $this->resultado;
    }

    public function setResultado($Resultado){
        $this->resultado = $resultado;
    }

    
}