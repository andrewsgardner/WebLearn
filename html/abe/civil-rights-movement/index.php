<?php 
$currentPage = "abe";
$pageTitle = "Civil Rights Movement | ABE Lab";
$pageDesc = "Distance learning activities about the Civil Rights Movement for Adult Basic Education students.";
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
    <li><a href="<?php echo $abeRoutes['socialStudies']['civilRights']; ?>">Civil Rights Movement</a></li>
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
        <h2>Civil Rights Movement</h2>
        
        <?php preMediaBlock(); ?>
        
        <div class="activity">
            <h3><a href="<?php echo $abeRoutes['socialStudies']['majorEvents']; ?>" class="alt-link-color"><?php echo ++$activityCount . ". "; ?>The Civil Rights Movement: Major Events</a></h3>
            <p>A brief introduction to some of the major events of the Civil Rights movement. <span class="glyphicon glyphicon-headphones" aria-hidden="true"></span></p>
            <div class="activity-thumbnail">
                <img src="<?php echo $config['paths']['img']['content'] . '/crm-major-events.jpg'; ?>" alt="The Civil Rights Movement: Major Events">
            </div>
            <div class="activity-open">
                <p><a href="<?php echo $abeRoutes['socialStudies']['majorEvents']; ?>" class="btn btn-primary" role="button">Open</a></p>
            </div>
        </div>
        
        <div class="activity">
            <h3><a href="http://www.history.com/topics/black-history/brown-v-board-of-education-of-topeka" target="_blank" class="alt-link-color"><?php echo ++$activityCount . ". "; ?>Brown v. Board of Education</a></h3>
            <p>Read about the Brown v. Board of Education Supreme Court case, which challenged the lawfulness of racial segregation in public schools.</p>
            <div class="activity-thumbnail">
                <img src="<?php echo $config['paths']['img']['content'] . '/brown-board-of-education.png'; ?>" alt="Brown v. Board of Education">
            </div>
            <div class="activity-open">
                <p><a href="http://www.history.com/topics/black-history/brown-v-board-of-education-of-topeka" target="_blank" class="btn btn-primary" role="button">Open</a></p>
            </div>
        </div>
        
        <div class="activity">
            <h3><a href="http://www.ushistory.org/us/54b.asp" target="_blank" class="alt-link-color"><?php echo ++$activityCount . ". "; ?>The Montgomery Bus Boycott</a></h3>
            <p>Read about how the 1955 arrest of Rosa Parks led to the Montgomery Bus Boycott.</p>
            <div class="activity-thumbnail">
                <img src="<?php echo $config['paths']['img']['content'] . '/the-montgomery-bus-boycott.png'; ?>" alt="The Montgomery Bus Boycott">
            </div>
            <div class="activity-open">
                <p><a href="http://www.ushistory.org/us/54b.asp" target="_blank" class="btn btn-primary" role="button">Open</a></p>
            </div>
        </div>
        
        <div class="activity">
            <h3><a href="http://www.ushistory.org/us/54c.asp" target="_blank" class="alt-link-color"><?php echo ++$activityCount . ". "; ?>The Little Rock Nine</a></h3>
            <p>Read about the Little Rock Nine and the desegregation of Little Rock Central High School.</p>
            <div class="activity-thumbnail">
                <img src="<?php echo $config['paths']['img']['content'] . '/the-little-rock-nine.png'; ?>" alt="The Little Rock Nine">
            </div>
            <div class="activity-open">
                <p><a href="http://www.ushistory.org/us/54c.asp" target="_blank" class="btn btn-primary" role="button">Open</a></p>
            </div>
        </div>
        
        <div class="activity">
            <h3><a href="http://www.ushistory.org/us/54d.asp" target="_blank" class="alt-link-color"><?php echo ++$activityCount . ". "; ?>The Sit-In Movement</a></h3>
            <p>Read about how "sit-ins" were used as a nonviolent strategy to gain awareness about civil rights issues.</p>
            <div class="activity-thumbnail">
                <img src="<?php echo $config['paths']['img']['content'] . '/the-sit-in-movement.png'; ?>" alt="The Sit-In Movement">
            </div>
            <div class="activity-open">
                <p><a href="http://www.ushistory.org/us/54d.asp" target="_blank" class="btn btn-primary" role="button">Open</a></p>
            </div>
        </div>
        
        <div class="activity">
            <h3><a href="http://www.ushistory.org/us/54f.asp" target="_blank" class="alt-link-color"><?php echo ++$activityCount . ". "; ?>Martin Luther King Jr.</a></h3>
            <p>Read about one of the most recognizable advocates of nonviolent action in the Civil Rights Movement, Dr. Martin Luther King Jr.</p>
            <div class="activity-thumbnail">
                <img src="<?php echo $config['paths']['img']['content'] . '/martin-luther-king-jr.png'; ?>" alt="Martin Luther King Jr.">
            </div>
            <div class="activity-open">
                <p><a href="http://www.ushistory.org/us/54f.asp" target="_blank" class="btn btn-primary" role="button">Open</a></p>
            </div>
        </div>
        
        <div class="activity">
            <h3><a href="http://www.ushistory.org/us/54h.asp" target="_blank" class="alt-link-color"><?php echo ++$activityCount . ". "; ?>Malcolm X</a></h3>
            <p>Read about Malcolm X and the Nation of Islam.</p>
            <div class="activity-thumbnail">
                <img src="<?php echo $config['paths']['img']['content'] . '/malcolm-x.png'; ?>" alt="Malcolm X">
            </div>
            <div class="activity-open">
                <p><a href="http://www.ushistory.org/us/54h.asp" target="_blank" class="btn btn-primary" role="button">Open</a></p>
            </div>
        </div>
        
        <div class="activity">
            <h3><a href="http://www.ushistory.org/us/54i.asp" target="_blank" class="alt-link-color"><?php echo ++$activityCount . ". "; ?>Black Power</a></h3>
            <p>Read about the Black Power Movement and then answer the multiple choice questions located below the text.</p>
            <div class="activity-thumbnail">
                <img src="<?php echo $config['paths']['img']['content'] . '/black-power.png'; ?>" alt="Black Power">
            </div>
            <div class="activity-open">
                <p><a href="http://www.ushistory.org/us/54i.asp" target="_blank" class="btn btn-primary" role="button">Open</a></p>
            </div>
        </div>
        
        <div class="activity">
            <h3><a href="http://www.history.com/topics/black-history/civil-rights-act" target="_blank" class="alt-link-color"><?php echo ++$activityCount . ". "; ?>Civil Rights Act of 1964</a></h3>
            <p>Watch a video and then read an article about the Civil Rights Act of 1964. <span class="glyphicon glyphicon-headphones" aria-hidden="true"></span> <span class="glyphicon glyphicon-flash" aria-hidden="true"></span></p>
            <div class="activity-thumbnail">
                <img src="<?php echo $config['paths']['img']['content'] . '/civil-rights-act-1964.png'; ?>" alt="Civil Rights Act of 1964">
            </div>
            <div class="activity-open">
                <p><a href="http://www.history.com/topics/black-history/civil-rights-act" target="_blank" class="btn btn-primary" role="button">Open</a></p>
            </div>
        </div>
        
        <div class="activity">
            <h3><a href="http://www.history.com/topics/black-history/voting-rights-act" target="_blank" class="alt-link-color"><?php echo ++$activityCount . ". "; ?>Voting Rights Act of 1965</a></h3>
            <p>Read an article about the Voting Rights Act of 1965.</p>
            <div class="activity-thumbnail">
                <img src="<?php echo $config['paths']['img']['content'] . '/voting-rights-act-1965.png'; ?>" alt="Voting Rights Act of 1965">
            </div>
            <div class="activity-open">
                <p><a href="http://www.history.com/topics/black-history/voting-rights-act" target="_blank" class="btn btn-primary" role="button">Open</a></p>
            </div>
        </div>
        
        <div class="activity">
            <h3><a href="http://www.yale.edu/lawweb/jbalkin/brown/1502.html" target="_blank" class="alt-link-color"><?php echo ++$activityCount . ". "; ?>Interactive Civil Rights Timeline</a></h3>
            <p>Explore this interactive timeline of important events that affected the struggle for obtaining civil rights.</p>
            <p>The timeline begins when the first slaves were brought to the New World from Africa in 1502 and ends in the year 2000.</p>
            <p>Click on a specific date to view the events that took place. Click "next" to view the next event on the timeline.</p>
            <div class="activity-thumbnail">
                <img src="<?php echo $config['paths']['img']['content'] . '/interactive-civil-rights-timeline.png'; ?>" alt="Interactive Civil Rights Timeline">
            </div>
            <div class="activity-open">
                <p><a href="http://www.yale.edu/lawweb/jbalkin/brown/1502.html" target="_blank" class="btn btn-primary" role="button">Open</a></p>
            </div>
        </div>
        
        
        <div class="credits alt-link-color">
            <h4>Credits:</h4>
            <p><?php echo ++$refCount . ". "; ?><a href="http://www.watchmojo.com/video/id/9154/" target="_blank">WatchMojo</a>.</p>
            <p><?php echo ++$refCount . ". "; ?><a href="http://www.history.com/topics/black-history/brown-v-board-of-education-of-topeka" target="_blank">history.com</a>.</p>
            <p><?php echo ++$refCount . ". "; ?><a href="http://www.ushistory.org/us/54b.asp" target="_blank">U.S. History: Pre-Columbian to the New Millennium</a>.</p>
            <p><?php echo ++$refCount . ". "; ?><a href="http://www.ushistory.org/us/54c.asp" target="_blank">U.S. History: Pre-Columbian to the New Millennium</a>.</p>
            <p><?php echo ++$refCount . ". "; ?><a href="http://www.ushistory.org/us/54d.asp" target="_blank">U.S. History: Pre-Columbian to the New Millennium</a>.</p>
            <p><?php echo ++$refCount . ". "; ?><a href="http://www.ushistory.org/us/54f.asp" target="_blank">U.S. History: Pre-Columbian to the New Millennium</a>.</p>
            <p><?php echo ++$refCount . ". "; ?><a href="http://www.ushistory.org/us/54h.asp" target="_blank">U.S. History: Pre-Columbian to the New Millennium</a>.</p>
            <p><?php echo ++$refCount . ". "; ?><a href="http://www.ushistory.org/us/54i.asp" target="_blank">U.S. History: Pre-Columbian to the New Millennium</a>.</p>
            <p><?php echo ++$refCount . ". "; ?><a href="http://www.history.com/topics/black-history/civil-rights-act" target="_blank">history.com</a>.</p>
            <p><?php echo ++$refCount . ". "; ?><a href="http://www.history.com/topics/black-history/voting-rights-act" target="_blank">history.com</a>.</p>
            <p><?php echo ++$refCount . ". "; ?><a href="http://www.yale.edu/lawweb/jbalkin/brown/1502.html" target="_blank">Yale: Interactive Civil Rights Chronology</a>.</p>
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