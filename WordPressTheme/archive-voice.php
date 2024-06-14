<?php get_header(); ?>
<main>
  <!-- メインビュー -->
  <div class="mv">
    <picture>
      <source srcset="<?php echo esc_url(get_theme_file_uri("/assets/images/page-voice-fv-sp.jpg")); ?>" media="(max-width: 767px)">
      <img class="mv__image" src="<?php echo esc_url(get_theme_file_uri("/assets/images/page-voice-fv.jpg")); ?>" alt="キャンペーンのメイン画像">
    </picture>
    <h1 class="mv__text">voice</h1>
  </div>

  <!-- パンくず -->
  <?php get_template_part('parts/breadcrumb'); ?>

  <div class="sub-voice sub-top-main sub-top-main--wide">
    <div class="sub-voice__inner inner back-icon">
      <!-- カテゴリーボタン -->
      <ul class="sub-voice__category-button category-button">
        <?php
          // 現在いるページのタームのIDを取得
          $terms = get_terms([
            // 表示するタクソノミースラッグを記述
            'taxonomy' => 'voice-category',
            'orderby' => 'name',
            'order'   => 'ASC',
            // 表示するタームの数を指定
            'number'  => 4
          ]);

          // カスタム投稿一覧ページへのURL
          $home_class = (is_post_type_archive()) ? 'is-active' : '';
          $home_link = sprintf(
            //カスタム投稿一覧ページへのaタグに付与するクラスを指定できる
            '<li class="category-button__item"><a class="tab__link %s" href="%s" alt="%s">全て</a></li>',
            $home_class,
            // カスタム投稿一覧ページのスラッグを指定
            esc_url(home_url('/voice')),
            esc_attr(__('View all posts', 'textdomain'))
          );
          echo sprintf(esc_html__('%s', 'textdomain'), $home_link);

          // タームのリンク
          if ($terms) {
            foreach ($terms as $term) {
              $term_link = sprintf(
                // 各タームに付与するクラスを指定できる
                '<li class="category-button__item"><a class="tab__link" href="%s" alt="%s">%s</a></li>',
                esc_url(get_term_link($term->term_id)),
                esc_attr(sprintf(__('View all posts in %s', 'textdomain'), $term->name)),
                esc_html($term->name)
              );
              echo sprintf(esc_html__('%s', 'textdomain'), $term_link);
            }
          }
        ?>
      </ul>

      <!-- カード一覧 -->
      <div class="sub-voice__cards voice-cards">
        <?php if (have_posts()) : ?>
          <?php while (have_posts()) : the_post(); ?>
            <a href="<?php echo esc_url(home_url("/voice")) ?>" class="voice-cards__item voice-card">
              <div class="voice-card__heading">
                <p class="voice-card__age"><?php the_field("custom-voice-age"); ?></p>
                <?php
                  $taxonomy_terms = get_the_terms($post->ID, 'voice-category');
                  if ( ! empty( $taxonomy_terms ) ) {
                    foreach( $taxonomy_terms as $taxonomy_term ) {
                      echo '<p class="voice-card__type card-type card-type--tight">' . esc_html( $taxonomy_term->name ) . '</p>';
                    }
                  }
                ?>
                <p class="voice-card__title content-title content-title--voice"><?php the_title(); ?></p>
              </div>
              <div class="voice-card__image-area js-color-box">
                <?php if (has_post_thumbnail()) : ?>
                  <img class="voice-card__image" src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title_attribute(); ?>" loading="lazy" decoding="async">
                <?php else : ?>
                  <img class="voice-card__image" src="<?php echo esc_url(get_theme_file_uri( "/assets/images/noimage.jpg" )); ?>)" alt="NoImage画像" loading="lazy" decoding="async" />
                <?php endif ; ?>
              </div>
              <div class="voice-card__body">
                <div class="voice-card__text text text--green"><?php the_content(); ?></div>
              </div>
            </a>
          <?php endwhile; ?>
        <?php else : ?>
          <p>記事が投稿されていません</p>
        <?php endif; ?>
      </div>

      <!-- ページネーション -->
      <div class="top-pagination">
        <?php
          if (function_exists('wp_pagenavi')) {
            wp_pagenavi();
          }
        ?>
      </div>
    </div>
  </div>

  <!-- コンタクト -->
  <section id="contact" class="contact top-contact top-contact--sub">
    <div class="contact__inner inner">
      <div class="contact__container">
        <div class="contact__content-left">
          <div class="contact__logo-area">
            <img class="contact__logo" src="<?php echo esc_url(get_theme_file_uri("/assets/images/logo2.png")); ?>" alt="CodeUps">
          </div>
          <div class="contact__info">
            <div class="contact__info-text text text--green">
              <p>沖縄県那覇市1-1</p>
              <p>TEL:0120-000-0000</p>
              <p>営業時間:8:30-19:00</p>
              <p>定休日:毎週火曜日</p>
            </div>
            <div class="contact__map">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3579.524065273254!2d127.67657937595395!3d26.212156189844457!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x34e56bd6e046d289%3A0x345ffb669fadbd4f!2z6YKj6KaH5biC5b255omA!5e0!3m2!1sja!2sjp!4v1710048343203!5m2!1sja!2sjp" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
          </div>
        </div>
        <div class="contact__content-right">
          <div class="contact__heading heading">
            <h2 class="heading__title heading__title--large">contact</h2>
            <p class="heading__subtitle heading__subtitle--tight">お問い合わせ</p>
          </div>
          <p class="contact__text">ご予約・お問い合わせはコチラ</p>
          <div class="contact__button">
            <a href="" class="button">Contact us<span class="button__arrow"></span></a>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
<?php get_footer(); ?>