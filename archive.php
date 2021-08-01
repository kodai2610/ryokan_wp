<?php get_header(); ?>
<div id="content" class="blog-ar">
  <?php get_template_part('template_parts/street'); ?>
  <div class="inner ar-inner">
    <main id="primary">
          <div class="breadcrumb">
            <ul>
              <li class="bread-item"><a href="<?php echo home_url(); ?>">ホーム</a></li>
              <li class="bread-item">ブログ</li>
            </ul>
          </div>
          <div class="wp-head">
            <h2 class="section-title blog-ar-title">ブログ</h2>
            <span class="section-subtitle">Blog</span>
          </div>
          <?php if(have_posts()) : ?>
          <ul class="blog-ar-items">
            <?php while(have_posts()) : the_post(); ?>
            <li class="blog-ar-item">
              <a href="<?php the_permalink();?>" class="blog-ar-link">
                <div class="blog-ar-img">
                  <?php if(has_post_thumbnail()) {
                    the_post_thumbnail('large');
                  }else{
                    echo '<img src="'. esc_url(get_template_directory_uri()). '/image/noimg.png" alt=""> ';
                  }; ?>
                  <?php 
                    $category = get_the_category();
                    if ($category[0]) {
                      echo '<span class="blog-ar-label">' . $category[0]->cat_name . '</span>'; //cat_nameはカテゴリー名を取り出す。
                    }
                  ?>
                </div>
                <div class="blog-ar-content">
                  <time class="blog-ar-time" datetime="<?php the_time('c'); ?>"><?php the_time('Y-n-d') ?></time>
                  <h3 class="blog-ar-item-title"><span><?php the_title(); ?></span></h3>
                  <!-- <p class="blog-ar-text is-pc"></p> -->
                  <?php the_excerpt(); ?>
                </div>
              </a>
            </li>
            <?php endwhile; ?>
          </ul><!--items-->
          <?php endif; ?>
          <?php get_template_part('template_parts/pagination');?>
    </main>
  </div><!--inner-->
</div>
<?php get_footer(); ?>