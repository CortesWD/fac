<?php
/**
 * @file
 * Adaptivetheme implementation to display a single Drupal page.
 *
 * Available variables:
 *
 * Adaptivetheme supplied variables:
 * - $site_logo: Themed logo - linked to front with alt attribute.
 * - $site_name: Site name linked to the homepage.
 * - $site_name_unlinked: Site name without any link.
 * - $hide_site_name: Toggles the visibility of the site name.
 * - $visibility: Holds the class .element-invisible or is empty.
 * - $primary_navigation: Themed Main menu.
 * - $secondary_navigation: Themed Secondary/user menu.
 * - $primary_local_tasks: Split local tasks - primary.
 * - $secondary_local_tasks: Split local tasks - secondary.
 * - $tag: Prints the wrapper element for the main content.
 * - $is_mobile: Mixed, requires the Mobile Detect or Browscap module to return
 *   TRUE for mobile.  Note that tablets are also considered mobile devices.
 *   Returns NULL if the feature could not be detected.
 * - $is_tablet: Mixed, requires the Mobile Detect to return TRUE for tablets.
 *   Returns NULL if the feature could not be detected.
 * - *_attributes: attributes for various site elements, usually holds id, class
 *   or role attributes.
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/bartik.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Core Regions:
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['highlighted']: Items for the highlighted content region.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['sidebar_second']: Items for the second sidebar.
 * - $page['header']: Items for the header region.
 * - $page['footer']: Items for the footer region.
 *
 * Adaptivetheme Regions:
 * - $page['leaderboard']: full width at the very top of the page
 * - $page['menu_bar']: menu blocks placed here will be styled horizontal
 * - $page['secondary_content']: full width just above the main columns
 * - $page['content_aside']: like a main content bottom region
 * - $page['tertiary_content']: full width just above the footer
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see template_process()
 * @see adaptivetheme_preprocess_page()
 * @see adaptivetheme_process_page()
 */
?>
<?php global $base_url; ?>
<!--Menu-->
  <nav class="menu-container">
    <?php if ($menuC = render($page['menuc'])): ?>
        <?php print $menuC; ?>
    <?php endif; ?>
  </nav>
  <!--/-Menu-->
  <!--Header-->
  <header class="container-fluid">
    <div class="row">
      <!--Button toggle-->
      <div class="btn-menu col-sm-1 col-xs-2"><a class="btn btn-toggle" href="#" role="button"><i class="icon icon-nav"></i></a></div>
      <!--/-Button toggle-->
      <!--Logo FAC-->
      <div class="col-xs-10 col-sm-8 col-sm-offset-1 content-text">
        <div class="col-sm-3 col-xs-6"><a href="<?php print $base_url; ?>"><img class="img-responsive" src="/sites/all/themes/adaptivetheme/at_fac/css/images/logo-fac.png" title="Fuerza Aérea Colombiana" alt="Fuerza Aérea Colombiana"/></a>
        </div>
        <div class="col-sm-3">
          <h1 class="text-center">Intranet FAC</h1>
        </div>
        <div class="col-sm-2 aguila"><img class="img-responsive" src="/sites/all/themes/adaptivetheme/at_fac/css/images/layout/aguila-header.png" title="Fuerza Aérea Colombiana" alt="Fuerza Aérea Colombiana"/>
        </div>
        <div class="col-sm-4">
          <p class="text-center">
            Republica de Colombia<br />
            Ministerio de Defensa Nacional
          </p>
        </div>
      </div>
      <!--/-Logo FAC-->
      <!--Buscador y fecha-->
      <?php if ($header = render($page['header'])): ?>
          <?php print $header; ?>
      <?php endif; ?>
      <!--/-Buscador y fecha-->
    </div>
  </header>
  <!--/-Header-->
  <!--slider-->
  <?php if ($primary_local_tasks || $secondary_local_tasks || $action_links): ?>
                  <div id="tasks">

                    <?php if ($primary_local_tasks): ?>
                      <ul class="tabs primary clearfix"><?php print render($primary_local_tasks); ?></ul>
                    <?php endif; ?>

                    <?php if ($secondary_local_tasks): ?>
                      <ul class="tabs secondary clearfix"><?php print render($secondary_local_tasks); ?></ul>
                    <?php endif; ?>

                    <?php if ($action_links = render($action_links)): ?>
                      <ul class="action-links clearfix"><?php print $action_links; ?></ul>
                    <?php endif; ?>

                  </div>
                <?php endif; ?>
  <!-- !Main Content -->
            <?php if ($content = render($page['content'])): ?>
              <div id="content" class="region">
               <?php 
                  $block = module_invoke('fac_core', 'block_view','taxonomyHistory');
                  print render($block['content']);
                ?>
              </div>
            <?php endif; ?>

  <!--/-redes sociales -->
  <!--Sistemas de información-->
  <?php if ($iconFlotante = render($page['iconFlotante'])): ?>  
      <?php if( user_is_logged_in() ){ ?>
        <aside class="container-fluid container-sys-info icons-admin">
      <?php }else{ ?>
        <aside class="container-fluid container-sys-info">
      <?php } ?>
  
      <?php print $iconFlotante; ?>
    </aside>
  <?php endif; ?>
  
  <!--/-Sistemas de información-->
  <!--Footer-->
  <footer>
    <!--Menu footer-->
    <?php if ($menuf = render($page['menuf'])): ?>
      <div class="row bg-blue">
        <?php print $menuf; ?>
      </div>
    <?php endif; ?>
    <!--/-Menu footer-->
    <div class="container-fluid">
      <!--Legal-->
      <div class="row">
        <div class="col-sm-4 col-sm-offset-4">
          <p class="text-center">
            Intranet FAC 
            Cra 53 CAN. Bogotá D.C., Colombia Telefono: Conmutador (57)(1) 315 9800
            Webmaster: <a href="mailto:intranetfac@fac.mil.co" target="_blank">intranetfac@fac.mil.co</a>
          </p>
        </div>
      </div>
      <!--/-Legal-->
    </div>
  </footer>