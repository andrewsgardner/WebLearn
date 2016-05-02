<?php
echo "<meta charset=\"UTF-8\">\n";
echo "\t<title>" . $meta['about']['pageTitle'] . "</title>\n";
echo "\t<meta name=\"description\" content=\"" . $meta['about']['pageDesc'] . "\">\n";
echo "\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">\n";
echo "\t<meta name=\"author\" content=\"" . $config['info']['siteAuthor'] . "\">\n";
echo "\t<link rel=\"icon\" type=\"image/png\" href=\"#\">\n"; ?>
<?php echo "\t"; ?><link rel="stylesheet" type="text/css" href="<?php echo $config['paths']['styles']['css'] . "/main.css" . $config['info']['cacheVer']; ?>"><?php echo "\n"; ?>
<?php echo "\t<!--[if lt IE 9]>\n\t\t<script src=\"#" . "\"></script>\n\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"#\">\n\t<![endif]-->\n";
?>