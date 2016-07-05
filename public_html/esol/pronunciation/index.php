<?php 
$currentPage = "esol";
$pageTitle = "Pronunciation | ESOL Lab";
$pageDesc = "English pronunciation distance learning activities for English for Speakers of Other Languages students.";
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
    <li><a href="<?php echo $esolRoutes['specialTopics']['pronunciation']; ?>">Pronunciation</a></li>
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
        <h2>Pronunciation</h2>
        
        <?php preMediaBlock(); ?>
        
        <div class="activity">
            <h3><a href="http://rachelsenglish.com/" target="_blank" class="alt-link-color"><?php echo ++$activityCount . ". "; ?>Rachel's English</a></h3>
            <p>Over 400 videos on American English pronunciation. <span class="glyphicon glyphicon-headphones" aria-hidden="true"></span></p>
            <div class="activity-thumbnail">
                <img src="<?php echo $config['paths']['img']['content'] . '/rachels-english.png'; ?>" alt="Rachel's English">
            </div>
            <div class="activity-open">
                <p><a href="http://rachelsenglish.com/" target="_blank" class="btn btn-primary" role="button">Open</a></p>
            </div>
        </div>
        
        <div class="activity">
            <h3><a href="https://www.englishclub.com/pronunciation/" target="_blank" class="alt-link-color"><?php echo ++$activityCount . ". "; ?>EnglishClub Pronunciation</a></h3>
            <p>English pronunciation practice with audio. <span class="glyphicon glyphicon-headphones" aria-hidden="true"></span> <span class="glyphicon glyphicon-flash" aria-hidden="true"></span></p>
            <div class="activity-thumbnail">
                <img src="<?php echo $config['paths']['img']['content'] . '/englishclub-pronunciation.png'; ?>" alt="EnglishClub Pronunciation">
            </div>
            <div class="activity-open">
                <p><a href="https://www.englishclub.com/pronunciation/" target="_blank" class="btn btn-primary" role="button">Open</a></p>
            </div>
        </div>
        
        <div class="activity">
            <h3><a href="https://www.englishclub.com/esl-games/pronunciation/" target="_blank" class="alt-link-color"><?php echo ++$activityCount . ". "; ?>Pronunciation Games</a></h3>
            <p>Test your understanding of English pronunciation with these online games.</p>
            <div class="activity-thumbnail">
                <img src="<?php echo $config['paths']['img']['content'] . '/pronunciation-games.png'; ?>" alt="Pronunciation Games">
            </div>
            <div class="activity-open">
                <p><a href="https://www.englishclub.com/esl-games/pronunciation/" target="_blank" class="btn btn-primary" role="button">Open</a></p>
            </div>
        </div>
        
        
        <div class="credits alt-link-color">
            <h4>Credits:</h4>
            <p><?php echo ++$refCount . ". "; ?><a href="http://rachelsenglish.com/" target="_blank">Rachel's English</a>.</p>
            <p><?php echo ++$refCount . ". "; ?><a href="https://www.englishclub.com/pronunciation/" target="_blank">EnglishClub</a>.</p>
            <p><?php echo ++$refCount . ". "; ?><a href="https://www.englishclub.com/esl-games/pronunciation/" target="_blank">EnglishClub</a>.</p>
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