<?php
include 'parciales/include.php';
?>
<html>
    <?php include 'parciales/head.php'; ?>
    <body>
        <div class="container">
            <?php
            require_once 'parciales/menu.php';
            ?>
            <div class="row">
                <div class="col-md-6">
                    <div class="well">
                        <p class="text-justify">El Math Dice Jr es una versión más sencilla del juego educativo del mismo nombre.
                            Este juego de dados entra en la categoría de juegos educativos ya que ayuda a los jugadores a repasar y conquistar las matemáticas utilizando operaciones de suma y resta.  En la versión original los jugadores pueden utilizar operaciones más complejas como multiplicación, división y exponentes.  
                        </p>
                        <p class="text-justify">El objetivo del juego es utilizar los dados de colores para formar combinaciones de suma o resta con un resultado en específico. Si se acierta la operacion se gana cierta cantidad de puntos.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="well">
                        <p class="text-justify">Al entrar en cualquiera de las opciones de juego (ambas son idénticas, pues eun no se ha implementado el modo Junior+) habrán 6 dados: 
                            Los tres primeros son dados de tres caras, los dos siguientes de 6 y el último de 12. Éste es el que marca el objetivo.<br>
                            Por lo tanto habrá que tratar de operar el resto de dados para alcanzar el número presente en el dodecaedro.</p>
                    </div>
                    <div class="well">
                        <p>FUNCIONALIDAD</p>
                        <ul>
                            <li>Inicio y fin de sesión</li>
                            <li>Conservación de datos del usuario en sesión</li>
                            <li>Suma o resta de puntos en base al resultado del juego</li>
                            <li>Dificultad implementada: Junior</li>
                            <li>Selección de idioma del menú en tiempo real</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>

