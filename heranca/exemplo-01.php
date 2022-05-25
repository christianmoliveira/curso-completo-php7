<?php

abstract class Documento
{
    private $numero;

    /**
     * @return mixed
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * @param mixed $numero
     */
    public function setNumero($numero): void
    {
        $this->numero = $numero;
    }
}

class CPF extends Documento
{
    public function validar(): bool
    {
        $numeroCpf = $this->getNumero();

        return true;
    }
}

// Como uma classe abstrata, Documento não pode ser instanciada
//$docOriginal = new Documento();

$doc = new CPF();
$doc->setNumero("11122233344");
echo $doc->validar();
echo "<br />";
echo $doc->getNumero();