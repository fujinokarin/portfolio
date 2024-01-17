<?php get_header();?>
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
                <div class="fill" style="background-image:url('<?php echo get_template_directory_uri(); ?>/images/aircon.jpg');"></div>
                <div class="carousel-caption">
                 <h2 class="animated fadeInLeft">心地よい空間を創造します</h2>
                 <p class="animated fadeInRight">create a confy space</p>
                <p class="animated fadeInRight">空調設備ACEは富山県のエアコンの設備会社です</p>
                </div>
             </div>
            <div class="item">
            <!-- Set the second background image using inline CSS below. -->
            <div class="fill" style="background-image:url('<?php echo get_template_directory_uri(); ?>/images/sithugaiki.jpg');"></div>
            <div class="carousel-caption">
                 <h2 class="animated fadeInDown">心地よい空間を創造します</h2>
                 <p class="animated fadeInRight">create a confy space</p>
              <p class="animated fadeInRight">空調設備ACEは富山県のエアコンの設備会社です</p>
            </div>
        </div>
        <div class="item">
            <!-- Set the third background image using inline CSS below. -->
            <div class="fill" style="background-image:url('<?php echo get_template_directory_uri(); ?>/images/sibuya-sky.jpg');"></div>
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
                   <img class="service-photo" src="<?php echo get_template_directory_uri(); ?>/images/service-aircon.jpg" alt="四方向エアコン">
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
                        <img class="service-photo" src="<?php echo get_template_directory_uri(); ?>/images/service-aircon2.jpg" alt="エアコンを洗浄する人">
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
                    <?php
               //取得したい投稿記事などの条件を引数として渡す
               $args = array(
                   // 投稿タイプ
                   'post_type'      => 'post',
                   // カテゴリー名
                   'category_name' => 'works',
                   // 1ページに表示する投稿数
                   'posts_per_page' => 3,
               );
               // データの取得
               $posts = get_posts($args);
             ?>
               <!-- ループ処理 -->
             <?php foreach($posts as $post): ?>
             <?php setup_postdata($post); ?>

             <div class="works-photo">
             <?php if(have_posts()): while(have_posts()): the_post(); ?>
                <!-- アイキャッチ画像を表示するテンプレートタグ -->
                <?php the_post_thumbnail('thumbnail'); ?>
                <?php endwhile; endif; ?>
             </div>

             <p><?php the_title(); ?></p>
           

             <?php endforeach; ?>
             <!-- 使用した投稿データをリセット -->
             <?php wp_reset_postdata(); ?>

          </div>
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
        <?php get_footer(); ?>
        