<?php
session_start();



echo "logout please wait";
session_destroy();
header("location:/EV_Site/index.php");
?>