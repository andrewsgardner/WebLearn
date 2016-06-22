<?php 
$currentPage = "esol";
$pageTitle = "American Currency Flashcards | ESOL Lab";
$pageDesc = "Learn to identify different units of U.S. money on the Springfield Adult Learning Center's ABE Lab.";
require_once("config.php");
require_once(LIBRARY_PATH . "/contentPageFunctions.php");

ob_start();
?>

<!-- BEGIN page breadcrumbs -->

<ol class="breadcrumb">
    <li><a href="/">WebLearn</a></li>
    <li><a href="<?php echo $esolRoutes['esolHome']; ?>">ESOL Lab</a></li>
    <li><a href="<?php echo $esolRoutes['specialTopics']['money']; ?>">Money</a></li>
    <li><a href="<?php echo $esolRoutes['specialTopics']['amCurrencyFlashcards']; ?>">American Currency Flashcards</a></li>
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
      <h2>American Currency Flashcards</h2>
       <div class="video-container">
         <div class="embed-video">
            <iframe src="https://en.islcollective.com/preview.php?id=8457&nodetails=false" id="previewIframe" frameborder="0" allowfullscreen></iframe>
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