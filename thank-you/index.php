<?php
//    include('language.php');

    $name = isset($_POST['your-name']) ? $_POST['your-name'] : '';
    $email = isset($_POST['your-email']) ? $_POST['your-email'] : '';
    $tel = isset($_POST['your-phone']) ? $_POST['your-phone'] : '';

   /* $mail = isset($_POST['mail']) ? $_POST['mail'] : '';
    $department = isset($_POST['department']) ? $_POST['department'] : '';
    $address = isset($_POST['address']) ? $_POST['address'] : '';
    $url = isset($_POST['url']) ? $_POST['url'] : '';
    $employee = isset($_POST['employee']) ? $_POST['employee'] : '';
    $purpose = isset($_POST['purpose']) ? $_POST['purpose'] : '';
    $jungle = isset($_POST['jungle']) ? $_POST['jungle'] : '';
    $introduction = isset($_POST['introduction']) ? $_POST['introduction'] : '';
    $bot = isset($_POST['bot']) ? $_POST['bot'] : '';
    $interface = isset($_POST['interface']) ? $_POST['interface'] : [];
    // check recaptcha
    $captcharApiUrl = 'https://www.google.com/recaptcha/api/siteverify';
    $data = array(
        'secret' => '6Lf6tYcUAAAAACV0I_pY2p3vOsQgW9u6kKsgeyKv',
        'response' => @$_REQUEST['g-recaptcha-response'],
        'remoteip' => @$_SERVER['REMOTE_ADDR'],
    );
    $captcharApiUrl .= '?' . http_build_query($data);
    $header = Array(
        'Content-Type: application/x-www-form-urlencoded',
    );
    $options = array('http' =>
        array(
            'method' => 'GET',
            'header' => implode("\r\n", $header),
            'ignore_errors' => true
        )
    );
    $apiResponse = file_get_contents($captcharApiUrl, false, stream_context_create($options));
    $jsonData = json_decode($apiResponse, TRUE);
    $newUrl = @$_SERVER['HTTP_REFERER'];
    if ($jsonData['success'] !== TRUE) {
        header('Location: ' . $newUrl);
        return;
    }*/
    mb_language("Japanese");
    mb_internal_encoding("UTF-8");
    $to = 'ducquyetptit@gmail.com';
    $subject = 'Thông tin khách hàng';
    $message = '';
    $message .= 'Tên khách hàng: ' . $name . "\n";
    $message .= 'Email khách hàng: ' . $email . "\n";
    $message .= 'Số điện thoại khách hàng: ' . $tel . "\n";
    $headers = 'From: ducquyetptit@gmail.com' . "\r\n";
    mail($to, $subject, $message, $headers);
?>
<!DOCTYPE html>
<html lang="vi" prefix="og: http://ogp.me/ns#"
      class="html_stretched responsive av-preloader-disabled av-default-lightbox  html_header_top html_logo_left html_main_nav_header html_menu_right html_slim html_header_sticky html_header_shrinking html_mobile_menu_phone html_header_searchicon html_content_align_center html_header_unstick_top_disabled html_header_stretch_disabled html_av-overlay-side html_av-overlay-side-classic html_av-submenu-noclone html_entry_id_1564 av-no-preview html_text_menu_active ">
<!-- Mirrored from duanvincity.hanoi.vn/thank-you/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 04 Mar 2019 07:51:32 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8"/><!-- /Added by HTTrack -->
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Thank you</title>
    <meta name="robots" content="noindex,follow"/>
    <meta property="og:locale" content="vi_VN"/>
    <meta property="og:type" content="article"/>
    <meta property="og:title" content="Thank you"/>
    <meta property="og:description"
          content="Cảm ơn bạn đã đăng ký. Chuyên viên tư vấn của chúng tôi sẽ liên hệ lại với bạn trong vòng 15 phút. Xin cảm ơn. Trở về trang chủ Tin tức về Vincity Dự án Vincity Ocean Park Gia Lâm Dự án Vincity Sportia Tây Mỗ &#8211; Đại Mỗ Chính sách bán hàng Vincity &hellip;"/>
    <meta property="og:url" content="index.html"/>
    <meta property="og:site_name" content="VinCity Hà Nội"/>
    <meta property="article:publisher" content="https://www.facebook.com/VincityHanoi.Vina/"/>
    <meta property="og:image" content="../wp-content/uploads/2018/10/canh-quan-vincity-ocean-park-2.jpg"/>
    <meta property="og:image:secure_url" content="../wp-content/uploads/2018/10/canh-quan-vincity-ocean-park-2.jpg"/>
    <meta property="og:image:width" content="1030"/>
    <meta property="og:image:height" content="579"/>
    <meta property="og:image:alt" content="Cảnh quan VinCity Ocean Park"/>
    <meta name="twitter:card" content="summary_large_image"/>
    <meta name="twitter:description"
          content="Cảm ơn bạn đã đăng ký. Chuyên viên tư vấn của chúng tôi sẽ liên hệ lại với bạn trong vòng 15 phút. Xin cảm ơn. Trở về trang chủ Tin tức về Vincity Dự án Vincity Ocean Park Gia Lâm Dự án Vincity Sportia Tây Mỗ &#8211; Đại Mỗ Chính sách bán hàng Vincity [&hellip;]"/>
    <meta name="twitter:title" content="Thank you"/>
    <meta name="twitter:site" content="@duanvincityhn"/>
    <meta name="twitter:image" content="../wp-content/uploads/2018/10/canh-quan-vincity-ocean-park-2.jpg"/>
    <meta name="twitter:creator" content="@duanvincityhn"/>
    <!--<script type='application/ld+json'>
        {"@context":"https://schema.org","@type":"Organization","url":"/","sameAs":["https://www.facebook.com/VincityHanoi.Vina/","https://www.instagram.com/duanvincityhanoi/","https://www.linkedin.com/in/vincity-h\u00e0-n\u1ed9i-a9131a163/","https://myspace.com/vincity-ha-noi","https://www.youtube.com/channel/UCwDmjyMpmHh-OMpRnfzUN4g","https://www.pinterest.com/duanvincityhanoi/","https://twitter.com/duanvincityhn"],"@id":"/#organization","name":"VinCity H\u00e0 N\u1ed9i","logo":"/wp-content/uploads/2018/07/logo-vincity.png"}
    </script>-->
    <link rel="alternate" type="application/rss+xml" title="Dòng thông tin VinCity Hà Nội &raquo;"
          href="../feed/index.html"/>
    <link rel="alternate" type="application/rss+xml" title="Dòng phản hồi VinCity Hà Nội &raquo;"
          href="../comments/feed/index.html"/>
    <!--<script type='text/javascript'>if (!document.cookie.match(/aviaPrivacyGoogleWebfontsDisabled/)) {
        (function () {
            var f = document.createElement('link');

            f.type = 'text/css';
            f.rel = 'stylesheet';
            f.href = 'http://fonts.googleapis.com/css?family=Roboto:100,400,700';
            f.id = 'avia-google-webfont';

            document.getElementsByTagName('head')[0].appendChild(f);
        })();
    }</script>-->
    <link rel='stylesheet' id='wp-block-library-css' href='../wp-includes/css/dist/block-library/style.min.css'
          type='text/css' media='all'/>
    <link data-minify="1" rel='stylesheet' id='contact-form-7-css'
          href='../wp-content/cache/min/1/wp-content/plugins/contact-form-7/includes/css/styles-f7af1a9e137bcab2f9542e4631109384.css'
          type='text/css' media='all'/>
    <link rel='stylesheet' id='toc-screen-css'
          href='../wp-content/cache/busting/1/wp-content/plugins/table-of-contents-plus/screen.min-1509.css'
          type='text/css' media='all'/>
    <link data-minify="1" rel='stylesheet' id='popup-maker-site-css'
          href='../wp-content/cache/min/1/wp-content/uploads/pum/pum-site-styles-20d05f081fd2b051ad6900bfd322c4a9.css'
          type='text/css' media='all'/>
    <link data-minify="1" rel='stylesheet' id='avia-merged-styles-css'
          href='../wp-content/cache/min/1/wp-content/uploads/dynamic_avia/avia-merged-styles-383fb1aff119b07e1b1cf1f5d1be1dd8-dc485841c15512385fa7c12c13efb1ba.css'
          type='text/css' media='all'/>
    <style id='rocket-lazyload-inline-css' type='text/css'>.rll-youtube-player {
            position: relative;
            padding-bottom: 56.23%;
            height: 0;
            overflow: hidden;
            max-width: 100%;
            background: #000;
            margin: 5px
        }

        .rll-youtube-player iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 100;
            background: 0 0
        }

        .rll-youtube-player img {
            bottom: 0;
            display: block;
            left: 0;
            margin: auto;
            max-width: 100%;
            width: 100%;
            position: absolute;
            right: 0;
            top: 0;
            border: none;
            height: auto;
            cursor: pointer;
            -webkit-transition: .4s all;
            -moz-transition: .4s all;
            transition: .4s all
        }

        .rll-youtube-player img:hover {
            -webkit-filter: brightness(75%)
        }

        .rll-youtube-player .play {
            height: 72px;
            width: 72px;
            left: 50%;
            top: 50%;
            margin-left: -36px;
            margin-top: -36px;
            position: absolute;
            background: url(../wp-content/plugins/wp-rocket/inc/front/img/youtube.png) no-repeat;
            cursor: pointer
        }</style>
    <!-- <script>if (document.location.protocol != "index.html") {
         document.location = document.URL.replace(/^http:/i, "index.html");
     }</script>-->
    <script type='text/javascript' src='../wp-content/cache/busting/1/wp-includes/js/jquery/jquery-1.12.4.js'></script>
    <link rel='https://api.w.org/' href='../wp-json/index.html'/>
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="../xmlrpc0db0.php?rsd"/>
    <link rel="wlwmanifest" type="application/wlwmanifest+xml" href="../wp-includes/wlwmanifest.xml"/>
    <meta name="generator" content="WordPress 5.1"/>
    <link rel='shortlink' href='../index461c.html?p=1564'/>
    <link rel="alternate" type="application/json+oembed"
          href="../wp-json/oembed/1.0/embed4748.json?url=https%3A%2F%2Fduanvincity.hanoi.vn%2Fthank-you%2F"/>
    <link rel="alternate" type="text/xml+oembed"
          href="../wp-json/oembed/1.0/embed2b47?url=https%3A%2F%2Fduanvincity.hanoi.vn%2Fthank-you%2F&amp;format=xml"/>
    <meta name="robots" content="noindex">
    <!--<script type="text/javascript">window._wp_rp_static_base_url = 'https://wprp.sovrn.com/static/';-->
    <!--window._wp_rp_wp_ajax_url = "../wp-admin/admin-ajax.html";-->
    <!--window._wp_rp_plugin_version = '3.6.4';-->
    <!--window._wp_rp_post_id = '1564';-->
    <!--window._wp_rp_num_rel_posts = '6';-->
    <!--window._wp_rp_thumbnails = true;-->
    <!--window._wp_rp_post_title = 'Thank+you';-->
    <!--window._wp_rp_post_tags = [];-->
    <!--window._wp_rp_promoted_content = true;</script>-->
    <link data-minify="1" rel="stylesheet"
          href="../wp-content/cache/min/1/wp-content/plugins/wordpress-23-related-posts-plugin/static/themes/twocolumns-f222c1ddf438c004b24992cc79be20d9.css"/>
    <style type="text/css">ul.related_post {
        }

        .related_post_title {
            font-weight: bold !important;
            margin-bottom: 20px;
            margin-top: 20px
        }</style>
    <link rel="profile" href="https://gmpg.org/xfn/11"/>
    <link rel="alternate" type="application/rss+xml" title="VinCity Hà Nội RSS2 Feed" href="../feed/index.html"/>
    <link rel="pingback" href="../xmlrpc.php"/>
    <!--[if lt IE 9]>
    <script src="/wp-content/themes/enfold/js/html5shiv.js"></script><![endif]-->
    <link rel="icon" href="../wp-content/uploads/2018/10/favicon_VinCity.png" type="image/png">
    <script type="text/javascript">'use strict';
        var avia_is_mobile = !1;
        if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) && 'ontouchstart' in document.documentElement) {
            avia_is_mobile = !0;
            document.documentElement.className += ' avia_mobile '
        }
        else {
            document.documentElement.className += ' avia_desktop '
        }
        ;
        document.documentElement.className += ' js_active ';
        (function () {
            var e = ['-webkit-', '-moz-', '-ms-', ''], n = '';
            for (var t in e) {
                if (e[t] + 'transform' in document.documentElement.style) {
                    document.documentElement.className += ' avia_transform ';
                    n = e[t] + 'transform'
                }
                ;
                if (e[t] + 'perspective' in document.documentElement.style)document.documentElement.className += ' avia_transform3d '
            }
            ;
            if (typeof document.getElementsByClassName == 'function' && typeof document.documentElement.getBoundingClientRect == 'function' && avia_is_mobile == !1) {
                if (n && window.innerHeight > 0) {
                    setTimeout(function () {
                        var e = 0, o = {}, a = 0, t = document.getElementsByClassName('av-parallax'), i = window.pageYOffset || document.documentElement.scrollTop;
                        for (e = 0; e < t.length; e++) {
                            t[e].style.top = '0px';
                            o = t[e].getBoundingClientRect();
                            a = Math.ceil((window.innerHeight + i - o.top) * 0.3);
                            t[e].style[n] = 'translate(0px, ' + a + 'px)';
                            t[e].style.top = 'auto';
                            t[e].className += ' enabled-parallax '
                        }
                    }, 50)
                }
            }
        })();</script>
    <style type='text/css'>@font-face {
            font-family: 'entypo-fontello';
            font-weight: 400;
            font-style: normal;
            src: url(../wp-content/themes/enfold/config-templatebuilder/avia-template-builder/assets/fonts/entypo-fontello.eot);
            src: url('/wp-content/themes/enfold/config-templatebuilder/avia-template-builder/assets/fonts/entypo-fontello.eot?#iefix') format('embedded-opentype'), url(/wp-content/themes/enfold/config-templatebuilder/avia-template-builder/assets/fonts/entypo-fontello.woff) format('woff'), url(/wp-content/themes/enfold/config-templatebuilder/avia-template-builder/assets/fonts/entypo-fontello.ttf) format('truetype'), url('/wp-content/themes/enfold/config-templatebuilder/avia-template-builder/assets/fonts/entypo-fontello.svg#entypo-fontello') format('svg')
        }

        #top .avia-font-entypo-fontello, body .avia-font-entypo-fontello, html body [data-av_iconfont='entypo-fontello']:before {
            font-family: 'entypo-fontello'
        }</style>
