<!DOCTYPE html>
<html lang="ja">

<head>
    <title>ACE</title>
    <meta charset="utf-8" />
    <meta discription="空調設備ACEのHPです。">
    
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <!-- cssを読み込みます -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <!-- JQery -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.min.js"></script>
    
    <!-- ここでGoogle Fontsを読み込みます -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@300&display=swap" rel="stylesheet">
    
    <!-- SNSのアイコンを読み込みます -->
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <!-- slickの読み込み -->
   <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css">
   <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">

   <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
   <?php wp_head(); ?>
</head>

<body>
    <!-- ヘッダー -->
    <header>
        <!-- ロゴ -->
        <a href="index.html"  id="logo"><img src="<?php echo get_template_directory_uri(); ?>/images/ace-logo1.png" alt="トップページに戻る"></a>
        <!-- ハンバーガーメニュー -->
        <button class="hamburger-menu" id="js-hamburger-menu">
            <span class="hamburger-menu__bar"></span>
            <span class="hamburger-menu__bar"></span>
            <span class="hamburger-menu__bar"></span>
          </button>
        <!-- ナビゲーション -->
        <nav class="navigation">
            <ul class="navigation__list">
                <li class="navigation__list-item"><a href="<?php echo get_template_directory_uri(); ?>/index.html" class="navigation__link">HOMES</a></li>
                <li class="navigation__list-item"><a href="<?php echo get_template_directory_uri(); ?>/index.html#service" class="navigation__link">事業内容</a></li>
                <li class="navigation__list-item"><a href="<?php echo get_template_directory_uri(); ?>/index.html#works" class="navigation__link">施工事例</a></li>
                <li class="navigation__list-item"><a href="<?php echo get_template_directory_uri(); ?>/index.html#aboutus" class="navigation__link">会社概要</a></li>
                <li class="navigation__list-item_btn"><a href="<?php echo get_template_directory_uri(); ?>/index.html#Form" class="navigation__link">お問い合わせ</a></li>
              </ul>
        </nav>
    </header>