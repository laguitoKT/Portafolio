<?php include "includes/header.php";

    require "includes/config/conect2DB.php";
    $db = conect2DB();

    $query_seller = "select id, name from seller;";

    $sellers = mysqli_query($db, $query_seller);


     var_dump ($_POST); 

    if ($_SERVER['REQUEST_METHOD'] === 'POST'){
        $id = $_POST ["id"];
        $title = $_POST["title"];
        $price = $_POST["price"];
        $image = $_POST["image"];
        $description = $_POST["description"];
        $rooms = $_POST["rooms"];
        $wc = $_POST["wc"];
        $timestamp = $_POST["timestamp"];
        $id_seller = $_POST["id_seller"];

            $query = "insert into propierties(id, title, price, image, description,
            rooms, wc, timestamp ,id_seller)
            values ('$id', '$title', '$price','$image','$description','$rooms','$wc','$timestamp','$id_seller');";
            $response = mysqli_query($db, $query);

            if($response){
                echo "Propierty created succesfully";
            } else {
                echo "Propierty not created";
          
        }
    }
 

?>


<section>
    <h2>Propierties Form</h2>
    <div>
        <form action="crearPropierties.php" method ="post" enctype="multipart/form-data">
        <fieldset>
                <legend>Fill all form fields</legend>
                    <div>
                        <label for="id">ID</label>
                        <input type="number" name="id" id="id">
                    </div>
                    <div>
                        <label for="title">Title</label>
                        <input type="text" id ="title" name="title" placeholder="Propierty Title">
                    </div>
                    <div>
                        <label for="price">Price</label>
                        <input type="number" id="price" name="price">
                    </div>
                    <div>
                        <label for="image">Image</label>
                        <input type="file" accept="image/*" id="image" name="image">
                    </div>
                    <div>
                        <label for="description">Description</label>
                        <textarea name="description" id="description"></textarea>
                    </div>
                    <div>
                        <label for="rooms">Rooms</label>
                        <input type="number" id="rooms" name="rooms">
                    </div>
                    <div>
                        <label for="wc">WC</label>
                        <input type="number" id="wc" name="wc">
                    </div>
                
                    <div>
                        <label for="timestamp">Timestamp</label>
                        <input type="date" id="timestamp" name="timestamp">
                    </div>
                    <div>
                        <label for="id_seller">Seller</label>
                        <select name="id_seller" id="id_seller" >
                           <?php while($seller = mysqli_fetch_assoc($sellers)) : ?>
                           <option value="<?php echo $seller ['id'];?>"><?php echo $seller['name'];?></option>
                         <?php endwhile; ?>
                        </select>

                    <div>
                        <button type="submit">Create a New Propierty</button>
                    </div>
            </fieldset>
        </form>
    </div>
</section>
<?php include "includes/footer.php"?>