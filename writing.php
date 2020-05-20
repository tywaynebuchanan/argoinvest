<?php 

$file = 'example.docx';

if($handle = fopen($file,'w')){

	fwrite($handle, 'This is a test');
	fclose($handle);
}else {

	echo "File could not be created";
}