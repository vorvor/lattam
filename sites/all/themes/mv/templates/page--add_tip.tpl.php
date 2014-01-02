<?php
/**
 * @file
 * Returns the HTML for a single Drupal page.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728148
 */

?>

<div id="page">
  
  


    <div id="content" class="column" role="main">
      
      <?php print render($page['content']); ?>
      <?php print $feed_icons; ?>
    </div>

    

    <?php
      // Render the sidebars to see if there's anything in them.
      $sidebar_first  = render($page['sidebar_first']);
      $sidebar_second = render($page['sidebar_second']);
    ?>

    <?php if ($sidebar_first || $sidebar_second): ?>
      <aside class="sidebars">
        <?php print $sidebar_first; ?>
        <?php print $sidebar_second; ?>
      </aside>
    <?php endif; ?>

  
</div>
<div id="page_bottom">
  
  
  <header class="header" id="header" role="banner">

    <?php if ($logo): ?>
      <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" class="header__logo" id="logo"><img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" class="header__logo-image" /></a>
    <?php endif; ?>

    <?php if ($site_name || $site_slogan): ?>
      <div class="header__name-and-slogan" id="name-and-slogan">
        <?php if ($site_name): ?>
          <h1 class="header__site-name" id="site-name">
            <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" class="header__site-link" rel="home"><span><?php print $site_name; ?></span></a>
          </h1>
        <?php endif; ?>

        <?php if ($site_slogan): ?>
          <div class="header__site-slogan" id="site-slogan"><?php print $site_slogan; ?></div>
        <?php endif; ?>
      </div>
    <?php endif; ?>



    <?php print render($page['header']); ?>

  </header>

  
  
  




      <?php
        global $user;
        $plusclass = '';
      
        if ($user->uid == 1) {
          print $messages;
        }
      ?>
<script>
//jQuery("#page").addClass("tust");

jQuery(document).ready(function() {
  function readCookie(name) {
    name += '=';
    for (var ca = document.cookie.split(/;\s*/), i = ca.length - 1; i >= 0; i--)
        if (!ca[i].indexOf(name))
            return ca[i].replace(name, '');
}

  jQuery('.olControlDrawFeaturePointItemInactive').trigger('click');
  
  latlon = decodeURIComponent(readCookie('lattam')).split(';');
  console.log(latlon);
  
  var ol = jQuery('.openlayers-map').data('openlayers');//assuming there is just one map on the page
  var lonLat = new OpenLayers.LonLat(latlon[1], latlon[0]).transform(new OpenLayers.Projection("EPSG:4326"), ol.openlayers.getProjectionObject());
  ol.openlayers.setCenter(lonLat, 11);
    
})

</script>

</div>
