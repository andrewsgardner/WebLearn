<?php 
$currentPage = "abe";
$pageTitle = "Drafting Body Paragraphs | ABE Lab";
$pageDesc = "Learn how to write effective body paragraphs for your essay on the Springfield Adult Learning Center's ABE Lab.";
require_once("config.php");
require_once(LIBRARY_PATH . "/contentPageFunctions.php");

ob_start();
?>

<!-- BEGIN page breadcrumbs -->

<ol class="breadcrumb">
    <li><a href="/">WebLearn</a></li>
    <li><a href="<?php echo $abeRoutes['abeHome']; ?>">ABE Lab</a></li>
    <li><a href="<?php echo $abeRoutes['english']['writing']; ?>">Writing</a></li>
    <li><a href="<?php echo $abeRoutes['english']['bodyParagraphs']; ?>">Body Paragraphs</a></li>
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
      <h2>Drafting Body Paragraphs</h2>
       <div class="video-container">
         <div class="embed-video">
            <iframe src="https://www.youtube.com/embed/b1PvMkb2-6k" frameborder="0" allowfullscreen></iframe>
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