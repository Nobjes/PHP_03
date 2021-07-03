<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>ランキング登録</title>
  <link rel="stylesheet" href="css/style.css">
  <style>div{padding:auto;  font-size:16px;}</style>
</head>
<body>

<!-- Head[Start] -->
<header>
<div class="top">
  <div class="plate" id="mesiran">
  <h1 class="top_title">メシラン</h1>
  </div>
  <p class="top_word">メシランは、あなただけのレストランランキングSNS。<br>
誰かがつけた点数ではなく、あなたの「おいしい」をシェアしたり、<br>
大好きなあの人の「おいしい」を教えてもらおう！</p>
</div>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<!-- ここからinsert.phpにデータを送ります -->
<form method="post" action="insert.php" enctype="multipart/form-data">
  <div class="ranking">
   <fieldset>
    <legend><h2>ランキング登録</h2></legend>
     <label>ユーザーネーム：<input type="text" size="40" name="name"></label><br><br>
     <label>１位：<input type="text" name="first"></label>
     <label>　最寄駅：<input type="text" name="first_place"></label>
     <label>　画像：<input type="file" name="img_first" accept="img/*"></label><br>
     <label>２位：<input type="text" name="second"></label>
     <label>　最寄駅：<input type="text" name="second_place"></label>
     <label>　画像：<input type="file" name="img_second" accept="img/*"></label><br>
     <label>３位：<input type="text" name="third"></label>
     <label>　最寄駅：<input type="text" name="third_place"></label>
     <label>　画像：<input type="file" name="img_third" accept="img/*"></label><br>
     <label>４位：<input type="text" name="fourth"></label></label>
     <label>　最寄駅：<input type="text" name="fourth_place"></label>
     <label>　画像：<input type="file" name="img_fourth" accept="img/*"></label><br>
     <label>５位：<input type="text" name="fifth"></label></label>
     <label>　最寄駅：<input type="text" name="fifth_place"></label>
     <label>　画像：<input type="file" name="img_fifth" accept="img/*"></label><br><br>
     <input type="submit" value="送信">
    </fieldset>
  </div>
</form><br>



<!-- 画像をリアルタイムに表示するパート７３行目まで→反応しないためグレーアウト
<script src="http://code.jquery.com/jquery-3.0.0.js"></script>

<script>
$('input [type=file]').change(function(){
var file = $(this).prop('files')[0];

if(!file.type.match('image.*')){

$(this).val('');
$('.cms-thumb > img').html('');
return;
}
var reader = new FileReader();
reader.onload = function(){
  $('.cms-thumb > img').attr('scr', reader.result);
}
reader.readAsDataURL(file);
});
</script> -->




  <nav class="navbar navbar-default">
    <div class="container-fluid">
    <div class="navbar-header"><a class="navbar-brand" href="select.php">友人のレストランランキングを見る</a></div>
    </div>
  </nav>

  <footer class="footer">
  <a class="navbar-brand" href="login.php">ログアウト</a>
  </footer>
<!-- Main[End] -->


</body>
</html>