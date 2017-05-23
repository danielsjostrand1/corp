<?php include("./header.inc");?>
    
    <section class="featured">
        <div class="row">
            <div class="mt-60 small-12 medium-5 columns">
                <h1><?php echo $page->title; ?></h1>
            </div>
        </div>
    </section>

    <section class="row small-12 columns">
        <div class="mt-60 lead row">
            <div class="mt-30 small-12 large-6 columns">
                <p>Oavsett om du är en framtida kund, leverantör eller medarbetare så är vi glada att höra från dig.</p>
            </div>
            <div class="mt-30 small-12 medium-6 large-3 columns">
                073-747 08 50<br>
                <a href="mailto:info@corptrade.se">info@corptrade.se</a>
            </div>
            <div class="mt-30 small-12 medium-6 large-3 columns">
                Östra Hamngatan 37,<br>
                411 10 Göteborg
            </div>
        </div>
    </section>

    <section id="coworkers" class="portrait text-center row">
        <hr class="mb-90">
        <?php foreach($page->coworkers as $coworker) { ?>
            <div class="mb-30 lead small-12 medium-4 columns">
                <img src="<?php echo $coworker->portrait_image->url; ?>" alt="<?php echo $coworker->title; ?>">
                <p class="mt-30 mb-0"><b><?php echo $coworker->title; ?></b></p>
                <span><?php echo $coworker->business_title; ?></span><br>
                <a href="mailto:<?php echo $coworker->email; ?>"><?php echo $coworker->email; ?></a><br>
                <span><?php echo $coworker->phone; ?></span>
            </div>
        <?php } ?>    
        <hr>
        <div id="map" class="mt-90 mb-120 small-12 columns">
            <?php
                $map = $modules->get('MarkupGoogleMap');
                echo $map->render($page, 'map');
            ?>
        </div>
    </section><!--end row-->
      
<?php include("./footer.inc");?>
