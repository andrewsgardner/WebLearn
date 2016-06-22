<?php 
$currentPage = "abe";
$pageTitle = "Writing | ABE Lab";
$pageDesc = "Writing distance learning activities for Adult Basic Education students.";
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
    <li><a href="<?php echo $abeRoutes['english']['writing']; ?>">Writing</a></li>
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
        <h2>Writing</h2>
        
        <?php preMediaBlock(); ?>
        
        <div class="activity">
            <h3><a href="<?php echo $abeRoutes['english']['persuasiveEssay']; ?>" class="alt-link-color"><?php echo ++$activityCount . ". "; ?>Persuasive Essay</a></h3>
            <p>Learn about the necessary components for writing an effective persuasive essay. <span class="glyphicon glyphicon-headphones" aria-hidden="true"></span></p>
            <div class="activity-thumbnail">
                <img src="<?php echo $config['paths']['img']['content'] . '/persuasive-essay.png'; ?>" alt="Persuasive Essay">
            </div>
            <div class="activity-open">
                <p><a href="<?php echo $abeRoutes['english']['persuasiveEssay']; ?>" class="btn btn-primary" role="button">Open</a></p>
            </div>
        </div>
        
        <div class="activity">
            <h3><a href="<?php echo $abeRoutes['english']['thesisStatement']; ?>" class="alt-link-color"><?php echo ++$activityCount . ". "; ?>Drafting a Thesis Statement</a></h3>
            <p>Learn how to write an effective thesis statement. <span class="glyphicon glyphicon-headphones" aria-hidden="true"></span></p>
            <div class="activity-thumbnail">
                <img src="<?php echo $config['paths']['img']['content'] . '/drafting-thesis-statement.png'; ?>" alt="Drafting a Thesis Statement">
            </div>
            <div class="activity-open">
                <p><a href="<?php echo $abeRoutes['english']['thesisStatement']; ?>" class="btn btn-primary" role="button">Open</a></p>
            </div>
        </div>
        
        <div class="activity">
            <h3><a href="<?php echo $abeRoutes['english']['bodyParagraphs']; ?>" class="alt-link-color"><?php echo ++$activityCount . ". "; ?>Drafting Body Paragraphs</a></h3>
            <p>Learn how to write effective body paragraphs for your essay. <span class="glyphicon glyphicon-headphones" aria-hidden="true"></span></p>
            <div class="activity-thumbnail">
                <img src="<?php echo $config['paths']['img']['content'] . '/drafting-body-paragraphs.png'; ?>" alt="Drafting Body Paragraphs">
            </div>
            <div class="activity-open">
                <p><a href="<?php echo $abeRoutes['english']['bodyParagraphs']; ?>" class="btn btn-primary" role="button">Open</a></p>
            </div>
        </div>
        
        <div class="activity">
            <h3><a href="<?php echo $abeRoutes['english']['draftingConclusions']; ?>" class="alt-link-color"><?php echo ++$activityCount . ". "; ?>Drafting Conclusions</a></h3>
            <p>Learn how to write an effective conclusion to your essay. <span class="glyphicon glyphicon-headphones" aria-hidden="true"></span></p>
            <div class="activity-thumbnail">
                <img src="<?php echo $config['paths']['img']['content'] . '/drafting-conclusions.png'; ?>" alt="Drafting Conclusions">
            </div>
            <div class="activity-open">
                <p><a href="<?php echo $abeRoutes['english']['draftingConclusions']; ?>" class="btn btn-primary" role="button">Open</a></p>
            </div>
        </div>
        
        
        <div class="credits alt-link-color">
            <h4>Credits:</h4>
            <p><?php echo ++$refCount . ". "; ?><a href="http://www.mometrix.com/academy/persuasive-essay/" target="_blank">Mometrix Test Preparation</a>.</p>
            <p><?php echo ++$refCount . ". "; ?><a href="http://www.mometrix.com/academy/drafting-a-thesis-statement/" target="_blank">Mometrix Test Preparation</a>.</p>
            <p><?php echo ++$refCount . ". "; ?><a href="http://www.mometrix.com/academy/drafting-body-paragraphs/" target="_blank">Mometrix Test Preparation</a>.</p>
            <p><?php echo ++$refCount . ". "; ?><a href="http://www.mometrix.com/academy/drafting-conclusions/" target="_blank">Mometrix Test Preparation</a>.</p>
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