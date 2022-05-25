<?php

require_once "config.php";

if (isset($_SESSION['nome']))
    echo $_SESSION['nome'];