<?php 

    var_dump($_POST);
    echo "<hr>";

    $numero1 = $_POST['numero1'];
    $numero2 = $_POST['numero2'];
    $resultado = 0;
 
    
    $operacion = $_POST['operacion'];
    

    if($operacion == 1){

        $resultado = $numero1 + $numero2;
        echo $resultado;
        
    }elseif($operacion == 2){

        $resultado = $numero1 - $numero2;
        echo $resultado;

    }elseif($operacion == 3){

        $resultado = $numero1 * $numero2;
        echo $resultado;

    }elseif($operacion == 4){
        $resultado = $numero1 / $numero2;
        echo $resultado;

    }

?>