<?php

class EmpleadoC{
    public function RegistrarEmpleados(){
        if(isset($_POST["nombreR"])){
            $datosC = array("nombre"=>$_POST["nombreR"], "apellido"=>$_POST["apellidoR"], "email"=>$_POST["emailR"], "puesto"=>$_POST["puestoR"], "salario"=>$_POST["salarioR"]);
            
            $tableBD = "empleados";

            $respuesta = EmpleadosM::RegistrarEmpleadosM();
        
        }
    }

}