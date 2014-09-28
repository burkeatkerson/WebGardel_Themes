<!-- WebGardel Theme : Elegante 1.1.1   -->
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
    <? //Meta tags for Facebook, sharing, and SEO ?>
    <meta property="og:title" content="<?= $site->data('company_name') ?>"/>
	<meta property="og:image" content="http://graph.facebook.com/<? echo $site->data('fb_id') ?>/picture?type=large"/>
	<meta property="og:site_name" content="<?= $site->data('domain_name') ?>"/>
	<meta property="og:url" content="http://<?= $site->data('domain_name') ?>"/>
	<meta property="og:description" content="<? echo $site->content('long_description') ?>"/>
    <meta name="description" content="<?= $site->content('slogan_text') ?>">
    
    <!-- Favicons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="shortcut icon" href="assets/ico/favicon.ico">
    
    <!-- Page-level stylesheets -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/theme.css">
    
    <!-- google font families -->
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Open+Sans:regular,italic,bold,bolditalic" />
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Lato:regular,italic,bold,bolditalic" />
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Gotham:regular,italic,bold,bolditalic" />
    
    
    <link rel='stylesheet' id='flexslider-css'  href="assets/plugins/flexslider/flexslider.css" type='text/css' media='all' />
    <link rel="stylesheet" href="assets/css/tt_shortcode.css">

<!-- Flexslider -->
<link rel="stylesheet" href="assets/css/flexslider.css" type="text/css">
    <link href="assets/plugins/isotope/jquery.isotope.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
<script src="assets/plugins/flexslider/jquery.flexslider-min.js"></script>
<script src="assets/plugins/isotope/jquery.isotope.min.js"></script>
<script src="assets/plugins/isotope/jquery.isotope.js"></script>
<script type="text/javascript" charset="utf-8">
  $(window).load(function() {
    $('.flexslider').flexslider();
  });
</script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-52327937-4', 'auto');
  ga('send', 'pageview');

</script>


</head>
<body class="wide">
<? //Webgardel theme functionality ?>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=1494239327474271&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<script>
$('#cff .cff-item').each(function(){
  var $self = $(this),
  $cffphoto = $self.find('.cff-photo');
  $cffphoto.detach();
  $self.find('.cff-post-text').before($cffphoto);
});</script>

<?php if( $site->section('header') ){ //begin HEADER section?><div id="header"></div>
	<?php if( $site->module('header_navigation') ){ //begin HEADER NAVIGATION module?>
	<div id="is-fixed">
    	<div id="header">
			<div id="mainNav" class="clearfix">
        		<ul class="sf-menu clearfix" >
					<li><? echo $menu_item1; ?></li>
					<li><? echo $menu_item2; ?></li>
					<li><? echo $menu_item5; ?></li>
					<li><? echo $menu_item7; ?></li>
					<li><? echo $menu_item6; ?></li>
					<li><? echo $menu_item3; ?></li>
    			</ul>
			</div>
		   <hr style="height: 2px;">
    	</div>
	</div>
	<?php } //end header navigation module?>
	<div class="homeSection clearfix">
	</div>
		<br><br>
		<div id="header">
			<?php if( $site->module('business_name') ){ //begin business_name module?>
				<div id="logo">	
            	<h1 align="center"><a href="http://<?= $site->data('domain_name') ?>"><?= $site->data('company_name') ?></a></h1>	
				</div>
			<?php } //end business_name module?>	
			<?php if( $site->module('slogan') ){ //begin slogan module ?>
       		 	<p><?= $site->content('slogan_text') ?></p>
			<?php } //end slogan module?>
		<hr>
	</div>
	<div class="homeSection clearfix">
	</div>
<?php } //end header section?>



	<div id="container">

		<div id="main" class="clearfix">
        <?php if( $site->module('cover_photo') ){ //begin cover_photo module  ?>
			<div class="slideshow">
				<? echo $fb_widget['cover_photo']; ?>
			</div>
		<?php } //end cover_photo module?>

    



