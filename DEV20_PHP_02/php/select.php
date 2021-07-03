<?php
//1.  DB接続します xxxにDB名を入れます
try {
$pdo = new PDO('mysql:dbname=ranking_db;charset=utf8;host=localhost','root','root');
} catch (PDOException $e) {
  exit('データベースに接続できませんでした。'.$e->getMessage());
}

//２．データ登録SQL作成
//作ったテーブル名を書く場所  xxxにテーブル名を入れます
$stmt = $pdo->prepare("SELECT * FROM ranking_table");
$status = $stmt->execute();

//３．データ表示
$view="";
if($status==false){
  //execute（SQL実行時にエラーがある場合）
  $error = $stmt->errorInfo();
  exit("ErrorQuery:".$error[2]);
}else{
  //Selectデータの数だけ自動でループしてくれる $resultの中に「カラム名」が入ってくるのでそれを表示させる例
  while( $result = $stmt->fetch(PDO::FETCH_ASSOC)){
    $view .= "<p>";
    $view .='<a href=kousin.php?id='.$result["id"].'">';
    $view .=$result["id"].":".$result["name"].
    "／１位".$result["first"]."(".$result["first_place"].")".
    "／２位".$result["second"]."(".$result["second_place"].")".
    "／３位".$result["third"]."(".$result["third_place"].")".
    "／４位".$result["fourth"]."(".$result["fourth_place"].")".
    "／５位".$result["fifth"]."(".$result["fifth_place"].")";
    $view .='</a>';
    $view .='<img src="img/$result[img_first"]>';
    $view .='</img>';
    $view .=' ';
    $view .='<a href=delete.php?id='.$result["id"].'">';
    $view .='[削除]';
    $view .='</a>';
    $view .= "</p>";
  }

}
?>


<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>ランキング結果</title>
  <link rel="stylesheet" href="css/style.css">
  <style>div{padding:auto;  font-size:16px;}</style>
</head>
<body id="main">
<!-- Head[Start] -->
<header>
 <div class="top">
  <div class="plate" id="mesiran">
  <h1 class="top_title">メシラン</h1>
  </div>
</header>
<!-- Head[End] -->
<p class="top_word">ランキングを更新する場合は、自分の名前をクリック！<br>
ランキングを削除する場合は、右端の削除ボタンをクリック！</p>
<!-- Main[Start] $view-->
<div>
    <div class="container_jumbotron"><?=$view?></div>
</div>

  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
      <a class="navbar-brand" href="index.php">ランキング入力画面に戻る</a>
      </div>
    </div>
  </nav>

<!-- Main[End] -->

</body>
</html>

