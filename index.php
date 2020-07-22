<?php

require __DIR__ . "/source/gerente/User.php";
require __DIR__ . "/source/vendedor/User.php";

$gerente = new \Source\Gerente\User;
$vendedor = new \Source\Vendedor\User;

var_dump(
    $gerente,
    $vendedor
);