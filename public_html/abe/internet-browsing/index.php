<?php 
$currentPage = "abe";
$pageTitle = "Internet Browsing | ABE Lab";
$pageDesc = "Distance learning activities about Internet browsing for Adult Basic Education students.";
$activityCount = 0;
$refCount = 0;
require_once("config.php");
require_once(LIBRARY_PATH . "/activityListFunctions.php");

ob_start();
?>

<!-- BEGIN page breadcrumbs -->

<ol class="breadcrumb">
    <li><a href="/">WebLearn</a></li>
    <li><a href="<?php echo $abeRoutes['abeHome']; ?>">ABE Lab</a></li>
    <li><a href="<?php echo $abeRoutes['compLit']['internetBrowsing']; ?>">Internet Browsing</a></li>
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
        <h1>ABE Lab</h1>
        <strong class="subheading text-muted">Springfield Adult Learning Center</strong>
        <h2>Internet Browsing</h2>
        
        <?php preMediaBlock(); ?>
        
        <div class="activity">
            <h3><a href="https://www.digitallearn.org/courses/navigating-a-website" target="_blank" class="alt-link-color"><?php echo ++$activityCount . ". "; ?>Navigating a Website</a></h3>
            <p>DigitalLearn.org offers free self-paced tutorials about Internet browsing. After selecting the above link, click on the "Start Course" button to begin the activity. <span class="glyphicon glyphicon-headphones" aria-hidden="true"></span> <span class="glyphicon glyphicon-flash" aria-hidden="true"></span></p>
            <span class="activity-ul-top bold">Sections:</span>
            <ul class="activity-ul">
                <li class="italics">Finding a Website</li>
                <li class="italics">Parts of a Website</li>
            </ul>
            <div class="activity-thumbnail">
                <img src="<?php echo $config['paths']['img']['content'] . '/navigating-a-website.png'; ?>" alt="Navigating a Website">
            </div>
            <div class="activity-open">
                <p><a href="https://www.digitallearn.org/courses/navigating-a-website" target="_blank" class="btn btn-primary" role="button">Open</a></p>
            </div>
        </div>
        
        <div class="activity">
            <h3><a href="http://www.gcflearnfree.org/chrome" target="_blank" class="alt-link-color"><?php echo ++$activityCount . ". "; ?>Google Chrome Tutorial</a></h3>
            <p>GCFLearnFree.org offers free self-paced tutorials about Google Chrome. <span class="glyphicon glyphicon-headphones" aria-hidden="true"></span> <span class="glyphicon glyphicon-flash" aria-hidden="true"></span></p>
            <div class="activity-thumbnail">
                <img src="<?php echo $config['paths']['img']['content'] . '/google-chrome-tutorial.png'; ?>" alt="Google Chrome Tutorial">
            </div>
            <div class="activity-open">
                <p><a href="http://www.gcflearnfree.org/chrome" target="_blank" class="btn btn-primary" role="button">Open</a></p>
            </div>
        </div>
        
        <div class="activity">
            <h3><a href="http://www.gcflearnfree.org/firefox" target="_blank" class="alt-link-color"><?php echo ++$activityCount . ". "; ?>Mozilla Firefox Tutorial</a></h3>
            <p>GCFLearnFree.org offers free self-paced tutorials about Mozilla Firefox. <span class="glyphicon glyphicon-headphones" aria-hidden="true"></span> <span class="glyphicon glyphicon-flash" aria-hidden="true"></span></p>
            <div class="activity-thumbnail">
                <img src="<?php echo $config['paths']['img']['content'] . '/mozilla-firefox-tutorial.png'; ?>" alt="Mozilla Firefox Tutorial">
            </div>
            <div class="activity-open">
                <p><a href="http://www.gcflearnfree.org/firefox" target="_blank" class="btn btn-primary" role="button">Open</a></p>
            </div>
        </div>
        
        <div class="activity">
            <h3><a href="http://www.gcflearnfree.org/internetexplorer" target="_blank" class="alt-link-color"><?php echo ++$activityCount . ". "; ?>Internet Explorer Tutorial</a></h3>
            <p>GCFLearnFree.org offers free self-paced tutorials about Internet Explorer. <span class="glyphicon glyphicon-headphones" aria-hidden="true"></span> <span class="glyphicon glyphicon-flash" aria-hidden="true"></span></p>
            <div class="activity-thumbnail">
                <img src="<?php echo $config['paths']['img']['content'] . '/internet-explorer-tutorial.png'; ?>" alt="Internet Explorer Tutorial">
            </div>
            <div class="activity-open">
                <p><a href="http://www.gcflearnfree.org/internetexplorer" target="_blank" class="btn btn-primary" role="button">Open</a></p>
            </div>
        </div>
        
        
        <div class="credits alt-link-color">
            <h4>Credits:</h4>
            <p><?php echo ++$refCount . ". "; ?><a href="https://www.digitallearn.org/courses" target="_blank">DigitalLearn.org</a>.</p>
            <p><?php echo ++$refCount . ". "; ?><a href="http://www.gcflearnfree.org/chrome" target="_blank">GCFLearnFree.org</a>.</p>
            <p><?php echo ++$refCount . ". "; ?><a href="http://www.gcflearnfree.org/firefox" target="_blank">GCFLearnFree.org</a>.</p>
            <p><?php echo ++$refCount . ". "; ?><a href="http://www.gcflearnfree.org/internetexplorer" target="_blank">GCFLearnFree.org</a>.</p>
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