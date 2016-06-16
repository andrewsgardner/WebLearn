<?php 
$currentPage = "abe";
$pageTitle = "ABE Lab | Systems of the Body";
$pageDesc = "Distance learning activities about major systems of the human body for Adult Basic Education students.";
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
    <li><a href="<?php echo $abeRoutes['science']['bodySystems']; ?>">Body Systems</a></li>
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
        <h2>Body Systems</h2>
        
        <?php preMediaBlock(); ?>
        
        <div class="activity">
            <h3><a href="<?php echo $abeRoutes['science']['bsIntro']; ?>" class="alt-link-color"><?php echo ++$activityCount . ". "; ?>Systems of the Body: Introduction</a></h3>
            <p>Learn the functions and major parts of the circulatory system, the respiratory system, the nervous system, and the digestive system. <span class="glyphicon glyphicon-headphones" aria-hidden="true"></span></p>
            <div class="activity-thumbnail">
                <img src="<?php echo $config['paths']['img']['content'] . '/systems-of-the-body-intro.jpg'; ?>" alt="Systems of the Body: Introduction">
            </div>
            <div class="activity-open">
                <p><a href="<?php echo $abeRoutes['science']['bsIntro']; ?>" class="btn btn-primary" role="button">Open</a></p>
            </div>
        </div>
        
        <div class="activity">
            <h3><a href="<?php echo $abeRoutes['science']['heartCirculatorySys']; ?>" class="alt-link-color"><?php echo ++$activityCount . ". "; ?>Heart &amp; Circulatory System</a></h3>
            <p>Learn how the heart and circulatory system work. <span class="glyphicon glyphicon-headphones" aria-hidden="true"></span> <span class="glyphicon glyphicon-flash" aria-hidden="true"></span></p>
            <div class="activity-thumbnail">
                <img src="<?php echo $config['paths']['img']['content'] . '/heart-circulatory-system.jpg'; ?>" alt="Heart &amp; Circulatory System">
            </div>
            <div class="activity-open">
                <p><a href="<?php echo $abeRoutes['science']['heartCirculatorySys']; ?>" class="btn btn-primary" role="button">Open</a></p>
            </div>
        </div>
        
        <div class="activity">
            <h3><a href="https://quizlet.com/12941516/flashcards" target="_blank" class="alt-link-color"><?php echo ++$activityCount . ". "; ?>Circulatory System Flashcards</a></h3>
            <p>Review definitions of different components that make up the circulatory system.</p>
            <div class="activity-thumbnail">
                <img src="<?php echo $config['paths']['img']['content'] . '/circulatory-system-flashcards.png'; ?>" alt="Circulatory System Flashcards">
            </div>
            <div class="activity-open">
                <p><a href="https://quizlet.com/12941516/flashcards" target="_blank" class="btn btn-primary" role="button">Open</a></p>
            </div>
        </div>
        
        <div class="activity">
            <h3><a href="<?php echo $abeRoutes['science']['respiratorySys']; ?>" class="alt-link-color"><?php echo ++$activityCount . ". "; ?>The Respiratory System</a></h3>
            <p>Review definitions of different components that make up the respiratory system. <span class="glyphicon glyphicon-headphones" aria-hidden="true"></span></p>
            <div class="activity-thumbnail">
                <img src="<?php echo $config['paths']['img']['content'] . '/respiratory-system.jpg'; ?>" alt="The Respiratory System">
            </div>
            <div class="activity-open">
                <p><a href="<?php echo $abeRoutes['science']['respiratorySys']; ?>" class="btn btn-primary" role="button">Open</a></p>
            </div>
        </div>
        
        <div class="activity">
            <h3><a href="http://www.innerbody.com/anatomy/respiratory" target="_blank" class="alt-link-color"><?php echo ++$activityCount . ". "; ?>Interactive Respiratory System</a></h3>
            <p>Explore an interactive model of the respiratory system. Move your mouse over each system part to see its description.</p>
            <div class="activity-thumbnail">
                <img src="<?php echo $config['paths']['img']['content'] . '/interactive-respiratory-system.png'; ?>" alt="Interactive Respiratory System">
            </div>
            <div class="activity-open">
                <p><a href="http://www.innerbody.com/anatomy/respiratory" target="_blank" class="btn btn-primary" role="button">Open</a></p>
            </div>
        </div>
        
        <div class="activity">
            <h3><a href="<?php echo $abeRoutes['science']['nervousSys']; ?>" class="alt-link-color"><?php echo ++$activityCount . ". "; ?>The Nervous System</a></h3>
            <p>Learn how the nervous system works. <span class="glyphicon glyphicon-headphones" aria-hidden="true"></span></p>
            <div class="activity-thumbnail">
                <img src="<?php echo $config['paths']['img']['content'] . '/nervous-system.jpg'; ?>" alt="The Nervous System">
            </div>
            <div class="activity-open">
                <p><a href="<?php echo $abeRoutes['science']['nervousSys']; ?>" class="btn btn-primary" role="button">Open</a></p>
            </div>
        </div>
        
        <div class="activity">
            <h3><a href="http://www.innerbody.com/image/nervov.html" target="_blank" class="alt-link-color"><?php echo ++$activityCount . ". "; ?>Interactive Nervous System</a></h3>
            <p>Explore an interactive model of the nervous system. Move your mouse over each system part to see its description.</p>
            <div class="activity-thumbnail">
                <img src="<?php echo $config['paths']['img']['content'] . '/interactive-nervous-system.png'; ?>" alt="Interactive Nervous System">
            </div>
            <div class="activity-open">
                <p><a href="http://www.innerbody.com/image/nervov.html" target="_blank" class="btn btn-primary" role="button">Open</a></p>
            </div>
        </div>
        
        <div class="activity">
            <h3><a href="<?php echo $abeRoutes['science']['digestiveSys']; ?>" class="alt-link-color"><?php echo ++$activityCount . ". "; ?>The Digestive System</a></h3>
            <p>Learn how the digestive system works. <span class="glyphicon glyphicon-headphones" aria-hidden="true"></span></p>
            <div class="activity-thumbnail">
                <img src="<?php echo $config['paths']['img']['content'] . '/digestive-system.jpg'; ?>" alt="The Digestive System">
            </div>
            <div class="activity-open">
                <p><a href="<?php echo $abeRoutes['science']['digestiveSys']; ?>" class="btn btn-primary" role="button">Open</a></p>
            </div>
        </div>
        
        <div class="activity">
            <h3><a href="http://www.innerbody.com/image/digeov.html" target="_blank" class="alt-link-color"><?php echo ++$activityCount . ". "; ?>Interactive Digestive System</a></h3>
            <p>Explore an interactive model of the digestive system. Move your mouse over each system part to see its description.</p>
            <div class="activity-thumbnail">
                <img src="<?php echo $config['paths']['img']['content'] . '/interactive-digestive-system.png'; ?>" alt="Interactive Digestive System">
            </div>
            <div class="activity-open">
                <p><a href="http://www.innerbody.com/image/digeov.html" target="_blank" class="btn btn-primary" role="button">Open</a></p>
            </div>
        </div>
        
        
        <div class="credits alt-link-color">
            <h4>Credits:</h4>
            <p><?php echo ++$refCount . ". "; ?><a href="http://www.gedstudyguide.org/science-practice-lessons/systems-of-the-human-body-lesson-two/" target="_blank">GED Study Guide</a>.</p>
            <p><?php echo ++$refCount . ". "; ?><a href="http://www.mayoclinic.org/diseases-conditions/heart-disease/multimedia/circulatory-system/vid-20084745" target="_blank">Mayo Clinic: Diseases and Conditions</a>.</p>
            <p><?php echo ++$refCount . ". "; ?><a href="https://quizlet.com/12941516/circulatory-system-ged-flash-cards/" target="_blank">Quizlet: Circulatory System GED</a>.</p>
            <p><?php echo ++$refCount . ". "; ?><a href="https://www.youtube.com/watch?v=12ddbrqpZiQ" target="_blank">BrainGini: Math and Science</a>.</p>
            <p><?php echo ++$refCount . ". "; ?><a href="http://www.innerbody.com/anatomy/respiratory" target="_blank">InnerBody: Respiratory System</a>.</p>
            <p><?php echo ++$refCount . ". "; ?><a href="https://www.youtube.com/watch?v=Bi6p3et1uGY" target="_blank">YouTube: Dan Izzo</a>.</p>
            <p><?php echo ++$refCount . ". "; ?><a href="http://www.innerbody.com/image/nervov.html" target="_blank">InnerBody: Nervous System</a>.</p>
            <p><?php echo ++$refCount . ". "; ?><a href="https://www.youtube.com/watch?v=lm3oIX6jjn4" target="_blank">YouTube: University of Michigan Health System</a>.</p>
            <p><?php echo ++$refCount . ". "; ?><a href="http://www.innerbody.com/image/digeov.html" target="_blank">InnerBody: Nervous System</a>.</p>
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