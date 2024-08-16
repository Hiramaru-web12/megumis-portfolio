<?php get_header(); ?>
<div class="p-fv">
  <div class="p-fv__content wow fadeIn">
    <h1 class="p-fv__copy">Webの力で想いを繋ぐ</h1>
    <p>Hiramaru Portforio.</p>
  </div>
  <div class="p-fv__scroll">
    <span>scrool</span>
  </div>
  <picture class="p-fv__img">
    <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri( ) ?>/img/fv.png" />
    <img src="<?php echo get_template_directory_uri( ) ?>/img/fv-sp.png" alt="ファーストビュー" />
  </picture>
</div>

<section class="l-about l-section">
  <div class="l-about__inner l-inner">
    <h2 class="c-section__title wow fadeInUp">私について</h2>
    <div class="p-about__container l-section__container">
      <div class="p-about__img wow fadeInLeft delay-2s">
        <img src="<?php echo get_template_directory_uri( ) ?>/img/my-icon.png" alt="プロフィール画像" height="380"
          width="380" />
      </div>
      <div class="p-about__text wow fadeInRight delay-2s">
        <p class="p-about__myname">OHIRA MEGUMI <span>- Web Corder -</span></p>
        <p class="p-about__desc">
          ご覧いただきありがとうございます。<br>
          Webサイトのコーディングをしています。<br><br>前職は5年ほど総合病院で勤務をしており、臨床検査技師として患者さんや現場スタッフとのコミュニケーションを大切にしながら仕事をしていました。<br><br>
          製作を通してよりよい成果を達成できるよう、チームの中で強みを活かして協力し、コーダー視点での提案ができるエンジニアを目指します。
        </p>
        <button class="c-more__button">
          <a href="#" class="c-button__link">もっとみる</a>
        </button>
      </div>
    </div>
  </div>
</section>

<section class="l-section l-works">
  <div class="l-works__inner l-inner">
    <h2 class="c-section__title wow fadeInUp">制作実績</h2>
    <div class="p-works__container l-section__container">
      <article class="p-works__item wow fadeInUp">
        <a class="p-works__link" href="works01/">
          <div class="p-item__content">
            <img src="<?php echo get_template_directory_uri( ) ?>/img/hiramaru-nouen.png" alt="架空の農園サイト" width="314"
              height="180" />
            <div class="p-item__mask">
              <p class="p-item__mask-text">もっとみる</p>
            </div>
          </div>
        </a>
        <p class="p-works__siteTitle">ひらまる農園 / 架空の静的サイト</p>
      </article>
      <article class="p-works__item wow fadeInUp">
        <a class="p-works__link" href="works02/">
          <div class="p-item__content">
            <img src="<?php echo get_template_directory_uri( ) ?>/img/aobotan-koumuten.png" alt="架空の工務店サイト" width="314"
              height="180" />
            <div class="p-item__mask">
              <p class="p-item__mask-text">もっとみる</p>
            </div>
          </div>
        </a>
        <p class="p-works__siteTitle">青牡丹工務店 / 架空の静的サイト</p>
      </article>
    </div>
    <button class="c-more__button p-works__button">
      <a href="#" class="c-button__link">もっとみる</a>
    </button>
  </div>
</section>

<?php get_footer(); ?>