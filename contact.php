<?php
/*
Template Name: 問い合わせ
*/
?>
<?php get_header(); ?>
<div id="content">
  <?php get_template_part('template_parts/street'); ?>
  <div class="inner">
    <?php while(have_posts()) : the_post(); ?>
    <div class="breadcrumb">
      <ul>
        <li class="bread-item"><a href="<?php echo home_url(); ?>">ホーム</a></li>
        <li class="bread-item"><?php the_title(); ?></li>
      </ul>
    </div><!--breadcrumb-->
    <?php the_content(); ?>
    <?php endwhile; ?>  
  </div><!--inner-->
</div>
<?php get_footer(); ?>