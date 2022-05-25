<?php

// Funciona como um contrasto para quem implementar essa interface
interface Veiculo
{
    public function acelerar($velocidade);
    public function freiar($velocidade);
    public function trocarMarcha($marcha);
}

class Civic implements Veiculo
{
    public function acelerar($velocidade)
    {
        // TODO: Implement acelerar() method.
    }

    public function freiar($velocidade)
    {
        // TODO: Implement freiar() method.
    }

    public function trocarMarcha($marcha)
    {
        // TODO: Implement trocarMarcha() method.
    }
}