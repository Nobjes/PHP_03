<?php

//1. POSTデータ取得
$id           = $_POST["id"];
$name         = $_POST["name"];
$first        = $_POST["first"];
$first_place  = $_POST["first_place"];
$second       = $_POST["second"];
$second_place = $_POST["second_place"];
$third        = $_POST["third"];
$third_place  = $_POST["third_place"];
$fourth       = $_POST["fourth"];
$fourth_place = $_POST["fourth_place"];
$fifth        = $_POST["fifth"];
$fifth_place  = $_POST["fifth_place"];

//2. DB接続します xxxにDB名を入力する
//ここから作成したDBに接続をしてデータを登録します xxxxに作成したデータベース名を書きます

try {
    $pdo = new PDO('mysql:dbname=ranking_db;charset=utf8;host=localhost', 'root', 'root');
} catch (PDOException $e) {
    exit('DbConnectError:'.$e->getMessage());
}

//3. UPDATE table SET.....;で更新
$sql ='UPDATE ranking_table SET name=:name, first=:first, first_place=:first_place, second=:second, second_place=:second_place, 
third=:third, third_place=:third_place, fourth=:fourth, fourth_place=:fourth_place, fifth=:fifth, fifth_place=:fifth_place WHERE id=:id';
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':name',         $name,         PDO::PARAM_STR);  
$stmt->bindValue(':first',        $first,        PDO::PARAM_STR);  
$stmt->bindValue(':first_place',  $first_place,  PDO::PARAM_STR);  
$stmt->bindValue(':second',       $second,       PDO::PARAM_STR);  
$stmt->bindValue(':second_place', $second_place, PDO::PARAM_STR);  
$stmt->bindValue(':third',        $third,        PDO::PARAM_STR);  
$stmt->bindValue(':third_place',  $third_place,  PDO::PARAM_STR);  
$stmt->bindValue(':fourth',       $fourth,       PDO::PARAM_STR);  
$stmt->bindValue(':fourth_place', $fourth_place, PDO::PARAM_STR);  
$stmt->bindValue(':fifth',        $fifth,        PDO::PARAM_STR);  
$stmt->bindValue(':fifth_place',  $fifth_place,  PDO::PARAM_STR);  
$stmt->bindValue(':id',           $id,           PDO::PARAM_INT); 
$status = $stmt->execute();

// /４．データ登録処理後
$view = "";
if ($status==false) {
    //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
    $error = $stmt->errorInfo();
    exit("QueryError:".$error[2]);
} else {
    header("Location: select.php");
    exit;
}

?>


