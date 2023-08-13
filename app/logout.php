<?php 

session_start();

if (isset($_POST["logout"])) {
    session_destroy();
    echo "good night";
    header('Refresh:3,url=../index.php');
}



















?>