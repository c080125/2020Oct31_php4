<?php
// 受け取ったIDとかPWをunique id付与してサーバーに渡していく
    session_start();

// 関数呼び出し
    require_once('funcs.php');
    try {
        $pdo = new PDO ('mysql:dbname=gs_db;charset=utf8;host=localhost','root','root');
    } catch (PDOException $e) {
        exit('DBConnectError:'.$e->getMessage());
    };  

// POST値取得

    $lid    =   $_POST['lid'];
    $lpw    =   $_POST['lpw'];

    $stmt   =   $pdo->prepare('SELECT * FROM gs_user_table WHERE lid=:lid AND lpw=:lpw');
    $stmt   ->  bindValue(':lid', $lid, PDO::PARAM_STR);
    $stmt   ->  bindValue(':lpw', $lpw, PDO::PARAM_STR);
    $status =   $stmt -> execute();

    if($status == false){
        sql_error($stmt);
        echo 'ERROR';
    };

    $val    =   $stmt -> fetch();
    if($val['id'] != ""){
        $_SESSION['chk_ssid']   =   SESSION_id();
        $_SESSION['kanri_flg']   =  $val['kanri_flg'];
        $_SESSION['name']   =   $val['name'];
        $_SESSION['chk_ssid']   =   SESSION_id();
        header('Location: bm_update_view.php');
    }else{
        header('Location: login.php');
    };
;
?>