<?php 
$currentPage = "esol";
$pageTitle = "Page Layout &amp; Design in Word | ESOL Lab";
$pageDesc = "Learn how to change the page layout and general design of your Microsoft Word document on the Springfield Adult Learning Center's ESOL Lab.";
require_once("config.php");
require_once(LIBRARY_PATH . "/contentPageFunctions.php");

ob_start();
?>

<!-- BEGIN page breadcrumbs -->

<ol class="breadcrumb">
    <li><a href="/">WebLearn</a></li>
    <li><a href="<?php echo $esolRoutes['esolHome']; ?>">ESOL Lab</a></li>
    <li><a href="<?php echo $esolRoutes['compLit']['word']; ?>">Microsoft Word</a></li>
    <li><a href="<?php echo $esolRoutes['compLit']['pageLayoutDesign']; ?>">Page Layout &amp; Design</a></li>
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
      <h1>ESOL Lab</h1>
      <strong class="subheading text-muted">Springfield Adult Learning Center</strong>
      <h2>Page Layout &amp; Design</h2>
       <div class="video-container">
         <div class="embed-video">
            <iframe src="https://www.youtube.com/embed/9t8F7f7JBHo" frameborder="0" allowfullscreen></iframe>
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