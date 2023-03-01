<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EV websites</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="image\style.css">
    <?php require "dbconnect.php"; ?>
</head>

<body>
    <?php include "navbar.php"; ?>

    <?php
    $flag=false;
                  
                    if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
                        $flag=true;
                    } else{ echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <strong>Please</strong> You have to login then more function use.
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>';} ?>

    <ul class="d-flex" style="flex-wrap: wrap; margin-bottom:0;">
        <li style="list-style:none;">  <a class="dropdown-item"<?php if($flag){ echo ' href="category/bicycle.php" '; }?>>
                <div class="card" id="catcard" style="width: 6rem; border:0;">
                    <img src="image/e-cycle1.jpg" style="border-radius: 6rem;
                        width:90%" class="card-img-top" alt="Lodaing Error">
                    <div class="card-body">
                        <p class="card-text">E-Bicycle</p>
                    </div>
                </div>
            </a></li>
        <li class="d-block" style="list-style:none;"><a class="dropdown-item"<?php if($flag){ echo ' href="category/bike.php"';} ?>>
                <div class="card" id="catcard" style="width: 6rem; border:0;">
                    <img src="image/e-bike2.jpg" style="border-radius: 6rem;
                        width:90%" class="card-img-top" alt="Lodaing Error">
                    <div class="card-body">
                        <p class="card-text">E-Bike</p>
                    </div>
                </div>
            </a></li>
        <li style="list-style:none;"><a class="dropdown-item" <?php if($flag){ echo ' href="category/scooter.php"';}?>>
                <div class="card" id="catcard" style="width: 6rem; border:0;">
                    <img src="image/e-bike3.jpg" style="border-radius: 6rem;
                        width:90%" class="card-img-top" alt="Lodaing Error">
                    <div class="card-body">
                        <p class="card-text">E-Scooter</p>
                    </div>
                </div>
            </a></li>
        <li style="list-style:none;"><a class="dropdown-item" <?php if($flag){ echo ' href="category/taxi.php"';}?>>
                <div class="card" id="catcard" style="width: 6rem; border:0;">
                    <img src="image/taxi.jpg" style="border-radius: 6rem;
                        width:90%" class="card-img-top" alt="Lodaing Error">
                    <div class="card-body">
                        <p class="card-text">E-taxi</p>
                    </div>
                </div>
            </a></li>
        <li style="list-style:none;"><a class="dropdown-item" <?php if($flag){ echo ' href="category/e-rickshaw.php" ';}?>>
                <div class="card" id="catcard" style="width: 6rem; border:0;">
                    <img src="image/e-rickshaw.webp" style="border-radius: 6rem;
                        width:90%" class="card-img-top" alt="Lodaing Error">
                    <div class="card-body">
                        <p class="card-text">E-Rickshaw</p>
                    </div>
                </div>
            </a></li>
        <li style="list-style:none;"><a class="dropdown-item" href="https://youtu.be/ycI0VQbtd2U" target="blank">
                <div class="card" id="catcard" style="width: 6rem; border:0;">

                    <div class="card-body ">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi  bg-danger  bi-caret-right-square-fill" viewBox="0 0 16 16">
                            <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm5.5 10a.5.5 0 0 0 .832.374l4.5-4a.5.5 0 0 0 0-.748l-4.5-4A.5.5 0 0 0 5.5 4v8z" />
                        </svg> <label for="this"class " aria-label="small">Watch on youtube</label>
                    </div>
                </div>
            </a></li>
    </ul>



    <!-- Modal -->
    <div class="modal fade" id="signupmodal" tabindex="-1" aria-labelledby="signupmodalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="signupmodalLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="/EV_Site/signup.php" method="post">
                        <div class="mb-3">
                            <label for="username" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="username" name="username" aria-describedby="emailHelp">
                            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password">
                        </div>

                        <div class="mb-3">
                            <label for="cpassword" class="form-label">confirm Password</label>
                            <input type="password" class="form-control" name="cpassword" id="cpassword">
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
                >
            </div>
        </div>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="loginmodal" tabindex="-1" aria-labelledby="loginmodalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="loginmodalLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="/EV_Site/login.php" method="post">
                        <div class="mb-3">
                            <label for="username" class="form-label">Email address</label>
                            <input type="email" class="form-control" style="width: 28rem;" id="username" name="username" aria-describedby="emailHelp">
                            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password">
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>



    <!-- slider -->
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <a href="/"> <img src="image/e-bike1.jpg" style="width:100%; height:500px; " class="d-block w-100" alt="..."> </a>
            </div>
            <div class="carousel-item">
                <img src="image/e-bike3.jpg" style="width:100%; height:500px; " class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="image/e-cycle1.jpg" style="width:100%; height:500px; " class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="image/e-cycle2-min.jpg" style="width:100%; height:500px; " class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- cards here -->
    <div class="container container-expand-lg d-flex">
        <?php
        $sql = "SELECT * FROM `category`";
        $result = mysqli_query($con, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
            $title = $row['Title'];
            $price = $row['price'];
            $modal = $row['modal'];

            echo '
       <div class="cards ">
       <h5 class="carDd-title">' . $title . '</h5>
        <div class="card" style="width: 14rem;">
        <img src="image/' . $row['image'] . '"class="card-img-top" alt="image loading error">
        <a href="category\view.php?modal=' . $modal . '" class="link">
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

    <!-- Button trigger modal -->
    <script src="image\script.js"></script>
    <?php include "category/footer.php"; ?>

</body>

</html>