<?php 
$currentPage = "abe";
$pageTitle = "Division | ABE Lab";
$pageDesc = "Division distance learning activities for Adult Basic Education students.";
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
    <li><a href="<?php echo $abeRoutes['math']['division']; ?>">Division</a></li>
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
        <h2>Division</h2>
        
        <?php preMediaBlock(); ?>
        
        <div class="activity">
            <h3><a href="http://arithmetic.zetamac.com/game?key=e2c90390" target="_blank" class="alt-link-color"><?php echo ++$activityCount . ". "; ?>Division - The Arithmetic Game</a></h3>
            <p>See how many division problems you can answer in five minutes.</p>
            <div class="activity-thumbnail">
                <img src="<?php echo $config['paths']['img']['content'] . '/division-the-arithmetic-game.png'; ?>" alt="Division - The Arithmetic Game">
            </div>
            <div class="activity-open">
                <p><a href="http://arithmetic.zetamac.com/game?key=e2c90390" target="_blank" class="btn btn-primary" role="button">Open</a></p>
            </div>
        </div>
        
        <div class="activity">
            <h3><a href="http://lizardpoint.com/math/div-online.php" target="_blank" class="alt-link-color"><?php echo ++$activityCount . ". "; ?>Division Practice Activity</a></h3>
            <p>Review basic division operations with this online exercise.</p>
            <div class="activity-thumbnail">
                <img src="<?php echo $config['paths']['img']['content'] . '/division-practice-activity.png'; ?>" alt="Division Practice Activity">
            </div>
            <div class="activity-open">
                <p><a href="http://lizardpoint.com/math/div-online.php" target="_blank" class="btn btn-primary" role="button">Open</a></p>
            </div>
        </div>
        
        
        <div class="credits alt-link-color">
            <h4>Credits:</h4>
            <p><?php echo ++$refCount . ". "; ?><a href="http://arithmetic.zetamac.com/" target="_blank">The Arithmetic Game</a>.</p>
            <p><?php echo ++$refCount . ". "; ?><a href="http://lizardpoint.com/math/div-online.php" target="_blank">Lizard Point</a>.</p>
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