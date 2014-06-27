<?php
    include_once('sbwebsite.php');
    $site = new SBWebsite();
	
// facebook widgets
$fb_widget = array(
	'likebutton' 			=>	'<div class="fb-like" data-href="'.$site->data('fb_page_url').'" data-layout="button" data-action="like" data-show-faces="true" data-share="false"></div>',
	'followbutton' 			=>	'<div class="fb-follow" data-href="'.$site->data('fb_page_url').'" data-width="250" data-height="250" data-colorscheme="light" data-layout="button_count" data-show-faces="true"></div>',
	'followbox_standard' 	=>	'<div class="fb-follow" data-href="'.$site->data('fb_page_url').'" data-width="250" data-height="250" data-colorscheme="light" data-layout="standard" data-show-faces="true"></div>',
	'sharebutton_box_small' 	=>	'<div class="fb-share-button" data-href="'.$site->data('fb_page_url').'" data-type="box_count"></div>',
	'sharebutton' 			=>	'<div class="fb-share-button" data-href="'.$site->data('fb_page_url').'" data-type="button"></div>',
	'sharebutton_horiz' 		=>	'<div class="fb-share-button" data-href="'.$site->data('fb_page_url').'" data-type="button_count"></div>',
	'comments' 				=>	'<div class="fb-comments" data-href="http://www.facebook.com/webgardel" data-width="590" data-numposts="12" data-colorscheme="light"></div>',
	'likebox' 				=>	'<div class="fb-like-box" data-href="'.$site->data('fb_page_url').'" data-width="300" data-height="300" data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="false" data-show-border="false"></div>',
	'likebox_tall' 			=>	'<div class="fb-like-box" data-href="'.$site->data('fb_page_url').'" data-width="300" data-height="650" data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="false" data-show-border="false"></div>'
	);

// google maps iframe
$gmaps_iframe = '<iframe src="'.$site->data('gmaps_embed_url').'" width="100%" height="100%" frameborder="0" style="border:0;"></iframe>';

// main menu
$navigation = array(
	'menu_li_1' => 'inicio',
	'menu_li_2' => 'nosotros',
	'menu_li_3' => 'contacto',
	'menu_li_4' => 'fotos',
	'menu_li_5' => 'novedades',
	'menu_li_6' => 'más info',
	'menu_li_7' => 'dirección',
	);
// 
if ($navigation['menu_li_1'] != 'inicio') {
	$menu_li_1 = '<a href="#'.$navigation['menu_li_1'].'">'.$navigation['menu_li_1'].'</a>';
	}
	else {
	$menu_li_1 = '<a href="./">'.$navigation['menu_li_1'].'</a>';
	}
$menu_li_2 = '<a href="#'.$navigation['menu_li_2'].'">'.$navigation['menu_li_2'].'</a>';
$menu_li_3 = '<a href="#'.$navigation['menu_li_3'].'">'.$navigation['menu_li_3'].'</a>';
$menu_li_4 = '<a href="#'.$navigation['menu_li_4'].'">'.$navigation['menu_li_4'].'</a>';
$menu_li_5 = '<a href="#'.$navigation['menu_li_5'].'">'.$navigation['menu_li_5'].'</a>';
$menu_li_6 = '<a href="#'.$navigation['menu_li_6'].'">'.$navigation['menu_li_6'].'</a>';
$menu_li_7 = '<a href="#'.$navigation['menu_li_7'].'">'.$navigation['menu_li_7'].'</a>';


$fb_prof_pic = '<img src="http://graph.facebook.com/'. $site->data('fb_id') .'/picture?type=large" style="max-width:150px; max-height:120px; border-radius:15px;"/>';
$fb_prof_pic_small = '<img src="http://graph.facebook.com/'. $site->data('fb_id') .'/picture" style="border-radius:5px; float:left; margin:5px 15px 5px 0;"/>';

$albumid = '281475991951856'; //if want a specific album
$contents = file_get_contents('http://graph.facebook.com/'.$site->data('fb_id').'/photos/uploaded?limit=12');
$photos = json_decode($contents,true);
$photos = $photos['data'];

$get_fb_photo_cover = file_get_contents('https://graph.facebook.com/'.$site->data('fb_id').'?fields=cover');
$decode_photo_cover = json_decode($get_fb_photo_cover);
$cover_image = $decode_photo_cover->cover ->source;
$fb_cover_photo = '<div style="max-height:500px; overflow:hidden;"><img class="rsImg" src="'.$cover_image.'" alt="'.$site->data('company_name').'" /></div>';
