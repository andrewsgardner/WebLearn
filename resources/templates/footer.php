<?php 
include(dirname(__FILE__) . "/../config.php");

/* BEGIN footer */
echo "<footer class=\"footer\">\n";
echo "\t<div class=\"container\">\n";
echo "\t<div class=\"row\">\n";

/* BEGIN footer links */
echo "\t<div class=\"col-xs-12\">\n";
echo "\t<p class=\"footer-links\">\n\t\t<a href=\"/\">WebLearn</a>\n\t\t<a href=\"" . $gettingStarted . "\">Getting Started</a>\n\t\t<a href=\"" . $abeRoutes['abeHome'] . "\">ABE Lab</a>\n\t\t<a href=\"" . $esolRoutes['esolHome'] . "\">ESOL Lab</a>\n</p>\n";
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

echo "\t</div>\n";
echo "\t</div>\n";
echo "\t</footer>\n";
/* END footer */
?>