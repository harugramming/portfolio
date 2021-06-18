<!DOCTYPE html>
<html>
<?php
  require_once("php/beans/_head.php");
?>
  <link rel=”canonical” href=”URLが入る” />
</head>

<body>
  <div class="wrapper">

    <!-- header -->
    <?php
      require_once("php/beans/_header.php");
    ?>
    <!-- /header -->

    <main class="content">

      <article class="article">
        <div class="article-inner">
          <h2 class="article-title">RTAタイマー</h2>
          <p class="article-img">
            <img src="img/RTAタイマー.png" alt="RTAタイマーの画像です">
          </p>
          <div class="article-body">
            <p>
              ゲームのタイムアタック専用のタイマーです。自己記録をデータベースに保存し、比較しながら計測することができます。
            </p>
            <h3 class="article-info-title">URL</h3>
            <p><a href="http://harumachinos.php.xdomain.jp" target="_blank" rel="noopener">http://harumachinos.php.xdomain.jp</a></p>
            <h3 class="article-info-title">背景</h3>
            <p>ゲームのタイムアタックが好きで専用のタイマーを探した。Windowsアプリやモバイルアプリでは同様のものがあったが、Webアプリケーションには存在せず、MacPCから利用することができなかった。よって、自作することにした。<br>
            </p>
            <h3 class="article-info-title">技術要素</h3>
            <p>HTML / CSS / JavaScript (jquery) / ajax / PHP / MySQL</p>
            <h3 class="article-info-title">作成期間</h3>
            <p>2か月ほど</p>
          </div>
          <div class="home-link">
            <a href="./#works">Works一覧へ</a>
          </div>
        </div>
      </article>

      <div class="page-top" id="js-page-top">
        <span class="material-icons-outlined">expand_less</span>
      </div>
    </main>

    <!-- footer -->
    <?php
      require_once("php/beans/_footer.php");
      ?>
    <!-- /footer -->

  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script type='text/javascript' src="js/script.js"></script>
</body>
</html>