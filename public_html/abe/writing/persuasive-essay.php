<?php 
$currentPage = "abe";
$pageTitle = "ABE Lab | Apostrophes";
$pageDesc = "Learn about proper apostrophe usage on the Springfield Adult Learning Center's ABE Lab.";
require_once("config.php");
require_once(LIBRARY_PATH . "/contentPageFunctions.php");

ob_start();
?>

<!-- BEGIN page breadcrumbs -->

<ol class="breadcrumb">
    <li><a href="/">WebLearn</a></li>
    <li><a href="<?php echo $abeRoutes['abeHome']; ?>">ABE Lab</a></li>
    <li><a href="<?php echo $abeRoutes['english']['writing']; ?>">Writing</a></li>
    <li><a href="<?php echo $abeRoutes['english']['persuasiveEssay']; ?>">Persuasive Essay</a></li>
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
      <h2>Persuasive Essay</h2>
       <div class="video-container">
         <div class="embed-video">
            <iframe src="https://www.youtube.com/embed/xGiGlBUxllI" frameborder="0" allowfullscreen></iframe>
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