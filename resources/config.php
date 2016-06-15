<?php
/* global variables */
global $currentPage;
global $pageTitle;
global $pageDesc;

$config = array(
    "info" => array(
        "siteName" => "WebLearn",
        "siteAuthor" => "Andrew S. Gardner",
        "cacheVer" => "?v=1.0",
        "abeLinkNum" => "167",
        "esolLinkNum" => "86"
        ),
    "paths" => array(
        "css" => array(
            "main" => "/css/main.css",
            "min" => "/css/main.min.css"
        ),
        "img" => array(
            "content" => "/img/content",
            "layout" => "/img/layout",
            "logo" => "/img/layout/weblearn-logo.png",
            "stccLogo" => "/img/layout/stcc-logo.png"
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
    "english" => array(
        "grammar" => "/abe/grammar/",
        "toTooTwo" => "/abe/grammar/to-too-two.php",
        "yourYoure" => "/abe/grammar/your-youre.php",
        "punctuation" => "/abe/punctuation/",
        "apostrophes" => "/abe/punctuation/apostrophes.php",
        "commaFunctions" => "/abe/punctuation/common-comma-functions.php",
        "semicolonUsage" => "/abe/punctuation/semicolon-usage.php",
        "reading" => "/abe/reading/",
        "authorsPosition" => "/abe/reading/authors-position.php",
        "detWordMeanings" => "/abe/reading/determining-word-meanings.php",
        "factOpinion" => "/abe/reading/fact-or-opinion.php",
        "historicalContext" => "/abe/reading/historical-context.php",
        "logicalConclusion" => "/abe/reading/identifying-logical-conclusion.php",
        "inference" => "/abe/reading/inference.php",
        "inferencePractice" => "/abe/reading/inference-practice.php",
        "theme" => "/abe/reading/theme.php",
        "topicsMainIdeas" => "/abe/reading/topics-and-main-ideas.php",
        "writing" => "/abe/writing/",
        "persuasiveEssay" => "/abe/writing/persuasive-essay.php",
        "thesisStatement" => "/abe/writing/drafting-thesis-statement.php",
        "bodyParagraphs" => "/abe/writing/drafting-body-paragraphs.php",
        "draftingConclusions" => "/abe/writing/drafting-conclusions.php"
    ),
    "math" => array(
        "addition" => "/abe/addition/",
        "decimalsPercentages" => "/abe/decimals-percentages/",
        "division" => "/abe/division/",
        "evenOddNums" => "/abe/even-odd-numbers/",
        "eonIntroVideo" => "/abe/even-odd-numbers/introduction-video.php",
        "eonQs3" => "/abe/even-odd-numbers/qs3.php",
        "fractions" => "/abe/fractions/",
        "measurement" => "/abe/measurement/",
        "metersKilometers" => "/abe/measurement/meters-kilometers.php",
        "multiplication" => "/abe/multiplication/",
        "numberSense" => "/abe/number-sense/",
        "placeValue" => "/abe/place-value/",
        "subtraction" => "/abe/subtraction/"
    ),
    "science" => array(
        "bodySystems" => "/abe/body-systems/",
        "photosynthesis" => "/abe/photosynthesis/",
        "scientificMethod" => "/abe/scientific-method/",
        "scientificTerms" => "/abe/scientific-terms/"
    ),
    "socialStudies" => array(
        "civilRights" => "/abe/civil-rights-movement/",
        "civilWar" => "/abe/civil-war/",
        "greatDepression" => "/abe/great-depression/",
        "revolutionaryWar" => "/abe/revolutionary-war/",
        "separationPowers" => "/abe/separation-of-powers/",
        "usPresidents" => "/abe/us-presidents/"
    ),
    "compLit" => array(
        "compFundamentals" => "/abe/computer-fundamentals/",
        "email" => "/abe/email/",
        "internetBrowsing" => "/abe/internet-browsing/",
        "excel" => "/abe/excel/",
        "powerPoint" => "/abe/powerpoint/",
        "word" => "/abe/word/",
        "searchEngines" => "/abe/search-engines/",
        "typing" => "/abe/typing/",
        "win7" => "/abe/windows-7/",
        "win8" => "/abe/windows-8/"
    )
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
    "compLit" => "/esol/computer-literacy/",
    "vocabulary" => "/esol/vocabulary/",
    "workplace" => "/esol/workplace/"
);

if (!function_exists('preMediaBlock')) {
    
    function preMediaBlock() {
        
        echo "<div class=\"panel panel-default\">\n";
        echo "\t<div class=\"panel-body media-block\">\n";
        echo "\t<div class=\"caption\">";
        
    }
    
    function postMediaBlock() {
        
        echo "</div>\n";
        echo "\t</div>\n";
        echo "\t</div>\n";
        
    }
    
}

defined("LIBRARY_PATH")
	or define("LIBRARY_PATH", realpath(dirname(__FILE__) . "/library"));

defined("TEMPLATES_PATH")
	or define("TEMPLATES_PATH", realpath(dirname(__FILE__) . "/templates"));
?>