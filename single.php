<?php get_header(); ?>
<div id="content">
  <?php get_template_part('template_parts/street'); ?>
  <div class="inner single-inner">
    <main id="primary" class="single-main">
      <div class="blog-sing">
          <?php if(have_posts()) : 
            while(have_posts()) : the_post();
          ?>
          <div class="breadcrumb">
            <ul>
              <li class="bread-item"><a href="<?php echo home_url(); ?>">ホーム</a></li>
              <li class="bread-item"><a href="<?php echo home_url('blogs') ?>">ブログ</a></li>
              <li class="bread-item"><a href="/">お知らせ</a></li>
              <li class="bread-item"><?php the_title(); ?></li>
            </ul>
          </div>
          <article class="blog-sing-content">
            <div class="blog-sing-head">
              <?php 
                $category = get_the_category();
                if($category[0]) : ?>
              <a class="blog-sing-category" href="<?php echo esc_url( get_category_link($category[0]->term_id) ); ?>"><?php echo $category[0]->cat_name; ?></a>
              <?php endif; ?>
              <h2 class="blog-sing-title"><?php the_title(); ?></h2>
              <div class="blog-sing-meta">
                <a class="blog-sns" href="https://twitter.com/intent/tweet?url=<?php the_permalink();?>&text=<?php the_title();?>" target="_blank" rel="nofollow" ><i class="fab fa-twitter">Tweet</i></a>
                <time class="blog-sing-time" datetime="<?php the_time('c');?>"><?php the_time('Y-n-d');?></time>
              </div>
            </div><!--head-->
            <div class="blog-sing-body">
              <div class="blog-sing-thumbnail">
                <?php
                  if(has_post_thumbnail()) {
                    the_post_thumbnail('large');
                  };
                ?>
              </div>
              <?php the_content();?>
            </div>
          </article><!--content-->
          <?php
          endwhile;
          endif;
          ?>
      </div>
    </main>
    <?php get_template_part('template_parts/sidebar'); ?>
  </div><!--inner-->
</div><!--content-->
<?php get_footer(); ?>
