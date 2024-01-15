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

   <link rel="stylesheet" href="style.css">
</head>

<body>
    <!-- ヘッダー -->
    <header>
        <!-- ロゴ -->
        <a href="index.html"  id="logo"><img src="images/ace-logo1.png" alt="トップページに戻る"></a>
        <!-- ハンバーガーメニュー -->
        <button class="hamburger-menu" id="js-hamburger-menu">
            <span class="hamburger-menu__bar"></span>
            <span class="hamburger-menu__bar"></span>
            <span class="hamburger-menu__bar"></span>
          </button>
        <!-- ナビゲーション -->
        <nav class="navigation">
            <ul class="navigation__list">
                <li class="navigation__list-item"><a href="index.html" class="navigation__link">HOMES</a></li>
                <li class="navigation__list-item"><a href="index.html#service" class="navigation__link">事業内容</a></li>
                <li class="navigation__list-item"><a href="index.html#works" class="navigation__link">施工事例</a></li>
                <li class="navigation__list-item"><a href="index.html#aboutus" class="navigation__link">会社概要</a></li>
                <li class="navigation__list-item_btn"><a href="index.html#Form" class="navigation__link">お問い合わせ</a></li>
              </ul>
        </nav>
    </header>
    <main>
        <article>

            
            <!-- メインビジュアル -->
            <section id="main-visual">
                <!-- Full Page Image Background Carousel Header -->
                <div id="myCarousel" class="carousel slide">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for Slides -->
                <div class="carousel-inner">
                <div class="item active">
                <!-- Set the first background image using inline CSS below. -->
                <div class="fill" style="background-image:url('images/aircon.jpg');"></div>
                <div class="carousel-caption">
                 <h2 class="animated fadeInLeft">心地よい空間を創造します</h2>
                 <p class="animated fadeInRight">create a confy space</p>
                <p class="animated fadeInRight">空調設備ACEは富山県のエアコンの設備会社です</p>
                </div>
             </div>
            <div class="item">
            <!-- Set the second background image using inline CSS below. -->
            <div class="fill" style="background-image:url('images/sithugaiki.jpg');"></div>
            <div class="carousel-caption">
                 <h2 class="animated fadeInDown">心地よい空間を創造します</h2>
                 <p class="animated fadeInRight">create a confy space</p>
              <p class="animated fadeInRight">空調設備ACEは富山県のエアコンの設備会社です</p>
            </div>
        </div>
        <div class="item">
            <!-- Set the third background image using inline CSS below. -->
            <div class="fill" style="background-image:url('images/sibuya-sky.jpg');"></div>
            <div class="carousel-caption">
                 <h2 class="animated fadeInRight">心地よい空間を創造します</h2>
                 <p class="animated fadeInRight">create a confy space</p>
              <p class="animated fadeInRight">空調設備ACEは富山県のエアコンの設備会社です</p>
                 
            </div>
        </div>
    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="icon-prev"></span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="icon-next"></span>
    </a>

