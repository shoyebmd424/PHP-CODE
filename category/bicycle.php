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
<div class="container container-expand-lg d-flex">
        <?php
        $sql = "SELECT * FROM `category` WHERE Title='Bicycle'";
        $result = mysqli_query($con, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
            $title = $row['Title'];
            $price = $row['price'];
            $modal = $row['modal'];



            echo '
            <div class="cards ">
            <h5 class="carDd-title">' . $title . '</h5>
             <div class="card" style="width: 14rem;">
             <img src="../image/' . $row['image'] . '"class="card-img-top" alt="image loading error">
             <a href="view.php?modal=' . $modal . '" class="link">
             <div class="card-body my-0">
             <p class="card-text catdesc"> ' . $modal . '</p>
             <h6 class="card-text price"> ' . $price . '₹/-</h6>
             <a  href="#"  class="btn btn-sm cardbtn btn-primary">Add Cart</a>
            </a>
             </div>
             </div>
             </div>
    ';
        }



        ?>
    </div>
    <script src="../image/script.js"></script>
    <?php include "footer.php"; ?>
