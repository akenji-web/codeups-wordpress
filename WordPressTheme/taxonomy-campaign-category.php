<?php get_header(); ?>
<main>
  <!-- メインビュー -->
  <div class="mv">
    <picture>
      <source srcset="<?php echo esc_url(get_theme_file_uri("/assets/images/page-campaign-fv-sp.jpg")); ?>" media="(max-width: 767px)">
      <img class="mv__image" src="<?php echo esc_url(get_theme_file_uri("/assets/images/page-campaign-fv.jpg")); ?>" alt="キャンペーンのメイン画像">
    </picture>
    <h1 class="mv__text">campaign</h1>
  </div>

  <!-- パンくず -->
  <?php get_template_part('parts/breadcrumb'); ?>

  <!-- キャンペーンコンテンツ -->
  <div class="archive-campaign sub-top-main">
    <div class="archive-campaign__inner inner back-icon">
      <!-- カテゴリーボタン -->
      <ul class="archive-campaign__category-button category-button">
        <?php
          // 現在いるページのタームのIDを取得
          $current_term_id = get_queried_object()->term_id;
          $terms = get_terms([
            // 表示するタクソノミースラッグを記述
            'taxonomy' => 'campaign-category',
            'orderby' => 'name',
            'order'   => 'ASC',
            // 表示するタームの数を指定
            'number'  => 4
          ]);

          // カスタム投稿一覧ページへのURL
          $home_class = (is_post_type_archive()) ? 'is-active' : '';
          $home_link = sprintf(
            //カスタム投稿一覧ページへのaタグに付与するクラスを指定できる
            '<li class="category-button__item"><a class="tab__link %s" href="%s" alt="%s">ALL</a></li>',
            $home_class,
            // カスタム投稿一覧ページのスラッグを指定
            esc_url(home_url('/campaign')),
            esc_attr(__('View all posts', 'textdomain'))
          );
          echo sprintf(esc_html__('%s', 'textdomain'), $home_link);

          // タームのリンク
          if ($terms) {
            foreach ($terms as $term) {
              // カレントクラスに付与するクラスを指定できる
              $term_class = ($current_term_id === $term->term_id) ? 'is-active' : '';
              $term_link = sprintf(
                // 各タームに付与するクラスを指定できる
                '<li class="category-button__item"><a class="tab__link %s" href="%s" alt="%s">%s</a></li>',
                $term_class,
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
      <?php
        $campaign_slug = get_query_var('campaign-category');
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        $args = [
          "post_type" => "campaign",
          "tax_query" => [
            [
              'taxonomy' => 'campaign-category',
              'field'    => 'slug',
              'terms'    => $campaign_slug,
            ],
          ],
          "posts_per_page" => 4,
          "paged" => $paged,
        ];
        $the_query = new WP_Query($args);
      ?>
      <div class="archive-campaign__cards archive-campaign-cards">
        <?php if ($the_query->have_posts()) : ?>
          <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
            <div class="archive-campaign-cards__item campaign-card">
              <?php if (has_post_thumbnail()) : ?>
                <img class="campaign-card__image" src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title_attribute(); ?>" loading="lazy" decoding="async">
              <?php else : ?>
                <img class="campaign-card__image" src="<?php echo esc_url(get_theme_file_uri( "/assets/images/noimage.jpg" )); ?>)" alt="NoImage画像" />
              <?php endif ; ?>
              <div class="campaign-card__body campaign-card__body--large">
                <?php
                  $taxonomy_terms = get_the_terms($post->ID, 'campaign-category');
                  if ( ! empty( $taxonomy_terms ) ) {
                    foreach( $taxonomy_terms as $taxonomy_term ) {
                      echo '<p class="campaign-card__type card-type">' . esc_html( $taxonomy_term->name ) . '</p>';
                    }
                  }
                ?>
                <p class="campaign-card__title campaign-card__title--large"><?php the_title(); ?></p>
                <p class="campaign-card__text">全部コミコミ(お一人様)</p>
                <div class="campaign-card__price">
                  <p class="campaign-card__before-price">&yen;<?php echo formatted_price(get_field("custom-campaign-regular-price")); ?></p>
                  <p class="campaign-card__after-price">&yen;<?php echo formatted_price(get_field("custom-campaign-discount-price")); ?></p>
                </div>
                <div class="u-desktop">
                  <p class="campaign-card__main-text text"><?php the_content(); ?></p>
                  <p class="campaign-card__date">
                    <time datetime="2023-06-01" itemprop="startDate">2023/6/1</time>-<time datetime="09-30" itemprop="endDate">9/30</time>
                  </p>
                  <p class="campaign-card__attention">ご予約・お問い合わせはコチラ</p>
                  <div class="campaign-card__button">
                    <a href="#" class="button">contact us<span class="button__arrow"></span></a>
                  </div>
                </div>
              </div>
            </div>
          <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
        <?php else : ?>
          <p>記事が投稿されていません</p>
        <?php endif; ?>
      </div>

      <!-- ページネーション -->
      <div class="top-pagination">
        <?php
          if (function_exists('wp_pagenavi')) {
            wp_pagenavi(array('query' => $the_query));
          }
        ?>
      </div>
    </div>
  </div>

  <!-- コンタクト -->
  <?php get_template_part('parts/contact'); ?>
  
</main>
<?php get_footer(); ?>