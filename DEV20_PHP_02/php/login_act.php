<?php

// ０./セッション変数を使います。

session_start();
//1. POSTデータ取得
//まず前のphpからデーターを受け取る（この受け取ったデータをもとにbindValueと結びつけるため）
$lid = $_POST["lid"];
$lpw = $_POST["lpw"];

//２.  DB接続します xxxにDB名を入れます
try {
    $pdo = new PDO('mysql:dbname=ranking_db;charset=utf8;host=localhost', 'root', 'root');
} catch (PDOException $e) {
    exit('データベースに接続できませんでした。'.$e->getMessage());
}

// ３．データ登録SQL作成 //ここにカラム名を入力する
//xxx_table(テーブル名)はテーブル名を入力します
$sql = "SELECT * FROM login_table WHERE lid=:lid AND lpw=:lpw";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':lid', $lid);
$stmt->bindValue(':lpw', $lpw);
$status = $stmt->execute();


///execute（SQL実行時にエラーがある場合）
if ($status==false) {
    $error = $stmt->errorInfo();
    exit("ErrorQuery:".$error[2]);
}

//抽出データを取得
$val = $stmt->fetch();

 //該当レコードがあればSESSIONに値を代入
if( $val["id"] != "" ){
$_SESSION["u_name"] = $val['u_name'];
    header("Location: index.php");
}else{
    header("Location: login.php");
}

// 処理終了
exit();

?>