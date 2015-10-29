<?php

function write_log($message) {
	file_put_contents('./logs/2015.log', $message);
}

write_log(123);

?>
