<?php


global $online_user;
$users = json_decode(file_get_contents('../data/usersInfo.json'),true);
function is_block(){
    global $users;
    global  $online_user;
    foreach ($users as $user){
        if (($online_user == $user['username']) && !$user['is_block']){
            return false;
        }
    }
    return true;

}
if (!is_block()){
    echo "<div class='border-2 border-black w-full p-1 h-10 border-t-0 px-4 bg-wood3'>
                <form action='' method='post' enctype='multipart/form-data' class=' flex justify-between items-center '>
                    <label for='upload-image'><iconify-icon icon='lucide:upload' class='text-black' height='26' width='26'></iconify-icon></label>
                    <input type='file' class='hidden' name='new-image' id='upload-image' >
                    <input type='text' placeholder='type a message' class='w-11/12 bg-wood3 placeholder-black text-black px-3 focus:text-green-800 focus:text-lg' name='new-message'>
                    <label for='new-info'><iconify-icon icon='ion:send-sharp' class='text-black' height='26' width='26'></iconify-icon></label>                              
                    <input type='submit' class='hidden' id='new-info'>
                </form>
            </div>";
}

if (!empty($_FILES['new-image']['name'])){
    $includesImage = true;
    if ($_FILES['new-image']['size'] > 1024 * 1024 * 2) {
        echo "<html>
        <body class='bg-black'><h1 class='text-red-700 w-96 mx-auto flex justify-center mt-0 text-9xl'>image limitarion!</h1></body>
        </html>";
        echo '<meta http-equiv="refresh" content="3">';
        exit;
    }
    $name = rand(100,999).$_FILES['new-image']['name'];
    move_uploaded_file($_FILES['new-image']['tmp_name'],"../data/users/$online_user/$name");
}else{
    $includesImage = false;
}
if (!is_block() && isset($_POST['new-message'])){
    $message  = $_POST['new-message'];
    $users = json_decode(file_get_contents('../data/public_chat.json'),true);
    if (!isset($name)) {
        $name  = null;
    }elseif(strlen($message) > 100){
        echo "<html>
        <body class='bg-black'><h1 class='text-red-700 w-96 mx-auto flex justify-center mt-0 text-9xl'>character limitarion!</h1></body>
        </html>";
        echo '<meta http-equiv="refresh" content="3">';
        exit;
    }else{
    $users[] = [
        'username'=>$online_user,
        'message'=> $message,
        'date'=>date('Y-m-d'),
        'id'=>count($users) + 1,
        "is_removed_by_user"=>false,
        "is_removed_by_admin"=>false,
        'includes_image'=>$includesImage,
         'image_name'=>$name
    ];
    file_put_contents('../data/public_chat.json',json_encode($users,JSON_PRETTY_PRINT));
    echo '<meta http-equiv="refresh" content="0">';
    }
}
unset($_FILES);