<?php

$pessoa = [];

$pessoa[] = array(
    'nome' => 'Carla',
    'idade' => 25
);

$pessoa[] = array(
    'nome' => 'Charlie Brown',
    'idade' => 40
);

echo json_encode($pessoa);