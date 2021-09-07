<footer class="ly_footer"
    style="background-image: url(<?php echo esc_url(get_theme_file_uri('images/bg_footer.jpg')); ?>);">
    <div class="ly_footer_contents ly_container">
        <div class="ly_footer_logo_wrapper">
            <div class="ly_footer_logo">
                <a href="<?php echo esc_url(home_url('/')); ?>" class="ly_footer_logo-link">
                    <img src="<?php echo esc_url(get_theme_file_uri('images/logo-sinkyokusinkai.svg')); ?>"
                        alt="埼玉県（飯能市・浦和市など9道場）の空手道場 新極真会 埼玉武蔵支部" class="ly_footer_logo-img">
                </a>
            </div>
        </div>
        <!-- /.ly_footer_contents -->

        <nav class="ly_footer-nav">
            <ul class="ly_footer-nav_items">
                <li class="ly_footer-nav_item"><a href="<?php echo esc_url(home_url('/')); ?>"
                        class="ly_footer-nav_link">ホーム</a></li>
                <li class="ly_footer-nav_item"><a href="<?php echo esc_url(home_url('/about')); ?>"
                        class="ly_footer-nav_link">埼玉武蔵支部について</a></li>
                <li class="ly_footer-nav_item"><a href="<?php echo esc_url(home_url('/introduction')); ?>"
                        class="ly_footer-nav_link">長谷川達矢師範の紹介</a></li>
                <li class="ly_footer-nav_item"><a href="<?php echo esc_url(home_url('/staff')); ?>"
                        class="ly_footer-nav_link">指導員紹介</a></li>
                <li class="ly_footer-nav_item"><a href="<?php echo esc_url(home_url('/join-us')); ?>"
                        class="ly_footer-nav_link">入会について</a></li>
                <li class="ly_footer-nav_item"><a href="<?php echo esc_url(home_url('/access')); ?>"
                        class="ly_footer-nav_link">埼玉武蔵支部の道場一覧＆アクセス</a></li>
                <li class="ly_footer-nav_item"><a href="<?php echo esc_url(home_url('/question')); ?>"
                        class="ly_footer-nav_link">よくある質問</a></li>
                <li class="ly_footer-nav_item"><a href="<?php echo esc_url(home_url('/photo-gallery')); ?>"
                        class="ly_footer-nav_link">フォトギャラリー</a></li>
            </ul>
        </nav>
        <!-- /.ly_footer-nav -->

        <span class="ly_footer_border"></span>

        <div class="ly_footer_bottom">
            <ul class="ly_footer-sns">
                <li class="ly_footer-sns_item ly_footer-sns_item__facebook">
                    <a href="https://www.facebook.com/musasi.saitama" class="ly_footer-sns_link" target="_blank"
                        rel="noopener noreferrer">FACEBOOK</a>
                </li>
                <li class="ly_footer-sns_item ly_footer-sns_item__instagram">
                    <a href="https://www.instagram.com/saitamamusashi/?hl=ja" class="ly_footer-sns_link" target="_blank"
                        rel="noopener noreferrer">INSTAGRAM</a>
                </li>
            </ul>

            <p class="ly_footer_main-address">
                【飯能本部道場】<br>
                住所：埼玉県飯能市八幡町7-19
            </p>
        </div>
        <!-- /.ly_footer_bottom -->
    </div>
</footer>
<!-- /.ly_footer -->
<?php wp_footer(); ?>
</body>

</html>
