PHPの第3回目の課題<br>

①課題内容（どんな作品か）<br>
卒業制作にしようと考えている自分だけのレストランランキング（お店の名前と場所）を<br>
PHPを使って、データベースに登録、表示、更新、削除できるアプリ。<br>
また、新規ユーザー登録機能と、ID、PASS発行済の人用のログイン機能もつけて、<br>
登録されたID、PASS以外の人は入れないようにした。<br>


●確認方法<br>
※sqlファイルも準備しています。<br>
C:\mamp\htdocs 以下にフォルダごとコピー<br>
MAMPを起動<br>
PHPMyAdminから、DB：ranking_db／ranking_tableを作成<br>
テーブル内に枠を用意（id, name, first, first_place, img_first, second, second_place, img_second, <br>
third, third_place, img_third, fourth, fourth_place, img_fourth, fifth, fifth_place, img_fifth）<br>

●newuser.phpを開く<br>
<img width="1439" alt="スクリーンショット 2021-07-03 10 21 06" src="https://user-images.githubusercontent.com/83898539/124339318-af9b0580-dbe8-11eb-8d68-876f9c398759.png"><br>

●login.phpで登録済みIDとPASSを入力<br>


②工夫した点・こだわった点<br>
・店名だけではなく、店の最寄駅と、画像も登録できるようにした。（DBへの登録までは確認できたが、画像の表示まではできず・・・）<br>
・select.phpで表示するときに、<br>
1:名前／１位店名(場所)／２位店名(場所)／３位店名(場所)／４位店名(場所)／５位店名(場所)というように、<br>
見やすく文章が表示されるように調整した。<br>
・データの更新ができる機能も実装した。食べログのように店名をたくさん登録するのではなく、<br>
　自分のランキングを更新していく（登録店数は増えない）というのがこのSNSのポイントなので、<br>
上書き機能で実装ができてよかった。<br>
・削除機能も実装して、不要なデータは削除できるようにした。削除のアラート表示までは手が回らなかった。<br>


③質問・疑問（あれば）<br>
ジーズの動画の通りに記述していると思うが、画像の表示ができていない原因がわからなかったです。<br>

④その他（感想、シェアしたいことなんでも）<br>
今回の機能をベースに、地図のAPI連携、登録したお店のピン立てなども今後は実装していきたい。<br>
