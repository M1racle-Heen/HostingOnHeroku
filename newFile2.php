<?php
$emails = fopen("file://D:/xampp/htdocs/Yep.txt", 'r');
stream_filter_append($emails, 'string.rot13');
$dest = fopen("file://D:/xampp/htdocs/copYep2.txt", 'w');
while(feof($emails)!==true){
	$line = fgets($emails);
	if (!$line) {
		break;
	}
	fputs($dest,$line);
}
fclose($emails);
fclose($dest);
?>