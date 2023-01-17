<!DOCTYPE html>

<html lang="en">
<head>

    <title>@yield('title', '')</title>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <link rel="canonical" href="http://debayluxhotel.com/" />
	<meta property="og:locale" content="en_US" />
    <meta content="DeBay Lux Hotel &#038; Suites is the most preferred hotel in West Africa, and it is all about the right mix! Located in the heart of Victoria Island, we offer our clients &hellip; Home Read More &raquo" name="og:description">
    <meta name="description" content="DeBay Hotel &#038; Suites is the most preferred hotel in West Africa, and it is all about the right mix! Located in the heart of Victoria Island, we offer our clients &hellip; Home Read More &raquo">
    <meta name="keywords" content="hotels in nigeria, hotels,best hotels in lagos,  hotel in lagos, best hotels in lagos, hotel and suities, DeBay Lux Hotel, debayluxhotelandsuites,lodging, accommodation, hotel, Hotels, special offers, packages, specials, weekend breaks, city breaks, deals, budget, cheap, discount, savings" />
    <meta property="og:type" content="website" />
    <meta property="og:site_name" content="DeBay Lux Hotel & suites | Hotel in Lagos "/>
    <meta property="og:title" content=" Debay Lux Hotel and Suites"/>
    <meta property="og:url" content="https://www.debayluxhotel.com/" />
    <meta property="og:image" content="https://debayluxhotel.com/assets/img/IMG-20221224-WA0052.jpg" />
    <meta property="og:site_name" content="Jerixhotel.com" />
    <meta name="generator" content="Powered by Dex Novate"/>
    <link rel="icon" href="https://debayluxhotel.com/assets/img/IMG-20221224-WA0052.jpg" sizes="32x32" />
 <link rel="icon" href="https://debayluxhotel.com/assets/img/IMG-20221224-WA0052.jpg" sizes="192x192" />
<link rel="apple-touch-icon" href="https://debayluxhotel.com/assets/img/IMG-20221224-WA0052.jpg" />
<meta name="msapplication-TileImage" content="https://debayluxhotel.com/assets/img/IMG-20221224-WA0052.jpg" />
   <script type="application/ld+json" class="yoast-schema-graph">{"@context":"https://schema.org","@graph":[{"@type":"WebSite","@id":"http://https://debayluxhotel.com/#website","url":"http://https://debayluxhotel.com/","name":"DeBay Lux Hotel and Suites","description":"Your Neighboorhood 5 Star Hotel","potentialAction":[{"@type":"SearchAction","target":{"@type":"EntryPoint","urlTemplate":"http://https://debayluxhotel.com/?s={search_term_string}"},"query-input":"required name=search_term_string"}],"inLanguage":"en-US"},{"@type":"ImageObject","@id":"http://debayluxhotel.com/#primaryimage","inLanguage":"en-US","url":"http://debayluxhotel.com/assets/img/IMG-20221224-WA0052.jpg","contentUrl":"http://debayluxhotel.com/assets/img/IMG-20221224-WA0052.jpg","width":57,"height":400},{"@type":"WebPage","@id":"http://debayluxhotel.com/#webpage","url":"http://debayluxhotel.com/","name":"Home - DeBay Lux Hotel and Suites","isPartOf":{"@id":"http://debayluxhotel.com/#website"},"primaryImageOfPage":{"@id":"http://debayluxhotel.com/#primaryimage"},"datePublished":"2018-09-26T08:48:07+00:00","dateModified":"2022-11-06T08:37:34+00:00","breadcrumb":{"@id":"http://debayluxhotel.com/#breadcrumb"},"inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["http://debayluxhotel.com/"]}]},{"@type":"BreadcrumbList","@id":"http://debayluxhotel.com/#breadcrumb","itemListElement":[{"@type":"ListItem","position":1,"name":"Home"}]}]}</script>
	<!-- / Yoast SEO plugin. -->
<!-- Favicons -->
    <link href="/assets/img/IMG-20221224-WA0052.jpg" rel="icon">
    <link href="/assets/img/apple-touch-icon.html" rel="apple-touch-icon">
    <!-- bundle css -->
    <link href="/assets/css/bundle.css" rel="stylesheet" />
<link rel="stylesheet" href="./assets/css/style.css">
<link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css">
</head>

<body>

    <!--PRELOAD-->
    <div id="loading">
        <span class="preloader-dot"></span>
    </div>
    <!--PRELOAD-->
    <!--HEADER-->
   @yield('header')

    <!--HEADER-->
    <!--MAIN PAGE-->
    <main>
       @yield('content')
    </main>
    <!--MAIN PAGE-->
    <!-- Footer -->
        @include('layouts.footer')
    <!-- Footer -->
    <!-- Goto top -->
    <a href="javascript:;" class="back-to-top"><i class="las la-angle-up"></i></a>
    <!-- Goto top -->
    <!-- bundle Js -->
    @include('sweetalert::alert')
    <script src="/assets/js/bundle.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
      </script>
</body>
</html>