<?php

$json = '[
  {
        "nome": "Carla",
        "idade": 25
  },
  {
        "nome": "Charlie Brown",
        "idade": 40
  }
]';

$data = json_decode($json, true);
print_r($data);