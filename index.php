<?php

require __DIR__.'/App/autoload.php';

use App\Controller\ClienteController;
use App\Model\Cliente;

$obj = new ClienteController();
$obj->listar();
