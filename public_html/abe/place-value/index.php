<?php 
$currentPage = "abe";
$pageTitle = "ABE Lab | Place Value";
$pageDesc = "Distance learning activities about place value for Adult Basic Education students.";
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
    <li><a href="<?php echo $abeRoutes['math']['placeValue']; ?>">Place Value</a></li>
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
        <h2>Place Value</h2>
        
        <?php preMediaBlock(); ?>
        
        <div class="activity">
            <h3><a href="<?php echo $abeRoutes['math']['placeValueV1']; ?>" class="alt-link-color"><?php echo ++$activityCount . ". "; ?>Exploring Place Value - Video 1</a></h3>
            <p>Review the process for grouping tens and ones together within our number system. <span class="glyphicon glyphicon-headphones" aria-hidden="true"></span></p>
            <div class="activity-thumbnail">
                <img src="<?php echo $config['paths']['img']['content'] . '/exploring-place-value-v1.jpg'; ?>" alt="Exploring Place Value - Video 1">
            </div>
            <div class="activity-open">
                <p><a href="<?php echo $abeRoutes['math']['placeValueV1']; ?>" class="btn btn-primary" role="button">Open</a></p>
            </div>
        </div>
        
        <div class="activity">
            <h3><a href="<?php echo $abeRoutes['math']['placeValueV2']; ?>" class="alt-link-color"><?php echo ++$activityCount . ". "; ?>Exploring Place Value - Video 2</a></h3>
            <p>Review the process for grouping thousands, hundreds, tens, and ones together within our number system. <span class="glyphicon glyphicon-headphones" aria-hidden="true"></span></p>
            <div class="activity-thumbnail">
                <img src="<?php echo $config['paths']['img']['content'] . '/exploring-place-value-v2.jpg'; ?>" alt="Exploring Place Value - Video 2">
            </div>
            <div class="activity-open">
                <p><a href="<?php echo $abeRoutes['math']['placeValueV2']; ?>" class="btn btn-primary" role="button">Open</a></p>
            </div>
        </div>
        
        <div class="activity">
            <h3><a href="<?php echo $abeRoutes['math']['placeValueV3']; ?>" class="alt-link-color"><?php echo ++$activityCount . ". "; ?>Exploring Place Value - Video 3</a></h3>
            <p>Review the process for grouping ten-thousands, thousands, hundreds, tens, and ones together within our number system. <span class="glyphicon glyphicon-headphones" aria-hidden="true"></span></p>
            <div class="activity-thumbnail">
                <img src="<?php echo $config['paths']['img']['content'] . '/exploring-place-value-v3.jpg'; ?>" alt="Exploring Place Value - Video 3">
            </div>
            <div class="activity-open">
                <p><a href="<?php echo $abeRoutes['math']['placeValueV3']; ?>" class="btn btn-primary" role="button">Open</a></p>
            </div>
        </div>
        
        <div class="activity">
            <h3><a href="<?php echo $abeRoutes['math']['placeValueV4']; ?>" class="alt-link-color"><?php echo ++$activityCount . ". "; ?>Exploring Place Value - Video 4</a></h3>
            <p>Review the process for grouping millions, thousands, hundreds, tens, and ones together within our number system. <span class="glyphicon glyphicon-headphones" aria-hidden="true"></span></p>
            <div class="activity-thumbnail">
                <img src="<?php echo $config['paths']['img']['content'] . '/exploring-place-value-v4.jpg'; ?>" alt="Exploring Place Value - Video 4">
            </div>
            <div class="activity-open">
                <p><a href="<?php echo $abeRoutes['math']['placeValueV4']; ?>" class="btn btn-primary" role="button">Open</a></p>
            </div>
        </div>
        
        <div class="activity">
            <h3><a href="http://www.softschools.com/math/practice/place_value.jsp" target="_blank" class="alt-link-color"><?php echo ++$activityCount . ". "; ?>Place Value Game</a></h3>
            <p>Practice identifying the correct place value. After selecting the above link, click on the "generate" button to start the activity.</p>
            <div class="activity-thumbnail">
                <img src="<?php echo $config['paths']['img']['content'] . '/place-value-game.png'; ?>" alt="Place Value Game">
            </div>
            <div class="activity-open">
                <p><a href="http://www.softschools.com/math/practice/place_value.jsp" target="_blank" class="btn btn-primary" role="button">Open</a></p>
            </div>
        </div>
        
        
        <div class="credits alt-link-color">
            <h4>Credits:</h4>
            <p><?php echo ++$refCount . ". "; ?><a href="https://www.khanacademy.org/math/early-math/cc-early-math-place-value-topic/cc-early-math-tens/v/rep-quantity-with-digits?v=-Zlq5tNl94M" target="_blank">Khan Academy</a>.</p>
            <p><?php echo ++$refCount . ". "; ?><a href="https://www.khanacademy.org/math/pre-algebra/order-of-operations/place-value/v/place-value-1?v=jxA8MffVmPs" target="_blank">Khan Academy</a>.</p>
            <p><?php echo ++$refCount . ". "; ?><a href="https://www.khanacademy.org/math/in-sixth-grade-math/knowing-numbers/new-topic-2015-11-17T22:50:33.135Z/v/place-value-3?v=iK0y39rjBgQ" target="_blank">Khan Academy</a>.</p>
            <p><?php echo ++$refCount . ". "; ?><a href="https://www.khanacademy.org/math/in-eighth-grade-math/playing-numbers-1/numbers-general-form/v/place-value-2?v=wd4cRAoBOiE" target="_blank">Khan Academy</a>.</p>
            <p><?php echo ++$refCount . ". "; ?><a href="http://www.softschools.com/math/practice/place_value.jsp" target="_blank">softschools.com</a>.</p>
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