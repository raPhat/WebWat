<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> <?=Language::lang('page_title')?> </title>
    <link rel="stylesheet" href="/css/style.css"/>
    <link rel="stylesheet" href="/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="/css/bootstrap.css" rel="stylesheet">
    <script src="/js/masonry.pkgd.min.js"></script>
    <script src="/js/function.js"></script>
</head>
<body>
<div class="wrapper">

    <!-- หัวเว็บ -->
    <header id="header">
        <div class="hTitle">
            <div class="container">
                <div class="logo"></div>
                <div class="title">
                    <h1>
                        <?=Language::lang('head_th_title')?>
                    </h1>
                    <span>
                        <?=Language::lang('head_en_title')?>
                    </span>
                </div>
            </div>
        </div>
        <nav class="topMenu">
            <div class="container">
                <ul class="horizon">

                    <li><a href="home"><i class="fa fa-home"></i> <?=Language::lang('home')?></a></li>
                    <li><a href="history"><i class="fa fa-history"></i> <?=Language::lang('history')?></a></li>
                    <li><a href="importantplace"><i class="fa fa-university"></i> <?=Language::lang('importantplace')?></a></li>
                    <li><a href="gallery"><i class="fa fa-picture-o"></i> <?=Language::lang('gallery')?></a></li>
                    <li><a href="guestbook"><i class="fa fa-book"></i> <?=Language::lang('guestbook')?></a></li>
                    <li><a href="contact"><i class="fa fa-commenting"></i> <?=Language::lang('contact')?></a></li>
                    <li><a href="map"><i class="fa fa-map-marker"></i> <?=Language::lang('map')?></a></li>
                </ul>
            </div>
        </nav>
    </header>