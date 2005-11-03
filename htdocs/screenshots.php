<div class="title">

  <h3><span>Screenshots</span></h3>

</div>

<?php
function image($fname)
{
	print "<a href=\"$fname\">\n";
	print "<img src=\"$fname\" width=90 height=60 alt=\"screenshot\">\n";
	print "</a>\n";
}

print "<div class=\"item\"><h3><span>Main Menu</span></h3>\n";
image("images/menu_main.jpg");
image("screenshots/main_menu.jpg");
print "</div>\n";

print "<div class=\"item\"><h3><span>MythTV</span></h3>\n";
image("images/myth_episodes.jpg");
image("images/myth_osd.jpg");
image("images/myth_osd_menu.jpg");
image("screenshots/myth_all.jpg");
image("screenshots/myth_delete.jpg");
image("screenshots/myth_episodes_2.jpg");
image("screenshots/myth_episodes_3.jpg");
image("screenshots/myth_episodes_4.jpg");
image("screenshots/myth_episodes.jpg");
image("screenshots/myth_livetv_2.jpg");
image("screenshots/myth_livetv_3.jpg");
image("screenshots/myth_livetv.jpg");
image("screenshots/myth_menu.jpg");
image("screenshots/myth_pending_2.jpg");
image("screenshots/myth_pending_3.jpg");
image("screenshots/myth_pending_4.jpg");
image("screenshots/myth_pending.jpg");
image("screenshots/myth_programs.jpg");
image("screenshots/myth_rec_menu.jpg");
print "</div>\n";

print "<div class=\"item\"><h3><span>ReplayTV</span></h3>\n";
image("images/rtv_devicelist.jpg");
image("images/rtv_osd.jpg");
image("images/rtv_show_menu.jpg");
image("images/rtv_show_popup.jpg");
image("replaytv/rtv_delete.jpg");
print "</div>\n";

print "<div class=\"item\"><h3><span>Settings</span></h3>\n";
image("screenshots/settings_aspect.jpg");
image("screenshots/settings_av.jpg");
image("screenshots/settings_themes.jpg");
print "</div>\n";

print "<div class=\"item\"><h3><span>Misc</span></h3>\n";
image("images/popup_menu.jpg");
image("images/audio_menu.jpg");
image("screenshots/about.jpg");
image("screenshots/fb_movies.jpg");
image("screenshots/fb_shuffle.jpg");
image("screenshots/music_client.jpg");
print "</div>\n";
?>


