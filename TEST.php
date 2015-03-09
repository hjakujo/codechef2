<?php
$line = stream_get_line(STDIN, 1024, PHP_EOL);
while($line != 42)
{
	echo($line . "\r\n");
	$line = stream_get_line(STDIN, 1024, PHP_EOL);
}
?>
