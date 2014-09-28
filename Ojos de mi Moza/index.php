<!-- WebGardel Theme : Resto -->
<?php //webgardel framework files
    include_once('wg_TDK.php');
    include_once('sbwebsite.php');
    $site = new SBWebsite();
  	$fbfeed_path = 'assets/plugins/fbfeed';
  	include $fbfeed_path . '/fbfeed-settings.php';
	
	if (!$accent_color)
	$accent_color = 'e0af62'; //default accent color
?>
<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"><![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"><![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"><![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"><!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><? echo $company_name; ?></title>
    <? //Meta tags for Facebook, sharing, and SEO ?>
    <meta property="og:title" content="<? echo $company_name; ?>"/>
	<meta property="og:image" content="http://graph.facebook.com/<? echo $site->data('fb_id') ?>/picture?type=large"/>


    <link href='http://fonts.googleapis.com/css?family=Josefin+Slab' rel='stylesheet' type='text/css'>
        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
   	 	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    	<link rel="shortcut icon" href="assets/ico/favicon.ico">


        <link rel="stylesheet" href="assets/css/bootstrap.css">
        <link rel="stylesheet" href="assets/css/animations.css">
        <? $color_scheme = $site->option('color_scheme'); //light color scheme gets a different stylesheet
			if ($color_scheme = 'light') {
				echo '<link rel="stylesheet" href="assets/css/light.css">';
				}
			else {
			echo '<link rel="stylesheet" href="assets/css/main.css">';}
		?>
    <style type="text/css">

.sf-menu > li:first-child > a {border-left: none;}
.sf-menu > li > a:hover, .sf-menu > li.active > a{
    background-color: #<?= $site->option('color') ?>;
}
.theme_btn {
    background-color: #<?= $site->option('color') ?>;
}
.color_section {background-color: #<?= $site->option('color') ?>;}
nav-tabs > li.active > a, .nav-tabs > li.active > a:hover, .nav-tabs > li.active > a:focus {
    color:#<?= $site->option('color') ?>;
}
    </style>

        <script src="assets/js/vendor/modernizr-2.6.2.min.js"></script>
    </head>
<body>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=254432444736316&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<script>
$('#cff .cff-item').each(function(){
  var $self = $(this),
  $cffphoto = $self.find('.cff-photo');
  $cffphoto.detach();
  $self.find('.cff-post-text').before($cffphoto);
});</script>
<div id="top"></div>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->


<?php if( $site->section('header') ){ //begin HEADER section?><div id="header"></div>
<section id="header" class="dark_section">
    <div class="container"><div class="row">
<?php if( $site->module('business_name') ){ //begin business_name module?>
      <a class="navbar-brand" href="./"><h1 style="margin: 5px 0 0 0; font-weight:400; font-size:.9em;
  background: -webkit-linear-gradient(#eee, #<? echo $accent_color; ?>);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  font-family: 'Josefin Slab', serif; "><? echo $company_name; ?></div></h1></a>
<?php } //end business_name module?>


      <div class="col-sm-12 mainmenu_wrap"><div class="main-menu-icon visible-xs"><span></span><span></span><span></span></div>
        <ul id="mainmenu" class="nav menu sf-menu responsive-menu superfish">
          <?php if( $site->module('header_navigation') ){ //begin HEADER NAVIGATION module?>
          <li><? echo $menu_item1; ?>
          </li>
          <li><? echo $menu_item2; ?>
          </li>
          <li><? echo $menu_item4; ?>
          </li>
          <li><? echo $menu_item5; ?>
          </li>
          <li><? echo $menu_item3; ?>
          </li>
            <?php }
              else {
                echo '<li><a href="#">'.$site->data('domain_name').'</a></li>';
              }
            //end header navigation module?>
        </ul>
      </div>

    </div></div>
</section>


<?php if( $site->module('cover_photo') ){  //begin slogan module ?
    if( $cover_image ) { //if they have a cover photo on fb ?>
<section id="mainslider"><div class="flexslider" style="background:#<?= $site->option('color') ?>; height:600px;">
  <ul class="slides">
    <li>
    	<? echo $fb_widget['cover_photo']; ?>
      <?php if( $site->module('slogan') ){ //begin slogan module ?>
      <div class="container">
        <div class="row fullwidthimage">
          <div class="col-sm-12">
            <div class="slide_description">
              <div class="imagetitle">¡Bienvenidos!</div>
              <div class="imagedesc">
                <p style="text-transform: uppercase; font-size:.9em;">
                <?= $site->content('slogan_text') ?></p></div>
              <a href="#nosotros" class="theme_btn">Más Info</a>
            </div>
          </div>
        </div>
      </div>
      <?php } //end slogan module?>
    </li>
  </ul>
</div>
</section>
<?php } } //end cover_photo module?>
<?php } //end header section?>

<div id="box_wrap">
<?php if( $site->section('about_us') ){ //begin NOSOTROS section?><a id="nosotros"></a>
<section id="nosotros" class="color_section title_section">
  <div class="container">
      <div class="row">
        <?php if( $site->module('profile_photo') ){ //begin profile_photo module  ?>
        <div class="col-sm-4">
          <? echo $fb_widget['prof_pic']; ?>
        </div>
        <?php } //end profile_photo module?>
        <div class="col-sm-8">
          <h3>Nuestra historia</h3>
          <p><? echo $description; ?></p>
          <p><?= $site->content('long_description') ?></p>
          <div style="float:right; margin-right:30px;">
              <? echo $fb_widget['sharebutton_horiz']; ?>
          </div>
        </div>
      </div>
  </div>
</section>

<section id="features" class="color_section with-top-border with-bottom-border">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
            <? if ($site->content('mission')){
                    echo '<blockquote><p>';
                    echo $site->content('mission');
                    echo '</p><h3 class="text-right">Nuestra Misión</h3></blockquote>';
                  }
                elseif ($site->content('short_description')){
                    echo '<blockquote><p>';
                    echo $site->content('short_description');
                    echo '</p><h3 class="text-right">Nosotros</h3></blockquote>';
                  }
                else {
                  echo '';
                } ?>
      </div>
    </div>
  </div>
</section>
<?php } //end nosotros section?>

<?php if( $site->section('news') ){ //begin NOVEDADES section?><div id="novedades"></div><a id="novedades"></a>
<section id="middle" class="color_section">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <h1 class="page-title">Novedades</h1>
      </div>
    <? fbFeed($settings); //facebook feed, nodevades, MURO, timeline using fbFeedPlugin ?>
    <?php if( $site->module('fb_comments') ){ //begin fb_comments module  ?>
      <div class="col-md-8 col-sm-11  hidden-xs">
        <? echo $fb_widget['comments']; ?>
      </div>
      <div class="col-md-3  hidden-sm  hidden-xs">
          <? echo $fb_widget['likebox']; ?>
      </div>
    <?php } //end fb_comments module?>
    </div>
  </div>
</section>
<?php } //end novedades section?>





<?php if( $site->section('photos') ){ //begin FOTOS section?><div id="fotos"></div><a id="fotos"></a>
<section id="portfolio" class="color_section">
    <div class="container">
<div id="portfolio_wrapper" class="row">
      <div class="col-sm-12">
        <h1 class="page-title"><?= $site->option('photo_section_title') ?></h1>
      </div>


      <ul class="items-row row cols-3 portfolio filtrable clearfix isotope" id="portfolioContainer">

        <?
foreach ($photos as $row)
{
	$img_src = $row['images'][1]['source'];
	$img_name = $row['name'];
    echo '<li class="item col-sm-6 col-md-4 isotope-item graphicdesign webdesign">
          <div class="portfolio_item_image">
            <img alt="' . $img_name . '" src="' . $img_src . '">
            <div class="portfolio_links">
              <a class="p-view prettyPhoto" title="' . $img_name . '" rel="prettyPhoto[pp_gal]" href="' . $img_src . '"></a>
              <a class="p-link" title="' . $img_name . '" href="' . $img_src . '"></a>
            </div>
          </div>
          <div class="item_title">
            <h4>' . $img_name . '</h4>
          </div>
        </li>';
}
?>
      </ul>
    </div>

</div>
</section>
<?php } //end fotos section?>

<?php if( $site->module('map') ){ //begin map module  ?>
<section id="map" class="color_section"></section>
<?php } //end map module?>

<?php if( $site->section('contact') ){ //begin CONTACTO section?><div id="contacto"></div><a id="contacto"></a>
<?php if( $site->module('contact_form') ){ //begin contact_form module  ?>
<section id="contact" class="color_section">
  <div class="container">

    <div class="row">
      <div class="col-sm-8">
        <h2 class="block-header">Contactanos directamente</h2>
        <div class="contact-form">
          <form class="contact-form" method="post" action="/">
            <p class="contact-form-name">
              <label for="name">Nombre <span class="required">*</span></label>
              <input type="text" aria-required="true" size="30" value="" name="name" id="name" class="form-control" placeholder="Name">
            </p>
            <p class="contact-form-email">
              <label for="email">Mail <span class="required">*</span></label>
              <input type="email" aria-required="true" size="30" value="" name="email" id="email" class="form-control" placeholder="Email">
            </p>
            <p class="contact-form-message">
              <label for="message">Mensaje</label>
              <textarea aria-required="true" rows="8" cols="45" name="message" id="message" class="form-control" placeholder="Message"></textarea>
            </p>
            <p class="contact-form-submit text-center vertical-margin-60">
              <input type="submit" value="enviar" id="contact_form_submit" name="contact_submit" class="theme_btn">
            </p>
          </form>
        </div>
      </div>

      <?php if( $site->module('contact_info') ){ //begin contact_info module  ?><div id="más info"></div>
      <div class="col-sm-4">
        <h3>Contacto</h3>
        <p><i class="rt-icon-puzzle-outline"></i><? echo $company_name; ?><br>
          <i class="rt-icon-location-outline"></i> <?= $site->data('address') ?><br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;esq. <?= $site->data('address_esq') ?><br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?= $site->data('address2') ?><br>
          <? $business_phone = $site->data('business_phone');
              if ($business_phone){
                 echo '<i class="rt-icon-phone"></i>: <strong>'.$business_phone.'</strong><br>';
              } ?>
          <? $business_email = $site->data('business_email');
              if ($business_email){
                echo '<i class="rt-icon-email2"></i>: <strong><a href="#contacto">'.$business_email.'</a></strong>';
              } ?> </a><br>
          <? $cell_phone = $site->data('cell_phone');
              if ($cell_phone){
                echo '<i class="rt-icon-email2"></i>: <strong>'.$cell_phone.'</strong><br>';
              } ?>
          <? $fax = $site->data('fax');
            if ($fax){
              echo 'Fax: <strong>'.$fax.'</strong><br>';
            } ?>
          <?= $site->content('slogan_text') ?>
        </p>
      <? echo $fb_widget['followbox_standard']; ?>

      </div>
      <?php } //end contact_info module?>
    </div>
  </div>
</section>
<?php } //end contact_form module?>
<?php } //end contacto section?>



<?php if( $site->section('footer') ){ //begin FOOTER section?><div id="footer"></div><a id="footer"></a>
<?php if( $site->section('footer_widgets') ){ //begin FOOTER WIDGETS section?>
<footer id="footer" class="darkgrey_section">
  <div class="container">
    <div class="row">

<?php if( $site->module('more_info') ){ //begin more_info module  ?>
    <div class="block col-sm-3">
      <h3><?= $site->data('domain_name') ?></h3>
      <div class="left_icons">
        <div class="dxsingle_teaser_left">
            <i class="dx-icon-pen"></i>
        </div>
        <div class="dxsingle_teaser_right">
            <h3><? echo $company_name; ?></h3>

            <? if ($site->content('about')){
                    echo $site->content('about');
                  }
                elseif ($site->content('long_description')){
                    echo $site->content('long_description');
                  }
                else {
                  echo '';
                } ?>
        </div>
      </div>
    </div>
<?php } //end more_info module?>



<?php if( $site->module('hours') ){ //begin hours module  ?>
    <div class="block widget_schedule col-sm-3">
      <h3>Horario general</h3>
      <dl class="dl-horizontal">
        <dt>Lunes</dt>
        <dd><?= $site->content('hours_mon') ?></dd>
        <dt>Martes</dt>
        <dd><?= $site->content('hours_tue') ?></dd>
        <dt>Miércoles</dt>
        <dd><?= $site->content('hours_wed') ?></dd>
        <dt>Jueves</dt>
        <dd><?= $site->content('hours_thu') ?></dd>
        <dt>Viernes</dt>
        <dd><?= $site->content('hours_fri') ?></dd>
        <dt>Sabado</dt>
        <dd><?= $site->content('hours_sat') ?></dd>
        <dt>Domingo</dt>
        <dd><?= $site->content('hours_sun') ?></dd>
      </dl>
    </div>
<?php } //end hours module?>

    <?php if( $site->module('more_info') ){ //begin more_info module  ?><div id="más info"></div>
    <div class="block widget_text col-sm-6">
      <h3>Más info</h3>
      <p><i class="rt-icon-puzzle-outline"></i><? echo $company_name; ?><br>
          <i class="rt-icon-location-outline"></i> <?= $site->data('address') ?><br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;esq. <?= $site->data('address_esq') ?><br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?= $site->data('address2') ?><br>
          <? $business_phone = $site->data('business_phone');
              if ($business_phone){
                 echo '<i class="rt-icon-phone"></i>: <strong>'.$business_phone.'</strong><br>';
              } ?>
          <? $business_email = $site->data('business_email');
              if ($business_email){
                echo '<i class="rt-icon-email2"></i>: <strong><a href="#contacto">'.$business_email.'</a></strong>';
              } ?> </a><br>
          <? $cell_phone = $site->data('cell_phone');
              if ($cell_phone){
                echo '<i class="rt-icon-email2"></i>: <strong>'.$cell_phone.'</strong><br>';
              } ?>
          <? $fax = $site->data('fax');
            if ($fax){
              echo 'Fax: <strong>'.$fax.'</strong><br>';
            } ?>
          <?= $site->content('slogan_text') ?>
        </p>

      <? echo $fb_widget['followbox_standard']; ?>

    </div>
    <?php } //end more_info module?>

    </div>
  </div>
</footer>
<?php } //end footer widgets section?>

<section id="copyright" class="dark_section">
  <div class="container"><div class="row">

    <div class="col-sm-12 text-center">
      <p>&copy; <?= $site->content('custom_footer') ?> | Automatizado por <a href="http://webgardel.com" target="_self">WebGardel</a></p>
    </div>

  </div></div>
</section>
<?php } //end footer section?>


</div><!-- EOF #box_wrap -->

<div id="gallery_container"></div>

<!-- <div class="preloader">
  <div class="preloaderimg"></div>
</div> -->


        <script src="assets/js/vendor/respond.min.js"></script>
        <script src="assets/js/vendor/placeholdem.min.js"></script>
        <script src="assets/js/vendor/jquery-1.10.2.min.js"></script>
        <script src="assets/js/vendor/bootstrap.min.js"></script>
        <script src="assets/js/vendor/hoverIntent.js"></script>
        <script src="assets/js/vendor/superfish.js"></script>
        <script src="assets/js/vendor/jquery.actual.min.js"></script>
        <script src="assets/js/vendor/jquery.elastislide.js"></script>
        <script src="assets/js/vendor/jquery.flexslider-min.js"></script>
        <script src="assets/js/vendor/jquery.prettyPhoto.js"></script>
        <script src="assets/js/vendor/jquery.easing.1.3.js"></script>
        <script src="assets/js/vendor/jquery.ui.totop.js"></script>
        <script src="assets/js/vendor/jquery.isotope.min.js"></script>
        <script src="assets/js/vendor/jquery.easypiechart.min.js"></script>
        <script src='assets/js/vendor/jflickrfeed.min.js'></script>
        <script src="assets/js/vendor/jquery.sticky.js"></script>
        <script src='assets/js/vendor/owl.carousel.min.js'></script>
        <script src='assets/js/vendor/jquery.nicescroll.min.js'></script>
        <script src='assets/js/vendor/jquery.fractionslider.min.js'></script>
        <script src='assets/js/vendor/jquery.scrollTo-min.js'></script>
        <script src='assets/js/vendor/jquery.localscroll-min.js'></script>
        <script src='assets/js/vendor/jquery.parallax-1.1.3.js'></script>
        <script src="assets/js/plugins.js"></script>
        <script src="assets/js/main.js"></script>
        <script type="text/javascript" src="<?php echo $fbfeed_path ?>/core/js/cff.js"></script>




      <!-- Map Scripts -->

        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
        <script type="text/javascript">
          var lat;
          var lng;
          var map;

          //type your address after "address="
          jQuery.getJSON('http://maps.googleapis.com/maps/api/geocode/json?address=<?= $site->data('address') ?>, <?= $site->data('address2') ?>&sensor=false', function(data) {
                lat = data.results[0].geometry.location.lat;
                lng = data.results[0].geometry.location.lng;
              }).complete(function(){
                dxmapLoadMap();
              });

          function attachSecretMessage(marker, message)
          {
            var infowindow = new google.maps.InfoWindow(
              { content: message
              });
            google.maps.event.addListener(marker, 'click', function() {
              infowindow.open(map,marker);
            });
          }

          window.dxmapLoadMap = function()
          {
            var center = new google.maps.LatLng(lat, lng);
            var settings = {
              mapTypeId: google.maps.MapTypeId.ROADMAP,
              zoom: 16,
              draggable: false,
              scrollwheel: false,
              center: center
            };
            map = new google.maps.Map(document.getElementById('map'), settings);

            var marker = new google.maps.Marker({
              position: center,
              title: 'Map title',
              map: map
            });
            marker.setTitle('Map title'.toString());
            //type your map title and description here
            attachSecretMessage(marker, '<h3>Map title</h3>Map HTML description');
          }
        </script>

    </body>
</html>
