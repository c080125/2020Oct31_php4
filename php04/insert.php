<?php
    require_once("funcs.php");
    // function h ($value){
    //     return htmlspecialchars($value, ENT_QUOTES);
    // };
    $hurl   =   h($_POST["url"]);

// 1. post or getから情報を受け取る
    $title  =   $_POST["title"];
    $url    =   $hurl;
    $comm   =   $_POST["comm"];

    // echo ($title);
    // echo ($url);
    // echo ($comm);

// 2. DBに接続します
    $pdo = db_conn();
    // try {
    //     $pdo = new PDO ('mysql:dbname=bookcomm;charset=utf8;host=localhost','root','root');
    // } catch (PDOException $e) {
    //     exit('DBConnectError:'.$e->getMessage());
    // };

// 3. data登録用のSQL記述
    $stmt = $pdo->prepare ("INSERT INTO gs_bm_table (id, title, url, comm, datetime) VALUES (NULL, :title, :url, :comm, sysdate())");
    $stmt -> bindValue ('title', "$title", PDO::PARAM_STR);
    $stmt -> bindValue ('url', "$url", PDO::PARAM_STR);
    $stmt -> bindValue ('comm', "$comm", PDO::PARAM_STR);
    $status = $stmt -> execute();

// 4. 登録後の処理
    if ($status == false){
        sql_error($stmt);
        // $error = $stmt -> errorInfo();
        // exit ("ErrorMessage:".$error[2]);
    }else{
        redirect('index.php');
        // header ('Location: index.php');
    };
?>