<?php
//Fin de la session deconnexion et redirection vers la page d'index
session_start();

session_destroy();

header("location:index.php");