<?php 
$currentPage = "esol";
$pageTitle = "General ESOL | ESOL Lab";
$pageDesc = "General ESOL distance learning activities for English for Speakers of Other Languages students.";
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
    <li><a href="<?php echo $esolRoutes['generalEsol']['genEsolDir']; ?>">General ESOL</a></li>
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
        <h2>General ESOL</h2>
        
        <?php preMediaBlock(); ?>
        
        <div class="activity">
            <h3><a href="http://www.cambridge.org/us/esl/venturesadulted/venturesarcade/" target="_blank" class="alt-link-color"><?php echo ++$activityCount . ". "; ?>Cambridge Ventures Arcade</a></h3>
            <p>Learn English online with the Cambridge Ventures Arcade. <span class="glyphicon glyphicon-headphones" aria-hidden="true"></span> <span class="glyphicon glyphicon-flash" aria-hidden="true"></span></p>
            <div class="activity-thumbnail">
                <img src="<?php echo $config['paths']['img']['content'] . '/cambridge-ventures-arcade.png'; ?>" alt="Cambridge Ventures Arcade">
            </div>
            <div class="activity-open">
                <p><a href="http://www.cambridge.org/us/esl/venturesadulted/venturesarcade/" target="_blank" class="btn btn-primary" role="button">Open</a></p>
            </div>
        </div>
        
        <div class="activity">
            <h3><a href="http://www.cambridge.org/us/esl/touchstone/student/index.html" target="_blank" class="alt-link-color"><?php echo ++$activityCount . ". "; ?>Cambridge Touchstone Arcade</a></h3>
            <p>Learn English online with the Cambridge Touchstone Arcade. <span class="glyphicon glyphicon-headphones" aria-hidden="true"></span> <span class="glyphicon glyphicon-flash" aria-hidden="true"></span></p>
            <div class="activity-thumbnail">
                <img src="<?php echo $config['paths']['img']['content'] . '/cambridge-touchstone-arcade.png'; ?>" alt="Cambridge Touchstone Arcade">
            </div>
            <div class="activity-open">
                <p><a href="http://www.cambridge.org/us/esl/touchstone/student/index.html" target="_blank" class="btn btn-primary" role="button">Open</a></p>
            </div>
        </div>
        
        <div class="activity">
            <h3><a href="http://www.reepworld.org/englishpractice/" target="_blank" class="alt-link-color"><?php echo ++$activityCount . ". "; ?>REEPworld</a></h3>
            <p>Online lessons for adult English language learners. <span class="glyphicon glyphicon-headphones" aria-hidden="true"></span> <span class="glyphicon glyphicon-flash" aria-hidden="true"></span></p>
            <div class="activity-thumbnail">
                <img src="<?php echo $config['paths']['img']['content'] . '/reepworld.png'; ?>" alt="REEPworld">
            </div>
            <div class="activity-open">
                <p><a href="http://www.reepworld.org/englishpractice/" target="_blank" class="btn btn-primary" role="button">Open</a></p>
            </div>
        </div>
        
        <div class="activity">
            <h3><a href="http://www.englishcentral.com/videos" target="_blank" class="alt-link-color"><?php echo ++$activityCount . ". "; ?>English Central Videos</a></h3>
            <p>Learn English online with English Central videos. <span class="glyphicon glyphicon-headphones" aria-hidden="true"></span> <span class="glyphicon glyphicon-flash" aria-hidden="true"></span></p>
            <div class="activity-thumbnail">
                <img src="<?php echo $config['paths']['img']['content'] . '/english-central-videos.png'; ?>" alt="English Central Videos">
            </div>
            <div class="activity-open">
                <p><a href="http://www.englishcentral.com/videos" target="_blank" class="btn btn-primary" role="button">Open</a></p>
            </div>
        </div>
        
        <div class="activity">
            <h3><a href="http://www.usalearns.org/" target="_blank" class="alt-link-color"><?php echo ++$activityCount . ". "; ?>U.S.A. Learns</a></h3>
            <p>Improve your speaking, pronunciation, listening, spelling, writing, and grammar skills. Make sure to <a href="http://www.usalearns.org/student-registration" target="_blank">create a user account</a>, and to always log in every time you use U.S.A. Learns. <span class="glyphicon glyphicon-headphones" aria-hidden="true"></span> <span class="glyphicon glyphicon-flash" aria-hidden="true"></span></p>
            <div class="activity-thumbnail">
                <img src="<?php echo $config['paths']['img']['content'] . '/usa-learns.png'; ?>" alt="U.S.A. Learns">
            </div>
            <div class="activity-open">
                <p><a href="http://www.usalearns.org/" target="_blank" class="btn btn-primary" role="button">Open</a></p>
            </div>
        </div>
        
        <div class="activity">
            <h3><a href="http://www.onlineelt.com/" target="_blank" class="alt-link-color"><?php echo ++$activityCount . ". "; ?>Step Forward</a></h3>
            <p>Practice your English with Step Forward's vocabulary, grammar, listening, and reading activities. <span class="glyphicon glyphicon-headphones" aria-hidden="true"></span> <span class="glyphicon glyphicon-flash" aria-hidden="true"></span></p>
            <div class="activity-thumbnail">
                <img src="<?php echo $config['paths']['img']['content'] . '/onlineelt.png'; ?>" alt="Step Forward">
            </div>
            <div class="activity-open">
                <p><a href="http://www.onlineelt.com/" target="_blank" class="btn btn-primary" role="button">Open</a></p>
            </div>
        </div>
        
        <div class="activity">
            <h3><a href="http://www.elllo.org/" target="_blank" class="alt-link-color"><?php echo ++$activityCount . ". "; ?>Elllo</a></h3>
            <p>Free English audio lessons. <span class="glyphicon glyphicon-headphones" aria-hidden="true"></span> <span class="glyphicon glyphicon-flash" aria-hidden="true"></span></p>
            <div class="activity-thumbnail">
                <img src="<?php echo $config['paths']['img']['content'] . '/elllo.png'; ?>" alt="Elllo">
            </div>
            <div class="activity-open">
                <p><a href="http://www.elllo.org/" target="_blank" class="btn btn-primary" role="button">Open</a></p>
            </div>
        </div>
        
        <div class="activity">
            <h3><a href="http://eae.alberta.ca/englishexpress/" target="_blank" class="alt-link-color"><?php echo ++$activityCount . ". "; ?>English Express</a></h3>
            <p>Practice reading English articles. <span class="glyphicon glyphicon-headphones" aria-hidden="true"></span></p>
            <div class="activity-thumbnail">
                <img src="<?php echo $config['paths']['img']['content'] . '/englishexpress.png'; ?>" alt="English Express">
            </div>
            <div class="activity-open">
                <p><a href="http://eae.alberta.ca/englishexpress/" target="_blank" class="btn btn-primary" role="button">Open</a></p>
            </div>
        </div>
        
        <div class="activity">
            <h3><a href="https://www.englishclub.com/learn-english/language-skills.htm" target="_blank" class="alt-link-color"><?php echo ++$activityCount . ". "; ?>The Four Language Skills</a></h3>
            <p>Learn about four important language skills: listening, speaking, reading, and writing. <span class="glyphicon glyphicon-headphones" aria-hidden="true"></span></p>
            <div class="activity-thumbnail">
                <img src="<?php echo $config['paths']['img']['content'] . '/the-four-language-skills.png'; ?>" alt="The Four Language Skills">
            </div>
            <div class="activity-open">
                <p><a href="https://www.englishclub.com/learn-english/language-skills.htm" target="_blank" class="btn btn-primary" role="button">Open</a></p>
            </div>
        </div>
        
        <div class="activity">
            <h3><a href="http://www.esl-lab.com/" target="_blank" class="alt-link-color"><?php echo ++$activityCount . ". "; ?>Randall's ESL Cyber Listening Lab</a></h3>
            <p>Listening activates for English language learning. <span class="glyphicon glyphicon-headphones" aria-hidden="true"></span> <span class="glyphicon glyphicon-flash" aria-hidden="true"></span></p>
            <div class="activity-thumbnail">
                <img src="<?php echo $config['paths']['img']['content'] . '/randalls-esl-lab.png'; ?>" alt="Randall's ESL Cyber Listening Lab">
            </div>
            <div class="activity-open">
                <p><a href="http://www.esl-lab.com/" target="_blank" class="btn btn-primary" role="button">Open</a></p>
            </div>
        </div>
        
        <div class="activity">
            <h3><a href="https://edition.englishclub.com/category/listening-news/" target="_blank" class="alt-link-color"><?php echo ++$activityCount . ". "; ?>Listen to News</a></h3>
            <p>Practice your listening, reading, writing, and speaking skills with current news stories. <span class="glyphicon glyphicon-headphones" aria-hidden="true"></span></p>
            <div class="activity-thumbnail">
                <img src="<?php echo $config['paths']['img']['content'] . '/listen-to-news.png'; ?>" alt="Listen to News">
            </div>
            <div class="activity-open">
                <p><a href="https://edition.englishclub.com/category/listening-news/" target="_blank" class="btn btn-primary" role="button">Open</a></p>
            </div>
        </div>
        
        
        <div class="credits alt-link-color">
            <h4>Credits:</h4>
            <p><?php echo ++$refCount . ". "; ?><a href="http://www.cambridge.org/us/esl/venturesadulted/venturesarcade/" target="_blank">Cambridge Ventures Arcade</a>.</p>
            <p><?php echo ++$refCount . ". "; ?><a href="http://www.cambridge.org/us/esl/touchstone/student/index.html" target="_blank">Cambridge Touchstone Arcade</a>.</p>
            <p><?php echo ++$refCount . ". "; ?><a href="http://www.reepworld.org/englishpractice/" target="_blank">REEPworld</a>.</p>
            <p><?php echo ++$refCount . ". "; ?><a href="http://www.englishcentral.com/videos" target="_blank">English Central Videos</a>.</p>
            <p><?php echo ++$refCount . ". "; ?><a href="http://www.usalearns.org/" target="_blank">U.S.A. Learns</a>.</p>
            <p><?php echo ++$refCount . ". "; ?><a href="http://www.onlineelt.com/" target="_blank">Step Forward</a>.</p>
            <p><?php echo ++$refCount . ". "; ?><a href="http://www.elllo.org/" target="_blank">Elllo.com</a>.</p>
            <p><?php echo ++$refCount . ". "; ?><a href="http://eae.alberta.ca/englishexpress/" target="_blank">English Express</a>.</p>
            <p><?php echo ++$refCount . ". "; ?><a href="https://www.englishclub.com/learn-english/language-skills.htm" target="_blank">EnglishClub</a>.</p>
            <p><?php echo ++$refCount . ". "; ?><a href="http://www.esl-lab.com/" target="_blank">Randall's ESL Cyber Listening Lab</a>.</p>
            <p><?php echo ++$refCount . ". "; ?><a href="https://edition.englishclub.com/category/listening-news/" target="_blank">EnglishClub</a>.</p>
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