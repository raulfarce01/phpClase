<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Cambia Ocurrencias</title>
</head>
<body>
    
<?php
  if (!isset($_POST['auxNum'])) {

    //
    //Creamos un array de 100 números aleatorios entre 0 y 20
    //
    for ($i = 0; $i < 100; $i++) {

        $num[$i] = rand(0, 20);
        echo $num[$i].' ';

    }

    //
    //Separamos los valores del array por comas
    //
    $auxNum = implode(',', $num);
    
  } else {
    $auxNum = $_POST['auxNum'];
    $cambio = $_POST['cambio'];
    $sust = $_POST['sust'];

    //
    //Aquí quitamos las comas para dejar un nuevo array con los valores anteriores para que no se modifique
    //al generar la página de nuevo al pulsar enviar
    //
    $num = explode(',', $auxNum);

    //
    //Buscamos con el foreach el valor que el usuario quiere sustituir,
    //y lo cambiamos por el valor sustituto y lo pintamos de rojo
    //
    foreach ($num as $valor) {

      if ($valor == $cambio) { 

        echo '<span style="color: red; font-weight: bold;">' . $sust . '</span> ';

      } else {

        echo  $valor . ' ';

      }
    }
  }

  ?>
  <form action="#" method="post">

    Valor a cambiar: <input type="number" name ="cambio" autofocus><br>
    Valor sustituto: <input type="number" name ="sust"><br>
    <input type="hidden" name="auxNum" value="<?php echo $auxNum; ?>">

    <input type="submit" value="OK">

    </form>
</body>
</html>