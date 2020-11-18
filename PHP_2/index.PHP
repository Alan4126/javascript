<?php  
    //Comentario de linea
    /*Comentarop de linea*/
   
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP 1</title>
</head>
<body>


<div>
        <fieldset>
            <form method="POST" action="app/test2.php">

                <legend>
                    Operaciones Basicas
                </legend> <br>

                <label for="">
                        Numero 1:
                </label>
                <input type="number" placeholder="Numero 1" name="numero1"><br><br>
                <label for="">
                        Numero 2:
                </label>
                <input type="number" placeholder="Numero 2" name="numero2">
                    <br> <br>
                
                <label for="">
                    Operación
                </label> <br><br>

                <select name="operacion" id="">
                    <option value="1">Suma</option>
                    <option value="2">Resta</option>
                    <option value="3">Multiplicación</option>
                    <option value="4">División</option>
                </select>
                <br><br>
                <button type="submit">
                    Resultado
                </button>

            </form>
            
        </fieldset>
    </div>












    <!-- 
    <div>
        <fieldset>
            <form method="POST" action="app/test.php">

                <legend>
                    Formulario de registro
                </legend>
                <label for="">
                        Nombre(s):
                </label>
                <input type="text" placeholder="Nombre" name="name"><br><br>
                <label for="">
                        Apellido(s):
                </label>
                <input type="text" placeholder="Apellido" name="lastname">
                    <br> <br>

                <label for="">
                    Genero
                </label> <br>
                Mujer <input type="radio" name="gender" value="M"><br>
                Hombre <input type="radio" name="gender" value="H"><br>

                <label for="">
                    Preferencias
                </label>
                <br>
                Guitarra
                <input type="checkbox" name="preferences[]" value="guitarra"> <br>
                Bateria
                <input type="checkbox" name="preferences[]" value="Bateria"> <br>
                Bajo
                <input type="checkbox" name="preferences[]" value="Bajo"> <br>
                Teclado
                <input type="checkbox" name="preferences[]" value="Teclado"> <br>
                Armonica
                <input type="checkbox" name="preferences[]" value="Armonica"> <br>

                <label for="">
                    Ciudad
                </label> <br>

                <select name="city" id="">
                    <option value="1">La paz</option>
                    <option value="2">Los cabos</option>

                </select>
                <br>

                <label for="">
                    Contraseña
                </label> <br>

                <input type="password" name="password" placeholder="********">

                <button type="submit">
                    Guardar información
                </button>

            </form>
            
        </fieldset>
    </div>
    
    <?php
        /* ESTRUCTURA IF
        if($edad>=18){
            echo"<p> La informacion es accesible </p>";
        }else{
            echo"<p> La informacion no es accesible </p>";
        }
        for ($i = 1; $i < 5; $i++) {
            echo $i;
        }*/
    ?>

    -->

    
     
</body>
</html>