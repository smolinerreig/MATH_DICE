

        var contador = 1; //Contador de dados clickados
        var contadorOp = 1; //Contador de operaciones realizadas
        var realizarOperacion = false; //Semaforo para realizar operacion o dado
//Callback click sobre clase dado3 que son las imagenes de los dados de hasta 3
//fichero jugar.php --> <img src="img/dado<?= $dado1 ?>_3.png" width="100px" class="dado3" value="<?= $dado1 ?>"></img>
        $(document).ready(function () {
            $('.dado').click(function () {
                if (realizarOperacion == false) {
                    var value = $(this).attr("value");
                    var inp = document.getElementById("operacion");
                    inp.value = inp.value + value;

                    $(this).off("click");
                    $(this).attr("class", "borrado");
                    var dadoId = "input[name='dado" + contador + "']";
                    $(dadoId).val(value);

                    if (contador == 2) {
                        $("#btn-jugada").attr("class", "btn btn-success btn-lg visible");
                    }
                    contador++;
                    if (contador <= 5) {
                        realizarOperacion = true;
                    }
                }
            });
        });
//Callback click sobre operaciones de suma/resta
//<img src="img/suma.png" width="100px" class="operacion" value="+"></img>
//<img src="img/resta.png" width="100px" class="operacion" value="-"></img>
        $(document).ready(function () {
            $('.operacion').click(function () {
                if (realizarOperacion == true) {
                    if (contadorOp <= 4) {
                        var value = $(this).attr("value");
                        var inp = document.getElementById("operacion");
                        inp.value = inp.value + value;
                        var opId = "input[name='operacion" + contadorOp + "']";
                        $(opId).val(value);
                        contadorOp++;
                        realizarOperacion = false;
                    }
                }
            });
        });

