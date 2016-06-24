<?php 
$currentPage = "esol";
$pageTitle = "Search Engines | ESOL Lab";
$pageDesc = "Distance learning activities about using search engines for English for Speakers of Other Languages students.";
$activityCount = 0;
$refCount = 0;
require_once("config.php");
require_once(LIBRARY_PATH . "/activityListFunctions.php");

ob_start();
?>

<!-- BEGIN page breadcrumbs -->

<ol class="breadcrumb">
    <li><a href="/">WebLearn</a></li>
    <li><a href="<?php echo $esolRoutes['esolHome']; ?>">ESOL Lab</a></li>
    <li><a href="<?php echo $esolRoutes['compLit']['searchEngines']; ?>">Search Engines</a></li>
</ol>

<!-- END page breadcrumbs -->

<?php 
$pageBreadbrumbs = ob_get_contents();
ob_get_clean();

ob_start();
?>

<!-- BEGIN activity items -->
    
<div class="row">
    <div class="col-xs-12">
        <h1>ESOL Lab</h1>
        <strong class="subheading text-muted">Springfield Adult Learning Center</strong>
        <h2>Search Engines</h2>
        
        <?php preMediaBlock(); ?>
        
        <div class="activity">
            <h3><a href="https://www.digitallearn.org/courses/basic-search" target="_blank" class="alt-link-color"><?php echo ++$activityCount . ". "; ?>Basic Search</a></h3>
            <p>DigitalLearn.org offers free tutorials about using search engines. After selecting the above link, click on the "Start Course" button to begin the activity. <span class="glyphicon glyphicon-headphones" aria-hidden="true"></span> <span class="glyphicon glyphicon-flash" aria-hidden="true"></span></p>
            <span class="activity-ul-top bold">Sections:</span>
            <ul class="activity-ul">
                <li class="italics">What is a Search Engine?</li>
                <li class="italics">Basic Search</li>
                <li class="italics">Ads in Search Results</li>
            </ul>
            <div class="activity-thumbnail">
                <img src="<?php echo $config['paths']['img']['content'] . '/basic-search.png'; ?>" alt="Basic Search">
            </div>
            <div class="activity-open">
                <p><a href="https://www.digitallearn.org/courses/basic-search" target="_blank" class="btn btn-primary" role="button">Open</a></p>
            </div>
        </div>
        
        <div class="activity">
            <h3><a href="http://www.gcflearnfree.org/searchbetter" target="_blank" class="alt-link-color"><?php echo ++$activityCount . ". "; ?>Search Better</a></h3>
            <p>GCFLearnFree.org offers free tutorials to help you find online information more efficiently. <span class="glyphicon glyphicon-headphones" aria-hidden="true"></span> <span class="glyphicon glyphicon-flash" aria-hidden="true"></span></p>
            <span class="activity-ul-top bold">Sections:</span>
            <ul class="activity-ul">
                <li class="italics">All About Online Search</li>
                <li class="italics">Google Search Tips</li>
                <li class="italics">How to Read a Webpage</li>
                <li class="italics">Judging Online Information</li>
                <li class="italics">Practice Evaluating a Webpage</li>
            </ul>
            <div class="activity-thumbnail">
                <img src="<?php echo $config['paths']['img']['content'] . '/search-better.png'; ?>" alt="Search Better">
            </div>
            <div class="activity-open">
                <p><a href="http://www.gcflearnfree.org/searchbetter" target="_blank" class="btn btn-primary" role="button">Open</a></p>
            </div>
        </div>
        
        
        <div class="credits alt-link-color">
            <h4>Credits:</h4>
            <p><?php echo ++$refCount . ". "; ?><a href="https://www.digitallearn.org/courses" target="_blank">DigitalLearn.org</a>.</p>
            <p><?php echo ++$refCount . ". "; ?><a href="http://www.gcflearnfree.org/searchbetter" target="_blank">GCFLearnFree.org</a>.</p>
        </div>
        
        <?php postMediaBlock(); ?>
        
    </div>
</div>

<!-- END activity items -->

<?php 
$activityItems = ob_get_contents();
ob_get_clean();

$variables = array(
    "pageBreadbrumbs" => $pageBreadbrumbs,
    "activityItems" => $activityItems
);
renderActivityListLayout("/activityList.php", $variables);
?>