<?php

    include "./conexion.php";
    $conexion =conexion();

    $user= $_POST ['usuario']; //es el control html de form
    $pass = $_POST ['password'];

    //por ley los password deben estra encritados
    $pass =sha1($pass);

    //escribir consulta o query
    $sql ="INSERT into t_usuarios (usuario, password)
    values ('$user' , '$pass')";

    //ejecutar setencias
    $respuesta=mysqli_query($conexion,$sql);

//ejecutar setencias
    if ($respuesta) {
        header('location:../index.php');
    } else {
        echo "No se puede hacer nada :(";
    }
    

    