<?php
include 'modelos/jugador.php';
include 'modelos/juego.php';
session_start();
if (!isset($_SESSION['jugador'])) {
        header('Location: login.php');
}
?>