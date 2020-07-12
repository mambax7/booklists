<?php
// $Id: menu.php, v.0.8 2004/02/18 3:35 csloh  $
// comment callback functions

function booklists_com_update($link_id, $total_num){
	$db =& Database::getInstance();
	$sql = 'UPDATE '.$db->prefix('booklists_links').' SET comments = '.$total_num.' WHERE lid = '.$link_id;
	$db->query($sql);
}

function booklists_com_approve(&$comment){
	// notification mail here
}
?>