<?php 
$currentPage = "abe";
$pageTitle = "ABE Lab | Even &amp; Odd Numbers Question Set 3";
$pageDesc = "Practice identifying even and odd numbers on the Springfield Adult Learning Center's ABE Lab.";
require_once("config.php");
require_once(LIBRARY_PATH . "/contentPageFunctions.php");

ob_start();
?>

<!-- BEGIN page breadcrumbs -->

<ol class="breadcrumb">
    <li><a href="/">WebLearn</a></li>
    <li><a href="<?php echo $abeRoutes['abeHome']; ?>">ABE Lab</a></li>
    <li><a href="<?php echo $abeRoutes['math']['evenOddNums']; ?>">Even &amp; Odd Numbers</a></li>
    <li><a href="<?php echo $abeRoutes['math']['eonQs3']; ?>">Question Set 3</a></li>
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
      <h2>Even &amp; Odd Numbers: Question Set 3</h2>
      <p>Practice identifying even and odd numbers.</p>
       <p><span class="bold">Note:</span> This activity doesn't work on smartphones. Please use a desktop or tablet computer.</p>
      <p class="bold">General Rules:</p>
      <ul class="activity-ul">
           <li><span class="bold">A number is even when it ends in: 0, 2, 4, 6, or 8.</span> Example: 25<span class="underline">6</span>.</li>
           <li><span class="bold">A number is odd when it ends in: 1, 3, 5, or 9.</span> Example: 100,37<span class="underline">5</span>.</li>
      </ul>
      <p>Pay close attention because the instructions will change as you play the game.</p>
      <p>Click the "play" button to begin</p>
      <p><a href="<?php echo $abeRoutes['math']['eonQs3']; ?>">Click here</a> to refresh the page and try again.</p>   
      <div class="embed-sporcle">
          <iframe src="http://www.sporcle.com/framed/?v=6&pm&gid=54d993b9a79&fid=54e64301be147&width=580" id="spFrame54e64301be147" frameborder="0" allowfullscreen></iframe>
          <script src="http://www.sporcle.com/embed/embed.js?v=54e64301be147"></script>
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