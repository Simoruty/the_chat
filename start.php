<?php
 
function bottombar_init() {
    global $CONFIG;
    elgg_extend_view('css/elgg', 'css/the_chat');
   	$mobile1 = ismobile();
    if (elgg_is_logged_in()&& $mobile1 == false) 	
		 elgg_extend_view('page/elements/footer', 'page_elements/the_chat');	
     else 
	 	elgg_extend_view('page/elements/footer', 'page_elements/clear_cookies');  
}

elgg_register_event_handler('init', 'system', 'bottombar_init');

function ismobile(){
	if(preg_match('/(alcatel|amoi|android|avantgo|blackberry|benq|cell|cricket|docomo|elaine|htc|iemobile|iphone|ipad|ipod|j2me|java|midp|mini|mmp|mobi|motorola|nec-|nokia|palm|panasonic|philips|phone|sagem|sharp|sie-|smartphone|sony|symbian|t-mobile|telus|up\.browser|up\.link|vodafone|wap|webos|wireless|xda|xoom|zte)/i', $_SERVER['HTTP_USER_AGENT'])) {
		return true;
	} else {
		return false;
	}
}
?>
