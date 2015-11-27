<?php
//Podrá captarse mediante $_GET un valor que permita determinar el idioma del menú. Si se capta 'sp', $lang se igualará a '0'; si se capta 'en', $lang se igualará a '1'. Si no se captase nada mediante $_GET (o se captasen datos no computables) se establecerá su valor a '0', siendo el español el idioma por defecto.
if ($_GET['lang'] && ($_GET['lang'] == 'sp' || $_GET['lang'] == 'en')) {
    if ($_GET['lang'] == 'sp') {
        $_SESSION['lang'] = '0';
    } else if ($_GET['lang'] == 'en') {
        $_SESSION['lang'] = '1';
    }
    $lang = $_SESSION['lang'];
} else {
    $lang = $_SESSION['lang'];
}

//Construcción del array $menu. Contiene un conjunto de arrays que pueden contener ellos mismos otros arrays (como es el caso de $menu[2]). Todos ellos poseen dos valores posibles, accesibles mediante su posición, es decir '0' o '1' (excepto $menu[2], cuyo tercer valor es un conjunto de arrays, a los que se aplica la misma lógica ambivalente).
//La variable $lang determinará el idioma en que se genere el menú. Dado que cada array posee dos elementos, en las posiciones '0' y '1' (cada uno de ellos en un idioma), se llamará solo a una de estas posiciones en el momento de imprimirlos (en el html) en base a lo recibido mediante $_GET. 
$menu = array(
    'logo' => array(
        '<a class="navbar-brand logo" href="">Math_Dice</a>',
        '<a class="navbar-brand logo" href="">Math_Dice</a>'
    ),
    array(
        '<li ><a href="index.php"><i class="material-icons">store_mall_directory</i></a></li>',
        '<li "><a href="index.php"><i class="material-icons">store_mall_directory</i></a></li>',
    ),
    array(
        '<li><a href="instrucciones.php">Instrucciones</a></li>',
        '<li><a href="instrucciones.php">Instructions</a></li>'
    ),
    array(
        '<a class="dropdown-toggle" data-toggle="dropdown" href="#">JUGAR<span class="caret"></span></a>',
        '<a class="dropdown-toggle" data-toggle="dropdown" href="#">PLAY<span class="caret"></span></a>',
        'drop' => array(
            array(
                '<li><a href="jugar.php">Junior</a></li>',
                '<li><a href="jugar.php">Junior</a></li>'
            ),
            array(
                '<li><a href="jugar.php">Junior+</a></li>',
                '<li><a href="jugar.php">Junior+</a></li>'
            )
        )
    ),
    array(
        '<li><a href="datos.php">Datos de Usuario</a></li>',
        '<li><a href="datos.php">User Data</a></li>'
    ),
    array(
        '<li><a href="index.php?s=down">Cerrar Sesión</a></li>',
        '<li><a href="index.php?s=down">Log Out</a></li>'
    )
);
?>

<div class="row">
    <div class="col-md-6">
        <div>Hola, <strong><?php echo $_SESSION['jugador']->nombre; ?></strong> | Puntos: <strong><?php echo $_SESSION['jugador']->puntuacion; ?></strong></div>
    </div>
    <div class="col-md-6 hidden-xs hidden-sm">
        <div class="pull-right">
            <a href="?lang=sp"><img class="icono" src="https://mothsoundspain.files.wordpress.com/2015/04/spanish_icon.gif"></a>
            <a href="?lang=en"><img class="icono" src="http://www.itanets.co.uk/images/uk_icon.jpg"></a>
        </div>
    </div>
    <div class="col-md-12">
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <?php if ($menu['logo']) { ?>
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu_collaps" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <?php echo $menu['logo'][$lang] ?>
                    </div>
                <?php } ?>
                <div class="collapse navbar-collapse" id="menu_collaps">
                    <ul class="nav navbar-nav navbar-right">
                        <?php foreach ($menu as $m) { ?>
                            <?php if (!$m['drop']) { ?>
                                <?php if ($m != $menu['logo']) { ?>
                                    <?php echo $m[$lang] ?>
                                <?php } ?>
                            <?php } else { ?>
                                <li class="dropdown"><?php echo $m[$lang] ?>
                                    <ul class="dropdown-menu">
                                        <?php
                                        foreach ($m['drop'] as $d) {
                                            echo $d[$lang];
                                        }
                                        ?>
                                    </ul>
                                </li>
                            <?php } ?>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</div>


