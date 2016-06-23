<?php 
$currentPage = "esol";
$pageTitle = "Vocabulary | ESOL Lab";
$pageDesc = "Vocabulary building distance learning activities for English for Speakers of Other Languages students.";
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
    <li><a href="<?php echo $esolRoutes['specialTopics']['vocabulary']; ?>">Vocabulary</a></li>
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
        <h2>Vocabulary</h2>
        
        <?php preMediaBlock(); ?>
        
        <div class="activity">
            <h3><a href="http://www.learningchocolate.com/" target="_blank" class="alt-link-color"><?php echo ++$activityCount . ". "; ?>Learning Chocolate</a></h3>
            <p>Learning Chocolate uses pictures, sounds, and games to teach new English words. <span class="glyphicon glyphicon-headphones" aria-hidden="true"></span></p>
            <div class="activity-thumbnail">
                <img src="<?php echo $config['paths']['img']['content'] . '/learning-chocolate.png'; ?>" alt="Learning Chocolate">
            </div>
            <div class="activity-open">
                <p><a href="http://www.learningchocolate.com/" target="_blank" class="btn btn-primary" role="button">Open</a></p>
            </div>
        </div>
        
        <div class="activity">
            <h3><a href="https://www.englishclub.com/vocabulary/" target="_blank" class="alt-link-color"><?php echo ++$activityCount . ". "; ?>EnglishClub Vocabulary</a></h3>
            <p>English vocabulary practice with examples.</p>
            <div class="activity-thumbnail">
                <img src="<?php echo $config['paths']['img']['content'] . '/englishclub-vocabulary.png'; ?>" alt="EnglishClub Vocabulary">
            </div>
            <div class="activity-open">
                <p><a href="https://www.englishclub.com/vocabulary/" target="_blank" class="btn btn-primary" role="button">Open</a></p>
            </div>
        </div>
        
        <div class="activity">
            <h3><a href="https://www.englishclub.com/esl-games/vocabulary/" target="_blank" class="alt-link-color"><?php echo ++$activityCount . ". "; ?>Vocabulary Games</a></h3>
            <p>English vocabulary games.</p>
            <div class="activity-thumbnail">
                <img src="<?php echo $config['paths']['img']['content'] . '/vocabulary-games.png'; ?>" alt="Vocabulary Games">
            </div>
            <div class="activity-open">
                <p><a href="https://www.englishclub.com/esl-games/vocabulary/" target="_blank" class="btn btn-primary" role="button">Open</a></p>
            </div>
        </div>
        
        <div class="activity">
            <h3><a href="http://freerice.com/" target="_blank" class="alt-link-color"><?php echo ++$activityCount . ". "; ?>Free Rice</a></h3>
            <p>Improve your English vocabulary with Free Rice. <span class="glyphicon glyphicon-headphones" aria-hidden="true"></span></p>
            <div class="activity-thumbnail">
                <img src="<?php echo $config['paths']['img']['content'] . '/free-rice.png'; ?>" alt="Free Rice">
            </div>
            <div class="activity-open">
                <p><a href="http://freerice.com/" target="_blank" class="btn btn-primary" role="button">Open</a></p>
            </div>
        </div>
        
        
        <div class="credits alt-link-color">
            <h4>Credits:</h4>
            <p><?php echo ++$refCount . ". "; ?><a href="http://www.learningchocolate.com/" target="_blank">Learning Chocolate - Vocabulary Learning Platform</a>.</p>
            <p><?php echo ++$refCount . ". "; ?><a href="https://www.englishclub.com/vocabulary/" target="_blank">EnglishClub</a>.</p>
            <p><?php echo ++$refCount . ". "; ?><a href="https://www.englishclub.com/esl-games/vocabulary/" target="_blank">EnglishClub</a>.</p>
            <p><?php echo ++$refCount . ". "; ?><a href="http://freerice.com/" target="_blank">Free Rice</a>.</p>
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