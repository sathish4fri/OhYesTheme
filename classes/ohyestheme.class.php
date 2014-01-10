<?php
/**
 * Ohyes Theme
 * @website Link: https://github.com/lianglee/OhYesTheme
 * @Package Ohyes
 * @subpackage Theme
 * @author Liang Lee
 * @copyright All right reserved Liang Lee 2014.
 * @ide The Code is Generated by Liang Lee php IDE.
*/ 

class OhYesTheme {
/**
* Register a menu item
* @access system
* @return return;
*/
public static function register_menu_item($name, $data = array()){
	global $OhYesTheme;
	$context = trim($name);
	if (empty($name)) {
		return false;
	}
  return  $OhYesTheme->menu[$name][] = $data;
}
	
/**
* Register a context
* @access system
* @return return;
*/	
public static function register_context($context) {
	global $OhYesTheme;
	$context = trim($context);
	if (empty($context)) {
		return false;
	}
	$context = strtolower($context);
	array_pop($OhYesTheme->context);
	array_push($OhYesTheme->context, $context);

	return true;
}
/**
* View registered menu
* @access system
* @return return;
*/	
public static function view_menu($menu, $file){
	global $OhYesTheme;	
if(!empty($file) && !empty($menu)){	
	return elgg_view("ohyes/theme/menu/{$file}", array(
							   'menu' => $OhYesTheme->menu[$menu],		   
							   ));	
}
return false;
}
/**
* Check Context;
* @access system
* @return return;
*/
public static function check_context($context) {
	global $OhYesTheme;
	return in_array($context, $OhYesTheme->context);
}
/**
* LoadJs;
* @access system
* @return return;
*/
public static function loadJs(){
   elgg_load_js('jquery.fancybox');
   elgg_load_js('ohyestheme.js');
}
/**
* LoadCss;
* @access system
* @return return;
*/
public static function loadCSS(){
   elgg_load_css('jquery.fancybox');
   elgg_load_css('ohyestheme.css');		
}

}