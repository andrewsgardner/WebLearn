<?php 
$currentPage = "abe";
$pageTitle = "";
$pageDesc = "";
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
        
        <div class="panel panel-default">
        <div class="panel-body text-left media-block">
        <div class="caption">
        <dl class="list">
            
            <dt>Item</dt>
            <dd>
                <p>Description of item.</p>
                <img src="#" alt="#">
            </dd>
        
        </dl>
        </div>
        </div>
        </div>
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