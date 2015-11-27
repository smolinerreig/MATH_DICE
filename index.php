<?php

include 'parciales/include.php';
?>

<?php

if ($_GET['s'] == 'down') {
    session_destroy();
    header('Location: login.php');
} else {

    if ($_POST['nombre'] && $_POST['apellidos'] && $_POST['edad']) {
        $jugador = new Jugador($_POST['nombre'], $_POST['apellidos'], $_POST['edad'], 0);
        $_SESSION['jugador'] = $jugador;
    } else {
        header('Location: login.php');
    }

    if (isset($_SESSION['jugador'])) {
        header('Location: home.php?lang=sp');
    }
}
?>

