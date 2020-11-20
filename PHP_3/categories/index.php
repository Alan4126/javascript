<?php

include "../app/categoryController.php";

$categoryController = new CategoryController();

$categories = $categoryController -> get();



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categories</title>
</head>
<body>

    <div>
        <h1>
            Categorias
        </h1>
        <table>
            <thead>
                <th>
                    #
                </th>
                <th>
                    Name
                </th>
                <th>
                    Description
                </th>
                
            </thead>
            <tbody>
                <?php

                    foreach($categories as $category){

                        echo "<tr>
                            <td>
                                ".$category['id']."
                            </td>
                            <td>
                                ".$category['name']."
                            </td>
                            <td>
                                ".$category['description']."
                            </td>
                            </tr>";

                    }

                ?>

                
            </tbody>
        </table>

        <form action="../app/categoryController.php" method="POST">
            <fieldset>
                <legend>
                    Add new category
                </legend>

                <label for="">
                    name
                </label>

                <input type="text" name="name" placeholder="terror"> <br>

                <label for="">
                    Description
                </label><br>

                <textarea name="description"  cols="30" rows="5" placeholder="write here"></textarea><br>


                <label for="">
                    Status
                </label>

                <select name="status">
                    <option>Active</option>
                    <option>Inactive</option>
                </select><br>

                <button type="submit">SAVE</button>
                <input type="hidden" name="action" value="store">

                




            </fieldset>
        </form>
    </div>
    
</body>
</html>