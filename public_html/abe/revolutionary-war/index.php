<?php 
$currentPage = "abe";
$pageTitle = "Revolutionary War | ABE Lab";
$pageDesc = "Distance learning activities about the Revolutionary War for Adult Basic Education students.";
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
    <li><a href="<?php echo $abeRoutes['socialStudies']['revolutionaryWar']; ?>">American Revolutionary War</a></li>
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
        <h2>American Revolutionary War</h2>
        
        <?php preMediaBlock(); ?>
        
        <div class="activity">
            <h3><a href="http://www.archives.gov/education/lessons/revolution-images/" target="_blank" class="alt-link-color"><?php echo ++$activityCount . ". "; ?>Images of the American Revolution</a></h3>
            <p>Read an overview of the American Revolutionary War. Afterwards, view the following documents and engravings provided by the National Archives.</p>
            <span class="activity-ul-top bold">Historical Documents &amp; Engravings:</span>
            <ul class="activity-ul">
                <li class="italics"><a href="http://www.archives.gov/education/lessons/revolution-images/images/ethan-allen.gif" target="_blank">The Capture of Fort Ticonderoga, New York</a></li>
                <li class="italics"><a href="http://www.archives.gov/education/lessons/revolution-images/images/valley-forge.gif" target="_blank">Valley Forge: Washington &amp; Lafayette</a></li>
                <li class="italics"><a href="http://www.archives.gov/education/lessons/revolution-images/images/washington-and-committee.gif" target="_blank">General George Washington and a Committee of Congress at Valley Forge</a></li>
                <li class="italics"><a href="http://www.archives.gov/education/lessons/revolution-images/images/benjamin-franklin.gif" target="_blank">Benjamin Franklin at the Court of France</a></li>
                <li class="italics"><a href="http://www.archives.gov/education/lessons/revolution-images/images/burgoyne-saratoga.gif" target="_blank">The Surrender of General Burgoyne at Saratoga</a></li>
                <li class="italics"><a href="http://www.archives.gov/education/lessons/revolution-images/images/arnold-oath.gif" target="_blank">Benedict Arnold's Oath of Allegiance</a></li>
                <li class="italics"><a href="http://www.archives.gov/education/lessons/revolution-images/images/cornwallis-surrender.gif" target="_blank">Surrender of Cornwallis at Yorktown, Virginia</a></li>
                <li class="italics"><a href="http://www.archives.gov/education/lessons/revolution-images/images/treaty-of-paris-01.jpg" target="_blank">Treaty of Paris</a></li>
            </ul>
            
            <div class="activity-thumbnail">
                <img src="<?php echo $config['paths']['img']['content'] . '/images-american-revolution.png'; ?>" alt="Images of the American Revolution">
            </div>
            <div class="activity-open">
                <p><a href="http://www.archives.gov/education/lessons/revolution-images/" target="_blank" class="btn btn-primary" role="button">Open</a></p>
            </div>
        </div>
        
        <div class="activity">
            <h3><a href="http://mycareertools.com/social-studies-revolutionary-war/" target="_blank" class="alt-link-color"><?php echo ++$activityCount . ". "; ?>Revolutionary War: Video &amp; Question Set</a></h3>
            <p>After selecting the above link, scroll down to watch a Revolutionary War video and answer multiple choice questions. <span class="glyphicon glyphicon-headphones" aria-hidden="true"></span></p>
            <div class="activity-thumbnail">
                <img src="<?php echo $config['paths']['img']['content'] . '/revolutionary-war-video-question-set.png'; ?>" alt="Revolutionary War: Video &amp; Question Set">
            </div>
            <div class="activity-open">
                <p><a href="http://mycareertools.com/social-studies-revolutionary-war/" target="_blank" class="btn btn-primary" role="button">Open</a></p>
            </div>
        </div>
        
        <div class="activity">
            <h3><a href="http://www.gedstudyguide.org/ged-prep-blog/5-important-people-revolutionary-know-ged-history-exam/" target="_blank" class="alt-link-color"><?php echo ++$activityCount . ". "; ?>Five Important People in the Revolutionary War</a></h3>
            <p>Read about five important people from the Revolutionary War.</p>
            <div class="activity-thumbnail">
                <img src="<?php echo $config['paths']['img']['content'] . '/5-important-people-revolutionary-war.png'; ?>" alt="Five Important People in the Revolutionary War">
            </div>
            <div class="activity-open">
                <p><a href="http://www.gedstudyguide.org/ged-prep-blog/5-important-people-revolutionary-know-ged-history-exam/" target="_blank" class="btn btn-primary" role="button">Open</a></p>
            </div>
        </div>
        
        
        <div class="credits alt-link-color">
            <h4>Credits:</h4>
            <p><?php echo ++$refCount . ". "; ?><a href="http://www.archives.gov/education/lessons/revolution-images/" target="_blank">U.S. National Archives and Records Administration</a>.</p>
            <p><?php echo ++$refCount . ". "; ?><a href="http://mycareertools.com/social-studies-revolutionary-war/" target="_blank">Best GED Classes</a>.</p>
            <p><?php echo ++$refCount . ". "; ?><a href="http://www.gedstudyguide.org/ged-prep-blog/5-important-people-revolutionary-know-ged-history-exam/" target="_blank">GED Study Guide</a>.</p>
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