<?php
// 1. データベースに接続
    try {
        $pdo = new PDO ('mysql:dbname=bookcomm;charset=utf8;host=localhost','root','root');
    } catch (PDOException $e) {
        exit('DBConnectError:'.$e->getMessage());
    };

// 2. 「gs_bm_table」から登録済みの情報を取得する
    $stmt   =   $pdo->prepare ("SELECT * FROM gs_bm_table");
    $status =   $stmt -> execute();

    $view   =   "";
    if ($status == false) {
        $error  =   $stmt -> errorInfo();
        exit ("ErrorQuery:".error[2]);
    }else{
        while ($result = $stmt -> fetch(PDO::FETCH_ASSOC)){
            $view   .=   '<tr>';
            $view   .=   '<td class="id">'.$result[id].'</td>' . '<td class="title">'.$result[title].'</td>' . '<td class="url">'.$result["url"].'</td>' . '<td class="comm">'.$result["comm"].'</td>' . '<td class="datetime">'.$result["datetime"].'</td>';
            $view   .=   '</tr>';
        };
    };
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>気になる本を登録しよう</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="wrap">
        <header>
            <form action="login.php" method="get"><button>ログイン</button></form>
        </header>
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

<!-- 入力したのをoutput -->
        <h2>登録済み書籍一覧</h2>
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
    </div>
    

<!-- 以下jsを記載（phpファイルにjs記載できるの？） -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

</body>
</html>