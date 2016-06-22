<?php 
$currentPage = "abe";
$pageTitle = "Civil War | ABE Lab";
$pageDesc = "Distance learning activities about the Civil War for Adult Basic Education students.";
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
    <li><a href="<?php echo $abeRoutes['socialStudies']['civilWar']; ?>">American Civil War</a></li>
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
        <h2>American Civil War</h2>
        
        <?php preMediaBlock(); ?>
        
        <div class="activity">
            <h3><a href="<?php echo $abeRoutes['socialStudies']['cwIntro']; ?>" class="alt-link-color"><?php echo ++$activityCount . ". "; ?>The Civil War: Introduction</a></h3>
            <p>A brief introduction to the American Civil War, which took place from 1861 - 1865. <span class="glyphicon glyphicon-headphones" aria-hidden="true"></span></p>
            <div class="activity-thumbnail">
                <img src="<?php echo $config['paths']['img']['content'] . '/civil-war-intro.jpg'; ?>" alt="The Civil War: Introduction">
            </div>
            <div class="activity-open">
                <p><a href="<?php echo $abeRoutes['socialStudies']['cwIntro']; ?>" class="btn btn-primary" role="button">Open</a></p>
            </div>
        </div>
        
        <div class="activity">
            <h3><a href="http://www.loc.gov/teachers/classroommaterials/presentationsandactivities/presentations/timeline/civilwar/" target="_blank" class="alt-link-color"><?php echo ++$activityCount . ". "; ?>Civil War &amp; Reconstruction Articles</a></h3>
            <p>Explore a series of articles from the Library of Congress about the American Civil War.</p>
            <div class="activity-thumbnail">
                <img src="<?php echo $config['paths']['img']['content'] . '/civil-war-reconstruction-articles.png'; ?>" alt="Civil War &amp; Reconstruction Articles">
            </div>
            <div class="activity-open">
                <p><a href="http://www.loc.gov/teachers/classroommaterials/presentationsandactivities/presentations/timeline/civilwar/" target="_blank" class="btn btn-primary" role="button">Open</a></p>
            </div>
        </div>
        
        <div class="activity">
            <h3><a href="http://www.gedstudyguide.org/social-studies-practice-lessons/american-civil-war-lesson-seven/" target="_blank" class="alt-link-color"><?php echo ++$activityCount . ". "; ?>American Civil War: Practice Questions</a></h3>
            <p>Watch a video and then answer multiple choice questions about the American Civil War. <span class="glyphicon glyphicon-headphones" aria-hidden="true"></span></p>
            <div class="activity-thumbnail">
                <img src="<?php echo $config['paths']['img']['content'] . '/american-civil-war-practice-questions.png'; ?>" alt="American Civil War: Practice Questions">
            </div>
            <div class="activity-open">
                <p><a href="http://www.gedstudyguide.org/social-studies-practice-lessons/american-civil-war-lesson-seven/" target="_blank" class="btn btn-primary" role="button">Open</a></p>
            </div>
        </div>
        
        
        <div class="credits alt-link-color">
            <h4>Credits:</h4>
            <p><?php echo ++$refCount . ". "; ?><a href="http://www.mometrix.com/academy/civil-war/" target="_blank">Mometrix Test Preparation</a>.</p>
            <p><?php echo ++$refCount . ". "; ?><a href="http://www.loc.gov/teachers/classroommaterials/presentationsandactivities/presentations/timeline/civilwar/" target="_blank">Library of Congress</a>.</p>
            <p><?php echo ++$refCount . ". "; ?><a href="http://www.gedstudyguide.org/social-studies-practice-lessons/american-civil-war-lesson-seven/" target="_blank">GED Study Guide</a>.</p>
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