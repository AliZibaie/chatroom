<?php
ob_start();
session_start();
require_once "../../config.php";
if (AUTHENTICATION === "JSON"){
    if (isset($_POST["username"]) && isset($_POST["password"])) {
        $username = $_POST["username"];
        $password = $_POST["password"];
        login_check_JSON($username, $password);
    }
}
function login_check_JSON($username, $password){
    $users = json_decode(file_get_contents('../../data/usersInfo.json'),true);
    foreach ($users as $user) {
        if (($user['username'] == $username) && ($user['password'] == $password)) {
            $_SESSION["username"] = $username;
            echo "<html>
            <body style='background-color:gray;'>
                <h1 style='color:green;margin:auto;margin-top:300px;width:500px;text-align:center'>Welcome $username</h1>
            </body>
            </html>";
            header('Refresh:3;url=../../pages/home.php');
            exit();
        }
    }
    echo "<html>
    <body style='background-color:black;'>
        <h1 style='color:red;margin:auto;margin-top:300px;width:500px;text-align:center'>invalid username or password!</h1>
    </body>
    </html>";
    header('Refresh:3;url=../../index.php');
    exit();
}






































?>
