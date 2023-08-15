<?php

    require_once '../app/function.php';
    require_once '../app/helper.php';
    global $online_user;

    global $online_user;
    global $admin;
    if(SHOW_MESSAGE === "JSON"){
        $messagesInPublic = json_decode(file_get_contents('../data/public_chat.json'),true);
        $usersInfo = json_decode(file_get_contents('../data/usersInfo.json'),true);
    }
    if (SHOW_MESSAGE === "MYSQL"){
        $pdo = new PDO("mysql:host=mysql;dbname=chatroom","AliZibaie",123456);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
        $query = "SELECT u.username,c.message,c.includes_image,c.image_name FROM chats c inner join users u ON u.id=c.user_id";
        $statement = $pdo->prepare($query);
        $statement->execute();
        $messagesInPublic = $statement->fetchAll();
    }


    $names = [];
    foreach ($messagesInPublic as $key => $messages){
        $message = $messages['message'];
        $user = $messages['username'];
        $name = $message;
        $names[] = $name;
        $includes_image = $messages['includes_image'];
        if ($online_user == $user){
            if (!$includes_image) {
                echo "<div class='chat chat-end '>
            <div class='chat-image avatar  text-green-700 text-lg'>
            $online_user
            </div>
            <div class='chat-bubble w-96 text-white text-lg relative h-16' name= '$message'>$message
            $admin
            </div>
          </div>";
            }else{
                $image_name = $messages['image_name'];
                echo"
            <div class='chat chat-end my-10 '>
            <div class='chat-image avatar  text-green-700 text-lg'>
            $user
            </div>
            <div class='chat-image avatar h-24'>
            <div class='w-24 rounded-xl absolute' style='top:0px;left:-600px;'>
              <img src='../data/users/$user/$image_name'  name= '$image_name'>
            </div>
          </div>
            <div class='chat-bubble w-96 relative h-24 text-white text-lg'  name= '$message'>$message 
            $admin
            </div>
            
          </div>
            ";
            }
        }else{
            if (!$includes_image) {
                echo"
            <div class='chat chat-start'>
            <div class='chat-image avatar text-black text-lg'>
            $user
            </div>

            <div class='chat-bubble w-96 h-16 text-white'>$message
            $admin
            </div>
          </div>
            ";

            }else{
                $image_name = $messages['image_name'];
                echo"
                <div class='chat chat-start my-10'>
                <div class='chat-header text-black text-lg'>
                  $user
                </div>
                <div class='chat-bubble w-96 relative'>$message 
                $admin
                <div class='chat-image avatar h-24'>
                <div class='w-24 rounded-xl absolute' style='top:0px;right:-500px;'>
                  <img src='../data/users/$user/$image_name'>
                </div>
              </div>
                </div>
                
              </div>
                ";
            }
        }
    }



