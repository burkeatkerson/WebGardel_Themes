<!-- WebGardel Theme : Innovar -->

<?php //webgardel framework files
    include_once('wg_TDK.php');
    include_once('sbwebsite.php');
    $site = new SBWebsite();
	$fbfeed_path = 'assets/plugins/fbfeed';
	include $fbfeed_path . '/fbfeed-settings.php'; 
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
    <title><?= $site->data('company_name') ?></title>


    <!-- Favicons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="shortcut icon" href="assets/ico/favicon.ico">

    <!-- JS Page -->

    <!-- CSS Global -->
    <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/plugins/superfish/css/superfish.css" rel="stylesheet">
    <link href="assets/plugins/prettyPhoto/css/prettyPhoto.css" rel="stylesheet">
    <link href="assets/plugins/animate.css" rel="stylesheet">

    <!-- CSS Page Level -->
    <link href="assets/plugins/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="assets/plugins/owl-carousel/owl.theme.css" rel="stylesheet">
    <link href="assets/plugins/isotope/jquery.isotope.css" rel="stylesheet">
    <link href="assets/plugins/flexslider/flexslider.css" rel="stylesheet">


    <link href="assets/css/theme.css" rel="stylesheet">
    <style>
.wide .page-section.green .media-object,
.boxed .page-section.green > .container .media-object {
    color: #<? echo $color_accent ?>;
} .section-title small {
    background-color: #<? echo $color_accent ?>;}
h1 .fa,
h2 .fa,
h3 .fa,
h4 .fa,
h5 .fa,
h6 .fa {
    color: #<? echo $color_accent ?>;
}
.block-title small {
    color: #<? echo $color_accent ?>;
}
.dropcaps {
    background-color: #<? echo $color_accent ?>;
}
a:hover,
a:active,
a:focus {
    color: #<? echo $color_accent ?>;
}
.list-ul .fa {
    color: #<? echo $color_accent ?>;
}
.btn-default {
    background-color: #<? echo $color_accent ?>;
}
.price-value {
    background-color: #<? echo $color_accent ?>;
}
.thumbnail.hover,
.thumbnail:hover {
    border: solid 0px #<? echo $color_accent ?>;
}
.do-hover .caption {
    background-color: #<? echo $color_accent ?>;
}
.projects .do-hover .caption {
    background-color: #<? echo $color_accent ?>;
}

.filtrable .current a,
.filtrable .active a,
.filtrable .current a:hover,
.filtrable .active a:hover,
.filtrable a:hover {
    border-color: #<? echo $color_accent ?>;
    background-color: #<? echo $color_accent ?>;
}
.feature.style-1:hover .media-object:after,
.feature.style-1.hover .media-object:after {
    -webkit-box-shadow: 0 0 0 5px #<? echo $color_accent ?>;
    box-shadow: 0 0 0 5px #<? echo $color_accent ?>;}

.feature.style-2 .media-object {
    background-color: #<? echo $color_accent ?>;
}
.feature.style-3:hover .media-object,
.feature.style-3.hover .media-object {
    background-color: #<? echo $color_accent ?>;
    border-color: #<? echo $color_accent ?>;
}
.feature.style-4 .media-object {
    background-color: #<? echo $color_accent ?>;
}
.feature.style-5 {
    background-color: #<? echo $color_accent ?>;
}
.owl-theme .owl-controls .owl-buttons div,
.owl-theme .owl-controls .owl-page span {
    background-color: #<? echo $color_accent ?>;
}
.wide .page-section.call-action,
.boxed .page-section.call-action > .container {
    background-color: #<? echo $color_accent ?>;
}
</style>
    <!--[if lt IE 9]>
    <script src="assets/plugins/html5shiv.js"></script>
    <script src="assets/plugins/respond.min.js"></script>
    <![endif]-->
    
<?php ?>
</head>
<body class="wide">
<? //Webgardel theme functionality ?>
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



<!-- Wrap all content -->
<div class="wrapper">
    <header class="header">
        <div class="container">
  		 <?php if( $site->section('header') ){ //begin header section?>
             
            <!-- Navigation -->
            <div id="mobile-menu"></div>
            <nav class="navigation clearfix">
                <ul class="sf-menu">
                    <li class="active"><? echo $menu_item1; ?></li>
                    <li><? echo $menu_item2; ?></li>
                    <li><? echo $menu_item3; ?></li>
                    <!-- Logo -->
                    <li class="logo">
                        <a href="./"><? echo $fb_widget['prof_pic_custom'];?></a>
                    </li>
                    <!-- /Logo -->
                    <li><? echo $menu_item4; ?></li>
                    <li><? echo $menu_item7; ?></li>
                    <li><? echo $menu_item6; ?></li>
                </ul><!-- /.sf-menu -->
            </nav><!-- /.navigation -->
            <!-- /Navigation -->

        </div><!-- /.container -->
    </header><!-- /.header -->
    <!-- /Header -->
<?php } //end header section?>
            
            
            
    <!-- Content area-->
    <div class="content-area content">
    
    
		 <?php if( $site->module('cover_photo') ){ ?>
        <!-- Main Slider -->
        <section class="page-section">
            <div class="container full-width">
                   <div class="flexslider">
                       <ul class="slides">
                           <li><? echo $fb_cover_photo ?>
                           </li>
                       </ul>
                   </div>
            </div><!-- /.container -->
        </section>
        <!-- /Main Slider -->
        <?php } //end cover_photo module?>

        
        
        

	<?php if( $site->section('about_us') ){ //begin NOSOTROS seaction?><div id="nosotros"></div>
    <section class="page-section message">
        <div class="container">
            <p data-animation="fadeInRight" data-animation-delay="100"><?= $site->content('slogan_text') ?></p>
            <h1 data-animation="fadeInLeft" data-animation-delay="300"><?= $site->data('company_name') ?></h1>
            <p data-animation="fadeInRight" data-animation-delay="500"><?= $site->content('long_description') ?></p>
            <p data-animation="fadeInRight" data-animation-delay="700"><? echo $fb_widget['sharebutton_horiz']; ?></p>
        </div>
    </section>
        
        

        <!-- Feature -->
        <section class="page-section green">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4 feature style-1">
                        <div class="media" data-animation="fadeInUp" data-animation-delay="100">
                            <div class="media-object fa fa-home"></div>
                            <div class="media-body">
                                <h3 class="media-heading">Bienvenidos</h3>
                                <p><?= $site->content('extra_text') ?></p>
                                <p><?= $site->data('domain_name') ?></p>
                                <a class="btn btn-default">Leer más</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 feature style-1">
                        <div class="media" data-animation="fadeInUp" data-animation-delay="300">
                            <div class="media-object fa fa-globe"></div>
                            <div class="media-body">
                                <h3 class="media-heading">Mission</h3>
                                <p><?= $site->content('short_description') ?></p>
                                <a class="btn btn-default">Leer más</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 feature style-1">
                        <div class="media" data-animation="fadeInUp" data-animation-delay="500">
                            <div class="media-object fa fa-university"></div>
                            <div class="media-body">
                                <h3 class="media-heading">Nuestra Historia</h3>
                                <p><?= $site->content('extra_text') ?></p>
                                <a class="btn btn-default">Leer más</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- /.container -->
        </section>
        <!-- /Feature -->


		<?php } //end nosotros section?>

		
		
		<?php if( $site->section('photos') ){ //begin FOTOS section?><div id="fotos"></div>
        <!-- Projects  -->
        <section class="page-section">

            <div class="container">
                <h2 class="section-title" data-animation="fadeInUp" data-animation-delay="0">
<?= $site->option('photo_section_title') ?><div><small>Ver nuestros 
<?= $site->option('photo_section_title') ?></small></div></h2>
                <hr class="page-divider"/>
                <div class="clearfix text-center">
                    <ul id="filtrable" class="filtrable clearfix" data-animation="fadeInUp" data-animation-delay="100">
    <li class="all current"><a href="#" data-filter="*">Todo</a></li>
   <?
   $i=0;
	foreach ($albums as $row)
	{
    	if ($row['type'] == 'normal')
   		{
			$photo_album = $row['name'];
			$photo_album_id = $row['id'];
			$photo_link = $row['link'];
			$photo_img = $row['cover_photo'];
			echo '<li class="'.$photo_album.'"><a href="#" data-filter=".'.$photo_album.'">'.$photo_album.'</a></li>';
			$i++;
			
   			 if ($i == 9) break; //limited to 9 albums so they look decent on screen. Remove this optionial.
    	}
	}
	?>
    </ul>
                </div>
            </div>

            <div class="container projects">
                <section class="row items no-padding-off">
<?

foreach ($photos as $row)
{
	$img_src = $row['images'][1]['source'];
	$img_name = $row['name'];
    echo '<article class="item col-sm-6 col-md-4 rent apartment">
                    <div class="thumbnail do-hover">
                        <img src="' . $img_src . '" class="img-responsive" alt="">
                        <div class="caption">
                            <div class="caption-wrapper div-table">
                                <div class="caption-inner div-cell">
                                    <h3 class="caption-title">' . $img_name . '</h3>
                                    <p class="caption-buttons">
                                        <a href="' . $img_src . '" class="btn caption-zoom" data-gal="prettyPhoto"><i class="fa fa-search"></i></a>
                                        <a href="#" class="btn caption-link"><i class="fa fa-link"></i></a>
                                    </p>
                                    <p class="caption-category"><a href="#">Category</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>';
}

?>

                </section>

                <hr class="page-divider half"/>
                <div class="clearfix text-center" data-animation="fadeInUp" data-animation-delay="0">
                    <a href="#" class="btn btn-lg btn-default">Ver Totos</a>
                </div>

            </div><!-- /.container.projects -->
        </section>
        <!-- /Projects -->
        <?php } //end fotos section?>



	<?php if( $site->module('call_to_action') ){ // begin CALL-TO-ACTION module?>
    <section class="page-section message">
        <div class="container">
            <h1 data-animation="fadeInLeft" data-animation-delay="100">
<?= $site->content('cta_headline') ?></h1>
            <p data-animation="fadeInRight" data-animation-delay="300">
<?= $site->content('cta_lead') ?></p>
            <p data-animation="fadeInUp" data-animation-delay="500">
                <a href="#" class="btn btn-primary"><?= $site->content('cta_button') ?></a>
            </p>
        </div>
    </section>
	<?php } //end call_to_action module?>


		<?php if( $site->section('news') ){ //begin NOVEDADES section?><div id="novedades"></div>
        <section class="page-section boxed">
            <div class="container">
                <h2 class="section-title">Novedades <div><small>Los novedades, noticias, y updates vinculados con Facebook</small></div></h2>
                <hr class="page-divider half"/>
               	<div class="col-md-8">
						<?php fbFeed($settings); //facebook feed, nodevades, MURO, timeline ?>  
             		</div>
                  <div class="col-md-4" style="float:right;"><? echo $fb_widget['likebox_tall']; ?>
                  </div>
                  <div class="clearfix"></div>
                  <? echo $fb_widget['comments']; ?>
             </div>
        </section>
        <?php } //end novedades section?>
        


		<?php if( $site->module('call_to_action') ){ //begin CALL To ACTION?>
        
        <!-- Call action -->
        <section class="page-section call-action">
            <div class="container">
                <div class="row div-table">
                    <div class="col-sm-12 col-md-10 div-cell" data-animation="fadeInLeft" data-animation-delay="100">
                        <h2 class="media-heading"><?= $site->content('cta_headline') ?></h2>
                        <p><?= $site->content('cta_lead') ?></p>
                    </div>
                    <div class="col-sm-12 col-md-2 purchase-now div-cell" data-animation="fadeInRight" data-animation-delay="300">
                        <a href="#" class="btn btn-lg btn-warning"><?= $site->content('cta_button') ?></a>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Call action -->
        <?php } //end call_to_action module?>

    </div><!-- /.content-area -->
    <!-- /Content area -->
		<?php if( $site->section('contact') ){ //begin CONTACTO section?><div id="contacto"></div>
        <section class="page-section">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 content">

                        <div class="widget">

                            <h3 class="block-title">Contact Form</h3>

                            <form name="af-form" method="post" action="#" class="af-form row" id="af-form">

                                <div class="col-sm-12 af-outer af-required">
                                    <div class="form-group af-inner">
                                        <input type="text" name="name" id="name" size="30" value="" placeholder="Name *" class="form-control placeholder" />
                                        <label class="error" for="name" id="name_error">Name is required.</label>
                                    </div>
                                </div>

                                <div class="col-sm-12 af-outer af-required">
                                    <div class="form-group af-inner">
                                        <input type="text" name="email" id="email" size="30" value="" placeholder="Email *" class="form-control placeholder" />
                                        <label class="error" for="email" id="email_error">Email is required.</label>
                                    </div>
                                </div>

                                <div class="col-sm-12 af-outer">
                                    <div class="form-group af-inner">
                                        <input type="text" name="phone" id="phone" size="30" value="" placeholder="Phone" class="form-control placeholder" />
                                        <label class="error" for="phone" id="phone_error">Phone is required.</label>
                                    </div>
                                </div>

                                <div class="col-sm-12 af-outer af-required">
                                    <div class="form-group af-inner">
                                        <input type="text" name="subject" id="subject" size="30" value="" placeholder="Subject" class="form-control placeholder" />
                                        <label class="error" for="subject" id="subject_error">Email is required.</label>
                                    </div>
                                </div>

                                <div class="col-sm-12 af-outer af-required">
                                    <div class="form-group af-inner">
                                        <textarea name="message" id="input-message" rows="10" placeholder="Message *" class="form-control placeholder"></textarea>
                                        <label class="error" for="input-message" id="message_error">Message is required.</label>
                                    </div>
                                </div>

                                <div class="col-sm-12 af-outer af-required">
                                    <div class="form-group af-inner">
                                        <input type="submit" name="submit" class="form-button btn btn-default" id="submit_btn" value="Enviar" />
                                    </div>
                                </div>

                            </form>

                        </div>

                    </div>

                    <div class="col-sm-4 sidebar" id="sidebar">

                        <div class="widget">
                        <h4 class="title">Dirección</h4>
                        <address>
                            <ul class="address-ul fa-ul">
                                <li>
                                    <i class="fa-li fa fa-home"></i><?= $site->data('company_name') ?><br>
                                    <?= $site->data('address') ?><br/>
										<?= $site->data('address2') ?>
                                </li>
                                <li><i class="fa-li fa fa-phone-square"></i><?= $site->data('business_phone') ?></li>
                                <li><i class="fa-li fa fa-phone-square"></i><?= $site->data('cell_phone') ?></li>
                                <li><i class="fa-li fa fa-phone-square"></i>Fax: <?= $site->data('fax') ?></li>
                                <li><i class="fa-li fa fa-envelope"></i><a href="mailto:"<?= $site->data('business_email') ?>"><?= $site->data('business_email') ?></a></li>
                                <li><i class="fa-li fa fa-map-marker"></i><?= $site->data('domain_name') ?></li>
                            </ul>
                            <div style="height:175px;">
                            <? echo $gmaps_iframe; ?></div>
                           
                            </address>
                        </div>

                    </div>

                </div>
            </div>
        </section>
        <?php } //end contacto section?>




		<?php if( $site->module('map') ){ //begin MAP module?>
		<section class="page-section">
            <div class="container full-width" style="height:250px; border:2px">
                    <? echo $gmaps_iframe; ?>
            </div>
        </section>
        <?php } //end map module?>
        
        

	<?php if( $site->section('footer') ){  //begin FOOTER section?><div id="footer"></div>
    <!-- Footer -->
    <footer class="footer">
        <div class="container">
        <?php if( $site->section('footer_widgets') ){ //begin FOOTER WIDGETS section?>
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12" data-animation="fadeInUp" data-animation-delay="100">
                    <div class="widget">
                        <h4 class="title">Dirección</h4>
                        <address>
                            <ul class="address-ul fa-ul">
                                <li>
                                    <i class="fa-li fa fa-home"></i><?= $site->data('company_name') ?><br>
                                    <?= $site->data('address') ?><br/>
										<?= $site->data('address2') ?>
                                </li>
                                <li><i class="fa-li fa fa-phone-square"></i><?= $site->data('business_phone') ?></li>
                                <li><i class="fa-li fa fa-phone-square"></i><?= $site->data('cell_phone') ?></li>
                                <li><i class="fa-li fa fa-envelope"></i><a href="mailto:"<?= $site->data('business_email') ?>"><?= $site->data('business_email') ?></a></li>
                                <li><i class="fa-li fa fa-map-marker"></i><?= $site->data('domain_name') ?></li>
                            </ul>
                        </address>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12" data-animation="fadeInUp" data-animation-delay="300">
                    <div class="widget latest-news">
                        <h4 class="title"><?= $site->data('domain_name') ?></h4>
                                <p><? echo $fb_prof_pic_small; ?><?= $site->content('long_description') ?></p>
                                <p><strong>Mission:</strong><?= $site->content('mission') ?></p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 col-xs-12" data-animation="fadeInUp" data-animation-delay="500">
                    <div class="widget">
                        <h4 class="title">Contact Us</h4>
                        <form name="af-form" method="post" action="#contact" class="af-form row" id="af-form">

                            <div class="col-sm-12 af-outer af-required">
                                <div class="form-group af-inner">
                                    <input type="text" name="name" id="name" size="30" value="" placeholder="Name *" class="form-control placeholder" />
                                    <label class="error" for="name" id="name_error">Name is required.</label>
                                </div>
                            </div>

                            <div class="col-sm-12 af-outer af-required">
                                <div class="form-group af-inner">
                                    <input type="text" name="email" id="email" size="30" value="" placeholder="Email *" class="form-control placeholder" />
                                    <label class="error" for="email" id="email_error">Email is required.</label>
                                </div>
                            </div>

                            <div class="col-sm-12 af-outer af-required">
                                <div class="form-group af-inner">
                                    <textarea name="message" id="input-message" cols="30" placeholder="Message *" class="form-control placeholder"></textarea>
                                    <label class="error" for="input-message" id="message_error">Message is required.</label>
                                </div>
                            </div>

                            <div class="col-sm-12 af-outer af-required">
                                <div class="form-group af-inner">
                                    <input type="submit" name="submit" class="btn btn-default form-button" id="submit_btn" value="SEND" />
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div><!-- / widgets container -->
        <?php } //end footer widgets section?>

        
        <!-- copyrights -->
        <div class="copyrights">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4"><p>&copy; <?= $site->content('custom_footer') ?></p></div>
                    <div class="col-sm-4">
                        <ul class="list-inline socical-line">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-flickr"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                        </ul>
                    </div>
                    <div class="col-sm-4 contact-info"><p>Powered by www.WebGardel.com</p></div>
                </div>
            </div>
        </div><!-- /.copyrights -->

    </footer>
    <!-- /Footer -->
	<?php } //end footer ?>
    
    
    <div class="totop"><i class="fa fa-angle-up"></i></div>

</div><!-- /.wrapper -->

<!-- JS Global -->
<script src="assets/plugins/jquery.min.js"></script>
<script src="assets/plugins/jquery-migrate.min.js"></script>
<script src="assets/plugins/modernizr.custom.js"></script>
<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/plugins/superfish/js/superfish.js"></script>
<script src="assets/plugins/prettyPhoto/js/jquery.prettyPhoto.js"></script>
<script src="assets/plugins/placeholdem.min.js"></script>
<script src="assets/plugins/ajax-mail.js"></script>



<!-- JS Page Level -->
<script src="assets/plugins/owl-carousel/owl.carousel.min.js"></script>
<script src="assets/plugins/isotope/jquery.isotope.min.js"></script>
<script src="assets/plugins/jquery.easypiechart.min.js"></script>
<script src="assets/plugins/waypoints.min.js"></script>
<script src="assets/plugins/jquery.stellar.min.js"></script>
<script src="assets/plugins/flexslider/jquery.flexslider-min.js"></script>

<script src="assets/js/theme.js"></script>
<script src="assets/js/pages/index.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function () {
        theme.init();
        theme.initIsotope();
        theme.initTestimonials();
        theme.initPartnerSlider();
        theme.initLastTweet();
        theme.initParallax();
        theme.initAnimation();
        theme.initFlexSlider();
        if (!( jQuery('html').hasClass('ie8')))
            theme.initEasyPieChart();
    });
</script>





</body>
</html>
