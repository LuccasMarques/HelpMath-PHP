<?php

class Tipo{

    public $id;
    public $titulo;
    public $texto;
    public $data;


function  __construct($titulo){
    $this->titulo = $titulo;
}
    //id
    public function getId(){
        return $this->id;
    }

    //titulo
    public function getTitulo(){
        return $this->titulo;
    }

    public function setTitulo($titulo){
        $this->titulo = $titulo;
    }


    //Texto
    public function getTexto(){
        return $this->texto;
    }

    public function setTexto($texto){
        $this->texto = $texto;
    }

    
    public function getData(){
        return $this->data;
    }
}