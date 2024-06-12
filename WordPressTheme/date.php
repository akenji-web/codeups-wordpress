<?php
  // カスタムクエリの前に、メインクエリを調整
  global $wp_query;
  $wp_query->query_vars['posts_per_page'] = 10;
  get_header();
?>
<main>
  <!-- メインビュー -->
  <div class="mv">
    <picture>
      <source srcset="<?php echo esc_url(get_theme_file_uri("/assets/images/page-blog-fv.jpg")); ?>" media="(max-width: 767px)">
      <img class="mv__image" src="<?php echo esc_url(get_theme_file_uri("/assets/images/page-blog-fv-sp.jpg")); ?>" alt="ブログのメイン画像">
    </picture>
    <h1 class="mv__text">blog</h1>
  </div>

  <!-- パンくず -->
  <?php get_template_part('parts/breadcrumb'); ?>

  <div class="blog-layout sub-top-main sub-top-main--wide">
    <div class="blog-layout__inner inner back-icon">
      <div class="blog-layout__container">
        <div class="blog-layout__main-contents">
          <!-- ブログカード一覧 -->
          <?php
            $year = (get_query_var('year')) ? get_query_var('year') : date('Y'); // URLに年がなければ現在の年を取得
            $month = (get_query_var('monthnum')) ? get_query_var('monthnum') : date('n'); // URLに月がなければ現在の月を取得
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $args = [
              'year'      => $year,
              'monthnum'  => $month,
              "post_type" => "post",
              "posts_per_page" => 10,
              "paged" => $paged,
            ];
            $the_query = new WP_Query($args);
          ?>
          <div class="blog-layout__cards blog-cards blog-cards--2columns">
            <?php if ($the_query->have_posts()) : ?>
              <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                <a href="<?php the_permalink(); ?>" class="blog-cards__item blog-card">
                  <figure class="blog-card__image">
                    <?php if (has_post_thumbnail()) : ?>
                      <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title_attribute(); ?>" loading="lazy" decoding="async">
                    <?php else : ?>
                      <img src="<?php echo esc_url(get_theme_file_uri( "/assets/images/noimage.jpg" )); ?>)" alt="NoImage画像" loading="lazy" decoding="async">
                    <?php endif ; ?>
                  </figure>
                  <div class="blog-card__body">
                    <time class="blog-card__date" datetime="<?php echo get_the_date('Y-m-d'); ?>"><?php echo get_the_date('Y.m/d'); ?></time>
                    <p class="blog-card__title content-title content-title--blog"><?php the_title(); ?></p>
                    <p class="blog-card__text text"><?php the_content(); ?></p>
                  </div>
                </a>
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

        <!-- サイドバー -->
        <?php get_template_part('sidebar'); ?>
      </div>
    </div>
  </div>

  <!-- コンタクト -->
  <?php get_template_part('parts/contact'); ?>

</main>
<?php get_footer(); ?>