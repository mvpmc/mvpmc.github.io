<h2>FAQ</h2>

<?php
//
// Parse a FAQ data file.  The data file consists of multiple questions
// and answers, with a line of "###" in between each Q/A pair.
//
	$fp = fopen("faq.data", "r");

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
				$answer = $answer . '</p><p>';
		} while (($line{0} != '#') and (!feof($fp)));

		if (strlen($question) > 1) {
			$qlist[] = $question;
			$alist[] = $answer;
			$i = $i + 1;
		}
	}

	$j = 0;
	print "<ol>\n";
	foreach ($qlist as $q) {
		print "<li><a href=\"#q$j\">$q</a>\n";
		$j = $j + 1;
	}
	print "</ol>\n";

	print "<hr>\n\n";

	$j = 0;
	foreach ($alist as $a) {
		print "<h3><a name=\"q$j\" />$qlist[$j]</h3>\n";
		print "<p>$a</p><hr>\n";
		$j = $j + 1;
	}

	fclose($fp);
?>
