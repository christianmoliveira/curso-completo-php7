<?php

class DelRey extends Automovel
{
    public function acelerar($velocidade) {
        echo "O veículo acelerou {$velocidade} Km/h";
    }

    public function frenar($velocidade) {
        echo "O veículo frenou até {$velocidade} Km/h";
    }

    public function trocarMarcha($marcha) {
        echo "O veículo engatou a marcha {$marcha}";
    }
}