<?php 
include(dirname(__FILE__) . "/../config.php");

/* BEGIN footer */
echo "\t<footer class=\"footer\">\n";
echo "\t\t<div class=\"container\">\n";
echo "\t\t\t<div class=\"row\">\n";

/* BEGIN footer links */
echo "\t\t\t\t<div class=\"col-xs-12\">\n";
echo "\t\t\t\t\t<p class=\"footer-links\">\n\t\t\t\t\t\t<a href=\"/\">WebLearn</a>\n\t\t\t\t\t\t<a href=\"" . $config['paths']['gettingStarted'] . "\">Getting Started</a>\n\t\t\t\t\t\t<a href=\"" . $abeRoutes['abeHome'] . "\">ABE Lab</a>\n\t\t\t\t\t\t<a href=\"" . $esolRoutes['esolHome'] . "\">ESOL Lab</a>\n\t\t\t\t\t</p>\n";
echo "\t\t\t\t</div>\n";
/* END footer links */

/* BEGIN copyright notice */
echo "\t\t\t<div class=\"col-xs-12\">\n";
echo "\t\t\t\t<p class=\"copyright\">&copy; " . date('Y') . "&nbsp;" . "<a href=\"" . $config['paths']['salcStcc'] . "\">Springfield Adult Learning Center</a></p>\n";
echo "\t\t\t</div>\n";
/* END copyright notice */

/* BEGIN developer notice */
echo "\t\t\t<div class=\"col-xs-12\">\n";
echo "\t\t\t\t<p class=\"developer\">Website by <a href=\"http://www.andrewsgardner.com\">Andrew S. Gardner</a></p>\n";
echo "\t\t\t</div>\n";
/* END developer notice */

echo "\t\t\t</div>\n";
echo "\t\t</div>\n";
echo "\t</footer>\n";
/* END footer */
?>