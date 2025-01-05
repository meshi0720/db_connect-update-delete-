<?php
//共通に使う関数を記述
//XSS対応（ echoする場所で使用！それ以外はNG ）
function h($stg) {
    return htmlspecialchars($stg, ENT_QUOTES, 'UTF-8'); // 'UTF-8' を追加
}

//DB接続用関数：db_conn()
//関数を作成し、内容をreturnさせる。
//DBnameなど、今回の授業に合わせる。
function db_conn(){
try{
    $db_name = 'meshi0720_schoolchoice_db';        // データベース名
    $db_host = 'mysql3104.db.sakura.ne.jp';        // DBホスト
    $db_id   = 'meshi0720_schoolchoice_db';        // ユーザー名
    $db_pw   = 'schoolchoice1221';                 // パスワード
    $pdo = new PDO('mysql:dbname=' . $db_name . ';charset=utf8;host=' . $db_host, $db_id, $db_pw);
    return $pdo;
} catch (PDOException $e) {
  exit('DB Connection Error:'.$e->getMessage());  
}
}





?>