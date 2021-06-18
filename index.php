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

      <!-- main-visual -->
      <div class="main-visual">
        <div class="main-visual-inner">
          <p class="main-visual-title">Y.HARUUCHI</p>
          <p class="main-visual-subtitle">PORTFOLIO</p>
          <p class="main-visual-text">
            webアプリをつくる<br class="sp-only"><br>
            <br class="sp-only"><br>
          </p>
        </div>
      </div>
      <!-- /main-visual -->

      <!-- works -->
      <section class="works section" id="works">
        <div class="inner">
          <h2 class="title">WORKS</h2>
          <div class="works-list">
            <a class="works-item" href="videotelephone.php">
              <p class="works-img"><img src="img/ビデオ通話.png" alt="ビデオ通話アプリの画像" /></p>
              <p class="works-name">ビデオ通話アプリ</p>
              <p class="works-info">HTML / CSS / JavaScript / WebRTC / Skyway</p>
            </a>
            <a class="works-item" href="works-template.html">
              <p class="works-img"><img src="img/works-dummy-thumb.jpg" alt="" /></p>
              <p class="works-name">作品名が入る</p>
              <p class="works-info">Design / Coding(Responsive) / WordPress</p>
            </a>
            <a class="works-item" href="works-template.html">
              <p class="works-img"><img src="img/works-dummy-thumb.jpg" alt="" /></p>
              <p class="works-name">作品名が入る</p>
              <p class="works-info">Design</p>
            </a>
            <a class="works-item" href="works-template.html">
              <p class="works-img"><img src="img/works-dummy-thumb.jpg" alt="" /></p>
              <p class="works-name">作品名が入る</p>
              <p class="works-info">Banner Design</p>
            </a>
            <a class="works-item" href="works-template.html">
              <p class="works-img"><img src="img/works-dummy-thumb.jpg" alt="" /></p>
              <p class="works-name">作品名が入る</p>
              <p class="works-info">Banner Design</p>
            </a>
          </div>
        </div>
      </section>
      <!-- /works -->

      <!-- skill -->
      <section class="skill section" id="skill">
        <div class="inner">
          <h2 class="title">SKILL</h2>
          <div class="skill-list">
            <div class="skill-item">
              <p class="skill-img"><img src="img/html_original_wordmark_logo_icon_146478.svg" alt=""></p>
              <div class="skill-body">
                <h3 class="skill-name">HTML5/CSS3</h3>
                <p class="skill-text">
                  実務6か月</p>
              </div>
            </div>
            <div class="skill-item">
              <p class="skill-img"><img src="img/javascript_plain_logo_icon_146454.svg" alt=""></p>
              <div class="skill-body">
                <h3 class="skill-name">JavaScript / jquery</h3>
                <p class="skill-text">
                実務6か月</p>
              </div>
            </div>
            <div class="skill-item">
              <p class="skill-img"><img src="img/php_icon_130857.svg" alt=""></p>
              <div class="skill-body">
                <h3 class="skill-name">PHP</h3>
                <p class="skill-text">
                  自己学習</p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- /skill -->

      <!-- about -->
      <section class="about section" id="about">
        <div class="inner">
          <h2 class="title">ABOUT</h2>
          <div class="profile">
            <!-- <p class="profile-img">
              <img src="img/profile.jpg" alt="">
            </p> -->
            <div class="profile-body">
              <p>
                略歴 <br>
                大阪府堺市に生まれる。<br>
                2020年に関西大学を卒業、<br>
                東京へ越し、一部上場のSIerに就職 <br>
                一身上の都合により、2020年12月に退職。<br>
                大阪の実家へ帰る。
              </p>
              <p>
                生年月日：1997/02/19<br>
                趣味：ビリヤード
              </p>
            </div>
          </div>
        </div>
      </section>
      <!-- /about -->

      <!-- contact -->
      <section class="contact section" id="contact">
        <div class="inner">
          <h2 class="title">CONTACT</h2>
          <p class="lead">
            お問い合わせは、<br class="sp-only">メールにてお願いいたします。
          </p>
          <div class="contact-list">
            <span class="contact-item">haruuchi.pool.0219@gmail.com</span>
          </div>
        </div>
      </section>
      <!-- /contact -->
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