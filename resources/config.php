<?php
$config = array(
    "info" => array(
        "siteName" => "WebLearn",
        "siteAuthor" => "Andrew S. Gardner",
        "cacheVer" => "?v=1.0"
        ),
    "paths" => array(
        "css" => array(
            "main" => "/css/main.css",
            "min" => "/css/main.min.css"
        ),
        "img" => array(
            "content" => "/img/content",
            "layout" => "/img/layout",
            "logo" => "/img/layout/weblearn-logo.png"
        ),
        "scripts" => array(
            "main" => "/js/main.js",
            "min" => "/js/main.min.js",
            "html5shiv" => "https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js",
            "respond" => "https://oss.maxcdn.com/respond/1.4.2/respond.min.js"
        )
    ),
    "jQuery" => array(
        "cdn" => "https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js",
        "local" => "/js/local/jquery-1.12.2.min.js"
    )
);

$gettingStarted = "/getting-started/";
$salcStcc = "http://www.stcc.edu/adulteducationcenter/";

$abeRoutes = array(
    "abeHome" => "/abe/",
    "english" => "/abe/english/",
    "math" => "/abe/math/",
    "science" => "/abe/science/",
    "socialStudies" => "/abe/social-studies/",
    "technology" => "/abe/technology/"
);

$esolRoutes = array(
    "esolHome" => "/esol/",
    "citizenship" => "/esol/citizenship/",
    "generalEsol" => "/esol/general-esol/",
    "grammar" => "/esol/grammar/",
    "health" => "/esol/health/",
    "learnersPermit" => "/esol/learners-permit/",
    "money" => "/esol/money/",
    "parents" => "/esol/parents/",
    "pronunciation" => "/esol/pronunciation/",
    "technology" => "/esol/technology/",
    "vocabulary" => "/esol/vocabulary/",
    "workplace" => "/esol/workplace/"
);

defined("LIBRARY_PATH")
	or define("LIBRARY_PATH", realpath(dirname(__FILE__) . "/library"));

defined("TEMPLATES_PATH")
	or define("TEMPLATES_PATH", realpath(dirname(__FILE__) . "/templates"));
?>