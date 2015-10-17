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
                    <li><a href="#"><i class="fa fa-home"></i> <?=Language::lang('home')?></a></li>
                    <li><a href="#"><i class="fa fa-home"></i> <?=Language::lang('test')?></a></li>
                </ul>
            </div>
        </nav>
    </header>