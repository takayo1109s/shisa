<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>shisa</title>
</head>
<body>
  <header>
    <div class="header-left">SHISA LOVE</div>
  </header>

  <div id="shisa">
    <img src="./img/shiha.JPG" alt="" width="80%" height="600px">
  </div>

  <main>
    <div class="mainbox">
      <h2>教えて！シーサーってなに？？？？</h2>
      <h3>シーサーとは、沖縄の方言で『獅子』を意味します。エジプトのスフィンクスが原型になっているのではないかと言われております。シーサーは建物の門や屋根などに設置されており、家や人に降りかかる災いを追い払う魔除けの役割を持っています。
      そして、そのシーサーの始まりですが1689年ごろ、火事が多発していて住民が困りに困って風水師に相談したところ、八重瀬岳に向けて獅子の像を置くと火事を防げる！と助言され、実際に設置したところ火事がなくなったとのこと。
      この出来事がシーサーの始まりと言われ、守り神として民家にも普及していったそうです。そしてこの由来と言われるシーサー、なんと現在でも残っているのです。</h3>
      <h2>最古のシーサー</h2>
      <h3>沖縄じゅうに数多くあるシーサーですが、その中でも記録が残っている中で最古とされるシーサーが沖縄本島南部八重瀬町にあります。 シーサーが置かれている場所から「富盛のシーサー」、または石から彫られたものであるところから「富盛の石彫大獅子」とも呼ばれています。石獅子はジリグスクと呼ばれるグスクの中にあり、火除け（火返し）として尚貞王21（1689）年に設置されたもので、フィーザン（火山）といわれる八重瀬岳に向かっています。</h3>
      <img src="./img/oldestshisa.JPG" alt="" width="800px" height="400px" class="mainphoto">
      <h4>「富盛（ともり）の石彫大獅子」は沖縄戦でアメリカ兵が盾として使用していました。</h4>
      <h2>沖縄県最大のシーサー</h2>
      <h3>沖縄県読谷村の残波岬にある、超巨大シーサー。全高およそ7mもあります。『守り神』として作られたわけではなく、かつて中国との貿易で栄えた読谷村、その文化を後世に伝えるために作られたそうです。</h3>
      <img src="./img/bigshisa.JPG" alt="" width="800px" height="400px" class="mainphoto">
      <h2>シーサーの正しい置き方</h2>
      <h3>シーサーは一た１体だけでなく、対にして２体で置くのが一般的です。口を開けているのが雄で悪霊を追い払ったり噛み付いたりしてくれます。そして口を閉じてるのが雌で幸福を呼び込み今ある幸せを逃さないようにしてくれると言われています。シーサーは体の向きによって正しい置き方が異なります。正面向きのシーサーは正面に見て右が雄で左が雌になるように置きましょう。</h3>
      <img src="./img/mae.JPG" alt="" width="800px" height="400px" class="mainphoto">
      <h3>それに対して体が横向きになっているシーサーは左が雄で右にメスになるように置きましょう。シーサー同士がくっついているのがデフォルトだと思われていますが実際はシーサー同士の距離は離れていた方がそこに結界ができるので良しとされています。</h3>
      <img src="./img/yoko.JPG" alt="" width="800px" height="400px" class="mainphoto">
    </div>
  </main>
  <footer>
  
  <div id="requested">
  <h1>シーサーに関するお問い合わせ</h1>
  <form action="check.php" method="POST">
    <div>
      <label for="name">名前</label>
      <input type="text" id="name" name="name" required>
    </div>
    <div>
      <label for="email">メールアドレス</label>
      <input type="email" id="email" name="email" required>
    </div>
    <div>
      <label for="content">お問い合わせ内容</label>
      <textarea name="content" id="content" cols="40" rows="5" required></textarea>
    </div>
    <input type="submit" value="送信">
  </form>
  </div>
  <p class="copyright">Copyright <small>&copy;</small> Taa Inc.</p>
</footer>


  
</body>
</html>