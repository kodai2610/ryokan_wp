<?php if(paginate_links()) : ?>
  <div class="pagination">
    <?php
      echo paginate_links(
        array(
          'end_size' => 1,
          'mid_size' => 1,
          'prev_next' => false,
        ),
      );
    ?>
  </div><!-- /pagenation -->
<?php endif; ?>