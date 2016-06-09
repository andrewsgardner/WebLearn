<?php 
$currentPage = "abe";
$pageTitle = "ABE Lab | Inference Practice";
$pageDesc = "Learn to recognize the main subject of a text on the Springfield Adult Learning Center's ABE Lab.";
require_once("config.php");
require_once(LIBRARY_PATH . "/contentPageFunctions.php");

ob_start();
?>

<!-- BEGIN page breadcrumbs -->

<ol class="breadcrumb">
    <li><a href="/">WebLearn</a></li>
    <li><a href="<?php echo $abeRoutes['abeHome']; ?>">ABE Lab</a></li>
    <li><a href="<?php echo $abeRoutes['english']['reading']; ?>">Reading</a></li>
    <li><a href="<?php echo $abeRoutes['english']['inferencePractice']; ?>">Inference Practice</a></li>
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
      <h2>Inference Practice</h2>
       <p>Answer the questions by making inferences from each passage.</p>
       <p>The term <span class="bold">"inference"</span> refers to the practice of using observation and background knowledge to determine a conclusion that makes sense.</p>
       <p>Authors don't always provide all of the necessary information for understanding their work. Readers must sometimes <span class="bold">infer</span> the intended meaning that an author is trying to express. Making an inference involves looking beyond what an author directly states to understand what they're trying to indirectly state.</p>
       <p class="bold">Consider the following example:</p>
       <p class="italics">"Justin is wearing two sweatshirts and a scarf today."</p>
       <p>We can make an inference from this statement that the temperature today is probably cold.</p>
       <p>Follow the on-screen instructions in the activity below.</p>
       <div class="embed-flash">
           <object> <param name="Inference Practice 1" value="inference-practice-1.swf">
                <embed src="http://www.ereadingworksheets.com/reading-worksheets/inference-practice-1.swf">
           </object>
           <br/><small><a href="http://www.ereadingworksheets.com">reading worksheets</a></small>
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