<?php

    function conexion(){

        $servidor = 'localhost';
        $usuario = 'root';
        $password='';
        $bd = 'loginsuits';
        $puerto= 3306;

        $conexion = mysqli_connect($servidor,$usuario,$password,$bd,$puerto);

        return $conexion;

    }