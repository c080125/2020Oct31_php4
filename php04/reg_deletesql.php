<?php
    session_start();

    $old_sessionid  =   session_id();
    
    if(!isset($_SESSION["chk_ssid"]) || $_SESSION["chk_ssid"] != session_id()){
        exit("LOGIN ERROR");
    }else{
        session_regenerate_id(true);
        $new_sessionid  =   session_id();
        $_SESSION["chk_ssid"] = session_id();
    };

    echo "古いセッションID：$old_sessionid<br/>";
    echo "新しいセッションID：$new_sessionid<br/>";
    
    require_once('funcs.php');

    // DB接続
    try {
        $pdo = new PDO ('mysql:dbname=gs_db;charset=utf8;host=localhost','root','root');
    } catch (PDOException $e) {
        exit('DBConnectError:'.$e->getMessage());
    };

    $id =   $_GET['id'];

    $stmt   =   $pdo->prepare ("DELETE FROM gs_user_table WHERE id= :id");
    $stmt -> bindValue(':id', h($id), PDO::PARAM_INT);
    $status =   $stmt -> execute();

    if ($status == false){
        sql_error($stmt);
        // $error = $stmt -> errorInfo();
        // exit ("ErrorMessage:".$error[2]);
    }else{
        redirect('reg_view.php');
        // header ('Location: reg_start.php');
    };

?>