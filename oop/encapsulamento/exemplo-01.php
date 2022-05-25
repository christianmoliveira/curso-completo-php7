<?php

class Pessoa
{
    public $nome = "Rasmus Lesdorf"; // Acessível para todos
    private $senha = "123456"; // Acessível somente dentro da classe
    protected $idade = 48; // Acessível somente dentro da classe e para os seus filhos (herança)

    public function verDados()
    {
        echo $this->nome . "<br />";
        echo $this->senha . "<br />";
        echo $this->idade . "<br />";
    }
}

class Programador extends Pessoa
{
    public function verDados()
    {
        echo get_class($this); // Classe da qual foi instanciada

        echo $this->nome . "<br />";
//        echo $this->senha . "<br />";
        echo $this->idade . "<br />";
    }
}