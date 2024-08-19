<ul class="p-article__link">
  <?php if (get_previous_post()):?>
  <li class="prev">
    <?php previous_post_link('%link', '前の記事へ'); ?></li>
  <?php endif; ?>
  <li class="to-archive"><a href="<?php echo esc_url(home_url('/')); ?>works/" class="to-archive">実績一覧</a></li>
  <?php if (get_next_post()):?>
  <li class="next"><?php next_post_link('%link', '次の記事へ'); ?></li>
  <?php endif; ?>
</ul>