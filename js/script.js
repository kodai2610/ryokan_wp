//ドロワーメニュー実装

jQuery('.drawer-icon').on('click', function(e) {
  e.preventDefault();
  jQuery('.drawer-content').toggleClass('is-active');
  jQuery('.drawer-bg').toggleClass('is-active');

  return false
});

jQuery('.drawer-bg').on('click', function(e) {
  e.preventDefault();
  jQuery('.drawer-content').removeClass('is-active');
  jQuery('.drawer-bg').removeClass('is-active');

  return false;
});


// slick

jQuery('#slider').slick({
  variableWidth: true,
  centerMode : true,
  autoplay: true,
  autoplaySpeed: 5000,
  arrows : false,
});

//アコーディオン

jQuery('.faq-dt').on('click', function(e) {
  e.preventDefault();
  jQuery(this).next().slideToggle();
  return false;
})

//wow
new WOW().init();

//スムーススクロール実装
jQuery('a[href^="#"]').click(function(){
	let header = jQuery('.header').innerHeight();

	let speed = 300;

	let id = jQuery(this).attr('href');
	//idを取得
	let target = jQuery("#" == id ? 'html' : id);
	//条件式 ? trueの時 : falseの時
	let position = jQuery(target).offset().top - header;

	jQuery('html, body').animate({
		scrollTop: position,
	}, speed);

	return false;
});








