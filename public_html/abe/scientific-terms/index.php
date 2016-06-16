<?php 
$currentPage = "abe";
$pageTitle = "ABE Lab | Scientific Terms";
$pageDesc = "Distance learning activities about common scientific terms for Adult Basic Education students.";
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
    <li><a href="<?php echo $abeRoutes['science']['scientificTerms']; ?>">Scientific Terms</a></li>
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
        <h2>Scientific Terms</h2>
        
        <?php preMediaBlock(); ?>
        
        <div class="activity">
            <h3><a href="https://quizlet.com/35310714/flashcards" target="_blank" class="alt-link-color"><?php echo ++$activityCount . ". "; ?>HiSET Science Vocab: General</a></h3>
            <p>Review the definitions of commonly used general scientific terms.</p>
            <div class="activity-thumbnail">
                <img src="<?php echo $config['paths']['img']['content'] . '/hiset-science-vocab-general.png'; ?>" alt="HiSET Science Vocab: General">
            </div>
            <div class="activity-open">
                <p><a href="https://quizlet.com/35310714/flashcards" target="_blank" class="btn btn-primary" role="button">Open</a></p>
            </div>
        </div>
        
        <div class="activity">
            <h3><a href="https://quizlet.com/35325403/flashcards" target="_blank" class="alt-link-color"><?php echo ++$activityCount . ". "; ?>HiSET Science Vocab: Experiments</a></h3>
            <p>Review the definitions of commonly used terms about scientific experiments.</p>
            <div class="activity-thumbnail">
                <img src="<?php echo $config['paths']['img']['content'] . '/hiset-science-vocab-experiments.png'; ?>" alt="HiSET Science Vocab: Experiments">
            </div>
            <div class="activity-open">
                <p><a href="https://quizlet.com/35325403/flashcards" target="_blank" class="btn btn-primary" role="button">Open</a></p>
            </div>
        </div>
        
        
        <div class="credits alt-link-color">
            <h4>Credits:</h4>
            <p><?php echo ++$refCount . ". "; ?><a href="https://quizlet.com/35310714/science-vocab-1-flash-cards/" target="_blank">Quizlet: Science vocab #1</a>.</p>
            <p><?php echo ++$refCount . ". "; ?><a href="https://quizlet.com/35325403/science-vocab-experiments-flash-cards/" target="_blank">Quizlet: Science Vocab - Experiments</a>.</p>
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