<?php
if(isset($_POST)) {
	$elems = json_decode(file_get_contents('php://input'));
	$string = file_get_contents('tags.txt');
	foreach($elems->tags as $elem) {
		$string .= $elem . "\n\r";
	}
	file_put_contents('tags.txt',$string);
}
echo json_encode(array());
