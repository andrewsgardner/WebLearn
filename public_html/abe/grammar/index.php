<?php 
$currentPage = "abe";
$pageTitle = "Grammar | ABE Lab";
$pageDesc = "Grammar distance learning activities for Adult Basic Education students.";
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
    <li><a href="<?php echo $abeRoutes['english']['grammar']; ?>">Grammar</a></li>
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
        <h2>Grammar</h2>
        
        <?php preMediaBlock(); ?>
        
        <div class="activity">
            <h3><a href="<?php echo $abeRoutes['english']['toTooTwo']; ?>" class="alt-link-color"><?php echo ++$activityCount . ". "; ?>To, Too, Two</a></h3>
            <p>Learn about the differences between 'to,' 'too,' and 'two.' Watch the video tutorial and then complete the practice exercise. <span class="glyphicon glyphicon-headphones" aria-hidden="true"></span></p>
            <div class="activity-thumbnail">
                <img src="<?php echo $config['paths']['img']['content'] . '/to-too-two.png'; ?>" alt="To, Too, Two">
            </div>
            <div class="activity-open">
                <p><a href="<?php echo $abeRoutes['english']['toTooTwo']; ?>" class="btn btn-primary" role="button">Open</a></p>
            </div>
        </div>
        
        <div class="activity">
            <h3><a href="http://www.engvid.com/commonly-confused-words-in-english-theyre-there-their/" target="_blank" class="alt-link-color"><?php echo ++$activityCount . ". "; ?>They're, Their, There</a></h3>
            <p>Learn about the differences between 'they're,' 'their,' and 'there.' Watch the video tutorial and then answer the practice questions. <span class="glyphicon glyphicon-headphones" aria-hidden="true"></span></p>
            <div class="activity-thumbnail">
                <img src="<?php echo $config['paths']['img']['content'] . '/theyre-their-there.png'; ?>" alt="They're, Their, There">
            </div>
            <div class="activity-open">
                <p><a href="http://www.engvid.com/commonly-confused-words-in-english-theyre-there-their/" target="_blank" class="btn btn-primary" role="button">Open</a></p>
            </div>
        </div>
        
        <div class="activity">
            <h3><a href="<?php echo $abeRoutes['english']['yourYoure']; ?>" class="alt-link-color"><?php echo ++$activityCount . ". "; ?>Your vs. You're</a></h3>
            <p>Learn about the differences between 'your' and 'you're.' Watch the video tutorial and then answer the practice questions. <span class="glyphicon glyphicon-headphones" aria-hidden="true"></span></p>
            <div class="activity-thumbnail">
                <img src="<?php echo $config['paths']['img']['content'] . '/your-youre.png'; ?>" alt="Your vs. You're">
            </div>
            <div class="activity-open">
                <p><a href="<?php echo $abeRoutes['english']['yourYoure']; ?>" class="btn btn-primary" role="button">Open</a></p>
            </div>
        </div>
        
        
        <div class="credits alt-link-color">
            <h4>Credits:</h4>
            <p><?php echo ++$refCount . ". "; ?><a href="<?php echo $config['paths']['salcStcc']; ?>" target="_blank">Andrew S. Gardner: Springfield Adult Learning Center</a>, <a href="http://www.engvid.com/confused-words-to-too-two/" target="_blank">engVID.com</a>.</p>
            <p><?php echo ++$refCount . ". "; ?><a href="http://www.engvid.com/commonly-confused-words-in-english-theyre-there-their/" target="_blank">engVID.com</a>.</p>
            <p><?php echo ++$refCount . ". "; ?><a href="<?php echo $config['paths']['salcStcc']; ?>" target="_blank">Andrew S. Gardner: Springfield Adult Learning Center</a>, <a href="http://www.engvid.com/confused-words-youre-your/" target="_blank">engVID.com</a>.</p>
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