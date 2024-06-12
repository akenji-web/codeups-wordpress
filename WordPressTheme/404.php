<?php get_header(); ?>
  <main>
    <div class="error">

      <!-- パンくず -->
      <div class="breadcrumb top-breadcrumb">
        <div class="breadcrumb__inner inner">
        <?php if (function_exists('bcn_display')) { ?>
          <div class="breadcrumb__list breadcrumb__list--white" vocab="http://schema.org/" typeof="BreadcrumbList">
            <?php bcn_display(); ?>
          </div>
        <?php } ?>
        </div>
      </div>

      <!-- エラーコンテンツ -->
      <div class="error__contents">
        <div class="error__inner inner">
          <div class="error__container">
            <h2 class="error__title">404</h2>
            <p class="error__text">申し訳ありません。<br>お探しのページが見つかりません。</p>
            <div class="error__button">
              <a href="<?php echo esc_url(home_url()); ?>" class="button button--reverse">page TOP<span class="button__arrow"></span></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>

  <!-- フッター -->
  <footer class="footer">
    <div class="footer__inner inner">
      <div class="footer__heading">
        <img class="footer__logo" src="<?php echo esc_url(get_theme_file_uri("/assets/images/logo1.png")); ?>" alt="CodeUps">
        <div class="footer__sns-icon">
          <a href="#" class="footer__facebook">
            <img src="<?php echo esc_url(get_theme_file_uri("/assets/images/facebooklogo.png")); ?>" alt="facebook">
          </a>
          <a href="#" class="footer__instagram">
            <img src="<?php echo esc_url(get_theme_file_uri("/assets/images/instagramlogo.png")); ?>" alt="instagram">
          </a>
        </div>
      </div>
      <div class="footer__container nav">
        <ul class="nav__items">
          <li class="nav__item nav__item--bold">
            <a href="<?php echo esc_url(home_url("/campaign")) ?>" class="nav__link nav__link--bold">キャンペーン</a>
          </li>
          <li class="nav__item">
            <a href="#" class="nav__link">ライセンス取得</a>
          </li>
          <li class="nav__item">
            <a href="#" class="nav__link">貸切体験ダイビング</a>
          </li>
          <li class="nav__item">
            <a href="#" class="nav__link">ナイトダイビング</a>
          </li>
          <li class="nav__item nav__item--bold">
            <a href="<?php echo esc_url(home_url("/about")) ?>" class="nav__link nav__link--bold">私たちについて</a>
          </li>
        </ul>
        <ul class="nav__items">
          <li class="nav__item nav__item--bold">
            <a href="<?php echo esc_url(home_url("/information")) ?>" class="nav__link nav__link--bold">ダイビング情報</a>
          </li>
          <li class="nav__item">
            <a href="<?php echo esc_url(home_url("/information?tab=1")) ?>" class="nav__link">ライセンス講習</a>
          </li>
          <li class="nav__item">
            <a href="<?php echo esc_url(home_url("/information?tab=3")) ?>" class="nav__link">体験ダイビング</a>
          </li>
          <li class="nav__item">
            <a href="<?php echo esc_url(home_url("/information?tab=2")) ?>" class="nav__link">ファンダイビング</a>
          </li>
          <li class="nav__item nav__item--bold">
            <a href="<?php echo esc_url(home_url("/blog")) ?>" class="nav__link nav__link--bold">ブログ</a>
          </li>
        </ul>
        <ul class="nav__items">
          <li class="nav__item nav__item--bold">
            <a href="<?php echo esc_url(home_url("/voice")) ?>" class="nav__link nav__link--bold">お客様の声</a>
          </li>
          <li class="nav__item nav__item--bold">
            <a href="<?php echo esc_url(home_url("/price")) ?>" class="nav__link nav__link--bold">料金一覧</a>
          </li>
          <li class="nav__item">
            <a href="#" class="nav__link">ライセンス講習</a>
          </li>
          <li class="nav__item">
            <a href="#" class="nav__link">体験ダイビング</a>
          </li>
          <li class="nav__item">
            <a href="#" class="nav__link">ファンダイビング</a>
          </li>
        </ul>
        <ul class="nav__items">
          <li class="nav__item nav__item--bold">
            <a href="<?php echo esc_url(home_url("/faq")) ?>" class="nav__link nav__link--bold">よくある質問</a>
          </li>
          <li class="nav__item nav__item--bold">
            <a href="<?php echo esc_url(home_url("/privacypolicy")) ?>" class="nav__link nav__link--bold">プライバシー<br class="u-mobile">ポリシー</a>
          </li>
          <li class="nav__item nav__item--bold">
            <a href="<?php echo esc_url(home_url("/terms-of-service")) ?>" class="nav__link nav__link--bold">利用規約</a>
          </li>
          <li class="nav__item nav__item--bold">
            <a href="<?php echo esc_url(home_url("/contact")) ?>" class="nav__link nav__link--bold">お問い合わせ</a>
          </li>
        </ul>
      </div>
      <div class="footer__copy">
        <p><small>Copyright &copy;<?php echo wp_date("Y");?>&nbsp;CodeUps LLC. All Rights Reserved.</small></p>
      </div>
    </div>
  </footer>
</body>
</html>