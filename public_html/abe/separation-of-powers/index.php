<?php 
$currentPage = "abe";
$pageTitle = "ABE Lab | Separation of Powers";
$pageDesc = "Distance learning activities about the separation of powers for Adult Basic Education students.";
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
    <li><a href="<?php echo $abeRoutes['socialStudies']['separationPowers']; ?>">Separation of Powers</a></li>
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
        <h2>Separation of Powers</h2>
        
        <?php preMediaBlock(); ?>
        
        <div class="activity">
            <h3><a href="http://nationalparalegal.edu/public_documents/courseware_asp_files/researchLitigation/JudicialStructure/IntroAndSeparation.asp" target="_blank" class="alt-link-color"><?php echo ++$activityCount . ". "; ?>Separation of Powers: Introduction</a></h3>
            <p>Read about the separation of powers and then complete the <a href="http://nationalparalegal.edu/public_documents/courseware_asp_files/researchLitigation/JudicialStructure/IntroAndSeparation_interact.asp" target="_blank">self-quiz</a> assessment to test your knowledge.</p>
            <div class="activity-thumbnail">
                <img src="<?php echo $config['paths']['img']['content'] . '/separation-of-powers-intro.png'; ?>" alt="Separation of Powers: Introduction">
            </div>
            <div class="activity-open">
                <p><a href="http://nationalparalegal.edu/public_documents/courseware_asp_files/researchLitigation/JudicialStructure/IntroAndSeparation.asp" target="_blank" class="btn btn-primary" role="button">Open</a></p>
            </div>
        </div>
        
        <div class="activity">
            <h3><a href="<?php echo $abeRoutes['socialStudies']['3BranchesGov']; ?>" class="alt-link-color"><?php echo ++$activityCount . ". "; ?>Three Branches of Government</a></h3>
            <p>Learn how power is distributed between three separate branches of government in the United States. <span class="glyphicon glyphicon-headphones" aria-hidden="true"></span></p>
            <div class="activity-thumbnail">
                <img src="<?php echo $config['paths']['img']['content'] . '/3-branches-government.jpg'; ?>" alt="Three Branches of Government">
            </div>
            <div class="activity-open">
                <p><a href="<?php echo $abeRoutes['socialStudies']['3BranchesGov']; ?>" class="btn btn-primary" role="button">Open</a></p>
            </div>
        </div>
        
        <div class="activity">
            <h3><a href="<?php echo $abeRoutes['socialStudies']['legislativeBranch']; ?>" class="alt-link-color"><?php echo ++$activityCount . ". "; ?>Legislative Branch of Government</a></h3>
            <p>Learn about the Legislative Branch of the U.S. government. <span class="glyphicon glyphicon-headphones" aria-hidden="true"></span></p>
            <div class="activity-thumbnail">
                <img src="<?php echo $config['paths']['img']['content'] . '/legislative-branch.jpg'; ?>" alt="Legislative Branch of Government">
            </div>
            <div class="activity-open">
                <p><a href="<?php echo $abeRoutes['socialStudies']['legislativeBranch']; ?>" class="btn btn-primary" role="button">Open</a></p>
            </div>
        </div>
        
        <div class="activity">
            <h3><a href="<?php echo $abeRoutes['socialStudies']['executiveBranch']; ?>" class="alt-link-color"><?php echo ++$activityCount . ". "; ?>Executive Branch of Government</a></h3>
            <p>Learn about the Executive Branch of the U.S. government. <span class="glyphicon glyphicon-headphones" aria-hidden="true"></span></p>
            <div class="activity-thumbnail">
                <img src="<?php echo $config['paths']['img']['content'] . '/executive-branch.jpg'; ?>" alt="Executive Branch of Government">
            </div>
            <div class="activity-open">
                <p><a href="<?php echo $abeRoutes['socialStudies']['executiveBranch']; ?>" class="btn btn-primary" role="button">Open</a></p>
            </div>
        </div>
        
        <div class="activity">
            <h3><a href="<?php echo $abeRoutes['socialStudies']['judicialBranch']; ?>" class="alt-link-color"><?php echo ++$activityCount . ". "; ?>Judicial Branch of Government</a></h3>
            <p>Learn about the Judicial Branch of the U.S. government. <span class="glyphicon glyphicon-headphones" aria-hidden="true"></span></p>
            <div class="activity-thumbnail">
                <img src="<?php echo $config['paths']['img']['content'] . '/judicial-branch.jpg'; ?>" alt="Judicial Branch of Government">
            </div>
            <div class="activity-open">
                <p><a href="<?php echo $abeRoutes['socialStudies']['judicialBranch']; ?>" class="btn btn-primary" role="button">Open</a></p>
            </div>
        </div>
        
        <div class="activity">
            <h3><a href="http://www.sheppardsoftware.com/usa_game/government/branches_government.htm" target="_blank" class="alt-link-color"><?php echo ++$activityCount . ". "; ?>Branches of Government Game</a></h3>
            <p>Identify the responsibilities of the three branches of government.</p>
            <p>Click the yellow arrow twice to begin the game. Drag and drop each responsibility under the correct branch of government. <span class="glyphicon glyphicon-headphones" aria-hidden="true"></span> <span class="glyphicon glyphicon-flash" aria-hidden="true"></span></p>
            <div class="activity-thumbnail">
                <img src="<?php echo $config['paths']['img']['content'] . '/branches-of-government-game.png'; ?>" alt="Branches of Government Game">
            </div>
            <div class="activity-open">
                <p><a href="http://www.sheppardsoftware.com/usa_game/government/branches_government.htm" target="_blank" class="btn btn-primary" role="button">Open</a></p>
            </div>
        </div>
        
        
        <div class="credits alt-link-color">
            <h4>Credits:</h4>
            <p><?php echo ++$refCount . ". "; ?><a href="http://nationalparalegal.edu/public_documents/courseware_asp_files/researchLitigation/JudicialStructure/IntroAndSeparation.asp" target="_blank">National Paralegal College</a>.</p>
            <p><?php echo ++$refCount . ". "; ?><a href="http://ed.ted.com/lessons/how-is-power-divided-in-the-united-states-government-belinda-stutzman" target="_blank">TED-Ed</a>.</p>
            <p><?php echo ++$refCount . ". "; ?><a href="http://www.mometrix.com/academy/legislative-branch/" target="_blank">Mometrix Test Preparation</a>.</p>
            <p><?php echo ++$refCount . ". "; ?><a href="http://www.mometrix.com/academy/executive-branch/" target="_blank">Mometrix Test Preparation</a>.</p>
            <p><?php echo ++$refCount . ". "; ?><a href="http://www.mometrix.com/academy/judicial-branch/" target="_blank">Mometrix Test Preparation</a>.</p>
            <p><?php echo ++$refCount . ". "; ?><a href="http://www.sheppardsoftware.com/usa_game/government/branches_government.htm" target="_blank">Sheppard Software</a>.</p>
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