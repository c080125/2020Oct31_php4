<?php
    require_once('funcs.php');
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
            <form action="reg_start.php" method="get"><button>会員登録</button></form>
        </header>
        <h1>お気に入りを登録しよう</h1>

<!-- 入力用フォーム -->
        <div id="form_div">
        <form method = "post" action="login_act.php">
            <table id="form">
                <tr>
                    <td>ログインID</td>
                    <td><input type="text" name="lid" value=""></td>
                </tr>
                <tr>
                    <td>ログインPW</td>
                    <td><input type="text" name="lpw" value=""></td>
                </tr>
                <tr>
                    <td><input type="submit" value="ログイン"></td>
                </tr>
            </table>
        </form>
        </div>    

<!-- 以下jsを記載（phpファイルにjs記載できるの？） -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

</body>
</html>