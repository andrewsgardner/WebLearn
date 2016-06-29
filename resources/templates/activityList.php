<?php 
/* DOCTYPE */
echo "<!DOCTYPE html>\n";
/* BEGIN html */
echo "<html lang=\"en\">\n";
require_once(TEMPLATES_PATH . "/metadata.php");
/* BEGIN body */
echo "\t<body>\n";
require_once(TEMPLATES_PATH . "/header.php");

/* BEGIN navbar-bottom */
echo "\t\t<div class=\"navbar-bottom\">\n";
echo "\t\t\t<div class=\"container\">\n";

echo $pageBreadbrumbs;

echo "\t\t\t</div>\n";
echo "\t\t</div>\n";
/* END navbar-bottom */

/* BEGIN container */
echo "\t<div class=\"container grid-container\">\n";

echo $activityItems;

echo "\t</div>\n";
/* END container */

require_once(TEMPLATES_PATH . "/footer.php");
require_once(TEMPLATES_PATH . "/loadScripts.php");
require_once(TEMPLATES_PATH . "/analytics.php");
echo "\t</body>\n";
/* END body */
echo "</html>";
/* END html */
?>