<?php 
include(dirname(__FILE__) . "/../config.php");

/* BEGIN navbar */
echo "\t\t<nav class=\"navbar navbar-default navbar-fixed-top\">\n";

echo "\t\t\t<div class=\"container\">\n";

/* BEGIN navbar toggle */
echo "\t\t\t\t<div class=\"navbar-header\">\n";
echo "\t\t\t\t<button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#primary-navbar\" aria-expanded=\"false\">\n";
echo "\t\t\t\t\t<span class=\"sr-only\">Toggle navigation</span>\n\t\t\t\t\t<span class=\"icon-bar\"></span>\n\t\t\t\t\t<span class=\"icon-bar\"></span>\n\t\t\t\t\t<span class=\"icon-bar\"></span>\n";
echo "\t\t\t\t</button>\n";

/* BEGIN navbar branding */
echo "\t\t\t\t<a class=\"navbar-brand\" href=\"/\"><img src=\"" . $config['paths']['img']['logo'] . "\" alt=\"SALC WebLearn Logo\"></a>\n";
/* END navbar branding */

echo "\t\t\t</div>\n";
/* END navbar toggle */

/* BEGIN navbar links */
echo "\t\t\t<div class=\"collapse navbar-collapse\" id=\"primary-navbar\">\n";
echo "\t\t\t\t<ul class=\"nav navbar-nav\">\n";

echo "\t\t\t\t\t"; ?><li<?php if($currentPage=='getting_started' ) echo ' class="active"'; ?>><a href="<?php echo $config['paths']['gettingStarted']; ?>">Getting Started<span class="sr-only">(current)</span></a></li><?php echo "\n";
echo "\t\t\t\t\t"; ?><li<?php if($currentPage=='abe' ) echo ' class="active"'; ?>><a href="<?php echo $abeRoutes['abeHome']; ?>">ABE Lab<span class="sr-only">(current)</span></a></li><?php echo "\n";
echo "\t\t\t\t\t"; ?><li<?php if($currentPage=='esol' ) echo ' class="active"'; ?>><a href="<?php echo $esolRoutes['esolHome']; ?>">ESOL Lab<span class="sr-only">(current)</span></a></li><?php echo "\n";

echo "\t\t\t\t</ul>\n";
/* END navbar links */

/* BEGIN search */
echo "\t\t\t\t<div class=\"col-sm-3 col-md-3 navbar-right\">\n";
echo "\t\t\t\t\t<div class=\"navbar-form navbar-right\">\n";
echo "\t\t\t\t<div class=\"input-group\">\n";
echo "\t\t\t\t<script>
  \t\t\t\t\t(function() {
  \t\t\t\t\t\tvar cx = '003530140148966202441:84ezwcca8jo';
  \t\t\t\t\t\tvar gcse = document.createElement('script');
  \t\t\t\t\t\tgcse.type = 'text/javascript';
  \t\t\t\t\t\tgcse.async = true;
  \t\t\t\t\t\tgcse.src = 'https://cse.google.com/cse.js?cx=' + cx;
  \t\t\t\t\t\tvar s = document.getElementsByTagName('script')[0];
  \t\t\t\t\t\ts.parentNode.insertBefore(gcse, s);
  \t\t\t\t\t})();\n
\t\t\t\t</script>\n";
echo "\t\t\t\t<gcse:searchbox-only resultsUrl=\"" . $config['info']['baseUrl'] . $config['paths']['searchResults'] . "\"></gcse:searchbox-only>\n";
echo "\t\t\t\t\t\t</div>\n";
echo "\t\t\t\t\t</div>\n";
echo "\t\t\t\t</div>\n";
/* END search */

echo "\t\t\t\t</div>\n";
echo "\t\t\t</div>\n";

echo "\t\t</nav>\n";
/* END navbar */
?>