<?php
   $servername="us-cdbr-east-02.cleardb.com";
   $dBUsername="b7fcd41c893d7a";
   $dBPassword="1e8f896b7da9e41";
   $dBName="heroku_61db5a5cdc2dfd8";
   $conn=mysqli_connect($servername,$dBUsername,$dBPassword,$dBName);
   $authtoken = $_GET['auth'];
   $sql='SELECT * FROM userauth2 WHERE token=?';
   $stmt=mysqli_stmt_init($conn);
 if(!mysqli_stmt_prepare($stmt,$sql)){
       header("Location:Signin.php?error=SQL1");
       exit();
}
   mysqli_stmt_bind_param($stmt,"s",$authtoken);
   mysqli_stmt_execute($stmt);
   mysqli_stmt_store_result($stmt);
   $count=mysqli_stmt_num_rows($stmt);
 if (!$count>0){
    header("Location:Signin.php?error=notloggedin");
    exit();
}
?>
<!DOCTYPE html> <!--[if IE 8]><html class="ie ie8" lang="en-US"> <![endif]--> <!--[if !(IE 7) & !(IE 8)]><!--><html lang="en-US"> <!--<![endif]-->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<!-- /Added by HTTrack -->
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link rel="profile" 
href="http://gmpg.org/xfn/11">
<link rel="pingback" 
href="Backend/xmlrpc.html">
<title>Delivery</title>
<link rel="stylesheet" 
href="c7c58cca0fc9c8acb3530bf8cbf53297.css" 
data-minify="1" />
<link rel="stylesheet" 
href="plugIcons.css" />
<link rel="stylesheet" 
href="deliveryd.css" />
<style> 
input[type=submit]{
  float: right;
  margin-top: 20px;
}
</style>
<link rel='dns-prefetch' 
href='http://fonts.googleapis.com/' />
<link rel='dns-prefetch' 
href='http://basel-cec2.kxcdn.com/' />
<link rel="alternate" type="application/rss+xml" title="Basel &raquo; Feed" 
href="../../feed/index.html" />
<link rel="alternate" type="application/rss+xml" title="Basel &raquo; Comments Feed" 
href="../../comments/feed/index.html" />  
 <style id='rs-plugin-settings-inline-css' type='text/css'>.tp-caption a{color:#ff7302;text-shadow:none;-webkit-transition:all 0.2s ease-out;-moz-transition:all 0.2s ease-out;-o-transition:all 0.2s ease-out;-ms-transition:all 0.2s ease-out}.tp-caption a:hover{color:#ffa902}</style>
 <style id='woocommerce-inline-inline-css' type='text/css'>.woocommerce form .form-row .required{visibility:visible}
</style>
 <link rel='stylesheet' id='xts-google-fonts-css'  
 href='https://fonts.googleapis.com/css?family=Karla%3A400%2C700%2C400italic%2C700italic%7CLora%3A400%2C700%2C400italic%2C700italic%7CLato%3A100%2C300%2C400%2C700%2C900%2C100italic%2C300italic%2C400italic%2C700italic%2C900italic&amp;subset=latin&amp;ver=5.1.0' type='text/css' media='all' /> <script type="text/template" id="tmpl-variation-template"><div class="woocommerce-variation-description">{{{ data.variation.variation_description }}}</div>
	<div class="woocommerce-variation-price">
	{{{ data.variation.price_html }}}
	</div>
	<div class="woocommerce-variation-availability">{{{ data.variation.availability_html }}}</div></script> <script type="text/template" id="tmpl-unavailable-variation-template"><p>Sorry, this product is unavailable. Please choose a different combination.</p></script> 
	<script type='text/javascript'>/* <![CDATA[ */ var monsterinsights_frontend = {"js_events_tracking":"true","download_extensions":"doc,pdf,ppt,zip,xls,docx,pptx,xlsx","inbound_paths":"[]","home_url":"https:\/\/demo.xtemos.com\/basel","hash_tracking":"false"}; /* ]]> */</script> 
	<script type='text/javascript' 
	src='jquery-1.12.4-wp.js'>
</script> 
<script type='text/javascript'>/* <![CDATA[ */ 
var wc_add_to_cart_params = {"ajax_url":"\/basel\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/basel\/?wc-ajax=%%endpoint%%","i18n_view_cart":"View cart","cart_url":"https:\/\/demo.xtemos.com\/basel\/cart\/","is_cart":"","cart_redirect_after_add":"no"}; /* ]]> */
</script> <!--[if lt IE 9]> <script type='text/javascript' src='https://basel-cec2.kxcdn.com/basel/wp-content/themes/basel/js/html5.min.js?ver=5.1.0'></script> <![endif]-->
<link rel='https://api.w.org/' 
href='../../wp-json/index.html' />
<link rel="EditURI" type="application/rsd+xml" title="RSD" 
href="../../xmlrpc0db0.html?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" 
href="../../wp-includes/wlwmanifest.xml" /><meta name="generator" content="WordPress 5.3.2" /><meta name="generator" content="WooCommerce 3.9.2" />
<link rel="canonical" 
href="cannacaps.html" />
<link rel='shortlink' href='../../indexa726.html?p=19922' /><meta name="theme-color" content=""><link rel="shortcut icon" href="favicon.png"><link rel="apple-touch-icon-precomposed" sizes="152x152" href="apple-touch-icon-152x152-precomposed.png">
	
	<style>
	.basel-promo-popup{max-width:900px}.site-logo{width:20%}.site-logo img{max-width:196px;max-height:95px}.widgetarea-head,.main-nav{width:40%}.right-column{width:40%}.basel-woocommerce-layered-nav .basel-scroll{max-height:181px}.header-banner{height:40px}.header-banner-display .website-wrapper{margin-top:40px}.topbar-menu ul>li{line-height:42px}.topbar-wrapp,.topbar-content:before{height:42px}.sticky-header-prepared.basel-top-bar-on .header-shop,.sticky-header-prepared.basel-top-bar-on .header-split,.enable-sticky-header.basel-header-overlap.basel-top-bar-on .main-header{top:42px}.site-logo img{max-height:95px}.act-scroll .site-logo img,.header-clone .site-logo img{max-height:60px}.header-clone .main-nav .menu>li>a{height:60px;line-height:60px}.sticky-header-real:not(.global-header-menu-top) .switch-logo-enable .basel-logo{height:95px}.sticky-header-real:not(.global-header-menu-top) .act-scroll .switch-logo-enable .basel-logo{height:60px}.sticky-header-real:not(.global-header-menu-top) .act-scroll .switch-logo-enable{transform:translateY(-60px);-webkit-transform:translateY(-60px)}.main-nav .menu>li>a{height:95px;line-height:95px}.act-scroll .main-nav .menu>li>a{height:60px;line-height:60px}.header-shop .right-column .header-links{height:95px;line-height:95px}.header-shop.act-scroll .right-column .header-links{height:60px;line-height:60px}.basel-header-overlap .title-size-default,.basel-header-overlap .title-size-small,.basel-header-overlap .title-shop.without-title.title-size-default,.basel-header-overlap .title-shop.without-title.title-size-small{padding-top:135px}.basel-header-overlap .title-shop.without-title.title-size-large,.basel-header-overlap .title-size-large{padding-top:215px}@media (max-width:991px){.header-banner{height:40px}.header-banner-display .website-wrapper{margin-top:40px}.topbar-menu ul>li{line-height:38px}.topbar-wrapp,.topbar-content:before{height:38px}.sticky-header-prepared.basel-top-bar-on .header-shop,.sticky-header-prepared.basel-top-bar-on .header-split,.enable-sticky-header.basel-header-overlap.basel-top-bar-on .main-header{top:38px}.main-header .wrapp-header{min-height:60px}.site-logo img{max-height:60px}.act-scroll .site-logo img,.header-clone .site-logo img{max-height:60px}.main-header .switch-logo-enable .basel-logo{height:60px}.sticky-header-real:not(.global-header-menu-top) .act-scroll .switch-logo-enable .basel-logo{height:60px}.sticky-header-real:not(.global-header-menu-top) .act-scroll .switch-logo-enable{transform:translateY(-60px);-webkit-transform:translateY(-60px)}.basel-header-overlap .title-size-default,.basel-header-overlap .title-size-small,.basel-header-overlap .title-shop.without-title.title-size-default,.basel-header-overlap .title-shop.without-title.title-size-small{padding-top:80px}.basel-header-overlap .title-shop.without-title.title-size-large,.basel-header-overlap .title-size-large{padding-top:120px}}.product-category-thumbnail img,.category-grid-item .category-link{width:100%}.product-grid-item .product-element-top>a img,.basel-hover-alt .hover-img img,.product-list-image .hover-img img{width:100%}#product-28083 .product-images .image-action-zoom figure img[src$=".png"],#product-28083 .product-images .image-action-zoom .owl-item,#product-28084 .product-images .image-action-zoom figure img[src$=".png"],#product-28084 .product-images .image-action-zoom .owl-item,#product-28085 .product-images .image-action-zoom figure img[src$=".png"],#product-28085 .product-images .image-action-zoom .owl-item,#product-28078 .product-images .image-action-zoom figure img[src$=".png"],#product-28078 .product-images .image-action-zoom .owl-item{background:#fff}.basel-product-categories>li.cat-item-109{display:none}.main-header form.has-categories-dropdown .search-by-category ul .children{display:none}.col-five>.vc_col-sm-2{width:20%}iframe[name='google_conversion_frame']{height:0!important;width:0!important;line-height:0!important;font-size:0!important;margin-top:-13px;float:left}.dropdown-scroll>.sub-menu-dropdown{height:540px;overflow:hidden}.header-spacing+.header-menu-top{margin-top:-40px}.woocommerce-ordering.with-list .selected-order{font-weight:700}.header-categories .main-nav .menu li.menu-item-design-full-width>.sub-menu-dropdown{margin-top:-78px}.hide-pag .owl-pagination,.hide-pag .owl-buttons{display:none}.color-scheme-light .testimonial .testimonial-content footer>span{color:rgba(255,255,255,.8)}.color-scheme-light .owl-theme:hover .owl-controls.clickable .owl-buttons div.disabled{color:rgba(255,255,255,.6)}.color-scheme-light .owl-theme .owl-controls .owl-buttons div{color:rgba(255,255,255,.8)}.color-scheme-light .owl-theme .owl-controls.clickable .owl-buttons div:hover{color:rgba(255,255,255,1)}.color-scheme-light .owl-theme .owl-controls .owl-page span{background-color:rgba(255,255,255,.6)}.color-scheme-light .owl-theme .owl-controls .owl-page.active span,.color-scheme-light .owl-theme .owl-controls.clickable .owl-page:hover span{background-color:#fff}.basel-buttons .product-compare-button>a,.single-product-content .entry-summary .button.compare,.basel-hover-base .basel-add-btn>a,.basel-hover-base .product-compare-button a{text-transform:none}.rtl .has-border,.rtl .has-border>.vc_column-inner{border:none!important}.related-and-upsells .product-grid-item .hover-img img{width:100%}.hidden-nav-button{display:none!important}.dropdown-scroll .wpb_single_image{border:2px solid #f7f7f7}.page-id-25728 .dropdown-scroll .wpb_single_image,.page-id-23954 .dropdown-scroll .wpb_single_image{border:2px solid rgba(255,255,255,.1)}.widget_product_categories .cat-item-109 .cat-item:nth-child(even){display:none}@media (max-width:1024px) and (min-width:991px){.header-categories .categories-menu-dropdown .sub-menu-dropdown{width:680px}}@media (max-width:991px){.sticky-footer-on .footer-container{visibility:visible}}.menu-item-19907>.sub-menu-dropdown{background-size:contain}.woocommerce-checkout-review-order-table td{width:50%}.basel-dark .cart-widget-side .widget_shopping_cart .buttons a:not(.checkout){border-color:#333;background-color:#333}.basel-dark .cart-widget-side .widget_shopping_cart .buttons a:not(.checkout):hover{opacity:.7}.blazy-image-loading{position:relative}.blazy-image-loading:after{position:absolute;top:50%;margin-top:-15px;margin-left:-15px;opacity:.3;left:50%;content:" ";width:35px;height:35px;display:inline-block;vertical-align:middle;border:1px solid #000;border-radius:50%;border-left-color:transparent!important;border-right-color:transparent!important;-webkit-animation:load-spin 450ms infinite linear;animation:load-spin 450ms infinite linear}.color-scheme-light .color-scheme-dark .product-grid-item .product-title>a{color:#252222}.woocommerce-password-strength:empty{margin:0;padding:0}.basel-pagination:before{content:'';display:block;clear:both}.basel-hover-button .basel-buttons .product-compare-button>a:before,.basel-hover-button .basel-buttons .quick-view>a:before,.basel-hover-info .basel-buttons .product-compare-button>a:before,.basel-hover-info .basel-buttons .quick-view>a:before{border-color:#FFF!important}.single-product .site-content>.woocommerce-message{display:none}.basel-entry-meta li.modified-date{display:none!important}.owl-carousel .blog-design-masonry.has-post-thumbnail .post-date{left:10px}.instagram-widget.instagram-slider .instagram-pics li{-webkit-flex-basis:100%;-ms-flex-basis:100%;flex-basis:100%;max-width:100%}.slick-slide.active-thumb{transition:none!important}.basel-font-weight-600{font-weight:600}.basel-wishlist-share>span{margin-top:5px}.browser-Firefox .wrapp-header{height:0}.global-header-vertical .main-page-wrapper{margin-top:0;padding-top:0}@media (min-width:992px){.buy-basel{position:fixed;bottom:40px;left:40px;background-color:#000;color:#fff;padding:10px 20px;border-radius:30px;text-transform:uppercase;transition:all .3s ease;z-index:1000}.buy-basel img{margin-right:10px;margin-bottom:1px}.buy-basel:hover,.buy-basel:focus{background-color:#97ca58;color:#fff;text-decoration:none;border-color:#000}.rtl .buy-basel{left:auto;right:40px}.rtl .buy-basel img{margin-right:0;margin-left:10px}}@media (min-width:768px) and (max-width:991px){.buy-basel{display:none}.swatch-on-grid .basel-tooltip-label{display:none}.dropdown-scroll>.sub-menu-dropdown{display:none}.basel-back-btn>span:before,.basel-products-nav .product-btn>a span:before{top:0}.shop-loop-head{width:100%}.single-product-content .product-images .thumbs-position-left .thumbnails{margin-top:4px}body .basel-parallax{background-attachment:scroll!important}}@media (min-width:481px) and (max-width:767px){.buy-basel{display:none}.swatch-on-grid .basel-tooltip-label{display:none}.dropdown-scroll>.sub-menu-dropdown{display:none}.basel-back-btn>span:before,.basel-products-nav .product-btn>a span:before{top:0}.single-product-content .product-images .thumbs-position-left .thumbnails{margin-top:4px}body .basel-parallax{background-attachment:scroll!important}.basel-text-block-wrapper .basel-text-block{max-width:100%}}@media (max-width:480px){.buy-basel{display:none}.swatch-on-grid .basel-tooltip-label{display:none}.dropdown-scroll>.sub-menu-dropdown{display:none}.basel-back-btn>span:before,.basel-products-nav .product-btn>a span:before{top:0}.single-product-content .product-images .thumbs-position-left .thumbnails{margin-top:4px}body .basel-parallax{background-attachment:scroll!important}.basel-text-block-wrapper .basel-text-block{max-width:100%}}
	</style>
	<link rel="stylesheet" href="cart.css" />
	<noscript>
	<style>
	.woocommerce-product-gallery{opacity:1!important}
	</style>
	</noscript>
	<style type="text/css">
	.recentcomments a{display:inline!important;padding:0!important;margin:0!important}</style><meta name="generator" content="Powered by WPBakery Page Builder - drag and drop page builder for WordPress."/><meta name="generator" content="Powered by Slider Revolution 6.1.2 - responsive, Mobile-Friendly Slider Plugin for WordPress with comfortable drag and drop interface." /><style data-type="basel-dynamic-css">
		.page-title-default{background-color:black;background-size:cover}
		.topbar-wrapp{background-color:seagreen}
		.main-header{border-color:#f5f5f5;border-style:solid;border-bottom-width:2pxpx}
		.footer-container{background-color:darkred}body,p,	
		.widget_nav_mega_menu .menu>li>a,.mega-navigation .menu>li>a,.basel-navigation .menu>li.menu-item-design-full-width .sub-sub-menu li a,.basel-navigation .menu>li.menu-item-design-sized .sub-sub-menu li a,.basel-navigation .menu>li.menu-item-design-default .sub-menu li a,.font-default{font-family:Karla,Arial,Helvetica,sans-serif}h1 a,h2 a,h3 a,h4 a,h5 a,h6 a,h1,h2,h3,h4,h5,h6,.title,table th,.wc-tabs li a,.masonry-filter li a,.woocommerce .cart-empty,.basel-navigation .menu>li.menu-item-design-full-width .sub-menu>li>a,.basel-navigation .menu>li.menu-item-design-sized .sub-menu>li>a,.mega-menu-list>li>a,fieldset legend,table th,.basel-empty-compare,.compare-field,.compare-value:before,.color-scheme-dark .info-box-inner h1,.color-scheme-dark .info-box-inner h2,.color-scheme-dark .info-box-inner h3,.color-scheme-dark .info-box-inner h4,.color-scheme-dark .info-box-inner h5,.color-scheme-dark .info-box-inner h6{font-family:Karla,Arial,Helvetica,sans-serif}.product-title a,.post-slide .entry-title a,.category-grid-item .hover-mask h3,.basel-search-full-screen .basel-search-inner input[type="text"],.blog-post-loop .entry-title,.post-title-large-image .entry-title,.single-product-content .entry-title{font-family:Lora,Arial,Helvetica,sans-serif;font-weight:400}.title-alt,.subtitle,.font-alt,.basel-entry-meta{font-family:Lato,Arial,Helvetica,sans-serif;font-weight:400;font-style:italic}.widgettitle,.widget-title{font-family:Karla,Arial,Helvetica,sans-serif;font-weight:700;color:#0a0a0a}.main-nav .menu>li>a{font-family:Karla,Arial,Helvetica,sans-serif}.color-primary,.mobile-nav ul li.current-menu-item>a,.main-nav .menu>li.current-menu-item>a,.main-nav .menu>li.onepage-link.current-menu-item>a,.main-nav .menu>li>a:hover,.main-nav .menu>li>a:focus,.basel-navigation .menu>li.menu-item-design-default ul li:hover>a,.basel-navigation .menu>li.menu-item-design-full-width .sub-menu li a:hover,.basel-navigation .menu>li.menu-item-design-sized .sub-menu li a:hover,.basel-product-categories.responsive-cateogires li.current-cat>a,.basel-product-categories.responsive-cateogires li.current-cat-parent>a,.basel-product-categories.responsive-cateogires li.current-cat-ancestor>a,.basel-my-account-links a:hover:before,.basel-my-account-links a:focus:before,.mega-menu-list>li>a:hover,.mega-menu-list .sub-sub-menu li a:hover,a[href^=tel],.topbar-menu ul>li>.sub-menu-dropdown li>a:hover,.btn.btn-color-primary.btn-style-bordered,.button.btn-color-primary.btn-style-bordered,button.btn-color-primary.btn-style-bordered,.added_to_cart.btn-color-primary.btn-style-bordered,input[type=submit].btn-color-primary.btn-style-bordered,a.login-to-prices-msg,a.login-to-prices-msg:hover,.basel-dark .single-product-content .entry-summary .yith-wcwl-add-to-wishlist .yith-wcwl-wishlistaddedbrowse a:before,.basel-dark .single-product-content .entry-summary .yith-wcwl-add-to-wishlist .yith-wcwl-wishlistexistsbrowse a:before,.basel-dark .read-more-section .btn-read-more,.basel-dark .products-footer .basel-blog-load-more,.basel-dark .products-footer .basel-products-load-more,.basel-dark .products-footer .basel-portfolio-load-more,.basel-dark .blog-footer .basel-blog-load-more,.basel-dark .blog-footer .basel-products-load-more,.basel-dark .blog-footer .basel-portfolio-load-more,.basel-dark .portfolio-footer .basel-blog-load-more,.basel-dark .portfolio-footer .basel-products-load-more,.basel-dark .portfolio-footer .basel-portfolio-load-more,.basel-dark .color-primary,.basel-hover-link .swap-elements .btn-add a,.basel-hover-link .swap-elements .btn-add a:hover,.basel-hover-link .swap-elements .btn-add a:focus,.blog-post-loop .entry-title a:hover,.blog-post-loop.sticky .entry-title:before,.post-slide .entry-title a:hover,.comments-area .reply a,.single-post-navigation a:hover,blockquote footer:before,blockquote cite,.format-quote .entry-content blockquote cite,.format-quote .entry-content blockquote cite a,.basel-entry-meta .meta-author a,.search-no-results.woocommerce .site-content:before,.search-no-results .not-found .entry-header:before,.login-form-footer .lost_password:hover,.login-form-footer .lost_password:focus,.error404 .page-title,.menu-label-new:after,.widget_shopping_cart .product_list_widget li .quantity .amount,.product_list_widget li ins .amount,.price ins>.amount,.price ins,.single-product .price,.single-product .price .amount,.popup-quick-view .price,.popup-quick-view .price .amount,.basel-products-nav .product-short .price,.basel-products-nav .product-short .price .amount,.star-rating span:before,.comment-respond .stars a:hover:after,.comment-respond .stars a.active:after,.single-product-content .comment-form .stars span a:hover,.single-product-content .comment-form .stars span a.active,.tabs-layout-accordion .basel-tab-wrapper .basel-accordion-title:hover,.tabs-layout-accordion .basel-tab-wrapper .basel-accordion-title.active,.single-product-content .woocommerce-product-details__short-description ul>li:before,.single-product-content #tab-description ul>li:before,.blog-post-loop .entry-content ul>li:before,.comments-area .comment-list li ul>li:before,.brands-list .brand-item a:hover,.footer-container .footer-widget-collapse.footer-widget-opened .widget-title:after,.sidebar-widget li a:hover,.filter-widget li a:hover,.sidebar-widget li>ul li a:hover,.filter-widget li>ul li a:hover,.basel-price-filter ul li a:hover .amount,.basel-hover-effect-4 .swap-elements>a,.basel-hover-effect-4 .swap-elements>a:hover,.product-grid-item .basel-product-cats a:hover,.product-grid-item .basel-product-brands-links a:hover,.wishlist_table tr td.product-price ins .amount,.basel-buttons .product-compare-button>a.added:before,.basel-buttons .basel-wishlist-btn>a.added:before,.single-product-content .entry-summary .yith-wcwl-add-to-wishlist a:hover,.single-product-content .container .entry-summary .yith-wcwl-add-to-wishlist a:hover:before,.single-product-content .entry-summary .yith-wcwl-add-to-wishlist .yith-wcwl-wishlistaddedbrowse a:before,.single-product-content .entry-summary .yith-wcwl-add-to-wishlist .yith-wcwl-wishlistexistsbrowse a:before,.single-product-content .entry-summary .yith-wcwl-add-to-wishlist .yith-wcwl-add-button.feid-in>a:before,.basel-sticky-btn .basel-sticky-btn-wishlist a.added,.basel-sticky-btn .basel-sticky-btn-wishlist a:hover,.single-product-content .entry-summary .wishlist-btn-wrapper a:hover,.single-product-content .entry-summary .wishlist-btn-wrapper a:hover:before,.single-product-content .entry-summary .wishlist-btn-wrapper a.added:before,.vendors-list ul li a:hover,.product-list-item .product-list-buttons .basel-wishlist-btn a:hover,.product-list-item .product-list-buttons .basel-wishlist-btn a:focus,.product-list-item .product-list-buttons .product-compare-button a:hover,.product-list-item .product-list-buttons .product-compare-button a:focus,.product-list-item .product-list-buttons .basel-wishlist-btn>a.added:before,.product-list-item .product-list-buttons .product-compare-button>a.added:before,.basel-sticky-btn .basel-sticky-btn-compare a.added,.basel-sticky-btn .basel-sticky-btn-compare a:hover,.single-product-content .entry-summary .compare-btn-wrapper a:hover,.single-product-content .entry-summary .compare-btn-wrapper a:hover:before,.single-product-content .entry-summary .compare-btn-wrapper a.added:before,.single-product-content .entry-summary .basel-sizeguide-btn:hover,.single-product-content .entry-summary .basel-sizeguide-btn:hover:before,.blog-post-loop .entry-content ul li:before,.basel-menu-price .menu-price-price,.basel-menu-price.cursor-pointer:hover .menu-price-title,.comments-area #cancel-comment-reply-link:hover,.comments-area .comment-body .comment-edit-link:hover,.popup-quick-view .entry-summary .entry-title a:hover,.wpb_text_column ul:not(.social-icons)>li:before,.widget_product_categories .basel-cats-toggle:hover,.widget_product_categories .toggle-active,.widget_product_categories li.current-cat-parent>a,.widget_product_categories li.current-cat>a,.woocommerce-checkout-review-order-table tfoot .order-total td .amount,.widget_shopping_cart .product_list_widget li .remove:hover,.basel-active-filters .widget_layered_nav_filters ul li a .amount,.title-wrapper.basel-title-color-primary .title-subtitle,.widget_shopping_cart .widget_shopping_cart_content>.total .amount,.color-scheme-light .vc_tta-tabs.vc_tta-tabs-position-top.vc_tta-style-classic .vc_tta-tab.vc_active>a,.wpb-js-composer .vc_tta.vc_general.vc_tta-style-classic .vc_tta-tab.vc_active>a{color:#179a94}.wishlist-info-widget .wishlist-count,.basel-toolbar-compare .compare-count,.basel-cart-design-2>a .basel-cart-number,.basel-cart-design-3>a .basel-cart-number,.basel-sticky-sidebar-opener:not(.sticky-toolbar):hover,.basel-sticky-sidebar-opener:not(.sticky-toolbar):focus,.btn.btn-color-primary,.button.btn-color-primary,button.btn-color-primary,.added_to_cart.btn-color-primary,input[type=submit].btn-color-primary,.btn.btn-color-primary:hover,.btn.btn-color-primary:focus,.button.btn-color-primary:hover,.button.btn-color-primary:focus,button.btn-color-primary:hover,button.btn-color-primary:focus,.added_to_cart.btn-color-primary:hover,.added_to_cart.btn-color-primary:focus,input[type=submit].btn-color-primary:hover,input[type=submit].btn-color-primary:focus,.btn.btn-color-primary.btn-style-bordered:hover,.btn.btn-color-primary.btn-style-bordered:focus,.button.btn-color-primary.btn-style-bordered:hover,.button.btn-color-primary.btn-style-bordered:focus,button.btn-color-primary.btn-style-bordered:hover,button.btn-color-primary.btn-style-bordered:focus,.added_to_cart.btn-color-primary.btn-style-bordered:hover,.added_to_cart.btn-color-primary.btn-style-bordered:focus,input[type=submit].btn-color-primary.btn-style-bordered:hover,input[type=submit].btn-color-primary.btn-style-bordered:focus,.widget_shopping_cart .widget_shopping_cart_content .buttons .checkout,.widget_shopping_cart .widget_shopping_cart_content .buttons .checkout:hover,.widget_shopping_cart .widget_shopping_cart_content .buttons .checkout:focus,.basel-search-dropdown .basel-search-wrapper .basel-search-inner form button,.basel-search-dropdown .basel-search-wrapper .basel-search-inner form button:hover,.basel-search-dropdown .basel-search-wrapper .basel-search-inner form button:focus,.no-results .searchform #searchsubmit,.no-results .searchform #searchsubmit:hover,.no-results .searchform #searchsubmit:focus,.comments-area .comment-respond input[type=submit],.comments-area .comment-respond input[type=submit]:hover,.comments-area .comment-respond input[type=submit]:focus,.woocommerce .cart-collaterals .cart_totals .wc-proceed-to-checkout>a.button,.woocommerce .cart-collaterals .cart_totals .wc-proceed-to-checkout>a.button:hover,.woocommerce .cart-collaterals .cart_totals .wc-proceed-to-checkout>a.button:focus,.woocommerce .checkout_coupon .button,.woocommerce .checkout_coupon .button:hover,.woocommerce .checkout_coupon .button:focus,.woocommerce .place-order button,.woocommerce .place-order button:hover,.woocommerce .place-order button:focus,.woocommerce-order-pay #order_review .button,.woocommerce-order-pay #order_review .button:hover,.woocommerce-order-pay #order_review .button:focus,.woocommerce input[name=track],.woocommerce input[name=track]:hover,.woocommerce input[name=track]:focus,.woocommerce input[name=save_account_details],.woocommerce input[name=save_address],.woocommerce-page input[name=save_account_details],.woocommerce-page input[name=save_address],.woocommerce input[name=save_account_details]:hover,.woocommerce input[name=save_account_details]:focus,.woocommerce input[name=save_address]:hover,.woocommerce input[name=save_address]:focus,.woocommerce-page input[name=save_account_details]:hover,.woocommerce-page input[name=save_account_details]:focus,.woocommerce-page input[name=save_address]:hover,.woocommerce-page input[name=save_address]:focus,.search-no-results .not-found .entry-content .searchform #searchsubmit,.search-no-results .not-found .entry-content .searchform #searchsubmit:hover,.search-no-results .not-found .entry-content .searchform #searchsubmit:focus,.error404 .page-content>.searchform #searchsubmit,.error404 .page-content>.searchform #searchsubmit:hover,.error404 .page-content>.searchform #searchsubmit:focus,.return-to-shop .button,.return-to-shop .button:hover,.return-to-shop .button:focus,.basel-hover-excerpt .btn-add a,.basel-hover-excerpt .btn-add a:hover,.basel-hover-excerpt .btn-add a:focus,.basel-hover-standard .btn-add>a,.basel-hover-standard .btn-add>a:hover,.basel-hover-standard .btn-add>a:focus,.basel-price-table .basel-plan-footer>a,.basel-price-table .basel-plan-footer>a:hover,.basel-price-table .basel-plan-footer>a:focus,.basel-pf-btn button,.basel-pf-btn button:hover,.basel-pf-btn button:focus,.basel-info-box.box-style-border .info-btn-wrapper a,.basel-info-box.box-style-border .info-btn-wrapper a:hover,.basel-info-box.box-style-border .info-btn-wrapper a:focus,.basel-info-box2.box-style-border .info-btn-wrapper a,.basel-info-box2.box-style-border .info-btn-wrapper a:hover,.basel-info-box2.box-style-border .info-btn-wrapper a:focus,.basel-hover-quick .woocommerce-variation-add-to-cart .button,.basel-hover-quick .woocommerce-variation-add-to-cart .button:hover,.basel-hover-quick .woocommerce-variation-add-to-cart .button:focus,.product-list-item .product-list-buttons>a,.product-list-item .product-list-buttons>a:hover,.product-list-item .product-list-buttons>a:focus,.wpb_video_wrapper .button-play,.basel-navigation .menu>li.callto-btn>a,.basel-navigation .menu>li.callto-btn>a:hover,.basel-navigation .menu>li.callto-btn>a:focus,.basel-dark .products-footer .basel-blog-load-more:hover,.basel-dark .products-footer .basel-blog-load-more:focus,.basel-dark .products-footer .basel-products-load-more:hover,.basel-dark .products-footer .basel-products-load-more:focus,.basel-dark .products-footer .basel-portfolio-load-more:hover,.basel-dark .products-footer .basel-portfolio-load-more:focus,.basel-dark .blog-footer .basel-blog-load-more:hover,.basel-dark .blog-footer .basel-blog-load-more:focus,.basel-dark .blog-footer .basel-products-load-more:hover,.basel-dark .blog-footer .basel-products-load-more:focus,.basel-dark .blog-footer .basel-portfolio-load-more:hover,.basel-dark .blog-footer .basel-portfolio-load-more:focus,.basel-dark .portfolio-footer .basel-blog-load-more:hover,.basel-dark .portfolio-footer .basel-blog-load-more:focus,.basel-dark .portfolio-footer .basel-products-load-more:hover,.basel-dark .portfolio-footer .basel-products-load-more:focus,.basel-dark .portfolio-footer .basel-portfolio-load-more:hover,.basel-dark .portfolio-footer .basel-portfolio-load-more:focus,.basel-dark .feedback-form .wpcf7-submit,.basel-dark .mc4wp-form input[type=submit],.basel-dark .single_add_to_cart_button,.basel-dark .basel-compare-col .add_to_cart_button,.basel-dark .basel-compare-col .added_to_cart,.basel-dark .basel-sticky-btn .basel-sticky-add-to-cart,.basel-dark .single-product-content .comment-form .form-submit input[type=submit],.basel-dark .basel-registration-page .basel-switch-to-register,.basel-dark .register .button,.basel-dark .login .button,.basel-dark .lost_reset_password .button,.basel-dark .wishlist_table tr td.product-add-to-cart>.add_to_cart.button,.basel-dark .woocommerce .cart-actions .coupon .button,.basel-dark .feedback-form .wpcf7-submit:hover,.basel-dark .mc4wp-form input[type=submit]:hover,.basel-dark .single_add_to_cart_button:hover,.basel-dark .basel-compare-col .add_to_cart_button:hover,.basel-dark .basel-compare-col .added_to_cart:hover,.basel-dark .basel-sticky-btn .basel-sticky-add-to-cart:hover,.basel-dark .single-product-content .comment-form .form-submit input[type=submit]:hover,.basel-dark .basel-registration-page .basel-switch-to-register:hover,.basel-dark .register .button:hover,.basel-dark .login .button:hover,.basel-dark .lost_reset_password .button:hover,.basel-dark .wishlist_table tr td.product-add-to-cart>.add_to_cart.button:hover,.basel-dark .woocommerce .cart-actions .coupon .button:hover,.basel-ext-primarybtn-dark:focus,.basel-dark .feedback-form .wpcf7-submit:focus,.basel-dark .mc4wp-form input[type=submit]:focus,.basel-dark .single_add_to_cart_button:focus,.basel-dark .basel-compare-col .add_to_cart_button:focus,.basel-dark .basel-compare-col .added_to_cart:focus,.basel-dark .basel-sticky-btn .basel-sticky-add-to-cart:focus,.basel-dark .single-product-content .comment-form .form-submit input[type=submit]:focus,.basel-dark .basel-registration-page .basel-switch-to-register:focus,.basel-dark .register .button:focus,.basel-dark .login .button:focus,.basel-dark .lost_reset_password .button:focus,.basel-dark .wishlist_table tr td.product-add-to-cart>.add_to_cart.button:focus,.basel-dark .woocommerce .cart-actions .coupon .button:focus,.basel-stock-progress-bar .progress-bar,.widget_price_filter .ui-slider .ui-slider-handle:after,.widget_price_filter .ui-slider .ui-slider-range,.widget_tag_cloud .tagcloud a:hover,.widget_product_tag_cloud .tagcloud a:hover,div.bbp-submit-wrapper button,div.bbp-submit-wrapper button:hover,div.bbp-submit-wrapper button:focus,#bbpress-forums .bbp-search-form #bbp_search_submit,#bbpress-forums .bbp-search-form #bbp_search_submit:hover,#bbpress-forums .bbp-search-form #bbp_search_submit:focus,body .select2-container--default .select2-results__option--highlighted[aria-selected],.basel-add-img-msg:before,.product-video-button a:hover:before,.product-360-button a:hover:before,.mobile-nav ul li .up-icon,.scrollToTop:hover,.scrollToTop:focus,.basel-sticky-filter-btn:hover,.basel-sticky-filter-btn:focus,.categories-opened li a:active,.basel-price-table .basel-plan-price,.header-categories .secondary-header .mega-navigation,.widget_nav_mega_menu,.meta-post-categories,.slider-title:before,.title-wrapper.basel-title-style-simple .title:after,.menu-label-new,.product-label.onsale,.color-scheme-light .vc_tta-tabs.vc_tta-tabs-position-top.vc_tta-style-classic .vc_tta-tab.vc_active>a span:after,.wpb-js-composer .vc_tta.vc_general.vc_tta-style-classic .vc_tta-tab.vc_active>a span:after,.portfolio-with-bg-alt .portfolio-entry:hover .entry-header>.portfolio-info{background-color:#179a94}.btn.btn-color-primary,.button.btn-color-primary,button.btn-color-primary,.added_to_cart.btn-color-primary,input[type=submit].btn-color-primary,.btn.btn-color-primary:hover,.btn.btn-color-primary:focus,.button.btn-color-primary:hover,.button.btn-color-primary:focus,button.btn-color-primary:hover,button.btn-color-primary:focus,.added_to_cart.btn-color-primary:hover,.added_to_cart.btn-color-primary:focus,input[type=submit].btn-color-primary:hover,input[type=submit].btn-color-primary:focus,.btn.btn-color-primary.btn-style-bordered:hover,.btn.btn-color-primary.btn-style-bordered:focus,.button.btn-color-primary.btn-style-bordered:hover,.button.btn-color-primary.btn-style-bordered:focus,button.btn-color-primary.btn-style-bordered:hover,button.btn-color-primary.btn-style-bordered:focus,.widget_shopping_cart .widget_shopping_cart_content .buttons .checkout,.widget_shopping_cart .widget_shopping_cart_content .buttons .checkout:hover,.widget_shopping_cart .widget_shopping_cart_content .buttons .checkout:focus,.basel-search-dropdown .basel-search-wrapper .basel-search-inner form button,.basel-search-dropdown .basel-search-wrapper .basel-search-inner form button:hover,.basel-search-dropdown .basel-search-wrapper .basel-search-inner form button:focus,.comments-area .comment-respond input[type=submit],.comments-area .comment-respond input[type=submit]:hover,.comments-area .comment-respond input[type=submit]:focus,.sidebar-container .mc4wp-form input[type=submit],.sidebar-container .mc4wp-form input[type=submit]:hover,.sidebar-container .mc4wp-form input[type=submit]:focus,.footer-container .mc4wp-form input[type=submit],.footer-container .mc4wp-form input[type=submit]:hover,.footer-container .mc4wp-form input[type=submit]:focus,.filters-area .mc4wp-form input[type=submit],.filters-area .mc4wp-form input[type=submit]:hover,.filters-area .mc4wp-form input[type=submit]:focus,.woocommerce .cart-collaterals .cart_totals .wc-proceed-to-checkout>a.button,.woocommerce .cart-collaterals .cart_totals .wc-proceed-to-checkout>a.button:hover,.woocommerce .cart-collaterals .cart_totals .wc-proceed-to-checkout>a.button:focus,.woocommerce .checkout_coupon .button,.woocommerce .checkout_coupon .button:hover,.woocommerce .checkout_coupon .button:focus,.woocommerce .place-order button,.woocommerce .place-order button:hover,.woocommerce .place-order button:focus,.woocommerce-order-pay #order_review .button,.woocommerce-order-pay #order_review .button:hover,.woocommerce-order-pay #order_review .button:focus,.woocommerce input[name=track],.woocommerce input[name=track]:hover,.woocommerce input[name=track]:focus,.woocommerce input[name=save_account_details],.woocommerce input[name=save_address],.woocommerce-page input[name=save_account_details],.woocommerce-page input[name=save_address],.woocommerce input[name=save_account_details]:hover,.woocommerce input[name=save_account_details]:focus,.woocommerce input[name=save_address]:hover,.woocommerce input[name=save_address]:focus,.woocommerce-page input[name=save_account_details]:hover,.woocommerce-page input[name=save_account_details]:focus,.woocommerce-page input[name=save_address]:hover,.woocommerce-page input[name=save_address]:focus,.search-no-results .not-found .entry-content .searchform #searchsubmit,.search-no-results .not-found .entry-content .searchform #searchsubmit:hover,.search-no-results .not-found .entry-content .searchform #searchsubmit:focus,.error404 .page-content>.searchform #searchsubmit,.error404 .page-content>.searchform #searchsubmit:hover,.error404 .page-content>.searchform #searchsubmit:focus,.no-results .searchform #searchsubmit,.no-results .searchform #searchsubmit:hover,.no-results .searchform #searchsubmit:focus,.return-to-shop .button,.return-to-shop .button:hover,.return-to-shop .button:focus,.basel-hover-excerpt .btn-add a,.basel-hover-excerpt .btn-add a:hover,.basel-hover-excerpt .btn-add a:focus,.basel-hover-standard .btn-add>a,.basel-hover-standard .btn-add>a:hover,.basel-hover-standard .btn-add>a:focus,.basel-price-table .basel-plan-footer>a,.basel-price-table .basel-plan-footer>a:hover,.basel-price-table .basel-plan-footer>a:focus,.basel-pf-btn button,.basel-pf-btn button:hover,.basel-pf-btn button:focus,.basel-info-box.box-style-border .info-btn-wrapper a,.basel-info-box.box-style-border .info-btn-wrapper a:hover,.basel-info-box.box-style-border .info-btn-wrapper a:focus,.basel-info-box2.box-style-border .info-btn-wrapper a,.basel-info-box2.box-style-border .info-btn-wrapper a:hover,.basel-info-box2.box-style-border .info-btn-wrapper a:focus,.basel-hover-quick .woocommerce-variation-add-to-cart .button,.basel-hover-quick .woocommerce-variation-add-to-cart .button:hover,.basel-hover-quick .woocommerce-variation-add-to-cart .button:focus,.product-list-item .product-list-buttons>a,.product-list-item .product-list-buttons>a:hover,.product-list-item .product-list-buttons>a:focus,.wpb_video_wrapper .button-play,.woocommerce-store-notice__dismiss-link:hover,.woocommerce-store-notice__dismiss-link:focus,.basel-compare-table .compare-loader:after,.basel-sticky-sidebar-opener:not(.sticky-toolbar):hover,.basel-sticky-sidebar-opener:not(.sticky-toolbar):focus,.basel-dark .read-more-section .btn-read-more,.basel-dark .products-footer .basel-blog-load-more,.basel-dark .products-footer .basel-products-load-more,.basel-dark .products-footer .basel-portfolio-load-more,.basel-dark .blog-footer .basel-blog-load-more,.basel-dark .blog-footer .basel-products-load-more,.basel-dark .blog-footer .basel-portfolio-load-more,.basel-dark .portfolio-footer .basel-blog-load-more,.basel-dark .portfolio-footer .basel-products-load-more,.basel-dark .portfolio-footer .basel-portfolio-load-more,.basel-dark .products-footer .basel-blog-load-more:hover,.basel-dark .products-footer .basel-blog-load-more:focus,.basel-dark .products-footer .basel-products-load-more:hover,.basel-dark .products-footer .basel-products-load-more:focus,.basel-dark .products-footer .basel-portfolio-load-more:hover,.basel-dark .products-footer .basel-portfolio-load-more:focus,.basel-dark .blog-footer .basel-blog-load-more:hover,.basel-dark .blog-footer .basel-blog-load-more:focus,.basel-dark .blog-footer .basel-products-load-more:hover,.basel-dark .blog-footer .basel-products-load-more:focus,.basel-dark .blog-footer .basel-portfolio-load-more:hover,.basel-dark .blog-footer .basel-portfolio-load-more:focus,.basel-dark .portfolio-footer .basel-blog-load-more:hover,.basel-dark .portfolio-footer .basel-blog-load-more:focus,.basel-dark .portfolio-footer .basel-products-load-more:hover,.basel-dark .portfolio-footer .basel-products-load-more:focus,.basel-dark .portfolio-footer .basel-portfolio-load-more:hover,.basel-dark .portfolio-footer .basel-portfolio-load-more:focus,.basel-dark .products-footer .basel-blog-load-more:after,.basel-dark .products-footer .basel-products-load-more:after,.basel-dark .products-footer .basel-portfolio-load-more:after,.basel-dark .blog-footer .basel-blog-load-more:after,.basel-dark .blog-footer .basel-products-load-more:after,.basel-dark .blog-footer .basel-portfolio-load-more:after,.basel-dark .portfolio-footer .basel-blog-load-more:after,.basel-dark .portfolio-footer .basel-products-load-more:after,.basel-dark .portfolio-footer .basel-portfolio-load-more:after,.basel-dark .feedback-form .wpcf7-submit,.basel-dark .mc4wp-form input[type=submit],.basel-dark .single_add_to_cart_button,.basel-dark .basel-compare-col .add_to_cart_button,.basel-dark .basel-compare-col .added_to_cart,.basel-dark .basel-sticky-btn .basel-sticky-add-to-cart,.basel-dark .single-product-content .comment-form .form-submit input[type=submit],.basel-dark .basel-registration-page .basel-switch-to-register,.basel-dark .register .button,.basel-dark .login .button,.basel-dark .lost_reset_password .button,.basel-dark .wishlist_table tr td.product-add-to-cart>.add_to_cart.button,.basel-dark .woocommerce .cart-actions .coupon .button,.basel-dark .feedback-form .wpcf7-submit:hover,.basel-dark .mc4wp-form input[type=submit]:hover,.basel-dark .single_add_to_cart_button:hover,.basel-dark .basel-compare-col .add_to_cart_button:hover,.basel-dark .basel-compare-col .added_to_cart:hover,.basel-dark .basel-sticky-btn .basel-sticky-add-to-cart:hover,.basel-dark .single-product-content .comment-form .form-submit input[type=submit]:hover,.basel-dark .basel-registration-page .basel-switch-to-register:hover,.basel-dark .register .button:hover,.basel-dark .login .button:hover,.basel-dark .lost_reset_password .button:hover,.basel-dark .wishlist_table tr td.product-add-to-cart>.add_to_cart.button:hover,.basel-dark .woocommerce .cart-actions .coupon .button:hover,.basel-ext-primarybtn-dark:focus,.basel-dark .feedback-form .wpcf7-submit:focus,.basel-dark .mc4wp-form input[type=submit]:focus,.basel-dark .single_add_to_cart_button:focus,.basel-dark .basel-compare-col .add_to_cart_button:focus,.basel-dark .basel-compare-col .added_to_cart:focus,.basel-dark .basel-sticky-btn .basel-sticky-add-to-cart:focus,.basel-dark .single-product-content .comment-form .form-submit input[type=submit]:focus,.basel-dark .basel-registration-page .basel-switch-to-register:focus,.basel-dark .register .button:focus,.basel-dark .login .button:focus,.basel-dark .lost_reset_password .button:focus,.basel-dark .wishlist_table tr td.product-add-to-cart>.add_to_cart.button:focus,.basel-dark .woocommerce .cart-actions .coupon .button:focus,.cookies-buttons .cookies-accept-btn:hover,.cookies-buttons .cookies-accept-btn:focus,.blockOverlay:after,.basel-price-table:hover,.title-shop .nav-shop ul li a:after,.widget_tag_cloud .tagcloud a:hover,.widget_product_tag_cloud .tagcloud a:hover,div.bbp-submit-wrapper button,div.bbp-submit-wrapper button:hover,div.bbp-submit-wrapper button:focus,#bbpress-forums .bbp-search-form #bbp_search_submit,#bbpress-forums .bbp-search-form #bbp_search_submit:hover,#bbpress-forums .bbp-search-form #bbp_search_submit:focus,.basel-hover-link .swap-elements .btn-add a,.basel-hover-link .swap-elements .btn-add a:hover,.basel-hover-link .swap-elements .btn-add a:focus,.basel-hover-link .swap-elements .btn-add a.loading:after,.scrollToTop:hover,.scrollToTop:focus,.basel-sticky-filter-btn:hover,.basel-sticky-filter-btn:focus,blockquote{border-color:#179a94}.with-animation .info-box-icon svg path,.single-product-content .entry-summary .basel-sizeguide-btn:hover svg{stroke:#179a94}.button,button,input[type=submit],.yith-woocompare-widget a.button.compare,.basel-dark .basel-registration-page .basel-switch-to-register,.basel-dark .login .button,.basel-dark .register .button,.basel-dark .widget_shopping_cart .buttons a,.basel-dark .yith-woocompare-widget a.button.compare,.basel-dark .widget_price_filter .price_slider_amount .button,.basel-dark .woocommerce-widget-layered-nav-dropdown__submit,.basel-dark .basel-widget-layered-nav-dropdown__submit,.basel-dark .woocommerce .cart-actions input[name="update_cart"]{background-color:#ECECEC}.button,button,input[type=submit],.yith-woocompare-widget a.button.compare,.basel-dark .basel-registration-page .basel-switch-to-register,.basel-dark .login .button,.basel-dark .register .button,.basel-dark .widget_shopping_cart .buttons a,.basel-dark .yith-woocompare-widget a.button.compare,.basel-dark .widget_price_filter .price_slider_amount .button,.basel-dark .woocommerce-widget-layered-nav-dropdown__submit,.basel-dark .basel-widget-layered-nav-dropdown__submit,.basel-dark .woocommerce .cart-actions input[name="update_cart"]{border-color:#ECECEC}.button:hover,.button:focus,button:hover,button:focus,input[type=submit]:hover,input[type=submit]:focus,.yith-woocompare-widget a.button.compare:hover,.yith-woocompare-widget a.button.compare:focus,.basel-dark .basel-registration-page .basel-switch-to-register:hover,.basel-dark .basel-registration-page .basel-switch-to-register:focus,.basel-dark .login .button:hover,.basel-dark .login .button:focus,.basel-dark .register .button:hover,.basel-dark .register .button:focus,.basel-dark .widget_shopping_cart .buttons a:hover,.basel-dark .widget_shopping_cart .buttons a:focus,.basel-dark .yith-woocompare-widget a.button.compare:hover,.basel-dark .yith-woocompare-widget a.button.compare:focus,.basel-dark .widget_price_filter .price_slider_amount .button:hover,.basel-dark .widget_price_filter .price_slider_amount .button:focus,.basel-dark .woocommerce-widget-layered-nav-dropdown__submit:hover,.basel-dark .woocommerce-widget-layered-nav-dropdown__submit:focus,.basel-dark .basel-widget-layered-nav-dropdown__submit:hover,.basel-dark .basel-widget-layered-nav-dropdown__submit:focus,.basel-dark .woocommerce .cart-actions input[name="update_cart"]:hover,.basel-dark .woocommerce .cart-actions input[name="update_cart"]:focus{background-color:#3E3E3E}.button:hover,.button:focus,button:hover,button:focus,input[type=submit]:hover,input[type=submit]:focus,.yith-woocompare-widget a.button.compare:hover,.yith-woocompare-widget a.button.compare:focus,.basel-dark .basel-registration-page .basel-switch-to-register:hover,.basel-dark .basel-registration-page .basel-switch-to-register:focus,.basel-dark .login .button:hover,.basel-dark .login .button:focus,.basel-dark .register .button:hover,.basel-dark .register .button:focus,.basel-dark .widget_shopping_cart .buttons a:hover,.basel-dark .widget_shopping_cart .buttons a:focus,.basel-dark .yith-woocompare-widget a.button.compare:hover,.basel-dark .yith-woocompare-widget a.button.compare:focus,.basel-dark .widget_price_filter .price_slider_amount .button:hover,.basel-dark .widget_price_filter .price_slider_amount .button:focus,.basel-dark .woocommerce-widget-layered-nav-dropdown__submit:hover,.basel-dark .woocommerce-widget-layered-nav-dropdown__submit:focus,.basel-dark .basel-widget-layered-nav-dropdown__submit:hover,.basel-dark .basel-widget-layered-nav-dropdown__submit:focus,.basel-dark .woocommerce .cart-actions input[name="update_cart"]:hover,.basel-dark .woocommerce .cart-actions input[name="update_cart"]:focus{border-color:#3E3E3E}.basel-hover-alt .btn-add>a{color:#000}.single_add_to_cart_button,.basel-sticky-btn .basel-sticky-add-to-cart,.woocommerce .cart-actions .coupon .button,.added_to_cart.btn-color-black,input[type=submit].btn-color-black,.wishlist_table tr td.product-add-to-cart>.add_to_cart.button,.basel-hover-quick .quick-shop-btn>a,table.compare-list tr.add-to-cart td a,.basel-compare-col .add_to_cart_button,.basel-compare-col .added_to_cart{background-color:#000}.single_add_to_cart_button,.basel-sticky-btn .basel-sticky-add-to-cart,.woocommerce .cart-actions .coupon .button,.added_to_cart.btn-color-black,input[type=submit].btn-color-black,.wishlist_table tr td.product-add-to-cart>.add_to_cart.button,.basel-hover-quick .quick-shop-btn>a,table.compare-list tr.add-to-cart td a,.basel-compare-col .add_to_cart_button,.basel-compare-col .added_to_cart{border-color:#000}.basel-hover-alt .btn-add>a:hover,.basel-hover-alt .btn-add>a:focus{color:#333}.single_add_to_cart_button:hover,.single_add_to_cart_button:focus,.basel-sticky-btn .basel-sticky-add-to-cart:hover,.basel-sticky-btn .basel-sticky-add-to-cart:focus,.woocommerce .cart-actions .coupon .button:hover,.woocommerce .cart-actions .coupon .button:focus,.added_to_cart.btn-color-black:hover,.added_to_cart.btn-color-black:focus,input[type=submit].btn-color-black:hover,input[type=submit].btn-color-black:focus,.wishlist_table tr td.product-add-to-cart>.add_to_cart.button:hover,.wishlist_table tr td.product-add-to-cart>.add_to_cart.button:focus,.basel-hover-quick .quick-shop-btn>a:hover,.basel-hover-quick .quick-shop-btn>a:focus,table.compare-list tr.add-to-cart td a:hover,table.compare-list tr.add-to-cart td a:focus,.basel-compare-col .add_to_cart_button:hover,.basel-compare-col .add_to_cart_button:focus,.basel-compare-col .added_to_cart:hover,.basel-compare-col .added_to_cart:focus{background-color:#333}.single_add_to_cart_button:hover,.single_add_to_cart_button:focus,.basel-sticky-btn .basel-sticky-add-to-cart:hover,.basel-sticky-btn .basel-sticky-add-to-cart:focus,.woocommerce .cart-actions .coupon .button:hover,.woocommerce .cart-actions .coupon .button:focus,.added_to_cart.btn-color-black:hover,.added_to_cart.btn-color-black:focus,input[type=submit].btn-color-black:hover,input[type=submit].btn-color-black:focus,.wishlist_table tr td.product-add-to-cart>.add_to_cart.button:hover,.wishlist_table tr td.product-add-to-cart>.add_to_cart.button:focus,.basel-hover-quick .quick-shop-btn>a:hover,.basel-hover-quick .quick-shop-btn>a:focus,table.compare-list tr.add-to-cart td a:hover,table.compare-list tr.add-to-cart td a:focus,.basel-compare-col .add_to_cart_button:hover,.basel-compare-col .add_to_cart_button:focus,.basel-compare-col .added_to_cart:hover,.basel-compare-col .added_to_cart:focus{border-color:#333}.basel-promo-popup{background-repeat:no-repeat;background-size:cover;background-position:left center}@font-face{font-weight:400;font-style:normal;font-family:"simple-line-icons";
		src:url(https://basel-cec2.kxcdn.com/basel/wp-content/themes/basel/fonts/Simple-Line-Icons.eot?v=5.1.0);src:url("https://basel-cec2.kxcdn.com/basel/wp-content/themes/basel/fonts/Simple-Line-Icons.eot") format("embedded-opentype"),url(https://basel-cec2.kxcdn.com/basel/wp-content/themes/basel/fonts/Simple-Line-Icons.woff?v=5.1.0) format("woff"),url(https://basel-cec2.kxcdn.com/basel/wp-content/themes/basel/fonts/Simple-Line-Icons.woff2?v=5.1.0) format("woff2"),url(https://basel-cec2.kxcdn.com/basel/wp-content/themes/basel/fonts/Simple-Line-Icons.ttf?v=5.1.0) format("truetype"),url("https://basel-cec2.kxcdn.com/basel/wp-content/themes/basel/fonts/Simple-Line-Icons.svg?v=5.1.0") format("svg")}@font-face{font-weight:400;font-style:normal;font-family:"basel-font";src:url(https://basel-cec2.kxcdn.com/basel/wp-content/themes/basel/fonts/basel-font.eot?v=5.1.0);src:url("https://basel-cec2.kxcdn.com/basel/wp-content/themes/basel/fonts/basel-font.eot") format("embedded-opentype"),url(https://basel-cec2.kxcdn.com/basel/wp-content/themes/basel/fonts/basel-font.woff?v=5.1.0) format("woff"),url(https://basel-cec2.kxcdn.com/basel/wp-content/themes/basel/fonts/basel-font.woff2?v=5.1.0) format("woff2"),url(https://basel-cec2.kxcdn.com/basel/wp-content/themes/basel/fonts/basel-font.ttf?v=5.1.0) format("truetype"),url("https://basel-cec2.kxcdn.com/basel/wp-content/themes/basel/fonts/basel-font.svg?v=5.1.0") format("svg")}.product-category-thumbnail img,.category-grid-item .category-link{width:100%}.product-grid-item .product-element-top>a img,.basel-hover-alt .hover-img img,.product-list-image .hover-img img{width:100%}#product-28083 .product-images .image-action-zoom figure img[src$=".png"],#product-28083 .product-images .image-action-zoom .owl-item,#product-28084 .product-images .image-action-zoom figure img[src$=".png"],#product-28084 .product-images .image-action-zoom .owl-item,#product-28085 .product-images .image-action-zoom figure img[src$=".png"],#product-28085 .product-images .image-action-zoom .owl-item,#product-28078 .product-images .image-action-zoom figure img[src$=".png"],#product-28078 .product-images .image-action-zoom .owl-item{background:#fff}.basel-product-categories>li.cat-item-109{display:none}.main-header form.has-categories-dropdown .search-by-category ul .children{display:none}.col-five>.vc_col-sm-2{width:20%}iframe[name='google_conversion_frame']{height:0!important;width:0!important;line-height:0!important;font-size:0!important;margin-top:-13px;float:left}.dropdown-scroll>.sub-menu-dropdown{height:540px;overflow:hidden}.header-spacing+.header-menu-top{margin-top:-40px}.woocommerce-ordering.with-list .selected-order{font-weight:700}.header-categories .main-nav .menu li.menu-item-design-full-width>.sub-menu-dropdown{margin-top:-78px}.hide-pag .owl-pagination,.hide-pag .owl-buttons{display:none}.color-scheme-light .testimonial .testimonial-content footer>span{color:rgba(255,255,255,.8)}.color-scheme-light .owl-theme:hover .owl-controls.clickable .owl-buttons div.disabled{color:rgba(255,255,255,.6)}.color-scheme-light .owl-theme .owl-controls .owl-buttons div{color:rgba(255,255,255,.8)}.color-scheme-light .owl-theme .owl-controls.clickable .owl-buttons div:hover{color:rgba(255,255,255,1)}.color-scheme-light .owl-theme .owl-controls .owl-page span{background-color:rgba(255,255,255,.6)}.color-scheme-light .owl-theme .owl-controls .owl-page.active span,.color-scheme-light .owl-theme .owl-controls.clickable .owl-page:hover span{background-color:#fff}.basel-buttons .product-compare-button>a,.single-product-content .entry-summary .button.compare,.basel-hover-base .basel-add-btn>a,.basel-hover-base .product-compare-button a{text-transform:none}.rtl .has-border,.rtl .has-border>.vc_column-inner{border:none!important}.related-and-upsells .product-grid-item .hover-img img{width:100%}.hidden-nav-button{display:none!important}.dropdown-scroll .wpb_single_image{border:2px solid #f7f7f7}.page-id-25728 .dropdown-scroll .wpb_single_image,.page-id-23954 .dropdown-scroll .wpb_single_image{border:2px solid rgba(255,255,255,.1)}.widget_product_categories .cat-item-109 .cat-item:nth-child(even){display:none}@media (max-width:1024px) and (min-width:991px){.header-categories .categories-menu-dropdown .sub-menu-dropdown{width:680px}}@media (max-width:991px){.sticky-footer-on .footer-container{visibility:visible}}.menu-item-19907>.sub-menu-dropdown{background-size:contain}.woocommerce-checkout-review-order-table td{width:50%}.basel-dark .cart-widget-side .widget_shopping_cart .buttons a:not(.checkout){border-color:#333;background-color:#333}.basel-dark .cart-widget-side .widget_shopping_cart .buttons a:not(.checkout):hover{opacity:.7}.blazy-image-loading{position:relative}.blazy-image-loading:after{position:absolute;top:50%;margin-top:-15px;margin-left:-15px;opacity:.3;left:50%;content:" ";width:35px;height:35px;display:inline-block;vertical-align:middle;border:1px solid #000;border-radius:50%;border-left-color:transparent!important;border-right-color:transparent!important;-webkit-animation:load-spin 450ms infinite linear;animation:load-spin 450ms infinite linear}.color-scheme-light .color-scheme-dark .product-grid-item .product-title>a{color:#252222}.woocommerce-password-strength:empty{margin:0;padding:0}.basel-pagination:before{content:'';display:block;clear:both}.basel-hover-button .basel-buttons .product-compare-button>a:before,.basel-hover-button .basel-buttons .quick-view>a:before,.basel-hover-info .basel-buttons .product-compare-button>a:before,.basel-hover-info .basel-buttons .quick-view>a:before{border-color:#FFF!important}.single-product .site-content>.woocommerce-message{display:none}.basel-entry-meta li.modified-date{display:none!important}.owl-carousel .blog-design-masonry.has-post-thumbnail .post-date{left:10px}.instagram-widget.instagram-slider .instagram-pics li{-webkit-flex-basis:100%;-ms-flex-basis:100%;flex-basis:100%;max-width:100%}.slick-slide.active-thumb{transition:none!important}.basel-font-weight-600{font-weight:600}.basel-wishlist-share>span{margin-top:5px}.browser-Firefox .wrapp-header{height:0}.global-header-vertical .main-page-wrapper{margin-top:0;padding-top:0}@media (min-width:1025px){.buy-basel{position:fixed;bottom:40px;left:40px;background-color:#000;color:#fff;padding:10px 20px;border-radius:30px;text-transform:uppercase;transition:all .3s ease;z-index:1000}.buy-basel img{margin-right:10px;margin-bottom:1px}.buy-basel:hover,.buy-basel:focus{background-color:#97ca58;color:#fff;text-decoration:none;border-color:#000}.rtl .buy-basel{left:auto;right:40px}.rtl .buy-basel img{margin-right:0;margin-left:10px}}@media (min-width:768px) and (max-width:1024px){.buy-basel{display:none}.swatch-on-grid .basel-tooltip-label{display:none}.dropdown-scroll>.sub-menu-dropdown{display:none}.basel-back-btn>span:before,.basel-products-nav .product-btn>a span:before{top:0}.shop-loop-head{width:100%}.single-product-content .product-images .thumbs-position-left .thumbnails{margin-top:4px}body .basel-parallax{background-attachment:scroll!important}}@media (min-width:577px) and (max-width:767px){.buy-basel{display:none}.swatch-on-grid .basel-tooltip-label{display:none}.dropdown-scroll>.sub-menu-dropdown{display:none}.basel-back-btn>span:before,.basel-products-nav .product-btn>a span:before{top:0}.single-product-content .product-images .thumbs-position-left .thumbnails{margin-top:4px}body .basel-parallax{background-attachment:scroll!important}.basel-text-block-wrapper .basel-text-block{max-width:100%}}@media (max-width:576px){.buy-basel{display:none}.swatch-on-grid .basel-tooltip-label{display:none}.dropdown-scroll>.sub-menu-dropdown{display:none}.basel-back-btn>span:before,.basel-products-nav .product-btn>a span:before{top:0}.single-product-content .product-images .thumbs-position-left .thumbnails{margin-top:4px}body .basel-parallax{background-attachment:scroll!important}.basel-text-block-wrapper .basel-text-block{max-width:100%}}</style><style type="text/css" data-type="vc_custom-css">.single-breadcrumbs-wrapper .woocommerce-breadcrumb{line-height:40px}</style><style type="text/css" data-type="vc_shortcodes-custom-css">.vc_custom_1474542040110{margin-bottom:80px!important}</style><noscript><style>.wpb_animate_when_almost_visible{opacity:1}</style></noscript><noscript><style id="rocket-lazyload-nojs-css">.rll-youtube-player,[data-lazy-src]{display:none!important}</style></noscript>
	</head>
	
	<body class="page-template-default page page-id-19922 theme-basel woocommerce-no-js wrapper-full-width global-cart-design-1 global-search-full-screen global-header-shop mobile-nav-from-left basel-light catalog-mode-off categories-accordion-on global-wishlist-enable basel-top-bar-on basel-ajax-shop-on basel-ajax-search-on enable-sticky-header header-full-width sticky-header-real offcanvas-sidebar-mobile offcanvas-sidebar-tablet sticky-toolbar-on wpb-js-composer js-comp-ver-6.1 vc_responsive">
	</div>
	<div class="website-wrapper">
	<div class="topbar-wrapp color-scheme-light">
	<div class="container">
	<div class="topbar-content">
	<div class="top-bar-left"> 
	<span> <?php echo $_GET['username']; ?></span><span> </span><span>[<a href="Logout.php?&auth=<?php echo $_GET['auth'];?>"><span style="color:red;"> Log out</span></a>]</span>
	</div>
	<div class="top-bar-right">
	<div class="topbar-menu">
	<div class="menu-top-bar-container">
	<ul id="menu-top-bar" class="menu">
	<li id="menu-item-20488" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-20488 menu-item-design-default item-event-hover">
	<a href="Shop.php?username=<?php echo $_GET['username'];?>&auth=<?php echo $_GET['auth'];?>">
	Shop
	</a></li></ul></div></div></div></div></div></div>
	
	<header class="main-header header-has-no-bg header-shop icons-design-line color-scheme-dark">
	<div class="container">
	<div class="wrapp-header">
	<div class="main-nav site-navigation basel-navigation menu-left" role="navigation">
	<div class="menu-main-navigation-container">
</div>
</div>
<div class="site-logo">
<div class="basel-logo-wrap"> 
<a href="Shop.php?username=<?php echo $_GET['username'];?>&auth=<?php echo $_GET['auth'];?>" class="basel-logo basel-main-logo" rel="home"> 
<img  src="https://res.cloudinary.com/badboylu/image/upload/c_scale,h_350/v1595757623/website_logo_head_aswjjx.jpg" alt="Basel" /> 
</a></div></div>
<div class="right-column">
<div >
<div >
	<a href="Cart.php?username=<?php echo $_GET['username'];?>&auth=<?php echo $_GET['auth'];?>">
	<span class="basel-cart-totals"> 
		<span class="basel-cart-number">
		<strong>Total</strong>
		</span> 
		<span class="subtotal-dividerCart">
		<strong>: </strong>R
		</span>
		<span class="woocommerce-Price-amount amount">
		<span class="woocommerce-Price-currencySymbol">
		</span><span class="totalOrderDelivery"></span></span></span> 
        </span> 
	</a>
	</div>
	</div>
</div></div></div></div>
</header>

<div class="clear">
</div>
<div class="main-page-wrapper">
<div class="page-title page-title-default title-size-small title-design-centered color-scheme-light" style="">
<div class="container">
</div></div>
<div class="container">
<div class="row">
<div class="site-content col-sm-12" role="main">
<article id="post-19922" class="post-19922 page type-page status-publish hentry">
<div class="entry-content">
<div class="vc_row wpb_row vc_row-fluid">
<div class="wpb_column vc_column_container vc_col-sm-12">
<div class="vc_column-inner"><div class="wpb_wrapper">
<div class="title-wrapper  basel-title-color-primary basel-title-style-bordered basel-title-size-default text-center vc_custom_1474542040110">
<div class="liner-continer"> 
<span class="left-line">
</span>
<h4 class="title" >
<strong>
Delivery details
</strong>
<span class="title-separator">
<span>
</span>
</span>
</h4> 
<span class="right-line">
</span>
</div>
<span class="title-after_title">

</span></div><div class="woocommerce"><div class="single-product" data-product-page-preselected-id="0"><div class="single-breadcrumbs-wrapper"><div class="container"> <a href="javascript:baselThemeModule.backHistory()" class="basel-back-btn basel-tooltip"><span>Back</span></a><nav class="woocommerce-breadcrumb">
<a href="Shop.php?username=<?php echo $_GET['username'];?>&auth=<?php echo $_GET['auth'];?>">
Shop
</a><span class="breadcrumb-last"> 
Delivery details
</span>
</nav>
</div>
</div>

<form action="https://sandbox.payfast.co.za/eng/process" method="post" id="plug" name="moneytree">
   <label for="Country">Country:</label><input type="text" name="Country" value="South Africa" readonly>
   <label>Province:</label><input type="text" name="Province" value="Gauteng" readonly>
   <label>City:</label>
<select name="City" id="city" form="plug" required>
  <option value="" disabled selected>Select City</option>
  <option value="Tshwane/Pretoria">Tshwane/Pretoria</option>
  <option value="Johannesburg" disabled>Johannesburg</option>
</select>

<div id="hidePTAtown" style="display:none">
<label>Town:</label>
<select class="PTAtown" name="TownsPTA" id="townsPTA" form="plug" required>
  <option value="" disabled selected>Select Town</option>
  <option value="PretoriaEast">Pretoria East</option>
  <option value="PretoriaNorthEast" disabled >Pretoria North East</option>
  <option value="PretoriaNorthWest" disabled >Pretoria North West</option>
  <option value="PretoriaCentral" disabled >Pretoria Central</option>
  <option value="PretoriaCentralWest" disabled >Pretoria Central West</option>
  <option value="Centurion" disabled >Centurion</option>
  <option value="Null" style="display:none" >Null</option>
</select>
</div>
<div id="hideJHBtown" style="display:none">
<label>Town:</label>
<select class="JHBtown" name="TownsJHB" id="townsJHB" form="plug" required>
  <option value="" disabled selected>Select Town</option>
  <option value="Alberton" disabled >Alberton</option>
  <option value="Alexandra" disabled >Alexandra</option>
  <option value="Benoni" disabled >Benoni</option>
  <option value="Boksburg" disabled >Boksburg</option>
  <option value="Germiston" disabled >Germiston</option>
  <option value="JohannesburgCentral">Johannesburg Central</option>
  <option value="JohannesburgSouth" disabled >Johannesburg South</option>
  <option value="Kemptonpark" disabled>Kemptonpark</option>
  <option value="Lethabong" disabled>Lethabong</option>
  <option value="Midrand">Midrand</option>
  <option value="Randburg">Randburg</option>
  <option value="Roodepoort">Roodepoort</option>
  <option value="Sandton">Sandton</option>
  <option value="Soweto" disabled>Soweto</option>
  <option value="Tembisa" disabled>Tembisa</option>
  <option value="Null" style="display:none" >Null</option>
</select>
</div>

<div id="hideJHBRandburgsuburb" style="display:none">
<label>Suburb:</label>
<select class="JHBRandburg" name="suburbsJHBRandburg" id="suburbsJHBRandburg" form="plug" required>
  <option value="" disabled selected>Select Suburb</option>
  <option value="AldaraPark"> Aldara Park </option>
  <option value="BellairsPark"> Bellairs Park </option>
  <option value="Berario"> Berario </option>
  <option value="BeverlyGardens"> Beverly Gardens </option>
  <option value="Blackheath"> Blackheath </option>
  <option value="Blairgowrie"> Blairgowrie </option>
  <option value="Bloubosrand"> Bloubosrand </option>
  <option value="Bordeaux"> Bordeaux </option>
  <option value="Boskruin"> Boskruin </option>
  <option value="Bromhof"> Bromhof </option>
  <option value="CedarCreek"> Cedar Creek </option>
  <option value="CedarHills"> Cedar Hills </option>
  <option value="CedarLakes"> Cedar Lakes </option>
  <option value="Chartwell"> Chartwell </option>
  <option value="Cresta"> Cresta </option>
  <option value="DanielBrinkPark"> Daniel Brink Park </option>
  <option value="Darrenwood"> Darrenwood </option>
  <option value="Fairland"> Fairland </option>
  <option value="Fernbrook"> Fernbrook </option>
  <option value="Ferndale"> Ferndale </option>
  <option value="Fontainebleau"> Fontainebleau </option>
  <option value="Hoogland"> Hoogland </option>
  <option value="Jacanlee"> Jacanlee </option>
  <option value="JohannesburgNorth"> Johannesburg North </option>
  <option value="JukskeiPark"> Jukskei Park </option>
  <option value="Kelland"> Kelland </option>
  <option value="KellyRidge"> Kelly Ridge </option>
  <option value="KensingtonB"> Kensington B </option>
  <option value="KyaSands"> Kya Sands </option>
  <option value="Lanseria"> Lanseria </option>
  <option value="Linden"> Linden </option>
  <option value="Malanshof"> Malanshof </option>
  <option value="Maroeladal"> Maroeladal </option>
  <option value="Moret"> Moret </option>
  <option value="Noordhang"> Noordhang </option>
  <option value="NorthRiding"> North Riding </option>
  <option value="Northcliff"> Northcliff </option>
  <option value="Northgate"> Northgate </option>
  <option value="Northwold"> Northwold </option>
  <option value="NorthwoldGardens"> Northwold Gardens </option>
  <option value="OliveCrest"> Olive Crest </option>
  <option value="Olivedale"> Olivedale </option>
  <option value="PierneefPark"> Pierneef Park </option>
  <option value="PinePark"> Pine Park </option>
  <option value="PresidentRidge"> President Ridge </option>
  <option value="RandburgCentral"> Randburg Central </option>
  <option value="Randpark"> Randpark </option>
  <option value="RandparkRidge"> Randpark Ridge </option>
  <option value="Risidale"> Risidale </option>
  <option value="RobinAcres"> Robin Acres </option>
  <option value="RobinHills"> Robin Hills </option>
  <option value="Robindale"> Robindale </option>
  <option value="Ruiterhof"> Ruiterhof </option>
  <option value="Saranton"> Saranton </option>
  <option value="Sharonlea"> Sharonlea </option>
  <option value="Sonneglans"> Sonneglans </option>
  <option value="Strijdompark"> Strijdompark </option>
  <option value="Sundowner"> Sundowner </option>
  <option value="TheWillows"> The Willows </option>
  <option value="Valeriedene"> Valeriedene </option>
  <option value="VandiaGrove"> Vandia Grove </option>
  <option value="VictoryPark"> Victory Park </option>
  <option value="Waterford"> Waterford </option>
  <option value="Windsor"> Windsor </option>
  <option value="WindsorEast"> Windsor East </option>
  <option value="WindsorGlen"> Windsor Glen </option>
  <option value="WindsorWest"> Windsor West </option>
  <option value="Null" style="display:none" >Null</option>
</select>
</div>

<div id="hideJHBEastsuburb" style="display:none">
<label>Suburb:</label>
<select class="JHBEastsuburb" name="suburbsJHBEast" id="suburbsJHBEast" form="plug" required>
  <option value="" disabled selected>Select Suburb</option>
  <option value="Alexandra"> Alexandra </option>
  <option value="Bruma"> Bruma </option>
  <option value="IvoryPark"> Ivory Park </option>
  <option value="Wynberg"> Wynberg </option>
  <option value="Null" style="display:none" >Null</option>
</select>
</div>

<div id="hideJHBNorthWestsuburb" style="display:none">
<label>Suburb:</label>
<select class="JHBNorthWestsuburb" name="suburbsJHBNorthWest" id="suburbsJHBNorthWest" form="plug" required>
  <option value="" disabled selected>Select Suburb</option>
  <option value="ConstantiaKloof"> ConstantiaKloof </option>
  <option value="Diepsloot"> Diepsloot </option>
  <option value="Kyasands"> Kya Sands </option>
  <option value="Northgate"> Northgate </option>
  <option value="Roodepoort"> Roodepoort </option>
  <option value="Null" style="display:none" >Null</option>
</select>
</div>

<div id="hideJHBCentral" style="display:none">
<label>Suburb:</label>
<select class="JHBCentralsuburb" name="suburbsJHBCentral" id="suburbsJHBCentral" form="plug" required>
  <option value="" disabled selected>Select Suburb</option>
  <option value="JohannesburgCBD"> Johannesburg CBD </option>
  <option value="Northcliff"> Northcliff </option>
  <option value="Parktown"> Parktown </option>
  <option value="Rosebank"> Rosebank </option>
  <option value="Null" style="display:none" >Null</option>
</select>
</div>

<div id="hideJHBSouth" style="display:none">
<label>Suburb:</label>
<select class="JHBSouthsuburb" name="suburbsJHBSouth" id="suburbsJHBSouth" form="plug" required>
  <option value="" disabled selected>Select Suburb</option>
  <option value="Aeroton"> Aeroton </option>
  <option value="CityDeep"> City Deep </option>
  <option value="Diepkloof"> Diepkloof </option>
  <option value="Ennerdale"> Ennerdale </option>
  <option value="Lenasig"> Lenasig </option>
  <option value="OrangeFarm"> OrangeFarm </option>
  <option value="SouthGate"> South Gate </option>
  <option value="Null" style="display:none" >Null</option>
</select>
</div>

<div id="hideJHBSouthWest" style="display:none">
<label>Suburb:</label>
<select class="JHBSouthWestsuburb" name="suburbsJHBSouthWest" id="suburbsJHBSouthWest" form="plug" required>
  <option value="" disabled selected>Select Suburb</option>
  <option value="Dobsonville"> Dobsonville </option>
  <option value="Soweto"> Soweto </option>
  <option value="ProteaGlen"> Protea Glen </option>
  <option value="Null" style="display:none" >Null</option>
</select>
</div>

<div id="hidePTAeastsuburb" style="display:none">
<label>Suburb:</label>
<select class="PTAeastSuburb" name="suburbsPTAeast" id="suburbsPTAeast" form="plug" required>
  <option value="" disabled selected>Select Suburb</option>
  <option value="AlphenPark"> Alphen Park </option>
  <option value=" Arcadia "> Arcadia </option>
  <option value=" AshleaGardens "> Ashlea Gardens </option>
  <option value=" BaileysMuckleneuk "> Bailey's Muckleneuk </option>
  <option value=" Brooklyn "> Brooklyn </option>
  <option value=" Brummeria "> Brummeria </option>
  <option value=" Bryntirion "> Bryntirion </option>
  <option value=" Colbyn "> Colbyn </option>
  <option value=" ConstantiaPark "> Constantia Park </option>
  <option value=" DieWilgers "> Die Wilgers </option>
  <option value=" Eastcliff "> Eastcliff </option>
  <option value=" Eastwood "> Eastwood </option>
  <option value=" Elarduspark "> Elarduspark </option>
  <option value=" Equestria "> Equestria </option>
  <option value=" Erasmuskloof "> Erasmuskloof </option>
  <option value=" Erasmusrand "> Erasmusrand </option>
  <option value=" FaerieGlen "> Faerie Glen </option>
  <option value=" Garsfontein "> Garsfontein </option>
  <option value=" Groenkloof "> Groenkloof </option>
  <option value=" Hatfield "> Hatfield </option>
  <option value=" Hillcrest "> Hillcrest </option>
  <option value=" Kilberry "> Kilberry </option>
  <option value=" LaMontagne "> La Montagne </option>
  <option value=" Lukasrand "> Lukasrand </option>
  <option value=" Lynnrodene "> Lynnrodene </option>
  <option value=" Lynnwood "> Lynnwood </option>
  <option value=" LynnwoodGlen "> Lynnwood Glen </option>
  <option value=" LynnwoodManor "> Lynnwood Manor </option>
  <option value=" LynnwoodPark "> Lynnwood Park </option>
  <option value=" LynnwoodRidge "> Lynnwood Ridge </option>
  <option value=" Menlopark "> Menlopark </option>
  <option value=" Menlyn "> Menlyn </option>
  <option value=" Meyerspark "> Meyerspark </option>
  <option value=" MonumentPark "> Monument Park </option>
  <option value=" Mooikloof "> Mooikloof </option>
  <option value=" MoreletaPark "> Moreleta Park </option>
  <option value=" Muckleneuk "> Muckleneuk </option>
  <option value=" Murrayfield "> Murrayfield </option>
  <option value=" NewMuckleneuk "> New Muckleneuk </option>
  <option value=" Newlands "> Newlands </option>
  <option value=" Olympus "> Olympus </option>
  <option value=" PretoriusPark "> Pretorius Park </option>
  <option value=" Rietvalleirand "> Rietvalleirand </option>
  <option value=" Silverlakes  "> Silverlakes </option>
  <option value=" Sterrewag "> Sterrewag </option>
  <option value=" Sunnyside "> Sunnyside </option>
  <option value=" Trevenna "> Trevenna </option>
  <option value=" ValDeGrace "> Val De Grace </option>
  <option value=" Wapadrand "> Wapadrand </option>
  <option value=" Waterkloof "> Waterkloof </option>
  <option value=" WaterkloofGlen "> Waterkloof Glen </option>
  <option value=" WaterkloofPark "> Waterkloof Park </option>
  <option value=" WaterkloofRidge "> Waterkloof Ridge </option>
  <option value=" WillowGlen "> Willow Glen </option>
  <option value=" WillowParkManor "> Willow Park Manor </option>
  <option value=" WingatePark "> Wingate Park </option>
  <option value=" Woodhill "> Woodhill </option>
  <option value=" Woodlands "> Woodlands </option>
  <option value=" Zwavelpoort "> Zwavelpoort </option>
  <option value="Null" style="display:none" >Null</option>
</select>
</div>
<div id="hidePTANorthEastsuburb" style="display:none">
<label>Suburb:</label>
<select class="PTANorthEastsuburb" name="suburbsPTANorthEast" id="suburbsPTANorthEast" form="plug" required>
  <option value="" disabled selected>Select Suburb</option>
  <option value="Annlin"> Annlin </option>
  <option value=" Bellevue "> Bellevue </option>
  <option value=" Bergtuin "> Bergtuin </option>
  <option value=" Deerness "> Deerness </option>
  <option value=" Derdepoort "> Derdepoort </option>
  <option value=" DerdepoortPark "> Derdepoort Park </option>
  <option value=" Despatch "> Despatch </option>
  <option value=" Doornpoort "> Doornpoort </option>
  <option value=" Eastlynne "> Eastlynne </option>
  <option value=" Eersterust "> Eersterust </option>
  <option value=" Ekklesia "> Ekklesia </option>
  <option value=" Gezina "> Gezina </option>
  <option value=" JanNiemandPark "> Jan Niemand Park </option>
  <option value=" KilneryPark "> Kilnery Park </option>
  <option value=" Koedoespoort "> Koedoespoort </option>
  <option value=" Lyndopark "> Lyndopark </option>
  <option value=" Magalieskruin "> Magalieskruin </option>
  <option value=" Mamelodi "> Mamelodi </option>
  <option value=" Nelmapius "> Nelmapius </option>
  <option value=" Queenswood "> Queenswood </option>
  <option value=" Rietfontein "> Rietfontein </option>
  <option value=" Rietondale "> Rietondale </option>
  <option value=" Riviera "> Riviera </option>
  <option value=" Silverton "> Silverton </option>
  <option value=" SilvertonDale "> Silvertondale </option>
  <option value=" Sinoville "> Sinoville </option>
  <option value=" Villieria "> Villieria </option>
  <option value=" Waltloo "> Waltloo </option>
  <option value=" Waverley "> Waverley </option>
  <option value=" WeavindPark "> Weavind Park </option>
  <option value=" Wonderboom "> Wonderboom </option>
  <option value=" WonderboomSouth "> Wonderboom South </option>
  <option value="Null" style="display:none" >Null</option>
</select>
</div>
<div id="hidePTANorthWestsuburb" style="display:none">
<label>Suburb:</label>
<select class="PTANorthWestsuburb" name="suburbsPTANorthWest" id="suburbsPTANorthWest" form="plug" required>
  <option value="" disabled selected>Select Suburb</option>
  <option value="Amandasig"> Amandasig </option>
  <option value=" Booysens "> Booysens </option>
  <option value=" Claremont "> Claremont </option>
  <option value=" Chantelle "> Chantelle </option>
  <option value=" Florauna "> Florauna </option>
  <option value=" Garankuwa "> Garankuwa </option>
  <option value=" Hammanskraal "> Hammanskraal </option>
  <option value=" Hermanstad "> Hermanstad </option>
  <option value=" Karenpark "> Karenpark </option>
  <option value=" Kirkney "> Kirkney </option>
  <option value=" Klerksoord "> Klerksoord </option>
  <option value=" Mabopane "> Mabopane </option>
  <option value=" Dorandia "> Dorandia </option>
  <option value=" NinaPark "> Nina Park </option>
  <option value=" PhilipNelPark "> Philip Nel Park </option>
  <option value=" PretoriaGardens "> Pretoria Gardens </option>
  <option value=" PretoriaNorth "> Pretoria North </option>
  <option value=" ProclamationHill "> Proclamation Hill </option>
  <option value=" Rosslyn "> Rosslyn </option>
  <option value=" Soshanguve "> Soshanguve </option>
  <option value=" Suiderberg "> Suiderberg </option>
  <option value=" Orchards "> Orchards </option>
  <option value=" Themba "> Themba </option>
  <option value=" Tileba "> Tileba </option>
  <option value=" Wolmer "> Wolmer </option>
  <option value="Null" style="display:none" >Null</option>
</select>
</div>
<div id="hidePTACentralsuburb" style="display:none">
<label>Suburb:</label>
<select class="PTACentralsuburb" name="suburbsPTACentral" id="suburbsPTACentral" form="plug" required>
  <option value="" disabled selected>Select Suburb</option>
  <option value="PretoriaCBD"> Pretoria CBD </option>
  <option value="Null" style="display:none" >Null</option>
</select>
</div>
<div id="hidePTACentralWestsuburb" style="display:none">
<label>Suburb:</label>
<select class="PTACentralWestsuburb" name="suburbsPTACentralWest" id="suburbsPTACentralWest" form="plug" required>
  <option value="" disabled selected>Select Suburb</option>
  <option value="Atteridgeville"> Atteridgeville </option>
  <option value=" LotusGardens "> Lotus Gardens </option>
  <option value=" CapitalPark "> Capital Park </option>
  <option value=" Danville "> Danville </option>
  <option value=" Daspoort "> Daspoort </option>
  <option value=" Elandspoort "> Elandspoort </option>
  <option value=" Eloffsdal "> Eloffsdal </option>
  <option value=" Kwaggasrand "> Kwaggasrand </option>
  <option value=" Laudium "> Laudium </option>
  <option value=" LesMarais "> Les Marais </option>
  <option value=" Mayville "> Mayville </option>
  <option value=" MountainView "> Mountain View </option>
  <option value=" PretoriaWest "> Pretoria West </option>
  <option value=" Salvokop "> Salvokop </option>
  <option value=" Saulsville "> Saulsville </option>
  <option value=" Weskoppies "> Weskoppies </option>
  <option value=" Wespark "> Wespark </option>
  <option value="Null" style="display:none" >Null</option>
</select>
</div>
<div id="hideCenturionsuburb" style="display:none">
<label>Suburb:</label>
<select class="Centurionsuburb" name="suburbsCenturion" id="suburbsPTACenturion" form="plug" required>
  <option value="" disabled selected>Select Suburb</option>
  <option value="Clubview"> Clubview </option>
  <option value=" CornwallHill "> Cornwall Hill </option>
  <option value=" Doringkloof "> Doringkloof </option>
  <option value=" Eldoraigne "> Eldoraigne </option>
  <option value=" Erasmia "> Erasmia </option>
  <option value=" Heuweloord "> Heuweloord </option>
  <option value=" Kloofsig "> Kloofsig </option>
  <option value=" Lyttleton "> Lyttleton </option>
  <option value=" Irene "> Irene </option>
  <option value=" Olievenhoutbosch "> Olievenhoutbosch </option>
  <option value=" PierreVanRyneveldPark "> Pierre Van Ryneveld Park </option>
  <option value=" TheReeds "> The Reeds </option>
  <option value=" Rooihuiskraal "> Rooihuiskraal </option>
  <option value=" SunderlandRidge "> Sunderland Ridge </option>
  <option value=" Wierdapark "> Wierdapark </option>
  <option value=" Weskoppies "> Weskoppies </option>
  <option value=" Wespark "> Wespark </option>
  <option value="Null" style="display:none" >Null</option>
</select>
</div>
<div id="hidecribtype" style="display:none">
<label>Structure Type:</label>
<select class="cribtype" name="Crib" id="Cribtype" form="plug" required>
  <option value="" disabled selected>Select Structure Type</option>
  <option value="House">House</option>
  <option value="Estate">Residential Estate</option>
  <option value="Complex">Residential Complex</option>
  <option value="Flat">Residential Flat Building</option>
  <option value="Office">Office Complex</option>
  <option value="Mall">Mall</option>
  <option value="Shop">Shopping Complex</option>
</select>
</div>
<div id="hideEstate" style="display:none">
   <label>Estate name:</label><input type="text" name="Estate" placeholder="Enter Estate Name" id="Estate1" required>
</div>
<div id="hideComplex" style="display:none">
   <label>Complex name:</label><input type="text" name="Complex" placeholder="Enter Complex Name" id="Complex1"  required>
</div>
<div id="hideBuilding" style="display:none">
   <label>Building name:</label><input type="text" name="Building" placeholder="Enter Building Name" id="Building1"  required>
</div>
<div id="hideMall" style="display:none">
   <label>Mall name:</label><input type="text" name="Mall" placeholder="Enter Mall Name" id="Mall1"  required>
</div>
<div id="hideOffice" style="display:none">
   <label>Company name:</label><input type="text" name="Shop" placeholder="Enter Company Name" id="Company1" required>
</div>
<div id="hideShop" style="display:none">
   <label>Shop name:</label><input type="text" name="Shop" placeholder="Enter Shop Name" id="Shop1" required>
</div>
<div id="hideStreet" style="display:none">
   <label>Street:</label><input type="text" name="Street" placeholder="Enter Street Name" id="Street1" required>
</div>
<div id="hideNumber" style="display:none">
   <label>Unit number:</label><input type="text" name="Unit-number" placeholder="Enter Unit Number" id="Unit1" required>
</div>
<div id="hideHouseNumber" style="display:none">
   <label>House number:</label><input type="text" name="House-number" placeholder="Enter House Number"  id="House1" required>
</div>
<div id="hideContactNumber" style="display:none">
   <label>Recipient contact number:</label><input type="text" name="Contact-number" placeholder="Enter Contact Number" required>
</div>
<div id="hideName" style="display:none">
   <label>Recipient name:</label><input type="text" name="Recipient-number" placeholder="Enter Recipient Name" required>
</div>
   <input type="hidden" name="merchant_id" value=" 10000100 ">
   <input type="hidden" name="merchant_key" value="46f0cd694581a">
   <input type="hidden" name="name_first" value="<?php echo $_GET['username'];?>">
   <input type="hidden" name="amount" id="amount" value="">
   <input type="hidden" name="item_name" value="Cannibus Health Store Items">
   <input type="hidden" name="return_url" value="https://canibuy.co.za/Shop.php?username=<?php echo $_GET['username'];?>&auth=<?php echo $_GET['auth'];?>">
   <input type="hidden" name="cancel_url" value="https://www.canibuy.co.za/Cart.php">
   <input type="hidden" name="notify_url" value="https://canibuy.co.za/Ordermanagement.php">
   <input type="hidden" name="signature" value="<?php $signature ?>">
   <input type="hidden" name="Address1" id="address1" value="Pitori">
   <input type="hidden" name="Address2" id="address2" value="Mahlanyeng">
   <input type="submit" name="Pay" value="Order" id="Blanks">
</form> 

</div></div></div></div></div></div></div></article></div></div></div></div>

<footer class="footer-container color-scheme-light">
<div class="container main-footer">
</div>
<div class="copyrights-wrapper copyrights-centered">
<div class="container">
<div class="min-footer">
<div class="col-left"> 
<i class="fa fa-copyright">
</i> 
2020 Created by 
<span style="color: orange;font-size: 15px">
Plug
</span>
Tech Creations
</a>
. Premium e-commerce solutions.</div></div></div></div></footer></div>
<div class="basel-close-side">
</div>
<div class="basel-toolbar icons-design-line basel-toolbar-label-show">
<div class="basel-toolbar-shop basel-toolbar-item"> 
<a href="Shop.php?username=<?php echo $_GET['username'];?>&auth=<?php echo $_GET['auth'];?>">
<span class="basel-toolbar-label"> 
Shop 
</span> </a></div>
<div class="king"> 
<img src="https://img.icons8.com/ios-glyphs/30/000000/medieval-crown.png"/>
</div>
<div class="queen"> 
<img src="https://img.icons8.com/pastel-glyph/30/000000/like--v1.png"/>
</div>
<div class="lighter">  
<img src="https://img.icons8.com/pastel-glyph/30/000000/hand-lighter-without-flame.png"/>
</a></div></div> 
</div>
<a href="#" class="scrollToTop basel-tooltip">
Scroll To Top
</a> 

</div> 
<div class="pswp" tabindex="-1" role="dialog" aria-hidden="true"><div class="pswp__bg"></div><div class="pswp__scroll-wrap"><div class="pswp__container"><div class="pswp__item"></div><div class="pswp__item"></div><div class="pswp__item"></div></div><div class="pswp__ui pswp__ui--hidden"><div class="pswp__top-bar"><div class="pswp__counter"></div><button class="pswp__button pswp__button--close" title="Close (Esc)"></button><button class="pswp__button pswp__button--share" title="Share"></button><button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button><button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button><div class="pswp__preloader"><div class="pswp__preloader__icn"><div class="pswp__preloader__cut"><div class="pswp__preloader__donut"></div></div></div></div></div><div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap"><div class="pswp__share-tooltip"></div></div><button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"> </button><button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)"> </button><div class="pswp__caption"><div class="pswp__caption__center">
</div></div></div></div></div> 

<script src="159ee3662dfb9514a247e01325dcd82e.js" data-minify="1" defer>
</script>
<script 
src="DeliveryPriceDisplay.js" >
</script>
<script 
src="Values.js" >
</script>
<script 
src="Inputhide.js" >
</script>
<script 
src="Form.js" >
</script>
</body>
</html>
