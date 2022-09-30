<?php
//empezar sesion
session_start();
//destruir la session de usurio
session_destroy();
//regresa al index al salir de sistema
header('location:../index.php');