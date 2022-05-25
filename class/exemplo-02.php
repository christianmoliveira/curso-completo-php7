<?php

class Carro
{
    private $modelo;
    private $motor;
    private $ano;

    /**
     * @return mixed
     */
    public function getModelo(): string
    {
        return $this->modelo;
    }

    /**
     * @param mixed $modelo
     */
    public function setModelo($modelo): void
    {
        $this->modelo = $modelo;
    }

    /**
     * @return mixed
     */
    public function getMotor(): string
    {
        return $this->motor;
    }

    /**
     * @param mixed $motor
     */
    public function setMotor($motor): void
    {
        $this->motor = $motor;
    }

    /**
     * @return mixed
     */
    public function getAno(): int
    {
        return $this->ano;
    }

    /**
     * @param mixed $ano
     */
    public function setAno($ano): void
    {
        $this->ano = $ano;
    }

    public function exibir(): array
    {
        return array(
          "modelo" => $this->getModelo(),
          "motor" => $this->getMotor(),
          "ano" => $this->getAno()
        );
    }
}

$fiat = new Carro();
$fiat->setModelo("Uno Mille");
$fiat->setMotor("1.0");
$fiat->setAno(1995);

print_r($fiat->exibir());