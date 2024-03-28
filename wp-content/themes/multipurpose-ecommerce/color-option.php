<?php
	
	/*---------------First highlight color--------------*/
	$multipurpose_ecommerce_theme_color = get_theme_mod('multipurpose_ecommerce_theme_color');

	$multipurpose_ecommerce_custom_css = '';

	if($multipurpose_ecommerce_theme_color != false){
		$multipurpose_ecommerce_custom_css .='a.wc-block-components-totals-coupon-link, a.components-button.wc-block-components-button.wp-element-button.wc-block-cart__submit-button.contained, a.wc-block-components-checkout-return-to-cart-button, .wc-block-components-totals-coupon__button.contained, button.wc-block-components-checkout-place-order-button ,.topbar-box, span.cart-value, .slide-button a, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce span.onsale, .search-form .search-submit, .site-info, .woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce .cart .button, .woocommerce .cart input.button, button, input[type="button"], input[type="submit"], nav.woocommerce-MyAccount-navigation li, .next.page-numbers, .page-numbers,.scrollup i,.tags p a,.comment-reply-link, .post-navigation .nav-next a, .post-navigation .nav-previous a,.widget .tagcloud a:hover, #sidebox .tagcloud a:hover, #sidebox .widget_price_filter .ui-slider-horizontal .ui-slider-range, #sidebox .widget_price_filter .ui-slider .ui-slider-handle, .site-footer .widget_price_filter .ui-slider-horizontal .ui-slider-range, .site-footer .widget_price_filter .ui-slider .ui-slider-handle, .nav-links .nav-previous a, .nav-links .nav-next a, .wp-block-button a, #sidebox button[type="submit"], .site-footer button[type="submit"] , .breadcrumb a , .breadcrumb span {';
			$multipurpose_ecommerce_custom_css .='background-color: '.esc_attr($multipurpose_ecommerce_theme_color).';';
		$multipurpose_ecommerce_custom_css .='}';
	}
	if($multipurpose_ecommerce_theme_color != false){
		$multipurpose_ecommerce_custom_css .=' .logo h1 a, .navigation-top .current-menu-item > a, .navigation-top .current_page_item > a, .main-navigation a:hover, .woocommerce div.product p.price, .woocommerce div.product span.price, .woocommerce ul.products li.product .price, .woocommerce ul.products li.product .buttons, .woocommerce ul.products li.product .button, a.post-link:hover, .category a:hover, .date a:hover, .woocommerce ul.products li.product a, .product_meta a,.main-navigation ul ul li a,.main-navigation li li:focus > a,.main-navigation li li:hover > a, .post-info a:hover, #sidebox ul li a:hover, .site-footer ul li a:hover,.logo h1 a, .site-title, .site-title a, .site-title a:hover, .blogger a:hover, p.logged-in-as a:hover,.page-box .category a:hover, .related-posts h3 a:hover, #sidebox a:hover, .blogger h2 a:hover, .entry-date:hover a, .entry-date:hover i, .entry-author:hover a, .entry-author:hover i{';
			$multipurpose_ecommerce_custom_css .='color: '.esc_attr($multipurpose_ecommerce_theme_color).';';
		$multipurpose_ecommerce_custom_css .='}';
	}
	if($multipurpose_ecommerce_theme_color != false){
		$multipurpose_ecommerce_custom_css .='hr.product-head{';
			$multipurpose_ecommerce_custom_css .='border-top-color: '.esc_attr($multipurpose_ecommerce_theme_color).';';
		$multipurpose_ecommerce_custom_css .='}';
	}
	if($multipurpose_ecommerce_theme_color != false){
		$multipurpose_ecommerce_custom_css .='.scrollup i, .blogger a.post-link, .related-posts a.post-link{';
			$multipurpose_ecommerce_custom_css .='border-color: '.esc_attr($multipurpose_ecommerce_theme_color).';';
		$multipurpose_ecommerce_custom_css .='}';
	}
	if($multipurpose_ecommerce_theme_color != false){
		$multipurpose_ecommerce_custom_css .='.main-navigation ul ul li:hover{';
			$multipurpose_ecommerce_custom_css .='border-left-color: '.esc_attr($multipurpose_ecommerce_theme_color).';';
		$multipurpose_ecommerce_custom_css .='}';
	}
	if($multipurpose_ecommerce_theme_color != false){
		$multipurpose_ecommerce_custom_css .='.wc-block-grid__product-onsale{';
			$multipurpose_ecommerce_custom_css .='background-color: '.esc_attr($multipurpose_ecommerce_theme_color).'!important;';
		$multipurpose_ecommerce_custom_css .='}';
	}
	if($multipurpose_ecommerce_theme_color != false){
		$multipurpose_ecommerce_custom_css .='.wc-block-grid__product-onsale{';
			$multipurpose_ecommerce_custom_css .='border-color: '.esc_attr($multipurpose_ecommerce_theme_color).'!important;';
		$multipurpose_ecommerce_custom_css .='}';
	}
	/*---------------------------Width Layout -------------------*/
	$multipurpose_ecommerce_theme_lay = get_theme_mod( 'multipurpose_ecommerce_theme_options','Default');
    if($multipurpose_ecommerce_theme_lay == 'Default'){
		$multipurpose_ecommerce_custom_css .='body{';
			$multipurpose_ecommerce_custom_css .='max-width: 100%;';
		$multipurpose_ecommerce_custom_css .='}';
		$multipurpose_ecommerce_custom_css .='.page-template-custom-home-page .middle-header{';
			$multipurpose_ecommerce_custom_css .='width: 97.3%';
		$multipurpose_ecommerce_custom_css .='}';
	}else if($multipurpose_ecommerce_theme_lay == 'Wide Layout'){
		$multipurpose_ecommerce_custom_css .='body{';
			$multipurpose_ecommerce_custom_css .='width: 100%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto;';
		$multipurpose_ecommerce_custom_css .='}';
		$multipurpose_ecommerce_custom_css .='.page-template-custom-home-page .middle-header{';
			$multipurpose_ecommerce_custom_css .='width: 97.7%';
		$multipurpose_ecommerce_custom_css .='}';
	}else if($multipurpose_ecommerce_theme_lay == 'Box Layout'){
		$multipurpose_ecommerce_custom_css .='body{';
			$multipurpose_ecommerce_custom_css .='max-width: 1140px; width: 100%; padding-right: 15px; padding-left: 15px; margin-right: auto !important; margin-left: auto !important;';
		$multipurpose_ecommerce_custom_css .='}';
	}

	/*--------------------------- Slider Opacity -------------------*/
	$multipurpose_ecommerce_slider_layout = get_theme_mod( 'multipurpose_ecommerce_slider_opacity_color','0.7');
	if($multipurpose_ecommerce_slider_layout == '0'){
		$multipurpose_ecommerce_custom_css .='#slider-section img{';
			$multipurpose_ecommerce_custom_css .='opacity:0';
		$multipurpose_ecommerce_custom_css .='}';
		}else if($multipurpose_ecommerce_slider_layout == '0.1'){
		$multipurpose_ecommerce_custom_css .='#slider-section img{';
			$multipurpose_ecommerce_custom_css .='opacity:0.1';
		$multipurpose_ecommerce_custom_css .='}';
		}else if($multipurpose_ecommerce_slider_layout == '0.2'){
		$multipurpose_ecommerce_custom_css .='#slider-section img{';
			$multipurpose_ecommerce_custom_css .='opacity:0.2';
		$multipurpose_ecommerce_custom_css .='}';
		}else if($multipurpose_ecommerce_slider_layout == '0.3'){
		$multipurpose_ecommerce_custom_css .='#slider-section img{';
			$multipurpose_ecommerce_custom_css .='opacity:0.3';
		$multipurpose_ecommerce_custom_css .='}';
		}else if($multipurpose_ecommerce_slider_layout == '0.4'){
		$multipurpose_ecommerce_custom_css .='#slider-section img{';
			$multipurpose_ecommerce_custom_css .='opacity:0.4';
		$multipurpose_ecommerce_custom_css .='}';
		}else if($multipurpose_ecommerce_slider_layout == '0.5'){
		$multipurpose_ecommerce_custom_css .='#slider-section img{';
			$multipurpose_ecommerce_custom_css .='opacity:0.5';
		$multipurpose_ecommerce_custom_css .='}';
		}else if($multipurpose_ecommerce_slider_layout == '0.6'){
		$multipurpose_ecommerce_custom_css .='#slider-section img{';
			$multipurpose_ecommerce_custom_css .='opacity:0.6';
		$multipurpose_ecommerce_custom_css .='}';
		}else if($multipurpose_ecommerce_slider_layout == '0.7'){
		$multipurpose_ecommerce_custom_css .='#slider-section img{';
			$multipurpose_ecommerce_custom_css .='opacity:0.7';
		$multipurpose_ecommerce_custom_css .='}';
		}else if($multipurpose_ecommerce_slider_layout == '0.8'){
		$multipurpose_ecommerce_custom_css .='#slider-section img{';
			$multipurpose_ecommerce_custom_css .='opacity:0.8';
		$multipurpose_ecommerce_custom_css .='}';
		}else if($multipurpose_ecommerce_slider_layout == '0.9'){
		$multipurpose_ecommerce_custom_css .='#slider-section img{';
			$multipurpose_ecommerce_custom_css .='opacity:0.9';
		$multipurpose_ecommerce_custom_css .='}';
		}

	/*---------------------------Slider Content Layout -------------------*/
	$multipurpose_ecommerce_slider_layout = get_theme_mod( 'multipurpose_ecommerce_slider_content_option','Center');
    if($multipurpose_ecommerce_slider_layout == 'Left'){
		$multipurpose_ecommerce_custom_css .='#slider-section .carousel-caption, #slider-section .inner_carousel, #slider-section .inner_carousel h1, #slider-section .slide-button{';
			$multipurpose_ecommerce_custom_css .='text-align:left; left:15%; right:45%;';
		$multipurpose_ecommerce_custom_css .='}';
		$multipurpose_ecommerce_custom_css .='
		@media screen and (max-width: 767px){
		#slider-section .slide-button a{';
		$multipurpose_ecommerce_custom_css .='font-size:13px;';
		$multipurpose_ecommerce_custom_css .='} }';
		$multipurpose_ecommerce_custom_css .='
		@media screen and (max-width: 990px) and (min-width: 768px){
		#slider-section .inner_carousel h1{';
		$multipurpose_ecommerce_custom_css .='font-size:40px;';
		$multipurpose_ecommerce_custom_css .='} }';
	}else if($multipurpose_ecommerce_slider_layout == 'Center'){
		$multipurpose_ecommerce_custom_css .='#slider-section .carousel-caption, #slider-section .inner_carousel, #slider-section .inner_carousel h1, #slider-section .slide-button{';
			$multipurpose_ecommerce_custom_css .='text-align:center; left:15%; right:10%;';
		$multipurpose_ecommerce_custom_css .='}';
		$multipurpose_ecommerce_custom_css .='
		@media screen and (max-width: 990px) and (min-width: 768px){
		#slider-section .inner_carousel h1{';
		$multipurpose_ecommerce_custom_css .='font-size:40px;';
		$multipurpose_ecommerce_custom_css .='} }';
	}else if($multipurpose_ecommerce_slider_layout == 'Right'){
		$multipurpose_ecommerce_custom_css .='#slider-section .carousel-caption, #slider-section .inner_carousel, #slider-section .inner_carousel h1, #slider-section .slide-button{';
			$multipurpose_ecommerce_custom_css .='text-align:right; left:45%; right:15%;';
		$multipurpose_ecommerce_custom_css .='}';
		$multipurpose_ecommerce_custom_css .='
		@media screen and (max-width: 767px){
		#slider-section .slide-button a{';
		$multipurpose_ecommerce_custom_css .='font-size:13px;';
		$multipurpose_ecommerce_custom_css .='} }';
		$multipurpose_ecommerce_custom_css .='
		@media screen and (max-width: 990px) and (min-width: 768px){
		#slider-section .inner_carousel h1{';
		$multipurpose_ecommerce_custom_css .='font-size:40px;';
		$multipurpose_ecommerce_custom_css .='} }';
	}

	/*------------------------------ Button Settings option-----------------------*/
	$multipurpose_ecommerce_top_bottom_padding = get_theme_mod('multipurpose_ecommerce_top_bottom_padding');
	$multipurpose_ecommerce_left_right_padding = get_theme_mod('multipurpose_ecommerce_left_right_padding');
	if($multipurpose_ecommerce_top_bottom_padding != false || $multipurpose_ecommerce_left_right_padding != false){
		$multipurpose_ecommerce_custom_css .='#slider-section .slide-button a, .form-submit input[type="submit"], a.post-link, .about-btn a{';
			$multipurpose_ecommerce_custom_css .='padding-top: '.esc_attr($multipurpose_ecommerce_top_bottom_padding).'px; padding-bottom: '.esc_attr($multipurpose_ecommerce_top_bottom_padding).'px; padding-left: '.esc_attr($multipurpose_ecommerce_left_right_padding).'px; padding-right: '.esc_attr($multipurpose_ecommerce_left_right_padding).'px; display: inline-block;';
		$multipurpose_ecommerce_custom_css .='}';
	}

	$multipurpose_ecommerce_border_radius = get_theme_mod('multipurpose_ecommerce_border_radius');
	if($multipurpose_ecommerce_border_radius != false){
		$multipurpose_ecommerce_custom_css .='#slider-section .slide-button a, .form-submit input[type="submit"],a.post-link, .about-btn a{';
			$multipurpose_ecommerce_custom_css .='border-radius: '.esc_attr($multipurpose_ecommerce_border_radius).'px;';
		$multipurpose_ecommerce_custom_css .='}';
	}

	$multipurpose_ecommerce_show_border = get_theme_mod( 'multipurpose_ecommerce_button_border', false);
	if($multipurpose_ecommerce_show_border == true){
		$multipurpose_ecommerce_custom_css .='a.post-link{';
			$multipurpose_ecommerce_custom_css .='border:2px solid #4f66c9;margin:10px 0;';
		$multipurpose_ecommerce_custom_css .='}';
	}

	/*---------------------------Blog Layout -------------------*/
	$multipurpose_ecommerce_theme_lay = get_theme_mod( 'multipurpose_ecommerce_blog_post_layout','Default');
    if($multipurpose_ecommerce_theme_lay == 'Default'){
		$multipurpose_ecommerce_custom_css .='.blogger{';
			$multipurpose_ecommerce_custom_css .='';
		$multipurpose_ecommerce_custom_css .='}';
	}else if($multipurpose_ecommerce_theme_lay == 'Left'){
		$multipurpose_ecommerce_custom_css .='.blogger, .blogger h2, .post-info, .text p, .blogger .post-link{';
			$multipurpose_ecommerce_custom_css .='text-align:left;';
		$multipurpose_ecommerce_custom_css .='}';
		$multipurpose_ecommerce_custom_css .='.post-info{';
			$multipurpose_ecommerce_custom_css .='margin:10px 0;';
		$multipurpose_ecommerce_custom_css .='}';
		$multipurpose_ecommerce_custom_css .='.blogger .post-link{';
			$multipurpose_ecommerce_custom_css .='margin-top:25px;';
		$multipurpose_ecommerce_custom_css .='}';
	}else if($multipurpose_ecommerce_theme_lay == 'Image and Content'){
		$multipurpose_ecommerce_custom_css .='.blogger, .blogger h2, .post-info, .text p, #our-services p{';
			$multipurpose_ecommerce_custom_css .='text-align:Left;';
		$multipurpose_ecommerce_custom_css .='}';
		$multipurpose_ecommerce_custom_css .='.blogger .post-link{';
			$multipurpose_ecommerce_custom_css .='text-align:right;';
		$multipurpose_ecommerce_custom_css .='}';
		$multipurpose_ecommerce_custom_css .='.post-info{';
			$multipurpose_ecommerce_custom_css .='margin:10px 0;';
		$multipurpose_ecommerce_custom_css .='}';
	}

	/*--------- Preloader Color Option -------*/
	$multipurpose_ecommerce_loader_color_setting = get_theme_mod('multipurpose_ecommerce_loader_color_setting');

	if($multipurpose_ecommerce_loader_color_setting != false){
		$multipurpose_ecommerce_custom_css .=' .circle .inner{';
			$multipurpose_ecommerce_custom_css .='border-color: '.esc_attr($multipurpose_ecommerce_loader_color_setting).';';
		$multipurpose_ecommerce_custom_css .='} ';
	}

	$multipurpose_ecommerce_loader_background_color = get_theme_mod('multipurpose_ecommerce_loader_background_color');

	if($multipurpose_ecommerce_loader_background_color != false){
		$multipurpose_ecommerce_custom_css .=' #pre-loader{';
			$multipurpose_ecommerce_custom_css .='background-color: '.esc_attr($multipurpose_ecommerce_loader_background_color).';';
		$multipurpose_ecommerce_custom_css .='} ';
	}

	$multipurpose_ecommerce_theme_lay = get_theme_mod( 'multipurpose_ecommerce_preloader_types','Default');
    if($multipurpose_ecommerce_theme_lay == 'Default'){
		$multipurpose_ecommerce_custom_css .='{';
			$multipurpose_ecommerce_custom_css .='';
		$multipurpose_ecommerce_custom_css .='}';
	}elseif($multipurpose_ecommerce_theme_lay == 'Circle'){
		$multipurpose_ecommerce_custom_css .='.circle .inner{';
			$multipurpose_ecommerce_custom_css .='width:unset;';
		$multipurpose_ecommerce_custom_css .='}';
	}elseif($multipurpose_ecommerce_theme_lay == 'Two Circle'){
		$multipurpose_ecommerce_custom_css .='.circle .inner{';
			$multipurpose_ecommerce_custom_css .='width:80%;
    border-right: 5px;';
		$multipurpose_ecommerce_custom_css .='}';
	}

	$multipurpose_ecommerce_loader_background_image = get_theme_mod('multipurpose_ecommerce_loader_background_image');
	if($multipurpose_ecommerce_loader_background_image != false){
		$multipurpose_ecommerce_custom_css .='#pre-loader{';
			$multipurpose_ecommerce_custom_css .='background: url('.esc_attr($multipurpose_ecommerce_loader_background_image).');-webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;';
		$multipurpose_ecommerce_custom_css .='}';
	}

	// Responsive Media
    $multipurpose_ecommerce_preloader = get_theme_mod( 'multipurpose_ecommerce_enable_disable_preloader', false);
	if($multipurpose_ecommerce_preloader == true && get_theme_mod( 'multipurpose_ecommerce_loader_setting', false) == false){
    	$multipurpose_ecommerce_custom_css .='#pre-loader{';
			$multipurpose_ecommerce_custom_css .='visibility:hidden;';
		$multipurpose_ecommerce_custom_css .='} ';
	}
    if($multipurpose_ecommerce_preloader == true){
    	$multipurpose_ecommerce_custom_css .='@media screen and (max-width:575px) {';
		$multipurpose_ecommerce_custom_css .='#pre-loader{';
			$multipurpose_ecommerce_custom_css .='visibility:visible;';
		$multipurpose_ecommerce_custom_css .='} }';
	}else if($multipurpose_ecommerce_preloader == false){
		$multipurpose_ecommerce_custom_css .='@media screen and (max-width:575px) {';
		$multipurpose_ecommerce_custom_css .='#pre-loader{';
			$multipurpose_ecommerce_custom_css .='visibility:hidden;';
		$multipurpose_ecommerce_custom_css .='} }';
	}

	$multipurpose_ecommerce_sidebar = get_theme_mod( 'multipurpose_ecommerce_enable_disable_sidebar',true);
    if($multipurpose_ecommerce_sidebar == true){
    	$multipurpose_ecommerce_custom_css .='@media screen and (max-width:575px) {';
		$multipurpose_ecommerce_custom_css .='#sidebox{';
			$multipurpose_ecommerce_custom_css .='display:block;';
		$multipurpose_ecommerce_custom_css .='} }';
	}else if($multipurpose_ecommerce_sidebar == false){
		$multipurpose_ecommerce_custom_css .='@media screen and (max-width:575px) {';
		$multipurpose_ecommerce_custom_css .='#sidebox{';
			$multipurpose_ecommerce_custom_css .='display:none;';
		$multipurpose_ecommerce_custom_css .='} }';
	}

	$multipurpose_ecommerce_topbar = get_theme_mod( 'multipurpose_ecommerce_enable_disable_topbar', false);
	if($multipurpose_ecommerce_topbar == true && get_theme_mod( 'multipurpose_ecommerce_show_hide_topbar', false) == false){
    	$multipurpose_ecommerce_custom_css .='.topbar-box{';
			$multipurpose_ecommerce_custom_css .='display:none;';
		$multipurpose_ecommerce_custom_css .='} ';
	}
    if($multipurpose_ecommerce_topbar == true){
    	$multipurpose_ecommerce_custom_css .='@media screen and (max-width:575px) {';
		$multipurpose_ecommerce_custom_css .='.topbar-box{';
			$multipurpose_ecommerce_custom_css .='display:block;';
		$multipurpose_ecommerce_custom_css .='} }';
	}else if($multipurpose_ecommerce_topbar == false){
		$multipurpose_ecommerce_custom_css .='@media screen and (max-width:575px) {';
		$multipurpose_ecommerce_custom_css .='.topbar-box{';
			$multipurpose_ecommerce_custom_css .='display:none;';
		$multipurpose_ecommerce_custom_css .='} }';
	}

	$multipurpose_ecommerce_slider = get_theme_mod( 'multipurpose_ecommerce_enable_disable_slider', true);
	if($multipurpose_ecommerce_slider == true && get_theme_mod( 'multipurpose_ecommerce_slider_hide', false) == false){
    	$multipurpose_ecommerce_custom_css .='#slider-section{';
			$multipurpose_ecommerce_custom_css .='display:none;';
		$multipurpose_ecommerce_custom_css .='} ';
	}
    if($multipurpose_ecommerce_slider == true){
    	$multipurpose_ecommerce_custom_css .='@media screen and (max-width:575px) {';
		$multipurpose_ecommerce_custom_css .='#slider-section{';
			$multipurpose_ecommerce_custom_css .='display:block;';
		$multipurpose_ecommerce_custom_css .='} }';
	}else if($multipurpose_ecommerce_slider == false){
		$multipurpose_ecommerce_custom_css .='@media screen and (max-width:575px){';
		$multipurpose_ecommerce_custom_css .='#slider-section{';
			$multipurpose_ecommerce_custom_css .='display:none;';
		$multipurpose_ecommerce_custom_css .='} }';
	}

	$multipurpose_ecommerce_sliderbutton = get_theme_mod( 'multipurpose_ecommerce_show_hide_slider_button',true);
	if($multipurpose_ecommerce_sliderbutton == true && get_theme_mod( 'multipurpose_ecommerce_slider_button',true) != true){
    	$multipurpose_ecommerce_custom_css .='#slider-section .slide-button{';
			$multipurpose_ecommerce_custom_css .='display:none;';
		$multipurpose_ecommerce_custom_css .='} ';
	}
    if($multipurpose_ecommerce_sliderbutton == true){
    	$multipurpose_ecommerce_custom_css .='@media screen and (max-width:575px) {';
		$multipurpose_ecommerce_custom_css .='#slider-section .slide-button{';
			$multipurpose_ecommerce_custom_css .='display:block;';
		$multipurpose_ecommerce_custom_css .='} }';
	}else if($multipurpose_ecommerce_sliderbutton == false){
		$multipurpose_ecommerce_custom_css .='@media screen and (max-width:575px){';
		$multipurpose_ecommerce_custom_css .='#slider-section .slide-button{';
			$multipurpose_ecommerce_custom_css .='display:none;';
		$multipurpose_ecommerce_custom_css .='} }';
	}

	$multipurpose_ecommerce_scroll = get_theme_mod( 'multipurpose_ecommerce_enable_disable_scrolltop',false);
	if($multipurpose_ecommerce_scroll == true && get_theme_mod( 'multipurpose_ecommerce_hide_show_scroll',false) != true){
    	$multipurpose_ecommerce_custom_css .='.scrollup i{';
			$multipurpose_ecommerce_custom_css .='display:none;';
		$multipurpose_ecommerce_custom_css .='} ';
	}
    if($multipurpose_ecommerce_scroll == true){
    	$multipurpose_ecommerce_custom_css .='@media screen and (max-width:575px) {';
		$multipurpose_ecommerce_custom_css .='.scrollup i{';
			$multipurpose_ecommerce_custom_css .='display:block;';
		$multipurpose_ecommerce_custom_css .='} }';
	}else if($multipurpose_ecommerce_scroll == false){
		$multipurpose_ecommerce_custom_css .='@media screen and (max-width:575px){';
		$multipurpose_ecommerce_custom_css .='.scrollup i{';
			$multipurpose_ecommerce_custom_css .='display:none;';
		$multipurpose_ecommerce_custom_css .='} }';
	}

	// Copyright top-bottom padding setting 
	$multipurpose_ecommerce_copyright_top_bottom_padding = get_theme_mod('multipurpose_ecommerce_copyright_top_bottom_padding');
	if($multipurpose_ecommerce_copyright_top_bottom_padding != false){
		$multipurpose_ecommerce_custom_css .='.site-info{';
			$multipurpose_ecommerce_custom_css .='padding-top: '.esc_attr($multipurpose_ecommerce_copyright_top_bottom_padding).'px; padding-bottom: '.esc_attr($multipurpose_ecommerce_copyright_top_bottom_padding).'px;';
		$multipurpose_ecommerce_custom_css .='}';
	}

	$multipurpose_ecommerce_footer_text_font_size = get_theme_mod('multipurpose_ecommerce_footer_text_font_size', 16);
	$multipurpose_ecommerce_custom_css .='.site-info{';
		$multipurpose_ecommerce_custom_css .='font-size: '.esc_attr($multipurpose_ecommerce_footer_text_font_size).'px;';
	$multipurpose_ecommerce_custom_css .='}';

	// Slider Height 
	$multipurpose_ecommerce_slider_height_option = get_theme_mod('multipurpose_ecommerce_slider_height_option');
	if($multipurpose_ecommerce_slider_height_option != false){
		$multipurpose_ecommerce_custom_css .='#slider-section img{';
			$multipurpose_ecommerce_custom_css .='height: '.esc_attr($multipurpose_ecommerce_slider_height_option).'px;';
		$multipurpose_ecommerce_custom_css .='}';
	}

	// scroll to top setting
	$multipurpose_ecommerce_scroll_border_radius = get_theme_mod('multipurpose_ecommerce_scroll_border_radius');
	if($multipurpose_ecommerce_scroll_border_radius != false){
		$multipurpose_ecommerce_custom_css .='.scrollup i{';
			$multipurpose_ecommerce_custom_css .='border-radius: '.esc_attr($multipurpose_ecommerce_scroll_border_radius).'px;';
		$multipurpose_ecommerce_custom_css .='}';
	}

	$multipurpose_ecommerce_scroll_top_fontsize = get_theme_mod('multipurpose_ecommerce_scroll_top_fontsize');
	if($multipurpose_ecommerce_scroll_top_fontsize != false){
		$multipurpose_ecommerce_custom_css .='.scrollup i{';
			$multipurpose_ecommerce_custom_css .='font-size: '.esc_attr($multipurpose_ecommerce_scroll_top_fontsize).'px;';
		$multipurpose_ecommerce_custom_css .='}';
	}

	$multipurpose_ecommerce_scroll_top_bottom_padding = get_theme_mod('multipurpose_ecommerce_scroll_top_bottom_padding');
	$multipurpose_ecommerce_scroll_left_right_padding = get_theme_mod('multipurpose_ecommerce_scroll_left_right_padding');
	if($multipurpose_ecommerce_scroll_top_bottom_padding != false || $multipurpose_ecommerce_scroll_left_right_padding != false){
		$multipurpose_ecommerce_custom_css .='.scrollup i{';
			$multipurpose_ecommerce_custom_css .='padding-top: '.esc_attr($multipurpose_ecommerce_scroll_top_bottom_padding).'px; padding-bottom: '.esc_attr($multipurpose_ecommerce_scroll_top_bottom_padding).'px; padding-left: '.esc_attr($multipurpose_ecommerce_scroll_left_right_padding).'px; padding-right: '.esc_attr($multipurpose_ecommerce_scroll_left_right_padding).'px;';
		$multipurpose_ecommerce_custom_css .='}';
	}

	// comment settings
	$multipurpose_ecommerce_comment_button_text = get_theme_mod('multipurpose_ecommerce_comment_button_text', 'Post Comment');
	if($multipurpose_ecommerce_comment_button_text == ''){
		$multipurpose_ecommerce_custom_css .='#comments p.form-submit {';
			$multipurpose_ecommerce_custom_css .='display: none;';
		$multipurpose_ecommerce_custom_css .='}';
	}

	$multipurpose_ecommerce_comment_form_heading = get_theme_mod('multipurpose_ecommerce_comment_form_heading', 'Leave a Reply');
	if($multipurpose_ecommerce_comment_form_heading == ''){
		$multipurpose_ecommerce_custom_css .='#comments h2#reply-title {';
			$multipurpose_ecommerce_custom_css .='display: none;';
		$multipurpose_ecommerce_custom_css .='}';
	}

	$multipurpose_ecommerce_comment_form_size = get_theme_mod( 'multipurpose_ecommerce_comment_form_size',100);
	$multipurpose_ecommerce_custom_css .='#comments textarea{';
		$multipurpose_ecommerce_custom_css .='width: '.esc_attr($multipurpose_ecommerce_comment_form_size).'%;';
	$multipurpose_ecommerce_custom_css .='}';

	/*------------ Woocommerce Settings  --------------*/
	$multipurpose_ecommerce_shop_button_padding_top = get_theme_mod('multipurpose_ecommerce_shop_button_padding_top', 6);
	$multipurpose_ecommerce_custom_css .='.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce button.button:disabled, .woocommerce button.button:disabled[disabled], .woocommerce ul.products li.product .button{';
		$multipurpose_ecommerce_custom_css .='padding-top: '.esc_attr($multipurpose_ecommerce_shop_button_padding_top).'px; padding-bottom: '.esc_attr($multipurpose_ecommerce_shop_button_padding_top).'px;';
	$multipurpose_ecommerce_custom_css .='}';

	$multipurpose_ecommerce_display_related_products = get_theme_mod('multipurpose_ecommerce_display_related_products',true);
	if($multipurpose_ecommerce_display_related_products == false){
		$multipurpose_ecommerce_custom_css .='.related.products{';
			$multipurpose_ecommerce_custom_css .='display: none;';
		$multipurpose_ecommerce_custom_css .='}';
	}

	$multipurpose_ecommerce_shop_products_border = get_theme_mod('multipurpose_ecommerce_shop_products_border', true);
	if($multipurpose_ecommerce_shop_products_border == false){
		$multipurpose_ecommerce_custom_css .='.woocommerce .products li,.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$multipurpose_ecommerce_custom_css .='border: none;';
		$multipurpose_ecommerce_custom_css .='}';
	}

	$multipurpose_ecommerce_shop_page_top_padding = get_theme_mod('multipurpose_ecommerce_shop_page_top_padding',10);
	$multipurpose_ecommerce_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
		$multipurpose_ecommerce_custom_css .='padding-top: '.esc_attr($multipurpose_ecommerce_shop_page_top_padding).'px !important; padding-bottom: '.esc_attr($multipurpose_ecommerce_shop_page_top_padding).'px !important;';
	$multipurpose_ecommerce_custom_css .='}';

	$multipurpose_ecommerce_shop_page_left_padding = get_theme_mod('multipurpose_ecommerce_shop_page_left_padding',10);
	$multipurpose_ecommerce_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
		$multipurpose_ecommerce_custom_css .='padding-left: '.esc_attr($multipurpose_ecommerce_shop_page_left_padding).'px !important; padding-right: '.esc_attr($multipurpose_ecommerce_shop_page_left_padding).'px !important;';
	$multipurpose_ecommerce_custom_css .='}';

	$multipurpose_ecommerce_shop_page_border_radius = get_theme_mod('multipurpose_ecommerce_shop_page_border_radius',0);
	$multipurpose_ecommerce_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
		$multipurpose_ecommerce_custom_css .='border-radius: '.esc_attr($multipurpose_ecommerce_shop_page_border_radius).'px;';
	$multipurpose_ecommerce_custom_css .='}';

	$multipurpose_ecommerce_shop_page_box_shadow = get_theme_mod('multipurpose_ecommerce_shop_page_box_shadow',0);
	$multipurpose_ecommerce_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
		$multipurpose_ecommerce_custom_css .='box-shadow: '.esc_attr($multipurpose_ecommerce_shop_page_box_shadow).'px '.esc_attr($multipurpose_ecommerce_shop_page_box_shadow).'px '.esc_attr($multipurpose_ecommerce_shop_page_box_shadow).'px #e4e4e4;';
	$multipurpose_ecommerce_custom_css .='}';

	// footer widget background
	$multipurpose_ecommerce_footer_widget_background = get_theme_mod('multipurpose_ecommerce_footer_widget_background', '#eee');
	$multipurpose_ecommerce_custom_css .='.site-footer{';
		$multipurpose_ecommerce_custom_css .='background-color: '.esc_attr($multipurpose_ecommerce_footer_widget_background).';';
		$multipurpose_ecommerce_custom_css .='}';

	$multipurpose_ecommerce_footer_widget_image = get_theme_mod('multipurpose_ecommerce_footer_widget_image');
	if($multipurpose_ecommerce_footer_widget_image != false){
		$multipurpose_ecommerce_custom_css .='.site-footer{';
			$multipurpose_ecommerce_custom_css .='background: url('.esc_attr($multipurpose_ecommerce_footer_widget_image).');';
			$multipurpose_ecommerce_custom_css .='background-repeat: no-repeat;';
			$multipurpose_ecommerce_custom_css .='background-size: cover;';
			$multipurpose_ecommerce_custom_css .='}';
	}

	$multipurpose_ecommerce_theme_lay = get_theme_mod( 'multipurpose_ecommerce_img_footer','scroll');
	if($multipurpose_ecommerce_theme_lay == 'fixed'){
		$multipurpose_ecommerce_custom_css .='.site-footer{';
			$multipurpose_ecommerce_custom_css .='background-attachment: fixed !important;';
		$multipurpose_ecommerce_custom_css .='}';
	}elseif ($multipurpose_ecommerce_theme_lay == 'scroll'){
		$multipurpose_ecommerce_custom_css .='.site-footer{';
			$multipurpose_ecommerce_custom_css .='background-attachment: scroll !important;';
		$multipurpose_ecommerce_custom_css .='}';
	}

	$multipurpose_ecommerce_footer_img_position = get_theme_mod('multipurpose_ecommerce_footer_img_position','center center');
	if($multipurpose_ecommerce_footer_img_position != false){
		$multipurpose_ecommerce_custom_css .='.site-footer{';
			$multipurpose_ecommerce_custom_css .='background-position: '.esc_attr($multipurpose_ecommerce_footer_img_position).'!important;';
		$multipurpose_ecommerce_custom_css .='}';
	} 
	/*------------- Navigation Menu Font Size ------------------*/
	$multipurpose_ecommerce_navigation_menu_font_size = get_theme_mod('multipurpose_ecommerce_navigation_menu_font_size');{
		$multipurpose_ecommerce_custom_css .='.main-navigation a, .navigation-top a{';
			$multipurpose_ecommerce_custom_css .='font-size: '.esc_attr($multipurpose_ecommerce_navigation_menu_font_size).'px;';
		$multipurpose_ecommerce_custom_css .='}';
	}

	$multipurpose_ecommerce_theme_lay = get_theme_mod( 'multipurpose_ecommerce_menu_text_tranform','Default');
	if($multipurpose_ecommerce_theme_lay == 'Capitalize'){
		$multipurpose_ecommerce_custom_css .='.main-navigation a, .navigation-top a,.main-navigation ul ul a,.main-navigation ul ul li a{';
			$multipurpose_ecommerce_custom_css .='text-transform:capitalize;';
		$multipurpose_ecommerce_custom_css .='}';
	}

	$multipurpose_ecommerce_theme_lay = get_theme_mod( 'multipurpose_ecommerce_menu_font_weight','Default');
	if($multipurpose_ecommerce_theme_lay == 'Normal'){
		$multipurpose_ecommerce_custom_css .='.main-navigation a, .navigation-top a{';
			$multipurpose_ecommerce_custom_css .='font-weight: normal;';
		$multipurpose_ecommerce_custom_css .='}';
	}

	// menu color
	$multipurpose_ecommerce_menu_color = get_theme_mod('multipurpose_ecommerce_menu_color');
	$multipurpose_ecommerce_custom_css .='.main-navigation a, .main-navigation ul li a, #site-navigation li a{';
			$multipurpose_ecommerce_custom_css .='color: '.esc_attr($multipurpose_ecommerce_menu_color).' !important;';
	$multipurpose_ecommerce_custom_css .='}';

	// Sub menu color
	$multipurpose_ecommerce_sub_menu_color = get_theme_mod('multipurpose_ecommerce_sub_menu_color');
	$multipurpose_ecommerce_custom_css .='.main-navigation ul.sub-menu a, .main-navigation ul.sub-menu li a, #site-navigation ul.sub-menu li a{';
			$multipurpose_ecommerce_custom_css .='color: '.esc_attr($multipurpose_ecommerce_sub_menu_color).' !important;';
	$multipurpose_ecommerce_custom_css .='}';

	// menu hover color
	$multipurpose_ecommerce_menu_hover_color = get_theme_mod('multipurpose_ecommerce_menu_hover_color');
	$multipurpose_ecommerce_custom_css .='.main-navigation a:hover, .main-navigation ul li a:hover, .main-navigation .current_page_item > a:hover, .main-navigation .current-menu-item > a:hover, .main-navigation .current_page_ancestor > a:hover, #site-navigation li a:hover{';
			$multipurpose_ecommerce_custom_css .='color: '.esc_attr($multipurpose_ecommerce_menu_hover_color).' !important;';
	$multipurpose_ecommerce_custom_css .='}';

	// Sub menu hover color
	$multipurpose_ecommerce_sub_menu_hover_color = get_theme_mod('multipurpose_ecommerce_sub_menu_hover_color');
	$multipurpose_ecommerce_custom_css .='.main-navigation ul.sub-menu a:hover, .main-navigation ul.sub-menu li a:hover, .main-navigation .current_page_item > a:hover, .main-navigation .current-menu-item > a:hover, .main-navigation .current_page_ancestor > a:hover, #site-navigation ul.sub-menu li a:hover{';
			$multipurpose_ecommerce_custom_css .='color: '.esc_attr($multipurpose_ecommerce_sub_menu_hover_color).' !important;';
	$multipurpose_ecommerce_custom_css .='}';

	// site title color option
	$multipurpose_ecommerce_site_title_color_setting = get_theme_mod('multipurpose_ecommerce_site_title_color_setting');
	$multipurpose_ecommerce_custom_css .='.logo h1 a, .site-title, .site-title a{';
		$multipurpose_ecommerce_custom_css .='color: '.esc_attr($multipurpose_ecommerce_site_title_color_setting).';';
	$multipurpose_ecommerce_custom_css .='} ';

	$multipurpose_ecommerce_tagline_color_setting = get_theme_mod('multipurpose_ecommerce_tagline_color_setting');
	$multipurpose_ecommerce_custom_css .=' .site-description,.logo p{';
		$multipurpose_ecommerce_custom_css .='color: '.esc_attr($multipurpose_ecommerce_tagline_color_setting).';';
	$multipurpose_ecommerce_custom_css .='!important } ';

	// site title font size option
	$multipurpose_ecommerce_title_font_size = get_theme_mod('multipurpose_ecommerce_title_font_size', 35);{
	$multipurpose_ecommerce_custom_css .='.site-title, .logo h1 a, .site-title, .site-title a{';
	$multipurpose_ecommerce_custom_css .='font-size: '.esc_attr($multipurpose_ecommerce_title_font_size).'px;';
		$multipurpose_ecommerce_custom_css .='!important }';
	}

	$multipurpose_ecommerce_tagline_font_size_settings = get_theme_mod('multipurpose_ecommerce_tagline_font_size_settings', 13);{
	$multipurpose_ecommerce_custom_css .='.logo p{';
	$multipurpose_ecommerce_custom_css .='font-size: '.esc_attr($multipurpose_ecommerce_tagline_font_size_settings).'px !important;';
		$multipurpose_ecommerce_custom_css .='}';
	}

    // -------------- site logo margin ------------
	 $multipurpose_ecommerce_logo_margin = get_theme_mod('multipurpose_ecommerce_logo_margin', '');{
	$multipurpose_ecommerce_custom_css .='.logo{';
	$multipurpose_ecommerce_custom_css .='margin: '.esc_attr($multipurpose_ecommerce_logo_margin).'px ;';
	$multipurpose_ecommerce_custom_css .='}';
	}
	//  ------------------logo padding-----------
	$multipurpose_ecommerce_logo_padding = get_theme_mod('multipurpose_ecommerce_logo_padding');
	$multipurpose_ecommerce_custom_css .='.logo{';
	$multipurpose_ecommerce_custom_css .='padding: '.esc_attr($multipurpose_ecommerce_logo_padding).'px !important;';
	$multipurpose_ecommerce_custom_css .='}';

	/*------------------ Background Skin Option  -------------------*/
	$multipurpose_ecommerce_theme_lay = get_theme_mod( 'multipurpose_ecommerce_background_image_type','Transparent');
    if($multipurpose_ecommerce_theme_lay == 'Background'){
		$multipurpose_ecommerce_custom_css .='.blogger, #sidebox .widget, .about-text, .related-posts .page-box, .woocommerce ul.products li.product, .woocommerce-page ul.products li.product, .background-img-skin, .pages-te, .woocommerce .woocommerce-ordering{';
			$multipurpose_ecommerce_custom_css .='background-color: #fff;';
		$multipurpose_ecommerce_custom_css .='}';
		$multipurpose_ecommerce_custom_css .='#sidebox .widget{';
			$multipurpose_ecommerce_custom_css .='padding:10px;';
		$multipurpose_ecommerce_custom_css .='}';
	}else if($multipurpose_ecommerce_theme_lay == 'Transparent'){
		$multipurpose_ecommerce_custom_css .='{';
			$multipurpose_ecommerce_custom_css .='background-color: transparent;';
		$multipurpose_ecommerce_custom_css .='}';
	}

	// slider overlay
	$multipurpose_ecommerce_show_slider_image_overlay = get_theme_mod('multipurpose_ecommerce_show_slider_image_overlay', true);
	if($multipurpose_ecommerce_show_slider_image_overlay == false){
		$multipurpose_ecommerce_custom_css .='#slider-section img{';
			$multipurpose_ecommerce_custom_css .='opacity:1;';
		$multipurpose_ecommerce_custom_css .='}';
	} 
	$multipurpose_ecommerce_color_slider_image_overlay = get_theme_mod('multipurpose_ecommerce_color_slider_image_overlay', true);
	if($multipurpose_ecommerce_show_slider_image_overlay != false){
		$multipurpose_ecommerce_custom_css .='#slider-section{';
			$multipurpose_ecommerce_custom_css .='background-color: '.esc_attr($multipurpose_ecommerce_color_slider_image_overlay).';';
		$multipurpose_ecommerce_custom_css .='}';
	}

	// woocommerce product sale settings
	$multipurpose_ecommerce_border_radius_product_sale_text = get_theme_mod('multipurpose_ecommerce_border_radius_product_sale_text',50);
	$multipurpose_ecommerce_custom_css .='.woocommerce span.onsale {';
		$multipurpose_ecommerce_custom_css .='border-radius: '.esc_attr($multipurpose_ecommerce_border_radius_product_sale_text).'%;';
	$multipurpose_ecommerce_custom_css .='}';

	$multipurpose_ecommerce_position_product_sale = get_theme_mod('multipurpose_ecommerce_position_product_sale', 'Right');
	if($multipurpose_ecommerce_position_product_sale == 'Right' ){
		$multipurpose_ecommerce_custom_css .='.woocommerce ul.products li.product .onsale{';
			$multipurpose_ecommerce_custom_css .=' left:auto; right:0;';
		$multipurpose_ecommerce_custom_css .='}';
	}elseif($multipurpose_ecommerce_position_product_sale == 'Left' ){
		$multipurpose_ecommerce_custom_css .='.woocommerce ul.products li.product .onsale{';
			$multipurpose_ecommerce_custom_css .=' left:0; right:auto;';
		$multipurpose_ecommerce_custom_css .='}';
	}

	$multipurpose_ecommerce_product_sale_text_size = get_theme_mod('multipurpose_ecommerce_product_sale_text_size',14);
	$multipurpose_ecommerce_custom_css .='.woocommerce span.onsale{';
		$multipurpose_ecommerce_custom_css .='font-size: '.esc_attr($multipurpose_ecommerce_product_sale_text_size).'px;';
	$multipurpose_ecommerce_custom_css .='}';

	$multipurpose_ecommerce_top_bottom_product_sale_padding = get_theme_mod('multipurpose_ecommerce_top_bottom_product_sale_padding');
	$multipurpose_ecommerce_left_right_product_sale_padding = get_theme_mod('multipurpose_ecommerce_left_right_product_sale_padding');
	$multipurpose_ecommerce_custom_css .='.woocommerce ul.products li.product .onsale{';
		$multipurpose_ecommerce_custom_css .='padding-top: '.esc_attr($multipurpose_ecommerce_top_bottom_product_sale_padding).'px; padding-bottom: '.esc_attr($multipurpose_ecommerce_top_bottom_product_sale_padding).'px; padding-left: '.esc_attr($multipurpose_ecommerce_left_right_product_sale_padding).'px; padding-right: '.esc_attr($multipurpose_ecommerce_left_right_product_sale_padding).'px; display:inline-block;';
	$multipurpose_ecommerce_custom_css .='}';

	// woocommerce Product Navigation
	$multipurpose_ecommerce_shop_products_navigation = get_theme_mod('multipurpose_ecommerce_shop_products_navigation', 'Yes');
	if($multipurpose_ecommerce_shop_products_navigation == 'No'){
		$multipurpose_ecommerce_custom_css .='.woocommerce nav.woocommerce-pagination{';
			$multipurpose_ecommerce_custom_css .='display: none;';
		$multipurpose_ecommerce_custom_css .='}';
	}

	// Post Block
	$multipurpose_ecommerce_post_break_block_setting = get_theme_mod( 'multipurpose_ecommerce_post_break_block_setting','Into Blocks');
    if($multipurpose_ecommerce_post_break_block_setting == 'Without Blocks'){
		$multipurpose_ecommerce_custom_css .='.blogger, .blogger:hover{';
			$multipurpose_ecommerce_custom_css .='border: none; margin:30px 0; box-shadow:none;';
		$multipurpose_ecommerce_custom_css .='}';
	}

	// fixed header padding option
	$multipurpose_ecommerce_fixed_header_padding_option = get_theme_mod('multipurpose_ecommerce_fixed_header_padding_option');
	$multipurpose_ecommerce_custom_css .='.fixed-header{';
		$multipurpose_ecommerce_custom_css .='padding: '.esc_attr($multipurpose_ecommerce_fixed_header_padding_option).'px;';
	$multipurpose_ecommerce_custom_css .='}';

	// slider top and bottom padding
	$multipurpose_ecommerce_padding_top_bottom_slider_content = get_theme_mod('multipurpose_ecommerce_padding_top_bottom_slider_content');
	$multipurpose_ecommerce_padding_left_right_slider_content = get_theme_mod('multipurpose_ecommerce_padding_left_right_slider_content');
	$multipurpose_ecommerce_custom_css .='#slider-section .carousel-caption, #slider-section .inner_carousel, #slider-section .inner_carousel h1, #slider-section .inner_carousel p, #slider-section .readbutton{';
		$multipurpose_ecommerce_custom_css .='top: '.esc_attr($multipurpose_ecommerce_padding_top_bottom_slider_content).'%; bottom: '.esc_attr($multipurpose_ecommerce_padding_top_bottom_slider_content).'%;left: '.esc_attr($multipurpose_ecommerce_padding_left_right_slider_content).'%;right: '.esc_attr($multipurpose_ecommerce_padding_left_right_slider_content).'%;';
	$multipurpose_ecommerce_custom_css .='}';

     //Copyright background css
	$multipurpose_ecommerce_copyright_background_color = get_theme_mod('multipurpose_ecommerce_copyright_background_color');
	$multipurpose_ecommerce_custom_css .='.site-info{';
		$multipurpose_ecommerce_custom_css .='background-color: '.esc_attr($multipurpose_ecommerce_copyright_background_color).';';
	$multipurpose_ecommerce_custom_css .='}';
     
	$multipurpose_ecommerce_copyright_text_color = get_theme_mod('multipurpose_ecommerce_copyright_text_color');
	$multipurpose_ecommerce_custom_css .='.site-info , .site-info a{';
		$multipurpose_ecommerce_custom_css .='color: '.esc_attr($multipurpose_ecommerce_copyright_text_color).'!important;';
	$multipurpose_ecommerce_custom_css .='}';

    // featured image dimention
	$multipurpose_ecommerce_post_image_dimention = get_theme_mod('multipurpose_ecommerce_post_image_dimention', 'Default');
	$multipurpose_ecommerce_post_featured_image_width = get_theme_mod('multipurpose_ecommerce_post_featured_image_width');
	$multipurpose_ecommerce_post_featured_image_height = get_theme_mod('multipurpose_ecommerce_post_featured_image_height');
	if($multipurpose_ecommerce_post_image_dimention == 'Custom Image Size'){
		$multipurpose_ecommerce_custom_css .='.post-image img{';
			$multipurpose_ecommerce_custom_css .='width: '.esc_attr($multipurpose_ecommerce_post_featured_image_width).'px; height: '.esc_attr($multipurpose_ecommerce_post_featured_image_height).'px;';
		$multipurpose_ecommerce_custom_css .='}';
	}

     // Blog post image border radious
    $multipurpose_ecommerce_blog_post_img_border_radius = get_theme_mod('multipurpose_ecommerce_blog_post_img_border_radius', 0);
	$multipurpose_ecommerce_custom_css .='.post-image img{';
		$multipurpose_ecommerce_custom_css .='border-radius: '.esc_attr($multipurpose_ecommerce_blog_post_img_border_radius).'px;';
	$multipurpose_ecommerce_custom_css .='}';

     // Blog post image box shadow
	$multipurpose_ecommerce_blog_post_img_box_shadow = get_theme_mod('multipurpose_ecommerce_blog_post_img_box_shadow',0);
	$multipurpose_ecommerce_custom_css .='.post-image img{';
		$multipurpose_ecommerce_custom_css .='box-shadow: '.esc_attr($multipurpose_ecommerce_blog_post_img_box_shadow).'px '.esc_attr($multipurpose_ecommerce_blog_post_img_box_shadow).'px '.esc_attr($multipurpose_ecommerce_blog_post_img_box_shadow).'px #ccc;';
	$multipurpose_ecommerce_custom_css .='}';

    // Single post image border radious
	$multipurpose_ecommerce_single_post_img_border_radius = get_theme_mod('multipurpose_ecommerce_single_post_img_border_radius', 0);
	$multipurpose_ecommerce_custom_css .='.blogger.singlebox .post-image img{';
		$multipurpose_ecommerce_custom_css .='border-radius: '.esc_attr($multipurpose_ecommerce_single_post_img_border_radius).'px;';
	$multipurpose_ecommerce_custom_css .='}';

	 // Single post image box shadow
	$multipurpose_ecommerce_single_post_img_box_shadow = get_theme_mod('multipurpose_ecommerce_single_post_img_box_shadow',0);
	$multipurpose_ecommerce_custom_css .='.blogger.singlebox .post-image img{';
		$multipurpose_ecommerce_custom_css .='box-shadow: '.esc_attr($multipurpose_ecommerce_single_post_img_box_shadow).'px '.esc_attr($multipurpose_ecommerce_single_post_img_box_shadow).'px '.esc_attr($multipurpose_ecommerce_single_post_img_box_shadow).'px #ccc;';
	$multipurpose_ecommerce_custom_css .='}';

	// Single post comments
	$multipurpose_ecommerce_post_comment_enable = get_theme_mod('multipurpose_ecommerce_post_comment_enable',true);
	if($multipurpose_ecommerce_post_comment_enable == false){
		$multipurpose_ecommerce_custom_css .='#comments{';
			$multipurpose_ecommerce_custom_css .='display: none;';
		$multipurpose_ecommerce_custom_css .='}';
	} 

	//scroll to top css
	$multipurpose_ecommerce_scroll_background_color = get_theme_mod('multipurpose_ecommerce_scroll_background_color');
	$multipurpose_ecommerce_custom_css .='.scrollup i{';
	$multipurpose_ecommerce_custom_css .='background: '.esc_attr($multipurpose_ecommerce_scroll_background_color).';';
	$multipurpose_ecommerce_custom_css .='border-color: '.esc_attr($multipurpose_ecommerce_scroll_background_color).';';
	$multipurpose_ecommerce_custom_css .='}';

	$multipurpose_ecommerce_scroll_icon_color = get_theme_mod('multipurpose_ecommerce_scroll_icon_color');
	$multipurpose_ecommerce_custom_css .='.scrollup i{';
	$multipurpose_ecommerce_custom_css .='color: '.esc_attr($multipurpose_ecommerce_scroll_icon_color).';';
	$multipurpose_ecommerce_custom_css .='}';

	$multipurpose_ecommerce_scroll_background_hover_color = get_theme_mod('multipurpose_ecommerce_scroll_background_hover_color');
	$multipurpose_ecommerce_custom_css .='.scrollup i:hover{';
	$multipurpose_ecommerce_custom_css .='background: '.esc_attr($multipurpose_ecommerce_scroll_background_hover_color).';';
	$multipurpose_ecommerce_custom_css .='border-color: '.esc_attr($multipurpose_ecommerce_scroll_background_hover_color).';';
	$multipurpose_ecommerce_custom_css .='}';

	//Initial Cap
	$multipurpose_ecommerce_caps_enable = get_theme_mod('multipurpose_ecommerce_caps_enable', 'false');
	if($multipurpose_ecommerce_caps_enable == 'true' ){
	$multipurpose_ecommerce_custom_css .='.blogger .text p:nth-of-type(1)::first-letter, .blogger .inicap:nth-of-type(1)::first-letter{';
	$multipurpose_ecommerce_custom_css .=' font-size: 60px; font-weight: 800;';
	$multipurpose_ecommerce_custom_css .=' margin-right: 10px;';
	$multipurpose_ecommerce_custom_css .=' font-family: "Vollkorn", serif;';
	$multipurpose_ecommerce_custom_css .=' line-height: 1;';
	$multipurpose_ecommerce_custom_css .='}';
	}elseif($multipurpose_ecommerce_caps_enable == 'false' ){
	$multipurpose_ecommerce_custom_css .='.blogger .text p:nth-of-type(1)::first-letter,.blogger .inicap:nth-of-type(1)::first-letter {';
	$multipurpose_ecommerce_custom_css .='display: none;';
	$multipurpose_ecommerce_custom_css .='}';
	}