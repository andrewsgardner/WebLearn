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
echo "\t<div class=\"navbar-bottom\">\n";
echo "\t<div class=\"container\">\n";

echo $pageBreadbrumbs;

echo "\t</div>\n";
echo "\t</div>\n";
/* END navbar-bottom */

/* BEGIN container */
echo "\t<div class=\"container grid-container\">\n";

echo $pageContent;

echo "\t</div>\n";
/* END container */

require_once(TEMPLATES_PATH . "/footer.php");
require_once(TEMPLATES_PATH . "/loadScripts.php");
require_once(TEMPLATES_PATH . "/analytics.php");
echo "</body>\n";
/* END body */
echo "</html>";
/* END html */
?>