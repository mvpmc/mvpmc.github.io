<h2>Releases</h2>

<p>
The following project releases are available:
</p>

<ul>
<li><a href="http://sourceforge.net/project/showfiles.php?group_id=103474&package_id=111160&release_id=273101">mvpmc 0.1</a>
</ul>

<h2>Development Releases</h2>

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
