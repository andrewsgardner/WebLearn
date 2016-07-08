<?php 
$pageTitle = "SALC WebLearn | Search Results";
$pageDesc = "WebLearn is a distance learning website for prospective Adult Basic Education or English for Speakers of Other Languages students at SALC.";
require_once("config.php");
require_once(LIBRARY_PATH . "/contentPageFunctions.php");

ob_start();
?>

<!-- BEGIN page breadcrumbs -->



<!-- END page breadcrumbs -->

<?php 
$pageBreadbrumbs = ob_get_contents();
ob_get_clean();

ob_start();
?>

<!-- BEGIN page content -->

<div class="row">
    <div class="col-xs-12">
        <gcse:searchresults-only></gcse:searchresults-only>
    </div>
</div>

<!-- END page content -->

<?php 
$pageContent = ob_get_contents();
ob_get_clean();

$variables = array(
    "pageBreadbrumbs" => $pageBreadbrumbs,
    "pageContent" => $pageContent
);
renderContentPageLayout("/contentPage.php", $variables);
?>