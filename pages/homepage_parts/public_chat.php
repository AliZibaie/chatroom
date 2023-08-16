<?php

    require_once '../app/function.php';
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
        $query = "SELECT u.username,c.message,c.includes_image,c.image_name, c.id FROM chats c inner join users u ON u.id=c.user_id ORDER BY date";
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
        if (SHOW_MESSAGE === "JSON"){
            $message_id = $messages["message_id"];
        }
        if (SHOW_MESSAGE === "MYSQL"){
            $message_id = $messages["id"];
        }
//        $message_id = $messages["id"];

        $message_id_d = $message_id."d";
        $message_id_e = $message_id."e";
        require '../app/helper.php';

        $message_id_ds[] = $message_id_d;
        $message_id_es[] = $message_id_e;
        $includes_image = $messages['includes_image'];
        if ($key == 0){
            echo "            <div class='chat chat-start'>
            <div class='chat-image avatar text-black text-lg'>
            bolbol
            </div>
         
            <div class='chat-bubble w-96 h-16 text-white'>hi 
            <div class='hidden'>$admin</div>
            </div>
          </div>";
        }
        if ($online_user == $user){
            if (!$includes_image) {
                echo "<div class='chat chat-end '>
            <div class='chat-image avatar  text-green-700 text-lg'>
            $online_user
            </div>
            <div class='chat-bubble w-96 text-white text-lg relative h-16' name= ''>$message
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
              <img src='../data/users/$user/$image_name'  name= ''>
            </div>
          </div>
            <div class='chat-bubble w-96 relative h-24 text-white text-lg'  name= ''>$message 
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
function delete() : bool
{
        global $message_id_ds;
    foreach ($message_id_ds as $messages){
        if (isset($_GET[$messages])){
            $messages =  (INT) $messages;
            if (SHOW_MESSAGE == "MYSQL"){
                $pdo = new PDO("mysql:host=mysql;dbname=chatroom","AliZibaie",123456);
                $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
                $query = "DELETE FROM chats WHERE id = :message_id";
                $statement = $pdo->prepare($query);
                $statement->bindParam(':message_id', $messages);
                $statement->execute();
            }
            if (SHOW_MESSAGE == "JSON"){
                $messagesJSON =  json_decode(file_get_contents("../data/public_chat.json"),true);
                foreach ($messagesJSON as $key => $message){
                    if ($message["message_id"] == $messages){
                        unset($messagesJSON[$key]);
                        file_put_contents(json_encode($messagesJSON),JSON_PRETTY_PRINT);
                        return  true;
                    }
                }
            }
            header("Refresh:0");
            return true;
        }
    }
    return false;
}

function edit() : bool
{
    global $message_id_es;
    foreach ($message_id_es as $messages){
        if (isset($_GET[$messages])){
            $messages =  (INT) $messages;
            ?>


            <?php
            echo "<script>
                let newText = prompt('enter your new text please');
             </script>
             ";
            $editContent = "<script>document.writeln(newText);</script>";
            ?>
            <?php
            update($editContent, $messages);

            return true;
        }
    }
    return false;
}

function update($editContent,$messages) : void
{
    $pdo = new PDO("mysql:host=mysql;dbname=chatroom","AliZibaie",123456);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);

    $query = "UPDATE chats SET message = :editContent WHERE id = :message_id";
    $statement = $pdo->prepare($query);
    $statement->bindParam(':message_id', $messages);
    $statement->bindParam(':editContent', $editContent);
    $statement->execute();
    header("Refresh:0");
}

