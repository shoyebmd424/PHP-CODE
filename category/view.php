<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EV websites</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../image/style.css">

    <?php include "../navbar.php"; ?>
    <div class="desc">
        <?php
        $modal = $_GET['modal'];
        $sql = "SELECT * FROM `category` WHERE modal='$modal'";
        $result = mysqli_query($con, $sql);
        $row = mysqli_fetch_assoc($result);
            $title = $row['Title'];
            $price = $row['price'];
            $modal = $row['modal'];
            $battery = $row['battery'];
            $capacity = $row['capacity'];
            $weight = $row['weight'];
            $heat = $row['heat'];
            $desc = $row['desc'];
            echo "<h1>$title </h1> <hr> </br> <h3>$modal </h3>
            Charge Backup: $battery   </br>
            Engin Capacity:$capacity </br>
            Engin Weight:$weight </br>
            Seat Heat:$heat </br>
            <hr>
            $desc</p>";


        ?>
</div>

<?php include "footer.php"; ?>
