<?php
//
// Parse a FAQ data file.  The data file consists of multiple questions
// and answers, with a line of "###" in between each Q/A pair.
//
	$fp = fopen("faq.data", "r");
	$fstat = fstat($fp);
	$d = date("F d, Y", $fstat["mtime"]);

	print "<div class=\"title\"><h3><span>FAQ</span></h3></div>\n";

	$i = 0;
	while (!feof($fp))
	{
		do {
			$question = fgets($fp, 4096);
		} while ((strlen($question) <= 1) and (!feof($fp)));
		$answer = "";
		do {
			$line = fgets($fp, 4096);
			if (($line{0} != '#') and (strlen($line) > 1))
				$answer = $answer . $line;
			if (strlen($line) <= 1)
				$answer = $answer . '</span></p><p><span>';
		} while (($line{0} != '#') and (!feof($fp)));

		if (strlen($question) > 1) {
			$qlist[] = $question;
			$alist[] = $answer;
			$i = $i + 1;
		}
	}

	$j = 0;
	print "<div class=\"item\"><h3><span>$d</span></h3><ol>\n";
	foreach ($qlist as $q) {
		print "<li><a href=\"#q$j\">$q</a></li>\n";
		$j = $j + 1;
	}
	print "</ol></div>\n";

	$j = 0;
	foreach ($alist as $a) {
		print "<div class=\"item\">\n";
		print "<h3><span><a name=\"q$j\">$qlist[$j]</a></span></h3>\n";
		print "<p><span>$a</span></p>\n";
		print "</div>\n";
		$j = $j + 1;
	}

	fclose($fp);
?>
