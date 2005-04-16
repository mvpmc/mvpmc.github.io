<h2>Releases</h2>

<p>
The following project releases are available:
</p>

<ul>
<li><a href="http://sourceforge.net/project/showfiles.php?group_id=103474&package_id=111160&release_id=273101">mvpmc 0.1</a> (2004-10-05)
<li><a href="http://sourceforge.net/project/showfiles.php?group_id=103474&package_id=111160&release_id=274780">mvpmc 0.1a</a> (2004-10-12)
<li><a href="http://sourceforge.net/project/showfiles.php?group_id=103474&package_id=111160&release_id=281542">mvpmc 0.1.1</a> (2004-11-09)
<li><a href="http://sourceforge.net/project/showfiles.php?group_id=103474&package_id=111160&release_id=295235">mvpmc 0.1.2</a> (2005-01-07)
<li><a href="http://sourceforge.net/project/showfiles.php?group_id=103474&package_id=111160&release_id=304797">mvpmc 0.1.3</a> (2005-02-13)
<li><a href="http://sourceforge.net/project/showfiles.php?group_id=103474&package_id=111160&release_id=311336">mvpmc 0.1.4</a> (2005-03-08)
</ul>

<h2>Development Releases</h2>

<?php

function dev_release($list, $header)
{
	$dir = "development";

        print "<h3>$header</h3>\n\n";

	foreach ($list as $item) {
		$fp = fopen("$item", "r");
		$fstat = fstat($fp);
		$d = date("F d Y H:i:s T", $fstat["mtime"]);

		print "<p><ul>";
		print "<li>Name: <a href=\"$dir/$item\">$item</a>\n";
		print "<li>Bytes: ";
		print $fstat["size"];
		print "\n";
		print "<li>Date: $d\n";
		fclose($fp);
		print "\n</ul></p><br>\n\n";
	}
}

chdir("development");

$dongle = glob("dongle.bin.mvpmc-*");
$bin = glob("mvpmc-*-bin.tar.gz");
$src = glob("mvpmc-*-src.tar.gz");

dev_release($dongle, "dongle.bin Releases");
dev_release($bin, "Binary Releases");
dev_release($src, "Source Releases");
?>

<h2>Daily Builds</h2>

<p>
Dirk Lison and Tim Sailer have kindly provided daily builds
<a href="ftp://buoy.com/pub/mvpmc/www.lison.com/mvpmc/index.html">here</a>.
</p>

