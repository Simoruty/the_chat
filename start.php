<?php
 
function bottombar_init() {
    global $CONFIG;
    elgg_extend_view('css/elgg', 'css/the_chat');
    if (elgg_is_logged_in()) {
	 // elgg_extend_view('page/elements/header', 'page_elements/the_chat');
	  elgg_extend_view('page/elements/footer', 'page_elements/the_chat');	
    } else {
	 //elgg_extend_view('page/elements/header', 'page_elements/clear_cookies');
	 elgg_extend_view('page/elements/footer', 'page_elements/clear_cookies');
    }
    
}

elgg_register_event_handler('init', 'system', 'bottombar_init');

?>
