<h2>Screenshots</h2>

<?php
function image($title, $fname)
{
	print "<p>$title</p><p>\n";
	print "<a href=\"$fname\">\n";
	print "<img src=\"$fname\" width=360 height=240 alt=\"screenshot\">\n";
	print "</a></p>";
	print "<br>\n\n";
}

image("Main Menu", "images/menu_main.jpg");
image("MediaMVP Settings Menu", "images/menu_settings.jpg");
image("MythTV Episodes Menu", "images/myth_episodes.jpg");
image("MythTV On-Screen-Display", "images/myth_osd.jpg");
image("MythTV On-Screen-Display Menu", "images/myth_osd_menu.jpg");
image("Video Popup Menu", "images/popup_menu.jpg");
image("Audio Stream Menu", "images/audio_menu.jpg");

image("ReplayTV Device List", "images/rtv_devicelist.jpg");
image("ReplayTV On-Screen-Display", "images/rtv_osd.jpg");
image("ReplayTV Show Menu", "images/rtv_show_menu.jpg");
image("ReplayTV Show Popup Menu", "images/rtv_show_popup.jpg");
?>

