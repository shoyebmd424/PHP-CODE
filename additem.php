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
    <link rel="stylesheet" href="image\style.css">
    <?php require "dbconnect.php"; ?>

<body>

    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-info">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"> E-Vehiles</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active " aria-current="page" href="/EV_site/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Category</a>
                    </li>
                </ul>
                <a href="additem.php"> <button class="btn btn-outline-success addbtn" type="submit">Add Category</button></a>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>


    <?php
    include "dbconnect.php";
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $title = $_POST['title'];
        $modal = $_POST['modal'];
        $price = $_POST['price'];
        $battery = $_POST['battery'];
        $capacity = $_POST['capacity'];
        $weight = $_POST['weight'];
        $heat = $_POST['heat'];
        $desc = $_POST['desc'];
        $image = $_FILES['image']['name'];

        $sql = "INSERT INTO `category` (`Title`, `modal`, `price`, `image`, `battery`, `capacity`, `weight`, `heat`, `desc`) VALUES ('$title', '$modal', '$price','$image', '$battery', '$capacity', '$weight', '$heat', '$desc');";
        $result = mysqli_query($con, $sql);
        if ($result) {
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Successfully </strong> Yourdata is submitted you can see below .
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
        }
    }
    ?>

    <!-- form -->
    <div class="addcat ">
        <form action="additem.php" method="post" enctype="multipart/form-data">
            <div class="mb-3 mx-20">
                <label for="exampleInputEmail1" class="form-label">Enter category name</label>
                <!-- <input type="text" class="form-control" name="title" id="modal" aria-describedby="emailHelp"> -->
                <select name="title" class="mb-3 my-3" id="modal">
                    <option value="Bicycle">Bicycle</option>
                    <option value="E-bike">E-bike</option>
                    <option value="E-rickshaw">E-rickshaw</option>
                    <option value="scooter">scooter</option>
                    <option value="Taxi">Taxi</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Enter Model Name</label>
                <input type="text" class="form-control" name="modal" id="modal" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Enter Price</label>
                <input type="number" class="form-control" name="price" id="price">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Backup</label>
                <input type="text" class="form-control" name="battery" id="battery" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Capacity</label>
                <input type="text" class="form-control" name="capacity" id="capacity" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Weight</label>
                <input type="text" class="form-control" name="weight" id="wieght" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Heat</label>
                <input type="text" class="form-control" name="heat" id="heat" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">More</label>
                <textarea class="form-control" id="desc" name="desc" rows="3"></textarea>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Upload Image</label>
                <input type="file" class="form-control" name="image" id="image">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <?php include "category/footer.php"; ?>

</body>

</html>