<aside id="secondary">
      <div class="widget">
        <div class="widget-title">関連記事</div>
        <?php
          $post_cats = get_the_category(); //メインクエリの所属カテゴリーで配列でくる。
          $cat_ids = array();
          foreach($post_cats as $cat) {
            $cat_ids[] = $cat->term_id;
          };//$cat_idsにメインクエリのカテゴリーが入った！
        ?>
        <?php
          $my_posts = get_posts(array(
            'post_type' => 'post',
            'posts_per_page' => 5,
            'post__not_in' => array($post->ID), // $post:現在の投稿情報を保持。メインクエリの記事を除外
            'category__in' => $cat_ids, //メインクエリの所属するカテゴリを取得
            'orderby' => 'rand',
          ));
          if($my_posts) :
        ?>
        <ul class="wpost-items w-relate">
          <?php foreach($my_posts as $post) : setup_postdata($post); //グローバル変数を設定 ?>
          <li class="wpost-item">
            <a href="<?php the_permalink(); ?>" class="wpost-link">
              <div class="wpost-img">
                <?php 
                  if (has_post_thumbnail()) {
                    the_post_thumbnail('large');
                  }else {
                    echo '<img src="' . esc_url(get_template_directory_uri()). '/image/noimg.png" alt="">'; 
                  }
                ?>
              </div>
              <div class="wpost-body">
                <?php the_title(); ?>
              </div>
            </a>
          </li>
          <?php endforeach; wp_reset_postdata();?>
        </ul>
        <?php endif; ?>
      </div>


      <div class="widget">
        <div class="widget-title">おすすめの記事</div>
        <?php
          $args = array(
            'post_type' => 'post',
            'tag_slug__in' => array('recommend'),
            'posts_per_page' => 5,
            'post__not_in' => array($post->ID),
            'orderby' => 'rand',
          );
          $recommend_posts = get_posts($args);
          if($recommend_posts) :
        ?>
        <ul class="wpost-items w-recommend">
          <?php foreach($recommend_posts as $post) : setup_postdata($post); ?>
          <li class="wpost-item">
            <a href="<?php the_permalink(); ?>" class="wpost-link">
              <div class="wpost-img">
                <?php if(has_post_thumbnail()){
                  the_post_thumbnail('large');
                }else{
                  echo '<img src="' . esc_url(get_template_directory_uri()) . '/image/noimg.png" alt="">';
                }?>
              </div>
              <div class="wpost-body">
                <?php the_title(); ?>
              </div>
            </a>
          </li>
          <?php endforeach; wp_reset_postdata(); ?>
        </ul>
        <?php endif; ?>
      </div>
    </aside>