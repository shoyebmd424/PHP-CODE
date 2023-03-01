

<?php
$showerror = "false";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include "dbconnect.php";
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM `users` WHERE username='$username'";
    $result = mysqli_query($con, $sql);
    $num = mysqli_num_rows($result);
    if ($num == 1) {
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row['password']))
        session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['sno'] = $row['sno'];
        $showerror=true;
        $_SESSION['username'] = $username;
        echo "you are succefully login";
        header("location:/EV_Site/index.php");
    } 
    else {
        echo "usernanot present";
    }
} else {
    echo " this is not posted";
}
