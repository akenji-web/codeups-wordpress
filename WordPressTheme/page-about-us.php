<?php get_header(); ?>
<main>
  <!-- メインビュー -->
  <div class="mv">
  <picture>
      <source srcset="<?php echo esc_url(get_theme_file_uri("/assets/images/page-aboutus-fv-sp.jpg")); ?>" media="(max-width: 767px)">
      <img class="mv__image" src="<?php echo esc_url(get_theme_file_uri("/assets/images/page-aboutus-fv.jpg")); ?>" alt="私たちについてのメイン画像">
    </picture>
    <h1 class="mv__text">about us</h1>
  </div>

  <!-- パンくず -->
  <?php get_template_part('parts/breadcrumb'); ?>

  <!-- Dive into the Ocean -->
  <div class="sub-about-us sub-top-main">
    <div class="sub-about-us__inner inner back-icon">
      <div class="sub-about-us__container">
        <div class="sub-about-us__left-image u-desktop">
          <img src="<?php echo esc_url(get_theme_file_uri("/assets/images/about1.jpg")); ?>" alt="シーサーの画像">
        </div>
        <div class="sub-about-us__right-image">
          <img src="<?php echo esc_url(get_theme_file_uri("/assets/images/about2.jpg")); ?>" alt="二匹の黄色の魚の画像">
        </div>
        <p class="sub-about-us__phrase">Dive into<br>the Ocean</p>
        <p class="sub-about-us__text text text--reverse">
          ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
          ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
        </p>
      </div>
    </div>
  </div>

  <!-- ギャラリー -->
  <section class="gallery sub-about-us-gallery">
    <div class="gallery__inner inner">
      <div class="gallery__heading heading">
        <h2 class="heading__title">gallery</h2>
        <p class="heading__subtitle">フォト</p>
      </div>
      <div class="gallery__container">
        <ul class="gallery__items">
          <?php
            $group = SCF::get('about-images');
            foreach ($group as $fields ) :
          ?>
          <li class="gallery__item js-modal-open">
            <img src="<?php echo esc_url(wp_get_attachment_url($fields['custom-about-image'])); ?>" alt="" loading="lazy" decoding="async" >
          </li>
          <?php endforeach; ?>
        </ul>
        <!-- モーダルウィンドウ -->
        <div class="modal js-modal">
          <div class="modal__body modal__body--vertical">
            <img src="<?php echo esc_url(get_theme_file_uri("/assets/images/gallery1.jpg")); ?>" alt="赤い魚の群れの画像">
          </div>
        </div>
        <div class="modal js-modal">
          <div class="modal__body">
            <img src="<?php echo esc_url(get_theme_file_uri("/assets/images/gallery2.jpg")); ?>" alt="海辺から空と島が見える様子">
          </div>
        </div>
        <div class="modal js-modal">
          <div class="modal__body">
            <img src="<?php echo esc_url(get_theme_file_uri("/assets/images/gallery3.jpg")); ?>" alt="チョウチョウウオの画像">
          </div>
        </div>
        <div class="modal js-modal">
          <div class="modal__body">
          <img src="<?php echo esc_url(get_theme_file_uri("/assets/images/gallery4.jpg")); ?>" alt="アブラヤッコの画像">
          </div>
        </div>
        <div class="modal js-modal">
          <div class="modal__body">
          <img src="<?php echo esc_url(get_theme_file_uri("/assets/images/gallery5.jpg")); ?>" alt="アカネハナゴイの群れの画像">
          </div>
        </div>
        <div class="modal js-modal">
          <div class="modal__body  modal__body--vertical">
            <img src="<?php echo esc_url(get_theme_file_uri("/assets/images/gallery6.jpg")); ?>" alt="黄色いチョウチョウウオの画像">
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
<?php get_footer(); ?>