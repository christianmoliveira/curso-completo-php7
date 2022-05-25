<?php

abstract class Animal
{
    public function comer()
    {
        return "Comendo";
    }

    public function mover()
    {
        return "Se movendo";
    }
}

class Cachorro extends Animal
{
    // Uma nova forma/comportamento para a função falar()
    public function falar()
    {
        return "Late";
    }
}