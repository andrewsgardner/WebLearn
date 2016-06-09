<?php 
$currentPage = "abe";
$pageTitle = "ABE Lab | Decimals &amp; Percentages";
$pageDesc = "Decimals and percentages distance learning activities for Adult Basic Education students.";
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
    <li><a href="<?php echo $abeRoutes['math']['decimalsPercentages']; ?>">Decimals &amp; Percentages</a></li>
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
        <h2>Decimals &amp; Percentages</h2>
        
        <?php preMediaBlock(); ?>
        
        <div class="activity">
            <h3><a href="https://www.khanacademy.org/math/algebra-home/pre-algebra/decimals-pre-alg" target="_blank" class="alt-link-color"><?php echo ++$activityCount . ". "; ?>Intro to Decimals &amp; Percentages</a></h3>
            <p>Increase your understanding of decimals and percentages on Khan Academy. After selecting the above link, click on any of the listed lessons to begin. <span class="glyphicon glyphicon-headphones" aria-hidden="true"></span></p>
            <span class="activity-ul-top">Topics Covered:</span>
            <ul class="activity-ul">
                <li>Decimals &amp; Place Notation</li>
                <li>Regrouping &amp; Comparing Decimals</li>
                <li>Adding, Subtracting, Multiplying &amp; Dividing Decimals</li>
                <li>Converting between Fractions &amp; Decimals</li>
                <li>Percent &amp; Word Problems</li>
                <li>Estimating &amp; Rounding with Decimals</li>
            </ul>
            <div class="activity-thumbnail">
                <img src="<?php echo $config['paths']['img']['content'] . '/decimals-percentages.png'; ?>" alt="Intro to Decimals &amp; Percentages">
            </div>
            <div class="activity-open">
                <p><a href="https://www.khanacademy.org/math/algebra-home/pre-algebra/decimals-pre-alg" target="_blank" class="btn btn-primary" role="button">Open</a></p>
            </div>
        </div>
        
        <div class="activity">
            <h3><a href="http://amby.com/educate/math/4-2_prop.html" target="_blank" class="alt-link-color"><?php echo ++$activityCount . ". "; ?>Solving Percent Problems: Question Set 1</a></h3>
            <p>Learn how to solve percent problems using the proportion method. Read the instructions and then complete the practice problems. You can check your answers by selecting the drop-down list next to each problem.</p>
            <div class="activity-thumbnail">
                <img src="<?php echo $config['paths']['img']['content'] . '/solving-percent-problems-qs1.png'; ?>" alt="Solving Percent Problems: Question Set 1">
            </div>
            <div class="activity-open">
                <p><a href="http://amby.com/educate/math/4-2_prop.html" target="_blank" class="btn btn-primary" role="button">Open</a></p>
            </div>
        </div>
        
        <div class="activity">
            <h3><a href="http://amby.com/educate/math/4-2_pr_x.html" target="_blank" class="alt-link-color"><?php echo ++$activityCount . ". "; ?>Solving Percent Problems: Question Set 2</a></h3>
            <p>Practice solving percent problems using the proportion method. Use the instructions in <a href="http://amby.com/educate/math/4-2_prop.html" target="_blank">Solving Percent Problems: Question Set 1</a> to complete this activity. You can check your answers by selecting the drop-down list next to each problem.</p>
            <div class="activity-thumbnail">
                <img src="<?php echo $config['paths']['img']['content'] . '/solving-percent-problems-qs2.png'; ?>" alt="Solving Percent Problems: Question Set 2">
            </div>
            <div class="activity-open">
                <p><a href="http://amby.com/educate/math/4-2_pr_x.html" target="_blank" class="btn btn-primary" role="button">Open</a></p>
            </div>
        </div>
        
        <div class="activity">
            <h3><a href="http://www.montereyinstitute.org/courses/DevelopmentalMath/COURSE_TEXT_RESOURCE/U05_L2_T1_text_final.html" target="_blank" class="alt-link-color"><?php echo ++$activityCount . ". "; ?>Solving Percent Problems Tutorial</a></h3>
            <p>Learn about two common methods for solving percentage problems; solving with equations, and solving with proportions.</p>
            <div class="activity-thumbnail">
                <img src="<?php echo $config['paths']['img']['content'] . '/solving-percent-problems-tutorial.png'; ?>" alt="Solving Percent Problems Tutorial">
            </div>
            <div class="activity-open">
                <p><a href="http://www.montereyinstitute.org/courses/DevelopmentalMath/COURSE_TEXT_RESOURCE/U05_L2_T1_text_final.html" target="_blank" class="btn btn-primary" role="button">Open</a></p>
            </div>
        </div>
        
        
        <div class="credits alt-link-color">
            <h4>Credits:</h4>
            <p><?php echo ++$refCount . ". "; ?><a href="https://www.khanacademy.org/math/algebra-home/pre-algebra/decimals-pre-alg" target="_blank">Khan Academy</a>.</p>
            <p><?php echo ++$refCount . ". "; ?><a href="http://amby.com/educate/math/4-2_prop.html" target="_blank">Amby's Math Instruction, Reinforcement, and Learning Activities</a>.</p>
            <p><?php echo ++$refCount . ". "; ?><a href="http://amby.com/educate/math/4-2_pr_x.html" target="_blank">Amby's Math Instruction, Reinforcement, and Learning Activities</a>.</p>
            <p><?php echo ++$refCount . ". "; ?><a href="http://www.montereyinstitute.org/courses/DevelopmentalMath/COURSE_TEXT_RESOURCE/U05_L2_T1_text_final.html" target="_blank">Monterey Institute for Technology and Education</a>.</p>
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