</div>
            </section>
            <!-- 事業内容 -->
            <section id="service">
                
                <div class="section-inner img-left">
                   <img class="service-photo" src="images/service-aircon.jpg" alt="四方向エアコン">
                    <div id="service-top" class="service-text">
                        <div class="service-text-inner">
                            <h2 class="index-h2 google-fonts">service</h2>
                            <h3>空調設備工事</h3>
                            <p>
                            店舗・オフィス・工場などの空調設備の新築工事・リニューアル工事を承ります。
                            家庭用エアコン・業務用エアコンの販売から施工までをワンストップで空調設備ACEが手掛けます。
                            お客様のニーズに合わせて常に心地よい空間の創造を目指し、最適な空調設備システムをご提案します。
                            </p>
                        </div>
                    </div>
                </div>
                    <div class="section-inner img-right">
                        <img class="service-photo" src="images/service-aircon2.jpg" alt="エアコンを洗浄する人">
                        <div id="service-top" class="service-text">
                            <div class="service-text-inner">
                            <h2 class="index-h2">service</h2>
                            <h3>エアコン洗浄</h3>
                            <p>エアコンの内部は、ホコリが溜まりやすく湿度があるため、カビやダニなどのハウスダストが繁殖しやすい場所です。
                            これらは、放っておくとアレルギーの原因になる可能性があります。
                            定期的なエアコンのクリーニングは、店舗・オフィス・施設内の空調の清潔を保つためにも大変重要です。
                            </p>
                            </div>
                        </div>
                </div>
            </section>
            <!--施工事例  -->
           <section id="works">
                    
                    <div class="works">
                        <h3>施工事例</h3>  
                    </div>
                    <div class="works-photo">
                    <img src="images/works-before1.jpg" alt="施工事例のbefore">
                    <img src="images/works-after1.jpg" alt="施工事例のafter">
                    </div>
                    <p>オフィスの古くなった業務用エアコンの入替工事を行いました。</p>
            </section>
            
            <!-- 会社概要 -->
            <section id="aboutus">
                <div class="aboutus-index">
                    <h3>会社概要</h3>
                    <h2 class="index-h2 google-fonts">aboutus</h2>
                </div>
                    <table class="aboutus">
                        <tr>
                        <th>屋号</th>
                        <td>空調設備ＡＣＥ</td>
                        </tr>
                        <tr>
                        <th>創業</th>
                        <td>2022年5月</td>
                        </tr>
                        <tr>
                        <th>所在地</th>
                        <td>富山県富山市大町</td>
                        </tr>
                        <tr>
                        <th>電話</th>
                        <td>080-4250-7875</td>
                        </tr>
                        <tr>
                        <th>メールアドレス</th>
                        <td>y.fujino.ace@outlook.jp</td>
                        </tr>
                        <tr>
                        <th>事業内容</th>
                        <td>空調機器販売・設計・施工
                        エアコン洗浄・冷媒回収・換気工事</td>
                        </tr>
                    </table>
            </section>
            <!-- お問い合わせ -->
            <section id="Form">
                    <div class="contact">
                        <h3>お問い合わせ</h3>
                    </div>
                    <div class="Form-Item">
                      <p class="Form-Item-Label">
                        <span class="Form-Item-Label-Required">必須</span>会社名
                      </p>
                      <input type="text" class="Form-Item-Input" placeholder="例）株式会社ACE">
                    </div>
                    <div class="Form-Item">
                      <p class="Form-Item-Label"><span class="Form-Item-Label-Required">必須</span>氏名</p>
                      <input type="text" class="Form-Item-Input" placeholder="例）山田太郎">
                    </div>
                    <div class="Form-Item">
                      <p class="Form-Item-Label"><span class="Form-Item-Label-Required">必須</span>電話番号</p>
                      <input type="text" class="Form-Item-Input" placeholder="例）000-0000-0000">
                    </div>
                    <div class="Form-Item">
                      <p class="Form-Item-Label"><span class="Form-Item-Label-Required">必須</span>メールアドレス</p>
                      <input type="email" class="Form-Item-Input" placeholder="例）example@gmail.com">
                    </div>
                    <div class="Form-Item">
                      <p class="Form-Item-Label isMsg"><span class="Form-Item-Label-Required">必須</span>お問い合わせ内容</p>
                      <textarea class="Form-Item-Textarea"></textarea>
                    </div>
                    <input type="submit" class="Form-Btn" value="送信する">
            </section>
        </article>
        <!-- フッター -->
        <footer>
            <div class="Footer-Item">
                <img src="images/footer_logp.png" alt="フッター用のエアコン画像">
                <p>お気軽にお問合せください</p>
                <p>TEL.080-7875-4250</p>
                <p>FAX.050-1437-0259</p>
                <div class="Insta_Btn">
                    <a href="https://www.instagram.com/toyama_ace/" class="insta_btn2">
                    <i class="fab fa-instagram"></i> <span>Follow Me</span>
                  </a>
                </div>
            </div>
            
        </footer>

    </main>
     <!-- 以下2つのjsファイルを読み込ませます -->
     <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script>$(function () {
        $('#js-hamburger-menu, .navigation__link').on('click', function () {
          $('.navigation').slideToggle(500)
          $('.hamburger-menu').toggleClass('hamburger-menu--open')
        });
      });</script>
      <!-- slickの読み込み -->
   <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

   
 
</body>
</html>