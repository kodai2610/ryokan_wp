<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="祇園の中心に佇む 京の極楽浄土">
    <title>極楽亭</title>
    <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" href="css/style.css"> -->
    <?php wp_head(); ?>
</head> 
  <body>
    <header class="header">
        <div class="header-inner">
            <?php if(is_home() || is_front_page() ) : ?>
            <h1 class="header-logo wow fadeInUp"><a href="<?php echo esc_url(home_url('/'));//ブログのホームURLからの相対位置 ?>"><img src="<?php echo get_template_directory_uri(); ?>/image/logo.png" alt="極楽亭"></a></h1>
            <?php else : ?>
            <div class="header-logo wow fadeInUp"><a href="<?php echo esc_url(home_url('')); ?>"><img src="<?php echo get_template_directory_uri(); ?>/image/logo.png" alt="極楽亭"></a></div>
            <?php endif; ?>
            <ul class="header-list is-pc is-tab wow fadeInUp">
                <li class="header-item"><a href="<?php echo esc_url(home_url('/')); ?>" class="common-link">宿泊予約</a></li>
                <li class="header-item"><a href="<?php echo esc_url(home_url('/')); ?>" class="common-link">観光情報</a></li>
                <li class="header-item"><a href="<?php echo esc_url(home_url('/')); ?>" class="common-link">よくあるご質問</a></li>
                <li class="header-item"><a href="<?php echo home_url('contact'); ?>" class="common-link">お問い合わせ</a></li>
            </ul>
        </div><!--inner-->
    </header>
    
    <div class="drawer-icon is-sp wow fadeInUp">
          <div class="drawer-icon__bars">
            <div class="drawer-icon__bar1"></div>
            <div class="drawer-icon__bar2"></div>
            <div class="drawer-icon__bar3"></div>
          </div>
    </div><!--icon-->
        
    <div class="drawer-content">
      <ul class="drawer-items">
        <li class="menu-item"><a href="#">宿泊予約</a></li>
        <li class="menu-item"><a href="#">観光情報</a></li>
        <li class="menu-item"><a href="#">よくある質問</a></li>
        <li class="menu-item"><a href="#">お問いあわせ</a></li>
      </ul>
    </div><!--content-->
    <div class="drawer-bg"></div> 