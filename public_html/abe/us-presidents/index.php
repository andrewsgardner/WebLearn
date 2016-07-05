<?php 
$currentPage = "abe";
$pageTitle = "U.S. Presidents | ABE Lab";
$pageDesc = "Distance learning activities about U.S. Presidents for Adult Basic Education students.";
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
    <li><a href="<?php echo $abeRoutes['socialStudies']['usPresidents']; ?>">U.S. Presidents</a></li>
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
        <h2>U.S. Presidents</h2>
        
        <?php preMediaBlock(); ?>
        
        <div class="activity">
            <h3><a href="http://www.history.com/topics/us-presidents" target="_blank" class="alt-link-color"><?php echo ++$activityCount . ". "; ?>United States Presidents</a></h3>
            <p>Read about the history of each U.S. President. <span class="glyphicon glyphicon-headphones" aria-hidden="true"></span> <span class="glyphicon glyphicon-flash" aria-hidden="true"></span></p>
            <div class="activity-thumbnail">
                <img src="<?php echo $config['paths']['img']['content'] . '/us-presidents.png'; ?>" alt="United States Presidents">
            </div>
            <div class="activity-open">
                <p><a href="http://www.history.com/topics/us-presidents" target="_blank" class="btn btn-primary" role="button">Open</a></p>
            </div>
        </div>
        
        <div class="activity">
            <h3><a href="http://www.softschools.com/timelines/us_presidents/timeline_2/" target="_blank" class="alt-link-color"><?php echo ++$activityCount . ". "; ?>United States Presidents: Timeline</a></h3>
            <p>An interactive timeline of U.S. Presidents.</p>
            <div class="activity-thumbnail">
                <img src="<?php echo $config['paths']['img']['content'] . '/us-presidents-timeline.png'; ?>" alt="United States Presidents: Timeline">
            </div>
            <div class="activity-open">
                <p><a href="http://www.softschools.com/timelines/us_presidents/timeline_2/" target="_blank" class="btn btn-primary" role="button">Open</a></p>
            </div>
        </div>
        
        <div class="activity">
            <h3><a href="http://www.primarygames.com/presidents/question_1.htm" target="_blank" class="alt-link-color"><?php echo ++$activityCount . ". "; ?>Name That President Game</a></h3>
            <p>Identify the pictures of former U.S. Presidents.</p>
            <div class="activity-thumbnail">
                <img src="<?php echo $config['paths']['img']['content'] . '/name-that-president-game.png'; ?>" alt="Name That President Game">
            </div>
            <div class="activity-open">
                <p><a href="http://www.primarygames.com/presidents/question_1.htm" target="_blank" class="btn btn-primary" role="button">Open</a></p>
            </div>
        </div>
        
        <div class="activity">
            <h3><a href="http://nationalparalegal.edu/conLawCrimProc_Public/Federalism/PresidentialPowers.asp" target="_blank" class="alt-link-color"><?php echo ++$activityCount . ". "; ?>Presidential Powers</a></h3>
            <p>Read about specific powers held by the president of the United States.</p>
            <div class="activity-thumbnail">
                <img src="<?php echo $config['paths']['img']['content'] . '/presidential-powers.png'; ?>" alt="Presidential Powers">
            </div>
            <div class="activity-open">
                <p><a href="http://nationalparalegal.edu/conLawCrimProc_Public/Federalism/PresidentialPowers.asp" target="_blank" class="btn btn-primary" role="button">Open</a></p>
            </div>
        </div>
        
        
        <div class="credits alt-link-color">
            <h4>Credits:</h4>
            <p><?php echo ++$refCount . ". "; ?><a href="http://www.history.com/topics/us-presidents" target="_blank">history.com</a>.</p>
            <p><?php echo ++$refCount . ". "; ?><a href="http://www.softschools.com/timelines/us_presidents/timeline_2/" target="_blank">softschools.com</a>.</p>
            <p><?php echo ++$refCount . ". "; ?><a href="http://www.primarygames.com/presidents/question_1.htm" target="_blank">PrimaryGames</a>.</p>
            <p><?php echo ++$refCount . ". "; ?><a href="http://nationalparalegal.edu/conLawCrimProc_Public/Federalism/PresidentialPowers.asp" target="_blank">National Paralegal College</a>.</p>
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