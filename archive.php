<?php get_header(); ?>

<div class="l-breadcrub p-breadcrub l-inner">
  <?php bcn_display(); ?>
</div>
<section class="l-lower-works">
  <div class="l-lower-works__inner l-inner">
    <h2 class="c-section__title wow fadeInUp delay-2s">制作実績</h2>
    <div class="p-works__container l-section__container">

      <?php
       $works_query = new WP_Query(
        array(
          'post_type' => 'works',
          'post_per_page' => 10,
         )
        );
      ?>
      <?php  if($works_query->have_posts()) : ?>
      <?php  while($works_query->have_posts()) : ?>
      <?php $works_query->the_post(); ?>
      <article class="p-works__item wow fadeInUp">
        <a class="p-works__link" href="<?php the_permalink(); ?>">
          <div class="p-item__content">
            <?php if (has_post_thumbnail( )) : ?>
            <?php the_post_thumbnail();?>
            <?php endif; ?>
            <div class="p-item__mask">
              <p class="p-item__mask-text">もっとみる</p>
            </div>
          </div>
        </a>
        <p class="p-works__siteTitle"><?php the_title(); ?></p>
      </article>
      <?php endwhile; ?>
      <?php endif; ?>

    </div>
    <?php get_template_part('template-parts/pagination') ?>
  </div>
</section>

<?php get_footer(); ?>