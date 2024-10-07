<?php get_header(); ?>
<section class="l-works-detal l-section">
  <div class="l-works-detal__inner l-inner">
    <div class="p-works-detal__container">
      <?php echo nl2br( esc_html( get_field( 'works' ) ) ); ?>
      <div class="p-works-detal__title"><?php the_title(); ?></div>
      <div class="p-works-detal__img">
        <?php the_post_thumbnail(); ?>
      </div>
      <dl class="p-works-detal__desc">
        <?php if( get_field('url') ) : ?>
        <div class="p-works-detal__item">
          <dt>サイトURL</dt>
          <dd><a href="<?php the_field('url'); ?>"><?php the_field('url'); ?></a></dd>
        </div>
        <?php endif; ?>
        <?php if( get_field('id') ) : ?>
        <div class="p-works-detal__item">
          <dt>ユーザー名</dt>
          <dd><?php the_field('id'); ?></dd>
        </div>
        <?php endif;?>
        <?php if( get_field('pass') ) : ?>
        <div class="p-works-detal__item">
          <dt>パスワード</dt>
          <dd><?php the_field('pass'); ?></dd>
        </div>
        <?php endif; ?>
        <?php if( get_field('page') ) : ?>
        <div class="p-works-detal__item">
          <dt>ページ数</dt>
          <dd><?php the_field('page'); ?></dd>
        </div>
        <?php endif; ?>
        <?php if( get_field('overview') ) : ?>
        <div class="p-works-detal__item">
          <dt>概要</dt>
          <dd><?php echo nl2br(get_field('overview')); ?></dd>
        </div>
        <?php endif; ?>
        <?php if( get_field('skill') ) : ?>
        <div class="p-works-detal__item">
          <dt>使用スキル</dt>
          <dd><?php the_field('skill'); ?></dd>
        </div>
        <?php endif; ?>
        <?php if( get_field('period') ) : ?>
        <div class="p-works-detal__item">
          <dt>制作期間</dt>
          <dd><?php the_field('period') ?></dd>
        </div>
        <?php endif; ?>
        <?php if( get_field('position') ) : ?>
        <div class="p-works-detal__item">
          <dt>担当範囲</dt>
          <dd><?php the_field('position') ?></dd>
        </div>
        <?php endif; ?>
      </dl>
    </div>

    <?php get_template_part('template-parts/post-link'); ?>
  </div>
</section>

<?php get_footer(); ?>