<?php 
$currentPage = "abe";
$pageTitle = "The Great Depression | ABE Lab";
$pageDesc = "Distance learning activities about the great depression for Adult Basic Education students.";
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
    <li><a href="<?php echo $abeRoutes['socialStudies']['greatDepression']; ?>">The Great Depression</a></li>
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
        <h2>The Great Depression</h2>
        
        <?php preMediaBlock(); ?>
        
        <div class="activity">
            <h3><a href="http://www.history.com/topics/great-depression" target="_blank" class="alt-link-color"><?php echo ++$activityCount . ". "; ?>The Great Depression</a></h3>
            <p>Watch a video and then read an article about the Great Depression. <span class="glyphicon glyphicon-headphones" aria-hidden="true"></span> <span class="glyphicon glyphicon-flash" aria-hidden="true"></span></p>
            <div class="activity-thumbnail">
                <img src="<?php echo $config['paths']['img']['content'] . '/the-great-depression.png'; ?>" alt="The Great Depression">
            </div>
            <div class="activity-open">
                <p><a href="http://www.history.com/topics/great-depression" target="_blank" class="btn btn-primary" role="button">Open</a></p>
            </div>
        </div>
        
        <div class="activity">
            <h3><a href="http://www.pbs.org/fmc/timeline/estockmktcrash.htm" target="_blank" class="alt-link-color"><?php echo ++$activityCount . ". "; ?>Stock Market Crash of 1929</a></h3>
            <p>Read about the stock market crash of 1929.</p>
            <div class="activity-thumbnail">
                <img src="<?php echo $config['paths']['img']['content'] . '/stock-market-crash-1929.png'; ?>" alt="Stock Market Crash of 1929">
            </div>
            <div class="activity-open">
                <p><a href="http://www.pbs.org/fmc/timeline/estockmktcrash.htm" target="_blank" class="btn btn-primary" role="button">Open</a></p>
            </div>
        </div>
        
        <div class="activity">
            <h3><a href="http://www.ushistory.org/us/48e.asp" target="_blank" class="alt-link-color"><?php echo ++$activityCount . ". "; ?>Social &amp; Cultural Effects of the Depression</a></h3>
            <p>Read about social and cultural changes that took place due to the Great Depression.</p>
            <div class="activity-thumbnail">
                <img src="<?php echo $config['paths']['img']['content'] . '/social-cultural-effects-depression.png'; ?>" alt="Social &amp; Cultural Effects of the Depression">
            </div>
            <div class="activity-open">
                <p><a href="http://www.ushistory.org/us/48e.asp" target="_blank" class="btn btn-primary" role="button">Open</a></p>
            </div>
        </div>
        
        <div class="activity">
            <h3><a href="http://www.pbs.org/wgbh/americanexperience/features/general-article/dustbowl-new-deal/" target="_blank" class="alt-link-color"><?php echo ++$activityCount . ". "; ?>The New Deal</a></h3>
            <p>Read about President Franklin D. Roosevelt's New Deal for the American people.</p>
            <div class="activity-thumbnail">
                <img src="<?php echo $config['paths']['img']['content'] . '/the-new-deal.png'; ?>" alt="The New Deal">
            </div>
            <div class="activity-open">
                <p><a href="http://www.pbs.org/wgbh/americanexperience/features/general-article/dustbowl-new-deal/" target="_blank" class="btn btn-primary" role="button">Open</a></p>
            </div>
        </div>
        
        
        <div class="credits alt-link-color">
            <h4>Credits:</h4>
            <p><?php echo ++$refCount . ". "; ?><a href="http://www.history.com/topics/great-depression" target="_blank">history.com</a>.</p>
            <p><?php echo ++$refCount . ". "; ?><a href="http://www.pbs.org/fmc/timeline/estockmktcrash.htm" target="_blank">PBS</a>.</p>
            <p><?php echo ++$refCount . ". "; ?><a href="http://www.ushistory.org/us/48e.asp" target="_blank">U.S. History: Pre-Columbian to the New Millennium</a>.</p>
            <p><?php echo ++$refCount . ". "; ?><a href="http://www.pbs.org/wgbh/americanexperience/features/general-article/dustbowl-new-deal/" target="_blank">PBS</a>.</p>
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