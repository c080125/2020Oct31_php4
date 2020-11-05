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
    
    // 更新作業のページ＝indexのレイアウト、各アイテムに<a></a>でリンクを貼って、編集用ページに飛ぶ仕様にしたい（授業のselect.phpと同じ効果）

    require_once("funcs.php");  // 関数呼び出し
    $pdo    =   db_conn(); // DB接続

    $stmt   =   $pdo->prepare ("SELECT * FROM gs_bm_table");
    $status =   $stmt -> execute();
    
    $view   =   "";
    if ($status == false) {
        sql_error($status);
        // $error  =   $stmt -> errorInfo();
        // exit ("ErrorQuery:".error[2]);
    }else{
        while ($result = $stmt -> fetch(PDO::FETCH_ASSOC)){
            $view   .=  '<p>';
            $view   .=  '<a href = "bm_update_detail.php?id=' . $result["id"] . '">';
            // $view   .=   '<tr>';
            // $view   .=   '<td class="id">'.$result[id].'</td>' . '<td class="title">'.$result[title].'</td>' . '<td class="url">'.$result["url"].'</td>' . '<td class="comm">'.$result["comm"].'</td>' . '<td class="datetime">'.$result["datetime"].'</td>';
            // $view   .=   '</tr>';
            $view   .=   $result[id] . " : " . $result[title] . " : " . $result["url"] . " : " . $result["comm"] . " : " .$result["datetime"];
            $view   .=  '</a>';
            $view   .=  '</p>';
        };
    };

    


    // $hurl   =   h($_POST["url"]);
    // $title  =   $_POST["title"];
    // $url    =   $hurl;
    // $comm   =   $_POST["comm"];
    // $id     =   $_POST["id"];



?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>気になる本を登録しよう</title>
    <link rel="stylesheet" href="style.css">
</head>
    <form action="logout_act.php" method="get"><button>ログアウト</button></form>
    <form action="reg_view.php" method="get"><button>ユーザー管理画面へ</button></form>
    <form action="bm_update_view.php" method=""><button>書籍一覧画面へ</button></form>
<body>
    <div id="wrap">
        <h1>お気に入りを登録しよう</h1>

<!-- 入力用フォーム -->
        <div id="form_div">
        <form method = "post" action="insert.php">
            <table id="form">
                <tr>
                    <td>書籍名</td>
                    <td><input type="text" name="title" id="title" value=""></td>
                </tr>
                <tr>
                    <td>URL</td>
                    <td><input type="text" name="url" id="" value=""></td>
                </tr>
                <tr>
                    <td>書評</td>
                    <td><input type="textarea" name="comm" id="" value=""></td>
                </tr>
                <tr>
                    <td><input type="submit" value="送信"></td>
                </tr>
            </table>
        </form>
        </div>    
        <p><?= $view ?></p>
        
<!-- 入力したのをoutput -->
        <!-- <h2>登録済み書籍一覧</h2>
        <table id="table">
            <tr>
                <td class="id">ID</td>
                <td class="title">書籍名</td>
                <td class="url">URL</td>
                <td class="comm">コメント</td>
                <td class="datetime">登録日時</td>
            </tr>
            <tr>
                echo (<?= $view ?>);
            </tr>
        </table>
    </div> -->
    

<!-- 以下jsを記載（phpファイルにjs記載できるの？） -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

</body>
</html>