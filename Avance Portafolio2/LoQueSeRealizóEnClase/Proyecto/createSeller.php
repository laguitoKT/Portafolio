<?php include "includes/header.php";
    
    require "includes/config/conect2DB.php";

    $db = conect2DB();
    var_dump ($_POST);

   
    $name = $_POST ["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];

    $query = "insert into seller (name, email, phone) values ('$name', '$email', '$phone');";
    
    $response = mysqli_query ($db, $query);

    if ($response){
        echo "Vendedor creado con exito!";
    }else{
        echo "Vendedor no Creado";
    }
?>

<section>
    <h2>Formulario de Vendedor</h2>
    <div>
        <form action="createSeller.php" method="post">
            <fieldset>
                <legend>Fill all Fields</legend>
                <div>
                    <label for="name">Nombre del Vendedor </label>
                    <input type="text" id="name" name= "name">
                </div>
                <div>
                    <label for="email">Email del Vendedor</label>
                    <input type="email" name = "email" id="email">
                </div>
                <div>
                    <label for="phone">Telefono del Vendedor</label>
                    <input type="tel" name = "phone" id="phone">

                </div>
                <div>
                    <button type="submit">Crear nuevo vendedor</button>
                </div>
            </fieldset>
        </form>
    </div>
</section>

<?php
include "includes/config/conect2DB.php";
?>