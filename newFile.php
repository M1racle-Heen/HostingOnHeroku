
//1)
//Through streams, you can carry out read and write operations 
//seamlessly, regardless of the context of the data. So whether //your context is the file system, TCP connection, or a compressed //file, you can process your data with ease.
//IF our file takes a lot of memory ,our ram will not allow to open //this file,because this file have a lot of memory and ram can't //give all of his memory to this file



//2)
<?php 
$handle = fopen("file://D:/xampp/htdocs/Yep.txt", 'r');
while (1) {
	$line = fgets($handle);
	if (!$line) {
		break;
	}

	echo $line."<br>";
}
?>
//3)
<?php
$handle = fopen("file://D:/xampp/htdocs/Yep.txt", 'r');
$dest = fopen("file://D:/xampp/htdocs/copYep.txt", 'w');
while (1) {
	$line = fgets($handle);
	if (!$line) {
		break;
	}

	 fputs($dest, $line);
}

fclose($handle);
fclose($dest);
?>
//4)
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