</head>
<body data-rsssl=1 id="top"
      class="page-template-default page page-id-1564  rtl_columns stretched roboto arial-websave arial"
      itemscope="itemscope" itemtype="https://schema.org/WebPage">
<div id='wrap_all'>
    <header id='header'
            class='all_colors header_color dark_bg_color  av_header_top av_logo_left av_main_nav_header av_menu_right av_slim av_header_sticky av_header_shrinking av_header_stretch_disabled av_mobile_menu_phone av_header_searchicon av_header_unstick_top_disabled av_bottom_nav_disabled  av_header_border_disabled'
            role="banner" itemscope="itemscope" itemtype="https://schema.org/WPHeader">
        <div id='header_main' class='container_wrap container_wrap_logo'>
            <div class='container av-logo-container'>
                <div class='inner-container'><span class='logo'><a href='../index.html'><img height='100' width='300'
                                                                                             src='../wp-content/uploads/2018/10/logo-vincity.png'
                                                                                             alt='VinCity Hà Nội'/></a></span>
                    <nav class='main_menu' data-selectname='Select a page' role="navigation" itemscope="itemscope"
                         itemtype="https://schema.org/SiteNavigationElement">
                        <div class="avia-menu av-main-nav-wrap">
                            <ul id="avia-menu" class="menu av-main-nav">
                                <li id="menu-item-57"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-top-level menu-item-top-level-1">
                                    <a href="../index.html" itemprop="url"><span class="avia-bullet"></span><span
                                            class="avia-menu-text">TRANG CHỦ</span><span class="avia-menu-fx"><span
                                                class="avia-arrow-wrap"><span
                                                    class="avia-arrow"></span></span></span></a>
                                </li>
                                <!--<li id="menu-item-76"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-top-level menu-item-top-level-2">
                                    <a href="../vincity-ocean-park/index.html" itemprop="url"><span
                                            class="avia-bullet"></span><span
                                            class="avia-menu-text">VINCITY OCEAN PARK</span><span
                                            class="avia-menu-fx"><span class="avia-arrow-wrap"><span
                                                    class="avia-arrow"></span></span></span></a>
                                    <ul class="sub-menu">
                                        <li id="menu-item-2937"
                                            class="menu-item menu-item-type-post_type menu-item-object-page"><a
                                                href="../phan-khu-the-park/index.html" itemprop="url"><span
                                                    class="avia-bullet"></span><span class="avia-menu-text">PHÂN KHU THE PARK</span></a>
                                        </li>
                                        <li id="menu-item-2938"
                                            class="menu-item menu-item-type-post_type menu-item-object-page"><a
                                                href="../phan-khu-the-lake/index.html" itemprop="url"><span
                                                    class="avia-bullet"></span><span class="avia-menu-text">PHÂN KHU THE LAKE</span></a>
                                        </li>
                                        <li id="menu-item-2939"
                                            class="menu-item menu-item-type-post_type menu-item-object-page"><a
                                                href="../phan-khu-the-river/index.html" itemprop="url"><span
                                                    class="avia-bullet"></span><span class="avia-menu-text">PHÂN KHU THE RIVER</span></a>
                                        </li>
                                        <li id="menu-item-2940"
                                            class="menu-item menu-item-type-post_type menu-item-object-page"><a
                                                href="../phan-khu-the-sea/index.html" itemprop="url"><span
                                                    class="avia-bullet"></span><span
                                                    class="avia-menu-text">PHÂN KHU THE SEA</span></a></li>
                                        <li id="menu-item-6026"
                                            class="menu-item menu-item-type-post_type menu-item-object-page"><a
                                                href="../vinhomes-ocean-park/index.html" itemprop="url"><span
                                                    class="avia-bullet"></span><span class="avia-menu-text">VINHOMES OCEAN PARK</span></a>
                                        </li>
                                    </ul>
                                </li>
                                <li id="menu-item-75"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-top-level menu-item-top-level-3">
                                    <a href="../vincity-sportia/index.html" itemprop="url"><span
                                            class="avia-bullet"></span><span
                                            class="avia-menu-text">VINCITY SPORTIA</span><span
                                            class="avia-menu-fx"><span class="avia-arrow-wrap"><span
                                                    class="avia-arrow"></span></span></span></a>
                                    <ul class="sub-menu">
                                        <li id="menu-item-5215"
                                            class="menu-item menu-item-type-post_type menu-item-object-page"><a
                                                href="../phan-khu-the-hero/index.html" itemprop="url"><span
                                                    class="avia-bullet"></span><span class="avia-menu-text">PHÂN KHU THE HERO</span></a>
                                        </li>
                                        <li id="menu-item-5759"
                                            class="menu-item menu-item-type-post_type menu-item-object-page"><a
                                                href="../phan-khu-the-sun/index.html" itemprop="url"><span
                                                    class="avia-bullet"></span><span
                                                    class="avia-menu-text">PHÂN KHU THE SUN</span></a></li>
                                        <li id="menu-item-5522"
                                            class="menu-item menu-item-type-post_type menu-item-object-page"><a
                                                href="../phan-khu-the-power/index.html" itemprop="url"><span
                                                    class="avia-bullet"></span><span class="avia-menu-text">PHÂN KHU THE POWER</span></a>
                                        </li>
                                        <li id="menu-item-5784"
                                            class="menu-item menu-item-type-post_type menu-item-object-page"><a
                                                href="../phan-khu-the-victory/index.html" itemprop="url"><span
                                                    class="avia-bullet"></span><span class="avia-menu-text">PHÂN KHU THE VICTORY</span></a>
                                        </li>
                                        <li id="menu-item-5216"
                                            class="menu-item menu-item-type-post_type menu-item-object-page"><a
                                                href="../phan-khu-the-dream/index.html" itemprop="url"><span
                                                    class="avia-bullet"></span><span class="avia-menu-text">PHÂN KHU THE DREAM</span></a>
                                        </li>
                                    </ul>
                                </li>
                                <li id="menu-item-1101"
                                    class="menu-item menu-item-type-post_type menu-item-object-post menu-item-top-level menu-item-top-level-4">
                                    <a href="../vingroup/index.html" itemprop="url"><span
                                            class="avia-bullet"></span><span
                                            class="avia-menu-text">CHỦ ĐẦU TƯ</span><span class="avia-menu-fx"><span
                                                class="avia-arrow-wrap"><span
                                                    class="avia-arrow"></span></span></span></a>
                                </li>
                                <li id="menu-item-1780"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-top-level menu-item-top-level-5">
                                    <a href="../chinh-sach-gia-ban-can-ho-vincity-ocean-park/index.html" itemprop="url"><span
                                            class="avia-bullet"></span><span class="avia-menu-text">BẢNG GIÁ</span><span
                                            class="avia-menu-fx"><span class="avia-arrow-wrap"><span
                                                    class="avia-arrow"></span></span></span></a>
                                    <ul class="sub-menu">
                                        <li id="menu-item-5422"
                                            class="menu-item menu-item-type-post_type menu-item-object-page"><a
                                                href="../gia-ban-vincity-sportia/index.html" itemprop="url"><span
                                                    class="avia-bullet"></span><span class="avia-menu-text">BẢNG GIÁ &#8211; CHÍNH SÁCH VINCITY SPORTIA</span></a>
                                        </li>
                                        <li id="menu-item-5423"
                                            class="menu-item menu-item-type-post_type menu-item-object-page"><a
                                                href="../chinh-sach-gia-ban-can-ho-vincity-ocean-park/index.html"
                                                itemprop="url"><span class="avia-bullet"></span><span
                                                    class="avia-menu-text">BẢNG GIÁ &#8211; CHÍNH SÁCH VINCITY OCEAN PARK</span></a>
                                        </li>
                                    </ul>
                                </li>
                                <li id="menu-item-58"
                                    class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-has-children menu-item-top-level menu-item-top-level-6">
                                    <a href="../category/tin-tuc/index.html" itemprop="url"><span
                                            class="avia-bullet"></span><span class="avia-menu-text">TIN TỨC</span><span
                                            class="avia-menu-fx"><span class="avia-arrow-wrap"><span
                                                    class="avia-arrow"></span></span></span></a>
                                    <ul class="sub-menu">
                                        <li id="menu-item-5211"
                                            class="menu-item menu-item-type-taxonomy menu-item-object-category"><a
                                                href="../category/tin-tuc/tin-tuc-vincity-ocean-park/index.html"
                                                itemprop="url"><span class="avia-bullet"></span><span
                                                    class="avia-menu-text">Tin tức VinCity Ocean Park</span></a></li>
                                        <li id="menu-item-5212"
                                            class="menu-item menu-item-type-taxonomy menu-item-object-category"><a
                                                href="../category/tin-tuc/tin-tuc-vincity-sportia/index.html"
                                                itemprop="url"><span class="avia-bullet"></span><span
                                                    class="avia-menu-text">Tin tức VinCity Sportia</span></a></li>
                                    </ul>
                                </li>
                                <li id="menu-item-63"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-top-level menu-item-top-level-7">
                                    <a href="../contact/index.html" itemprop="url"><span
                                            class="avia-bullet"></span><span class="avia-menu-text">LIÊN HỆ</span><span
                                            class="avia-menu-fx"><span class="avia-arrow-wrap"><span
                                                    class="avia-arrow"></span></span></span></a></li>
                                <li id="menu-item-search"
                                    class="noMobile menu-item menu-item-search-dropdown menu-item-avia-special"><a
                                        href="index1919.html?s="
                                        data-avia-search-tooltip="&lt;form action=/thank-you/"
                                    /" id=&quot;searchform&quot; method=&quot;get&quot;
                                    class=&quot;&quot;&gt;
                                    &lt;div&gt;
                                    &lt;input type=&quot;submit&quot; value=&quot;&quot; id=&quot;searchsubmit&quot;
                                    class=&quot;button avia-font-entypo-fontello&quot; /&gt;
                                    &lt;input type=&quot;text&quot; id=&quot;s&quot; name=&quot;s&quot; value=&quot;&quot;
                                    placeholder='Search' /&gt;
                                    &lt;/div&gt;
                                    &lt;/form&gt;" aria-hidden='true' data-av_icon=''
                                    data-av_iconfont='entypo-fontello'><span
                                        class="avia_hidden_link_text">Search</span></a></li>-->
                                <li class="av-burger-menu-main menu-item-avia-special "><a href="#"> <span
                                            class="av-hamburger av-hamburger--spin av-js-hamburger"> <span
                                                class="av-hamburger-box"> <span
                                                    class="av-hamburger-inner"></span> <strong>Menu</strong> </span> </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <div class='header_bg'></div>
    </header>
    <div id='main' class='all_colors' data-scroll-offset='88'>
        <div class='stretch_full container_wrap alternate_color light_bg_color title_container'>
            <div class='container'><h1 class='main-title entry-title'><a href='index.html' rel='bookmark'
                                                                         title='Permanent Link: Thank you'
                                                                         itemprop="headline">Thank you</a></h1>
                <div class="breadcrumb breadcrumbs avia-breadcrumbs">
                    <div class="breadcrumb-trail" xmlns:v="https://rdf.data-vocabulary.org/#"><span
                            class="trail-before"><span class="breadcrumb-title">You are here:</span></span> <span><a
                                rel="v:url" property="v:title" href="../index.html" title="VinCity Hà Nội"
                                class="trail-begin">Home</a></span> <span class="sep">/</span> <span class="trail-end">Thank you</span>
                    </div>
                </div>
            </div>
        </div>
        <div class='container_wrap container_wrap_first main_color sidebar_right'>
            <div class='container'>
                <main class='template-page content  av-content-small alpha units' role="main"
                      itemprop="mainContentOfPage">
                    <article class='post-entry post-entry-type-page post-entry-1564' itemscope="itemscope"
                             itemtype="https://schema.org/CreativeWork">
                        <div class="entry-content-wrapper clearfix">
                            <header class="entry-content-header"></header>
                            <div class="entry-content" itemprop="text"><p>Cảm ơn bạn đã đăng ký. Chuyên viên tư vấn của
                                    chúng tôi sẽ liên hệ lại với bạn trong vòng 15 phút. Xin cảm ơn.</p>
                                <ul>
                                    <li><a href="../index.html">Trở về trang chủ</a></li>
                                    <li><a href="../category/tin-tuc/index.html">Tin tức về Vincity</a></li>
                                    <li><a href="../vincity-ocean-park/index.html">Dự án Vincity Ocean Park Gia Lâm</a>
                                    </li>
                                    <li><a href="../vincity-tay-mo-dai-mo/index.html">Dự án Vincity Sportia Tây Mỗ
                                            &#8211; Đại Mỗ</a></li>
                                    <li><a href="../chinh-sach-gia-ban-can-ho-vincity-ocean-park/index.html">Chính sách
                                            bán hàng Vincity</a></li>
                                    <li><a href="../can-ho-mau-vincity-ocean-park/index.html">Xem nhà mẫu Vincity Ocean
                                            Park</a></li>
                                </ul>
                            </div>
                            <footer class="entry-footer"></footer>
                        </div>
                    </article>
                </main>
                <aside class='sidebar sidebar_right  alpha units' role="complementary" itemscope="itemscope"
                       itemtype="https://schema.org/WPSideBar">
                    <div class='inner_sidebar extralight-border'>
                        <section id="search-3" class="widget clearfix widget_search">
                            <form action="/" id="searchform" method="get" class="">
                                <div><input type="submit" value="" id="searchsubmit"
                                            class="button avia-font-entypo-fontello"/> <input type="text" id="s"
                                                                                              name="s" value=""
                                                                                              placeholder='Search'/>
                                </div>
                            </form>
                            <span class="seperator extralight-border"></span></section>
                        <section id="newsbox-3" class="widget clearfix newsbox"><h3 class="widgettitle">TIN TỨC MỚI
                                NHẤT</h3>
                            <ul class="news-wrap image_size_widget">
                                <li class="news-content post-format-standard"><a class='news-link'
                                                                                 title='Những tân chủ nhân nói gì khi sở hữu nhà mới tại VinCity Sportia?'
                                                                                 href='../tan-chu-nhan-noi-gi-khi-so-huu-nha-moi-tai-vincity-sportia/index.html'><span
                                            class='news-thumb '><img width="36" height="36"
                                                                     src="../wp-content/uploads/2018/12/V02_Zone01_pa2_1000-36x36.jpg"
                                                                     class="attachment-widget size-widget wp-post-image"
                                                                     alt="VinCity Sportia Tây Mỗ - Đại Mỗ"
                                                                     srcset="/wp-content/uploads/2018/12/V02_Zone01_pa2_1000-36x36.jpg 36w, /wp-content/uploads/2018/12/V02_Zone01_pa2_1000-80x80.jpg 80w, /wp-content/uploads/2018/12/V02_Zone01_pa2_1000-180x180.jpg 180w, /wp-content/uploads/2018/12/V02_Zone01_pa2_1000-120x120.jpg 120w, /wp-content/uploads/2018/12/V02_Zone01_pa2_1000-150x150.jpg 150w"
                                                                     sizes="(max-width: 36px) 100vw, 36px"/></span><strong
                                            class='news-headline'>Những tân chủ nhân nói gì khi sở hữu nhà mới tại
                                            VinCity
                                            Sportia?<span class='news-time'>02/03/2019 - 08:32</span></strong></a></li>
                                <li class="news-content post-format-standard"><a class='news-link'
                                                                                 title='Gia đình trẻ làm gì với bài toán chọn nhà giữa Thủ đô?'
                                                                                 href='../gia-dinh-tre-lam-gi-voi-bai-toan-chon-nha-giua-thu-do/index.html'><span
                                            class='news-thumb '><img width="36" height="36"
                                                                     src="../wp-content/uploads/2019/01/image1-36x36.jpg"
                                                                     class="attachment-widget size-widget wp-post-image"
                                                                     alt=""
                                                                     srcset="/wp-content/uploads/2019/01/image1-36x36.jpg 36w, /wp-content/uploads/2019/01/image1-80x80.jpg 80w, /wp-content/uploads/2019/01/image1-180x180.jpg 180w, /wp-content/uploads/2019/01/image1-120x120.jpg 120w, /wp-content/uploads/2019/01/image1-450x450.jpg 450w, /wp-content/uploads/2019/01/image1-150x150.jpg 150w"
                                                                     sizes="(max-width: 36px) 100vw, 36px"/></span><strong
                                            class='news-headline'>Gia đình trẻ làm gì với bài toán chọn nhà giữa Thủ
                                            đô?<span class='news-time'>23/02/2019 - 11:33</span></strong></a></li>
                                <li class="news-content post-format-standard"><a class='news-link'
                                                                                 title='Mua nhà tiện nghi bằng giải pháp tài chính với đại đô thị VinCity'
                                                                                 href='../mua-nha-tien-nghi-bang-giai-phap-tai-chinh-voi-vincity/index.html'><span
                                            class='news-thumb '><img width="36" height="36"
                                                                     src="../wp-content/uploads/2019/02/image1-36x36.jpg"
                                                                     class="attachment-widget size-widget wp-post-image"
                                                                     alt=""
                                                                     srcset="/wp-content/uploads/2019/02/image1-36x36.jpg 36w, /wp-content/uploads/2019/02/image1-80x80.jpg 80w, /wp-content/uploads/2019/02/image1-180x180.jpg 180w, /wp-content/uploads/2019/02/image1-120x120.jpg 120w, /wp-content/uploads/2019/02/image1-150x150.jpg 150w"
                                                                     sizes="(max-width: 36px) 100vw, 36px"/></span><strong
                                            class='news-headline'>Mua nhà tiện nghi bằng giải pháp tài chính với đại đô
                                            thị
                                            VinCity<span class='news-time'>21/02/2019 - 13:55</span></strong></a></li>
                                <li class="news-content post-format-standard"><a class='news-link'
                                                                                 title='Nhà đầu tư Hà Thành ưu tiên lựa chọn căn hộ VinCity Ocean Park Gia Lâm'
                                                                                 href='../nha-dau-tu-ha-thanh-uu-tien-lua-chon-can-ho-vincity-ocean-park/index.html'><span
                                            class='news-thumb '><img width="36" height="36"
                                                                     src="../wp-content/uploads/2018/08/bien-ho-nhan-tao-36x36.jpg"
                                                                     class="attachment-widget size-widget wp-post-image"
                                                                     alt="Biển hồ nước mặn tại VinCity Ocean Park"
                                                                     srcset="/wp-content/uploads/2018/08/bien-ho-nhan-tao-36x36.jpg 36w, /wp-content/uploads/2018/08/bien-ho-nhan-tao-80x80.jpg 80w, /wp-content/uploads/2018/08/bien-ho-nhan-tao-180x180.jpg 180w, /wp-content/uploads/2018/08/bien-ho-nhan-tao-120x120.jpg 120w, /wp-content/uploads/2018/08/bien-ho-nhan-tao-150x150.jpg 150w"
                                                                     sizes="(max-width: 36px) 100vw, 36px"/></span><strong
                                            class='news-headline'>Nhà đầu tư Hà Thành ưu tiên lựa chọn căn hộ VinCity
                                            Ocean
                                            Park Gia Lâm<span class='news-time'>21/02/2019 - 10:18</span></strong></a>
                                </li>
                                <li class="news-content post-format-standard"><a class='news-link'
                                                                                 title='Những câu hỏi thường gặp khi vay vốn Ngân hàng Techcombank mua VinCity Sportia'
                                                                                 href='../cau-hoi-khi-vay-von-ngan-hang-techcombank-mua-vincity-sportia/index.html'><span
                                            class='news-thumb '><img width="36" height="36"
                                                                     src="../wp-content/uploads/2019/01/vay-mua-nha-vincity-techcombank-36x36.jpg"
                                                                     class="attachment-widget size-widget wp-post-image"
                                                                     alt=""
                                                                     srcset="/wp-content/uploads/2019/01/vay-mua-nha-vincity-techcombank-36x36.jpg 36w, /wp-content/uploads/2019/01/vay-mua-nha-vincity-techcombank-80x80.jpg 80w, /wp-content/uploads/2019/01/vay-mua-nha-vincity-techcombank-180x180.jpg 180w, /wp-content/uploads/2019/01/vay-mua-nha-vincity-techcombank-120x120.jpg 120w, /wp-content/uploads/2019/01/vay-mua-nha-vincity-techcombank-450x450.jpg 450w, /wp-content/uploads/2019/01/vay-mua-nha-vincity-techcombank-150x150.jpg 150w"
                                                                     sizes="(max-width: 36px) 100vw, 36px"/></span><strong
                                            class='news-headline'>Những câu hỏi thường gặp khi vay vốn Ngân hàng
                                            Techcombank
                                            mua VinCity Sportia<span
                                                class='news-time'>20/02/2019 - 10:11</span></strong></a>
                                </li>
                                <li class="news-content post-format-standard"><a class='news-link'
                                                                                 title='Tại sao nhà đầu tư ngoại lựa chọn căn hộ VinCity Sportia?'
                                                                                 href='../tai-sao-nha-dau-tu-ngoai-lua-chon-vincity-sportia/index.html'><span
                                            class='news-thumb '><img width="36" height="36"
                                                                     src="../wp-content/uploads/2019/02/image2-36x36.jpg"
                                                                     class="attachment-widget size-widget wp-post-image"
                                                                     alt=""
                                                                     srcset="/wp-content/uploads/2019/02/image2-36x36.jpg 36w, /wp-content/uploads/2019/02/image2-80x80.jpg 80w, /wp-content/uploads/2019/02/image2-180x180.jpg 180w, /wp-content/uploads/2019/02/image2-120x120.jpg 120w, /wp-content/uploads/2019/02/image2-450x450.jpg 450w, /wp-content/uploads/2019/02/image2-150x150.jpg 150w"
                                                                     sizes="(max-width: 36px) 100vw, 36px"/></span><strong
                                            class='news-headline'>Tại sao nhà đầu tư ngoại lựa chọn căn hộ VinCity
                                            Sportia?<span class='news-time'>18/02/2019 - 15:18</span></strong></a></li>
                            </ul>
                            <span class="seperator extralight-border"></span></section>
                        <section id="text-4" class="widget clearfix widget_text"><h3 class="widgettitle">VICITY OCEAN
                                PARK &#8211; GIA LÂM</h3>
                            <div class="textwidget">
                                <ul style="list-style-type: disc; padding-left: 20px;">
                                    <li><a href="../vi-tri-du-an-vincity-ocean-park/index.html" target="_blank"
                                           rel="noopener">Vị trí dự án Vincity Ocean Park</a></li>
                                    <li><a href="../quy-hoach-vincity-ocean-park/index.html" target="_blank"
                                           rel="noopener">Chi tiết quy hoạch dự án Vincity Ocean Park Gia Lâm</a></li>
                                    <li><a href="../can-ho-mau-vincity-ocean-park/index.html" target="_blank"
                                           rel="noopener">Nhà mẫu Vincity Ocean Park</a></li>
                                    <li><a href="../mat-bang-thiet-ke-vincity-ocean-park/index.html" target="_blank"
                                           rel="noopener">Mặt bằng &amp; Thiết kế căn hộ Vincity Ocean Park</a></li>
                                    <li><a href="../can-ho-2-phong-ngu-vincity-ocean-park/index.html" target="_blank"
                                           rel="noopener">Chi tiết căn hộ 2 phòng ngủ Vincity Ocean Park Gia Lâm</a>
                                    </li>
                                    <li><a href="../can-ho-3-phong-ngu-du-an-vincity-ocean-park/index.html"
                                           target="_blank" rel="noopener">Chi tiết căn 3 phòng ngủ Vincity Ocean
                                            Park</a></li>
                                    <li><a href="../chinh-sach-gia-ban-can-ho-vincity-ocean-park/index.html"
                                           target="_blank" rel="noopener">Bảng giá &amp; Chính sách bán hàng Vincity
                                            Ocean Park cập nhật mới nhất</a></li>
                                </ul>
                            </div>
                            <span class="seperator extralight-border"></span></section>
                        <section id="text-5" class="widget clearfix widget_text"><h3 class="widgettitle">VINCITY SPORTIA
                                &#8211; TÂY MỖ</h3>
                            <div class="textwidget">
                                <ul style="list-style-type: disc; padding-left: 20px;">
                                    <li><a href="../vi-tri-vincity-sportia/index.html" target="_blank" rel="noopener">Vị
                                            trí dự án VinCity Sportia</a></li>
                                    <li><a href="../thoi-gian-mo-ban-vincity-sportia/index.html" target="_blank"
                                           rel="noopener">Lịch mở bán VinCity Sportia</a></li>
                                    <li><a href="../dieu-chinh-quy-hoach-vincity-tay-mo/index.html" target="_blank"
                                           rel="noopener">Quy hoạch dự án VinCity Tây Mỗ &#8211; Đại Mỗ</a></li>
                                    <li><a href="../thiet-ke-can-ho-vincity-sportia/index.html" target="_blank"
                                           rel="noopener">Nhà mẫu chung cư VinCity Sportia</a></li>
                                    <li><a href="../mat-bang-du-an-vincity-sportia/index.html" target="_blank"
                                           rel="noopener">Mặt bằng tổng thể dự án VinCity Sportia</a></li>
                                    <li><a href="../tien-do-vincity-tay-mo-dai-mo/index.html" target="_blank"
                                           rel="noopener">Tiến độ VinCity Sportia Tây Mỗ &#8211; Đại Mỗ</a></li>
                                </ul>
                            </div>
                            <span class="seperator extralight-border"></span></section>
                        <section id="newsbox-4" class="widget clearfix newsbox"><h3 class="widgettitle">HỎI ĐÁP
                                VINCITY</h3>
                            <ul class="news-wrap image_size_widget">
                                <li class="news-content post-format-standard"><a class='news-link'
                                                                                 title='Những câu hỏi thường gặp khi vay vốn Ngân hàng Techcombank mua VinCity Sportia'
                                                                                 href='../cau-hoi-khi-vay-von-ngan-hang-techcombank-mua-vincity-sportia/index.html'><span
                                            class='news-thumb '><img width="36" height="36"
                                                                     src="../wp-content/uploads/2019/01/vay-mua-nha-vincity-techcombank-36x36.jpg"
                                                                     class="attachment-widget size-widget wp-post-image"
                                                                     alt=""
                                                                     srcset="/wp-content/uploads/2019/01/vay-mua-nha-vincity-techcombank-36x36.jpg 36w, /wp-content/uploads/2019/01/vay-mua-nha-vincity-techcombank-80x80.jpg 80w, /wp-content/uploads/2019/01/vay-mua-nha-vincity-techcombank-180x180.jpg 180w, /wp-content/uploads/2019/01/vay-mua-nha-vincity-techcombank-120x120.jpg 120w, /wp-content/uploads/2019/01/vay-mua-nha-vincity-techcombank-450x450.jpg 450w, /wp-content/uploads/2019/01/vay-mua-nha-vincity-techcombank-150x150.jpg 150w"
                                                                     sizes="(max-width: 36px) 100vw, 36px"/></span><strong
                                            class='news-headline'>Những câu hỏi thường gặp khi vay vốn Ngân hàng
                                            Techcombank
                                            mua VinCity Sportia<span
                                                class='news-time'>20/02/2019 - 10:11</span></strong></a>
                                </li>
                                <li class="news-content post-format-standard"><a class='news-link'
                                                                                 title='Dùng 600 triệu để đầu tư bất động sản hay gửi ngân hàng?'
                                                                                 href='../dung-600-trieu-de-dau-tu-bat-dong-san-hay-gui-ngan-hang/index.html'><span
                                            class='news-thumb '><img width="36" height="36"
                                                                     src="../wp-content/uploads/2018/12/V02_Zone01_pa2_1000-36x36.jpg"
                                                                     class="attachment-widget size-widget wp-post-image"
                                                                     alt="VinCity Sportia Tây Mỗ - Đại Mỗ"
                                                                     srcset="/wp-content/uploads/2018/12/V02_Zone01_pa2_1000-36x36.jpg 36w, /wp-content/uploads/2018/12/V02_Zone01_pa2_1000-80x80.jpg 80w, /wp-content/uploads/2018/12/V02_Zone01_pa2_1000-180x180.jpg 180w, /wp-content/uploads/2018/12/V02_Zone01_pa2_1000-120x120.jpg 120w, /wp-content/uploads/2018/12/V02_Zone01_pa2_1000-150x150.jpg 150w"
                                                                     sizes="(max-width: 36px) 100vw, 36px"/></span><strong
                                            class='news-headline'>Dùng 600 triệu để đầu tư bất động sản hay gửi ngân
                                            hàng?<span class='news-time'>11/02/2019 - 10:30</span></strong></a></li>
                                <li class="news-content post-format-standard"><a class='news-link'
                                                                                 title='Có nên mua chung cư VinCity Sportia để vừa sống vừa làm việc?'
                                                                                 href='../co-nen-mua-vincity-sportia-de-vua-song-vua-lam-viec/index.html'><span
                                            class='news-thumb '><img width="36" height="36"
                                                                     src="../wp-content/uploads/2018/12/Zone01_Gym_02_1000-36x36.jpg"
                                                                     class="attachment-widget size-widget wp-post-image"
                                                                     alt=""
                                                                     srcset="/wp-content/uploads/2018/12/Zone01_Gym_02_1000-36x36.jpg 36w, /wp-content/uploads/2018/12/Zone01_Gym_02_1000-80x80.jpg 80w, /wp-content/uploads/2018/12/Zone01_Gym_02_1000-180x180.jpg 180w, /wp-content/uploads/2018/12/Zone01_Gym_02_1000-120x120.jpg 120w, /wp-content/uploads/2018/12/Zone01_Gym_02_1000-150x150.jpg 150w"
                                                                     sizes="(max-width: 36px) 100vw, 36px"/></span><strong
                                            class='news-headline'>Có nên mua chung cư VinCity Sportia để vừa sống vừa
                                            làm
                                            việc?<span class='news-time'>28/01/2019 - 17:20</span></strong></a></li>
                                <li class="news-content post-format-standard"><a class='news-link'
                                                                                 title='Điểm khác nhau giữa VinCity Ocean Park và VinCity Sportia?'
                                                                                 href='../vincity-ocean-park-khac-gi-so-voi-vincity-sportia/index.html'><span
                                            class='news-thumb '><img width="36" height="36"
                                                                     src="../wp-content/uploads/2019/01/181207_Birdview-9TN_003_1000-36x36.jpg"
                                                                     class="attachment-widget size-widget wp-post-image"
                                                                     alt=""
                                                                     srcset="/wp-content/uploads/2019/01/181207_Birdview-9TN_003_1000-36x36.jpg 36w, /wp-content/uploads/2019/01/181207_Birdview-9TN_003_1000-80x80.jpg 80w, /wp-content/uploads/2019/01/181207_Birdview-9TN_003_1000-180x180.jpg 180w, /wp-content/uploads/2019/01/181207_Birdview-9TN_003_1000-120x120.jpg 120w, /wp-content/uploads/2019/01/181207_Birdview-9TN_003_1000-450x450.jpg 450w, /wp-content/uploads/2019/01/181207_Birdview-9TN_003_1000-150x150.jpg 150w"
                                                                     sizes="(max-width: 36px) 100vw, 36px"/></span><strong
                                            class='news-headline'>Điểm khác nhau giữa VinCity Ocean Park và VinCity
                                            Sportia?<span
                                                class='news-time'>22/01/2019 - 10:46</span></strong></a></li>
                                <li class="news-content post-format-standard"><a class='news-link'
                                                                                 title='Thu nhập 15 triệu/tháng có mua được nhà VinCity hay không?'
                                                                                 href='../thu-nhap-15-trieu-thang-co-mua-duoc-nha-vincity-hay-khong/index.html'><span
                                            class='news-thumb '><img width="36" height="36"
                                                                     src="../wp-content/uploads/2019/01/50477458_2138357699563960_7433110456769708032_o-36x36.jpg"
                                                                     class="attachment-widget size-widget wp-post-image"
                                                                     alt=""
                                                                     srcset="/wp-content/uploads/2019/01/50477458_2138357699563960_7433110456769708032_o-36x36.jpg 36w, /wp-content/uploads/2019/01/50477458_2138357699563960_7433110456769708032_o-80x80.jpg 80w, /wp-content/uploads/2019/01/50477458_2138357699563960_7433110456769708032_o-180x180.jpg 180w, /wp-content/uploads/2019/01/50477458_2138357699563960_7433110456769708032_o-120x120.jpg 120w, /wp-content/uploads/2019/01/50477458_2138357699563960_7433110456769708032_o-450x450.jpg 450w, /wp-content/uploads/2019/01/50477458_2138357699563960_7433110456769708032_o-150x150.jpg 150w"
                                                                     sizes="(max-width: 36px) 100vw, 36px"/></span><strong
                                            class='news-headline'>Thu nhập 15 triệu/tháng có mua được nhà VinCity hay
                                            không?<span
                                                class='news-time'>17/01/2019 - 08:40</span></strong></a></li>
                                <li class="news-content post-format-standard"><a class='news-link'
                                                                                 title='Có nên vay ngân hàng khi mua chung cư VinCity Sportia Tây Mỗ?'
                                                                                 href='../co-nen-vay-ngan-hang-khi-mua-vincity-sportia/index.html'><span
                                            class='news-thumb '><img width="36" height="36"
                                                                     src="../wp-content/uploads/2018/12/vay-ngan-hang-mua-nha-1-36x36.jpg"
                                                                     class="attachment-widget size-widget wp-post-image"
                                                                     alt=""
                                                                     srcset="/wp-content/uploads/2018/12/vay-ngan-hang-mua-nha-1-36x36.jpg 36w, /wp-content/uploads/2018/12/vay-ngan-hang-mua-nha-1-80x80.jpg 80w, /wp-content/uploads/2018/12/vay-ngan-hang-mua-nha-1-180x180.jpg 180w, /wp-content/uploads/2018/12/vay-ngan-hang-mua-nha-1-120x120.jpg 120w, /wp-content/uploads/2018/12/vay-ngan-hang-mua-nha-1-150x150.jpg 150w"
                                                                     sizes="(max-width: 36px) 100vw, 36px"/></span><strong
                                            class='news-headline'>Có nên vay ngân hàng khi mua chung cư VinCity Sportia
                                            Tây
                                            Mỗ?<span class='news-time'>16/01/2019 - 13:56</span></strong></a></li>
                            </ul>
                            <span class="seperator extralight-border"></span></section>
                    </div>
                </aside>
            </div>
        </div>
        <div class='container_wrap footer_color' id='footer'>
            <div class='container'>
                <div class='flex_column av_one_third  first el_before_av_one_third'>
                    <section id="text-2" class="widget clearfix widget_text">
                        <div class="textwidget"><p><a href="../index.html"><img class="alignleft wp-image-3270"
                                                                                src="../wp-content/uploads/2018/08/logo3-01.png"
                                                                                alt="" width="201" height="147"/></a>
                            </p>
                            <p>&nbsp;</p>
                            <p>&nbsp;</p>
                            <p>&nbsp;</p>
                            <p>&nbsp;</p>
                            <p>&nbsp;</p>
                            <p><strong>Email:</strong> duanvincity.hanoi.vn@gmail.com</p>
                            <p><strong>Website:</strong> <a href="../index.html"></a></p>
                        </div>
                        <span class="seperator extralight-border"></span></section>
                </div>
                <div class='flex_column av_one_third  el_after_av_one_third  el_before_av_one_third '>
                    <section id="newsbox-2" class="widget clearfix newsbox"><h3 class="widgettitle">TIN TỨC DỰ ÁN</h3>
                        <ul class="news-wrap image_size_widget">
                            <li class="news-content post-format-standard"><a class='news-link'
                                                                             title='Những tân chủ nhân nói gì khi sở hữu nhà mới tại VinCity Sportia?'
                                                                             href='../tan-chu-nhan-noi-gi-khi-so-huu-nha-moi-tai-vincity-sportia/index.html'><span
                                        class='news-thumb '><img width="36" height="36"
                                                                 src="../wp-content/uploads/2018/12/V02_Zone01_pa2_1000-36x36.jpg"
                                                                 class="attachment-widget size-widget wp-post-image"
                                                                 alt="VinCity Sportia Tây Mỗ - Đại Mỗ"
                                                                 srcset="/wp-content/uploads/2018/12/V02_Zone01_pa2_1000-36x36.jpg 36w, /wp-content/uploads/2018/12/V02_Zone01_pa2_1000-80x80.jpg 80w, /wp-content/uploads/2018/12/V02_Zone01_pa2_1000-180x180.jpg 180w, /wp-content/uploads/2018/12/V02_Zone01_pa2_1000-120x120.jpg 120w, /wp-content/uploads/2018/12/V02_Zone01_pa2_1000-150x150.jpg 150w"
                                                                 sizes="(max-width: 36px) 100vw, 36px"/></span><strong
                                        class='news-headline'>Những tân chủ nhân nói gì khi sở hữu nhà mới tại VinCity
                                        Sportia?<span class='news-time'>02/03/2019 - 08:32</span></strong></a></li>
                            <li class="news-content post-format-standard"><a class='news-link'
                                                                             title='Gia đình trẻ làm gì với bài toán chọn nhà giữa Thủ đô?'
                                                                             href='../gia-dinh-tre-lam-gi-voi-bai-toan-chon-nha-giua-thu-do/index.html'><span
                                        class='news-thumb '><img width="36" height="36"
                                                                 src="../wp-content/uploads/2019/01/image1-36x36.jpg"
                                                                 class="attachment-widget size-widget wp-post-image"
                                                                 alt=""
                                                                 srcset="/wp-content/uploads/2019/01/image1-36x36.jpg 36w, /wp-content/uploads/2019/01/image1-80x80.jpg 80w, /wp-content/uploads/2019/01/image1-180x180.jpg 180w, /wp-content/uploads/2019/01/image1-120x120.jpg 120w, /wp-content/uploads/2019/01/image1-450x450.jpg 450w, /wp-content/uploads/2019/01/image1-150x150.jpg 150w"
                                                                 sizes="(max-width: 36px) 100vw, 36px"/></span><strong
                                        class='news-headline'>Gia đình trẻ làm gì với bài toán chọn nhà giữa Thủ
                                        đô?<span
                                            class='news-time'>23/02/2019 - 11:33</span></strong></a></li>
                            <li class="news-content post-format-standard"><a class='news-link'
                                                                             title='Mua nhà tiện nghi bằng giải pháp tài chính với đại đô thị VinCity'
                                                                             href='../mua-nha-tien-nghi-bang-giai-phap-tai-chinh-voi-vincity/index.html'><span
                                        class='news-thumb '><img width="36" height="36"
                                                                 src="../wp-content/uploads/2019/02/image1-36x36.jpg"
                                                                 class="attachment-widget size-widget wp-post-image"
                                                                 alt=""
                                                                 srcset="/wp-content/uploads/2019/02/image1-36x36.jpg 36w, /wp-content/uploads/2019/02/image1-80x80.jpg 80w, /wp-content/uploads/2019/02/image1-180x180.jpg 180w, /wp-content/uploads/2019/02/image1-120x120.jpg 120w, /wp-content/uploads/2019/02/image1-150x150.jpg 150w"
                                                                 sizes="(max-width: 36px) 100vw, 36px"/></span><strong
                                        class='news-headline'>Mua nhà tiện nghi bằng giải pháp tài chính với đại đô thị
                                        VinCity<span class='news-time'>21/02/2019 - 13:55</span></strong></a></li>
                            <li class="news-content post-format-standard"><a class='news-link'
                                                                             title='Nhà đầu tư Hà Thành ưu tiên lựa chọn căn hộ VinCity Ocean Park Gia Lâm'
                                                                             href='../nha-dau-tu-ha-thanh-uu-tien-lua-chon-can-ho-vincity-ocean-park/index.html'><span
                                        class='news-thumb '><img width="36" height="36"
                                                                 src="../wp-content/uploads/2018/08/bien-ho-nhan-tao-36x36.jpg"
                                                                 class="attachment-widget size-widget wp-post-image"
                                                                 alt="Biển hồ nước mặn tại VinCity Ocean Park"
                                                                 srcset="/wp-content/uploads/2018/08/bien-ho-nhan-tao-36x36.jpg 36w, /wp-content/uploads/2018/08/bien-ho-nhan-tao-80x80.jpg 80w, /wp-content/uploads/2018/08/bien-ho-nhan-tao-180x180.jpg 180w, /wp-content/uploads/2018/08/bien-ho-nhan-tao-120x120.jpg 120w, /wp-content/uploads/2018/08/bien-ho-nhan-tao-150x150.jpg 150w"
                                                                 sizes="(max-width: 36px) 100vw, 36px"/></span><strong
                                        class='news-headline'>Nhà đầu tư Hà Thành ưu tiên lựa chọn căn hộ VinCity Ocean
                                        Park
                                        Gia Lâm<span class='news-time'>21/02/2019 - 10:18</span></strong></a></li>
                        </ul>
                        <span class="seperator extralight-border"></span></section>
                </div>
                <div class='flex_column av_one_third  el_after_av_one_third  el_before_av_one_third '>
                    <section id="text-3" class="widget clearfix widget_text"><h3 class="widgettitle">NHẬN THÔNG TIN VỀ
                            VINCITY</h3>
                        <div class="textwidget"><p>Đăng ký nhận những thông tin mới nhất về các dự án Vincity qua email
                                hàng tuần.</p>
                            <div role="form" class="wpcf7" id="wpcf7-f3304-o4" lang="vi" dir="ltr">
                                <div class="screen-reader-response"></div>
                                <form action="/thank-you/#wpcf7-f3304-o4" method="post"
                                      class="wpcf7-form" novalidate="novalidate">
                                    <div style="display: none;"><input type="hidden" name="_wpcf7" value="3304"/> <input
                                            type="hidden" name="_wpcf7_version" value="5.1.1"/> <input type="hidden"
                                                                                                       name="_wpcf7_locale"
                                                                                                       value="vi"/>
                                        <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f3304-o4"/> <input
                                            type="hidden" name="_wpcf7_container_post" value="0"/> <input
                                            type="hidden" name="g-recaptcha-response" value=""/></div>
                                    <p><span class="wpcf7-form-control-wrap your-name"><input type="text"
                                                                                              name="your-name" value=""
                                                                                              size="40"
                                                                                              class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                                                                              aria-required="true"
                                                                                              aria-invalid="false"
                                                                                              placeholder="Họ và tên*"/></span>
                                    </p>
                                    <p><span class="wpcf7-form-control-wrap your-email"><input type="email"
                                                                                               name="your-email"
                                                                                               value="" size="40"
                                                                                               class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email"
                                                                                               aria-required="true"
                                                                                               aria-invalid="false"
                                                                                               placeholder="Email*"/></span>
                                    </p>
                                    <p><span class="wpcf7-form-control-wrap your-phone"><input type="tel"
                                                                                               name="your-phone"
                                                                                               value="" size="40"
                                                                                               maxlength="14"
                                                                                               minlength="10"
                                                                                               class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-required wpcf7-validates-as-tel"
                                                                                               aria-required="true"
                                                                                               aria-invalid="false"
                                                                                               placeholder="Điện thoại*"/></span>
                                    </p>
                                    <p style="text-align:center;"><input type="submit" value="ĐĂNG KÝ NGAY"
                                                                         class="wpcf7-form-control wpcf7-submit"/></p>
                                    <input type='hidden' class='wpcf7-pum'
                                           value='{"closepopup":false,"closedelay":0,"openpopup":false,"openpopup_id":0}'/>
                                    <div class="wpcf7-response-output wpcf7-display-none"></div>
                                </form>
                            </div>
                        </div>
                        <span class="seperator extralight-border"></span></section>
                </div>
            </div>
        </div>
        <footer class='container_wrap socket_color' id='socket' role="contentinfo" itemscope="itemscope"
                itemtype="https://schema.org/WPFooter">
            <div class='container'><span class='copyright'>&copy; Copyright  - <a href='../index.html'>VinCity Hà
                        Nội</a></span>
                <div style="text-align: right;"><span><a href="../about/index.html">Giới thiệu</a> | </span> <span><a
                            href="../terms-of-service/index.html">Điều khoản dịch vụ</a> | </span> <span><a
                            href="../privacy-policy/index.html">Chính sách bảo mật</a></span></div>
            </div>
        </footer>
    </div>
