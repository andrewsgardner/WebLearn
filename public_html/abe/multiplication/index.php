<?php 
$currentPage = "abe";
$pageTitle = "ABE Lab | Multiplication";
$pageDesc = "Multiplication distance learning activities for Adult Basic Education students.";
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
    <li><a href="<?php echo $abeRoutes['math']['multiplication']; ?>">Multiplication</a></li>
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
        <h2>Multiplication</h2>
        
        <?php preMediaBlock(); ?>
        
        <div class="activity">
            <h3><a href="http://arithmetic.zetamac.com/game?key=731d9819" target="_blank" class="alt-link-color"><?php echo ++$activityCount . ". "; ?>Multiplication - The Arithmetic Game</a></h3>
            <p>See how many multiplication problems you can answer in five minutes.</p>
            <div class="activity-thumbnail">
                <img src="<?php echo $config['paths']['img']['content'] . '/multiplication-the-arithmetic-game.png'; ?>" alt="Multiplication - The Arithmetic Game">
            </div>
            <div class="activity-open">
                <p><a href="http://arithmetic.zetamac.com/game?key=731d9819" target="_blank" class="btn btn-primary" role="button">Open</a></p>
            </div>
        </div>
        
        <div class="activity">
            <h3><a href="http://www.softschools.com/quizzes/math/multiplication_word_problems/quiz1059.html" target="_blank" class="alt-link-color"><?php echo ++$activityCount . ". "; ?>Multiplication Word Problems</a></h3>
            <p>Practice solving word problems using multiplication. After selecting the above link, click on the orange button to start the activity.</p>
            <div class="activity-thumbnail">
                <img src="<?php echo $config['paths']['img']['content'] . '/timed-multiplication-practice.png'; ?>" alt="Multiplication Word Problems">
            </div>
            <div class="activity-open">
                <p><a href="http://www.softschools.com/quizzes/math/multiplication_word_problems/quiz1059.html" target="_blank" class="btn btn-primary" role="button">Open</a></p>
            </div>
        </div>
        
        
        <div class="credits alt-link-color">
            <h4>Credits:</h4>
            <p><?php echo ++$refCount . ". "; ?><a href="http://arithmetic.zetamac.com/" target="_blank">The Arithmetic Game</a>.</p>
            <p><?php echo ++$refCount . ". "; ?><a href="http://www.softschools.com/quizzes/math/multiplication_word_problems/quiz1059.html" target="_blank">softschools.com</a>.</p>
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