<?php 
$users  = json_decode(file_get_contents('data/usersInfo.json'),true);
$username = [];
foreach ($users as $user) {
    $username[] = $user['username'];
}
for ($i=0; $i < count($username); $i++) { 
    $user = $username[$i];
    if (!is_dir("data/users/$user")) {
        mkdir("data/users/$user");
    }
}

// session_start();

// isset($counter) ? $counter + 1 : 1;

// setcookie("visit_counter","$counter",time() + 60 * 60 );

header("Location: pages/login_signup.php");

























?>