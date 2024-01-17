<footer>
            <div class="Footer-Item">
                <img src="<?php echo get_template_directory_uri(); ?>/images/footer_logp.png" alt="フッター用のエアコン画像">
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

   
   <?php wp_footer(); ?>
</body>
</html>