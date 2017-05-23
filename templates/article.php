<?php include("./header.inc");?>

    <article>
        <div class="mt-90 row article-header">
            <div class="mt-120 text-center small-centered small-12 medium-10 large-8 columns">
                <a class="mb-30 article-back" href="<?php echo $page->parent->url; ?>">Tillbaka till nyheter</a>
                <h1><?php echo $page->title; ?></h1>
                <p class="mt-30 mb-60"><?php echo date("j F, Y", $page->created); ?></p>
            </div>
            <hr>
        </div><!--end row-->
        <div class="mt-60 row">
            <div class="small-centered small-12 medium-10 large-8 columns">
                <?php echo $page->body; ?>
                
                <div class="mt-60 social-share">
                    
                    <?php
                        // Encode text for linking purpose
                        $link_title = rawurlencode($page->title);
                        $link_url = rawurlencode($page->httpUrl);
                    ?>
                    
                    <a href="#" target"_blank" role="button"><img src="<?php echo $config->urls->templates ?>images/icon-linkedin.svg" width="30" alt="Linkedin"></a>
                    <a href="https://twitter.com/intent/tweet" role="button"><img src="<?php echo $config->urls->templates ?>images/icon-twitter.svg" width="30" alt="Twitter"></a>
                    <a href="mailto:?&subject=Från Corptrade.se: <?php echo $link_title; ?>&body=Jag%20rekommenderar%20dig%20att%20bes%C3%B6ka%20corptrade.se%20och%20l%C3%A4sa%3A%0A%0A<?php echo $link_title; ?>%0A<?php echo $link_url; ?>"><img src="<?php echo $config->urls->templates ?>images/icon-envelope.svg" width="30" alt="Email"></a>
                    
                    
                    
                    <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
                    
                </div><!---end social-share--->
            </div>
        </div><!--end row-->
    </article>  
      
    <?php /* <section class="mt-120 article-grid row small-up-1 medium-up-2 large-up-3">
        <h3 class="text-center">Relaterade nyheter</h3>
        <div class="mt-30 column column-block">
            <div>
                <a href="nyhet.html">
                    <h4>Ägarbreddning i Mässbolaget i Tranås</h4>
                    <p class="mt-15">Aktiepost i koncernen Mässbolaget i Tranås säljs till investeringsbolaget...</p>
                    <div>
                        <span><b>Kategori</b></span>
                        <span>28 Februari, 2017</span>
                    </div>
                </a>
            </div>
        </div>
        <div class="mt-30 column column-block">
            <div>
                <a href="nyhet.html">
                    <h4>Succékedjan Tugg Burgers till salu</h4>
                    <p class="mt-15">Aktiepost i koncernen Mässbolaget i Tranås säljs till investeringsbolaget...</p>
                    <div>
                        <span><b>Kategori</b></span>
                        <span>20 Februari, 2017</span>
                    </div>
                </a>
            </div>
        </div>
        <div class="mt-30 column column-block">
            <div>
                <a href="nyhet.html">
                    <h4>Investmentbolaget PEQ Invest gör offensivt tilläggsförvärv</h4>
                    <p class="mt-15">Aktiepost i koncernen Mässbolaget i Tranås säljs till investeringsbolaget...</p>
                    <div>
                        <span><b>Kategori</b></span>
                        <span>10 Januari, 2017</span>
                    </div>
                </a>
            </div>
        </div>
    </section> */ ?>
      
    <?php include("./_newsletter.php");?>
        
<script>
    document.getElementById('facebook-shareBtn').onclick = function() {
      FB.ui({
        method: 'share',
        mobile_iframe: true,
        href: 'https://developers.facebook.com/docs/',
      }, function(response){});
    }
</script>
      
<?php include("./footer.inc");?>
