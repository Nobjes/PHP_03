<?php

$id = $_GET["id"];

//1.  DB接続します xxxにDB名を入れます
try {
$pdo = new PDO('mysql:dbname=ranking_db;charset=utf8;host=localhost','root','root');
} catch (PDOException $e) {
  exit('データベースに接続できませんでした。'.$e->getMessage());
}


//3. DELETE table WHERE.....;で更新
$sql ='DELETE FROM ranking_table WHERE id=:id';
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':id', $id, PDO::PARAM_INT); 
$status = $stmt->execute();


// /４．データ登録処理後
if ($status==false) {
    //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
    $error = $stmt->errorInfo();
    exit("QueryError:".$error[2]);
} else {
    header("Location: select.php");
    exit;
}

?>