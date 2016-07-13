<?php 
echo "\t<script src=\"" . $config['jQuery']['cdn'] . "\"></script>\n";
echo "\t<script>window.jQuery || document.write('<script src=\"" . $config['jQuery']['local'] . "\"><\/script>')</script>\n";
echo "\t<script src=\"" . $config['paths']['scripts']['min'] . "\"></script>\n";
?>