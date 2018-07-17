<html>
  <title>WRT</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, inital-scale=1">
  <link rel="stylesheet" href="css/materialize.css">
  <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" href="http://fonts.googleapis.com/icon?family=Material+Icons">
  <script src="https://use.typekit.net/tts3wfn.js"></script>
  <script try{Typekit.load({ async: true });}catch(e){}></script>
</html>
<?php wp_head(); ?>
<header class="calcium_12_hero_image">
  <div class="navbar-fixed">
    <nav>
      <div class="nav-wrapper"><a class="brand-logo" href="http://sandbox-wrt.organicideasanddesign.com/"><img class="logo-brand" src="<?php echo get_stylesheet_directory_uri();?>/img/greenbrownlogo.svg"></a><a class="button-collapse" href="#" data-activates="mobile"><i class="material-icons">menu</i></a>
        <?php
          wp_nav_menu([
            'menu' => 'primary menu',
            'theme-location' => 'primary',
            'depth' => 2,
            'menu_class' => 'right hide-on-med-and-down'
          ]);
        ?>
      </div>
        <?php
          wp_nav_menu([
            'menu' => 'mobile nav',
            'theme-location' => 'primary',
            'depth' => 2,
            'menu_class' => 'side-nav',
            'menu_id'=> 'mobile',
          ]);
        ?>
    </nav>
  </div>
  <h1 class="center-align">JACKPOT</h1>
  <p class="center-align">Bio S.I.</p>
</header>
