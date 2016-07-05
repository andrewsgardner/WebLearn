<?php 
$currentPage = "esol";
$pageTitle = "Workplace | ESOL Lab";
$pageDesc = "Distance learning activities about the workplace for English for Speakers of Other Languages students.";
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
    <li><a href="<?php echo $esolRoutes['specialTopics']['workplace']; ?>">Workplace</a></li>
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
        <h2>Workplace</h2>
        
        <?php preMediaBlock(); ?>
        
        <div class="activity">
            <h3><a href="http://caw.aaca-boston.org/" target="_blank" class="alt-link-color"><?php echo ++$activityCount . ". "; ?>Communicating at Work</a></h3>
            <p>Learn about important workplace communication skills. These lessons will teach you about talking with co-workers and supervisors. Also, you will learn what to do when you don't understand something. <span class="glyphicon glyphicon-headphones" aria-hidden="true"></span> <span class="glyphicon glyphicon-flash" aria-hidden="true"></span></p>
            <div class="activity-thumbnail">
                <img src="<?php echo $config['paths']['img']['content'] . '/aaca-boston.png'; ?>" alt="Communicating at Work">
            </div>
            <div class="activity-open">
                <p><a href="http://caw.aaca-boston.org/" target="_blank" class="btn btn-primary" role="button">Open</a></p>
            </div>
        </div>
        
        <div class="activity">
            <h3><a href="https://www.englishclub.com/business-english/" target="_blank" class="alt-link-color"><?php echo ++$activityCount . ". "; ?>Business English</a></h3>
            <p>Lessons for English learners who are interested in business.</p>
            <div class="activity-thumbnail">
                <img src="<?php echo $config['paths']['img']['content'] . '/business-english.png'; ?>" alt="Business English">
            </div>
            <div class="activity-open">
                <p><a href="https://www.englishclub.com/business-english/" target="_blank" class="btn btn-primary" role="button">Open</a></p>
            </div>
        </div>
        
        <div class="activity">
            <h3><a href="https://www.englishclub.com/english-for-work/" target="_blank" class="alt-link-color"><?php echo ++$activityCount . ". "; ?>English for Work</a></h3>
            <p>Learn the English necessary for working in the following industries or occupations; police, hotels, airlines, restaurants, tourism, transportation, and hospitals.</p>
            <div class="activity-thumbnail">
                <img src="<?php echo $config['paths']['img']['content'] . '/english-for-work.png'; ?>" alt="English for Work">
            </div>
            <div class="activity-open">
                <p><a href="https://www.englishclub.com/english-for-work/" target="_blank" class="btn btn-primary" role="button">Open</a></p>
            </div>
        </div>
        
        
        <div class="credits alt-link-color">
            <h4>Credits:</h4>
            <p><?php echo ++$refCount . ". "; ?><a href="http://caw.aaca-boston.org/" target="_blank">Asian American Civic Association</a>.</p>
            <p><?php echo ++$refCount . ". "; ?><a href="https://www.englishclub.com/business-english/" target="_blank">EnglishClub</a>.</p>
            <p><?php echo ++$refCount . ". "; ?><a href="https://www.englishclub.com/english-for-work/" target="_blank">EnglishClub</a>.</p>
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