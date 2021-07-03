<?php
//1. POSTデータ取得

//まず前のphpからデーターを受け取る（この受け取ったデータをもとにbindValueと結びつけるため）
$name = $_POST["name"];
$first = $_POST["first"];
$first_place = $_POST["first_place"];
$img_first = $_FILES["img_first"]["name"];
$second = $_POST["second"];
$second_place = $_POST["second_place"];
$img_second = $_FILES["img_second"]["name"];
$third = $_POST["third"];
$third_place = $_POST["third_place"];
$img_third = $_FILES["img_third"]["name"];
$fourth = $_POST["fourth"];
$fourth_place = $_POST["fourth_place"];
$img_fourth = $_FILES["img_fourth"]["name"];
$fifth = $_POST["fifth"];
$fifth_place = $_POST["fifth_place"];
$img_fifth = $_FILES["img_fifth"]["name"];



//2. 画像のアップロード処理がうまくいかずグレーアウト
$upload = "../img/";
if (move_uploaded_file($_FILES['img_first']['tmp_name'], $upload.$img_first)) {
} if (move_uploaded_file($_FILES['img_second']['tmp_name'], $upload.$img_second)) {
} if (move_uploaded_file($_FILES['img_third']['tmp_name'], $upload.$img_third)) {
} if (move_uploaded_file($_FILES['img_fourth']['tmp_name'], $upload.$img_fourth)) {
} if (move_uploaded_file($_FILES['img_fifth']['tmp_name'], $upload.$img_fifth)) {
    echo "OK";
} else {
    echo "Upload failedです" ;
}



//3. DB接続します xxxにDB名を入力する
//ここから作成したDBに接続をしてデータを登録します xxxxに作成したデータベース名を書きます

try {
    $pdo = new PDO('mysql:dbname=ranking_db;charset=utf8;host=localhost', 'root', 'root');
} catch (PDOException $e) {
    exit('DbConnectError:'.$e->getMessage());
}



//4．データ登録SQL作成 //ここにカラム名を入力する
//xxx_table(テーブル名)はテーブル名を入力します
$stmt = $pdo->prepare("INSERT INTO ranking_table(id, name, first, first_place, img_first, second, second_place, img_second,  
third, third_place, img_third, fourth, fourth_place, img_fourth, fifth, fifth_place, img_fifth)
VALUES(NULL, :name, :first, :first_place, :img_first, :second, :second_place, :img_second, :third, :third_place, :img_third, 
:fourth, :fourth_place, :img_fourth, :fifth, :fifth_place, :img_fifth)");
$stmt->bindValue(':name', $name, PDO::PARAM_STR);  
$stmt->bindValue(':first', $first, PDO::PARAM_STR);  
$stmt->bindValue(':first_place', $first_place, PDO::PARAM_STR);  
$stmt->bindValue(':img_first', $img_first, PDO::PARAM_STR);
$stmt->bindValue(':second', $second, PDO::PARAM_STR);  
$stmt->bindValue(':second_place', $second_place, PDO::PARAM_STR);   
$stmt->bindValue(':img_second', $img_second, PDO::PARAM_STR);
$stmt->bindValue(':third', $third, PDO::PARAM_STR);  
$stmt->bindValue(':third_place', $third_place, PDO::PARAM_STR);
$stmt->bindValue(':img_third', $img_third, PDO::PARAM_STR);
$stmt->bindValue(':fourth', $fourth, PDO::PARAM_STR);  
$stmt->bindValue(':fourth_place', $fourth_place, PDO::PARAM_STR); 
$stmt->bindValue(':img_fourth', $img_fourth, PDO::PARAM_STR);
$stmt->bindValue(':fifth', $fifth, PDO::PARAM_STR);  
$stmt->bindValue(':fifth_place', $fifth_place, PDO::PARAM_STR); 
$stmt->bindValue(':img_fifth', $img_fifth, PDO::PARAM_STR);
  
$status = $stmt->execute();

//5．データ登録処理後
if ($status==false) {
    //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
    $error = $stmt->errorInfo();
    exit("QueryError:".$error[2]);
} else {
    //５．index.phpへリダイレクト 書くときにLocation: in この:　のあとは半角スペースがいるので注意！！
    header("Location: select.php");
    exit;
}
?>
