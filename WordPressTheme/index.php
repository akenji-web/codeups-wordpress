<?php get_header(); ?>
<main>
  <!-- メインビュー -->
  <div class="mainview">
    <div class="mainview__inner">
      <div class="swiper mainview__swiper js-mainview-swiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <picture class="mainview__pic">
              <source srcset="<?php echo esc_url(get_theme_file_uri("/assets/images/fv1-sp.jpg")); ?>" media="(max-width: 767px)">
              <img class="mainview__image" src="<?php echo esc_url(get_theme_file_uri("/assets/images/fv1.jpg")); ?>" alt="ウミガメの様子">
            </picture>
          </div>
          <div class="swiper-slide">
            <picture class="mainview__pic">
              <source srcset="<?php echo esc_url(get_theme_file_uri("/assets/images/fv2-sp.jpg")); ?>" media="(max-width: 767px)">
              <img class="mainview__image" src="<?php echo esc_url(get_theme_file_uri("/assets/images/fv2.jpg")); ?>" alt="ウミガメとダイバーが近づいている様子">
            </picture>
          </div>
          <div class="swiper-slide">
            <picture class="mainview__pic">
              <source srcset="<?php echo esc_url(get_theme_file_uri("/assets/images/fv3-sp.jpg")); ?>" media="(max-width: 767px)">
              <img class="mainview__image" src="<?php echo esc_url(get_theme_file_uri("/assets/images/fv3.jpg")); ?>" alt="海に船が浮いている様子">
            </picture>
          </div>
          <div class="swiper-slide">
            <picture class="mainview__pic">
              <source srcset="<?php echo esc_url(get_theme_file_uri("/assets/images/fv4-sp.jpg")); ?>" media="(max-width: 767px)">
              <img class="mainview__image" src="<?php echo esc_url(get_theme_file_uri("/assets/images/fv4.jpg")); ?>" alt="きれいな海辺の様子">
            </picture>
          </div>
        </div>
        <div class="mainview__text">
          <p class="mainview__title">diving</p>
          <p class="mainview__subtitle">into the ocean</p>
        </div>
      </div>
    </div>
  </div>

  <!-- キャンペーン -->
  <section id="campaign" class="campaign top-campaign">
    <div class="campaign__inner inner">
      <div class="campaign__heading heading">
        <h2 class="heading__title">campaign</h2>
        <p class="heading__subtitle">キャンペーン</p>
      </div>
      <div class="campaign__navigation">
        <div class="swiper-button-prev campaign__swiper-button-prev"></div>
        <div class="swiper-button-next campaign__swiper-button-next"></div>
      </div>
      <div class="campaign__slide">
        <div class="swiper campaign__swiper js-campaign-swiper">
          <div class="swiper-wrapper campaign__swiper-wrapper">
            <div class="swiper-slide campaign__swiper-slide">
              <div class="campaign__card campaign-card">
                <img class="campaign-card__image" src="<?php echo esc_url(get_theme_file_uri("/assets/images/campaign1.jpg")); ?>" alt="カラフルな魚の様子">
                <div class="campaign-card__body">
                  <p class="campaign-card__type card-type">ライセンス講習</p>
                  <p class="campaign-card__title">ライセンス取得</p>
                  <p class="campaign-card__text">全部コミコミ(お一人様)</p>
                  <div class="campaign-card__price">
                    <p class="campaign-card__before-price">&yen;56,000</p>
                    <p class="campaign-card__after-price">&yen;46,000</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide campaign__swiper-slide">
              <div class="campaign__card campaign-card">
                <img class="campaign-card__image" src="<?php echo esc_url(get_theme_file_uri("/assets/images/campaign2.jpg")); ?>" alt="海辺から空と島が見える様子">
                <div class="campaign-card__body">
                  <p class="campaign-card__type card-type">体験ダイビング</p>
                  <p class="campaign-card__title">貸切体験ダイビング</p>
                  <p class="campaign-card__text">全部コミコミ(お一人様)</p>
                  <div class="campaign-card__price">
                    <p class="campaign-card__before-price">&yen;24,000</p>
                    <p class="campaign-card__after-price">&yen;18,000</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide campaign__swiper-slide">
              <div class="campaign__card campaign-card">
                <img class="campaign-card__image" src="<?php echo esc_url(get_theme_file_uri("/assets/images/campaign3.jpg")); ?>" alt="たくさんのクラゲの様子">
                <div class="campaign-card__body">
                  <p class="campaign-card__type card-type">体験ダイビング</p>
                  <p class="campaign-card__title">ナイトダイビング</p>
                  <p class="campaign-card__text">全部コミコミ(お一人様)</p>
                  <div class="campaign-card__price">
                    <p class="campaign-card__before-price">&yen;10,000</p>
                    <p class="campaign-card__after-price">&yen;8,000</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide campaign__swiper-slide">
              <div class="campaign__card campaign-card">
                <img class="campaign-card__image" src="<?php echo esc_url(get_theme_file_uri("/assets/images/campaign4.jpg")); ?>" alt="海に浮かぶダイバーの様子">
                <div class="campaign-card__body">
                  <p class="campaign-card__type card-type">ファンダイビング</p>
                  <p class="campaign-card__title">貸切ファンダイビング</p>
                  <p class="campaign-card__text">全部コミコミ(お一人様)</p>
                  <div class="campaign-card__price">
                    <p class="campaign-card__before-price">&yen;20,000</p>
                    <p class="campaign-card__after-price">&yen;16,000</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="campaign__button">
        <a href="#" class="button">view more<span class="button__arrow"></span></a>
      </div>
    </div>
  </section>

  <!-- 私たちについて -->
  <section id="about-us" class="about-us top-about-us">
    <div class="about-us__inner inner">
      <div class="about-us__heading heading">
        <h2 class="heading__title">about us</h2>
        <p class="heading__subtitle">私たちについて</p>
      </div>
      <div class="about-us__container">
        <div class="about-us__left-image">
          <img src="<?php echo esc_url(get_theme_file_uri("/assets/images/about1.jpg")); ?>" alt="シーサーの画像">
        </div>
        <div class="about-us__right-image">
          <img src="<?php echo esc_url(get_theme_file_uri("/assets/images/about2.jpg")); ?>" alt="二匹の黄色の魚の画像">
        </div>
        <div class="about-us__text-area">
          <p class="about-us__phrase">Dive into<br>the Ocean</p>
          <div class="about-us__text-area--right">
            <p class="about-us__text text text--reverse">
              ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
              ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
            </p>
            <div class="about-us__button">
              <a href="#" class="button">view more<span class="button__arrow"></span></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ダイビング情報 -->
  <section id="information" class="information top-information">
    <div class="information__inner inner">
      <div class="information__heading heading">
        <h2 class="heading__title">information</h2>
        <p class="heading__subtitle">ダイビング情報</p>
      </div>
      <div class="information__container">
        <div class="informatin__image-area js-color-box">
          <img class="information__image" src="<?php echo esc_url(get_theme_file_uri("/assets/images/info1.jpg")); ?>" alt="魚が泳いでいる様子">
        </div>
        <div class="information__contents">
          <p class="information__title content-title content-title--info">ライセンス講習</p>
          <p class="information__text text">
            当店はダイビングライセンス（Cカード）世界最大の教育機関PADIの「正規店」として店舗登録されています。<br>
            正規登録店として、安心安全に初めての方でも安心安全にライセンス取得をサポート致します。
          </p>
          <div class="information__button">
            <a href="#" class="button">view more<span class="button__arrow"></span></a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ブログ -->
  <section id="blog" class="blog">
    <div class="blog__inner inner">
      <div class="blog__heading heading">
        <h2 class="heading__title heading__title--reverse">blog</h2>
        <p class="heading__subtitle heading__subtitle--reverse">ブログ</p>
      </div>
      <div class="blog__cards blog-cards">
        <a href="#" class="blog-cards__item blog-card">
          <figure class="blog-card__image">
            <img src="<?php echo esc_url(get_theme_file_uri("/assets/images/blog-card1.jpg")); ?>" alt="サンゴ礁の画像">
          </figure>
          <div class="blog-card__body">
            <time class="blog-card__date" datetime="2023-11-17">2023.11/17</time>
            <p class="blog-card__title content-title content-title--blog">ライセンス取得</p>
            <p class="blog-card__text text">
              ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
              ここにテキストが入ります。ここにテキストが入ります。ここにテキスト
            </p>
          </div>
        </a>
        <a href="#" class="blog-cards__item blog-card">
          <figure class="blog-card__image">
            <img src="<?php echo esc_url(get_theme_file_uri("/assets/images/blog-card2.jpg")); ?>" alt="ウミガメの画像">
          </figure>
          <div class="blog-card__body">
            <time class="blog-card__date" datetime="2023-11-17">2023.11/17</time>
            <p class="blog-card__title content-title content-title--blog">ウミガメと泳ぐ</p>
            <p class="blog-card__text text">
              ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
              ここにテキストが入ります。ここにテキストが入ります。ここにテキスト
            </p>
          </div>
        </a>
        <a href="#" class="blog-cards__item blog-card">
          <figure class="blog-card__image">
            <img src="<?php echo esc_url(get_theme_file_uri("/assets/images/blog-card3.jpg")); ?>" alt="カクレクマノミの画像">
          </figure>
          <div class="blog-card__body">
            <time class="blog-card__date" datetime="2023-11-17">2023.11/17</time>
            <p class="blog-card__title content-title content-title--blog">カクレクマノミ</p>
            <p class="blog-card__text text">
              ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
              ここにテキストが入ります。ここにテキストが入ります。ここにテキスト
            </p>
          </div>
        </a>
      </div>
      <div class="blog__button">
        <a href="#" class="button">view more<span class="button__arrow"></span></a>
      </div>
    </div>
  </section>

  <!-- お客様の声 -->
  <section id="voice" class="voice top-voice">
    <div class="voice__inner inner">
      <div class="voice__heading heading">
        <h2 class="heading__title">voice</h2>
        <p class="heading__subtitle">お客様の声</p>
      </div>
      <div class="voice__cards voice-cards">
        <a href="#" class="voice-cards__item voice-card">
          <div class="voice-card__heading">
            <p class="voice-card__age">20代(女性)</p>
            <p class="voice-card__type card-type card-type--tight">ライセンス講習</p>
            <p class="voice-card__title content-title content-title--voice">ここにタイトルが入ります。ここにタイトル</p>
          </div>
          <div class="voice-card__image-area js-color-box">
            <img class="voice-card__image" src="<?php echo esc_url(get_theme_file_uri("/assets/images/voice-card1.jpg")); ?>" alt="帽子をかぶった女性">
          </div>
          <div class="voice-card__body">
            <p class="voice-card__text text text--green">
              ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
              ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
              ここにテキストが入ります。ここにテキストが入ります。
            </p>
          </div>
        </a>
        <a href="#" class="voice-cards__item voice-card">
          <div class="voice-card__heading">
            <p class="voice-card__age">30代(男性)</p>
            <p class="voice-card__type card-type card-type--tight">ファンダイビング</p>
            <p class="voice-card__title content-title content-title--voice">ここにタイトルが入ります。ここにタイトル</p>
          </div>
          <div class="voice-card__image-area js-color-box">
            <img class="voice-card__image" src="<?php echo esc_url(get_theme_file_uri("/assets/images/voice-card2.jpg")); ?>" alt="いいねしてる男性">
          </div>
          <div class="voice-card__body">
            <p class="voice-card__text text text--green">
              ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
              ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
              ここにテキストが入ります。ここにテキストが入ります。
            </p>
          </div>
        </a>
      </div>
      <div class="voice__button">
        <a href="#" class="button">view more<span class="button__arrow"></span></a>
      </div>
    </div>
  </section>

  <!-- 料金一覧 -->
  <section id="price" class="price top-price">
    <div class="price__inner inner">
      <div class="price__heading heading">
        <h2 class="heading__title">price</h2>
        <p class="heading__subtitle">料金一覧</p>
      </div>
      <div class="price__container">
        <div class="price__contents">
          <div class="price__menu-area">
            <div class="price__menu price-menu">
              <p class="price-menu__title content-title content-title--price">ライセンス講習</p>
              <ul class="price-menu__items">
                <li class="price-menu__item">
                  <p class="price-menu__name">オープンウォーターダイバーコース</p>
                  <p class="price-menu__price">&yen;50,000</p>
                </li>
                <li class="price-menu__item">
                  <p class="price-menu__name">アドバンスドオープンウォーターコース</p>
                  <p class="price-menu__price">&yen;60,000</p>
                </li>
                <li class="price-menu__item">
                  <p class="price-menu__name">レスキュー＋EFRコース</p>
                  <p class="price-menu__price">&yen;70,000</p>
                </li>
              </ul>
            </div>
            <div class="price__menu price-menu">
              <p class="price-menu__title content-title content-title--price">体験ダイビング</p>
              <ul class="price-menu__items">
                <li class="price-menu__item">
                  <p class="price-menu__name">ビーチ体験ダイビング(半日)</p>
                  <p class="price-menu__price">&yen;7,000</p>
                </li>
                <li class="price-menu__item">
                  <p class="price-menu__name">ビーチ体験ダイビング(1日)</p>
                  <p class="price-menu__price">&yen;14,000</p>
                </li>
                <li class="price-menu__item">
                  <p class="price-menu__name">ボート体験ダイビング(半日)</p>
                  <p class="price-menu__price">&yen;10,000</p>
                </li>
                <li class="price-menu__item">
                  <p class="price-menu__name">ボート体験ダイビング(1日)</p>
                  <p class="price-menu__price">&yen;18,000</p>
                </li>
              </ul>
            </div>
            <div class="price__menu price-menu">
              <p class="price-menu__title content-title content-title--price">ファンダイビング</p>
              <ul class="price-menu__items">
                <li class="price-menu__item">
                  <p class="price-menu__name">ビーチダイビング(2ダイブ)</p>
                  <p class="price-menu__price">&yen;14,000</p>
                </li>
                <li class="price-menu__item">
                  <p class="price-menu__name">ボートダイビング(2ダイブ)</p>
                  <p class="price-menu__price">&yen;18,000</p>
                </li>
                <li class="price-menu__item">
                  <p class="price-menu__name">スペシャルダイビング(2ダイブ)</p>
                  <p class="price-menu__price">&yen;24,000</p>
                </li>
                <li class="price-menu__item">
                  <p class="price-menu__name">ナイトダイビング(1ダイブ)</p>
                  <p class="price-menu__price">&yen;10,000</p>
                </li>
              </ul>
            </div>
            <div class="price__menu price-menu">
              <p class="price-menu__title content-title content-title--price">スペシャルダイビング</p>
              <ul class="price-menu__items">
                <li class="price-menu__item">
                  <p class="price-menu__name">貸切ダイビング(2ダイブ)</p>
                  <p class="price-menu__price">&yen;24,000</p>
                </li>
                <li class="price-menu__item">
                  <p class="price-menu__name">1日ダイビング(3ダイブ)</p>
                  <p class="price-menu__price">&yen;32,000</p>
                </li>
              </ul>
            </div>
          </div>
          <div class="price__image-area js-color-box">
            <picture>
              <source srcset="<?php echo esc_url(get_theme_file_uri("/assets/images/price2-sp.jpg")); ?>" media="(max-width: 767px)">
              <img class="price__image" src="<?php echo esc_url(get_theme_file_uri("/assets/images/price1.jpg")); ?>" alt="赤い魚の群れ">
            </picture>
          </div>
        </div>
        <div class="price__button-area">
          <a href="#" class="price-button button">view more<span class="button__arrow"></span></a>
        </div>
      </div>
    </div>
  </section>

  <!-- コンタクト -->
  <section id="contact" class="contact top-contact">
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