<?php 
$currentPage = "abe";
$pageTitle = "";
$pageDesc = "";
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
    <li><a href="<?php echo $abeRoutes['english']['grammar']; ?>">Grammar</a></li>
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
        <h2>Grammar</h2>
        
        <?php preMediaBlock(); ?>
        
        <div class="activity">
            <h3><a href="<?php echo $abeRoutes['english']['toTooTwo']; ?>" class="alt-link-color"><?php echo ++$activityCount . ". "; ?>To, Too, Two</a></h3>
            <p>Learn about the differences between 'to,' 'too,' and 'two.' Watch the video tutorial and then complete the practice exercise. <span class="glyphicon glyphicon-headphones" aria-hidden="true"></span></p>
            <div class="activity-thumbnail">
                <img src="#" class="" alt="#">
            </div>
            <div class="activity-open">
                <p><a href="<?php echo $abeRoutes['english']['toTooTwo']; ?>" class="btn btn-primary" role="button">Open</a></p>
            </div>
        </div>
        
        <hr>
        
        <div class="activity alt-link-color">
            <h4>Credits:</h4>
            <p><?php echo ++$refCount . ". "; ?><a href="<?php echo $salcStcc; ?>">Andrew S. Gardner: Springfield Adult Learning Center</a>, <a href="http://www.engvid.com/confused-words-to-too-two/">engVID.com</a>.</p>
        </div>
        
        <?php postMediaBlock(); ?>
        
    </div>
</div>

<!-- END activity items -->

<?php 
$activityItems = ob_get_contents();
ob_get_clean();

ob_start();
?>

<!-- BEGIN item references -->

<!-- END item references -->

<?php
$itemRefs = ob_get_contents();
ob_get_clean();

$variables = array(
    "pageBreadbrumbs" => $pageBreadbrumbs,
    "activityItems" => $activityItems,
    "itemRefs" => $itemRefs
);
renderActivityListLayout("/activityList.php", $variables);
?>