<?php 
$currentPage = "esol";
$pageTitle = "Parents | ESOL Lab";
$pageDesc = "Parenting distance learning activities for English for Speakers of Other Languages students.";
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
    <li><a href="<?php echo $esolRoutes['specialTopics']['parents']; ?>">Parents</a></li>
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
        <h2>Parents</h2>
        
        <?php preMediaBlock(); ?>
        
        <div class="activity">
            <h3><a href="https://www.englishclub.com/kids/" target="_blank" class="alt-link-color"><?php echo ++$activityCount . ". "; ?>English for Kids</a></h3>
            <p>Stories and puzzles to help your children learn English. <span class="glyphicon glyphicon-headphones" aria-hidden="true"></span> <span class="glyphicon glyphicon-flash" aria-hidden="true"></span></p>
            <div class="activity-thumbnail">
                <img src="<?php echo $config['paths']['img']['content'] . '/english-for-kids.png'; ?>" alt="English for Kids">
            </div>
            <div class="activity-open">
                <p><a href="https://www.englishclub.com/kids/" target="_blank" class="btn btn-primary" role="button">Open</a></p>
            </div>
        </div>
        
        <div class="activity">
            <h3><a href="https://www.englishclub.com/babies/" target="_blank" class="alt-link-color"><?php echo ++$activityCount . ". "; ?>English for Babies &amp; Parents</a></h3>
            <p>Simple stories, rhymes, and games to learn English with your baby or toddler. <span class="glyphicon glyphicon-headphones" aria-hidden="true"></span> <span class="glyphicon glyphicon-flash" aria-hidden="true"></span></p>
            <div class="activity-thumbnail">
                <img src="<?php echo $config['paths']['img']['content'] . '/english-for-babies-and-parents.png'; ?>" alt="English for Babies &amp; Parents">
            </div>
            <div class="activity-open">
                <p><a href="https://www.englishclub.com/babies/" target="_blank" class="btn btn-primary" role="button">Open</a></p>
            </div>
        </div>
        
        
        <div class="credits alt-link-color">
            <h4>Credits:</h4>
            <p><?php echo ++$refCount . ". "; ?><a href="https://www.englishclub.com/kids/" target="_blank">EnglishClub</a>.</p>
            <p><?php echo ++$refCount . ". "; ?><a href="https://www.englishclub.com/babies/" target="_blank">EnglishClub</a>.</p>
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