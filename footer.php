    </div> <!-- End of general-wrap-content -->
</section> <!-- End of general-wrap -->



<footer>
<section id="footer">
    <div id="footer-header">
    </div>
    <nav id="footer-menu">        
         <?php wp_nav_menu( 
                      array( 'theme_location' => 'footer-menu',
                             'container_id' => 'footer-menu',
                             'container'       => 'nav' )  );  ?>    </nav> 
</section>

<section id="copyright">
   Lorem Ipsum
</section>

</footer>


<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
<script>
    var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
    (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
    g.src='//www.google-analytics.com/ga.js';
    s.parentNode.insertBefore(g,s)}(document,'script'));
</script>

<?php wp_footer(); ?>
 
</body>
</html>