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
          <h2 class="article-title">ビデオ通話アプリ</h2>
          <p class="article-img">
            <img src="img/ビデオ通話.png" alt="ビデオ通話アプリの画像です">
          </p>
          <div class="article-body">
            <p>
              1対1でのビデオ通話を実現できるwebアプリケーションです。
            </p>
            <h3 class="article-info-title">URL</h3>
            <p><a href="https://videotelephoneharuuchi.herokuapp.com/" target="_blank" rel="noopener">https://videotelephoneharuuchi.herokuapp.com/</a></p>
            <h3 class="article-info-title">背景</h3>
            <p>HTML5認定試験の学習中に、WebRTCの存在を知り興味を持った。<br>
            </p>
            <h3 class="article-info-title">技術要素</h3>
            <p>HTML / CSS / JavaScript(jquery) / WebRTC / Skyway</p>
            <h3 class="article-info-title">作成期間</h3>
            <p>一週間ほど</p>
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