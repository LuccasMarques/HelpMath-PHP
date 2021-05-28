<?php

class Conta{

    public $id;
    public $email;
    public $password;
    public $nome;
    public $idade;
    public $cidade;
    public $criadoEm;
    public $editadoEm;
    public $image;
    public $exp;

function  __construct($email,$password,$nome,$idade,$cidade,$image){
    $this->email = $email;
    $this->setPassword($password);
    $this->nome = $nome;
    $this->idade = $idade;
    $this->cidade = $cidade;
    $this->image = $image;
}
    //id
    public function getId(){
        return $this->id;
    }

    //email
    public function getEmail(){
        return $this->email;
    }

    public function setEmail($email){
        $this->email = $email;
    }

    //password
    public function getPassword(){
        return $this->password;
    }

    public function setPassword($password){
        //formatar senha
        $hash = password_hash($password, PASSWORD_DEFAULT);
        $this->password = $hash;
    }

    //nome
    public function getNome(){
        return $this->nome;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }


    public function getImage(){
        return $this->image;
    }

    public function setImage($image){
        $this->image = $image;
    }

    public function getIdade(){
        return $this->idade;
    }

    public function setIdade($idade){
        $this->idade = $idade;
    }

    public function getCidade(){
        return $this->cidade;
    }

    public function setCidade($cidade){
        $this->cidade = $cidade;
    }

    //quando criado
    public function getCriadoEm(){
        return $this->criadoEm;
    }


    //quando editado
    public function getEditadoEm(){
        return $this->editadoEm;
    }

    public function setEditadoEm($editadoEm){
        $this->editadoEm = $editadoEm;
    }


    //Experiência do usuário
    public function getExp(){
        return $this->exp;
    }

    public function setExp($exp){
        $this->exp = $exp;
    }

}