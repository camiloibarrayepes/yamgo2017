<!DOCTYPE html>
<html lang="en-US"  data-menu="leftalign">
   <?php
      require_once('../../conexion.php');
      session_start();
      $id=$_REQUEST['id'];
      $query = "SELECT * FROM tour WHERE id = '$id'";
         $resultado2 = $link->query($query);
         while($titulo = $resultado2->fetch_assoc())
         {        
      ?>
   <head>
      <link rel="profile" href="http://gmpg.org/xfn/11" />
      <link rel="pingback" href="http://themes.themegoods2.com/grandtour/demo/xmlrpc.php" />
      <link rel="shortcut icon" href="../../wp-content/uploads/2016/12/TG-Thumb.png" />
      <title><?php echo $titulo['nombre']; } ?></title>
      <link rel='dns-prefetch' href='http://fonts.googleapis.com' />
      <link rel='dns-prefetch' href='http://s.w.org' />
      <link rel="alternate" type="application/rss+xml" title="Grand Tour | Booking Travel WordPress &raquo; Feed" href="../../feed/index.html" />
      <link rel="alternate" type="application/rss+xml" title="Grand Tour | Booking Travel WordPress &raquo; Comments Feed" href="../../comments/feed/index.html" />
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
      <meta name="format-detection" content="telephone=no">
      <meta property="og:type" content="article" />
      <meta property="og:image" content="http://themes.themegoods2.com/grandtour/demo/wp-content/uploads/2016/12/pexels-photo-211051-960x636.jpeg"/>
      <meta property="og:title" content="French Autumn"/>
      <meta property="og:url" content="http://themes.themegoods2.com/grandtour/demo/tour/french-autumn/"/>
      <meta property="og:description" content="City Tours, Urban"/>
      <link rel="alternate" type="application/rss+xml" title="Grand Tour | Booking Travel WordPress &raquo; French Autumn Comments Feed" href="http://themes.themegoods2.com/grandtour/demo/tour/french-autumn/feed/" />
      <script type="text/javascript">
         window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/2.2.1\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/2.2.1\/svg\/","svgExt":".svg","source":{"concatemoji":"http:\/\/themes.themegoods2.com\/grandtour\/demo\/wp-includes\/js\/wp-emoji-release.min.js"}};
         !function(a,b,c){function d(a){var b,c,d,e,f=String.fromCharCode;if(!k||!k.fillText)return!1;switch(k.clearRect(0,0,j.width,j.height),k.textBaseline="top",k.font="600 32px Arial",a){case"flag":return k.fillText(f(55356,56826,55356,56819),0,0),!(j.toDataURL().length<3e3)&&(k.clearRect(0,0,j.width,j.height),k.fillText(f(55356,57331,65039,8205,55356,57096),0,0),b=j.toDataURL(),k.clearRect(0,0,j.width,j.height),k.fillText(f(55356,57331,55356,57096),0,0),c=j.toDataURL(),b!==c);case"emoji4":return k.fillText(f(55357,56425,55356,57341,8205,55357,56507),0,0),d=j.toDataURL(),k.clearRect(0,0,j.width,j.height),k.fillText(f(55357,56425,55356,57341,55357,56507),0,0),e=j.toDataURL(),d!==e}return!1}function e(a){var c=b.createElement("script");c.src=a,c.defer=c.type="text/javascript",b.getElementsByTagName("head")[0].appendChild(c)}var f,g,h,i,j=b.createElement("canvas"),k=j.getContext&&j.getContext("2d");for(i=Array("flag","emoji4"),c.supports={everything:!0,everythingExceptFlag:!0},h=0;h<i.length;h++)c.supports[i[h]]=d(i[h]),c.supports.everything=c.supports.everything&&c.supports[i[h]],"flag"!==i[h]&&(c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&c.supports[i[h]]);c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&!c.supports.flag,c.DOMReady=!1,c.readyCallback=function(){c.DOMReady=!0},c.supports.everything||(g=function(){c.readyCallback()},b.addEventListener?(b.addEventListener("DOMContentLoaded",g,!1),a.addEventListener("load",g,!1)):(a.attachEvent("onload",g),b.attachEvent("onreadystatechange",function(){"complete"===b.readyState&&c.readyCallback()})),f=c.source||{},f.concatemoji?e(f.concatemoji):f.wpemoji&&f.twemoji&&(e(f.twemoji),e(f.wpemoji)))}(window,document,window._wpemojiSettings);
      </script>
      <style type="text/css">
         img.wp-smiley,
         img.emoji {
         display: inline !important;
         border: none !important;
         box-shadow: none !important;
         height: 1em !important;
         width: 1em !important;
         margin: 0 .07em !important;
         vertical-align: -0.1em !important;
         background: none !important;
         padding: 0 !important;
         }
      </style>
      <link rel='stylesheet' id='contact-form-7-css'  href='../../wp-content/plugins/contact-form-7/includes/css/styles.css' type='text/css' media='all' />
      <link rel='stylesheet' id='fontawesome-stars-css'  href='../../wp-content/plugins/grandtour-custom-post/css/fontawesome-stars-o.css' type='text/css' media='all' />
      <link rel='stylesheet' id='dashicons-css'  href='../../wp-includes/css/dashicons.min.css' type='text/css' media='all' />
      <link rel='stylesheet' id='post-views-counter-frontend-css'  href='../../wp-content/plugins/post-views-counter/css/frontend.css' type='text/css' media='all' />
      <link rel='stylesheet' id='rs-plugin-settings-css'  href='../../wp-content/plugins/revslider/public/assets/css/settings.css' type='text/css' media='all' />
      <style id='rs-plugin-settings-inline-css' type='text/css'>
         #rs-demo-id {}
      </style>
      <link rel='stylesheet' id='woocommerce-layout-css'  href='../../wp-content/plugins/woocommerce/assets/css/woocommerce-layout.css' type='text/css' media='all' />
      <link rel='stylesheet' id='woocommerce-smallscreen-css'  href='../../wp-content/plugins/woocommerce/assets/css/woocommerce-smallscreen.css' type='text/css' media='only screen and (max-width: 768px)' />
      <link rel='stylesheet' id='woocommerce-general-css'  href='../../wp-content/plugins/woocommerce/assets/css/woocommerce.css' type='text/css' media='all' />
      <link rel='stylesheet' id='grandtour-reset-css-css'  href='../../wp-content/themes/grandtour/css/reset.css' type='text/css' media='all' />
      <link rel='stylesheet' id='grandtour-wordpress-css-css'  href='../../wp-content/themes/grandtour/css/wordpress.css' type='text/css' media='all' />
      <link rel='stylesheet' id='grandtour-animation-css-css'  href='../../wp-content/themes/grandtour/css/animation.css' type='text/css' media='all' />
      <link rel='stylesheet' id='ilightbox-css'  href='../../wp-content/themes/grandtour/css/ilightbox/ilightbox.css' type='text/css' media='all' />
      <link rel='stylesheet' id='jqueryui-css'  href='../../wp-content/themes/grandtour/functions/jquery-ui/css/custom-theme/jquery-ui-1.8.24.custom.css' type='text/css' media='all' />
      <link rel='stylesheet' id='grandtour-jqueryui-css'  href='../../wp-content/themes/grandtour/css/jqueryui/custom.css' type='text/css' media='all' />
      <link rel='stylesheet' id='mediaelement-css'  href='../../wp-includes/js/mediaelement/mediaelementplayer.min.css' type='text/css' media='all' />
      <link rel='stylesheet' id='flexslider-css'  href='../../wp-content/themes/grandtour/js/flexslider/flexslider.css' type='text/css' media='all' />
      <link rel='stylesheet' id='tooltipster-css'  href='../../wp-content/themes/grandtour/css/tooltipster.css' type='text/css' media='all' />
      <link rel='stylesheet' id='odometer-theme-css'  href='../../wp-content/themes/grandtour/css/odometer-theme-minimal.css' type='text/css' media='all' />
      <link rel='stylesheet' id='grandtour-screen-css'  href='../../wp-content/themes/grandtour/css/screen.css' type='text/css' media='all' />
      <link rel='stylesheet' id='grandtour-leftalignmenu-css'  href='../../wp-content/themes/grandtour/css/menus/leftalignmenu.css' type='text/css' media='all' />
      <link rel='stylesheet' id='fontawesome-css'  href='../../wp-content/themes/grandtour/css/font-awesome.min.css' type='text/css' media='all' />
      <link rel='stylesheet' id='themify-icons-css'  href='../../wp-content/themes/grandtour/css/themify-icons.css' type='text/css' media='all' />
      <link rel='stylesheet' id='grandtour-script-custom-css-css'  href='../../wp-admin/admin-ajax.php-action=grandtour_custom_css.css' type='text/css' media='all' />
      <link rel='stylesheet' id='kirki-styles-global-css'  href='../../wp-content/themes/grandtour/modules/kirki/assets/css/kirki-styles.css' type='text/css' media='all' />
      <link rel='stylesheet' id='grandtour-script-responsive-css-css'  href='../../wp-content/themes/grandtour/css/grid.css' type='text/css' media='all' />
      <link rel='stylesheet' id='kirki_google_fonts-css'  href='https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,regular,500,600,700,800,900%7CPoppins:300,regular,500,600,700,900&subset' type='text/css' media='all' />
      <script type='text/javascript' src='../../wp-includes/js/jquery/jquery.js'></script>
      <script type='text/javascript' src='../../wp-includes/js/jquery/jquery-migrate.min.js'></script>
      <script type='text/javascript' src='../../wp-content/plugins/grandtour-custom-post/js/jquery.barrating.js'></script>
      <script type='text/javascript' src='../../wp-content/plugins/revslider/public/assets/js/jquery.themepunch.tools.min.js'></script>
      <script type='text/javascript' src='../../wp-content/plugins/revslider/public/assets/js/jquery.themepunch.revolution.min.js'></script>
      <link rel='https://api.w.org/' href='../../wp-json/index.html' />
      <link rel="EditURI" type="application/rsd+xml" title="RSD" href="../../xmlrpc.php-rsd.xml" />
      <link rel="wlwmanifest" type="application/wlwmanifest+xml" href="../../wp-includes/wlwmanifest.xml" />
      <link rel='prev' title='Grand Switzerland' href='../grand-switzerland/index.html' />
      <meta name="generator" content="WordPress 4.7.3" />
      <meta name="generator" content="WooCommerce 2.6.14" />
      <link rel="canonical" href="index.html" />
      <link rel='shortlink' href='index.html' />
      <link rel="alternate" type="application/json+oembed" href="../../wp-json/oembed/1.0/embed-url=http_%7C%7Cthemes.themegoods2.com%7Cgrandtour%7Cdemo%7Ctour%7Cfrench-autumn%7C.json" />
      <link rel="alternate" type="text/xml+oembed" href="../../wp-json/oembed/1.0/embed-url=http_%7C%7Cthemes.themegoods2.com%7Cgrandtour%7Cdemo%7Ctour%7Cfrench-autumn%7C&format=xml.xml" />
      <meta name="generator" content="Powered by Slider Revolution 5.3.1.5 - responsive, Mobile-Friendly Slider Plugin for WordPress with comfortable drag and drop interface." />
   </head>
   <body class="tour-template-default single single-tour postid-180">
      <input type="hidden" id="pp_menu_layout" name="pp_menu_layout" value="leftalign"/>
      <input type="hidden" id="pp_enable_right_click" name="pp_enable_right_click" value="0"/>
      <input type="hidden" id="pp_enable_dragging" name="pp_enable_dragging" value="0"/>
      <input type="hidden" id="pp_image_path" name="pp_image_path" value="http://themes.themegoods2.com/grandtour/demo/wp-content/themes/grandtour/images/"/>
      <input type="hidden" id="pp_homepage_url" name="pp_homepage_url" value="http://themes.themegoods2.com/grandtour/demo/"/>
      <input type="hidden" id="pp_fixed_menu" name="pp_fixed_menu" value="1"/>
      <input type="hidden" id="tg_smart_fixed_menu" name="tg_smart_fixed_menu" value="1"/>
      <input type="hidden" id="tg_sidebar_sticky" name="tg_sidebar_sticky" value="1"/>
      <input type="hidden" id="pp_topbar" name="pp_topbar" value="0"/>
      <input type="hidden" id="post_client_column" name="post_client_column" value="4"/>
      <input type="hidden" id="pp_back" name="pp_back" value="Back"/>
      <input type="hidden" id="pp_page_title_img_blur" name="pp_page_title_img_blur" value=""/>
      <input type="hidden" id="tg_portfolio_filterable_link" name="tg_portfolio_filterable_link" value=""/>
      <input type="hidden" id="tg_flow_enable_reflection" name="tg_flow_enable_reflection" value=""/>
      <input type="hidden" id="tg_lightbox_skin" name="tg_lightbox_skin" value="metro-black"/>
      <input type="hidden" id="tg_lightbox_thumbnails" name="tg_lightbox_thumbnails" value="horizontal"/>
      <input type="hidden" id="tg_lightbox_thumbnails_display" name="tg_lightbox_thumbnails_display" value="1"/>
      <input type="hidden" id="tg_lightbox_opacity" name="tg_lightbox_opacity" value="0.8"/>
      <input type="hidden" id="tg_cart_url" name="tg_cart_url" value="../../cart/index.html"/>
      <input type="hidden" id="tg_live_builder" name="tg_live_builder" value="0"/>
      <input type="hidden" id="pp_footer_style" name="pp_footer_style" value="3"/>
      <!-- Begin mobile menu -->
      <a id="close_mobile_menu" href="javascript:;"></a>
      <div class="mobile_menu_wrapper">
         <a id="mobile_menu_close" href="javascript:;" class="button"><span class="ti-close"></span></a>
         <div class="mobile_menu_content">
            <div class="menu-main-menu-container">
               <ul id="mobile_main_menu" class="mobile_main_nav">
                  <li id="menu-item-11" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-home menu-item-has-children menu-item-11">
                     <a href="../../index.html">Home</a>
                     <ul class="sub-menu">
                        <li id="menu-item-3125" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-3125"><a href="../../index.html">Home 1 – Background Image</a></li>
                        <li id="menu-item-3124" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3124"><a href="../../home-2/index.html">Home 2 – Youtube Video</a></li>
                        <li id="menu-item-3148" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3148"><a href="../../home-3-google-inspired/index.html">Home 3 – Google Inspired</a></li>
                        <li id="menu-item-3152" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3152"><a href="../../home-4-travel-site/index.html">Home 4 – Travel Site</a></li>
                     </ul>
                  </li>
                  <li id="menu-item-12" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-12">
                     <a href="index.html#">Tours</a>
                     <ul class="sub-menu">
                        <li id="menu-item-198" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-198">
                           <a href="../tour-3-columns-classic/index.html">Tour Classic Fullwidth</a>
                           <ul class="sub-menu">
                              <li id="menu-item-213" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-213"><a href="../tour-2-columns-classic/index.html">2 Columns</a></li>
                              <li id="menu-item-199" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-199"><a href="../tour-3-columns-classic/index.html">3 Columns</a></li>
                              <li id="menu-item-210" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-210"><a href="../tour-4-columns-classic/index.html">4 Columns</a></li>
                           </ul>
                        </li>
                        <li id="menu-item-230" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-230">
                           <a href="../tour-2-columns-classic-right-sidebar/index.html">Tour Classic Sidebar</a>
                           <ul class="sub-menu">
                              <li id="menu-item-231" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-231"><a href="../tour-2-columns-classic-right-sidebar/index.html">Right Sidebar</a></li>
                              <li id="menu-item-234" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-234"><a href="../tour-2-columns-classic-left-sidebar/index.html">Left Sidebar</a></li>
                           </ul>
                        </li>
                        <li id="menu-item-237" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-237">
                           <a href="../tour-3-columns-grid/index.html">Tour Grid Fullwidth</a>
                           <ul class="sub-menu">
                              <li id="menu-item-241" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-241"><a href="../tour-2-columns-grid/index.html">2 Columns</a></li>
                              <li id="menu-item-238" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-238"><a href="../tour-3-columns-grid/index.html">3 Columns</a></li>
                              <li id="menu-item-244" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-244"><a href="../tour-4-columns-grid/index.html">4 Columns</a></li>
                           </ul>
                        </li>
                        <li id="menu-item-247" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-247">
                           <a href="../tour-grid-right-sidebar/index.html">Tour Grid Sidebar</a>
                           <ul class="sub-menu">
                              <li id="menu-item-248" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-248"><a href="../tour-grid-right-sidebar/index.html">Right Sidebar</a></li>
                              <li id="menu-item-253" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-253"><a href="../tour-grid-left-sidebar/index.html">Left Sidebar</a></li>
                           </ul>
                        </li>
                        <li id="menu-item-256" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-256">
                           <a href="../tour-list-right-sidebar/index.html">Tour List Sidebar</a>
                           <ul class="sub-menu">
                              <li id="menu-item-257" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-257"><a href="../tour-list-right-sidebar/index.html">Right Sidebar</a></li>
                              <li id="menu-item-260" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-260"><a href="../tour-list-left-sidebar/index.html">Left Sidebar</a></li>
                           </ul>
                        </li>
                        <li id="menu-item-261" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-261">
                           <a href="../tour-3-columns-grid/index.html">Tour Header Type</a>
                           <ul class="sub-menu">
                              <li id="menu-item-262" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-262"><a href="../tour-3-columns-grid/index.html">Featured Image</a></li>
                              <li id="menu-item-265" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-265"><a href="../tour-3-columns-video-header/index.html">Video</a></li>
                           </ul>
                        </li>
                     </ul>
                  </li>
                  <li id="menu-item-200" class="menu-item menu-item-type-post_type menu-item-object-tour current-menu-ancestor current-menu-parent menu-item-has-children menu-item-200">
                     <a href="../the-new-california/index.html">Booking</a>
                     <ul class="sub-menu">
                        <li id="menu-item-202" class="menu-item menu-item-type-post_type menu-item-object-tour menu-item-202"><a href="../the-new-california/index.html">Booking Form + Sub Tour Date</a></li>
                        <li id="menu-item-314" class="menu-item menu-item-type-post_type menu-item-object-tour menu-item-314"><a href="../niko-trip/index.html">Booking Form + Custom Date</a></li>
                        <li id="menu-item-204" class="menu-item menu-item-type-post_type menu-item-object-tour menu-item-204"><a href="../swiss-alps-trip/index.html">Booking + Online Payment Support</a></li>
                        <li id="menu-item-276" class="menu-item menu-item-type-post_type menu-item-object-tour menu-item-276"><a href="../5-lake-of-fuji-san/index.html">Booking + Affiliate Tour</a></li>
                        <li id="menu-item-205" class="menu-item menu-item-type-post_type menu-item-object-tour current-menu-item menu-item-205"><a href="index.html">Standard Background Header</a></li>
                        <li id="menu-item-201" class="menu-item menu-item-type-post_type menu-item-object-tour menu-item-201"><a href="../great-britain-travel/index.html">Video Background Header</a></li>
                     </ul>
                  </li>
                  <li id="menu-item-13" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-13">
                     <a href="index.html#">Destinations</a>
                     <ul class="sub-menu">
                        <li id="menu-item-299" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-299"><a href="../../destination-fullwidth/index.html">Destination Fullwidth</a></li>
                        <li id="menu-item-311" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-311"><a href="../../destination-video-header/index.html">Destination + Video Header</a></li>
                        <li id="menu-item-303" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-303"><a href="../../destination-right-sidebar/index.html">Destination Right Sidebar</a></li>
                        <li id="menu-item-307" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-307"><a href="../../destination-left-sidebar/index.html">Destination Left Sidebar</a></li>
                        <li id="menu-item-286" class="menu-item menu-item-type-post_type menu-item-object-destination menu-item-286"><a href="../../destination/venice/index.html">Single Destination</a></li>
                        <li id="menu-item-283" class="menu-item menu-item-type-post_type menu-item-object-destination menu-item-283"><a href="../../destination/paris/index.html">Single Destination + Video</a></li>
                     </ul>
                  </li>
                  <li id="menu-item-14" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-14">
                     <a href="index.html#">Pages</a>
                     <ul class="sub-menu">
                        <li id="menu-item-2468" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2468"><a href="../../about-us/index.html">About Us</a></li>
                        <li id="menu-item-3093" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3093"><a href="../../contact-us/index.html">Contact Us</a></li>
                        <li id="menu-item-323" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-323"><a href="../../faqs/index.html">FAQs</a></li>
                        <li id="menu-item-313" class="menu-item menu-item-type-post_type menu-item-object-galleries menu-item-313"><a href="../../galleries/gallery/index.html">Gallery</a></li>
                        <li id="menu-item-2456" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2456"><a href="../../page-fullwidth/index.html">Page Fullwidth</a></li>
                        <li id="menu-item-2460" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2460"><a href="../../page-video-header/index.html">Page + Video Background Header</a></li>
                        <li id="menu-item-2455" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2455"><a href="../../page-right-sidebar/index.html">Page Right Sidebar</a></li>
                        <li id="menu-item-2454" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2454"><a href="../../page-left-sidebar/index.html">Page Left Sidebar</a></li>
                     </ul>
                  </li>
                  <li id="menu-item-15" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-15">
                     <a href="index.html#">Blog</a>
                     <ul class="sub-menu">
                        <li id="menu-item-94" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-94"><a href="../../blog/blog-right-sidebar/index.html">Blog Right Sidebar</a></li>
                        <li id="menu-item-98" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-98"><a href="../../blog/blog-left-sidebar/index.html">Blog Left Sidebar</a></li>
                        <li id="menu-item-102" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-102"><a href="../../blog/blog-fullwidth/index.html">Blog Fullwidth</a></li>
                        <li id="menu-item-106" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-106"><a href="../../blog/blog-grid-right-sidebar/index.html">Blog Grid Right Sidebar</a></li>
                        <li id="menu-item-110" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-110"><a href="../../blog/blog-grid-left-sidebar/index.html">Blog Grid Left Sidebar</a></li>
                        <li id="menu-item-114" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-114"><a href="../../blog/blog-grid-fullwidth/index.html">Blog Grid Fullwidth</a></li>
                        <li id="menu-item-120" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-120"><a href="../../blog/blog-full-grid-right-sidebar/index.html">Blog Full + Grid Right Sidebar</a></li>
                        <li id="menu-item-124" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-124"><a href="../../blog/blog-full-grid-left-sidebar/index.html">Blog Full + Grid Left Sidebar</a></li>
                        <li id="menu-item-128" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-128"><a href="../../blog/blog-full-grid-fullwidth/index.html">Blog Full + Grid Fullwidth</a></li>
                     </ul>
                  </li>
                  <li id="menu-item-16" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-16">
                     <a href="index.html#">Shortcodes</a>
                     <ul class="sub-menu">
                        <li id="menu-item-342" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-342"><a href="../../shortcodes/accordion-toggles/index.html">Accordion &#038; Toggles</a></li>
                        <li id="menu-item-348" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-348"><a href="../../shortcodes/alert-boxes/index.html">Alert Boxes</a></li>
                        <li id="menu-item-353" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-353"><a href="../../shortcodes/animated-content/index.html">Animated Content</a></li>
                        <li id="menu-item-360" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-360"><a href="../../shortcodes/buttons-social-icons/index.html">Buttons &#038; Social Icons</a></li>
                        <li id="menu-item-366" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-366"><a href="../../shortcodes/columns/index.html">Columns</a></li>
                        <li id="menu-item-376" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-376"><a href="../../shortcodes/google-maps/index.html">Google Maps</a></li>
                        <li id="menu-item-381" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-381"><a href="../../shortcodes/image-frame-animation/index.html">Image Frame &#038; Animation</a></li>
                        <li id="menu-item-389" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-389"><a href="../../shortcodes/image-teasers/index.html">Image Teasers</a></li>
                        <li id="menu-item-394" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-394"><a href="../../shortcodes/pricing-tables/index.html">Pricing Tables</a></li>
                        <li id="menu-item-2421" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2421"><a href="../../shortcodes/tabs/index.html">Tabs</a></li>
                     </ul>
                  </li>
                  <li id="menu-item-2442" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-2442">
                     <a href="../../shop/index.html">Shop</a>
                     <ul class="sub-menu">
                        <li id="menu-item-2443" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2443"><a href="../../shop/index.html">Shop Fullwidth</a></li>
                        <li id="menu-item-2444" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2444"><a href="../../shop/index-sidebar=1.html">Shop Sidebar</a></li>
                        <li id="menu-item-2445" class="menu-item menu-item-type-post_type menu-item-object-product menu-item-2445"><a href="../../shop/beach-shoe/index.html">Single Product Fullwidth</a></li>
                        <li id="menu-item-2462" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2462"><a href="../../shop/safety-set/index-sidebar=1.html">Single Product With Sidebar</a></li>
                     </ul>
                  </li>
               </ul>
            </div>
            <!-- Begin side menu sidebar -->
            <div class="page_content_wrapper">
               <div class="sidebar_wrapper">
                  <div class="sidebar">
                     <div class="content">
                        <ul class="sidebar_widget">
                           <li id="grandtour_tour_posts-10" class="widget Grandtour_Tour_Posts">
                              <div class="one gallery1 grid static filterable portfolio_type themeborder" style="background-image:url('../../wp-content/uploads/2016/12/pexels-photo-26689-700x466.jpg');">
                                 <a class="tour_image" href="../colorful-singapore/index.html"></a>   
                                 <div class="portfolio_info_wrapper">
                                    <div class="tour_price has_discount">
                                       <span class="normal_price">
                                       $2,000                           </span>
                                       $1,700                                             
                                    </div>
                                    <h5>Colorful Singapore</h5>
                                    <div class="tour_attribute_wrapper">
                                       <div class="tour_attribute_rating">
                                          <div class="br-theme-fontawesome-stars-o">
                                             <div class="br-widget">
                                                <a href="javascript:;" class="br-selected"></a><a href="javascript:;" class="br-selected"></a><a href="javascript:;" class="br-selected"></a><a href="javascript:;" class="br-selected"></a><a href="javascript:;"></a>                               
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <br class="clear"/>
                              <div class="one gallery1 grid static filterable portfolio_type themeborder" style="background-image:url('../../wp-content/uploads/2016/12/pexels-photo-115070-700x466.jpeg');">
                                 <a class="tour_image" href="../hong-kong/index.html"></a>   
                                 <div class="portfolio_info_wrapper">
                                    <div class="tour_price has_discount">
                                       <span class="normal_price">
                                       $3,000                           </span>
                                       $2,400                                             
                                    </div>
                                    <h5>Hong Kong</h5>
                                    <div class="tour_attribute_wrapper">
                                       <div class="tour_attribute_rating">
                                          <div class="br-theme-fontawesome-stars-o">
                                             <div class="br-widget">
                                                <a href="javascript:;" class="br-selected"></a><a href="javascript:;" class="br-selected"></a><a href="javascript:;" class="br-selected"></a><a href="javascript:;"></a><a href="javascript:;"></a>                                 
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <br class="clear"/>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
            <!-- End side menu sidebar -->
            <div class="social_wrapper">
               <ul>
                  <li class="facebook"><a target="_blank" href="index.html#"><i class="fa fa-facebook-official"></i></a></li>
                  <li class="twitter"><a target="_blank" href="http://twitter.com/#"><i class="fa fa-twitter"></i></a></li>
                  <li class="youtube"><a target="_blank" title="Youtube" href="index.html#"><i class="fa fa-youtube"></i></a></li>
                  <li class="pinterest"><a target="_blank" title="Pinterest" href="http://pinterest.com/#"><i class="fa fa-pinterest"></i></a></li>
                  <li class="instagram"><a target="_blank" title="Instagram" href="http://instagram.com/theplanetd"><i class="fa fa-instagram"></i></a></li>
               </ul>
            </div>
         </div>
      </div>
      <!-- End mobile menu -->
      <!-- Begin template wrapper -->
      <div id="wrapper" class="hasbg transparent">
         <div class="header_style_wrapper">
            <!-- End top bar -->
            <div class="top_bar hasbg">
               <div class="standard_wrapper">
                  <!-- Begin logo -->
                  <div id="logo_wrapper">
                     <div id="logo_normal" class="logo_container">
                        <div class="logo_align">
                           <a id="custom_logo" class="logo_wrapper hidden" href="../../index.html">
                           <img src="../../wp-content/themes/grandtour/images/logo@2x.png" alt="" width="92" height="22"/>
                           </a>
                        </div>
                     </div>
                     <div id="logo_transparent" class="logo_container">
                        <div class="logo_align">
                           <a id="custom_logo_transparent" class="logo_wrapper default" href="../../index.html">
                           <img src="../../wp-content/themes/grandtour/images/logo@2x_white.png" alt="" width="92" height="22"/>
                           </a>
                        </div>
                     </div>
                     <!-- End logo -->
                     <div id="menu_wrapper">
                        <div id="nav_wrapper">
                           <div class="nav_wrapper_inner">
                              <div id="menu_border_wrapper">
                                 <div class="menu-main-menu-container">
                                    <ul id="main_menu" class="nav">
                                       <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-home menu-item-has-children arrow menu-item-11">
                                          <a href="../../index.html">Home</a>
                                          <ul class="sub-menu">
                                             <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-3125"><a href="../../index.html">Home 1 – Background Image</a></li>
                                             <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3124"><a href="../../home-2/index.html">Home 2 – Youtube Video</a></li>
                                             <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3148"><a href="../../home-3-google-inspired/index.html">Home 3 – Google Inspired</a></li>
                                             <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3152"><a href="../../home-4-travel-site/index.html">Home 4 – Travel Site</a></li>
                                          </ul>
                                       </li>
                                       <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children arrow menu-item-12">
                                          <a href="index.html#">Tours</a>
                                          <ul class="sub-menu">
                                             <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children arrow menu-item-198">
                                                <a href="../tour-3-columns-classic/index.html">Tour Classic Fullwidth</a>
                                                <ul class="sub-menu">
                                                   <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-213"><a href="../tour-2-columns-classic/index.html">2 Columns</a></li>
                                                   <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-199"><a href="../tour-3-columns-classic/index.html">3 Columns</a></li>
                                                   <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-210"><a href="../tour-4-columns-classic/index.html">4 Columns</a></li>
                                                </ul>
                                             </li>
                                             <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children arrow menu-item-230">
                                                <a href="../tour-2-columns-classic-right-sidebar/index.html">Tour Classic Sidebar</a>
                                                <ul class="sub-menu">
                                                   <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-231"><a href="../tour-2-columns-classic-right-sidebar/index.html">Right Sidebar</a></li>
                                                   <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-234"><a href="../tour-2-columns-classic-left-sidebar/index.html">Left Sidebar</a></li>
                                                </ul>
                                             </li>
                                             <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children arrow menu-item-237">
                                                <a href="../tour-3-columns-grid/index.html">Tour Grid Fullwidth</a>
                                                <ul class="sub-menu">
                                                   <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-241"><a href="../tour-2-columns-grid/index.html">2 Columns</a></li>
                                                   <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-238"><a href="../tour-3-columns-grid/index.html">3 Columns</a></li>
                                                   <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-244"><a href="../tour-4-columns-grid/index.html">4 Columns</a></li>
                                                </ul>
                                             </li>
                                             <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children arrow menu-item-247">
                                                <a href="../tour-grid-right-sidebar/index.html">Tour Grid Sidebar</a>
                                                <ul class="sub-menu">
                                                   <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-248"><a href="../tour-grid-right-sidebar/index.html">Right Sidebar</a></li>
                                                   <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-253"><a href="../tour-grid-left-sidebar/index.html">Left Sidebar</a></li>
                                                </ul>
                                             </li>
                                             <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children arrow menu-item-256">
                                                <a href="../tour-list-right-sidebar/index.html">Tour List Sidebar</a>
                                                <ul class="sub-menu">
                                                   <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-257"><a href="../tour-list-right-sidebar/index.html">Right Sidebar</a></li>
                                                   <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-260"><a href="../tour-list-left-sidebar/index.html">Left Sidebar</a></li>
                                                </ul>
                                             </li>
                                             <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children arrow menu-item-261">
                                                <a href="../tour-3-columns-grid/index.html">Tour Header Type</a>
                                                <ul class="sub-menu">
                                                   <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-262"><a href="../tour-3-columns-grid/index.html">Featured Image</a></li>
                                                   <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-265"><a href="../tour-3-columns-video-header/index.html">Video</a></li>
                                                </ul>
                                             </li>
                                          </ul>
                                       </li>
                                       <li class="menu-item menu-item-type-post_type menu-item-object-tour current-menu-ancestor current-menu-parent menu-item-has-children arrow menu-item-200">
                                          <a href="../the-new-california/index.html">Booking</a>
                                          <ul class="sub-menu">
                                             <li class="menu-item menu-item-type-post_type menu-item-object-tour menu-item-202"><a href="../the-new-california/index.html">Booking Form + Sub Tour Date</a></li>
                                             <li class="menu-item menu-item-type-post_type menu-item-object-tour menu-item-314"><a href="../niko-trip/index.html">Booking Form + Custom Date</a></li>
                                             <li class="menu-item menu-item-type-post_type menu-item-object-tour menu-item-204"><a href="../swiss-alps-trip/index.html">Booking + Online Payment Support</a></li>
                                             <li class="menu-item menu-item-type-post_type menu-item-object-tour menu-item-276"><a href="../5-lake-of-fuji-san/index.html">Booking + Affiliate Tour</a></li>
                                             <li class="menu-item menu-item-type-post_type menu-item-object-tour current-menu-item menu-item-205"><a href="index.html">Standard Background Header</a></li>
                                             <li class="menu-item menu-item-type-post_type menu-item-object-tour menu-item-201"><a href="../great-britain-travel/index.html">Video Background Header</a></li>
                                          </ul>
                                       </li>
                                       <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children arrow menu-item-13">
                                          <a href="index.html#">Destinations</a>
                                          <ul class="sub-menu">
                                             <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-299"><a href="../../destination-fullwidth/index.html">Destination Fullwidth</a></li>
                                             <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-311"><a href="../../destination-video-header/index.html">Destination + Video Header</a></li>
                                             <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-303"><a href="../../destination-right-sidebar/index.html">Destination Right Sidebar</a></li>
                                             <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-307"><a href="../../destination-left-sidebar/index.html">Destination Left Sidebar</a></li>
                                             <li class="menu-item menu-item-type-post_type menu-item-object-destination menu-item-286"><a href="../../destination/venice/index.html">Single Destination</a></li>
                                             <li class="menu-item menu-item-type-post_type menu-item-object-destination menu-item-283"><a href="../../destination/paris/index.html">Single Destination + Video</a></li>
                                          </ul>
                                       </li>
                                       <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children arrow menu-item-14">
                                          <a href="index.html#">Pages</a>
                                          <ul class="sub-menu">
                                             <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2468"><a href="../../about-us/index.html">About Us</a></li>
                                             <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3093"><a href="../../contact-us/index.html">Contact Us</a></li>
                                             <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-323"><a href="../../faqs/index.html">FAQs</a></li>
                                             <li class="menu-item menu-item-type-post_type menu-item-object-galleries menu-item-313"><a href="../../galleries/gallery/index.html">Gallery</a></li>
                                             <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2456"><a href="../../page-fullwidth/index.html">Page Fullwidth</a></li>
                                             <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2460"><a href="../../page-video-header/index.html">Page + Video Background Header</a></li>
                                             <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2455"><a href="../../page-right-sidebar/index.html">Page Right Sidebar</a></li>
                                             <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2454"><a href="../../page-left-sidebar/index.html">Page Left Sidebar</a></li>
                                          </ul>
                                       </li>
                                       <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children arrow menu-item-15">
                                          <a href="index.html#">Blog</a>
                                          <ul class="sub-menu">
                                             <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-94"><a href="../../blog/blog-right-sidebar/index.html">Blog Right Sidebar</a></li>
                                             <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-98"><a href="../../blog/blog-left-sidebar/index.html">Blog Left Sidebar</a></li>
                                             <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-102"><a href="../../blog/blog-fullwidth/index.html">Blog Fullwidth</a></li>
                                             <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-106"><a href="../../blog/blog-grid-right-sidebar/index.html">Blog Grid Right Sidebar</a></li>
                                             <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-110"><a href="../../blog/blog-grid-left-sidebar/index.html">Blog Grid Left Sidebar</a></li>
                                             <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-114"><a href="../../blog/blog-grid-fullwidth/index.html">Blog Grid Fullwidth</a></li>
                                             <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-120"><a href="../../blog/blog-full-grid-right-sidebar/index.html">Blog Full + Grid Right Sidebar</a></li>
                                             <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-124"><a href="../../blog/blog-full-grid-left-sidebar/index.html">Blog Full + Grid Left Sidebar</a></li>
                                             <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-128"><a href="../../blog/blog-full-grid-fullwidth/index.html">Blog Full + Grid Fullwidth</a></li>
                                          </ul>
                                       </li>
                                       <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children arrow menu-item-16">
                                          <a href="index.html#">Shortcodes</a>
                                          <ul class="sub-menu">
                                             <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-342"><a href="../../shortcodes/accordion-toggles/index.html">Accordion &#038; Toggles</a></li>
                                             <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-348"><a href="../../shortcodes/alert-boxes/index.html">Alert Boxes</a></li>
                                             <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-353"><a href="../../shortcodes/animated-content/index.html">Animated Content</a></li>
                                             <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-360"><a href="../../shortcodes/buttons-social-icons/index.html">Buttons &#038; Social Icons</a></li>
                                             <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-366"><a href="../../shortcodes/columns/index.html">Columns</a></li>
                                             <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-376"><a href="../../shortcodes/google-maps/index.html">Google Maps</a></li>
                                             <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-381"><a href="../../shortcodes/image-frame-animation/index.html">Image Frame &#038; Animation</a></li>
                                             <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-389"><a href="../../shortcodes/image-teasers/index.html">Image Teasers</a></li>
                                             <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-394"><a href="../../shortcodes/pricing-tables/index.html">Pricing Tables</a></li>
                                             <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2421"><a href="../../shortcodes/tabs/index.html">Tabs</a></li>
                                          </ul>
                                       </li>
                                       <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children arrow menu-item-2442">
                                          <a href="../../shop/index.html">Shop</a>
                                          <ul class="sub-menu">
                                             <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2443"><a href="../../shop/index.html">Shop Fullwidth</a></li>
                                             <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2444"><a href="../../shop/index-sidebar=1.html">Shop Sidebar</a></li>
                                             <li class="menu-item menu-item-type-post_type menu-item-object-product menu-item-2445"><a href="../../shop/beach-shoe/index.html">Single Product Fullwidth</a></li>
                                             <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2462"><a href="../../shop/safety-set/index-sidebar=1.html">Single Product With Sidebar</a></li>
                                          </ul>
                                       </li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                           <!-- Begin right corner buttons -->
                           <div id="logo_right_button">
                              <!-- Begin side menu -->
                              <a href="javascript:;" id="mobile_nav_icon"><span class="ti-menu"></span></a>
                              <!-- End side menu -->
                              <div class="header_cart_wrapper">
                                 <a href="../../cart/index.html" title="View Cart"><span class="ti-shopping-cart"></span></a>
                              </div>
                           </div>
                           <!-- End right corner buttons -->
                        </div>
                        <!-- End main nav -->
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div id="page_caption" class="hasbg parallax  "  style="height: 350px; background-image:url('../../wp-content/uploads/2016/12/pexels-photo-211051.jpeg');" >
            <div class="single_tour_header_content">
               <div class="standard_wrapper">
                  <!--<a href="../../wp-content/uploads/2016/12/pexels-photo-24377.jpg" id="single_tour_gallery_open" class="button fancy-gallery"><span class="ti-camera"></span>View Photos</a>
                  <div style="display:none;">
                     <a id="single_tour_gallery_image1" href="../../wp-content/uploads/2016/12/pexels-photo-96420.jpeg" title="The road to success and the road to failure are almost exactly the same" class="fancy-gallery"></a>
                     <a id="single_tour_gallery_image2" href="../../wp-content/uploads/2016/12/Tokyo_Dollarphotoclub_72848283-copy.jpg" title="The road to success and the road to failure are almost exactly the same" class="fancy-gallery"></a>
                     <a id="single_tour_gallery_image3" href="../../wp-content/uploads/2016/12/venice-WBEUROCITIES16.jpg" title="The road to success and the road to failure are almost exactly the same" class="fancy-gallery"></a>
                     <a id="single_tour_gallery_image4" href="../../wp-content/uploads/2016/12/pexels-photo-197657.jpeg" title="The road to success and the road to failure are almost exactly the same" class="fancy-gallery"></a>
                     <a id="single_tour_gallery_image5" href="../../wp-content/uploads/2016/12/bf1202aedf2c5b6a57d379575619a488.jpg" title="The road to success and the road to failure are almost exactly the same" class="fancy-gallery"></a>
                     <a id="single_tour_gallery_image6" href="../../wp-content/uploads/2016/12/pexels-photo-24484.jpg" title="The road to success and the road to failure are almost exactly the same" class="fancy-gallery"></a>
                     <a id="single_tour_gallery_image7" href="../../wp-content/uploads/2016/12/39267772-prague-wallpapers.jpg" title="The road to success and the road to failure are almost exactly the same" class="fancy-gallery"></a>
                  </div>
                  <a href="index.html#video_review180" id="single_tour_video_preview_open" class="button" data-type="inline"><span class="ti-control-play"></span>Video Preview</a>

                  <div id="video_review180" class="tour_video_preview_wrapper" style="display:none;"><iframe width="1280" height="720" src="https://www.youtube.com/embed/UaF9otkOXXY" frameborder="0" allowfullscreen></iframe></div>
                  -->
                  <div class="single_tour_header_price">
                     <div class="single_tour_price">
                        $5,000                           
                     </div>
                     <div class="single_tour_per_person">
                        Por Persona         
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- Begin content -->
         <!-- BD conexion START -->
         <?php

          
                     $query = "SELECT * FROM tour WHERE id = '$id'";
                        $resultado2 = $link->query($query);
                        while($row2 = $resultado2->fetch_assoc())
                      {
                        
                     

         ?>

         <!-- BD conexion FIN -->
         <div id="page_content_wrapper" class="hasbg ">
            <div class="inner">
               <!-- Begin main content -->
               <div class="inner_wrapper">
                  <div class="sidebar_content">
                     <h1><?php echo $row2['nombre']; ?></h1>
                     <div class="page_tagline">
                        <?php 
                        function obtenerFechaEnLetra($fecha){
                           $dia= conocerDiaSemanaFecha($fecha);
                           $num = date("j", strtotime($fecha));
                           $anno = date("Y", strtotime($fecha));
                           $mes = array('enero', 'febrero', 'marzo', 'abril', 'mayo', 'junio', 'julio', 'agosto', 'septiembre', 'octubre', 'noviembre', 'diciembre');
                           $mes = $mes[(date('m', strtotime($fecha))*1)-1];
                           return $dia.', '.$num.' de '.$mes.' del '.$anno;
                        
                        }
                         
                        function conocerDiaSemanaFecha($fecha) {
                            $dias = array('Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado');
                            $dia = $dias[date('w', strtotime($fecha))];
                            return $dia;
                        }

                        $fecha = $row2['fecha_salida'];
                        echo "Sale el ".obtenerFechaEnLetra($fecha);  


                        echo " Desde: ".$row2['origen']." - Va a: ".$row2['destino'] ?>            
                     </div>
                     <div class="single_tour_attribute_wrapper themeborder">
                        <div class="one_fourth">
                           <div class="tour_attribute_icon ti-time"></div>
                           <div class="tour_attribute_content">
                           <?php echo "Faltan: "?>
                           <?php 
                           $timezone  = -5;
                           $fecha_actual = gmdate("Y/m/j", time() + 3600*($timezone+date("I")));
                           $fecha_salida_viaje = $row2['vigencia'];
                           $dias = (strtotime($fecha_salida_viaje)-strtotime($fecha_actual))/86400;
                           $dias    = abs($dias); $dias = floor($dias);    
                           echo $dias." Días";
                             ?>          
                           </div>
                        </div>
                        <div class="one_fourth">
                           <div class="tour_attribute_icon ti-id-badge"></div>
                           <div class="tour_attribute_content">
                              <?php echo $row2['hora_salida']; ?>                        
                           </div>
                        </div>
                        <div class="one_fourth">
                           <div class="tour_attribute_icon ti-calendar"></div>
                           <div class="tour_attribute_content">
                           <?php echo $row2['hora_salida']; ?> 
                           </div>
                        </div>
                        <div class="one_fourth last">
                           <div class="tour_attribute_icon ti-user"></div>
                           <div class="tour_attribute_content">
                              <?php echo "Cupos ".$row2['cupos']?>                           
                           </div>
                        </div>
                     </div>
                     <br class="clear"/>
                     <div class="single_tour_content">
                        <h4 class="p1">Dia 1</h4>
                        <p class="p1">Meh synth Schlitz, tempor duis single-origin coffee ea next level ethnic fingerstache fanny pack nostrud. Photo booth anim 8-bit hella, PBR 3 wolf moon beard Helvetica. Salvia esse nihil, flexitarian Truffaut synth art party deep v chillwave. Seitan High Life reprehenderit consectetur cupidatat kogi. Et leggings fanny pack, elit bespoke vinyl art party Pitchfork selfies master cleanse.</p>
                        
                           <img style="border-radius: 2%;" class="wp-image-78 size-large" src="<?php echo "../../logic/".$row2['foto']; ?>" width="1024" height="576" />
                           
                        
                        
                     </div>
                     <ul class="single_tour_departure_wrapper themeborder">
                        <li>
                           <div class="single_tour_departure_title">Sale desde</div>
                           <div class="single_tour_departure_content"><?php echo $row2['origen']." a las ".$row2['hora_salida']; ?></div>
                        </li>
                        <li>
                           <div class="single_tour_departure_title">Llega a</div>
                           <div class="single_tour_departure_content"><?php echo $row2['destino']; if($row2['hora_llegada']==NULL){}else{echo " a las ".$row2['hora_llegada'];} ?></div>
                        </li>
                        <li>
                           <div class="single_tour_departure_title">Duración</div>
                           <div class="single_tour_departure_content">
                              
                              <?php 
                           
                           $fecha_salida = $row2['fecha_salida'];
                           $fecha_llegada = $row2['fecha_llegada'];
                           $dias = (strtotime($fecha_salida)-strtotime($fecha_llegada))/86400;
                           $dias    = abs($dias); $dias = floor($dias);    
                           echo $dias." Días";
                             ?> 

                           </div>
                        </li>
                        <li>
                           <div class="single_tour_departure_title">Incluye</div>
                           <div class="single_tour_departure_content">
                              <div class="one_half ">
                                 <span class="ti-check"></span>Tarifa Aerea                    
                              </div>
                              <div class="one_half last">
                                 <span class="ti-check"></span>Transporte local                   
                              </div>
                              <div class="one_half ">
                                 <span class="ti-check"></span>Alojamiento 5 estrellas                    
                              </div>
                              <div class="one_half last">
                                 <span class="ti-check"></span>Guia Profesional                     
                              </div>
                           </div>
                        </li>
                        <li>
                           <div class="single_tour_departure_title">No Incluye</div>
                           <div class="single_tour_departure_content">
                              <div class="one_half ">
                                 <span class="ti-close"></span>Impuestos de Salida                     
                              </div>
                              <div class="one_half last">
                                 <span class="ti-close"></span>Cuotas de inscripcion                    
                              </div>
                           </div>
                        </li>
                     </ul>
                     <div class="fullwidth_comment_wrapper sidebar">
                        <br>
                     <br><h3 class="comment_title">4 Reseñas</span></h3>
                        <div class="avg_comment_rating_wrapper themeborder">
                           <div class="comment_rating_wrapper">
                              <div class="comment_rating_label">Alojamiento</div>
                              <div class="br-theme-fontawesome-stars-o">
                                 <div class="br-widget"><a href="javascript:;" class="br-selected"></a><a href="javascript:;" class="br-selected"></a><a href="javascript:;" class="br-selected"></a><a href="javascript:;" class="br-selected"></a><a href="javascript:;"></a></div>
                              </div>
                           </div>
                           <div class="comment_rating_wrapper">
                              <div class="comment_rating_label">Destino</div>
                              <div class="br-theme-fontawesome-stars-o">
                                 <div class="br-widget"><a href="javascript:;" class="br-selected"></a><a href="javascript:;" class="br-selected"></a><a href="javascript:;" class="br-selected"></a><a href="javascript:;" class="br-selected"></a><a href="javascript:;"></a></div>
                              </div>
                           </div>
                           <div class="comment_rating_wrapper">
                              <div class="comment_rating_label">Comidas</div>
                              <div class="br-theme-fontawesome-stars-o">
                                 <div class="br-widget"><a href="javascript:;" class="br-selected"></a><a href="javascript:;" class="br-selected"></a><a href="javascript:;" class="br-selected"></a><a href="javascript:;" class="br-selected"></a><a href="javascript:;"></a></div>
                              </div>
                           </div>
                           <div class="comment_rating_wrapper">
                              <div class="comment_rating_label">Transporte</div>
                              <div class="br-theme-fontawesome-stars-o">
                                 <div class="br-widget"><a href="javascript:;" class="br-selected"></a><a href="javascript:;" class="br-selected"></a><a href="javascript:;" class="br-selected"></a><a href="javascript:;"></a><a href="javascript:;"></a></div>
                              </div>
                           </div>
                           <div class="comment_rating_wrapper">
                              <div class="comment_rating_label">Relacion calidad-precio</div>
                              <div class="br-theme-fontawesome-stars-o">
                                 <div class="br-widget"><a href="javascript:;" class="br-selected"></a><a href="javascript:;" class="br-selected"></a><a href="javascript:;" class="br-selected"></a><a href="javascript:;" class="br-selected"></a><a href="javascript:;"></a></div>
                              </div>
                           </div>
                           <div class="comment_rating_wrapper">
                              <div class="comment_rating_label">General</div>
                              <div class="br-theme-fontawesome-stars-o">
                                 <div class="br-widget"><a href="javascript:;" class="br-selected"></a><a href="javascript:;" class="br-selected"></a><a href="javascript:;" class="br-selected"></a><a href="javascript:;" class="br-selected"></a><a href="javascript:;"></a></div>
                              </div>
                           </div>
                        </div>
                        <div>
                           <a name="comments"></a>
                          
                           <div class="comment" id="comment-55">
                              <div class="gravatar">
                                 <img src="../../wp-content/uploads/2016/12/author2-100x100.jpg" width="60" height="60" alt="Jessica Medina" class="avatar avatar-60 wp-user-avatar wp-user-avatar-60 alignnone photo" />        
                              </div>
                              <div class="right ">
                                 <h7>Jessica Medina</h7>
                                 <div class="comment_date">Deciembre 15, 2016 a las 4:41 pm</div>
                                 <a rel='nofollow' class='comment-reply-link' href='index-replytocom=55.html#respond' onclick='return addComment.moveForm( "comment-55", "55", "respond", "180" )' aria-label='Reply to Jessica Medina'>Reply</a>                 
                                 <div class="comment_text"/>
                                    <p>Foam padding in the insoles leather finest quality staple flat slip-on design pointed toe off-duty shoe. Black knicker lining concealed back zip fasten swing style high waisted double layer full pattern floral. Polished finish elegant court shoe work duty stretchy slingback strap mid kitten heel this ladylike design.</p>
                                    <div class="comment_rating_wrapper">
                                       <div class="comment_rating_label">Accomodation</div>
                                       <div class="br-theme-fontawesome-stars-o">
                                          <div class="br-widget"><a href="javascript:;" class="br-selected"></a><a href="javascript:;" class="br-selected"></a><a href="javascript:;" class="br-selected"></a><a href="javascript:;" class="br-selected"></a><a href="javascript:;"></a></div>
                                       </div>
                                    </div>
                                    <div class="comment_rating_wrapper">
                                       <div class="comment_rating_label">Destino</div>
                                       <div class="br-theme-fontawesome-stars-o">
                                          <div class="br-widget"><a href="javascript:;" class="br-selected"></a><a href="javascript:;" class="br-selected"></a><a href="javascript:;" class="br-selected"></a><a href="javascript:;" class="br-selected"></a><a href="javascript:;" class="br-selected"></a></div>
                                       </div>
                                    </div>
                                    <div class="comment_rating_wrapper">
                                       <div class="comment_rating_label">Comidas</div>
                                       <div class="br-theme-fontawesome-stars-o">
                                          <div class="br-widget"><a href="javascript:;" class="br-selected"></a><a href="javascript:;" class="br-selected"></a><a href="javascript:;" class="br-selected"></a><a href="javascript:;"></a><a href="javascript:;"></a></div>
                                       </div>
                                    </div>
                                    <div class="comment_rating_wrapper">
                                       <div class="comment_rating_label">Transporte</div>
                                       <div class="br-theme-fontawesome-stars-o">
                                          <div class="br-widget"><a href="javascript:;" class="br-selected"></a><a href="javascript:;" class="br-selected"></a><a href="javascript:;" class="br-selected"></a><a href="javascript:;"></a><a href="javascript:;"></a></div>
                                       </div>
                                    </div>
                                    <div class="comment_rating_wrapper">
                                       <div class="comment_rating_label">Relacion calidad-precio</div>
                                       <div class="br-theme-fontawesome-stars-o">
                                          <div class="br-widget"><a href="javascript:;" class="br-selected"></a><a href="javascript:;" class="br-selected"></a><a href="javascript:;" class="br-selected"></a><a href="javascript:;" class="br-selected"></a><a href="javascript:;"></a></div>
                                       </div>
                                    </div>
                                    <div class="comment_rating_wrapper">
                                       <div class="comment_rating_label">General</div>
                                       <div class="br-theme-fontawesome-stars-o">
                                          <div class="br-widget"><a href="javascript:;" class="br-selected"></a><a href="javascript:;" class="br-selected"></a><a href="javascript:;" class="br-selected"></a><a href="javascript:;" class="br-selected"></a><a href="javascript:;"></a></div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <br class="clear"/>
                           </li><!-- #comment-## -->
                        </div>
                        <!-- End of thread -->  
                        <div style="height:10px"></div>
                        <div id="respond" class="comment-respond">
                           <h3 id="reply-title" class="comment-reply-title">Escribe un comentario<small><a rel="nofollow" id="cancel-comment-reply-link" href="index.html#respond" style="display:none;">Cancel reply</a></small></h3>
                           <form action="http://themes.themegoods2.com/grandtour/demo/wp-comments-post.php" method="post" id="commentform" class="comment-form">
                              <p class="comment-notes">
                              <span id="email-notes">Tu direccion de correo electronico no sera publicada.</span> Los campos obligatorios estan marcados con
                              <span class="required">*</span></p>
                              <p class="comment-form-comment">
                              <label for="comment">Comentario</label> 
                              <textarea id="comment" name="comment" cols="45" rows="8" maxlength="65525" aria-required="true" required="required">                                 
                              </textarea></p>
                              <p class="comment-form-author">
                              <label for="author">Nombre <span class="required">*</span></label> 
                              <input id="author" name="author" type="text" value="" size="30" maxlength="245" aria-required='true' required='required' /></p>
                              <p class="comment-form-email">
                              <label for="email">Correo electronico <span class="required">*</span></label> 
                              <input id="email" name="email" type="text" value="" size="30" maxlength="100" aria-describedby="email-notes" aria-required='true' required='required' /></p>
                              <p class="comment-form-url">
                              <label for="url">Pagina web</label> 
                              <input id="url" name="url" type="text" value="" size="30" maxlength="200" /></p>
                              <p class="comment-form-rating">
                                 <label for="accomodation_rating">Alojamiento</label>
                                 <span class="commentratingbox">
                                 <select id="accomodation_rating" name="accomodation_rating">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                 </select>
                              </p>
                              <p class="comment-form-rating">
                                 <label for="destination_rating">Destino</label>
                                 <span class="commentratingbox">
                                 <select id="destination_rating" name="destination_rating">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                 </select>
                              </p>
                              <p class="comment-form-rating">
                                 <label for="meals_rating">Comidas</label>
                                 <span class="commentratingbox">
                                 <select id="meals_rating" name="meals_rating">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                 </select>
                              </p>
                              <p class="comment-form-rating">
                                 <label for="transport_rating">Transporte</label>
                                 <span class="commentratingbox">
                                 <select id="transport_rating" name="transport_rating">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                 </select>
                              </p>
                              <p class="comment-form-rating">
                                 <label for="value_rating">Relacion calidad-precio</label>
                                 <span class="commentratingbox">
                                 <select id="value_rating" name="value_rating">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                 </select>
                              </p>
                              <p class="comment-form-rating">
                                 <label for="overall_rating">General</label>
                                 <span class="commentratingbox">
                                 <select id="overall_rating" name="overall_rating">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                 </select>
                              </p>
                              <script>jQuery(function() {
                                 jQuery("#accomodation_rating, #destination_rating, #meals_rating, #transport_rating, #value_rating, #overall_rating").barrating({
                                    theme: "fontawesome-stars-o",
                                    emptyValue: 0,
                                    allowEmpty: true
                                 });
                                 
                                 jQuery("#accomodation_rating, #destination_rating, #meals_rating, #transport_rating, #value_rating, #overall_rating").barrating("set", 0);
                                 });
                              </script>
                              <p class="form-submit"><input name="submit" type="submit" id="submit" class="submit" value="Publicar comentario" /> <input type='hidden' name='comment_post_ID' value='180' id='comment_post_ID' />
                                 <input type='hidden' name='comment_parent' id='comment_parent' value='0' />
                              </p>
                           </form>
                        </div>
                        <!-- #respond -->
                     </div>
                  </div>
                 
                  <div class="sidebar_wrapper">
                     <div class="sidebar_top"></div>
                     <div class="sidebar">
                        <div class="content">
                           <div class="single_tour_header_price">
                              <div class="single_tour_price">
                                 $5,000                                       
                              </div>
                              <div class="single_tour_per_person">
                                 Por persona                 
                              </div>
                           </div>
                           <div class="single_tour_booking_wrapper themeborder contact_form7">
                              <div role="form"  id="wpcf7-f165-o1">
                                 <?php
                                 $consulta = mysqli_query($link,"SELECT * FROM viajeros WHERE id_tour='$id'");
                                     $total = 0;
                                     while($row = mysqli_fetch_array($consulta))
                                     {
                                       $total = $total + $row['cupos'];
                                     }
                                     
                                     $cupos=$row2['cupos'];
                                     $total2=$row2['cupos']-$total;
                                     ?>

                                 <form action="../logic.php" method="post" class="wpcf7-form">
                                    
                                    <p><label> Nombre<br />
                                       <span class="wpcf7-form-control-wrap your-name"><input type="text" name="nombre" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" <?php if($total>=10)
                                     {print"disabled='disabled'";}?>/></span> </label>
                                    </p>
                                    <p><label> Correo electronico <br />
                                       <span class="wpcf7-form-control-wrap your-email"><input type="email" name="email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email"  <?php if($total>=10)
                                     {print"disabled='disabled'";}?>/></span> </label>
                                    </p>
                                    <p><label> Teléfono<br />
                                       <span class="wpcf7-form-control-wrap tel-729"><input type="tel" name="telefono" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-required wpcf7-validates-as-tel"   <?php if($total>=10)
                                     {print"disabled='disabled'";}?>/></span> </label>
                                    </p>                  
                                    <p><label> Numero de Personas<br>
                                        <span class="wpcf7-form-control-wrap tel-729"><input type="number" name="cupos" value="0" size="40" class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-required wpcf7-validates-as-tel"   min="1" max="<?php echo $total2; ?>"  <?php if($total>=10)
                                     {print"disabled='disabled'";}?>/></span> </label>
                                    </p>
                                     <?php
                                     

                                     if(($total2<=3)&&($total2>0))
                                     {
                                       echo "Quedan solo ".$total2." Cupos";
                                     }

                                     if($total>=10)
                                     {
                                       echo"Tour Cerrado, Ya no quedan cupos ";  
                                     }
                                     else
                                     {
                                       echo "Quedan ".$total2." Cupos";
                                     }

                                     ?>

                                       
                                     <input style="visibility: hidden; display: none" type="text" name="id_tour" value="<?php echo $_REQUEST['id']; ?>">

                                    <p>
                                    <input type="submit" value="Registrarme" <?php if($total>=10)
                                     {print"disabled='disabled'";}?>/>
                                    </p>

                     
                                 </form>


                              </div>


                            
                              <br class="clear"/>
                           </div>
                           <a id="single_tour_share_button" href="javascript:;" class="button ghost themeborder"><span class="ti-email"></span>Compartir este tour</a>
                           <ul class="sidebar_widget">
                              <li id="text-3" class="widget widget_text">
                                 <h2 class="widgettitle">Para mayor informacion</h2>
                                 <div class="textwidget"><span class="ti-mobile" style="margin-right:10px;"></span>3015411825- 3217736762
                                    <br/>
                                    <span class="ti-alarm-clock" style="margin-right:10px;"></span>Lun - Sab 8.00 - 18.00
                                 </div>
                              </li>
                           </ul>
                           
                        </div>
                     </div>
                     <br class="clear"/>
                     <div class="sidebar_bottom"></div>
                  </div>
               </div>
                <?php }
                  ?>
               <!-- End main content -->
               <br class="clear"/>
               <div class="tour_related">
                  <h3 class="sub_title">Ultimos Tours Agregados</h3>

                  <!-- logica tours -->
                  
                  <div id="portfolio_filter_wrapper" class="gallery classic three_cols portfolio-content section content clearfix" data-columns="3">
                     
                     <?php                            
                     $qry=mysqli_query($link,"SELECT * FROM tour ORDER BY id DESC LIMIT 3 ");     
                while($tour = mysqli_fetch_array($qry))                        
                     {
                     
                  ?>
                  <div class="element grid classic3_cols animated2">
                        <div class="one_third gallery3 classic static filterable portfolio_type themeborder" data-id="post-2">                        
                           <a class="tour_image" href="ver.php?id=<?php echo $tour['id'];?>">
                           <?php
                           if(empty($tour['foto']))
                              {
                           ?>
                           <img src="../../tourdefault.jpg" alt="Hong Kong" />
                           <?php } 
                           else 
                           {
                           ?>
                           <img style="height: 250px" src="../../logic/<?php echo $tour['foto']; ?>" alt="Hong Kong" />
                           <?php } ?>

                              <div class="tour_price has_discount">
                                 <span class="normal_price">
                                 $3,000                           </span>
                                 $2,400                                             
                              </div>
                           </a>
                           <div class="portfolio_info_wrapper">
                              <a class="tour_link" href="../../tours/users_tours/ver.php?id=<?php echo $tour['id'];?>">
                                 <h4><?php echo $tour['nombre']; ?></h4>
                              </a>
                              <div class="tour_excerpt">
                                 <p><?php echo "Salida: ".$tour['fecha_salida']." a las ".$tour['hora_salida']; ?></p>
                              </div>
                              <div class="tour_attribute_wrapper">
                                 <div class="tour_attribute_rating">
                                    <!--<div class="br-theme-fontawesome-stars-o">
                                       <div class="br-widget">
                                          <a href="javascript:;" class="br-selected"></a><a href="javascript:;" class="br-selected"></a><a href="javascript:;" class="br-selected"></a><a href="javascript:;"></a><a href="javascript:;"></a>                                 
                                       </div>
                                    </div>-->
                                    <!--<div class="tour_attribute_rating_count">
                                       4&nbsp;
                                       reviews                             
                                    </div>-->
                                 </div>
                                 <div class="tour_attribute_days">
                                    <span class="ti-time"></span>
                                    hace 3&nbsp;días                           
                                 </div>
                              </div>
                              <br class="clear"/>
                           </div>
                        </div>
                     </div>
                     <?php
                  }
                  ?>
                  </div>
                  
               </div> 
            </div>
            <br class="clear"/>
         </div>
         <div id="footer" class=" ">
            <ul class="sidebar_widget three">
               <li id="text-2" class="widget widget_text">
                  <h2 class="widgettitle">Nuestros premios</h2>
                  <div class="textwidget">
                     <p>London is a megalopolis of people, ideas and frenetic energy. The capital and largest city of the United Kingdom.<br />
                        <img src="../../wp-content/uploads/2016/12/awards.png" width="246" height="113" style="margin-top:30px;" alt=""/>
                     </p>
                  </div>
               </li>
               <li id="text-4" class="widget widget_text">
                  <h2 class="widgettitle">Informacion de contacto</h2>
                  <div class="textwidget">
                     <p><span class="ti-mobile" style="margin-right:10px;"></span>3015411825- 3217736762</p>
                     <p><span class="ti-location-pin" style="margin-right:10px;"></span>Popayan-Cauca</p>
                     <p><span class="ti-alarm-clock" style="margin-right:10px;"></span>Lun - Sab 8.00 - 18.00 Domingos CERRADO</p>
                     <div style="margin-top:20px;">
                        <div class="social_wrapper shortcode dark ">
                           <ul>
                              <li class="facebook"><a target="_blank" title="Facebook" href="index.html#"><i class="fa fa-facebook"></i></a></li>
                              <li class="twitter"><a target="_blank" title="Twitter" href="https://twitter.com/#"><i class="fa fa-twitter"></i></a></li>
                              <li class="youtube"><a target="_blank" title="Youtube" href="index.html#"><i class="fa fa-youtube"></i></a></li>
                              <li class="pinterest"><a target="_blank" title="Pinterest" href="https://pinterest.com/#"><i class="fa fa-pinterest"></i></a></li>
                              <li class="instagram"><a target="_blank" title="Instagram" href="https://instagram.com/theplanetd"><i class="fa fa-instagram"></i></a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </li>
               <li id="grandtour_instagram-9" class="widget Grandtour_Instagram">
                  <h2 class="widgettitle">Viajes recientes</h2>
                  <ul class="flickr">
                     <li><a target="_blank" href="https://www.instagram.com/p/BRgXWsqFBLD/"><img src="https://scontent.cdninstagram.com/t51.2885-15/s320x320/e35/c0.134.1080.1080/17125594_1309391605815084_2848303834034339840_n.jpg" width="75" height="75" alt="" /></a></li>
                     <li><a target="_blank" href="https://www.instagram.com/p/BRbMpSplJqX/"><img src="https://scontent.cdninstagram.com/t51.2885-15/s320x320/e35/c0.134.1080.1080/15035595_1936401566587633_4455313788257697792_n.jpg" width="75" height="75" alt="" /></a></li>
                     <li><a target="_blank" href="https://www.instagram.com/p/BRYn2YXBttX/"><img src="https://scontent.cdninstagram.com/t51.2885-15/s320x320/e35/17125477_337451106650656_7516217094694764544_n.jpg" width="75" height="75" alt="" /></a></li>
                     <li><a target="_blank" href="https://www.instagram.com/p/BRWDLtvh7vb/"><img src="https://scontent.cdninstagram.com/t51.2885-15/s320x320/e35/17076229_257140138075403_4619417127063912448_n.jpg" width="75" height="75" alt="" /></a></li>
                     <li><a target="_blank" href="https://www.instagram.com/p/BRTeTR-hMus/"><img src="https://scontent.cdninstagram.com/t51.2885-15/s320x320/e35/17125985_183374232163594_1946321832420311040_n.jpg" width="75" height="75" alt="" /></a></li>
                     <li><a target="_blank" href="https://www.instagram.com/p/BROVWFIBoRG/"><img src="https://scontent.cdninstagram.com/t51.2885-15/s320x320/e35/17125543_273774926379985_565758286507278336_n.jpg" width="75" height="75" alt="" /></a></li>
                  </ul>
                  <br class="clear"/>
               </li>
            </ul>
         </div>
         <div class="footer_bar   ">
            <div class="footer_bar_wrapper ">
               <div class="menu-footer-menu-container">
                  <ul id="footer_menu" class="footer_nav">
                     <li id="menu-item-215" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-home menu-item-215"><a href="../../index.html">Inicio</a></li>
                     <li id="menu-item-216" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-216"><a href="../index.html">Tours</a></li>
                     <li id="menu-item-217" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-217"><a href="../../blog/index.html">Blog</a></li>
                     <li id="menu-item-218" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-218"><a href="index.html#"></a></li>
                  </ul>
               </div>
               <div id="copyright">© Copyright Grand Tour Theme  - Tema por ThemeGoods</div>
               <br class="clear"/>      
               <a id="toTop" href="javascript:;"><i class="fa fa-angle-up"></i></a>
            </div>
         </div>
      </div>
      <div id="side_menu_wrapper" class="overlay_background">
         <a id="close_share" href="javascript:;"><span class="ti-close"></span></a>
         <div id="fullscreen_share_wrapper">
            <div class="fullscreen_share_content">
               <h2>Share</h2>
               <div class="page_tagline">French Autumn</div>
               <div id="social_share_wrapper">
                  <ul>
                     <li><a class="facebook" title="Share On Facebook" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http://themes.themegoods2.com/grandtour/demo/tour/french-autumn/"><span class="ti-facebook"></span></a></li>
                     <li><a class="twitter" title="Share On Twitter" target="_blank" href="https://twitter.com/intent/tweet?original_referer=http://themes.themegoods2.com/grandtour/demo/tour/french-autumn/&url=http://themes.themegoods2.com/grandtour/demo/tour/french-autumn/"><span class="ti-twitter"></span></a></li>
                     <li><a class="pinterest" title="Share On Pinterest" target="_blank" href="http://www.pinterest.com/pin/create/button/?url=http://themes.themegoods2.com/grandtour/demo/tour/french-autumn/&media=http://themes.themegoods2.com/grandtour/demo/wp-includes/images/media/default.png"><span class="ti-pinterest"></span></a></li>
                     <li><a class="google" title="Share On Google+" target="_blank" href="https://plus.google.com/share?url=http://themes.themegoods2.com/grandtour/demo/tour/french-autumn/"><span class="ti-google"></span></a></li>
                     <li><a class="mail" title="Share by Email" href="mailto:someone@example.com?Subject=French%20Autumn&amp;Body=http%3A%2F%2Fthemes.themegoods2.com%2Fgrandtour%2Fdemo%2Ftour%2Ffrench-autumn%2F"><span class="ti-email"></span></a></li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
      <script type='text/javascript' src='../../wp-includes/js/comment-reply.min.js'></script>
      <script type='text/javascript' src='../../wp-content/plugins/contact-form-7/includes/js/jquery.form.min.js'></script>
      <script type='text/javascript'>
         /* <![CDATA[ */
         var _wpcf7 = {"recaptcha":{"messages":{"empty":"Please verify that you are not a robot."}},"cached":"1"};
         /* ]]> */
      </script>
      <script type='text/javascript' src='../../wp-content/plugins/contact-form-7/includes/js/scripts.js'></script>
      <script type='text/javascript'>
         /* <![CDATA[ */
         var wc_add_to_cart_params = {"ajax_url":"\/grandtour\/demo\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/grandtour\/demo\/tour\/french-autumn\/?wc-ajax=%%endpoint%%","i18n_view_cart":"View Cart","cart_url":"http:\/\/themes.themegoods2.com\/grandtour\/demo\/cart\/","is_cart":"","cart_redirect_after_add":"no"};
         /* ]]> */
      </script>
      <script type='text/javascript' src='../../wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart.min.js'></script>
      <script type='text/javascript' src='../../wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.min.js'></script>
      <script type='text/javascript'>
         /* <![CDATA[ */
         var woocommerce_params = {"ajax_url":"\/grandtour\/demo\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/grandtour\/demo\/tour\/french-autumn\/?wc-ajax=%%endpoint%%"};
         /* ]]> */
      </script>
      <script type='text/javascript' src='../../wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.min.js'></script>
      <script type='text/javascript' src='../../wp-content/plugins/woocommerce/assets/js/jquery-cookie/jquery.cookie.min.js'></script>
      <script type='text/javascript'>
         /* <![CDATA[ */
         var wc_cart_fragments_params = {"ajax_url":"\/grandtour\/demo\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/grandtour\/demo\/tour\/french-autumn\/?wc-ajax=%%endpoint%%","fragment_name":"wc_fragments"};
         /* ]]> */
      </script>
      <script type='text/javascript' src='../../wp-content/plugins/woocommerce/assets/js/frontend/cart-fragments.min.js'></script>
      <script type='text/javascript' src='../../wp-includes/js/jquery/ui/core.min.js'></script>
      <script type='text/javascript' src='../../wp-includes/js/jquery/ui/datepicker.min.js'></script>
      <script type='text/javascript'>
         jQuery(document).ready(function(jQuery){jQuery.datepicker.setDefaults({"closeText":"Close","currentText":"Today","monthNames":["January","February","March","April","May","June","July","August","September","October","November","December"],"monthNamesShort":["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"],"nextText":"Next","prevText":"Previous","dayNames":["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"],"dayNamesShort":["Sun","Mon","Tue","Wed","Thu","Fri","Sat"],"dayNamesMin":["S","M","T","W","T","F","S"],"dateFormat":"MM d, yy","firstDay":1,"isRTL":false});});
      </script>
      <script type='text/javascript' src='../../wp-content/themes/grandtour/js/jquery.requestAnimationFrame.js'></script>
      <script type='text/javascript' src='../../wp-content/themes/grandtour/js/ilightbox.packed.js'></script>
      <script type='text/javascript' src='../../wp-content/themes/grandtour/js/jquery.easing.js'></script>
      <script type='text/javascript' src='../../wp-content/themes/grandtour/js/waypoints.min.js'></script>
      <script type='text/javascript' src='../../wp-content/themes/grandtour/js/jquery.isotope.js'></script>
      <script type='text/javascript' src='../../wp-content/themes/grandtour/js/jquery.masory.js'></script>
      <script type='text/javascript' src='../../wp-content/themes/grandtour/js/jquery.tooltipster.min.js'></script>
      <script type='text/javascript' src='../../wp-content/themes/grandtour/js/jarallax.js'></script>
      <script type='text/javascript' src='../../wp-content/themes/grandtour/js/jquery.sticky-kit.min.js'></script>
      <script type='text/javascript' src='../../wp-content/themes/grandtour/js/jquery.stellar.min.js'></script>
      <script type='text/javascript' src='../../wp-content/themes/grandtour/js/jquery.cookie.js'></script>
      <script type='text/javascript' src='../../wp-content/themes/grandtour/js/custom_plugins.js'></script>
      <script type='text/javascript' src='../../wp-content/themes/grandtour/js/custom.js'></script>
      <script type='text/javascript' src='../../wp-includes/js/wp-embed.min.js'></script>
      <script type='text/javascript' src='https://maps.googleapis.com/maps/api/js'></script>
      <script type='text/javascript' src='../../wp-content/themes/grandtour/js/jquery.simplegmaps.min.js'></script>
      <script type='text/javascript' src='../../wp-admin/admin-ajax-action=grandtour_script_map_shortcode&data=a_3_%7Bs_2__id__s_23__map14892930051249731428__s_4__zoom__s_2__13__s_4__type__s_0____%7D.php'></script>
      <script type='text/javascript' src='../../wp-content/themes/grandtour/js/jquery.cookie.js'></script>
      <script type='text/javascript' src='../../wp-admin/admin-ajax-action=grandtour_script_demo.php'></script>
   </body>
</html>
<!-- Performance optimized by W3 Total Cache. Learn more: https://www.w3-edge.com/products/
   Object Caching 8419/8507 objects using disk
   Page Caching using disk: enhanced
   Database Caching 7/59 queries in 0.016 seconds using disk
   
    Served from: themes.themegoods2.com @ 2017-03-12 04:30:05 by W3 Total Cache -->