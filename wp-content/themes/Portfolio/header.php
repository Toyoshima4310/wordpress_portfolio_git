<!doctype html>
<html <?php language_attributes(); ?>>
  <head>
    <!-- Required meta tags -->
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo esc_url( get_stylesheet_uri() ); ?>" >
    <script src="https://cdn.jsdelivr.net/npm/vue@2"></script>
    
    <title><?php echo bloginfo( 'name' ); ?></title>
    <!-- <script>
      document.addEventListener( 'wpcf7mailsent', function( event ) {
          location = 'https://www.xn--n8j5fqa2502b.com/';
      }, false );
    </script> -->
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    

    <!-- スマホ版ヘッダー -->
    <div class="d-md-none">
      <div class="logo my-3 text-center"><?php echo bloginfo( 'name' ); ?></div>
      
      <div class="header  d-flex justify-content-center d-md-none">
        <div class="link flex-fill text-center"><a href="#perform">過去の実績</a></div>
        <div class="link flex-fill text-center"><a href="#skills">言語スキル</a></div>
      </div>
      <div class="header d-flex justify-content-center">
        <div class="link flex-fill text-center"><a href="#profile">プロフィール</a></div>
        <div class="link flex-fill text-center"><a href="#contact">お問い合わせ</a></div>
      </div>
    </div>

    <!-- パソコン版ヘッダー -->
    <div class="d-none d-md-block">
      <div class="d-flex justify-content-around">
        <div class="logo text-center mt-2"><?php echo bloginfo( 'name' ); ?></div>
        <div class="links list-inline">
          <div class="link list-inline-item"><a href="#perform">過去の実績</a></div>
          <div class="link list-inline-item"><a href="#skills">言語スキル</a></div>
          <div class="link list-inline-item"><a href="#profile">プロフィール</a></div>
          <div class="link list-inline-item"><a href="#contact">お問い合わせ</a></div>
        </div> 
      </div>

    </div>