</div>
<div class="hotline-footer"><a href="#" class="form-banggia" style="color: #fff; display: inline-block;"><img
            src="../wp-content/uploads/2018/10/arrow-pointing-to-right.png" style="vertical-align: middle;"> BẢNG GIÁ
        VINCITY</a></div>
<a href='#top' title='Scroll to top' id='scroll-top-link' aria-hidden='true' data-av_icon=''
   data-av_iconfont='entypo-fontello'><span class="avia_hidden_link_text">Scroll to top</span></a>
<div id="fb-root"></div>
<div id="pum-3289"
     class="pum pum-overlay pum-theme-1135 pum-theme-lightbox popmake-overlay pum-click-to-close click_open"
     data-popmake="{&quot;id&quot;:3289,&quot;slug&quot;:&quot;bang-gia-vincity&quot;,&quot;theme_id&quot;:1135,&quot;cookies&quot;:[],&quot;triggers&quot;:[{&quot;type&quot;:&quot;click_open&quot;,&quot;settings&quot;:{&quot;cookie_name&quot;:&quot;&quot;,&quot;extra_selectors&quot;:&quot;.form-banggia&quot;}}],&quot;mobile_disabled&quot;:null,&quot;tablet_disabled&quot;:null,&quot;meta&quot;:{&quot;display&quot;:{&quot;stackable&quot;:false,&quot;overlay_disabled&quot;:false,&quot;scrollable_content&quot;:false,&quot;disable_reposition&quot;:false,&quot;size&quot;:&quot;medium&quot;,&quot;responsive_min_width&quot;:&quot;0%&quot;,&quot;responsive_min_width_unit&quot;:false,&quot;responsive_max_width&quot;:&quot;500px&quot;,&quot;responsive_max_width_unit&quot;:false,&quot;custom_width&quot;:&quot;640px&quot;,&quot;custom_width_unit&quot;:false,&quot;custom_height&quot;:&quot;380px&quot;,&quot;custom_height_unit&quot;:false,&quot;custom_height_auto&quot;:false,&quot;location&quot;:&quot;center top&quot;,&quot;position_from_trigger&quot;:false,&quot;position_top&quot;:&quot;50&quot;,&quot;position_left&quot;:&quot;0&quot;,&quot;position_bottom&quot;:&quot;0&quot;,&quot;position_right&quot;:&quot;0&quot;,&quot;position_fixed&quot;:false,&quot;animation_type&quot;:&quot;fade&quot;,&quot;animation_speed&quot;:&quot;350&quot;,&quot;animation_origin&quot;:&quot;center top&quot;,&quot;overlay_zindex&quot;:false,&quot;zindex&quot;:&quot;1999999999&quot;},&quot;close&quot;:{&quot;text&quot;:&quot;&quot;,&quot;button_delay&quot;:&quot;0&quot;,&quot;overlay_click&quot;:&quot;1&quot;,&quot;esc_press&quot;:&quot;1&quot;,&quot;f4_press&quot;:false},&quot;click_open&quot;:[]}}"
     role="dialog" aria-hidden="true">
    <div id="popmake-3289"
         class="pum-container popmake theme-1135 pum-responsive pum-responsive-medium responsive size-medium">
        <div class="pum-content popmake-content"><p><img class="aligncenter wp-image-3270"
                                                         src="../wp-content/uploads/2018/08/logo3-01.png" alt=""
                                                         width="120" height="87"/></p>
            <p style="text-align: center;"><span style="font-size: 20px;"><strong><span style="color: #20ad5d;">BẢNG GIÁ CHÍNH THỨC CÁC DỰ ÁN VINCITY</span></strong></span>
            </p>
            <p style="text-align: center; line-height: 1.4;"><em>(Quý khách vui lòng điền đầy đủ thông tin bên dưới để
                    chúng tôi gửi lại BẢNG GIÁ)</em></p>
            <p>&nbsp;</p>
            <div role="form" class="wpcf7" id="wpcf7-f4784-o5" lang="vi" dir="ltr">
                <div class="screen-reader-response"></div>
                <form action="/thank-you/#wpcf7-f4784-o5" method="post" class="wpcf7-form"
                      novalidate="novalidate">
                    <div style="display: none;"><input type="hidden" name="_wpcf7" value="4784"/> <input type="hidden"
                                                                                                         name="_wpcf7_version"
                                                                                                         value="5.1.1"/>
                        <input type="hidden" name="_wpcf7_locale" value="vi"/> <input type="hidden"
                                                                                      name="_wpcf7_unit_tag"
                                                                                      value="wpcf7-f4784-o5"/> <input
                            type="hidden" name="_wpcf7_container_post" value="0"/> <input type="hidden"
                                                                                          name="g-recaptcha-response"
                                                                                          value=""/></div>
                    <p><span class="wpcf7-form-control-wrap your-name"><input type="text" name="your-name" value=""
                                                                              size="40"
                                                                              class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                                                              aria-required="true" aria-invalid="false"
                                                                              placeholder="Họ và tên*"/></span></p>
                    <p><span class="wpcf7-form-control-wrap your-email"><input type="email" name="your-email" value=""
                                                                               size="40"
                                                                               class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email"
                                                                               aria-required="true" aria-invalid="false"
                                                                               placeholder="Email*"/></span></p>
                    <p><span class="wpcf7-form-control-wrap your-phone"><input type="tel" name="your-phone" value=""
                                                                               size="40" maxlength="14" minlength="10"
                                                                               class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-required wpcf7-validates-as-tel"
                                                                               aria-required="true" aria-invalid="false"
                                                                               placeholder="Điện thoại*"/></span></p>
                    <p><span class="wpcf7-form-control-wrap your-project"><select name="your-project"
                                                                                  class="wpcf7-form-control wpcf7-select"
                                                                                  aria-invalid="false">
                                <option value="Chọn dự án">Chọn dự án</option>
                                <option value="Vincity Ocean Park Gia Lâm">Vincity Ocean Park Gia Lâm</option>
                                <option value="Vincity Sportia Tây Mỗ - Đại Mỗ">Vincity Sportia Tây Mỗ - Đại Mỗ</option>
                            </select></span></p>
                    <p style="text-align: center;"><input type="submit" value="TẢI XUỐNG"
                                                          class="wpcf7-form-control wpcf7-submit"/></p> <input
                        type='hidden' class='wpcf7-pum'
                        value='{"closepopup":false,"closedelay":0,"openpopup":false,"openpopup_id":0}'/>
                    <div class="wpcf7-response-output wpcf7-display-none"></div>
                </form>
            </div>
        </div>
        <button type="button" class="pum-close popmake-close" aria-label="Close"> ×</button>
    </div>
