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
// ユーザー情報登録画面

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ユーザー登録</title>
</head>
<body>
    <form method="POST" action="reg_insert.php">
        <label for="">氏名：</label><input type="text" name="name"><br>
        <label for="">ID：</label><input type="text" name="lid"><br>
        <label for="">Password：</label><input type="text" name="lpw"><br>
        <label for="">管理者ですか？：</label><input type="select" name="kanri_flg"><br>
        <label for="">現役ですか？：</label><input type="select" name="life_flg"><br>
        <input type="submit" value=送信>
    </form>
</body>
</html>