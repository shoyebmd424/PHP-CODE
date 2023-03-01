


<?php
$showerror = "false";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include "dbconnect.php";
    $username = $_POST['username'];
    $password = $_POST['password'];
    $cpass = $_POST['cpassword'];
    // check the email id has user 
    $existsql = "SELECT * FROM `users` WHERE username='$username'";
    $result = mysqli_query($con, $existsql);
    $numrows = mysqli_num_rows($result);
    if ($numrows > 0) {
        echo "the user already exist";
        $showerror = "This email id already exist";
    } else {
        if ($password == $cpass) {
            $hash = password_hash($password, PASSWORD_DEFAULT);
            $SQL = "INSERT INTO `users` ( `username`, `password`) VALUES ( '$username', '$hash');";
            $result = mysqli_query($con, $SQL);
            if ($result) {
                $showalert = true;
                exit();
            }
        } else {
            $showerror = "password do not match ";
        }
    }
   
}
