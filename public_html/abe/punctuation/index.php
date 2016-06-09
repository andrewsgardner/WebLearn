<?php 
$currentPage = "abe";
$pageTitle = "ABE Lab | Punctuation Activity List";
$pageDesc = "Punctuation distance learning activities for Adult Basic Education students.";
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
    <li><a href="<?php echo $abeRoutes['english']['punctuation']; ?>">Punctuation</a></li>
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
        <h2>Punctuation</h2>
        
        <?php preMediaBlock(); ?>
        
        <div class="activity">
            <h3><a href="<?php echo $abeRoutes['english']['apostrophes']; ?>" class="alt-link-color"><?php echo ++$activityCount . ". "; ?>Apostrophes</a></h3>
            <p>Learn how to correctly use apostrophes in your writing. <span class="glyphicon glyphicon-headphones" aria-hidden="true"></span></p>
            <div class="activity-thumbnail">
                <img src="<?php echo $config['paths']['img']['content'] . '/apostrophes.png'; ?>" alt="Apostrophes">
            </div>
            <div class="activity-open">
                <p><a href="<?php echo $abeRoutes['english']['apostrophes']; ?>" class="btn btn-primary" role="button">Open</a></p>
            </div>
        </div>
        
        <div class="activity">
            <h3><a href="http://www.softschools.com/quizzes/grammar/apostrophe/quiz601.html" target="_blank" class="alt-link-color"><?php echo ++$activityCount . ". "; ?>Practice Using Apostrophes: Question Set 1</a></h3>
            <p>Practice identifying where the apostrophes belong in each sentence. You may want to review the above video on <a href="<?php echo $abeRoutes['english']['apostrophes']; ?>" target="_blank">apostrophes</a>.</p>
            <div class="activity-thumbnail">
                <img src="<?php echo $config['paths']['img']['content'] . '/practice-using-apostrophes-qs1.png'; ?>" alt="Practice Using Apostrophes: Question Set 1">
            </div>
            <div class="activity-open">
                <p><a href="http://www.softschools.com/quizzes/grammar/apostrophe/quiz601.html" target="_blank" class="btn btn-primary" role="button">Open</a></p>
            </div>
        </div>
        
        <div class="activity">
            <h3><a href="http://www.softschools.com/quizzes/grammar/apostrophe/quiz602.html" target="_blank" class="alt-link-color"><?php echo ++$activityCount . ". "; ?>Practice Using Apostrophes: Question Set 2</a></h3>
            <p>Practice identifying where the apostrophes belong in each sentence. You may want to review the above video on <a href="<?php echo $abeRoutes['english']['apostrophes']; ?>" target="_blank"></a>.</p>
            <div class="activity-thumbnail">
                <img src="<?php echo $config['paths']['img']['content'] . '/practice-using-apostrophes-qs2.png'; ?>" alt="Practice Using Apostrophes: Question Set 2">
            </div>
            <div class="activity-open">
                <p><a href="http://www.softschools.com/quizzes/grammar/apostrophe/quiz602.html" target="_blank" class="btn btn-primary" role="button">Open</a></p>
            </div>
        </div>
        
        <div class="activity">
            <h3><a href="<?php echo $abeRoutes['english']['commaFunctions']; ?>" class="alt-link-color"><?php echo ++$activityCount . ". "; ?>Common Comma Functions</a></h3>
            <p>Learn how to correctly use commas in your writing. <span class="glyphicon glyphicon-headphones" aria-hidden="true"></span></p>
            <div class="activity-thumbnail">
                <img src="<?php echo $config['paths']['img']['content'] . '/common-comma-functions.png'; ?>" alt="Common Comma Functions">
            </div>
            <div class="activity-open">
                <p><a href="<?php echo $abeRoutes['english']['commaFunctions']; ?>" class="btn btn-primary" role="button">Open</a></p>
            </div>
        </div>
        
        <div class="activity">
            <h3><a href="http://www.softschools.com/quizzes/language_arts/punctuation_comma/quiz2140.html" target="_blank" class="alt-link-color"><?php echo ++$activityCount . ". "; ?>Practice Using Commas</a></h3>
            <p>Practice identifying where the commas belong in each sentence. You may want to review the above video on <a href="<?php echo $abeRoutes['english']['commaFunctions']; ?>" target="_blank">common comma functions</a>.</p>
            <div class="activity-thumbnail">
                <img src="<?php echo $config['paths']['img']['content'] . '/practice-using-commas.png'; ?>" alt="Practice Using Commas">
            </div>
            <div class="activity-open">
                <p><a href="http://www.softschools.com/quizzes/language_arts/punctuation_comma/quiz2140.html" target="_blank" class="btn btn-primary" role="button">Open</a></p>
            </div>
        </div>
        
        <div class="activity">
            <h3><a href="<?php echo $abeRoutes['english']['semicolonUsage']; ?>" class="alt-link-color"><?php echo ++$activityCount . ". "; ?>Semicolon Usage</a></h3>
            <p>Learn how to correctly use semicolons in your writing. <span class="glyphicon glyphicon-headphones" aria-hidden="true"></span></p>
            <div class="activity-thumbnail">
                <img src="<?php echo $config['paths']['img']['content'] . '/semicolon-usage.png'; ?>" alt="Semicolon Usage">
            </div>
            <div class="activity-open">
                <p><a href="<?php echo $abeRoutes['english']['semicolonUsage']; ?>" class="btn btn-primary" role="button">Open</a></p>
            </div>
        </div>
        
        <div class="activity">
            <h3><a href="http://www2.ivcc.edu/rambo/practice_semicolon_quiz.htm" target="_blank" class="alt-link-color"><?php echo ++$activityCount . ". "; ?>Practice Using Semicolons</a></h3>
            <p>Practice identifying whether the semicolon is used correctly in each sentence. You may want to review the above video on <a href="<?php echo $abeRoutes['english']['semicolonUsage']; ?>" target="_blank">semicolon usage</a>.</p>
            <div class="activity-thumbnail">
                <img src="<?php echo $config['paths']['img']['content'] . '/practice-using-semicolons.png'; ?>" alt="Practice Using Semicolons">
            </div>
            <div class="activity-open">
                <p><a href="http://www2.ivcc.edu/rambo/practice_semicolon_quiz.htm" target="_blank" class="btn btn-primary" role="button">Open</a></p>
            </div>
        </div>
        
        <hr>
        
        <div class="activity alt-link-color">
            <h4>Credits:</h4>
            <p><?php echo ++$refCount . ". "; ?><a href="http://www.mometrix.com/academy/apostrophes/" target="_blank">Mometrix Test Preparation</a>.</p>
            <p><?php echo ++$refCount . ". "; ?><a href="http://www.softschools.com/quizzes/grammar/apostrophe/quiz601.html" target="_blank">softschools.com</a>.</p>
            <p><?php echo ++$refCount . ". "; ?><a href="http://www.softschools.com/quizzes/grammar/apostrophe/quiz602.html" target="_blank">softschools.com</a>.</p>
            <p><?php echo ++$refCount . ". "; ?><a href="http://www.mometrix.com/academy/common-comma-functions/" target="_blank">Mometrix Test Preparation</a>.</p>
            <p><?php echo ++$refCount . ". "; ?><a href="http://www.softschools.com/quizzes/language_arts/punctuation_comma/quiz2140.html" target="_blank">softschools.com</a>.</p>
            <p><?php echo ++$refCount . ". "; ?><a href="http://www.mometrix.com/academy/semicolon-usage/" target="_blank">Mometrix Test Preparation</a>.</p>
            <p><?php echo ++$refCount . ". "; ?><a href="http://www2.ivcc.edu/rambo/practice_semicolon_quiz.htm" target="_blank">Illinois Valley Community College</a>.</p>
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