<?php 
// global variables
global $currentPage;
global $pageTitle;
global $pageDesc;

// calculate absolute path to /resources/library/
defined("LIBRARY_PATH")
    or define("LIBRARY_PATH", realpath(dirname(__FILE__) . "/library"));

// calculate absolute path to /resources/templates/
defined("TEMPLATES_PATH")
    or define("TEMPLATES_PATH", realpath(dirname(__FILE__) . "/templates"));

// cache buster
$cacheVer = "v1.2";

// main config array
$config = array(
    "info" => array(
        "siteName" => "WebLearn",
        "siteAuthor" => "Andrew S. Gardner",
        "abeLinkNum" => "150",
        "esolLinkNum" => "70",
        "baseUrl" => "//" . $_SERVER['SERVER_NAME']
        ),
    "paths" => array(
        "gettingStarted" => "/getting-started/",
        "mouseSkills" => "/getting-started/mouse-skills/",
        "salcStcc" => "http://www.stcc.edu/adulteducationcenter/",
        "searchResults" => "/search.php",
        "css" => array(
            "main" => "/css/main." . $cacheVer . ".css",
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
            "min" => "/js/main.min." . $cacheVer . ".js",
            
            "html5shiv" => "https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js",
            "respond" => "https://oss.maxcdn.com/respond/1.4.2/respond.min.js"
        ),
        "pdf" => array(
            "weblearnFlyer" => "/pdf/weblearn-flyer.pdf"
        ),
    ),
    "jQuery" => array(
        "cdn" => "https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js",
        "local" => "/js/local/jquery-1.12.2.min.js"
    )
);

// abe lab internal routes
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
        "placeValueV1" => "/abe/place-value/place-value-v1.php",
        "placeValueV2" => "/abe/place-value/place-value-v2.php",
        "placeValueV3" => "/abe/place-value/place-value-v3.php",
        "placeValueV4" => "/abe/place-value/place-value-v4.php",
        "subtraction" => "/abe/subtraction/"
    ),
    "science" => array(
        "bodySystems" => "/abe/body-systems/",
        "bsIntro" => "/abe/body-systems/intro.php",
        "heartCirculatorySys" => "/abe/body-systems/heart-circulatory-system.php",
        "respiratorySys" => "/abe/body-systems/respiratory-system.php",
        "nervousSys" => "/abe/body-systems/nervous-system.php",
        "digestiveSys" => "/abe/body-systems/digestive-system.php",
        "photosynthesis" => "/abe/photosynthesis/",
        "introPhotosynthesis" => "/abe/photosynthesis/intro.php",
        "scientificMethod" => "/abe/scientific-method/",
        "scientificMethodIntro" => "/abe/scientific-method/intro.php",
        "scientificTerms" => "/abe/scientific-terms/"
    ),
    "socialStudies" => array(
        "civilRights" => "/abe/civil-rights-movement/",
        "majorEvents" => "/abe/civil-rights-movement/major-events.php",
        "civilWar" => "/abe/civil-war/",
        "cwIntro" => "/abe/civil-war/intro.php",
        "greatDepression" => "/abe/great-depression/",
        "revolutionaryWar" => "/abe/revolutionary-war/",
        "separationPowers" => "/abe/separation-of-powers/",
        "3BranchesGov" => "/abe/separation-of-powers/three-branches-government.php",
        "legislativeBranch" => "/abe/separation-of-powers/legislative-branch.php",
        "executiveBranch" => "/abe/separation-of-powers/executive-branch.php",
        "judicialBranch" => "/abe/separation-of-powers/judicial-branch.php",
        "usPresidents" => "/abe/us-presidents/"
    ),
    "compLit" => array(
        "compFundamentals" => "/abe/computer-fundamentals/",
        "email" => "/abe/email/",
        "internetBrowsing" => "/abe/internet-browsing/",
        "excel" => "/abe/excel/",
        "powerPoint" => "/abe/powerpoint/",
        "word" => "/abe/word/",
        "introToWord" => "/abe/word/intro-to-word.php",
        "savingPrinting" => "/abe/word/saving-printing.php",
        "formattingDocs" => "/abe/word/formatting-documents.php",
        "insertImgTables" => "/abe/word/insert-images-tables.php",
        "pageLayoutDesign" => "/abe/word/page-layout-design.php",
        "searchEngines" => "/abe/search-engines/",
        "typing" => "/abe/typing/",
        "win7" => "/abe/windows-7/",
        "introDesktop" => "/abe/windows-7/intro-desktop.php",
        "introStartMenu" => "/abe/windows-7/intro-start-menu.php",
        "windowFunctions" => "/abe/windows-7/window-functions.php",
        "navPersonalFolders" => "/abe/windows-7/navigating-personal-folders.php"
    )
);

// esol lab internal routes
$esolRoutes = array(
    "esolHome" => "/esol/",
    "generalEsol" => array(
        "genEsolDir" => "/esol/general-esol/"
    ),
    "specialTopics" => array(
        "citizenship" => "/esol/citizenship/",
        "natInterviewVid" => "/esol/citizenship/naturalization-interview-video.php",
        "grammar" => "/esol/grammar/",
        "health" => "/esol/health/",
        "learnersPermit" => "/esol/learners-permit/",
        "money" => "/esol/money/",
        "amCurrencyFlashcards" => "/esol/money/american-currency-flashcards.php",
        "parents" => "/esol/parents/",
        "pronunciation" => "/esol/pronunciation/",
        "vocabulary" => "/esol/vocabulary/",
        "workplace" => "/esol/workplace/"
    ),
    "compLit" => array(
        "compFundamentals" => "/esol/computer-fundamentals/",
        "email" => "/esol/email/",
        "internetBrowsing" => "/esol/internet-browsing/",
        "excel" => "/esol/excel/",
        "powerPoint" => "/esol/powerpoint/",
        "word" => "/esol/word/",
        "introToWord" => "/esol/word/intro-to-word.php",
        "savingPrinting" => "/esol/word/saving-printing.php",
        "formattingDocs" => "/esol/word/formatting-documents.php",
        "insertImgTables" => "/esol/word/insert-images-tables.php",
        "pageLayoutDesign" => "/esol/word/page-layout-design.php",
        "searchEngines" => "/esol/search-engines/",
        "typing" => "/esol/typing/",
        "win7" => "/esol/windows-7/",
        "introDesktop" => "/esol/windows-7/intro-desktop.php",
        "introStartMenu" => "/esol/windows-7/intro-start-menu.php",
        "windowFunctions" => "/esol/windows-7/window-functions.php",
        "navPersonalFolders" => "/esol/windows-7/navigating-personal-folders.php"
    )
);

// generate markup for media blocks
if (!function_exists('preMediaBlock')) {
    
    function preMediaBlock() {
        
        echo "<div class=\"panel panel-default\">\n";
        echo "\t<div class=\"panel-body media-block\">\n";
        echo "\t<div class=\"caption\">";
        
    }
    
}

if (!function_exists('preMediaBlockCenter')) {
    
    function preMediaBlockCenter() {
        
        echo "<div class=\"panel panel-default\">\n";
        echo "\t\t\t<div class=\"panel-body text-center media-block\">\n";
        echo "\t\t\t\t<div class=\"caption\">\n";
        
    }
    
}

if (!function_exists('postMediaBlock')) {
    
    function postMediaBlock() {
        
        echo "\t\t</div>\n";
        echo "\t\t\t</div>\n";
        echo "\t\t</div>\n";
        
    }
    
}
?>