</div>
<div id="pum-6351" class="pum pum-overlay pum-theme-1137 pum-theme-hello-box popmake-overlay click_open"
     data-popmake="{&quot;id&quot;:6351,&quot;slug&quot;:&quot;khai-truong-nha-mau-vincity-sportia&quot;,&quot;theme_id&quot;:1137,&quot;cookies&quot;:[{&quot;event&quot;:&quot;on_popup_close&quot;,&quot;settings&quot;:{&quot;name&quot;:&quot;pum-6351&quot;,&quot;key&quot;:&quot;&quot;,&quot;session&quot;:false,&quot;time&quot;:&quot;1 day&quot;,&quot;path&quot;:true}}],&quot;triggers&quot;:[{&quot;type&quot;:&quot;click_open&quot;,&quot;settings&quot;:{&quot;extra_selectors&quot;:&quot;&quot;,&quot;cookie_name&quot;:null}}],&quot;mobile_disabled&quot;:null,&quot;tablet_disabled&quot;:null,&quot;meta&quot;:{&quot;display&quot;:{&quot;stackable&quot;:false,&quot;overlay_disabled&quot;:false,&quot;scrollable_content&quot;:false,&quot;disable_reposition&quot;:false,&quot;size&quot;:&quot;medium&quot;,&quot;responsive_min_width&quot;:&quot;0%&quot;,&quot;responsive_min_width_unit&quot;:false,&quot;responsive_max_width&quot;:&quot;600px&quot;,&quot;responsive_max_width_unit&quot;:false,&quot;custom_width&quot;:&quot;640px&quot;,&quot;custom_width_unit&quot;:false,&quot;custom_height&quot;:&quot;380px&quot;,&quot;custom_height_unit&quot;:false,&quot;custom_height_auto&quot;:false,&quot;location&quot;:&quot;center&quot;,&quot;position_from_trigger&quot;:false,&quot;position_top&quot;:&quot;100&quot;,&quot;position_left&quot;:&quot;0&quot;,&quot;position_bottom&quot;:&quot;0&quot;,&quot;position_right&quot;:&quot;0&quot;,&quot;position_fixed&quot;:false,&quot;animation_type&quot;:&quot;slide&quot;,&quot;animation_speed&quot;:&quot;400&quot;,&quot;animation_origin&quot;:&quot;center center&quot;,&quot;overlay_zindex&quot;:false,&quot;zindex&quot;:&quot;1999999999&quot;},&quot;close&quot;:{&quot;text&quot;:&quot;&quot;,&quot;button_delay&quot;:&quot;0&quot;,&quot;overlay_click&quot;:false,&quot;esc_press&quot;:false,&quot;f4_press&quot;:false},&quot;click_open&quot;:[]}}"
     role="dialog" aria-hidden="true">
    <div id="popmake-6351"
         class="pum-container popmake theme-1137 pum-responsive pum-responsive-medium responsive size-medium">
        <div class="pum-content popmake-content"><h3 style="text-align: center;"><span style="color: #e02d2d;">SỰ KIỆN KHAI TRƯƠNG NHÀ MẪU VINCITY SPORTIA</span>
            </h3>
            <p><a href="../wp-content/uploads/2018/12/khai-truong-nha-mau.jpg"><img
                        class="aligncenter size-full wp-image-6352"
                        src="../wp-content/uploads/2018/12/khai-truong-nha-mau.jpg"
                        alt="Khai trương nhà mẫu VinCity Sportia" width="1280" height="698"/></a></p>
            <div role="form" class="wpcf7" id="wpcf7-f6362-o6" lang="vi" dir="ltr">
                <div class="screen-reader-response"></div>
                <form action="/thank-you/#wpcf7-f6362-o6" method="post" class="wpcf7-form"
                      novalidate="novalidate">
                    <div style="display: none;"><input type="hidden" name="_wpcf7" value="6362"/> <input type="hidden"
                                                                                                         name="_wpcf7_version"
                                                                                                         value="5.1.1"/>
                        <input type="hidden" name="_wpcf7_locale" value="vi"/> <input type="hidden"
                                                                                      name="_wpcf7_unit_tag"
                                                                                      value="wpcf7-f6362-o6"/> <input
                            type="hidden" name="_wpcf7_container_post" value="0"/> <input type="hidden"
                                                                                          name="g-recaptcha-response"
                                                                                          value=""/></div>
                    <p><span class="wpcf7-form-control-wrap your-name"><input type="text" name="your-name" value=""
                                                                              size="40"
                                                                              class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                                                              aria-required="true" aria-invalid="false"
                                                                              placeholder="Họ và tên*"/></span></p>
                    <p><span class="wpcf7-form-control-wrap your-email"><input type="email" name="your-email" value=""
                                                                               size="40"
                                                                               class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email"
                                                                               aria-required="true" aria-invalid="false"
                                                                               placeholder="Email*"/></span></p>
                    <p><span class="wpcf7-form-control-wrap your-phone"><input type="tel" name="your-phone" value=""
                                                                               size="40" maxlength="14" minlength="10"
                                                                               class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-required wpcf7-validates-as-tel"
                                                                               aria-required="true" aria-invalid="false"
                                                                               placeholder="Điện thoại*"/></span></p>
                    <p style="text-align:center;"><input type="submit" value="ĐĂNG KÝ THAM DỰ"
                                                         class="wpcf7-form-control wpcf7-submit"/></p> <input
                        type='hidden' class='wpcf7-pum'
                        value='{"closepopup":false,"closedelay":0,"openpopup":false,"openpopup_id":0}'/>
                    <div class="wpcf7-response-output wpcf7-display-none"></div>
                </form>
            </div>
        </div>
        <button type="button" class="pum-close popmake-close" aria-label="Close"> ×</button>
    </div>
