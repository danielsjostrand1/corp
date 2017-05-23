<?php include("./header.inc");?>
    
    <section class="featured">
        <div class="row">
            <div class="mt-60 small-12 medium-5 columns">
                <h1><?php echo $page->title; ?></h1>
            </div>
        </div>
    </section>

    <section class="article-list row">
        
        <?php /* Ta bort kommentar när kategorier aktiverats <nav class="mt-30 mb-60 small-12 columns">
            <ul class="horizontal menu">
                <li><a class="active" href="#">Alla ämnen</a></li>
                <li><a href="#">Nyheter</a></li>
                <li><a href="#">Kategori 2</a></li>
                <li><a href="#">Kategori 3</a></li>
                <li><a href="#">Kategori 4</a></li>
            </ul>
        </nav> */ ?>
        
        <?php 
            $articles = $page->children("limit=10");
            foreach($articles as $article) { 
        ?>
        <article class="clearfix">
            <a href="<?php echo $article->url; ?>">
                <div class="small-12 medium-6 columns">
                    <h2><?php echo $article->title; ?></h2>
                    <p><?php echo excerpt($article->body); ?></p>
                    <span><?php echo date("j F, Y", $article->created); ?></span>
                </div>
                <div class="small-4 small-offset-2 columns show-for-medium">
                    <?php if($article->article_image) { ?>
                        <img src="<?php echo $article->article_image->url; ?>" alt="<?php echo $article->title; ?>">
                    <?php } ?>
                </div>
            </a>
        </article>
        <?php } ?> 
        
        <?php
            echo $articles->renderPager(array(
                'nextItemLabel' => "Nästa",
                'nextItemClass' => "pagination-next",
                'previousItemLabel' => "Föregående",
                'previousItemClass' => "pagination-previous",
                'currentItemClass' => "current",
                'listMarkup' => "<ul class='mt-60 pagination text-center'>{out}</ul>",
                'itemMarkup' => "<li class='{class}'>{out}</li>",
                'linkMarkup' => "<a href='{url}'>{out}</a>"
            ));
        ?>
        
    </section><!--end article-list-->
      
    <?php include("./_newsletter.php");?>
      
<?php include("./footer.inc");?>
