<?php 
$currentPage = "abe";
$pageTitle = "ABE Lab | Number Sense";
$pageDesc = "Distance learning activities about number sense for Adult Basic Education students.";
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
    <li><a href="<?php echo $abeRoutes['math']['numberSense']; ?>">Number Sense</a></li>
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
        <h2>Number Sense</h2>
        
        <?php preMediaBlock(); ?>
        
        <div class="activity">
            <h3><a href="http://www.montereyinstitute.org/courses/DevelopmentalMath/COURSE_TEXT_RESOURCE/U01_L1_T1_text_final.html" target="_blank" class="alt-link-color"><?php echo ++$activityCount . ". "; ?>Place Value &amp; Names for Whole Numbers</a></h3>
            <p>Learn about place value and how to write whole numbers in standard form and expanded form.</p>
            <div class="activity-thumbnail">
                <img src="<?php echo $config['paths']['img']['content'] . '/place-value-names-whole-numbers.png'; ?>" alt="Place Value &amp; Names for Whole Numbers">
            </div>
            <div class="activity-open">
                <p><a href="http://www.montereyinstitute.org/courses/DevelopmentalMath/COURSE_TEXT_RESOURCE/U01_L1_T1_text_final.html" target="_blank" class="btn btn-primary" role="button">Open</a></p>
            </div>
        </div>
        
        <div class="activity">
            <h3><a href="http://www.softschools.com/math/topics/rounding_to_the_nearest_10th/" target="_blank" class="alt-link-color"><?php echo ++$activityCount . ". "; ?>Rounding to the Nearest Ten</a></h3>
            <p>Learn how to round numbers to the nearest tenth.</p>
            <div class="activity-thumbnail">
                <img src="<?php echo $config['paths']['img']['content'] . '/rounding-nearest-tenth.png'; ?>" alt="Rounding to the Nearest Ten">
            </div>
            <div class="activity-open">
                <p><a href="http://www.softschools.com/math/topics/rounding_to_the_nearest_10th/" target="_blank" class="btn btn-primary" role="button">Open</a></p>
            </div>
        </div>
        
        <div class="activity">
            <h3><a href="http://www.softschools.com/math/topics/rounding_to_the_nearest_hundredth/" target="_blank" class="alt-link-color"><?php echo ++$activityCount . ". "; ?>Rounding to the Nearest Hundred</a></h3>
            <p>Learn how to round numbers to the nearest hundredth.</p>
            <div class="activity-thumbnail">
                <img src="<?php echo $config['paths']['img']['content'] . '/rounding-nearest-hundredth.png'; ?>" alt="Rounding to the Nearest Hundred">
            </div>
            <div class="activity-open">
                <p><a href="http://www.softschools.com/math/topics/rounding_to_the_nearest_hundredth/" target="_blank" class="btn btn-primary" role="button">Open</a></p>
            </div>
        </div>
        
        <div class="activity">
            <h3><a href="http://www.softschools.com/math/practice/rounding_numbers.jsp" target="_blank" class="alt-link-color"><?php echo ++$activityCount . ". "; ?>Rounding Numbers Game</a></h3>
            <p>Practice rounding to the nearest ten, the nearest hundred, and the nearest thousand. After selecting the above link, choose which unit you want to round to and then click on the blue button to start the activity.</p>
            <div class="activity-thumbnail">
                <img src="<?php echo $config['paths']['img']['content'] . '/rounding-numbers-game.png'; ?>" alt="Rounding Numbers Game">
            </div>
            <div class="activity-open">
                <p><a href="http://www.softschools.com/math/practice/rounding_numbers.jsp" target="_blank" class="btn btn-primary" role="button">Open</a></p>
            </div>
        </div>
        
        <div class="activity">
            <h3><a href="http://www.softschools.com/math/rounding/game/" target="_blank" class="alt-link-color"><?php echo ++$activityCount . ". "; ?>Rounding to the Underlined Digit</a></h3>
            <p>Practice rounding to the underlined digit. After selecting the above link, click on the green button to start the activity. <span class="glyphicon glyphicon-flash" aria-hidden="true"></span></p>
            <div class="activity-thumbnail">
                <img src="<?php echo $config['paths']['img']['content'] . '/rounding-to-underlined-digit.png'; ?>" alt="Rounding to the Underlined Digit">
            </div>
            <div class="activity-open">
                <p><a href="http://www.softschools.com/math/rounding/game/" target="_blank" class="btn btn-primary" role="button">Open</a></p>
            </div>
        </div>
        
        <div class="activity">
            <h3><a href="http://www.softschools.com/quizzes/math/rounding/quiz837.html" target="_blank" class="alt-link-color"><?php echo ++$activityCount . ". "; ?>Rounding Large Numbers</a></h3>
            <p>Practice rounding large numbers to the nearest thousand, ten thousand, hundred thousand, and million. After selecting the above link, click on the orange button to start the activity.</p>
            <div class="activity-thumbnail">
                <img src="<?php echo $config['paths']['img']['content'] . '/rounding-large-numbers.png'; ?>" alt="Rounding Large Numbers">
            </div>
            <div class="activity-open">
                <p><a href="http://www.softschools.com/quizzes/math/rounding/quiz837.html" target="_blank" class="btn btn-primary" role="button">Open</a></p>
            </div>
        </div>
        
        <div class="activity">
            <h3><a href="http://www.studyzone.org/mtestprep/math8/d/millionsorderp.cfm" target="_blank" class="alt-link-color"><?php echo ++$activityCount . ". "; ?>Ordering Large Numbers</a></h3>
            <p>Practice arranging large numbers in the correct order from least to greatest.</p>
            <div class="activity-thumbnail">
                <img src="<?php echo $config['paths']['img']['content'] . '/ordering-large-numbers.png'; ?>" alt="Ordering Large Numbers">
            </div>
            <div class="activity-open">
                <p><a href="http://www.studyzone.org/mtestprep/math8/d/millionsorderp.cfm" target="_blank" class="btn btn-primary" role="button">Open</a></p>
            </div>
        </div>
        
        <div class="activity">
            <h3><a href="https://quizlet.com/14200215/flashcards" target="_blank" class="alt-link-color"><?php echo ++$activityCount . ". "; ?>Math Vocabulary Flash Cards</a></h3>
            <p>Review the definitions of commonly used math terms.</p>
            <div class="activity-thumbnail">
                <img src="<?php echo $config['paths']['img']['content'] . '/math-vocabulary-flash-cards.png'; ?>" alt="Math Vocabulary Flash Cards">
            </div>
            <div class="activity-open">
                <p><a href="https://quizlet.com/14200215/flashcards" target="_blank" class="btn btn-primary" role="button">Open</a></p>
            </div>
        </div>
        
        
        <div class="credits alt-link-color">
            <h4>Credits:</h4>
            <p><?php echo ++$refCount . ". "; ?><a href="http://www.montereyinstitute.org/" target="_blank">Monterey Institute for Technology and Education</a>.</p>
            <p><?php echo ++$refCount . ". "; ?><a href="http://www.softschools.com/math/topics/rounding_to_the_nearest_10th/" target="_blank">softschools.com</a>.</p>
            <p><?php echo ++$refCount . ". "; ?><a href="http://www.softschools.com/math/topics/rounding_to_the_nearest_hundredth/" target="_blank">softschools.com</a>.</p>
            <p><?php echo ++$refCount . ". "; ?><a href="http://www.softschools.com/math/practice/rounding_numbers.jsp" target="_blank">softschools.com</a>.</p>
            <p><?php echo ++$refCount . ". "; ?><a href="http://www.softschools.com/math/rounding/game/" target="_blank">softschools.com</a>.</p>
            <p><?php echo ++$refCount . ". "; ?><a href="http://www.softschools.com/quizzes/math/rounding/quiz837.html" target="_blank">softschools.com</a>.</p>
            <p><?php echo ++$refCount . ". "; ?><a href="http://www.studyzone.org/mtestprep/math8/d/millionsorderp.cfm" target="_blank">studyzone.org</a>.</p>
            <p><?php echo ++$refCount . ". "; ?><a href="https://quizlet.com/14200215/flashcards" target="_blank">Quizlet: Math Vocabulary - Number Sense</a>.</p>
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