<?php if( $site->section('about_us') ){ //begin NOSOTROS section?><div id="nosotros"></div><a id="nosotros"></a><br>
	<div class="full homeSection clearfix">	<br>
		<div id="page" class="homeSection clearfix">
			<div class="prof_pic">
            	<? echo $fb_widget['prof_pic']; ?></div>
         	 
			<p style="margin-left:80px;"><?= $site->content('long_description') ?></p>
            <p style="margin-left:60px;"><?= $site->content('short_description') ?></p>
           
						<?php if( $site->module('fb_followbox') ){ //begin fb_followbox module  ?>
                			<div style="float:left; vertical-align:baseline;">
							<? echo $fb_widget['followbox_standard']; ?>
							</div>
						<?php } //end fb_followbox module?>
                      
           <div id="clearfix" class="clearfix">
           </div><br>
    
    
    
    	
		<div id="middle" class="clearfix">	
		    <div id="page" class="homeSection clearfix">				
						    						
							
						    </div>
		</div>
        
        
	</div>
</div>
<?php } //end nosotros section?>
<br>
<?php if( $site->module('contact_info') ){ //begin contact_info module  ?><div id="más info"></div>
<div class="one_third">
	<div id="container-sub" align="center">
		<h3 align="center">Horario general</h3>
        <p style="font-size:80%;">lun: <?= $site->content('hours_mon') ?>
        <br>mar: <?= $site->content('hours_tue') ?>
        <br>mie: <?= $site->content('hours_wed') ?>
        <br>jue: <?= $site->content('hours_thu') ?>
        <br>vie: <?= $site->content('hours_fri') ?>
        <br>sab: <?= $site->content('hours_sat') ?>
        <br>dom: <?= $site->content('hours_sun') ?>
        </p>
        	
	</div>
</div>
<div class="one_third">
	<div id="container-sub">
		<h3>Contacto</h3>
		<p>
		<? $business_phone = $site->data('business_phone');
	if ($business_phone){
		echo 'Teléfono: <strong>'.$business_phone.'</strong><br>';
	} ?> 
<? $cell_phone = $site->data('cell_phone');
	if ($cell_phone){
		echo 'Celular: <strong>'.$cell_phone.'</strong><br>';
	} ?> 
<? $fax = $site->data('fax');
	if ($fax){
		echo 'Fax: <strong>'.$fax.'</strong><br>';
	} ?> 
<? $business_email = $site->data('business_email');
	if ($business_email){
		echo 'Mail: <a href="#contacto">'.$business_email.'</a>';
	} ?> 
		</p>
	</div>
</div>


<div class="one_third last">
	<div id="container-sub">
		<h3>Dirección</h3>
		<p style="font-size:80%;"><strong><?= $site->data('company_name') ?></strong>
			<br><?= $site->data('address') ?>
			<br><?= $site->data('address2') ?></p>
            <p><a href="http://<?= $site->data('company_name') ?>"><?= $site->data('domain_name') ?></a></p>

	</div>
</div>
<?php } //end contact_info module?>
<?php if( $site->module('map') ){ //begin map module  ?><a id="dirección"></a>
<iframe src="<?= $site->data('gmaps_embed_url') ?>" width="100%" height="250" frameborder="0" style="border:0"></iframe>
							<div id="container-sub" class="float" align="center" style="margin:20px;">
               	<ul id="fb_buttons_box">
						<?php if( $site->module('fb_likebutton') ){ //begin fb_likebutton module  ?>
                		<li><? echo $fb_widget['likebutton']; ?></li>
						<?php } //end fb_likebutton module?>
						<?php if( $site->module('fb_followbutton') ){ //begin fb_followbutton module  ?>
                		<li><? echo $fb_widget['followbutton']; ?></li>
						<?php } //end fb_followbutton module?>
                  </ul>
    	    	</div>
<br>
<?php } //end map module?>
<div class="homeSection clearfix"></div>
<br>
<br>

<?php if( $site->section('photos') ){ //begin FOTOS section?><div id="fotos"></div><a id="fotos"></a>
    <div id="content" class="fullProjects clearfix full">			
		<h2><?= $site->option('photo_section_title') ?></h2>
		<div id="projects" class="clearfix">		
				
		
	
		<ul id="filterNav" class="clearfix">
        	<li class="allBtn"><a href="#" data-filter="*" class="selected">All</a></li>
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
							echo '<li class="thumb wp-post-image"><a href="#" data-filter=".'.$photo_album.'">'.$photo_album.'</a></li>';
							$i++;
			
   							 if ($i == 9) break; //limited to 9 albums so they look decent on screen. Remove this optionial.
    					}
					}
				?>
		</ul>
        
	<div class="thumbs masonry isotope">
       <?
		foreach ($photos as $row)
		{
			$img_src = $row['images'][1]['source'];
			$img_name = $row['name'];
    		echo '<div class="project small lamparas isotope-item" id="project-lampara-moderna">
						<div class="inside">
						<a href="'.$img_src.'" rel="bookmark" >	
							<img src="'.$img_src.'" class="thumb wp-post-image" alt="lampara moderna" title="'.$img_name.'" />		<span class="title"><span>'.$img_name.'</span></span>
						</a>
						</div>																																
					</div>	';
		}
		?>
			</div>
		</div>
	</div>
