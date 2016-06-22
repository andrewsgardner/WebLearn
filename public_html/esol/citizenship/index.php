<?php 
$currentPage = "esol";
$pageTitle = "Citizenship | ESOL Lab";
$pageDesc = "Citizenship distance learning activities for English for Speakers of Other Languages students.";
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
    <li><a href="<?php echo $esolRoutes['specialTopics']['citizenship']; ?>">Citizenship</a></li>
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
        <h2>Citizenship</h2>
        
        <?php preMediaBlock(); ?>
        
        <div class="activity">
            <h3><a href="http://www.proliteracyednet.org/articles.asp?mcid=1&cid=13&rid=331" target="_blank" class="alt-link-color"><?php echo ++$activityCount . ". "; ?>ProLiteracy - Reading Questions Out Loud</a></h3>
            <p>Practice reading questions out loud for your naturalization test. <span class="glyphicon glyphicon-headphones" aria-hidden="true"></span> <span class="glyphicon glyphicon-flash" aria-hidden="true"></span></p>
            <div class="activity-thumbnail">
                <img src="<?php echo $config['paths']['img']['content'] . '/proliteracy.png'; ?>" alt="ProLiteracy - Reading Questions Out Loud">
            </div>
            <div class="activity-open">
                <p><a href="http://www.proliteracyednet.org/articles.asp?mcid=1&cid=13&rid=331" target="_blank" class="btn btn-primary" role="button">Open</a></p>
            </div>
        </div>
        
        <div class="activity">
            <h3><a href="http://americanhistory.si.edu/citizenship/index.html" target="_blank" class="alt-link-color"><?php echo ++$activityCount . ". "; ?>Preparing for the Oath</a></h3>
            <p>Learn about U.S. history and civics to prepare for taking the naturalization test. <span class="glyphicon glyphicon-headphones" aria-hidden="true"></span> <span class="glyphicon glyphicon-flash" aria-hidden="true"></span></p>
            <div class="activity-thumbnail">
                <img src="<?php echo $config['paths']['img']['content'] . '/preparing-for-the-oath.png'; ?>" alt="Preparing for the Oath">
            </div>
            <div class="activity-open">
                <p><a href="http://americanhistory.si.edu/citizenship/index.html" target="_blank" class="btn btn-primary" role="button">Open</a></p>
            </div>
        </div>
        
        <div class="activity">
            <h3><a href="https://www.uscis.gov/sites/default/files/USCIS/Office%20of%20Citizenship/Citizenship%20Resource%20Center%20Site/Section%20Items/INTERACTIVE%20Section%20Items/Vocabulary%20Activities%20for%20the%20Naturalization%20Test/uscis-vocabulary-test-3/uscis_test3.html" target="_blank" class="alt-link-color"><?php echo ++$activityCount . ". "; ?>Understanding Commands for the Naturalization Interview</a></h3>
            <p>This activity will help you prepare for the naturalization interview and test. <span class="glyphicon glyphicon-headphones" aria-hidden="true"></span> <span class="glyphicon glyphicon-flash" aria-hidden="true"></span></p>
            <div class="activity-thumbnail">
                <img src="<?php echo $config['paths']['img']['content'] . '/understanding-commands-naturalization.png'; ?>" alt="Understanding Commands for the Naturalization Interview">
            </div>
            <div class="activity-open">
                <p><a href="https://www.uscis.gov/sites/default/files/USCIS/Office%20of%20Citizenship/Citizenship%20Resource%20Center%20Site/Section%20Items/INTERACTIVE%20Section%20Items/Vocabulary%20Activities%20for%20the%20Naturalization%20Test/uscis-vocabulary-test-3/uscis_test3.html" target="_blank" class="btn btn-primary" role="button">Open</a></p>
            </div>
        </div>
        
        <div class="activity">
            <h3><a href="<?php echo $esolRoutes['specialTopics']['natInterviewVid']; ?>" class="alt-link-color"><?php echo ++$activityCount . ". "; ?>Naturalization Interview Video</a></h3>
            <p>Watch a sample naturalization interview. <span class="glyphicon glyphicon-headphones" aria-hidden="true"></span></p>
            <div class="activity-thumbnail">
                <img src="<?php echo $config['paths']['img']['content'] . '/naturalization-interview-video.jpg'; ?>" alt="Naturalization Interview Video">
            </div>
            <div class="activity-open">
                <p><a href="<?php echo $esolRoutes['specialTopics']['natInterviewVid']; ?>" class="btn btn-primary" role="button">Open</a></p>
            </div>
        </div>
        
        
        <div class="credits alt-link-color">
            <h4>Credits:</h4>
            <p><?php echo ++$refCount . ". "; ?><a href="http://www.proliteracyednet.org/articles.asp?mcid=1&cid=13&rid=331" target="_blank">ProLiteracy Education Network</a>.</p>
            <p><?php echo ++$refCount . ". "; ?><a href="http://americanhistory.si.edu/citizenship/index.html" target="_blank">National Museum of American History, Kenneth E. Behring Center</a>.</p>
            <p><?php echo ++$refCount . ". "; ?><a href="https://www.uscis.gov/sites/default/files/USCIS/Office%20of%20Citizenship/Citizenship%20Resource%20Center%20Site/Section%20Items/INTERACTIVE%20Section%20Items/Vocabulary%20Activities%20for%20the%20Naturalization%20Test/uscis-vocabulary-test-3/uscis_test3.html" target="_blank">U.S. Citizenship and Immigration Services</a>.</p>
            <p><?php echo ++$refCount . ". "; ?><a href="https://www.youtube.com/watch?v=SDb9_CqPUTQ&feature=youtu.be" target="_blank">U.S. Citizenship and Immigration Services's YouTube Channel</a>.</p>
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