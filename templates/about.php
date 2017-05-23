<?php include("./header.inc");?>

    <section class="featured">
        <div class="row">
            <div class="mt-60 small-12 medium-5 columns">
                <h1><?php echo $page->title; ?></h1>
            </div>
            <div class="mt-60 lead small-12 medium-7 columns">
                <?php echo $page->body; ?>
            </div>
        </div>
    </section>

    <section class="mt-90 team">
        <div class="row">
            <div class="text-center small-11 medium-10 large-8 small-centered columns">
                <h2>Vårt team</h2>
                <?php /* <p class="lead">Vi har ett aktivt samarbete med flera aktörer inom företagsrådgivning och ägarskiften för att kunna erbjuda en heltäckande tjänsteportfölj.</p> */ ?>
            </div>
        </div>
        
        <?php 
            $settings = $pages->get(1019);
            foreach($settings->coworkers as $coworker) { 
        ?>
        <div class="mt-90 row">
            <div class="small-12 medium-5 columns">
                <img src="<?php echo $coworker->portrait_image->url; ?>" alt="<?php echo $coworker->title; ?>">
            </div>
            <div class="mt-60 small-12 medium-7 columns">
                <h3><?php echo $coworker->title; ?></h3>
                <p><?php echo $coworker->business_title; ?></p>
                <p class="lead"><?php echo $coworker->excerpt; ?></p>
                <a href="<?php echo $coworker->linkedin_url; ?>" target"_blank" role="button"><img src="<?php echo $config->urls->templates ?>images/icon-linkedin.svg" width="30" alt="Linkedin"></a>
                <a class="coworker-email" href="mailto:<?php echo $coworker->email; ?>"><img src="<?php echo $config->urls->templates ?>images/icon-envelope.svg" width="36" alt="Email"></a>
            </div>
        </div>
        <?php } ?> 
    </section>
      
    <section class="mt-120 cta">
        <div class="row">
            <div class="text-center small-centered small-10 medium-8 large-7 columns">
                <h3><?php echo $page->cta_text; ?></h3>
                <?php if($page->cta_link) {
                  echo "<a class='mt-15 lead underlined' href='{$page->cta_link->url}'>{$page->cta_link->title}</a>";
                } ?>
            </div>
        </div>  
    </section><!--end cta-->
      
<?php include("./footer.inc");?>
