        <?php wp_footer(); ?>
        <?php

        /* Set your UA identifier as String here */
        $googleAnalyticsUA = 'UA-XXXXXXXX-X';

        if ( !empty( $googleAnalyticsUA ) ) :
        ?>
        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

            ga('create', <?= $googleAnalyticsUA ?>, 'auto');
            ga('send', 'pageview');
        </script>
        <?php
        endif;
        ?>
    </body>
</html>