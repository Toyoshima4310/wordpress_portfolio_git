<?php
add_action( 'wp_footer', 'add_origin_thanks_page' );
function add_origin_thanks_page() {
    echo <<< EOC
    <script>
      document.addEventListener( 'wpcf7mailsent', function( event ) {
        location = 'https://www.tsportfolio.uh-oh.jp/?page_id=6';
      }, false );
    </script>
   EOC;
}
?>