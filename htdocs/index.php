<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>

	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
	<meta name="author" content="Jon Gettler" />
	<meta name="keywords" content="mvpmc, mediamvp, mediamvp media center, mythtv, replaytv" />
	<meta name="description" content="The MediaMVP Media Center, a media player for the Hauppauge MediaMVP." />
	<meta name="robots" content="all" />

	<link rel="icon" href="http://mvpmc.org/favicon.ico" />
	<link rel="shortcut icon" href="http://mvpmc.org/favicon.ico" />

	<title>MediaMVP Media Center</title>
	
	<link rel="stylesheet" type="text/css" title="Default" href="mvpmc.css" />
	<link rel="alternate stylesheet" type="text/css" title="Minimal" href="minimal.css" />

</head>

<body>

  <div id="container">

    <?PHP include("header.html"); ?>

    <div id="supportingText">

      <?PHP
            if (isset($_GET['pg'])) {
                if ($_GET['pg'] == "news") {
                    include("news.php");
                } else if ($_GET['pg'] == "downloads") {
                    include("downloads.php");
                } else if ($_GET['pg'] == "faq") {
                    include("faq.php");
                } else if ($_GET['pg'] == "main") {
                    include("main.php");
                } else if ($_GET['pg'] == "screenshots") {
                    include("screenshots.php");
                } else {
                }
            } else {
                include("main.php");
            }
      ?>

    </div>

    <?PHP include("links.html"); ?>

  </div>

</body>

</html>

