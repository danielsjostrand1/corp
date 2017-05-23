<?php $homepage = $pages->get("/"); ?>

<!doctype html>
<html class="no-js" lang="sv">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo $page->SEO_description; ?>">
    <meta property="og:url" content="<?php echo $page->httpUrl; ?>">
    <meta property="og:type" content="website">
    <meta property="og:title" content="<?php echo $page->get("SEO_title|title"); ?>">
    <meta property="og:description" content="<?php echo $page->SEO_description; ?>">
    <title><?php echo $page->get("SEO_title|title"); ?></title>
    <link rel="stylesheet" href="<?php echo $config->urls->templates ?>css/app.css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,400i,700|Noto+Serif:400,700" rel="stylesheet">
    <link rel="icon" href="<?php echo $config->urls->templates ?>favicon.ico" type="image/x-icon"/>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC8gYZKFrQjwNNRHALrDWkd0ApHcyiNjZc"></script>
  </head>
  <body class="template-<?php echo $page->template; ?>">
    <header>
        <div class="clearfix">
            <div class="float-left">
                <a href="<?php echo $homepage->url; ?>">
                    <img class="logo" src="<?php echo $config->urls->templates ?>images/logo.svg" width="210" height="42" alt="Corptrade">
                </a>
            </div>
            <div class="float-right">
                <div class="responsive-toggle" data-responsive-toggle="responsive-menu">
                    <a class="nav-toggle" data-toggle="responsive-menu"><span class="hamburger-icon"></span></a>
                </div>
                <nav class="responsive-menu" id="responsive-menu">
                    <ul class="vertical medium-horizontal menu">
                        <?php
                        $children = $homepage->children;
                        $children->prepend($homepage);
                        foreach($children as $child) {
                            $active = $child === $page->rootParent ? " class='active'" : '';
                            echo "<li$active><a href='{$child->url}'><span>{$child->title}</span></a></li>";
                        }
                        ?>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
