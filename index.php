<?php

require_once "Controladores/rutasC.php";
require_once "Controladores/AdminC.php";
require_once "Controladores/Empleadosc.php";

require_once "Modelos/rutasM.php";
require_once "Modelos/AdminM.php";
require_once "Modelos/EmpleadosM.php";

$rutas = new RutasControlador();
$rutas -> Plantilla();


