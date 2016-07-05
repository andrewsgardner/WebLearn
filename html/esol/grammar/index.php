<?php 
$currentPage = "esol";
$pageTitle = "Grammar | ESOL Lab";
$pageDesc = "Grammar distance learning activities for English for Speakers of Other Languages students.";
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
    <li><a href="<?php echo $esolRoutes['specialTopics']['grammar']; ?>">Grammar</a></li>
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
        <h2>Grammar</h2>
        
        <?php preMediaBlock(); ?>
        
        <div class="activity">
            <h3><a href="https://www.englishclub.com/grammar/" target="_blank" class="alt-link-color"><?php echo ++$activityCount . ". "; ?>EnglishClub Grammar</a></h3>
            <p>English grammar practice with quizzes.</p>
            <div class="activity-thumbnail">
                <img src="<?php echo $config['paths']['img']['content'] . '/englishclub-grammar.png'; ?>" alt="EnglishClub Grammar">
            </div>
            <div class="activity-open">
                <p><a href="https://www.englishclub.com/grammar/" target="_blank" class="btn btn-primary" role="button">Open</a></p>
            </div>
        </div>
        
        <div class="activity">
            <h3><a href="https://www.englishclub.com/esl-games/grammar/" target="_blank" class="alt-link-color"><?php echo ++$activityCount . ". "; ?>Grammar Games</a></h3>
            <p>Test your understanding of English grammar with these online games.</p>
            <div class="activity-thumbnail">
                <img src="<?php echo $config['paths']['img']['content'] . '/grammar-games.png'; ?>" alt="Grammar Games">
            </div>
            <div class="activity-open">
                <p><a href="https://www.englishclub.com/esl-games/grammar/" target="_blank" class="btn btn-primary" role="button">Open</a></p>
            </div>
        </div>
        
        
        <div class="credits alt-link-color">
            <h4>Credits:</h4>
            <p><?php echo ++$refCount . ". "; ?><a href="https://www.englishclub.com/grammar/" target="_blank">EnglishClub</a>.</p>
            <p><?php echo ++$refCount . ". "; ?><a href="https://www.englishclub.com/esl-games/grammar/" target="_blank">EnglishClub</a>.</p>
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