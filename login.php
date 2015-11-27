<html>
    <head>
        <title>Math Dice</title>
        <?php include 'modelos/jugador.php'; ?>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" >
        <link rel="stylesheet" href="css/style.css">
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <script type="text/javascript" src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"  integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="row">
            <div class="col-md-12 text-center">
                
                <h1 >MATH_DICE</h1>
                
            </div>
        </div>
        <div class="col-md-6 col-md-offset-3 col-xs-12">
            <div class="well">
                <form enctype="multipart/form-data" action="index.php" method="POST">
                    <div>
                        <div class="form-group">
                            <label for="num1">Nombre</label>
                            <input type="text" name="nombre" class="form-control" id="nombre" placeholder="p.ej: Aitor">
                        </div>
                        <div class="form-group">
                            <label for="num2">Apellidos</label>
                            <input type="text" name="apellidos" class="form-control" id="apellidos" placeholder="p.ej: Tilla Depatatas">
                        </div>
                        <div class="form-group">
                            <label for="num2">Edad</label>
                            <input type="text" name="edad" class="form-control" id="edad" placeholder="p.ej: 72">
                        </div>                            
                        <div class="text-center"><button type="submit" class="btn btn-success btn-lg" action="index.php">¡Jugar a Math Dice!</button></div>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>
