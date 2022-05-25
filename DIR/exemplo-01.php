<?php

$name = "images";

if (! is_dir($name)) {
    mkdir($name);
} else {
    echo "Diretório {$name} já existe";
}