<?php

function write_log($message) {
	if (!is_dir('./logs')) {
		mkdir('./logs');	
	}

	if (!is_writeable('./logs/2015.log')) {
		// 告警
		return false;;
	}

	file_put_contents('./logs/2015.log', $message);
	return true;
}

var_dump(write_log(123));

?>
