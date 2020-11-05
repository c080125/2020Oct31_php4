<?php
// XSS対応の関数
    function h($str){
        return htmlspecialchars($str, ENT_QUOTES);
    };

// DB接続の関数
    function db_conn(){
        try {
            $db_name    =   "bookcomm";
            $db_id      =   "root";
            $db_pw      =   "root";
            $db_host    =   "localhost";
            $pdo        =   new PDO('mysql:dbname='.$db_name.';charset=utf8;host='.$db_host, $db_id, $db_pw);
            return $pdo;
        } catch (PDOException $e) {
            exit ('DB Connection Error:'.$e->getMessage());
        };
    };

// SQLのエラー関数
    function sql_error($stmt){
        $error = $stmt->errorInfo();
        exit("SQLError:".$error[2]);
    };

// Redirectの関数
    function redirect($file_name){
        header ("Location:" . $file_name);
        exit();
    };
?>