<?php

class Documento
{
    private $numero;

    /**
     * @return mixed
     */
    public function getNumero(): string
    {
        return $this->numero;
    }

    /**
     * @param mixed $numero
     */
    public function setNumero(string $numero): void
    {
        if (self::validaCPF($numero)) // ou Documento::validaCPF()
            $this->numero = $numero;
        else
            throw new Exception("CPF inválido");
    }

    // Pode ser acessada sem necessidade de instanciar a classe
    static function validaCPF($cpf): bool
    {
        if (empty($cpf)) {
            return false;
        }

        return true;
    }
}

$cpf = new Documento();
$cpf->setNumero("12345678900");
echo $cpf->getNumero();