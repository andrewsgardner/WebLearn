<?php 
$currentPage = "abe";
$pageTitle = "ABE Lab | Three Branches of Government";
$pageDesc = "Learn how power in the U.S. is distributed between three separate branches of government on the Springfield Adult Learning Center's ABE Lab.";
require_once("config.php");
require_once(LIBRARY_PATH . "/contentPageFunctions.php");

ob_start();
?>

<!-- BEGIN page breadcrumbs -->

<ol class="breadcrumb">
    <li><a href="/">WebLearn</a></li>
    <li><a href="<?php echo $abeRoutes['abeHome']; ?>">ABE Lab</a></li>
    <li><a href="<?php echo $abeRoutes['socialStudies']['separationPowers']; ?>">Separation of Powers</a></li>
    <li><a href="<?php echo $abeRoutes['socialStudies']['3BranchesGov']; ?>">3 Branches of Gov't</a></li>
</ol>

<!-- END page breadcrumbs -->

<?php 
$pageBreadbrumbs = ob_get_contents();
ob_get_clean();

ob_start();
?>

<!-- BEGIN page content -->

<div class="row">
   <div class="col-xs-12">
      <h1>ABE Lab</h1>
      <strong class="subheading text-muted">Springfield Adult Learning Center</strong>
      <h2>Three Branches of Government</h2>
       <div class="video-container">
         <div class="embed-video">
            <iframe src="https://www.youtube.com/embed/HuFR5XBYLfU" frameborder="0" allowfullscreen></iframe>
         </div>
      </div>
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