</div>
<div id="pum-1140"
     class="pum pum-overlay pum-theme-1135 pum-theme-lightbox popmake-overlay pum-click-to-close click_open"
     data-popmake="{&quot;id&quot;:1140,&quot;slug&quot;:&quot;tai-tai-lieu-du-an&quot;,&quot;theme_id&quot;:1135,&quot;cookies&quot;:[{&quot;event&quot;:&quot;on_popup_close&quot;,&quot;settings&quot;:{&quot;name&quot;:&quot;pum-1140&quot;,&quot;key&quot;:&quot;&quot;,&quot;session&quot;:true,&quot;time&quot;:&quot;1 day&quot;,&quot;path&quot;:true}}],&quot;triggers&quot;:[{&quot;type&quot;:&quot;click_open&quot;,&quot;settings&quot;:{&quot;cookie_name&quot;:&quot;&quot;,&quot;extra_selectors&quot;:&quot;.click-popup&quot;}}],&quot;mobile_disabled&quot;:null,&quot;tablet_disabled&quot;:null,&quot;meta&quot;:{&quot;display&quot;:{&quot;stackable&quot;:false,&quot;overlay_disabled&quot;:false,&quot;scrollable_content&quot;:false,&quot;disable_reposition&quot;:false,&quot;size&quot;:&quot;medium&quot;,&quot;responsive_min_width&quot;:&quot;0%&quot;,&quot;responsive_min_width_unit&quot;:false,&quot;responsive_max_width&quot;:&quot;500px&quot;,&quot;responsive_max_width_unit&quot;:false,&quot;custom_width&quot;:&quot;640px&quot;,&quot;custom_width_unit&quot;:false,&quot;custom_height&quot;:&quot;380px&quot;,&quot;custom_height_unit&quot;:false,&quot;custom_height_auto&quot;:false,&quot;location&quot;:&quot;center&quot;,&quot;position_from_trigger&quot;:false,&quot;position_top&quot;:&quot;100&quot;,&quot;position_left&quot;:&quot;0&quot;,&quot;position_bottom&quot;:&quot;0&quot;,&quot;position_right&quot;:&quot;0&quot;,&quot;position_fixed&quot;:false,&quot;animation_type&quot;:&quot;fade&quot;,&quot;animation_speed&quot;:&quot;350&quot;,&quot;animation_origin&quot;:&quot;center top&quot;,&quot;overlay_zindex&quot;:false,&quot;zindex&quot;:&quot;1999999999&quot;},&quot;close&quot;:{&quot;text&quot;:&quot;&quot;,&quot;button_delay&quot;:&quot;0&quot;,&quot;overlay_click&quot;:&quot;1&quot;,&quot;esc_press&quot;:&quot;1&quot;,&quot;f4_press&quot;:false},&quot;click_open&quot;:[]}}"
     role="dialog" aria-hidden="true">
    <div id="popmake-1140"
         class="pum-container popmake theme-1135 pum-responsive pum-responsive-medium responsive size-medium">
        <div class="pum-content popmake-content"><h3 style="text-align: center;"><span style="color: #20ad5d;"><span
                        style="vertical-align: inherit;"><span style="vertical-align: inherit;">TẢI XUỐNG TRỌN BỘ THÔNG TIN VỀ VINCITY</span></span></span>
            </h3>
            <p>&nbsp;</p>
            <p><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"><div role="form"
                                                                                                  class="wpcf7"
                                                                                                  id="wpcf7-f127-o7"
                                                                                                  lang="vi" dir="ltr">
                            <div class="screen-reader-response"></div>
                            <form action="/thank-you/#wpcf7-f127-o7" method="post" class="wpcf7-form"
                                  novalidate="novalidate">
                                <div style="display: none;"><input type="hidden" name="_wpcf7" value="127"/> <input
                                        type="hidden"
                                        name="_wpcf7_version"
                                        value="5.1.1"/>
                                    <input type="hidden" name="_wpcf7_locale" value="vi"/> <input type="hidden"
                                                                                                  name="_wpcf7_unit_tag"
                                                                                                  value="wpcf7-f127-o7"/>
                                    <input
                                        type="hidden" name="_wpcf7_container_post" value="0"/> <input type="hidden"
                                                                                                      name="g-recaptcha-response"
                                                                                                      value=""/></div>
            <p><span class="wpcf7-form-control-wrap your-name"><input type="text" name="your-name" value="" size="40"
                                                                      class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                                                      aria-required="true" aria-invalid="false"
                                                                      placeholder="Họ và tên*"/></span></p>
            <p><span class="wpcf7-form-control-wrap your-email"><input type="email" name="your-email" value="" size="40"
                                                                       class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email"
                                                                       aria-required="true" aria-invalid="false"
                                                                       placeholder="Email*"/></span></p>
            <p><span class="wpcf7-form-control-wrap your-phone"><input type="tel" name="your-phone" value="" size="40"
                                                                       maxlength="14" minlength="10"
                                                                       class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-required wpcf7-validates-as-tel"
                                                                       aria-required="true" aria-invalid="false"
                                                                       placeholder="Điện thoại*"/></span></p>
            <p><span class="wpcf7-form-control-wrap your-mess"><textarea name="your-mess" cols="40" rows="10"
                                                                         class="wpcf7-form-control wpcf7-textarea"
                                                                         aria-invalid="false"
                                                                         placeholder="Lời nhắn của bạn"></textarea></span>
            </p>
            <p style="text-align: center;"><input type="submit" value="GỬI ĐI" class="wpcf7-form-control wpcf7-submit"/>
            </p> <input type='hidden' class='wpcf7-pum'
                        value='{"closepopup":false,"closedelay":0,"openpopup":false,"openpopup_id":0}'/>
            <div class="wpcf7-response-output wpcf7-display-none"></div>
            </form></div>
        </span></span></p></div>
    <button type="button" class="pum-close popmake-close" aria-label="Close"> ×</button>
