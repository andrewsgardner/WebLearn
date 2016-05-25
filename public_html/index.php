<?php 
$currentPage = "landing";
$pageTitle = "";
$pageDesc = "";
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

<h1>Test</h1>
<p>Lorem ipsum dolor sit amet, pellentesque laoreet orci integer facilisi tortor quis, sollicitudin gravida torquent pellentesque proin, venenatis dolore cras iaculis wisi lacus egestas, wisi amet integer ultrices cursus irure est.</p>

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