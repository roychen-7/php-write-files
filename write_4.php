<?php

function write_log($message) {
	if (!is_dir('./app/logs')) {
		$mkdir_res = @mkdir('./app/logs');	

		if (!$mkdir_res) {
			// 告警
			return false;
		}
	}

	if (!is_writeable('./app/logs/2015.log')) {
		// 告警
		return false;;
	}

	file_put_contents('./app/logs/2015.log', $message);
	return true;
}

var_dump(write_log(123));

?>
