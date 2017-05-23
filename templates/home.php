<?php include("./header.inc");?>

    <section class="hero">
        <div class="row">
            <div class="hero-content">
                <h1><?php echo $page->headline; ?></h1>
                <p class="lead">Öka värdet och minska friktionen i en framtida företagstransaktion</p>
                <a class="large hollow button" href="<?php echo $pages->get(1028)->url; ?>">Om Corptrade</a>
            </div>
        </div>
    </section><!--end hero-->
      
    <section class="service-list clearfix">
        <div class="triangle-background"></div>
        <div class="row">
            <div class="mt-120 text-center small-centered small-12 medium-10 large-8 columns">
                <h2>Vad vi kan göra för dig</h2>
                <p class="lead">Vi erbjuder ett paket av tjänster som hjälper ditt bolag att skapa värden i en framtida exit.</p>
            </div>
        </div>
        <div class="mt-30 row small-12 large-10 large-centered small-up-1 medium-up-2">
            
            <?php 
            $service_page = $pages->get(1021);
            $service_number = 1;
            foreach($service_page->services as $service) {
            ?>
            <div class="column column-block">
                <a href="<?php echo $service_page->url; ?>#service-<?php echo $service_number; ?>">
                    <img src="<?php echo $service->icon->url; ?>" width="60" alt="<?php echo $service->title; ?>">
                    <div>
                        <h5><?php echo $service_number; ?>. <?php echo $service->title; ?></h5>
                        <p><?php echo $service->excerpt; ?></p>
                    </div>
                </a>
            </div>
            <?php 
            $service_number++;   
            } 
            ?>
            
        </div>
        
        <div class="mt-90 text-center small-12 columns">
            <a class="large hollow button" href="<?php echo $service_page->url; ?>">Vad vi kan göra för dig</a>
        </div>
    </section><!--end service-list-->
    
    <div class="mt-120 home-about">
        <section class="row">
            <div class="small-12 small-centered medium-10 columns">
                <h3>Corptrade skapades från erfarenheterna av ett hundratal genomförda företagstransaktioner. Vi har lärt oss hur köpare och andra involverade parter, som exempelvis bank och revisorer, ser på målbolaget. Det har gett oss insikt i vilka förberedelser och potentiella åtgärder som krävs för en optimal exit. Med vår exitstrategi skapar vi bra förutsättningar för ett framtida ägarskifte, oavsett om du ämnar sälja internt eller externt.</h3>
                <a class="mt-30 lead underlined" href="<?php echo $pages->get(1028)->url; ?>">Mer om oss</a>
            </div>
        </section>
    </div>
      
    <div class="mt-90 article-grid row small-up-1 large-up-3" data-equalizer>
        
        <?php 
            $articles = $pages->get(1029)->children;
            foreach($articles as $article) { 
        ?>
        <article class="mt-30 column column-block">
            <a href="<?php echo $article->url; ?>">
                <div class="clearfix" data-equalizer-watch>
                    <h4><?php echo $article->title; ?></h4>
                    <p><?php echo excerpt($article->body); ?></p>
                </div>
                <a class="underlined" href="<?php echo $article->url; ?>">Läs mer</a>
            </a>
        </article>
        <?php } ?>
        
    </div><!--end article-grid-->
      
    <?php include("./_newsletter.php");?>

<?php include("./footer.inc");?>