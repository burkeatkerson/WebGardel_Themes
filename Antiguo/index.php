<?php
    include_once('sbwebsite.php');
    $site = new SBWebsite();
?>
<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"><![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"><![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"><![endif]--
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"><!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $site->data('company_name') ?> ::: <?= $site->data('domain_name') ?></title>
    <!-- Favicons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="shortcut icon" href="assets/ico/favicon.ico">
    
    <!-- Page-level stylesheets -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/theme.css">
    
    

<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
<script src="assets/plugins/flexslider/jquery.flexslider-min.js"></script>
<script src="assets/plugins/isotope/jquery.isotope.min.js"></script>
<script src="assets/plugins/isotope/jquery.isotope.js"></script>
<script type="text/javascript" charset="utf-8">
$(window).load(function() {
    $('.flexslider').flexslider();
  });
function MM_validateForm() { //v4.0
  if (document.getElementById){
    var i,p,q,nm,test,num,min,max,errors='',args=MM_validateForm.arguments;
    for (i=0; i<(args.length-2); i+=3) { test=args[i+2]; val=document.getElementById(args[i]);
      if (val) { nm=val.name; if ((val=val.value)!="") {
        if (test.indexOf('isEmail')!=-1) { p=val.indexOf('@');
          if (p<1 || p==(val.length-1)) errors+='- '+nm+' must contain an e-mail address.\n';
        } else if (test!='R') { num = parseFloat(val);
          if (isNaN(val)) errors+='- '+nm+' must contain a number.\n';
          if (test.indexOf('inRange') != -1) { p=test.indexOf(':');
            min=test.substring(8,p); max=test.substring(p+1);
            if (num<min || max<num) errors+='- '+nm+' must contain a number between '+min+' and '+max+'.\n';
      } } } else if (test.charAt(0) == 'R') errors += '- '+nm+' is required.\n'; }
    } if (errors) alert('The following error(s) occurred:\n'+errors);
    document.MM_returnValue = (errors == '');
} }
</script>

    <!-- Flexslider -->
<link rel="stylesheet" href="assets/css/flexslider.css" type="text/css">
    <link href="assets/plugins/isotope/jquery.isotope.css" rel="stylesheet">
    
    <!-- google font families -->
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Open+Sans:regular,italic,bold,bolditalic" />
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Lato:regular,italic,bold,bolditalic" />
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Gotham:regular,italic,bold,bolditalic" />
    
    
    <link rel='stylesheet' id='flexslider-css'  href="assets/plugins/flexslider/flexslider.css" type='text/css' media='all' />
    <link rel="stylesheet" href="assets/css/tt_shortcode.css">
    <link rel="stylesheet" href="assets/css/woocommerce.css">
    <link rel="stylesheet" href="assets/css/superfish.css">

<style>
#header, #mainNav ul ul { background-color: #<?= $site->option('color') ?> !important;	}
a { color: #<?= $site->option('color') ?>;} <? //import the accent color preference here ?>
</style>

<!-- end facebook timeline -->


</head>
<?php $fbfeed_path = 'assets/plugins/fbfeed';
include $fbfeed_path . '/fbfeed-settings.php'; ?>
<body class="wide" style="background-image:url(assets/images/bg_<?= $site->option('color_scheme') ?>.png);">
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
<? $fb_likebutton = '<div class="fb-like" data-href="'.$site->data('fb_page_url').'"  data-layout="button" data-action="like" data-show-faces="true" data-share="false"></div>'; 
$fb_followbox_standard = '<div class="fb-follow" data-href="'.$site->data('fb_page_url').'" data-width="250" data-height="250" data-colorscheme="light" data-layout="standard" data-show-faces="true"></div>';
$fb_followbutton = '<div class="fb-follow" data-href="'.$site->data('fb_page_url').'" data-width="250" data-height="250" data-colorscheme="light" data-layout="button_count" data-show-faces="true"></div>';
$fb_sharebutton_box_small = '<div class="fb-share-button" data-href="'.$site->data('fb_page_url').'" data-type="box_count"></div>';
$fb_sharebutton = '<div class="fb-share-button" data-href="'.$site->data('fb_page_url').'" data-type="button"></div>'; 
$fb_sharebutton_horiz = '<div class="fb-share-button" data-href="'.$site->data('fb_page_url').'" data-type="button_count"></div>';
$fb_comments = '<div class="fb-comments" data-href="http://www.facebook.com/webgardel" data-width="590" data-numposts="12" data-colorscheme="light"></div>';
$fb_likebox = '<div class="fb-like-box" data-href="'.$site->data('fb_page_url').'" data-width="300" data-height="300" data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="false" data-show-border="false"></div>';
$fb_likebox_tall = '<div class="fb-like-box" data-href="'.$site->data('fb_page_url').'" data-width="300" data-height="650" data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="false" data-show-border="false"></div>';
$gmaps_iframe = '<iframe src="'.$site->data('gmaps_embed_url').'" width="100%" height="100%" frameborder="0" style="border:0;"></iframe>';
$menu_li_1 = 'inicio';
$menu_li_2 = 'nosotros';
$menu_li_3 = 'contacto';
$menu_li_4 = 'fotos';
$menu_li_5 = 'novedades';
$menu_li_6 = 'más info';
$menu_li_7 = 'dirección';
$menu_li_8 = 'página de facebook';

if ($menu_li_1 != 'inicio') {
	$menu_item1 = '<a href="#'.$menu_li_1.'">'.$menu_li_1.'</a>';
	}
	else {
	$menu_item1 = '<a href="./">'.$menu_li_1.'</a>';
	}
$menu_item2 = '<a href="#'.$menu_li_2.'">'.$menu_li_2.'</a>';
$menu_item3 = '<a href="#'.$menu_li_3.'">'.$menu_li_3.'</a>';
$menu_item4 = '<a href="#'.$menu_li_4.'">'.$menu_li_4.'</a>';
$menu_item5 = '<a href="#'.$menu_li_5.'">'.$menu_li_5.'</a>';
$menu_item6 = '<a href="#'.$menu_li_6.'">'.$menu_li_6.'</a>';
$menu_item7 = '<a href="#'.$menu_li_7.'">'.$menu_li_7.'</a>';
$menu_item8 = '<a href="'.$site->data('fb_page_url').'" target="_blank">'.$menu_li_8.'</a>';


$fb_prof_pic = '<img src="http://graph.facebook.com/'. $site->data('fb_id') .'/picture?type=large" style="border-radius:15px;"/>';
$fb_prof_pic_small = '<img src="http://graph.facebook.com/'. $site->data('fb_id') .'/picture" style="border-radius:5px; float:left; margin:5px 15px 5px 0;"/>';

$albumid = '281475991951856'; //if want a specific album
$contents = file_get_contents('http://graph.facebook.com/'.$site->data('fb_id').'/photos/uploaded?limit=8');
$photos = json_decode($contents,true);
$photos = $photos['data'];

$get_fb_photo_cover = file_get_contents('https://graph.facebook.com/'.$site->data('fb_id').'?fields=cover');
$decode_photo_cover = json_decode($get_fb_photo_cover);
$cover_image = $decode_photo_cover->cover ->source;
$fb_cover_photo = '<div style="width:100%; height:280px; background:url('.$cover_image.'); background-position:center top; background-size: cover; overflow:hidden; margin: -20px auto 0 auto; zoom:1; -ms-background-position-x: center; -ms-background-position-y: top;"></div>';




//end Webgardel theme functionality ?>
<!-- New theme content begins here -->
<div id="wrap_outside">
<?php if( $site->section('header') ){ //begin HEADER section?>
	<?php if( $site->module('header_navigation') ){ //begin HEADER NAVIGATION module?>
    <div id="header">
        <div class="inside">
			<div class="top clearfix">
				<div class="left">
					<?php if( $site->module('slogan') ){ //begin slogan module ?>
       				 	<p><?= $site->content('slogan_text') ?></p>
					<?php } //end slogan module?>
                </div>
					<div id="mainNav" class="clearfix">
        				<ul class="sf-menu clearfix" >
							<li><? echo $menu_item1; ?></li>
							<li><? echo $menu_item2; ?></li>
							<li><? echo $menu_item3; ?></li>
							<li><? echo $menu_item7; ?></li>
							<li><? echo $menu_item5; ?></li>
							<li><? echo $menu_item6; ?></li>
    					</ul>
                   </div>
               </div>
               <div class="bottom clearfix">
					<?php if( $site->module('business_name') ){ //begin business_name module?>
						<div id="logo">	
            				<h1 align="center"><a href="http://<?= $site->data('domain_name') ?>">
							<?= $site->data('company_name') ?></a></h1>	
							<?php } //end business_name module navigation module?>
						</div>
               </div>
			</div>
        </div>
	<?php } //end header navigation module?>
<?php } //end header section?>



<div id="container">
    
		<?php if( $site->module('cover_photo') ){ //begin cover_photo module  ?>
		<div id="main" class="clearfix">
			<div class="slideshow" style="margin-bottom:-15px;">
				<div class="flexslider">		
					<ul class="slides">
                    <li><? echo $fb_cover_photo ?> </li>
           	    </ul>
              </div>
			</div>
       </div>
        
        <div id="container-sub">
	           <div style="float:left;">
               	<ul id="fb_buttons_box">
						<li><? echo $fb_likebutton ?>
                      </li>
                  </ul>   
               </div>
         </div>
         
		<?php } //end cover_photo module?>
    



<?php if( $site->section('about_us') ){ //begin NOSOTROS section?><a id="nosotros"></a><br>
	<div id="container-sub" class="full homeSection clearfix"><br>
    <h2 class="sectionHead"><span>Nosotros</span></h2>
		<div id="page" class="homeSection clearfix">
			<div class="prof_pic">
            	<? echo $fb_prof_pic; ?>
           </div>
           <? $long_description = $site->content('long_description');
									if ($long_description){
										echo '<p style="margin-left:60px;">'.$long_description.'</p>';
										} ?> 
           <? $short_description = $site->content('short_description');
									if ($long_description){
										echo '<p style="margin-left:60px;">'.$short_description.'</p>';
										} ?> 
           
						<?php if( $site->module('fb_followbox') ){ //begin fb_followbox module  ?>
                			<div style="float:right; vertical-align:baseline;">
							<? echo $fb_followbox_standard; ?>
							</div>
						<?php } //end fb_followbox module?>
      </div>
           <div id="clearfix" class="clearfix">
           </div><br>
           
    
    
    
    	
		<div id="middle" class="clearfix">	
		    <div id="page" class="homeSection clearfix">				
						    						
							
						    </div>
		</div>
        
        
	</div>
</div>
<?php } //end nosotros section?>
<?php if( $site->module('contact_info') ){ //begin contact_info module  ?><div id="más info"></div>
<div class="one_third">
	<div id="container-sub">
		<h3>Contacto</h3>
        <p style="font-size:80%;">
        <? $business_phone = $site->data('business_phone');
									if ($business_phone){
										echo '<br>Teléfono: <strong>'.$business_phone.'</strong>';
										} ?> 
			<? $cell_phone = $site->data('cell_phone');
									if ($cell_phone){
										echo '<br>Celular: <strong>'.$cell_phone.'</strong>';
										} ?> 
			<? $fax = $site->data('fax');
									if ($fax){
										echo '<br>Fax: <strong>'.$fax.'</strong>';
										} ?> 
			<? $business_email = $site->data('business_email');
									if ($business_email){
										echo '<br>Mail: <strong><a href="#contacto">'.$business_email.'</a></strong>';
										} ?> 
			<br><a href="#contacto">Contacto directo</a>
		</p>
	</div>
	<div id="container-sub" align="center">
		<h3 align="center">Horario general</h3>
        <p>lun: <?= $site->content('hours_mon') ?>
        <br>mar: <?= $site->content('hours_tue') ?>
        <br>mie: <?= $site->content('hours_wed') ?>
        <br>jue: <?= $site->content('hours_thu') ?>
        <br>vie: <?= $site->content('hours_fri') ?>
        <br>sab: <?= $site->content('hours_sat') ?>
        <br>dom: <?= $site->content('hours_sun') ?>
        </p>
        	
	</div>
</div>


<div class="two_third last">
	<div id="container-sub">
		<h3>Dirección</h3>
		<p style="font-size:80%;"><strong><?= $site->data('company_name') ?></strong>
			<br><?= $site->data('address') ?>
			<br><?= $site->data('address2') ?></p>
            <p><a href="http://<?= $site->data('company_name') ?>"><?= $site->data('domain_name') ?></a></p>
        
			<?php if( $site->module('map') ){ //begin map module  ?><a id="dirección"></a>
			<iframe src="<?= $site->data('gmaps_embed_url') ?>" width="100%" height="250" frameborder="0" style="border:0">			</iframe>
			<?php } //end map module?>
	</div>
</div>
<?php } //end contact_info module?>
<div class="homeSection clearfix"></div>

	<div id="container-sub">
<?php if( $site->section('photos') ){ //begin FOTOS section?><a id="fotos"></a>
	    <div id="content" class="fullProjects full">			
			<h2 class="sectionHead"><span><?= $site->option('photo_section_title') ?></span></h2>
			<div id="projects" class="clearfix">		
        
			<div class="thumbs masonry isotope">
       <?
		foreach ($photos as $row)
		{
			$img_src = $row['images'][1]['source'];
			$img_name = $row['name'];
    		echo '<div class="project small lamparas isotope-item" id="project-lampara-moderna">
						<div class="inside">
						<img src="'.$img_src.'" class="thumb wp-post-image" alt="lampara moderna" title="'.$img_name.'" />
						</div>																																
					</div>	';
		}
		?>
      <div class="homeSection clearfix"></div>
        <br><br><br>
<?php } //end fotos section?>
        
<?php if( $site->section('news') ){ //begin NOVEDADES section?><div id="novedades"></div><a id="novedades"></a>

<h2 class="sectionHead"><span>Novedades</span></h2>
<div class="two_third">
<?php fbFeed($settings); ?>
</div>
	<div class="one_third last">
    		<?php if( $site->module('fb_likebox') ){ //begin fb_likebox module  ?>
				<? echo $fb_likebox_tall; ?>
			<?php } //end fb_likebox module?>
    </div>
<?php } //end novedades section?>
<br>
<br>
<?php if( $site->module('fb_comments') ){ //begin fb_comments module  ?>
<br><br>
<h2 class="sectionHead"><span>Commentarios</span></h2>
	<div style="margin: 0 auto;"><? echo $fb_comments; ?></div>
<?php } //end fb_comments module?>
 


<?php if( $site->section('contact') ){ //begin CONTACTO section?><a id="contacto"></a>
<?php if( $site->module('contact_form') ){ //begin contact_form module  ?>
<h2 class="sectionHead"><span>Contacto</span></h2>
   
  		<div class="wpcf7" id="wpcf7-f6-o1">
		  <div class="screen-reader-response"></div>
			<form enctype="text/plain" action="mailto:<?= $site->data('business_email') ?>" method="post" class="wpcf7-form" novalidate onSubmit="MM_validateForm('your-name','','R','your-subject','','R','your-message','','R');return document.MM_returnValue">
			<div style="display: none;">
			<input type="hidden" name="_wpcf7" value="6" />
			<input type="hidden" name="_wpcf7_version" value="3.8.1" />
			<input type="hidden" name="_wpcf7_locale" value="en_US" />
			<input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f6-o1" />
			<input type="hidden" name="_wpnonce" value="bfaf1a4921" />
			</div>
			<p>Nombre (required)<br />
			<span class="wpcf7-form-control-wrap your-name"><input name="your-name" type="text" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" id="your-name" value="" size="40" aria-invalid="false" aria-required="true" /></span> </p>
			<p>Mail (required)<br />
			    <span class="wpcf7-form-control-wrap your-email"><input type="email" name="your-email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" /></span> </p>
			<p>Tema<br />
			    <span class="wpcf7-form-control-wrap your-subject"><input name="your-subject" type="text" class="wpcf7-form-control wpcf7-text" id="your-subject" value="" size="40" aria-invalid="false" /></span> </p>
			<p>Mensaje<br />
		      <span class="wpcf7-form-control-wrap your-message"><textarea name="your-message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" id="your-message" aria-invalid="false"></textarea></span> </p>
			<p><input type="submit" value="Enviar" class="wpcf7-form-control wpcf7-submit" /></p>
			<div class="wpcf7-response-output wpcf7-display-none"></div></form></div>
			<div class="homeSection clearfix">
			</div>
        


<?php } //end contact_form module?>
<?php } //end contacto section?>
</div>
</div>   
</div> <br>
	<?php if( $site->section('footer') ){ //begin FOOTER section?><a id="footer"></a>
	<div id="container">
	<div id="footer">
   	<?php if( $site->section('footer_widgets') ){ //begin FOOTER WIDGETS section?>
		<div class="inside">	
				<div class="main clearfix">
					
					<div class="one_third">
                        <h4 style="font-weight:100;"><?= $site->data('domain_name') ?></h4>
                        <p><?= $site->content('about') ?></p>
                        
        <? $mission = $site->content('mission');
									if ($mission){
										echo '<p>Nuestra misión:'.$mission.'</p>';
										} ?> 
                   </div>
                   <div class="one_third">
                        <? echo $fb_likebox; ?>
                        <p>
                   </div>
					<div class="one_third last">
								<h4>Contacto</h4>
									<p style="font-size:75%; font-weight:200; text-transform:uppercase;">
        <? $business_phone = $site->data('business_phone');
									if ($business_phone){
										echo '<br>Teléfono: <strong>'.$business_phone.'</strong>';
										} ?> 
			<? $cell_phone = $site->data('cell_phone');
									if ($cell_phone){
										echo '<br>Celular: <strong>'.$cell_phone.'</strong>';
										} ?> 
			<? $fax = $site->data('fax');
									if ($fax){
										echo '<br>Fax: <strong>'.$fax.'</strong>';
										} ?> 
			<? $business_email = $site->data('business_email');
									if ($business_email){
										echo '<br>Mail: <strong><a href="#contacto">'.$business_email.'</a></strong>';
										} ?> 
			<br><a href="#contacto">Contacto directo</a>
		</p>
									<p style="font-size:80%; font-weight:200"><strong><?= $site->data('company_name') ?></strong>
									<br><?= $site->data('address') ?>
									<br><?= $site->data('address2') ?></p>
           						 <p><a href="http://<?= $site->data('company_name') ?>"><?= $site->data('domain_name') ?></a></p>
                   </div>
           	 </div>
             </div>
			<?php } //end footer widgets section?>	
								
			<br>
			<div class="secondary clearfix">	
				<div class="left">
                	<p style="font-weight:200; font-size:75%;"><?= $site->content('custom_footer') ?></p>
       		    </div>
				<div class="right">
               	<p style="font-weight:200; font-size:75%;">Powered by <a href="http://www.webgardel.com">WebGardel</a>
                	</strong>
                	</p>
           	</div>
			</div><!-- end footer secondary-->		
		</div>		
	</div><!-- end footer -->
<?php } //end footer section?>
</div><!-- end container -->

<!-- New theme content ends here -->
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
</div>
</div>
</body>
</html>
