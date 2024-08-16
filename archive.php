<?php get_header(); ?>

<div class="l-breadcrub p-breadcrub l-inner">
  <?php bcn_display(); ?>
</div>
<section class="l-lower-works">
  <div class="l-lower-works__inner l-inner">
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

  </div>
</section>

<?php get_footer(); ?>