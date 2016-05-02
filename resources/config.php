<?php
$config = array(
    "info" => array(
        "siteName" => "WebLearn",
        "siteAuthor" => "Andrew S. Gardner"
        "cacheVer" => "?v=2.0"
        ),
    "paths" => array(
        "styles" => array(
            "css" => "./css"
            ),
        "img" => array(
            "content" => "./img/content",
            "layout" => "./img/layout"
        )
    ),
    "jQuery" => array(
        "cdn" => "https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js",
        "local" => "./js/local/jquery-1.12.2.min.js"
    )
);

defined("LIBRARY_PATH")
	or define("LIBRARY_PATH", realpath(dirname(__FILE__) . "/library"));

defined("TEMPLATES_PATH")
	or define("TEMPLATES_PATH", realpath(dirname(__FILE__) . "/templates"));
?>