<?php  
    //Comentario de linea
    /*Comentarop de linea*/
    $name = "Alan";
    $lastname = "Hernandez";
    $fullname = $name." ".$lastname;
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP 1</title>
</head>
<body>
    
    <h1>
        Hola mi nombre es <?= $fullname; ?>
    </h1>
     
</body>
</html>