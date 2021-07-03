<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>ログイン認証</title>
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
<form method="post" action="login_act.php">
  <div class="ranking">
   <fieldset>
    <legend><h2>ログイン認証</h2></legend>
     <label>　ID：<input type="text" size="40" name="lid"></label><br><br>
     <label>　PW：<input type="text" name="lpw"></label><br><br>
     <input type="submit" value="ログインする">
    </fieldset>
  </div>
</form><br>

<!-- Main[End] -->
 <footer class="footer">
  <a class="navbar-brand" href="newuser.php">新規登録画面に戻る</a>
  </footer>

</body>
</html>
