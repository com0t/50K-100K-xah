<?php
/* 
	Plugin Name: Quick Adsense
	Plugin URI: http://quickadsense.com/
	Description: Quick Adsense offers a quicker & flexible way to insert Google Adsense or any Ads code into a blog post.
	Author: Namith Jawahar
	Version: 2.7
	Author URI: http://quickadsense.com/
*/
/*
	This program is free software; you can redistribute it and/or modify
	it under the terms of the GNU General Public License as published by
	the Free Software Foundation; either version 2 of the License, or
	(at your option) any later version.

	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.

	You should have received a copy of the GNU General Public License
	along with this program; if not, write to the Free Software
	Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/
/*Begin Include Files*/
require_once(dirname(__FILE__).'/includes/defaults.php');
require_once(dirname(__FILE__).'/includes/controls.php');
require_once(dirname(__FILE__).'/includes/settings.php');
require_once(dirname(__FILE__).'/includes/widgets.php');
require_once(dirname(__FILE__).'/includes/quicktags.php');
require_once(dirname(__FILE__).'/includes/content.php');
require_once(dirname(__FILE__).'/includes/adsense.php');
if(!class_exists('Mobile_Detect')) {
	require_once(dirname(__FILE__).'/includes/MobileDetect/Mobile_Detect.php');
}
if(!class_exists('iriven\\GeoIPCountry')) {
	require_once(dirname(__FILE__).'/includes/GeoIP/GeoIPCountry.php');
}
/*End Include Files*/
?>