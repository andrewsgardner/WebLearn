<?php 
$currentPage = "abe";
$pageTitle = "Measurement | ABE Lab";
$pageDesc = "Distance learning activities about measurement and unit conversion for Adult Basic Education students.";
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
    <li><a href="<?php echo $abeRoutes['math']['measurement']; ?>">Measurement</a></li>
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
        <h2>Measurement</h2>
        
        <?php preMediaBlock(); ?>
        
        <div class="activity">
            <h3><a href="https://www.khanacademy.org/math/k-8-grades/cc-fourth-grade-math/cc-4th-measurement-topic" target="_blank" class="alt-link-color"><?php echo ++$activityCount . ". "; ?>Measurement &amp; Data</a></h3>
            <p>Learn how to convert between U.S. customary units, such as feet or miles, and metric units, such as meters or kilometers. <span class="glyphicon glyphicon-headphones" aria-hidden="true"></span></p>
            <span class="activity-ul-top bold">Sections:</span>
            <ul class="activity-ul">
                <li class="italics">Measuring with Metric &amp; U.S. Customary Units</li>
                <li class="italics">Unit Conversion</li>
                <li class="italics">Word Problems</li>
                <li class="italics">Area &amp; Perimeter</li>
                <li class="italics">Interpreting Data</li>
            </ul>
            <div class="activity-thumbnail">
                <img src="<?php echo $config['paths']['img']['content'] . '/measurement-and-data.png'; ?>" alt="Measurement &amp; Data">
            </div>
            <div class="activity-open">
                <p><a href="https://www.khanacademy.org/math/k-8-grades/cc-fourth-grade-math/cc-4th-measurement-topic" target="_blank" class="btn btn-primary" role="button">Open</a></p>
            </div>
        </div>
        
        <div class="activity">
            <h3><a href="<?php echo $abeRoutes['math']['metersKilometers']; ?>" class="alt-link-color"><?php echo ++$activityCount . ". "; ?>Metric Conversion: Meters &amp; Kilometers</a></h3>
            <p>Learn how to convert between meters and kilometers. Read the passage on metric conversion and then complete the practice problems.</p>
            <div class="activity-thumbnail">
                <img src="<?php echo $config['paths']['img']['content'] . '/mc-meters-kilometers.jpg'; ?>" alt="Metric Conversion: Meters &amp; Kilometers">
            </div>
            <div class="activity-open">
                <p><a href="<?php echo $abeRoutes['math']['metersKilometers']; ?>" class="btn btn-primary" role="button">Open</a></p>
            </div>
        </div>
        
        
        <div class="credits alt-link-color">
            <h4>Credits:</h4>
            <p><?php echo ++$refCount . ". "; ?><a href="https://www.khanacademy.org/math/k-8-grades/cc-fourth-grade-math/cc-4th-measurement-topic" target="_blank">Khan Academy</a>.</p>
            <p><?php echo ++$refCount . ". "; ?><a href="<?php echo $salcStcc; ?>" target="_blank">Andrew S. Gardner: Springfield Adult Learning Center</a>.</p>
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