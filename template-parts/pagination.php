<?php if(paginate_links()) : ?>
<!-- pagination -->
<nav class="l-lowerworks__pagiNav pagination">
  <div class="nav-links">
    <?php
          echo paginate_links(
           array(
            'end_size' => 1,
            'mid_size' => 1,
            'prev_next' => true,
            'prev_text' => '前へ',
            'next_text' => '次へ',
           )
          );
         ?>
  </div>
</nav><!-- /pagination -->
<?php endif; ?>