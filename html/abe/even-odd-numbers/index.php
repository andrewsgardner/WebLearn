<?php 
$currentPage = "abe";
$pageTitle = "Even &amp; Odd Numbers | ABE Lab";
$pageDesc = "Distance learning activities about even and odd numbers for Adult Basic Education students.";
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
    <li><a href="<?php echo $abeRoutes['math']['evenOddNums']; ?>">Even &amp; Odd Numbers</a></li>
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
        <h2>Even &amp; Odd Numbers</h2>
        
        <?php preMediaBlock(); ?>
        
        <div class="activity">
            <h3><a href="<?php echo $abeRoutes['math']['eonIntroVideo']; ?>" class="alt-link-color"><?php echo ++$activityCount . ". "; ?>Introduction Video</a></h3>
            <p>Learn how to identify even and odd numbers. <span class="glyphicon glyphicon-headphones" aria-hidden="true"></span></p>
            <div class="activity-thumbnail">
                <img src="<?php echo $config['paths']['img']['content'] . '/eon-introduction-video.jpg'; ?>" alt="Introduction Video">
            </div>
            <div class="activity-open">
                <p><a href="<?php echo $abeRoutes['math']['eonIntroVideo']; ?>" class="btn btn-primary" role="button">Open</a></p>
            </div>
        </div>
        
        <div class="activity">
            <h3><a href="http://primarytopics.com/maths/calculating/mental/year2/interactive/quizzes/oddevenq.htm" target="_blank" class="alt-link-color"><?php echo ++$activityCount . ". "; ?>Even &amp; Odd Numbers: Question Set 1</a></h3>
            <p>Practice identifying even and odd numbers. <span class="glyphicon glyphicon-headphones" aria-hidden="true"></span> <span class="glyphicon glyphicon-flash" aria-hidden="true"></span></p>
            <span class="activity-ul-top bold">General Rules:</span>
            <ul class="activity-ul">
                <li><span class="bold">A number is even when it ends in: 0, 2, 4, 6, or 8.</span> Example: 25<span class="underline">6</span>.</li>
                <li><span class="bold">A number is odd when it ends in: 1, 3, 5, or 9.</span> Example: 100,37<span class="underline">5</span>.</li>
            </ul>
            <div class="activity-thumbnail">
                <img src="<?php echo $config['paths']['img']['content'] . '/even-and-odd-numbers-1.png'; ?>" alt="Even &amp; Odd Numbers: Question Set 1">
            </div>
            <div class="activity-open">
                <p><a href="http://primarytopics.com/maths/calculating/mental/year2/interactive/quizzes/oddevenq.htm" target="_blank" class="btn btn-primary" role="button">Open</a></p>
            </div>
        </div>
        
        <div class="activity">
            <h3><a href="http://www.softschools.com/math/games/odd_even_number_game.jsp" target="_blank" class="alt-link-color"><?php echo ++$activityCount . ". "; ?>Even &amp; Odd Numbers: Question Set 2</a></h3>
            <p>Practice identifying even and odd numbers. After selecting the above link, click on the "generate" button to start the activity.</p>
            <span class="activity-ul-top bold">General Rules:</span>
            <ul class="activity-ul">
                <li><span class="bold">A number is even when it ends in: 0, 2, 4, 6, or 8.</span> Example: 25<span class="underline">6</span>.</li>
                <li><span class="bold">A number is odd when it ends in: 1, 3, 5, or 9.</span> Example: 100,37<span class="underline">5</span>.</li>
            </ul>
            <div class="activity-thumbnail">
                <img src="<?php echo $config['paths']['img']['content'] . '/even-and-odd-numbers-2.png'; ?>" alt="Even &amp; Odd Numbers: Question Set 2">
            </div>
            <div class="activity-open">
                <p><a href="http://www.softschools.com/math/games/odd_even_number_game.jsp" target="_blank" class="btn btn-primary" role="button">Open</a></p>
            </div>
        </div>
        
        <div class="activity">
            <h3><a href="<?php echo $abeRoutes['math']['eonQs3']; ?>" class="alt-link-color"><?php echo ++$activityCount . ". "; ?>Even &amp; Odd Numbers: Question Set 3</a></h3>
            <p>Practice identifying even and odd numbers.</p>
            <div class="activity-thumbnail">
                <img src="<?php echo $config['paths']['img']['content'] . '/even-and-odd-numbers-3.jpg'; ?>" alt="Even &amp; Odd Numbers: Question Set 3">
            </div>
            <div class="activity-open">
                <p><a href="<?php echo $abeRoutes['math']['eonQs3']; ?>" class="btn btn-primary" role="button">Open</a></p>
            </div>
        </div>
        
        
        <div class="credits alt-link-color">
            <h4>Credits:</h4>
            <p><?php echo ++$refCount . ". "; ?><a href="https://www.youtube.com/watch?v=xtd5Dk7mvgE" target="_blank">MathWithLarry.com YouTube Channel</a>.</p>
            <p><?php echo ++$refCount . ". "; ?><a href="http://primarytopics.com/maths/calculating/mental/year2/interactive/quizzes/oddevenq.htm" target="_blank">Primary Topics</a>.</p>
            <p><?php echo ++$refCount . ". "; ?><a href="http://www.softschools.com/math/games/odd_even_number_game.jsp" target="_blank">softschools.com</a>.</p>
            <p><?php echo ++$refCount . ". "; ?><a href="http://www.sporcle.com/games/manonthemoon/1-100oddevenchallenge" target="_blank">Sporcle</a>.</p>
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