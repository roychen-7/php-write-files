<?php

function write_log($message) {
	if (!is_dir('./logs')) {
		mkdir('./logs');	
	}

	file_put_contents('./logs/2015.log', $message);
}

write_log(123);

?>
