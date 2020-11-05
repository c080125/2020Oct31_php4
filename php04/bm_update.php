<?php
    require_once("funcs.php");  // 関数呼び出し
    $pdo    =   db_conn(); // DB接続

// bm_update_detailから情報を受領して、SQLをUPDATEする。
    $hurl   =   h($_POST["url"]);
    $title  =   $_POST["title"];
    $url    =   $hurl;
    $comm   =   $_POST["comm"];
    $id     =   $_POST["id"];

    $update = $pdo->prepare ("UPDATE gs_bm_table SET title=:title, url=:url, comm=:comm, datetime=sysdate() WHERE id=:id");
    $update -> bindValue ('title', "$title", PDO::PARAM_STR);
    $update -> bindValue ('url', "$url", PDO::PARAM_STR);
    $update -> bindValue ('comm', "$comm", PDO::PARAM_STR);
    $update -> bindValue ('id', "$id", PDO::PARAM_INT);
    $status = $update -> execute();

// 4. 登録後の処理
    if ($status == false){
        sql_error($update);
        // $error = $stmt -> errorInfo();
        // exit ("ErrorMessage:".$error[2]);
    }else{
        redirect('bm_update_view.php');
        // header ('Location: index.php');
    };

?>