<h2>Downloads</h2>

<?php
function release($path, $fname, $header)
{
	print "<h3>$header</h3>\n\n";

	$fp = fopen("$path$fname", "r");
	$fstat = fstat($fp);
	$d = date("F d Y H:i:s T", $fstat["mtime"]);

	print "<p>Name: <a href=\"$path$fname\">$fname</a></p>\n";
	print "<p>Bytes: ";
	print $fstat["size"];
	print "</p>\n";
	print "<p>Date: $d</p>\n";

	fclose($fp);

	print "\n<br>\n\n";
}

release("dl/", "dongle_build.tar.gz", "Binary Release");
release("dl/", "mvpmc_src.tar.gz", "Source Release");
?>
