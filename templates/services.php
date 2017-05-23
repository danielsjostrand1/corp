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
      
    <section class="mt-90 service-order text-center row small-up-2 medium-up-3 large-up-5">
        
        <?php 
        $service_number = 1;
        foreach($page->services as $service) { ?>
            <div class="column column-block">
                <a href="#service-<?php echo $service_number; ?>">
                    <img src="<?php echo $service->icon->url; ?>" width="105" alt="<?php echo $service->title; ?>">
                    <p class="mt-15"><?php echo $service_number; ?>. <?php echo $service->title; ?></p>
                </a>
            </div>   
        <?php 
        $service_number++; // Increase service number value
        } 
        ?>

    </section>

    <article class="mt-60 single-article">
        
        <div class="row small-centered small-12 medium-10 large-8 columns">
            <?php 
            $service_number = 1;
            foreach($page->services as $service) 
            { ?>
            <h2 id="service-<?php echo $service_number; ?>"><?php echo $service->title; ?></h2>
            <?php echo $service->body; ?>
            <?php
            $service_number++; // Increase service number value
            } 
            ?>
        </div>
    </article><!--end row-->
      
    <section class="mt-120 cta">
        <div class="row">
            <div class="text-center small-centered small-10 medium-8 large-7 columns">
                <h3><?php echo $page->cta_text; ?></h3>
                <?php if($page->cta_link) {
                  echo "<a class='mt-15 lead underlined' href='{$page->cta_link->url}'>{$page->cta_link->title}</a>";
                } ?>
            </div>
        </div>  
    </section>
      
<?php include("./footer.inc");?>
