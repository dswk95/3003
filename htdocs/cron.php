<?php

	$data = date('Y-M-D')."-".time();
	$file = fopen('datetime.txt','a');
	fwrite($file, $data."\r\n");
	fclose($file);	


?>