<?php
$servername="dt3bgg3gu6nqye5f.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
$dBUsername="fn5xp8yu9vmphif8";
$dBPassword="j0oarzobzrwqy40b";
$dBName="eebooc1cx2mejqru";
   $conn=mysqli_connect($servername,$dBUsername,$dBPassword,$dBName);
   $authtoken = $_GET['auth'];
   $username = $_GET['username'];
   $prepared = 'Prepared';
   $collected = 'Collected';
   $pending = 'Pending';
   
   $total = $_GET['eTotal'];
   $city = $_GET['eCity'];
   $town = $_GET['eTown'];
   $street = $_GET['eStreet'];
   $suburb = $_GET['eSuburb'];
   $mall = $_GET['eMall'];
   $building = $_GET['eBuilding'];
   $shop = $_GET['eShop'];
   $complex = $_GET['eComplex'];
   $company = $_GET['eCompany'];
   $housenumber = $_GET['eHouseNumber'];
   $unitnumber = $_GET['eUnitNumber'];
   $estate = $_GET['eEstate'];
   $dp = $_GET['eDP'];
   $cc = $_GET['eCC'];
   $oc = $_GET['eOC'];
   $bw = $_GET['eBW'];
   $nl = $_GET['eNL'];
   $pr = $_GET['ePR'];
   $cces = $_GET['eCCES'];
   $pe = $_GET['ePE'];
   $contact = $_GET['eContact'];
   $date = $_GET['eDate'];
   

   $sql="SELECT * FROM oders WHERE idOrderConfirmation=? OR idOrderConfirmation=? OR idOrderConfirmation=? AND idOrderUsername=? ";
   $stmt=mysqli_stmt_init($conn);
   if(!mysqli_stmt_prepare($stmt,$sql)){
       header("Location:register.html?error=SQL1");
       exit();
   }
   mysqli_stmt_bind_param($stmt,"ssss",$pending,$prepared,$collected,$username);
   mysqli_stmt_execute($stmt);
   mysqli_stmt_store_result($stmt);
   $check=mysqli_stmt_num_rows($stmt);
   
   if($check>0){
   $query="SELECT * FROM oders WHERE idOrderConfirmation='Pending' OR idOrderConfirmation='Prepared' OR idOrderConfirmation='Collected' AND idOrderUsername='".$username."' ";
   $result=mysqli_query($conn,$query);
   while($row=mysqli_fetch_array($result)){
   $ordernumbers[]=$row['idOrders'];
   }
   $order=Min($ordernumbers);
   
   $query="SELECT * FROM oders WHERE idOrders='".$order."' ";
   $result=mysqli_query($conn,$query);
   while($row=mysqli_fetch_array($result)){
   $ordertoken[]=$row['idOrderToken'];
   }
   $token=Min($ordertoken); 

   $query="SELECT * FROM oders WHERE idOrders='".$order."' ";
   $result=mysqli_query($conn,$query);
   while($row=mysqli_fetch_array($result)){
   $custitoken[]=$row['idOrderCustiCode'];
   }
   $code=Min($custitoken); 

   $query="SELECT * FROM deliverytoken WHERE idOrderID='".$token."' AND idCustomerToken='".$code."' ";
   $result=mysqli_query($conn,$query);
   while($row=mysqli_fetch_array($result)){
   $ordernm[]=$row['id'];
   }
   $ordernmb=Min($ordernm); 

   $query="SELECT * FROM users WHERE uidUsers='".$username."' ";
   $result=mysqli_query($conn,$query);
   while($row=mysqli_fetch_array($result)){
   $usermail[]=$row['emailUsers'];
   }
   $email=Min($usermail); 
   
   $sql="SELECT * FROM oders WHERE idOrderConfirmation=? AND idOrderUsername=? AND idOrders=? ";
   $stmt=mysqli_stmt_init($conn);
   if(!mysqli_stmt_prepare($stmt,$sql)){
       header("Location:register.html?error=SQL1");
       exit();
   }
   mysqli_stmt_bind_param($stmt,"sss",$prepared,$username,$order);
   mysqli_stmt_execute($stmt);
   mysqli_stmt_store_result($stmt);
   $prepared=mysqli_stmt_num_rows($stmt);
   
   $sql="SELECT * FROM oders WHERE idOrderConfirmation=? AND idOrderUsername=? AND idOrders=? ";
   $stmt=mysqli_stmt_init($conn);
   if(!mysqli_stmt_prepare($stmt,$sql)){
       header("Location:register.html?error=SQL1");
       exit();
   }
   mysqli_stmt_bind_param($stmt,"sss",$collected,$username,$order);
   mysqli_stmt_execute($stmt);
   mysqli_stmt_store_result($stmt);
   $collected=mysqli_stmt_num_rows($stmt);
   
   $sql="SELECT * FROM oders WHERE idOrderConfirmation=? AND idOrderUsername=? AND idOrders=? ";
   $stmt=mysqli_stmt_init($conn);
   if(!mysqli_stmt_prepare($stmt,$sql)){
       header("Location:register.html?error=SQL1");
       exit();
   }
   mysqli_stmt_bind_param($stmt,"sss",$pending,$username,$order);
   mysqli_stmt_execute($stmt);
   mysqli_stmt_store_result($stmt);
   $pending=mysqli_stmt_num_rows($stmt);
   }
   else{
    $prepared='0';
    $collected='0';
    $pending='0';
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
<title>Order Tracker</title>
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
	<span> <?php echo $_GET['username']; ?></span><span> </span> <span>[<a href="Logout.php?&auth=<?php echo $_GET['auth'];?>"><span style="color:red;"> Log out</span></a>]</span> <span>[<a href="O1.php?username=<?php echo $_GET['username'];?>&auth=<?php echo $_GET['auth'];?>"><span style="color:orange;">Order log</span></a>]</span>
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
Order Tracker
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

</span></div><div class="woocommerce"><div class="single-product" data-product-page-preselected-id="0"><div class="single-breadcrumbs-wrapper"><div class="container"> <a href="Shop.php?username=<?php echo $_GET['username'];?>&auth=<?php echo $_GET['auth'];?>" class="basel-back-btn basel-tooltip"><span>Back</span></a><nav class="woocommerce-breadcrumb">
<a href="Shop.php?username=<?php echo $_GET['username'];?>&auth=<?php echo $_GET['auth'];?>">
Shop
</a><span class="breadcrumb-last"> 
Tracker 
</span>
</nav>
</div>
</div>

<P id="payhide1"><strong>Payment status:</strong> <span style="color:green"> Paid </span></p>
<P id="payhide2" style="display:none" ><strong>Payment status:</strong> <span style="color:green"> No order placed</span></p>
<P id="OD1"><strong> Order number:</strong> [00<?php echo $ordernmb; ?>]</p>
<P id="OD2" style="display:none" ><strong> Order number:</strong>N/A</p>
<P id="codehide1"><strong> Collection code:</strong> <?php echo $code; ?> </p>
<P id="codehide2" style="display:none" ><strong> Collection code:</strong>N/A</p>
<br>
<p id="preparehide1"><strong> Order preparation: </strong> <span style="color:orange">Pending </span> </p>
<p id="preparehide2" style="display:none"><strong> Order preparation: </strong> <span style="color:green"> Prepared </span> </p>
<p id="preparehide3" style="display:none"><strong> Order preparation: </strong> <span> N/A </span> </p>
<p id="collecthide1"><strong> Order collection: </strong> <span style="color:orange"> Pending </span> </p>
<p id="collecthide2" style="display:none" ><strong> Order collection: </strong> <span style="color:green"> Collected by driver </span> </p>
<p id="collecthide3" style="display:none" ><strong> Order collection: </strong> <span> N/A </span> </p>
<p id="deliveryhide1"><strong> Order delivery: </strong> <span style="color:orange"> Pending </span> </p>
<p id="deliveryhide2" style="display:none" ><strong> Order delivery: </strong> <span style="color:green"> En-route </span> </p>
<p id="deliveryhide3" style="display:none" ><strong> Order delivery: </strong> <span> N/A </span> </p>
<br>
	<button onclick='refreshPage()'>
		Update
	</button>
</div></div></div></div></div></div></div></article></div></div></div></div>
<br>
<br>
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
<span>
Kahrent Technology
</span>
Africa. Contact us <a href="C.php?username=<?php echo $_GET['username'];?>&auth=<?php echo $_GET['auth'];?>">(here)</a>. Terms and conditions <a href="A1.php?username=<?php echo $_GET['username'];?>&auth=<?php echo $_GET['auth'];?>">(here)</a></div></div></div></div></footer></div>
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
src="Order.js" >
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
<script>
setInterval (function hideCollect(){
var collected = ' <?php echo $collected; ?> ';
var prepared = ' <?php echo $prepared; ?> ';
var pending = ' <?php echo $pending; ?> ';
if (prepared>0){
 document.getElementById("preparehide1").style.display = "none";
 document.getElementById("preparehide2").style.display = "block";
 }
else if (collected>0){
 document.getElementById("preparehide1").style.display = "none";
 document.getElementById("preparehide2").style.display = "block";
 document.getElementById("collecthide1").style.display = "none";
 document.getElementById("collecthide2").style.display = "block";
 document.getElementById("deliveryhide1").style.display = "none";
 document.getElementById("deliveryhide2").style.display = "block";
 }
else if (pending>0){
 }
else{
 document.getElementById("preparehide1").style.display = "none";
 document.getElementById("preparehide2").style.display = "none";
 document.getElementById("collecthide1").style.display = "none";
 document.getElementById("collecthide2").style.display = "none";
 document.getElementById("deliveryhide1").style.display = "none";
 document.getElementById("deliveryhide2").style.display = "none";
 document.getElementById("payhide2").style.display = "block";
 document.getElementById("OD2").style.display = "block";
 document.getElementById("codehide2").style.display = "block";
 document.getElementById("payhide1").style.display = "none";
 document.getElementById("OD1").style.display = "none";
 document.getElementById("codehide1").style.display = "none";
 document.getElementById("collecthide3").style.display = "block";
 document.getElementById("deliveryhide3").style.display = "block";
 document.getElementById("preparehide3").style.display = "block";
}
}, 1000);

hideCollect();
</script>
<script src="https://smtpjs.com/v3/smtp.js">
</script>
<script>
function sendemail(){
let count= localStorage.getItem('eTotal');
if(count){
Email.send({
    Host : "mail.canibuy.site",
    Username : "no-reply@canibuy.site",
    Password : "God@loves",
    To : '<?php echo $email; ?>',
    From : "no-reply@canibuy.site",
    Subject : "Canibuy transaction details",
    Body : '<p><div style="height:30px; width:100%; background:green;"></div><img  src="https://res.cloudinary.com/badboylu/image/upload/c_scale,w_200/v1595757623/website_logo_head_aswjjx.jpg" alt="Basel" /><div style="height:15px; width:100%; background:black;"></div></p><br><p>Hello <?php echo $username; ?>,</p><p>you have successfully <span style="color:green">placed</span> an order at <span style="color:orange">canibuy</span>.</p><p><h3>Transaction details:</h3></p><p>Amount transacted:<span> R</span><?php echo $total; ?><span>.00</span></p><p><h3>Order:</h3></p><p><?php if($dp>0){echo'Durban poison:<span> </span>';} ?><?php if($dp>0){echo $dp;} ?><?php if($dp>0){echo '<span> gram/s</span>';} ?></p><p><?php if($cc>0){echo'Dabcapsules (Light):<span> </span>';} ?><?php if($cc>0){echo $cc;} ?><?php if($cc>0){echo '<span> batch/es</span>';} ?></p><p><?php if($oc>0){echo'Orange cali:<span> </span>';} ?><?php if($oc>0){echo $oc;} ?><?php if($oc>0){echo '<span> gram/s</span>';} ?></p><p><?php if($bw>0){echo'Raw rizzla:<span> </span>';} ?><?php if($bw>0){echo $bw;} ?><?php if($bw>0){echo '<span> pack/s</span>';} ?></p><p><?php if($pr>0){echo'Pre-roll:<span> </span>';} ?><?php if($pr>0){echo $pr;} ?><?php if($pr>0){echo '<span> J/s</span>';} ?></p><p><?php if($nl>0){echo'Northern lights:<span> </span>';} ?><?php if($nl>0){echo $nl;} ?><?php if($nl>0){echo '<span> gram/s</span>';} ?></p><p><?php if($cces>0){echo'Dabcapsules (Strong):<span> </span>';} ?><?php if($cces>0){echo $cces;} ?><?php if($cces>0){echo '<span> batch/es</span>';} ?></p><p><?php if($pe>0){echo'Pineapple express: <span> </span>';} ?><?php if($pe>0){echo $pe;} ?><?php if($pe>0){echo '<span> gram/s</span>';} ?></p><p><h3>Delivery address:</h3></p><p><?php if($city){echo $city;} ?></p><p><?php if($town){echo $town;} ?></p><p><?php if($suburb){echo $suburb;} ?></p><p><?php if($street){echo $street;} ?></p><p><?php if($estate){echo $estate;} ?></p><p><?php if($mall){echo $mall;} ?></p><p><?php if($complex){echo $complex;} ?></p><p><?php if($shop){echo $shop;} ?></p><p><?php if($building){echo $building;} ?></p><p><?php if($company){echo $company;} ?></p><p><?php if($housenumber){echo $housenumber;} ?></p><p><?php if($unitnumber){echo $unitnumber;} ?></p><p><h3>Contact details:</h3></p><p><span>Recipient name: </span><?php if($username){echo $username;} ?></p><p><span>Contact number: </span><?php if($contact){echo $contact;} ?></p><br><br><p><div style="height:48px; width:100%; background:black;"><p><div><span style="color:white; padding-left:5px; padding-top:15px; margine-bottom:5px;"><small>© 2021 Kahrent Technology Africa All rights reserved.</small></span></div><div><span style="color:white; padding-left:5px;"><small><a href="https://canibuy.co.za/A1.php">Terms and conditions</a></small></span></div></p></div></p>'              
  });
 }
}

function clear(){
  localStorage.removeItem("eTotal");
  localStorage.removeItem("eCity");
  localStorage.removeItem("eTown");
  localStorage.removeItem("eSuburb");
  localStorage.removeItem("eStreet");
  localStorage.removeItem("eMall");
  localStorage.removeItem("eBuilding");
  localStorage.removeItem("eShop");
  localStorage.removeItem("eComplex");
  localStorage.removeItem("eCompany");
  localStorage.removeItem("eHouseNumber");
  localStorage.removeItem("eUnitNumber");
  localStorage.removeItem("eEstate");
  localStorage.removeItem("eDP");
  localStorage.removeItem("eCC");
  localStorage.removeItem("eOC");
  localStorage.removeItem("eBW");
  localStorage.removeItem("eNL");
  localStorage.removeItem("ePR");
  localStorage.removeItem("eCCES");
  localStorage.removeItem("ePE");
  localStorage.removeItem("eContact");
  localStorage.removeItem("eDate");
}
sendemail();
clear();
</script> 
<script type="text/javascript">
function refreshPage(){
location.reload();		
}
</script>
</body>
</html>
