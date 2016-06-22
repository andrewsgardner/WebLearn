<?php 
$currentPage = "abe";
$pageTitle = "Computer Fundamentals | ABE Lab";
$pageDesc = "Basic computer skills distance learning activities for Adult Basic Education students.";
$activityCount = 0;
$refCount = 0;
require_once("config.php");
require_once(LIBRARY_PATH . "/activityListFunctions.php");

ob_start();
?>

<!-- BEGIN page breadcrumbs -->

<ol class="breadcrumb">
    <li><a href="/">WebLearn</a></li>
    <li><a href="<?php echo $abeRoutes['abeHome']; ?>">ABE Lab</a></li>
    <li><a href="<?php echo $abeRoutes['compLit']['compFundamentals']; ?>">Computer Fundamentals</a></li>
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
        <h1>ABE Lab</h1>
        <strong class="subheading text-muted">Springfield Adult Learning Center</strong>
        <h2>Computer Fundamentals</h2>
        
        <?php preMediaBlock(); ?>
        
        <div class="activity">
            <h3><a href="http://www.gcflearnfree.org/computerbasics" target="_blank" class="alt-link-color"><?php echo ++$activityCount . ". "; ?>Computer Basics</a></h3>
            <p>GCFLearnFree.org offers free self-paced tutorials about computer use. <span class="glyphicon glyphicon-headphones" aria-hidden="true"></span> <span class="glyphicon glyphicon-flash" aria-hidden="true"></span></p>
            <div class="activity-thumbnail">
                <img src="<?php echo $config['paths']['img']['content'] . '/computer-basics.png'; ?>" alt="Computer Basics">
            </div>
            <div class="activity-open">
                <p><a href="http://www.gcflearnfree.org/computerbasics" target="_blank" class="btn btn-primary" role="button">Open</a></p>
            </div>
        </div>
        
        <div class="activity">
            <h3><a href="http://www.gcflearnfree.org/mousetutorial" target="_blank" class="alt-link-color"><?php echo ++$activityCount . ". "; ?>Mouse Skills Tutorial One</a></h3>
            <p>GCFLearnFree.org offers a free tutorial about using the mouse. <span class="glyphicon glyphicon-flash" aria-hidden="true"></span></p>
            <div class="activity-thumbnail">
                <img src="<?php echo $config['paths']['img']['content'] . '/mouse-skills-tutorial-1.png'; ?>" alt="Mouse Skills Tutorial One">
            </div>
            <div class="activity-open">
                <p><a href="http://www.gcflearnfree.org/mousetutorial" target="_blank" class="btn btn-primary" role="button">Open</a></p>
            </div>
        </div>
        
        <div class="activity">
            <h3><a href="<?php echo $mouseSkills; ?>" class="alt-link-color"><?php echo ++$activityCount . ". "; ?>Mouse Skills Tutorial Two</a></h3>
            <p>Learn how to use a computer mouse.</p>
            <p>This activity doesn't work on smartphones.</p>
            <div class="activity-thumbnail">
                <img src="<?php echo $config['paths']['img']['content'] . '/mouse-skills-tutorial-2.png'; ?>" alt="Mouse Skills Tutorial Two">
            </div>
            <div class="activity-open">
                <p><a href="<?php echo $mouseSkills; ?>" class="btn btn-primary" role="button">Open</a></p>
            </div>
        </div>
        
        
        <div class="credits alt-link-color">
            <h4>Credits:</h4>
            <p><?php echo ++$refCount . ". "; ?><a href="http://www.gcflearnfree.org/computerbasics" target="_blank">GCFLearnFree.org</a>.</p>
            <p><?php echo ++$refCount . ". "; ?><a href="http://www.gcflearnfree.org/mousetutorial" target="_blank">GCFLearnFree.org</a>.</p>
            <p><?php echo ++$refCount . ". "; ?><a href="http://tln.lib.mi.us/committee/tech-comm/" target="_blank">TLN Technology Committee</a>.</p>
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