</div>
<?php } //end fotos section?>
    	
	





<?php if( $site->section('news') ){ //begin NOVEDADES section?><div id="novedades"></div><a id="novedades"></a>
<div class="two_third">
<br><h2>Novedades</h2> 
<?php fbFeed($settings); ?>
</div>
	<div class="one_third last">
    		<?php if( $site->module('fb_likebox') ){ //begin fb_likebox module  ?>
				<? echo $fb_widget['likebox']; ?>
			<?php } //end fb_likebox module?>
    </div>
<?php } //end novedades section?>


<br>
<?php if( $site->module('fb_comments') ){ //begin fb_comments module  ?>
<br><h2>Commentarios</h2>
	<div style="margin: 0 auto;"><? echo $fb_widget['comments']; ?></div>
<?php } //end fb_comments module?>
 



<?php if( $site->module('contact_form') ){ //begin contact_form module  ?><a id="contacto"></a><br>
<h2>Contacto</h2>
  		<div class="wpcf7" id="wpcf7-f6-o1">
<div class="screen-reader-response"></div>
<form action="#" method="post" class="wpcf7-form" novalidate>
<div style="display: none;">
<input type="hidden" name="_wpcf7" value="6" />
<input type="hidden" name="_wpcf7_version" value="3.8.1" />
<input type="hidden" name="_wpcf7_locale" value="en_US" />
<input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f6-o1" />
<input type="hidden" name="_wpnonce" value="bfaf1a4921" />
</div>
<p>Nombre (required)<br />
    <span class="wpcf7-form-control-wrap your-name"><input type="text" name="your-name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" /></span> </p>
<p>Mail (required)<br />
    <span class="wpcf7-form-control-wrap your-email"><input type="email" name="your-email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" /></span> </p>
<p>Tema<br />
    <span class="wpcf7-form-control-wrap your-subject"><input type="text" name="your-subject" value="" size="40" class="wpcf7-form-control wpcf7-text" aria-invalid="false" /></span> </p>
<p>Mensaje<br />
    <span class="wpcf7-form-control-wrap your-message"><textarea name="your-message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false"></textarea></span> </p>
<p><input type="submit" value="Enviar" class="wpcf7-form-control wpcf7-submit" /></p>
<div class="wpcf7-response-output wpcf7-display-none"></div></form></div>
<div class="homeSection clearfix">
</div>
<?php } //end contact_form module?>

<br>
</div>
			<br><hr><br>
    </div>	
	<?php if( $site->section('footer') ){ //begin FOOTER section?><div id="footer"></div><a id="footer"></a>

	<div id="footer">
		<div class="inside">	
    	    <?php if( $site->section('footer_widgets') ){ //begin FOOTER WIDGETS section?>
				<div class="main clearfix">
					
           	 </div><!-- end footer main -->
			<?php } //end footer widgets section?>	
								
			<br><br><br><br>
		<div class="secondary clearfix">	
									<div class="left"><p style="font-size:75%;"><?= $site->content('custom_footer') ?></p></div>
			<div class="right"><p style="font-size:75%;">Powered by <a href="http://www.webgardel.com">WebGardel</a></p></div>
		</div><!-- end footer secondary-->		
		</div>		
	</div><!-- end footer -->
<?php } //end footer section?>
</div><!-- end container -->

<!-- New theme content ends here -->
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script type="text/javascript" src="<?php echo $fbfeed_path ?>/core/js/cff.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function () {
        theme.init();
        theme.initIsotope();
        theme.initTestimonials();
        theme.initPartnerSlider();
        theme.initParallax();
        theme.initAnimation();
        theme.initFlexSlider();
        if (!( jQuery('html').hasClass('ie8')))
            theme.initEasyPieChart();
    });
</script>

</body>
</html>
