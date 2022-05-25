<?php

class Endereco
{
    private $logradouro;
    private $numero;
    private $cidade;

    public function __construct(string $a, int $b, string $c)
    {
        $this->logradouro = $a;
        $this->numero = $b;
        $this->cidade = $c;
    }

    public function __toString()
    {
        return $this->logradouro . ", " . $this->numero . ", " . $this->cidade;
    }
}

$meuEndereco = new Endereco("Rua Nossa Senhora de Lourde", 52, "Ilhéus");