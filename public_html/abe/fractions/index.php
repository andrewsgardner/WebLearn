<?php 
$currentPage = "abe";
$pageTitle = "ABE Lab | Fractions";
$pageDesc = "Distance learning activities about fractions for Adult Basic Education students.";
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
    <li><a href="<?php echo $abeRoutes['math']['fractions']; ?>">Fractions</a></li>
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
        <h2>Fractions</h2>
        
        <?php preMediaBlock(); ?>
        
        <div class="activity">
            <h3><a href="https://www.khanacademy.org/math/arithmetic/fractions" target="_blank" class="alt-link-color"><?php echo ++$activityCount . ". "; ?>Lessons on Fractions</a></h3>
            <p>Increase your understanding of fractions by using Khan Academy. After selecting the above link, click on any of the listed lessons to begin. <span class="glyphicon glyphicon-headphones" aria-hidden="true"></span></p>
            <span class="activity-ul-top bold">Topics Covered:</span>
            <ul class="activity-ul">
                <li class="italics">Understanding Fractions</li>
                <li class="italics">Equivalent Fractions &amp; Simplified Form</li>
                <li class="italics">Adding &amp; Subtracting Fractions</li>
                <li class="italics">Multiplying Fractions</li>
                <li class="italics">Mixed Numbers &amp; Improper Fractions</li>
                <li class="italics">Dividing Fractions</li>
            </ul>
            <div class="activity-thumbnail">
                <img src="<?php echo $config['paths']['img']['content'] . '/lessons-on-fractions.png'; ?>" alt="Lessons on Fractions">
            </div>
            <div class="activity-open">
                <p><a href="https://www.khanacademy.org/math/arithmetic/fractions" target="_blank" class="btn btn-primary" role="button">Open</a></p>
            </div>
        </div>
        
        <div class="activity">
            <h3><a href="http://www.webmath.com/k8cf.html" target="_blank" class="alt-link-color"><?php echo ++$activityCount . ". "; ?>Compare Two Fractions</a></h3>
            <p>Examine the physical difference between any two fractions using pictures. This activity generates pie charts that represent the quantities you want to compare. Drawing pictures can help you determine which fraction is larger or smaller.</p>
            <p>Create your fractions by entering in the numerators, which are the numbers above the fraction bar, and the denominators, which are the numbers below the fraction bar. Click the '<span class="italics">Which one is larger?</span>' button to continue.</p>
            <span class="activity-ul-top bold">Example:
                <p class="fraction-p">
                    <span class="fraction"><sup>6</sup><span>/</span><sub>8</sub></span>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <span class="fraction"><sup>5</sup><span>/</span><sub>9</sub></span>
                </p>
            </span>
            <div class="activity-thumbnail">
                <img src="<?php echo $config['paths']['img']['content'] . '/compare-two-fractions.png'; ?>" alt="Compare Two Fractions">
            </div>
            <div class="activity-open">
                <p><a href="http://www.webmath.com/k8cf.html" target="_blank" class="btn btn-primary" role="button">Open</a></p>
            </div>
        </div>
        
        <div class="activity">
            <h3><a href="http://www.montereyinstitute.org/courses/DevelopmentalMath/COURSE_TEXT_RESOURCE/U02_L1_T2_text_final.html" target="_blank" class="alt-link-color"><?php echo ++$activityCount . ". "; ?>Proper &amp; Improper Fractions Tutorial</a></h3>
            <p>Learn how to work with proper fractions, improper fractions, and mixed numbers.</p>
            <span class="activity-ul-top bold">Topics Covered:</span>
            <ul class="activity-ul">
                <li class="italics">Identifying Proper &amp; Improper Fractions</li>
                <li class="italics">Changing Improper Fractions to Mixed Numbers</li>
                <li class="italics">Changing Mixed Numbers to Improper Fractions</li>
            </ul>
            <div class="activity-thumbnail">
                <img src="<?php echo $config['paths']['img']['content'] . '/proper-improper-fractions-tutorial.png'; ?>" alt="Proper &amp; Improper Fractions Tutorial">
            </div>
            <div class="activity-open">
                <p><a href="http://www.montereyinstitute.org/courses/DevelopmentalMath/COURSE_TEXT_RESOURCE/U02_L1_T2_text_final.html" target="_blank" class="btn btn-primary" role="button">Open</a></p>
            </div>
        </div>
        
        <div class="activity">
            <h3><a href="http://www.montereyinstitute.org/courses/DevelopmentalMath/COURSE_TEXT_RESOURCE/U02_L1_T4_text_final.html" target="_blank" class="alt-link-color"><?php echo ++$activityCount . ". "; ?>Simplifying Fractions Tutorial</a></h3>
            <p>Learn how to reduce a fraction to lowest terms.</p>
            <span class="activity-ul-top bold">Topics Covered:</span>
            <ul class="activity-ul">
                <li class="italics">Finding Equivalent Fractions</li>
                <li class="italics">Simplifying Fractions</li>
            </ul>
            <div class="activity-thumbnail">
                <img src="<?php echo $config['paths']['img']['content'] . '/simplifying-fractions-tutorial.png'; ?>" alt="Simplifying Fractions Tutorial">
            </div>
            <div class="activity-open">
                <p><a href="http://www.montereyinstitute.org/courses/DevelopmentalMath/COURSE_TEXT_RESOURCE/U02_L1_T4_text_final.html" target="_blank" class="btn btn-primary" role="button">Open</a></p>
            </div>
        </div>
        
        <div class="activity">
            <h3><a href="http://www.montereyinstitute.org/courses/DevelopmentalMath/COURSE_TEXT_RESOURCE/U02_L3_T1_text_final.html" target="_blank" class="alt-link-color"><?php echo ++$activityCount . ". "; ?>Adding Fractions &amp; Mixed Numbers Tutorial</a></h3>
            <p>Learn how to add fractions and mixed numbers.</p>
            <span class="activity-ul-top bold">Topics Covered:</span>
            <ul class="activity-ul">
                <li class="italics">Adding Fractions with Like Denominators</li>
                <li class="italics">Finding the Least Common Multiple</li>
                <li class="italics">Finding the Common Denominator</li>
                <li class="italics">Adding Fractions with Unlike Denominators</li>
                <li class="italics">Adding Mixed Numbers</li>
            </ul>
            <div class="activity-thumbnail">
                <img src="<?php echo $config['paths']['img']['content'] . '/adding-fractions-mixed-numbers-tutorial.png'; ?>" alt="Adding Fractions &amp; Mixed Numbers Tutorial">
            </div>
            <div class="activity-open">
                <p><a href="http://www.montereyinstitute.org/courses/DevelopmentalMath/COURSE_TEXT_RESOURCE/U02_L3_T1_text_final.html" target="_blank" class="btn btn-primary" role="button">Open</a></p>
            </div>
        </div>
        
        <div class="activity">
            <h3><a href="http://www.montereyinstitute.org/courses/DevelopmentalMath/COURSE_TEXT_RESOURCE/U02_L3_T2_text_final.html" target="_blank" class="alt-link-color"><?php echo ++$activityCount . ". "; ?>Subtracting Fractions &amp; Mixed Numbers Tutorial</a></h3>
            <p>Learn how to subtract fractions and mixed numbers.</p>
            <span class="activity-ul-top bold">Topics Covered:</span>
            <ul class="activity-ul">
                <li class="italics">Subtracting Fractions with Like Denominators</li>
                <li class="italics">Subtracting Fractions with Unlike Denominators</li>
                <li class="italics">Subtracting Mixed Numbers</li>
                <li class="italics">Subtracting Mixed Numbers with Regrouping</li>
            </ul>
            <div class="activity-thumbnail">
                <img src="<?php echo $config['paths']['img']['content'] . '/subtracting-fractions-mixed-numbers-tutorial.png'; ?>" alt="Subtracting Fractions &amp; Mixed Numbers Tutorial">
            </div>
            <div class="activity-open">
                <p><a href="http://www.montereyinstitute.org/courses/DevelopmentalMath/COURSE_TEXT_RESOURCE/U02_L3_T2_text_final.html" target="_blank" class="btn btn-primary" role="button">Open</a></p>
            </div>
        </div>
        
        <div class="activity">
            <h3><a href="http://www.montereyinstitute.org/courses/DevelopmentalMath/COURSE_TEXT_RESOURCE/U02_L2_T1_text_final.html" target="_blank" class="alt-link-color"><?php echo ++$activityCount . ". "; ?>Multiplying Fractions &amp; Mixed Numbers Tutorial</a></h3>
            <p>Learn how to multiply fractions and mixed numbers.</p>
            <span class="activity-ul-top bold">Topics Covered:</span>
            <ul class="activity-ul">
                <li class="italics">Multiplying Two or More Fractions</li>
                <li class="italics">Multiplying Fractions by Whole Numbers</li>
                <li class="italics">Multiplying Two or More Mixed Numbers</li>
            </ul>
            <div class="activity-thumbnail">
                <img src="<?php echo $config['paths']['img']['content'] . '/multiplying-fractions-mixed-numbers-tutorial.png'; ?>" alt="Multiplying Fractions &amp; Mixed Numbers Tutorial">
            </div>
            <div class="activity-open">
                <p><a href="http://www.montereyinstitute.org/courses/DevelopmentalMath/COURSE_TEXT_RESOURCE/U02_L2_T1_text_final.html" target="_blank" class="btn btn-primary" role="button">Open</a></p>
            </div>
        </div>
        
        <div class="activity">
            <h3><a href="http://www.montereyinstitute.org/courses/DevelopmentalMath/COURSE_TEXT_RESOURCE/U02_L2_T2_text_final.html" target="_blank" class="alt-link-color"><?php echo ++$activityCount . ". "; ?>Dividing Fractions &amp; Mixed Numbers Tutorial</a></h3>
            <p>Learn how to divide fractions and mixed numbers.</p>
            <span class="activity-ul-top bold">Topics Covered:</span>
            <ul class="activity-ul">
                <li class="italics">Finding the Reciprocal of a Number</li>
                <li class="italics">Dividing Fractions, Mixed Numbers, &amp; Whole Numbers</li>
            </ul>
            <div class="activity-thumbnail">
                <img src="<?php echo $config['paths']['img']['content'] . '/dividing-fractions-mixed-numbers-tutorial.png'; ?>" alt="Dividing Fractions &amp; Mixed Numbers Tutorial">
            </div>
            <div class="activity-open">
                <p><a href="http://www.montereyinstitute.org/courses/DevelopmentalMath/COURSE_TEXT_RESOURCE/U02_L2_T2_text_final.html" target="_blank" class="btn btn-primary" role="button">Open</a></p>
            </div>
        </div>
        
        
        <div class="credits alt-link-color">
            <h4>Credits:</h4>
            <p><?php echo ++$refCount . ". "; ?><a href="https://www.khanacademy.org/math/arithmetic/fractions" target="_blank">Khan Academy</a>.</p>
            <p><?php echo ++$refCount . ". "; ?><a href="http://www.webmath.com/k8cf.html" target="_blank">WebMATH</a>.</p>
            <p><?php echo ++$refCount . ". "; ?><a href="http://www.montereyinstitute.org/courses/DevelopmentalMath/COURSE_TEXT_RESOURCE/U02_L1_T2_text_final.html" target="_blank">Monterey Institute for Technology and Education</a>.</p>
            <p><?php echo ++$refCount . ". "; ?><a href="http://www.montereyinstitute.org/courses/DevelopmentalMath/COURSE_TEXT_RESOURCE/U02_L1_T4_text_final.html" target="_blank">Monterey Institute for Technology and Education</a>.</p>
            <p><?php echo ++$refCount . ". "; ?><a href="http://www.montereyinstitute.org/courses/DevelopmentalMath/COURSE_TEXT_RESOURCE/U02_L3_T1_text_final.html" target="_blank">Monterey Institute for Technology and Education</a>.</p>
            <p><?php echo ++$refCount . ". "; ?><a href="http://www.montereyinstitute.org/courses/DevelopmentalMath/COURSE_TEXT_RESOURCE/U02_L3_T2_text_final.html" target="_blank">Monterey Institute for Technology and Education</a>.</p>
            <p><?php echo ++$refCount . ". "; ?><a href="http://www.montereyinstitute.org/courses/DevelopmentalMath/COURSE_TEXT_RESOURCE/U02_L2_T1_text_final.html" target="_blank">Monterey Institute for Technology and Education</a>.</p>
            <p><?php echo ++$refCount . ". "; ?><a href="http://www.montereyinstitute.org/courses/DevelopmentalMath/COURSE_TEXT_RESOURCE/U02_L2_T2_text_final.html" target="_blank">Monterey Institute for Technology and Education</a>.</p>
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