<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>

	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
	<meta name="author" content="Jon Gettler" />
	<meta name="keywords" content="mvpmc, mediamvp, mediamvp media center, mythtv, replaytv" />
	<meta name="description" content="The MediaMVP Media Center, a media player for the Hauppauge MediaMVP." />
	<meta name="robots" content="all" />

	<title>MediaMVP Media Center</title>
	
	<link rel="stylesheet" type="text/css" title="Default" href="mvpmc.css" />
	<link rel="alternate stylesheet" type="text/css" title="Minimal" href="minimal.css" />

</head>

<body>

  <div id="container">

    <?PHP include("header.html"); ?>

    <div id="supportingText">

      <?PHP if(isset($pg)) { include($pg.".php"); } ?>

    </div>

    <?PHP include("links.html"); ?>

  </div>

</body>

</html>

