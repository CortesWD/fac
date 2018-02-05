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
  <section class="container-fluid container-slider">
    <?php if ($slider = render($page['slider'])): ?>
      <div class="sliderContent" >
        <?php print $slider; ?>
      </div>
    <?php endif; ?>
  </section>
  <!--/-slider-->
  <!--btns redes mobile-->
  <section class="container-fluid container-social-mobile">
    <div class="row">
      <p class="text-center"><a class="ic ic-fb" href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a><a class="ic ic-tw" href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a><a class="ic ic-ins" href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></p>
    </div>
  </section>
  <!--/-btns redes mobile-->
  <!--Seccion noticias-->
  <section class="container-fluid bg-gris">
    <div class="row">   
      <?php if ($servicio1 = render($page['servicio1'])): ?>
        <article class="col-sm-6 noticia noticia-grande">
          <?php print $servicio1; ?>
        </article>
      <?php endif; ?>
      <article class="col-sm-6 noticia">
        <?php if ($servicio2 = render($page['servicio2'])): ?>
          <div class="col-sm-6">
            <?php print $servicio2; ?>
          </div>
        <?php endif; ?>
        <?php if ($servicio3 = render($page['servicio3'])): ?>
          <div class="col-sm-6">
            <?php print $servicio3; ?>
          </div>
        <?php endif; ?>
        <div class="clearfix"></div>
        <?php if ($servicio4 = render($page['servicio4'])): ?>
          <div class="noticia-container noticia-horizontal">
            <?php print $servicio4; ?>
          </div>
        <?php endif; ?>
      </article>
    </div>
  </section>
  <!--/-Seccion noticias-->
  <!--Seccion destacados-->
  <section class="container-fluid container-destacados-home">
    <div class="row">
      <h2 class="title-section">destacados</h2>
      <!--Destacados-->
      <?php if ($destacado1 = render($page['destacado1'])): ?>
        <div class="col-sm-8">
          <?php print $destacado1; ?>
        </div>
      <?php endif; ?>
      <!--/-Destacados-->
      <!--Sidebar-->
      <div class="col-sm-4">
        <?php if ($destacado2 = render($page['destacado2'])): ?>
          <div class="banner">
            <?php print $destacado2; ?>
          </div>
        <?php endif; ?>
        <!--Magazine-->
        <?php if ($destacado3 = render($page['destacado3'])): ?>
          <div class="revista">
            <?php print $destacado3; ?>
          </div>
        <?php endif; ?>
        <!--/-Magazine-->
      </div>
      <!--/-Sidebar-->
    </div>
  </section>
  <!--/-Seccion destacados-->
  <!--Videos-->
  <section class="container-fluid bg-blue container-video-home">
    <div class="row">
      <h2 class="title-section">destacados</h2>
      <?php if ($regionVideoHome = render($page['regionVideoHome'])): ?>  
        <div class="col-sm-6">
          <?php print $regionVideoHome; ?>
        </div>
      <?php endif; ?>
      <?php if ($destacado4 = render($page['destacado4'])): ?>  
        <div class="col-sm-6">
          <?php print $destacado4; ?>
        </div>
      <?php endif; ?>
    </div>
  </section>

  <!--/-Videos-->
  <section class="container-fluid bg-gris container-cierre">
    <?php if ($destacado5 = render($page['destacado5'])): ?>  
      <div class="col-sm-8">
        <?php print $destacado5; ?>
      </div>
    <?php endif; ?>
    <div class="col-sm-4">
      <h2 class="title-section title-follow">Síguenos</h2>
      <!--Tabs-->
      <ul class="nav nav-tabs tab-social" role="tablist">
        <li class="active tab-ins" role="presentation"><a href="#instagram" aria-controls="instagram" role="tab" data-toggle="tab"><img src="/sites/all/themes/adaptivetheme/at_fac/css/images/layout/tab-instagram.png" title="Instagram" alt="Instagram"/></a></li>
        <li class="tab-fb" role="presentation"><a href="#facebook" aria-controls="facebook" role="tab" data-toggle="tab"><img src="/sites/all/themes/adaptivetheme/at_fac/css/images/layout/tab-facebook.png" title="Facebook" alt="Facebook"/></a></li>
        <li class="tab-tw" role="presentation"><a href="#twitter" aria-controls="twitter" role="tab" data-toggle="tab"><img src="/sites/all/themes/adaptivetheme/at_fac/css/images/layout/tab-twitter.png" title="Twitter" alt="Twitter"/></a></li>
      </ul>
      <!--/-Tabs-->
      <!--Content tabs-->
      <div class="tab-content">
        <div class="tab-pane active" id="instagram" role="tabpanel">
          Instagram
        </div>
        <div class="tab-pane" id="facebook" role="tabpanel">
          <div style="margin:auto;display:block">
            <h2><span>Fuerza Aérea Colombiana  FuerzaAereaCol</span></h2>
            <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FFuerzaAereaCol%2F&tabs=timeline&width=200&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=false&appId=836494579793582" width="100%" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
          </div>
        </div>
        <div class="tab-pane" id="twitter" role="tabpanel">
           <div style="margin:auto;display:block">
              <h2><span>Fuerza Aérea Colombiana  FuerzaAereaCol</span></h2>
                    <a class="twitter-timeline" href="https://twitter.com/FUERZAAEREACOL" data-widget-id="732210596880470016">Tweets por el @FUERZAAEREACOLO.</a>
              <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
            </div>
        </div>
      </div>
      <!--/-Content tabs-->
    </div>
  </section>
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