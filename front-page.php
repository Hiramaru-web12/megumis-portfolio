<?php get_header(); ?>
<div class="p-fv">
  <div class="p-fv__content wow fadeIn">
    <h1 class="p-fv__copy typing-animation">Megumi's Portforio.</h1>
    <p class="wow fadeInUp">コードで形にする、広がるWebの可能性。</p>
  </div>
  <div class="p-fv__scroll">
    <span>scroll</span>
  </div>
  <picture class="p-fv__img">
    <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri( ) ?>/img/fv.png">
    <img src="<?php echo get_template_directory_uri( ) ?>/img/fv-sp.png" alt="ファーストビュー" decoding="async" height="500">
  </picture>
</div>

<section class="l-about l-section">
  <div class="l-about__inner l-inner">
    <h2 class="c-section__title wow fadeInUp delay-2s">私について</h2>
    <div class="p-about__container l-section__container">
      <div class="p-about__img wow fadeInUp delay-2s">
        <img src="<?php echo get_template_directory_uri( ) ?>/img/my-picture.png" alt="プロフィール画像" height="380"
          width="380" />
      </div>
      <div class="p-about__text">
        <p class="p-about__myname wow fadeInUp delay-2s">OHIRA MEGUMI <span>- Web Corder -</span></p>
        <p class="p-about__desc wow fadeInUp delay-2s">
          ご覧いただきありがとうございます。<br>
          Webサイトのコーディングをしています。<br><br>前職は5年ほど総合病院で勤務をしており、臨床検査技師として患者さんや現場スタッフとのコミュニケーションを大切にしながら仕事をしていました。<br><br>
          製作を通してよりよい成果を達成できるよう、チームの中で強みを活かし、コーダー視点での提案ができるエンジニアを目指します。
        </p>
        <div class="p-more__button wow fadeInUp delay-2s">
          <a href="<?php echo esc_url(home_url('/')); ?>about/" class="c-button__link">もっとみる</a>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="l-section l-works">
  <div class="l-works__inner l-inner">
    <h2 class="c-section__title wow fadeInUp delay-2s">制作実績</h2>
    <div class="p-works__container l-section__container">
      <?php
      $args = array(
        'post_type' => 'works', 
        'posts_per_page' => 3, 
        
        'tax_query' => array(
          array(
            'taxonomy' => 'item_tag', 
            'field'    => 'slug',
            'terms'    => 'pickup', 
          ),
        ),
      );
      $pickup_query = new WP_Query($args);
      if ($pickup_query->have_posts()) :
        while ($pickup_query->have_posts()) : $pickup_query->the_post();
      ?>
      <article class="p-works__item wow fadeInUp delay-2s">
        <a class="p-works__link" href="<?php the_permalink(); ?>">
          <div class="p-item__content">
            <?php if (has_post_thumbnail()) : ?>
            <?php the_post_thumbnail('medium', array('width' => 314, 'height' => 180, 'alt' => get_the_title())); ?>
            <?php else : ?>
            <img src="<?php echo get_template_directory_uri(); ?>/img/default-image.png" alt="<?php the_title(); ?>"
              width="314" height="180" />
            <?php endif; ?>
            <div class="p-item__mask">
              <p class="p-item__mask-text">もっとみる</p>
            </div>
          </div>
        </a>
        <p class="p-works__siteTitle"><?php the_title(); ?></p>
      </article>
      <?php
        endwhile;
        wp_reset_postdata(); 
        endif;
      ?>
    </div>
    <div class="p-more__button p-works__button wow fadeInUp delay-2s">
      <a href="<?php echo esc_url(home_url('/')); ?>works/" class="c-button__link">実績一覧へ</a>
    </div>
  </div>
</section>
<?php get_footer(); ?>