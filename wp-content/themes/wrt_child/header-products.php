<html>
  <title>WRT</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, inital-scale=1">
  <script src="https://use.typekit.net/tts3wfn.js"></script>
  <script>try{Typekit.load({ async: true });}catch(e){}</script>
</html>
<?php wp_head(); ?>
<header class="product_hero_image">
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
  <div class="center-align">
    <h1>BUILD YOUR PERFECT PROGRAM.</h1>
    <a href="#baicor" class="baicor-button">BAICOR</a>
    <a href="#bio_si" class="bio_si-button">BIO S.I.</a>
    <section class="scroll" id="section01"><a href="#scroll">scroll down<span></span></a></section>
  </div>
</header>
