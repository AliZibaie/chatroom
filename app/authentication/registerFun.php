<?php
ob_start();
session_start();
require_once "../../config.php";
if (isset($_GET["username2"]) && isset($_GET["password2"]) && isset($_GET["email"]) && isset($_GET["name2"])) {
    $name = $_GET["name2"];
    $email = $_GET["email"];
    $userName = $_GET["username2"];
    $password = $_GET["password2"];
    $nameValidation = preg_match("/[a-z\s]{3,32}/", "$name");
    $emailValidation = preg_match("/[a-zA-Z0-9]+@{1}[a-z]+\.[a-z]{2,}/", "$email");
    $userNameValidation = preg_match("/[a-zA-Z0-9_]{3,32}/", "$userName");
    $passwordValidation = preg_match("/[a-zA-Z0-9\~\!\@\#\%\^\&\*\(\)\[\]\{\}\/\+\-\_\?\<\>$]+/", "$password");

    if (empty($name)) {
        echo "<html>
        <body style='background-color:black;'>
            <h1 style='color:red;margin:auto;margin-top:300px;width:500px;text-align:center'>please enter your name</h1>
        </body>
        </html>";
        header('Refresh:3,url=../../index.php');
    }elseif (!$nameValidation) {
        echo "<html>
        <body style='background-color:black;'>
            <h1 style='color:red;margin:auto;margin-top:300px;width:500px;text-align:center'>invalid name</h1>
        </body>
        </html>";
        header('Refresh:3,url=../../index.php');
    }elseif (empty($email)) {
        echo "<html>
        <body style='background-color:black;'>
            <h1 style='color:red;margin:auto;margin-top:300px;width:500px;text-align:center'>please enter your email</h1>
        </body>
        </html>";
        header('Refresh:3,url=../../index.php');
    }
    elseif (!$emailValidation) {
        echo "<html>
        <body style='background-color:black;'>
            <h1 style='color:red;margin:auto;margin-top:300px;width:500px;text-align:center'>invalid email</h1>
        </body>
        </html>";
        header('Refresh:3,url=../../index.php');

    }elseif (empty($userName)) {
        echo "<html>
        <body style='background-color:black;'>
            <h1 style='color:red;margin:auto;margin-top:300px;width:500px;text-align:center'>please enter your username</h1>
        </body>
        </html>";
        header('Refresh:3,url=../../index.php');

    }elseif (!$userNameValidation) {
        echo "<html>
        <body style='background-color:black;'>
            <h1 style='color:red;margin:auto;margin-top:300px;width:500px;text-align:center'>invalid username</h1>
        </body>
        </html>";
        header('Refresh:3,url=../../index.php');

    }elseif (empty($password)) {
        echo "<html>
        <body style='background-color:black;'>
            <h1 style='color:red;margin:auto;margin-top:300px;width:500px;text-align:center'>please enter your password</h1>
        </body>
        </html>";
        header('Refresh:3,url=../../index.php');

    }elseif (!$passwordValidation) {
        echo "<html>
        <body style='background-color:black;'>
            <h1 style='color:red;margin:auto;margin-top:300px;width:500px;text-align:center'>invalid password</h1>
        </body>
        </html>";
        header('Refresh:3,url=../../index.php');
    }
    else {
        if (AUTHENTICATION === "JSON"){
            $decoded = json_decode(file_get_contents("../../data/usersInfo.json"),true) ;
            $newUser = ["id"=>count($decoded) + 1,"name"=>$name,"username"=> $userName,"password"=> $password,"email"=> $email,"is_admin"=> false,
                "is_block"=> false];
            if (!empty($decoded) && in_array($newUser, $decoded)) {
                echo "you have already signed up!";
                header('Refresh:3,url=../../index.php');
                exit;
            }
            $decoded [] = $newUser;

            file_put_contents("../../data/usersInfo.json", json_encode($decoded, JSON_PRETTY_PRINT));
            $_SESSION["username"] = $userName;
            echo "welcome!";
            header('Refresh:3,url=../../pages/home.php');
            exit;
        }
        if (AUTHENTICATION === "MYSQL"){
            $pdo = new PDO('mysql:host=mysql;dbname=chatroom',"AliZibaie",123456);

            $query = "INSERT INTO users(name,username,password,email) VALUES(:name,:username,:password,:email)";
            $statement = $pdo->prepare($query);
            $statement->bindParam(':name', $name);
            $statement->bindParam(':username', $userName);
            $statement->bindParam(':password', $password);
            $statement->bindParam(':email', $email);
            $statement->execute();
            $_SESSION["username"] = $userName;
            echo "welcome!";
            header('Refresh:3,url=../../pages/home.php');
            exit;
        }
    }
}





































?>
