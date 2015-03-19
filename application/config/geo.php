<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
|--------------------------------------------------------------------------
| Site Name
|--------------------------------------------------------------------------
|
| The canonical name for this site
|
*/
$config['site_canonical_name'] = 'geo.herebethedragons.com';
/*
|--------------------------------------------------------------------------
| Site Name
|--------------------------------------------------------------------------
|
| The casual name for this site
|
*/
$config['site_name'] = 'herebethedragons';
/*
|--------------------------------------------------------------------------
| Default Site Tagline
|--------------------------------------------------------------------------
|
| The slogan
|
*/
$config['site_tagline'] = 'Here be the dragons.';
/*
|--------------------------------------------------------------------------
| Default Site Title
|--------------------------------------------------------------------------
|
| Title tag
|
*/
$config['site_title'] = 'DragonFire - World Atlas.';
/*
|--------------------------------------------------------------------------
| Default Brief Site Description
|--------------------------------------------------------------------------
|
| The description is typically used in meta and open graph tags
|
*/   
$config['brief_description'] = 'Here be the dragons is a growing collection of US mapping and regional data in the US.';
/*
|--------------------------------------------------------------------------
| Default Full Site Description
|--------------------------------------------------------------------------
|
| This description is used to describe in more detail than the brief_descrtion, 
| the purpose of this site and its mission.
|
*/   
$config['description'] = 'Here be the dragons is a growing collection of US mapping and regional data in the US.';
/*
|--------------------------------------------------------------------------
| Site URL
|--------------------------------------------------------------------------
|
| The canonical url for this site (also defined in config)
|
*/
$config['site_url'] = 'http://geo.herebethedragons.com';
/*
|--------------------------------------------------------------------------
| Twitter URL
|--------------------------------------------------------------------------
|
| The url to the herebethedragons.com Twitter page
|
*/
$config['twitter_url'] = 'https://twitter.com/kevinmesiab';

/*
|--------------------------------------------------------------------------
| Default Open Graph
|--------------------------------------------------------------------------
|
| The canonical name for this site
|
*/
$config['default_open_graph'] = array(
    'og:title'      => $config['site_title'],
    'og:image'      => $config['site_url'] . '/public/images/og_image.jpg',
    'og:site_name'  => $config['site_name'],
    'og:type'       => 'website',
    'og:url'        =>  $config['site_url'],
    'og:description'=> $config['brief_description'],
    'og:locale'     => 'en_US'
);


/*
|--------------------------------------------------------------------------
| Enable/Disable caching
|--------------------------------------------------------------------------
|
| Enable the cache by setting the 'enable_caching' configuration item to TRUE.
| Disable the cache by setting the 'enable_caching' configuration item to FALSE
| 
| Specify the number of minutes a page should be cached for, by setting the 
| 'cache_minutes' configuration item
|
*/
$config['enable_caching']   = FALSE;
$config['cache_minutes']    = 20;


/*
|--------------------------------------------------------------------------
| Default Site Theme
|--------------------------------------------------------------------------
|
| - The theme to use, unless overridden by the user, via a cookie.
|
| - A pre_controller hook will set the theme names in the array
| $config['themes'] 
|
*/
$config['theme'] = 'darkly';


/* End of file geo.php */
/* Location: ./application/config/geo.php */
