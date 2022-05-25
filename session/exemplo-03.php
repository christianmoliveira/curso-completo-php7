<?php

require_once "config.php";

// Retorna o ID único da sessão atual
echo session_id();
echo "<br />";

// Gera um novo ID de sessão
session_regenerate_id();

echo session_id();
