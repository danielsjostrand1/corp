    <footer>
        <div class="mt-30 row">
            <div class="mt-60 small-12 medium-4 columns">
                <nav>
                    <h5>Navigation</h5>
                    <ul class="vertical menu">
                        <?php
                        $root = $pages->get("/");
                        $children = $root->children("limit=5");
                        foreach($children as $child) {
                            echo "<li><a href='{$child->url}'>{$child->title}</a></li>";
                        }
                        ?>
                    </ul>
                </nav>
            </div>
            <div class="mt-60 small-12 medium-4 columns">
                <h5>Kontakt</h5>
                <ul class="no-bullet">
                    <li>073-747 08 50</li>
                    <li><a href="mailto:info@corptrade.se">info@corptrade.se</a></li>
                </ul>
            </div>
            <div class="mt-60 small-12 medium-4 columns">
                <h5>Hitta hit</h5>
                <ul class="no-bullet">
                    <li>Corptrade Exitstrategi Väst AB</li>
                    <li>
                        <span>
                            Östra Hamngatan 37<br>
                            411 10 Göteborg,<br>
                            Sverige
                        </span>
                    </li>
                </ul>
            </div>    
        </div>
        <div class="bottom mt-120">
            <div class="row small-12 columns">
                <small>© Copyright <?php echo date('Y'); ?> Corptrade Exitstrategi Väst AB</small>
            </div>
        </div>   
    </footer>
    
    <?php 

	// If the page is editable, then output a link that takes us straight to the page edit screen:
	if($page->editable()) {
		echo "<a id='editpage' href='{$config->urls->admin}page/edit/?id={$page->id}'>Edit</a>"; 
	}

	?>
      
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="<?php echo $config->urls->templates ?>js/foundation.min.js"></script>
    <script src="<?php echo $config->urls->templates ?>js/jquery.cookieBar.min.js"></script>
    <script src="<?php echo $config->urls->templates ?>js/headroom.min.js"></script>
    <script src="<?php echo $config->urls->templates ?>js/app.js"></script>
    
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-97669624-1', 'auto');
      ga('send', 'pageview');

    </script>
    
    <?php // include("./_cookies.php");?>

  </body>
</html>
