<?php

class Juego {

    /**
     * int $faces: Si se introduce un número entero la función retornará un número aleatorio de 1 a $face.
     * Si no hay parámetro de entrada se retornará por defecto un número aleatorio del 1 al 6.  
     * return int.
     */
    function randomDice($faces = NULL) {

        if ($faces == null) {
            $caras = 6;
        } else {
            $caras = $faces;
        }

        return rand(1, $caras);
    }

    /*
     * Recoge el $_POST con el valor de los dados y el valor introducido por el usuario. 
     * Si ambos valores coinciden, efectua las operaciones.
     * return string
     */

    function isEqual() {
        
        $resultado = 0;

        if ($_POST['res'] != null) {
            $post = $_POST['res'];
            $char[0] = strlen($post);

            for ($i = 1; $i <= $char[0]; $i++) {
                $char[$i] = substr($post, $i - 1, 1);
                if (!$i % 2 == 0) {
                    if ($i == 1) {
                        $resultado = $resultado + $char[$i];
                    } else {
                        if ($char[$i - 1] == '+') {
                            $resultado = $resultado + $char[$i];
                        } else if ($char[$i - 1] == '-') {
                            $resultado = $resultado - $char[$i];
                        }
                    }
                }
            }
        }
        if ($resultado == $_POST['dado12']) {
            return $_POST['res'].'='.$_POST['dado12'];
        } else {
            return 'Eres un burro';
        }
    }

}

?>