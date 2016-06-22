<?php 
$currentPage = "abe";
$pageTitle = "Photosynthesis | ABE Lab";
$pageDesc = "Distance learning activities about photosynthesis for Adult Basic Education students.";
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
    <li><a href="<?php echo $abeRoutes['science']['photosynthesis']; ?>">Photosynthesis</a></li>
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
        <h2>Photosynthesis</h2>
        
        <?php preMediaBlock(); ?>
        
        <div class="activity">
            <h3><a href="<?php echo $abeRoutes['science']['introPhotosynthesis']; ?>" class="alt-link-color"><?php echo ++$activityCount . ". "; ?>Introduction to Photosynthesis</a></h3>
            <p>Learn about the processes of photosynthesis and cellular respiration. <span class="glyphicon glyphicon-headphones" aria-hidden="true"></span></p>
            <div class="activity-thumbnail">
                <img src="<?php echo $config['paths']['img']['content'] . '/introduction-photosynthesis.jpg'; ?>" alt="Introduction to Photosynthesis">
            </div>
            <div class="activity-open">
                <p><a href="<?php echo $abeRoutes['science']['introPhotosynthesis']; ?>" class="btn btn-primary" role="button">Open</a></p>
            </div>
        </div>
        
        <div class="activity">
            <h3><a href="http://www.tv411.org/science/tv411-whats-cooking/photosynthesis-science-lesson/activity/1/1" target="_blank" class="alt-link-color"><?php echo ++$activityCount . ". "; ?>Answering Photosynthesis Questions</a></h3>
            <p>Practice answering multiple choice questions about photosynthesis.</p>
            <p>Click <span class="bold">'submit answer'</span> after choosing your response to each question. You may then click <span class="bold">'next'</span> to advance to the next page.</p>
            <p>Read all of the directions carefully. Some questions will require you to interpret a diagram or body of text.</p>
            <div class="activity-thumbnail">
                <img src="<?php echo $config['paths']['img']['content'] . '/answering-photosynthesis-questions.png'; ?>" alt="Answering Photosynthesis Questions">
            </div>
            <div class="activity-open">
                <p><a href="http://www.tv411.org/science/tv411-whats-cooking/photosynthesis-science-lesson/activity/1/1" target="_blank" class="btn btn-primary" role="button">Open</a></p>
            </div>
        </div>
        
        
        <div class="credits alt-link-color">
            <h4>Credits:</h4>
            <p><?php echo ++$refCount . ". "; ?><a href="http://www.gedstudyguide.org/science-practice-lessons/photosynthesis-and-cellular-respiration-science-pratice-lessons/" target="_blank">GED Study Guide</a>.</p>
            <p><?php echo ++$refCount . ". "; ?><a href="http://www.tv411.org/science/tv411-whats-cooking/photosynthesis-science-lesson/activity/1/1" target="_blank">Education Development Center: TV411</a>.</p>
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