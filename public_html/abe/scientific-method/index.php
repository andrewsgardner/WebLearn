<?php 
$currentPage = "abe";
$pageTitle = "The Scientific Method | ABE Lab";
$pageDesc = "Distance learning activities about the scientific method for Adult Basic Education students.";
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
    <li><a href="<?php echo $abeRoutes['science']['scientificMethod']; ?>">The Scientific Method</a></li>
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
        <h2>The Scientific Method</h2>
        
        <?php preMediaBlock(); ?>
        
        <div class="activity">
            <h3><a href="<?php echo $abeRoutes['science']['scientificMethodIntro']; ?>" class="alt-link-color"><?php echo ++$activityCount . ". "; ?>The Scientific Method: Introduction</a></h3>
            <p>Learn about the scientific method and how it's used. <span class="glyphicon glyphicon-headphones" aria-hidden="true"></span></p>
            <div class="activity-thumbnail">
                <img src="<?php echo $config['paths']['img']['content'] . '/scientific-method-intro.jpg'; ?>" alt="The Scientific Method: Introduction">
            </div>
            <div class="activity-open">
                <p><a href="<?php echo $abeRoutes['science']['scientificMethodIntro']; ?>" class="btn btn-primary" role="button">Open</a></p>
            </div>
        </div>
        
        <div class="activity">
            <h3><a href="https://quizlet.com/36624300/flashcards" target="_blank" class="alt-link-color"><?php echo ++$activityCount . ". "; ?>The Scientific Method: Flashcards</a></h3>
            <p>Review the steps of the scientific method along with other related terms.</p>
            <div class="activity-thumbnail">
                <img src="<?php echo $config['paths']['img']['content'] . '/the-scientific-method-flashcards.png'; ?>" alt="The Scientific Method: Flashcards">
            </div>
            <div class="activity-open">
                <p><a href="https://quizlet.com/36624300/flashcards" target="_blank" class="btn btn-primary" role="button">Open</a></p>
            </div>
        </div>
        
        <div class="activity">
            <h3><a href="http://www.softschools.com/quizzes/science/the_scientific_method/quiz468.html" target="_blank" class="alt-link-color"><?php echo ++$activityCount . ". "; ?>The Scientific Method: Practice Questions</a></h3>
            <p>Practice identifying steps of the scientific method and other related concepts. After selecting the above link, click on the orange button to start the activity.</p>
            <div class="activity-thumbnail">
                <img src="<?php echo $config['paths']['img']['content'] . '/the-scientific-method-practice-questions.png'; ?>" alt="The Scientific Method: Practice Questions">
            </div>
            <div class="activity-open">
                <p><a href="http://www.softschools.com/quizzes/science/the_scientific_method/quiz468.html" target="_blank" class="btn btn-primary" role="button">Open</a></p>
            </div>
        </div>
        
        
        <div class="credits alt-link-color">
            <h4>Credits:</h4>
            <p><?php echo ++$refCount . ". "; ?><a href="http://www.mometrix.com/academy/the-scientific-method/" target="_blank">Mometrix Test Preparation</a>.</p>
            <p><?php echo ++$refCount . ". "; ?><a href="https://quizlet.com/36624300/scientific-method-steps-flash-cards/" target="_blank">Quizlet: Scientific Method (steps)</a>.</p>
            <p><?php echo ++$refCount . ". "; ?><a href="http://www.softschools.com/quizzes/science/the_scientific_method/quiz468.html" target="_blank">softschools.com</a>.</p>
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