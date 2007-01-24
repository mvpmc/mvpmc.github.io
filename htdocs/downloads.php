<div class="title">

  <h3><span>Daily Builds</span></h3>

</div>

<div class="item">
   <span>Daily builds are available from
             <a href="http://www.mvpmc.org/builds/">USA</a>,
             <a href="http://uk.mvpmc.org/builds/">UK</a>.
   </span>
   <br>
   <span>Daily doxygen output is available as:
             <a href="http://www.mvpmc.org/builds/doxygen/">HTML</a>, 
             <a href="http://www.mvpmc.org/builds/doxygen/refman.pdf">PDF</a>.
   </span>
   <br>
   <span>perl script to automate downloading the daily build:
             <a href="get_dongle">here</a>.
   </span>
</div>

<div class="title">

  <h3><span>Releases</span></h3>

</div>

<div class="item">
   <h3><span>The following project releases are available:</span></h3>

   <ul>
   <li><a href="http://sourceforge.net/project/showfiles.php?group_id=103474&amp;package_id=111160&amp;release_id=273101">mvpmc 0.1</a> (2004-10-05)</li>
   <li><a href="http://sourceforge.net/project/showfiles.php?group_id=103474&amp;package_id=111160&amp;release_id=274780">mvpmc 0.1a</a> (2004-10-12)</li>
   <li><a href="http://sourceforge.net/project/showfiles.php?group_id=103474&amp;package_id=111160&amp;release_id=281542">mvpmc 0.1.1</a> (2004-11-09)</li>
   <li><a href="http://sourceforge.net/project/showfiles.php?group_id=103474&amp;package_id=111160&amp;release_id=295235">mvpmc 0.1.2</a> (2005-01-07)</li>
   <li><a href="http://sourceforge.net/project/showfiles.php?group_id=103474&amp;package_id=111160&amp;release_id=304797">mvpmc 0.1.3</a> (2005-02-13)</li>
   <li><a href="http://sourceforge.net/project/showfiles.php?group_id=103474&amp;package_id=111160&amp;release_id=311336">mvpmc 0.1.4</a> (2005-03-08)</li>
   <li><a href="http://sourceforge.net/project/showfiles.php?group_id=103474&amp;package_id=111160&amp;release_id=322161">mvpmc 0.1.5</a> (2005-04-20)</li>
   <li><a href="http://sourceforge.net/project/showfiles.php?group_id=103474&amp;package_id=111160&amp;release_id=333416">mvpmc 0.1.6</a> (2005-06-07)</li>
   <li><a href="http://sourceforge.net/project/showfiles.php?group_id=103474&amp;package_id=111160&amp;release_id=342105">mvpmc 0.1.7</a> (2005-07-14)</li>
   <li><a href="http://sourceforge.net/project/showfiles.php?group_id=103474&amp;package_id=111160&amp;release_id=356389">mvpmc 0.1.8</a> (2005-09-13)</li>
   <li><a href="http://sourceforge.net/project/showfiles.php?group_id=103474&amp;package_id=111160&amp;release_id=368091">mvpmc 0.2.0</a> (2005-11-02)</li>
   <li><a href="http://sourceforge.net/project/showfiles.php?group_id=103474&amp;package_id=111160&amp;release_id=392824">mvpmc 0.2.1</a> (2006-02-11)</li>
   <li><a href="http://sourceforge.net/project/showfiles.php?group_id=103474&amp;package_id=111160&amp;release_id=425148">mvpmc 0.3.0</a> (2006-06-15)</li>
   <li><a href="http://sourceforge.net/project/showfiles.php?group_id=103474&package_id=111160&release_id=458011">mvpmc 0.3.1</a> (2006-10-23)</li>
   <li><a href="http://sourceforge.net/project/showfiles.php?group_id=103474&package_id=111160&release_id=472821">mvpmc 0.3.2</a> (2006-12-20)</li>
   <li><a href="http://sourceforge.net/project/showfiles.php?group_id=103474&package_id=111160&release_id=480926">mvpmc 0.3.3</a> (2007-01-23)</li>
   </ul>

</div>

<!--
<div class="title">
   <h3><span>Development Releases</span></h3>
</div>
-->

<?php

function dev_release($list, $header)
{
	$dir = "development";

        print "<div class=\"item\"><h3><span>$header</span></h3>\n\n";

	foreach ($list as $item) {
		$fp = fopen("$item", "r");
		$fstat = fstat($fp);
		$d = date("F d Y H:i:s T", $fstat["mtime"]);

		print "<ul>";
		print "<li>Name: <a href=\"$dir/$item\">$item</a>\n";
		print "<li>Bytes: ";
		print $fstat["size"];
		print "\n";
		print "<li>Date: $d\n";
		fclose($fp);
		print "\n</ul>\n\n";
	}

	print "</div>\n";
}

//chdir("development");

$dongle = glob("dongle.bin.mvpmc-*");
$bin = glob("mvpmc-*-bin.tar.gz");
$src = glob("mvpmc-*-src.tar.gz");

//dev_release($dongle, "dongle.bin Releases");
//dev_release($bin, "Binary Releases");
//dev_release($src, "Source Releases");

?>

