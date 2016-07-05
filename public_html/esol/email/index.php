<?php 
$currentPage = "esol";
$pageTitle = "Email | ESOL Lab";
$pageDesc = "Distance learning activities about email for English for Speakers of Other Languages students.";
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
    <li><a href="<?php echo $esolRoutes['compLit']['email']; ?>">Email</a></li>
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
        <h2>Email</h2>
        
        <?php preMediaBlock(); ?>
        
        <div class="activity">
            <h3><a href="https://www.digitallearn.org/courses/intro-to-email" target="_blank" class="alt-link-color"><?php echo ++$activityCount . ". "; ?>Intro to Email: Part One</a></h3>
            <p>DigitalLearn.org offers free self-paced tutorials about using Email. After selecting the above link, click on the "Start Course" button to begin the activity. <span class="glyphicon glyphicon-headphones" aria-hidden="true"></span> <span class="glyphicon glyphicon-flash" aria-hidden="true"></span></p>
            <span class="activity-ul-top bold">Sections:</span>
            <ul class="activity-ul">
                <li class="italics">What is Email?</li>
                <li class="italics">Sign Up for Email</li>
                <li class="italics">Log In</li>
                <li class="italics">Open Messages &amp; Reply</li>
                <li class="italics">Compose &amp; Send</li>
            </ul>
            <div class="activity-thumbnail">
                <img src="<?php echo $config['paths']['img']['content'] . '/intro-to-email.png'; ?>" alt="Intro to Email: Part One">
            </div>
            <div class="activity-open">
                <p><a href="https://www.digitallearn.org/courses/intro-to-email" target="_blank" class="btn btn-primary" role="button">Open</a></p>
            </div>
        </div>
        
        <div class="activity">
            <h3><a href="http://www.gcflearnfree.org/email101" target="_blank" class="alt-link-color"><?php echo ++$activityCount . ". "; ?>Email 101</a></h3>
            <p>GCFLearnFree.org offers free self-paced tutorials about email. <span class="glyphicon glyphicon-headphones" aria-hidden="true"></span> <span class="glyphicon glyphicon-flash" aria-hidden="true"></span></p>
            <div class="activity-thumbnail">
                <img src="<?php echo $config['paths']['img']['content'] . '/email-101.png'; ?>" alt="Email 101">
            </div>
            <div class="activity-open">
                <p><a href="http://www.gcflearnfree.org/email101" target="_blank" class="btn btn-primary" role="button">Open</a></p>
            </div>
        </div>
        
        <div class="activity">
            <h3><a href="http://www.gcflearnfree.org/gmail" target="_blank" class="alt-link-color"><?php echo ++$activityCount . ". "; ?>Using Gmail</a></h3>
            <p>GCFLearnFree.org offers free self-paced tutorials about Gmail. <span class="glyphicon glyphicon-headphones" aria-hidden="true"></span> <span class="glyphicon glyphicon-flash" aria-hidden="true"></span></p>
            <div class="activity-thumbnail">
                <img src="<?php echo $config['paths']['img']['content'] . '/using-gmail.png'; ?>" alt="Using Gmail">
            </div>
            <div class="activity-open">
                <p><a href="http://www.gcflearnfree.org/gmail" target="_blank" class="btn btn-primary" role="button">Open</a></p>
            </div>
        </div>
        
        
        <div class="credits alt-link-color">
            <h4>Credits:</h4>
            <p><?php echo ++$refCount . ". "; ?><a href="https://www.digitallearn.org/courses" target="_blank">DigitalLearn.org</a>.</p>
            <p><?php echo ++$refCount . ". "; ?><a href="http://www.gcflearnfree.org/email101" target="_blank">GCFLearnFree.org</a>.</p>
            <p><?php echo ++$refCount . ". "; ?><a href="http://www.gcflearnfree.org/gmail" target="_blank">GCFLearnFree.org</a>.</p>
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