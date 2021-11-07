<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diccionario</title>
</head>
<body>
    
    <?php 
    
        $busca = $_POST['busca'];

        //
        //Creamos un array asociativo con palabras aleatorias que se me han ido ocurriendo
        //
        $diccionario = array("Perro" => "Dog", "Gato" => "Cat", "Pájaro" => "Bird", "Ensalada" => "Shlada", 
        "Juego" => "Game", "Ordenador" => "Computer", "Televisión" => "TV", "Tarjeta" => "Card", 
        "Niño" => "Kid", "Chico" => "Boy", "Chica" => "Girl", "Vecino" => "Neightbour", "Cuerpo" => "Body", 
        "Mesa" => "Table", "Silla" => "Chair");

        if(!isset($busca)){

            echo 'Inserta la palabra a buscar... <br>';

        }else{

            //
            //Usamos el foreach para recorrer arrays asociativos
            //
            foreach($diccionario as $palabra => $traduccion){

                //echo $palabra , " y " , $busca , "...";

                //
                //comparamos que la palabra que busca el usuario esté en el array
                //
                if(strtolower($palabra) == strtolower($busca)){

                    echo 'La palabra ' . $palabra . ' se traduce al inglés como ' . $traduccion;

                }

            }

        }
    
    ?>

    <form action="#" method="post">

        <p>
            Palabra a buscar: <input type="text" name="busca" autofocus>
        </p>
        <input type="submit" vale="Enviar">

    </form>

</body>
</html>