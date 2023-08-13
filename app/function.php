<?php 



function deleteMessage($messageRemove){
    $message = json_decode(file_get_contents('../data/public_chat.json'),true);
    global $online_user;
    foreach ($message as $key => $messages) {
        if ($messages["message"] == $messageRemove) {
            $removedData = $message[$key];
            unset($message[$key]) ;
            $history = json_decode(file_get_contents('../data/history.json'),true);
            $history[] = $removedData;
            file_put_contents('../data/history.json',json_encode($history,JSON_PRETTY_PRINT));
            file_put_contents('../data/public_chat.json',json_encode($message,JSON_PRETTY_PRINT));
            return true;
        }
    }
    return false;
}


function blockByAdmin($Message){
    $users = json_decode(file_get_contents('../data/usersInfo.json'),true);
    $messages = json_decode(file_get_contents('../data/public_chat.json'),true);
    foreach ($messages as $message) {
        if ($Message == $message['message']) {
            $username = $message['username'];
            foreach ($users as $key => $user) {
                if ($user['username'] == $username) {
                    $users[$key]['is_block'] = true;
                    file_put_contents('../data/usersInfo.json',json_encode($users,JSON_PRETTY_PRINT));
                    return true;
                }
            }
        }
    }
    return false;
}
function unblockByAdmin($Message){
    $users = json_decode(file_get_contents('../data/usersInfo.json'),true);
    $messages = json_decode(file_get_contents('../data/public_chat.json'),true);
    foreach ($messages as $message) {
        if ($Message == $message['message']) {
            $username = $message['username'];
            foreach ($users as $key => $user) {
                if ($user['username'] == $username) {
                    $users[$key]['is_block'] = false;
                    file_put_contents('../data/usersInfo.json',json_encode($users,JSON_PRETTY_PRINT));
                    return true;
                }
            }
        }
    }
    return false;
}
function is_admin(){
    $usersInfo = json_decode(file_get_contents('../data/usersInfo.json'),true);
    global $online_user;
    foreach ($usersInfo as $users){
        if (($online_user == $users['username']) && $users['is_admin']){
            return true;
        }
    }
    return false;
}

























?>