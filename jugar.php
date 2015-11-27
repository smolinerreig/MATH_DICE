<?php
include 'parciales/include.php';
$juego = new Juego();
?>
<html>
    <?php require_once('parciales/head.php'); ?>
    <script type="text/javascript" src="js/jugar.js"></script>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- SE IMPRIME EL MENÚ (el idioma depende del get)-->
                    <?php require_once('parciales/menu.php'); ?>
                </div>
            </div>
            <!-- Si no hay $_POST carga la pantalla con los dados y el formulario.
            De lo contrario carga la pantalla del resultado -->
            <?php if (!$_POST) { ?>
                <!-- APERTURA DE FORMULARIO -->
                <form enctype="multipart/form-data" action="" method="POST">
                    <div class="row">
                        <div class="col-md-6 col-xs-12">

                            <br>

                            <div class="row">
                                <div class="col-xs-8 col-xs-offset-2 text-center">
                                    <div class="row">
                                        <div class="col-xs-4">
                                            <?php $d31 = $juego->randomDice(3) ?>
                                            <img class="dado" name="dado31" src="img/dado/dice<?php echo $d31; ?>.png" value="<?php echo $d31 ?>" >
                                        </div>
                                        <div class="col-xs-4">
                                            <?php $d32 = $juego->randomDice(3) ?>
                                            <img  class="dado" name="dado32" src="img/dado/dice<?php echo $d32; ?>.png" value="<?php echo $d32 ?>">
                                        </div>
                                        <div class="col-xs-4">
                                            <?php $d33 = $juego->randomDice(3) ?>
                                            <img  class="dado" name="dado33" src="img/dado/dice<?php echo $d33; ?>.png" value="<?php echo $d33 ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 ">
                                    &nbsp;
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-8 col-xs-offset-2 text-center">
                                    <div class="row">
                                        <div class="col-xs-4 col-xs-offset-2">
                                            <?php $d61 = $juego->randomDice() ?>
                                            <img  class="dado" name="dado61"src="img/dado/dice<?php echo $d61; ?>.png" value="<?php echo $d61; ?>">
                                        </div>
                                        <div class="col-xs-4">
                                            <?php $d62 = $juego->randomDice() ?>
                                            <img  class="dado" onclick="tomarValor(this.name)" name="dado62" src="img/dado/dice<?php echo $d62; ?>.png" value="<?php echo $d62; ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12">
                                    &nbsp;
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-8 col-xs-offset-2 text-center">
                                    <div class="row fondo-dodec">
                                        <div class="col-md-6 col-md-offset-3 ">
                                            <?php $d12 = $juego->randomDice(12) ?>
                                            <br>
                                            <h1><?php echo $d12 ?></h1>
                                            <br>
                                            <input type="hidden" name="dado12" class="form-control" id="dado12" value="<?php echo $d12 ?>"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12">
                                    &nbsp;
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-8 col-xs-offset-2 text-center">
                                    <div class="row">
                                        <div class="col-xs-4 col-xs-offset-2">
                                            <button type="button" class="btn btn-warning btn-lg operacion" style="width:60px"  value="+"><h1 style="margin: 0px">+</h1></button>
                                        </div>
                                        <div class="col-xs-4">
                                            <button type="button" class="btn btn-warning btn-lg operacion"  style="width:60px"  value="-"><h1  style="margin: 0px">-</h1></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xs-12">
                            <div class="form-group">
                                <label for="num1">Operación</label>
                                <input id="operacion"  readonly="readonly" type="text" name="res" class="form-control">
                            </div>
                            <div class="text-center"><button id=btn-jugada type="submit" class="btn btn-success btn-lg borrado">¡Math Dice!</button></div>
                        </div>
                        <br>
                    </div>
                    <!-- Se introducen los datos en el formulario, indicando los 2 valores numéricos y la operación -->
                </form>
            <?php } else { ?>
                <div class="row">
                    <div class="col-md-6">
                        <?php if ($juego->isEqual() != 'Eres un burro') { ?>
                            <div class="well">
                                <div class="row valign-wrapper">
                                    <div class="col-md-6"><h2 class="exito">¡Eres el amo!</h2> </div>
                                    <div class="col-md-6"><h3 class="pull-right">Te sumo <?php echo $punt = rand(2, 10) ?> puntos</h3></div>   
                                </div>
                            </div>
                            <?php $_SESSION['jugador']->puntuacion = $_SESSION['jugador']->puntuacion + $punt ?>
                        <?php } else { ?>
                            <div class="well">
                                <div class="row valign-wrapper">
                                    <div class="col-md-6"><h2 class="error">¡Eres un burro!</h2> </div>
                                    <div class="col-md-6"><h3 class="pull-right">Te resto <?php echo $punt = rand(2, 5) ?> puntos</h3></div>   
                                </div>
                            </div>
                            <?php $_SESSION['jugador']->puntuacion = $_SESSION['jugador']->puntuacion - $punt; ?>
                        <?php } ?>
                    </div>
                    <div class="col-md-6">
                        <div class="row  valign-wrapper">
                            <div class="col-xs-12 ">
                                <div class="well text-center"><h2>¿Quieres volver a intentarlo?</h2></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="row">
                                    <div class="col-xs-6">
                                        <a href="jugar.php"><button type="button" style="width: 100%" class=" center-block btn btn-success btn-lg">¡Por supuesto!</button></a>   
                                    </div>
                                    <div class="col-xs-6">
                                        <a href="index.php"><button type="button" style="width: 100%" class=" center-block btn btn-warning btn-lg">Mejor no...</button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
    </body>
</html>

