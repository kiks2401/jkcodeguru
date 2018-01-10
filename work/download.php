<?php
	// File data
	$filepath = $_GET['file'];
	$filename = basename($filepath);
	$fileperms = substr(sprintf('%o', fileperms($filepath)), -4);
	
	// Download function
	function download($filepath) {
		header('Content-Disposition: attachment; filename="'.basename($filepath).'"');
		header('Content-type: application/x-download');
		header('Content-Length: '.filesize($filepath));
		readfile($filepath);
		exit;
	}
		download($filepath);
	
?>