<?php

require_once "config.php";

$_SESSION['nome'] = "HCode";

// Limpa variáveis de sessão
//session_unset($_SESSION['nome']);

// ou

// Destrói todos os dados registrados na sessão
//session_destroy();