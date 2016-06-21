<?php 
$currentPage = "abe";
$pageTitle = "ABE Lab | Windows 7";
$pageDesc = "Windows 7 distance learning activities for Adult Basic Education students.";
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
    <li><a href="<?php echo $abeRoutes['compLit']['win7']; ?>">Windows 7</a></li>
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
        <h2>Windows 7</h2>
        
        <?php preMediaBlock(); ?>
        
        <div class="activity">
            <h3><a href="https://www.digitallearn.org/courses/using-a-pc-windows-7" target="_blank" class="alt-link-color"><?php echo ++$activityCount . ". "; ?>Using Windows 7</a></h3>
            <p>DigitalLearn.org offers free self-paced tutorials about Windows 7. After selecting the above link, click on the "Start Course" button to begin the activity. <span class="glyphicon glyphicon-headphones" aria-hidden="true"></span> <span class="glyphicon glyphicon-flash" aria-hidden="true"></span></p>
            <div class="activity-thumbnail">
                <img src="<?php echo $config['paths']['img']['content'] . '/using-windows7.png'; ?>" alt="Using Windows 7">
            </div>
            <div class="activity-open">
                <p><a href="https://www.digitallearn.org/courses/using-a-pc-windows-7" target="_blank" class="btn btn-primary" role="button">Open</a></p>
            </div>
        </div>
        
        <div class="activity">
            <h3><a href="<?php echo $abeRoutes['compLit']['introDesktop']; ?>" class="alt-link-color"><?php echo ++$activityCount . ". "; ?>Introduction to the Desktop</a></h3>
            <p>Learn how to identify the different parts of your Windows desktop. <span class="glyphicon glyphicon-headphones" aria-hidden="true"></span></p>
            <div class="activity-thumbnail">
                <img src="<?php echo $config['paths']['img']['content'] . '/win7-intro-desktop.jpg'; ?>" alt="Introduction to the Desktop">
            </div>
            <div class="activity-open">
                <p><a href="<?php echo $abeRoutes['compLit']['introDesktop']; ?>" class="btn btn-primary" role="button">Open</a></p>
            </div>
        </div>
        
        <div class="activity">
            <h3><a href="<?php echo $abeRoutes['compLit']['introStartMenu']; ?>" class="alt-link-color"><?php echo ++$activityCount . ". "; ?>Introduction to the Start Menu</a></h3>
            <p>Learn how to use the Windows Start menu and create desktop shortcuts. <span class="glyphicon glyphicon-headphones" aria-hidden="true"></span></p>
            <div class="activity-thumbnail">
                <img src="<?php echo $config['paths']['img']['content'] . '/win7-intro-start-menu.jpg'; ?>" alt="Introduction to the Start Menu">
            </div>
            <div class="activity-open">
                <p><a href="<?php echo $abeRoutes['compLit']['introStartMenu']; ?>" class="btn btn-primary" role="button">Open</a></p>
            </div>
        </div>
        
        <div class="activity">
            <h3><a href="<?php echo $abeRoutes['compLit']['windowFunctions']; ?>" class="alt-link-color"><?php echo ++$activityCount . ". "; ?>Basic Window Functions</a></h3>
            <p>Learn how to control the window containers that your applications appear in. <span class="glyphicon glyphicon-headphones" aria-hidden="true"></span></p>
            <div class="activity-thumbnail">
                <img src="<?php echo $config['paths']['img']['content'] . '/basic-window-functions.jpg'; ?>" alt="Basic Window Functions">
            </div>
            <div class="activity-open">
                <p><a href="<?php echo $abeRoutes['compLit']['windowFunctions']; ?>" class="btn btn-primary" role="button">Open</a></p>
            </div>
        </div>
        
        <div class="activity">
            <h3><a href="<?php echo $abeRoutes['compLit']['navPersonalFolders']; ?>" class="alt-link-color"><?php echo ++$activityCount . ". "; ?>Navigating Your Personal Folders</a></h3>
            <p>Learn how to view files and folders in Windows Explorer. <span class="glyphicon glyphicon-headphones" aria-hidden="true"></span></p>
            <div class="activity-thumbnail">
                <img src="<?php echo $config['paths']['img']['content'] . '/navigating-personal-folders.jpg'; ?>" alt="Navigating Your Personal Folders">
            </div>
            <div class="activity-open">
                <p><a href="<?php echo $abeRoutes['compLit']['navPersonalFolders']; ?>" class="btn btn-primary" role="button">Open</a></p>
            </div>
        </div>
        
        
        <div class="credits alt-link-color">
            <h4>Credits:</h4>
            <p><?php echo ++$refCount . ". "; ?><a href="https://www.digitallearn.org/courses" target="_blank">DigitalLearn.org</a>.</p>
            <p><?php echo ++$refCount . ". "; ?><a href="http://www.top-windows-tutorials.com/windows-7-tutorial/" target="_blank">Top Windows Tutorials</a>.</p>
            <p><?php echo ++$refCount . ". "; ?><a href="http://www.top-windows-tutorials.com/windows-7-tutorial2/" target="_blank">Top Windows Tutorials</a>.</p>
            <p><?php echo ++$refCount . ". "; ?><a href="http://www.top-windows-tutorials.com/windows-7-tutorial3/" target="_blank">Top Windows Tutorials</a>.</p>
            <p><?php echo ++$refCount . ". "; ?><a href="http://www.top-windows-tutorials.com/windows-7-tutorial4/" target="_blank">Top Windows Tutorials</a>.</p>
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