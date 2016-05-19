<?php 
include(dirname(__FILE__) . "/../config.php");

/* BEGIN head */
echo "\t<head>\n";

echo "\t<meta charset=\"UTF-8\">\n";
echo "\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">\n";
echo "\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">\n";
echo "\t<title>" . $pageTitle . "</title>\n";
echo "\t<meta name=\"description\" content=\"" . $pageDesc . "\">\n";
echo "\t<meta name=\"author\" content=\"" . $config['info']['siteAuthor'] . "\">\n";
echo "\t<link rel=\"icon\" type=\"image/png\" href=\"#\">\n"; ?>
<?php echo "\t"; ?><link rel="stylesheet" type="text/css" href="<?php echo $config['paths']['css']['main'] . $config['info']['cacheVer']; ?>"><?php echo "\n"; ?>
<?php echo "\t<!--[if lt IE 9]>\n\t\t<script src=\"" . $config['paths']['scripts']['html5shiv'] . "\"></script>\n\t\t<script src=\"" . $config['paths']['scripts']['respond'] . "\"></script>\n\t<![endif]-->\n";

echo "\t</head>\n";
/* END head */
?>