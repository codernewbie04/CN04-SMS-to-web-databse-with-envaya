<?php 
require_once "config.php"; // Import Config
require_once "EnvayaSMS.php"; // Import library Envaya
date_default_timezone_set('Asia/Jakarta'); 
$request = EnvayaSMS::get_request();
header("Content-Type: {$request->get_response_type()}");
if (!$request->is_validated($PASSWORD))
{
  // Memvalidasi Password Envaya
    header("HTTP/1.1 403 Forbidden");
    error_log("Invalid password");    
    echo $request->render_error_response("Password tidak cocok!");
    return;
}

$action = $request->get_action();
switch ($action->type)
{
    case EnvayaSMS::ACTION_INCOMING:// aksi detek SMS masuk
        $type = strtoupper($action->message_type);
        $msg = $action->message;
        $asal= $action->from;
        $datetime = date("Y-m-d H:i:s");
        if($type == "SMS"){ // chek type, SMS atau MMS
            //jika SMS masukan ke databse
            $save = mysqli_query($conn, "INSERT INTO tbl_sms VALUES ('','$asal','$msg','$datetime')");
            if($save){
                echo $request->render_response(); 
            } else {
                header("HTTP/1.1 400 Bad Request");
                echo $request->render_error_response("Gagal menyimpan ke database!"); 
            }
        }
        return;
    default:
        header("HTTP/1.1 404 Not Found");
        echo $request->render_error_response("No Action."); // mengembalikan "No Action." jika tidak ada sms masuk
        return;
}

 ?>
