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
    
    require_once("funcs.php");  // 関数呼び出し
    $pdo    =   db_conn(); // DB接続

// 更新内容登録用画面（授業のdetail.php的な位置付け）

    // echo ("SUCCESS!!");

    $id =   $_GET["id"];
        echo "GET:". $id;
    $hurl   =   h($_POST["url"]);
    $title  =   $_POST["title"];
    $url    =   $hurl;
    $comm   =   $_POST["comm"];

    $stmt   =   $pdo->prepare ("SELECT * FROM gs_bm_table WHERE id=" . $id);
    $status =   $stmt -> execute();

    $view   =   "";
    if ($status == false) {
        sql_error ($status);
    }else{
        $result =   $stmt->fetch();
    };

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="logout_act.php" method="get"><button>ログアウト</button></form>
<h1>お気に入りを登録しよう</h1>

<!-- 入力用フォーム -->
        <div id="form_div">
        <form method = "post" action="bm_update.php">
            <table id="form">
                <tr>
                    <td>ID</td>
                    <td><input type="text" name="id" value=<?= $result['id']?>></td>
                </tr>
                <tr>
                    <td>書籍名</td>
                    <td><input type="text" name="title" id="title" value=<?= $result['title']?>></td>
                </tr>
                <tr>
                    <td>URL</td>
                    <td><input type="text" name="url" id="" value=<?= $result['url']?>></td>
                </tr>
                <tr>
                    <td>書評</td>
                    <td><input type="textarea" name="comm" id="" value=<?= $result['comm']?>></td>
                </tr>
                <tr>
                    <td><input type="submit" value="送信"></td>
                </tr>
            </table>
        </form>
        </div> 
</body>
</html>