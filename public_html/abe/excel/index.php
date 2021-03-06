<?php 
$currentPage = "abe";
$pageTitle = "Microsoft Excel | ABE Lab";
$pageDesc = "Distance learning activities about Microsoft Excel for Adult Basic Education students.";
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
    <li><a href="<?php echo $abeRoutes['compLit']['excel']; ?>">Microsoft Excel</a></li>
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
        <h2>Microsoft Excel</h2>
        
        <?php preMediaBlock(); ?>
        
        <div class="activity">
            <h3><a href="http://www.gcflearnfree.org/excel2013" target="_blank" class="alt-link-color"><?php echo ++$activityCount . ". "; ?>Microsoft Excel 2013 Tutorials</a></h3>
            <p>GCFLearnFree.org offers free self-paced tutorials in Microsoft Excel 2013. After selecting the above link, begin with tutorial number four in the Excel Basics section. <span class="glyphicon glyphicon-headphones" aria-hidden="true"></span> <span class="glyphicon glyphicon-flash" aria-hidden="true"></span></p>
            <div class="activity-thumbnail">
                <img src="<?php echo $config['paths']['img']['content'] . '/microsoft-excel-2013-tutorials.png'; ?>" alt="Microsoft Excel 2013 Tutorials">
            </div>
            <div class="activity-open">
                <p><a href="http://www.gcflearnfree.org/excel2013" target="_blank" class="btn btn-primary" role="button">Open</a></p>
            </div>
        </div>
        
        <div class="activity">
            <h3><a href="https://excelexposure.com/" target="_blank" class="alt-link-color"><?php echo ++$activityCount . ". "; ?>Excel Exposure</a></h3>
            <p>Excelexposure.com offers intermediate and advanced tutorials in Microsoft Excel. Complete the above <a href="http://www.gcflearnfree.org/excel2013" target="_blank">GCFLearnFree.org tutorials</a> before starting this activity. <span class="glyphicon glyphicon-headphones" aria-hidden="true"></span></p>
            <div class="activity-thumbnail">
                <img src="<?php echo $config['paths']['img']['content'] . '/excel-exposure.png'; ?>" alt="Excel Exposure">
            </div>
            <div class="activity-open">
                <p><a href="https://excelexposure.com/" target="_blank" class="btn btn-primary" role="button">Open</a></p>
            </div>
        </div>
        
        
        <div class="credits alt-link-color">
            <h4>Credits:</h4>
            <p><?php echo ++$refCount . ". "; ?><a href="http://www.gcflearnfree.org/excel2013" target="_blank">GCFLearnFree.org</a>.</p>
            <p><?php echo ++$refCount . ". "; ?><a href="https://excelexposure.com/" target="_blank">Excel Exposure</a>.</p>
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