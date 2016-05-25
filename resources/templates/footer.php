<?php 
include(dirname(__FILE__) . "/../config.php");

/* BEGIN footer */
echo "<footer class=\"footer\">\n";
echo "\t<div class=\"container\">\n";
echo "\t<div class=\"row\">\n";

/* BEGIN footer links */
echo "\t<div class=\"col-xs-12\">\n";
echo "\t<p class=\"footer-links\">\n\t\t<a href=\"#\">WebLearn</a>\n\t\t<a href=\"#\">Getting Started</a>\n\t\t<a href=\"#\">ABE Lab</a>\n\t\t<a href=\"#\">ESOL Lab</a>\n</p>\n";
echo "\t</div>\n";
/* END footer links */

/* BEGIN copyright notice */
echo "\t<div class=\"col-xs-12\">\n";
echo "\t<p class=\"copyright\">&copy; " . date('Y') . "&nbsp;" . "<a href=\"" . $salcStcc . "\">Springfield Adult Learning Center</a></p>\n";
echo "\t</div>\n";
/* END copyright notice */

/* BEGIN developer notice */
echo "\t<div class=\"col-xs-12\">\n";
echo "\t<p class=\"developer\">Website by <a href=\"http://www.andrewsgardner.com\">Andrew S. Gardner</a></p>\n";
echo "\t</div>\n";
/* END developer notice */


/* BEGIN left column */
/*
echo "\t<div class=\"col-xs-12 col-sm-6 copyright\">\n";
echo "\t<p><small>&copy; " . date('Y') . "&nbsp;" . "<a href=\"" . $salcStcc . "\">Springfield Adult Learning Center</a></small></p>\n";
echo "\t<p><small><em>Springfield Technical Community College</em></small></p>\n";
echo "\t<p><small><em>One Armory Sq. Springfield, MA</em></small></p>\n";
echo "\t</div>\n";
*/
/* END left column */

/* BEGIN right column */
/*
echo "\t<div class=\"col-xs-12 col-sm-6\">\n";
echo " <img src=\"" . $config['paths']['img']['stccLogo'] . "\" alt=\"Springfield Technical Community College Logo\" class=\"stcc-logo\"> ";
echo "\t</div>\n";
*/
/* END right column */

echo "\t</div>\n";
echo "\t</div>\n";
echo "\t</footer>\n";
/* END footer */
?>