<?php 
include(dirname(__FILE__) . "/../config.php");

/* BEGIN navbar */
echo "<nav class=\"navbar navbar-default navbar-fixed-top\">\n";

echo "\t\t<div class=\"container\">\n";

/* BEGIN navbar toggle */
echo "\t\t\t<div class=\"navbar-header\">\n";
echo "\t\t\t<button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#primary-navbar\" aria-expanded=\"false\">\n";
echo "\t\t\t<span class=\"sr-only\">Toggle navigation</span>\n\t\t\t<span class=\"icon-bar\"></span>\n\t\t\t<span class=\"icon-bar\"></span>\n\t\t\t<span class=\"icon-bar\"></span>\n";
echo "\t\t\t</button>\n";

/* BEGIN navbar branding */
echo "\t\t\t<a class=\"navbar-brand\" href=\"/\"><img src=\"" . $config['paths']['img']['logo'] . "\" alt=\"SALC WebLearn Logo\"></a>\n";
/* END navbar branding */

echo "\t\t\t</div>\n";
/* END navbar toggle */

/* BEGIN navbar links */
echo "\t\t\t<div class=\"collapse navbar-collapse\" id=\"primary-navbar\">\n";
echo "\t\t\t<ul class=\"nav navbar-nav\">\n";

echo "\t\t\t\t"; ?><li<?php if($currentPage=='getting_started' ) echo ' class="active"'; ?>><a href="<?php echo $gettingStarted ; ?>">Getting Started<span class="sr-only">(current)</span></a></li><?php echo "\n";
echo "\t\t\t\t"; ?><li<?php if($currentPage=='abe' ) echo ' class="active"'; ?>><a href="<?php echo $abeRoutes['abeHome']; ?>">ABE Lab<span class="sr-only">(current)</span></a></li><?php echo "\n";
echo "\t\t\t\t"; ?><li<?php if($currentPage=='esol' ) echo ' class="active"'; ?>><a href="<?php echo $esolRoutes['esolHome']; ?>">ESOL Lab<span class="sr-only">(current)</span></a></li><?php echo "\n";

echo "\t\t\t</ul>\n";
/* END navbar links */

/* BEGIN search */
echo "\t\t\t<div class=\"col-sm-3 col-md-3 navbar-right\">\n";
echo "\t\t\t\t<form class=\"navbar-form navbar-right\" role=\"search\">\n";
echo "\t\t\t\t<div class=\"input-group\">\n";
echo "\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"Search\">\n";
echo "\t\t\t\t<div class=\"input-group-btn\">\n";
echo "\t\t\t\t<button class=\"btn btn-default\" type=\"submit\"><i class=\"glyphicon glyphicon-search\"></i></button>\n";
echo "\t\t\t\t</div>\n";
echo "\t\t\t\t</div>\n";
echo "\t\t\t\t</form>\n";
echo "\t\t\t</div>\n";
/* END search */

echo "\t\t\t</div>\n";
echo "\t\t</div>\n";

echo "\t</nav>\n";
/* END navbar */
?>