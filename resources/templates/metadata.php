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
echo "\t<link rel=\"apple-touch-icon\" sizes=\"57x57\" href=\"/apple-touch-icon-57x57.png\">\n";
echo "\t<link rel=\"apple-touch-icon\" sizes=\"60x60\" href=\"/apple-touch-icon-60x60.png\">\n";
echo "\t<link rel=\"apple-touch-icon\" sizes=\"72x72\" href=\"/apple-touch-icon-72x72.png\">\n";
echo "\t<link rel=\"apple-touch-icon\" sizes=\"76x76\" href=\"/apple-touch-icon-76x76.png\">\n";
echo "\t<link rel=\"apple-touch-icon\" sizes=\"114x114\" href=\"/apple-touch-icon-114x114.png\">\n";
echo "\t<link rel=\"apple-touch-icon\" sizes=\"120x120\" href=\"/apple-touch-icon-120x120.png\">\n";
echo "\t<link rel=\"apple-touch-icon\" sizes=\"144x144\" href=\"/apple-touch-icon-144x144.png\">\n";
echo "\t<link rel=\"apple-touch-icon\" sizes=\"152x152\" href=\"/apple-touch-icon-152x152.png\">\n";
echo "\t<link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"/apple-touch-icon-180x180.png\">\n";
echo "\t<link rel=\"icon\" type=\"image/png\" href=\"/favicon-32x32.png\" sizes=\"32x32\">\n";
echo "\t<link rel=\"icon\" type=\"image/png\" href=\"/android-chrome-192x192.png\" sizes=\"192x192\">\n";
echo "\t<link rel=\"icon\" type=\"image/png\" href=\"/favicon-96x96.png\" sizes=\"96x96\">\n";
echo "\t<link rel=\"icon\" type=\"image/png\" href=\"/favicon-16x16.png\" sizes=\"16x16\">\n";
echo "\t<link rel=\"manifest\" href=\"/manifest.json\">\n";
echo "\t<link rel=\"mask-icon\" href=\"/safari-pinned-tab.svg\" color=\"#940022\">\n";
echo "\t<meta name=\"msapplication-TileColor\" content=\"#da532c\">\n";
echo "\t<meta name=\"msapplication-TileImage\" content=\"/mstile-144x144.png\">\n";
echo "\t<meta name=\"theme-color\" content=\"#ffffff\">\n"; ?>
<?php echo "\t"; ?><link rel="stylesheet" type="text/css" href="<?php echo $config['paths']['css']['main'] . $config['info']['cacheVer']; ?>"><?php echo "\n"; ?>
<?php echo "\t<!--[if lt IE 9]>\n\t\t<script src=\"" . $config['paths']['scripts']['html5shiv'] . "\"></script>\n\t\t<script src=\"" . $config['paths']['scripts']['respond'] . "\"></script>\n\t<![endif]-->\n";

echo "\t</head>\n";
/* END head */
?>