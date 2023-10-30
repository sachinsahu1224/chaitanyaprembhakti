<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'Front';
$route['404_override'] = '';
$route['S1nHsKpsM2rtaPhMdrVji9b'] = 'AdminControllers';
$route['admin/login'] = 'AdminControllers/login';
$route['admin/dashboard'] = 'AdminHome';
$route['admin/addslider'] = 'AdminHome/addSlider';
$route['admin/viewslider'] = 'AdminHome/viewSlider';
$route['admin/viewproduct'] = 'AdminHome/viewProduct';
$route['admin/quotation'] = 'AdminHome/quotation';

$route['admin/addsliderdata'] = 'AdminHome/AddSliderData';

$route['admin/addproduct'] = 'AdminHome/addProduct';
$route['admin/testimonial'] = 'AdminHome/addtestimonial';
$route['admin/viewtestimonial'] = 'AdminHome/viewtestimonial';
$route['admin/updateTestimonial'] = 'AdminHome/updateTestimonial';

$route['admin/updateProduct'] = 'AdminHome/updateProduct';
$route['admin/addservice'] = 'AdminHome/addService';
$route['admin/viewservice'] = 'AdminHome/viewService';
$route['admin/updateService'] = 'AdminHome/updateService';
$route['admin/about'] = 'AdminHome/about';
$route['admin/INTRODUCTION'] = 'AdminHome/INTRODUCTION';
$route['admin/Philosophy'] = 'AdminHome/Philosophy';

$route['admin/objective'] = 'AdminHome/objective';

$route['admin/founder_acharya'] = 'AdminHome/founder_acharya';
$route['admin/present_acharya'] = 'AdminHome/present_acharya';
$route['admin/add_gallery_images'] = 'AdminHome/addfestival_images';
$route['admin/gallery_list'] = 'AdminHome/allfestival_images';
$route['admin/gallery_images/(:any)'] = 'AdminHome/view_gallery_images/$1';
$route['admin/Deletegallery/(:any)'] = 'AdminHome/Deletegallery/$1';

$route['admin/add_wallpapers'] = 'AdminHome/add_wallpapers';
$route['admin/wallpaper_list'] = 'AdminHome/view_wallpapers';
$route['admin/Deletewallpaper/(:any)'] = 'AdminHome/Deletewallpaper/$1';
$route['admin/addpost'] = 'AdminHome/addpostData';


//front

$route['introduction'] = 'Front/introduction';
$route['objective'] = 'Front/objective';
$route['founder-acharya'] = 'Front/founder_acharya';

$route['present-acharya'] = 'Front/present_acharya';
$route['guru-parampara'] = 'Front/guru_parampara';
$route['guru-parampara/(:num)'] = 'Front/guru_parampara/$1';
$route['contact-us'] = 'Front/contact_us';
$route['our-center'] = 'Front/our_center';

$route['gaudiya-vaishnavism'] = 'Front/gaudiya_vaishnavism';

$route['festivals'] = 'Front/festivals';
$route['activities'] = 'Front/activities/';
$route['activity_discription/(:num)'] = 'Front/activity_discription/$1';


$route['sunday_sanskritan'] = 'Front/sunday_sanskritan';
$route['image-gallery'] = 'Front/image_gallery';
$route['books-gallery'] = 'Front/books_gallery';
$route['audio-gallery'] = 'Front/audio';


$route['video'] = 'Front/video';
$route['all_event'] = 'Front/main_event';
$route['all_event/(:num)'] = 'Front/main_event/$1';
$route['event/(:any)'] = 'Front/event/$1';


$route['calender'] = 'Front/calender';
$route['category'] = 'Front/selcet_darshan_event/';
$route['category/(:num)'] = 'Front/selcet_darshan_event/$1';
$route['Deity-darshan/(:any)'] = 'Front/deity_darshan/$1';
//$route['today_darshan'] = 'Front/darshan';
//$route['view-images'] = 'Front/view_images';
$route['festival-gallery'] = 'Front/festival_images';
$route['festival-gallery(:num)'] = 'Front/festival_images/$1';
$route['festival-gallery_images/(:any)'] = 'Front/festival_gallery_images/$1';
$route['wallpaper-images'] = 'Front/wallpaper_images';
//$route['guru_parampara_details'] = 'Front/shrila_roopgoswami';
/*------new link------------*/
$route['guru_parampara_details/(:num)'] = 'Front/guruparampara_desc/$1';
//------------
/*-----------old link statik--------
$route['shrila-raghunathbhatt'] = 'Front/shrila_raghunathbhatt';
$route['shrila-jiva-goswami'] = 'Front/shrila_jiva_goswami';
$route['shrila-raghunath-das-goswami'] = 'Front/shrila_raghunath_das_goswami';
$route['shri-shrimad-bhakti-dayit-madhav-goswami-maharaj'] = 'Front/shri_shrimad_bhakti';
$route['shrila-bhakti-siddhant-saraswati-goswami-prabhupaad'] = 'Front/shrila_bhakti_siddhant_saraswati_goswami_prabhupaad';
$route['shrila-gour-kishor-das-babaji-maharaj'] = 'Front/shrila_gour_kishor_das_babaji_maharaj';
$route['shrila-bhakti-vinod-thakur'] = 'Front/shrila_bhakti_vinod_thakur';*/
//-----------------
$route['audio/(:any)/(:any)'] = 'Front/audio_data/$1/$2';
$route['audio/(:any)/(:any)/(:num)'] = 'Front/audio_data/$1/$2/$3';
$route['singlefestival/(:any)'] = 'Front/singlefestival/$1';
$route['kritan'] = 'Front/kritan';
$route['Blog'] = 'Front/Blog';

$route['singleblog/(:any)'] = 'Front/singleblog/$1';
//$route['play_audio/(:num)'] = 'Front/get_audio_file/$1';
$route['translate_uri_dashes'] = FALSE;

