<?php

class Pessoa
{
    // Atributo com encapsulamento
    public $nome;

    // Método
    public function falar()
    {
        return "Meu nome é {$this->nome}";
    }
}

$glaucio = new Pessoa();
$glaucio->nome = "Glaucio Daniel";
echo $glaucio->falar();