</div>
</div>
<script type='text/javascript'>
    var avia_framework_globals = avia_framework_globals || {};
    avia_framework_globals.frameworkUrl = '../wp-content/themes/enfold/framework/index.html';
    avia_framework_globals.installedAt = '../wp-content/themes/enfold/index.html';
    avia_framework_globals.ajaxurl = '../wp-admin/admin-ajax.html';
</script>
<!--<script data-minify="1" type='text/javascript'
        src='../wp-content/cache/min/1/wp-content/plugins/contact-form-7/includes/js/scripts-7fc355c3ec8b78eae8432327cb54c0ab.js'></script>-->
<script type='text/javascript'
        src='../wp-content/cache/busting/1/wp-content/plugins/table-of-contents-plus/front.min-1509.js'></script>
<script type='text/javascript' src='../wp-content/cache/busting/1/wp-includes/js/jquery/ui/core.min-1.11.4.js'></script>
<script type='text/javascript'
        src='../wp-content/cache/busting/1/wp-includes/js/jquery/ui/position.min-1.11.4.js'></script>
<script data-minify="1" type='text/javascript'
        src='../wp-content/cache/min/1/wp-content/uploads/pum/pum-site-scripts-0a479b520b7c12673ac94f5903224e6e.js'></script>
<script type='text/javascript' src='../wp-includes/js/wp-embed.min.js'></script>
<script data-minify="1" type='text/javascript'
        src='../wp-content/cache/min/1/wp-content/uploads/dynamic_avia/avia-footer-scripts-bf1ad50fc34d1ddb5d6dfcf162be87f8-5912b767a2132c716547c28837ef7102.js'></script>
</body>
</html>