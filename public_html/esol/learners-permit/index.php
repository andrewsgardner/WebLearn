<?php 
$currentPage = "esol";
$pageTitle = "MA Learner's Permit | ESOL Lab";
$pageDesc = "Prepare yourself to take the Massachusetts Learner's Permit Test on the Springfield Adult Learning Center's ESOL Lab.";
$activityCount = 0;
$refCount = 0;
require_once("config.php");
require_once(LIBRARY_PATH . "/activityListFunctions.php");

ob_start();
?>

<!-- BEGIN page breadcrumbs -->

<ol class="breadcrumb">
    <li><a href="/">WebLearn</a></li>
    <li><a href="<?php echo $esolRoutes['esolHome']; ?>">ESOL Lab</a></li>
    <li><a href="<?php echo $esolRoutes['specialTopics']['learnersPermit']; ?>">MA Learner's Permit</a></li>
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
        <h1>ESOL Lab</h1>
        <strong class="subheading text-muted">Springfield Adult Learning Center</strong>
        <h2>MA Learner's Permit</h2>
        
        <?php preMediaBlock(); ?>
        
        <div class="activity">
            <h3><a href="http://jl.driving-tests.org/massachusetts/" target="_blank" class="alt-link-color"><?php echo ++$activityCount . ". "; ?>MA RMV Practice Tests</a></h3>
            <p>This resource will prepare you for taking the Massachusetts Learner's Permit Test.</p>
            <div class="activity-thumbnail">
                <img src="<?php echo $config['paths']['img']['content'] . '/learners-permit.png'; ?>" alt="MA RMV Practice Tests">
            </div>
            <div class="activity-open">
                <p><a href="http://jl.driving-tests.org/massachusetts/" target="_blank" class="btn btn-primary" role="button">Open</a></p>
            </div>
        </div>
        
        
        <div class="credits alt-link-color">
            <h4>Credits:</h4>
            <p><?php echo ++$refCount . ". "; ?><a href="http://jl.driving-tests.org/massachusetts/" target="_blank">Jones Library</a>.</p>
        </div>
        
        <?php postMediaBlock(); ?>
        
    </div>
</div>

<!-- END activity items -->

<?php 
$activityItems = ob_get_contents();
ob_get_clean();

$variables = array(
    "pageBreadbrumbs" => $pageBreadbrumbs,
    "activityItems" => $activityItems
);
renderActivityListLayout("/activityList.php", $variables);
?>