<link rel="stylesheet" href="image\style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

<body>

    <nav class="navbar navbar-expand-lg nttt navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"> E-Vehiles</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item item">
                        <a class="nav-link active " aria-current="page" href="/EV_Site">Home</a>
                    </li>
                    <li class="nav-item item">
                        <a class="nav-link active" href="category/service.php" target="blank">Services</a>
                    </li>
                    <li class="nav-item item">
                        <a class="nav-link active" href="category/about.php" target="blank">About</a>
                    </li>
                    <a class="my-2 " href="/EV_Site/additem.php"> <button class="btn  btn-success addbtn" type="submit">Add Category</button></a>
                    <?php require "dbconnect.php"; ?>
                    <?php
                    session_start();
                    $show=false;
                    if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) { $show=true;
                        echo  '<li><button class="btn btn-success my-2 my-sm-0" type="submit">Search</button></li>
                        <li> <p class="text-dark text-center  my-0 mx-2">Welcome ' . $_SESSION['username'] . '</p>
               <a href="/EV_Site/logout.php" class="btn btn-success ml-2">Logout</a> </li>';
                    } else {
                        echo ' </li> <form class="d-flex">
                <input class="form-control py-2 search" type="search" placeholder="Search" aria-label="Search">
                <button class="btn searchbt btn-success " type="submit">Search</button>
                </form> </li>
                <li> <button type="button" class="btn loginbtn   py-2 mx-3 btn-primary" data-bs-toggle="modal" data-bs-target="#loginmodal">
                Login
                </button></li>
                <li> <button type="button" class="btn signupbtn btn-primary" data-bs-toggle="modal" data-bs-target="#signupmodal">
                signup
                </button></li>
                ';
                    }
                    ?>

                    <!-- <span class="   shopping-cart glyphicon glyphicon-shopping-cart"> </span> -->


                    <h1 class="noti"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-fill  shopping-cart" viewBox="0 0 16 16">
                            <path class="cart" d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                        </svg></h1>
                   
                </ul>
            </div>
        </div>
    </nav>


    <div class="select">

<table class="table">
    <thead>
        <tr>
            <th scope="col">image</th>
            <th scope="col">Titel</th>
            <th scope="col">MRP</th>
            <th scope="col">quantity</th>
            <th scope="col">Total price</th>
            <th scope="col">Remove</th>
        </tr>
    </thead>
    <tbody>
       
    </tbody>
   
    <tbody>
        <td></td>
        <td></td>
      <td><h1>Total Price</h1></td>
      <td></td>
        <td style="font-size: 25px;" class=" total-global-price"></td>
        <td style="font-size: 25px; "><a class="btn btn-warning" href="#">Buy Now</a></td>
    </tbody>
</table>


</div>

</body>