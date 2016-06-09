<?php 
$currentPage = "abe";
$pageTitle = "ABE Lab | Reading Activity List";
$pageDesc = "Reading distance learning activities for Adult Basic Education students.";
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
    <li><a href="<?php echo $abeRoutes['english']['reading']; ?>">Reading</a></li>
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
        <h2>Reading</h2>
        
        <?php preMediaBlock(); ?>
        
        <div class="activity">
            <h3><a href="<?php echo $abeRoutes['english']['authorsPosition']; ?>" class="alt-link-color"><?php echo ++$activityCount . ". "; ?>Author's Position</a></h3>
            <p>Learn how to identify a writer's stance on the issue at hand. <span class="glyphicon glyphicon-headphones" aria-hidden="true"></span></p>
            <div class="activity-thumbnail">
                <img src="<?php echo $config['paths']['img']['content'] . '/authors-position.png'; ?>" alt="Author's Position">
            </div>
            <div class="activity-open">
                <p><a href="<?php echo $abeRoutes['english']['authorsPosition']; ?>" class="btn btn-primary" role="button">Open</a></p>
            </div>
        </div>
        
        <div class="activity">
            <h3><a href="http://www.studyzone.org/testprep/ela4/o/authorsviewpointl.cfm" target="_blank" class="alt-link-color"><?php echo ++$activityCount . ". "; ?>Author's Viewpoint Lesson</a></h3>
            <p>Learn how the words an author uses can reveal his or her point of view.</p>
            <div class="activity-thumbnail">
                <img src="<?php echo $config['paths']['img']['content'] . '/authors-viewpoint-lesson.png'; ?>" alt="Author's Viewpoint Lesson">
            </div>
            <div class="activity-open">
                <p><a href="http://www.studyzone.org/testprep/ela4/o/authorsviewpointl.cfm" target="_blank" class="btn btn-primary" role="button">Open</a></p>
            </div>
        </div>
        
        <div class="activity">
            <h3><a href="http://www.shsu.edu/txcae/Powerpoints/prepostest/authorpovpostest.html" target="_blank" class="alt-link-color"><?php echo ++$activityCount . ". "; ?>Author's Purpose &amp; Point of View Activity</a></h3>
            <p>Answer each question about the author's purpose or point of view. Click on the star icon after completing the assignment to check your answers.</p>
            <p>Authors write for many different reasons. Below are three common objectives that writers attempt to achieve in their work:</p>
            <ul class="activity-ul">
                <li>To Entertain</li>
                <li>To Persuade</li>
                <li>To Inform</li>
            </ul>
            <div class="activity-thumbnail">
                <img src="<?php echo $config['paths']['img']['content'] . '/authors-purpose-pov-activity.png'; ?>" alt="Author's Purpose &amp; Point of View Activity">
            </div>
            <div class="activity-open">
                <p><a href="http://www.shsu.edu/txcae/Powerpoints/prepostest/authorpovpostest.html" target="_blank" class="btn btn-primary" role="button">Open</a></p>
            </div>
        </div>
        
        <div class="activity">
            <h3><a href="<?php echo $abeRoutes['english']['detWordMeanings']; ?>" class="alt-link-color"><?php echo ++$activityCount . ". "; ?>Determining Word Meanings</a></h3>
            <p>Learn to identify the prefix and suffix of an unfamiliar word to better understand its definition. <span class="glyphicon glyphicon-headphones" aria-hidden="true"></span></p>
            <div class="activity-thumbnail">
                <img src="<?php echo $config['paths']['img']['content'] . '/determining-word-meanings.png'; ?>" alt="Determining Word Meanings">
            </div>
            <div class="activity-open">
                <p><a href="<?php echo $abeRoutes['english']['detWordMeanings']; ?>" class="btn btn-primary" role="button">Open</a></p>
            </div>
        </div>
        
        <div class="activity">
            <h3><a href="http://www.softschools.com/quizzes/grammar/prefix/quiz304.html" target="_blank" class="alt-link-color"><?php echo ++$activityCount . ". "; ?>Identify the Correct Prefix</a></h3>
            <p>Determine the prefix for each word in parentheses that best completes the sentence. A <span class="bold">prefix</span> is a group of letters that is added to the beginning of a word to change its meaning. <span class="bold">Consider the following example:</span></p>
            <p>Jack __________ our tickets for the concert tomorrow night. (ordered)</p>
            <ul class="activity-ul">
                <li>A: de-</li>
                <li>B: pre-</li>
                <li>C: mis-</li>
                <li>D: under-</li>
            </ul>
            <p>The answer is option B because the prefix <span class="bold">pre-</span> means <span class="italics">'before.'</span> Jack <span class="bold">pre</span>ordered the tickets by purchasing them before the concert. You may want to review the above video on <a href="<?php echo $abeRoutes['english']['detWordMeanings']; ?>" target="_blank">determining word meanings</a>.</p>
            <div class="activity-thumbnail">
                <img src="<?php echo $config['paths']['img']['content'] . '/identify-the-correct-prefix.png'; ?>" alt="Identify the Correct Prefix">
            </div>
            <div class="activity-open">
                <p><a href="http://www.softschools.com/quizzes/grammar/prefix/quiz304.html" target="_blank" class="btn btn-primary" role="button">Open</a></p>
            </div>
        </div>
        
        <div class="activity">
            <h3><a href="http://www.softschools.com/quizzes/grammar/suffix/quiz305.html" target="_blank" class="alt-link-color"><?php echo ++$activityCount . ". "; ?>Identify the Correct Suffix</a></h3>
            <p>Determine the suffix for each word in parentheses that best completes the sentence. A <span class="bold">suffix</span>is a group of letters that is added to the end of a word to change its meaning. <span class="bold">Consider the following example:</span></p>
            <p>Christine has worked at the store __________ than Sam. (long)</p>
            <ul class="activity-ul">
                <li>A: -or</li>
                <li>B: -ness</li>
                <li>C: -ing</li>
                <li>D: -er</li>
            </ul>
            <p>The answer is option D because the suffix <span class="bold">-er</span> means <span class="italics">'more.'</span> Christine has spent more time working because she was employed first. Therefore, Christine has worked long<span class="bold">er</span> than Sam. You may want to review the above video on <a href="<?php echo $abeRoutes['english']['detWordMeanings']; ?>" target="_blank">determining word meanings</a>.</p>
            <div class="activity-thumbnail">
                <img src="<?php echo $config['paths']['img']['content'] . '/identify-the-correct-suffix.png'; ?>" alt="Identify the Correct Suffix">
            </div>
            <div class="activity-open">
                <p><a href="http://www.softschools.com/quizzes/grammar/suffix/quiz305.html" target="_blank" class="btn btn-primary" role="button">Open</a></p>
            </div>
        </div>
        
        <div class="activity">
            <h3><a href="<?php echo $abeRoutes['english']['factOpinion']; ?>" class="alt-link-color"><?php echo ++$activityCount . ". "; ?>Fact or Opinion</a></h3>
            <p>Learn to identify the difference between fact and opinion in written text. <span class="glyphicon glyphicon-headphones" aria-hidden="true"></span></p>
            <div class="activity-thumbnail">
                <img src="<?php echo $config['paths']['img']['content'] . '/fact-or-opinion.png'; ?>" alt="Fact or Opinion">
            </div>
            <div class="activity-open">
                <p><a href="<?php echo $abeRoutes['english']['factOpinion']; ?>" class="btn btn-primary" role="button">Open</a></p>
            </div>
        </div>
        
        <div class="activity">
            <h3><a href="http://www.softschools.com/quizzes/language_arts/fact_or_opinion/quiz1329.html" target="_blank" class="alt-link-color"><?php echo ++$activityCount . ". "; ?>Fact or Opinion: Question Set 1</a></h3>
            <p>Identify whether each sentence is fact or opinion. After selecting the above link, click on the orange button to start the activity. You may want to review the above video on <a href="<?php echo $abeRoutes['english']['factOpinion']; ?>" target="_blank">fact or opinion</a>.</p>
            <ul class="activity-ul">
                <li><span class="bold">A fact</span> <span class="italics">is a statement that can be proven to be true with evidence</span>.</li>
                <li><span class="bold">An opinion</span> <span class="italics">is a statement that people believe or feel to be true</span>.</li>
            </ul>
            <div class="activity-thumbnail">
                <img src="<?php echo $config['paths']['img']['content'] . '/fact-or-opinion-qs1.png'; ?>" alt="Fact or Opinion: Question Set 1">
            </div>
            <div class="activity-open">
                <p><a href="http://www.softschools.com/quizzes/language_arts/fact_or_opinion/quiz1329.html" target="_blank" class="btn btn-primary" role="button">Open</a></p>
            </div>
        </div>
        
        <div class="activity">
            <h3><a href="http://www.shsu.edu/txcae/Powerpoints/prepostest/fact1postest.html" target="_blank" class="alt-link-color"><?php echo ++$activityCount . ". "; ?>Fact or Opinion: Question Set 2</a></h3>
            <p>Identify whether each sentence is fact or opinion. Click the star icon after completing the assignment to check your answers. You may want to review the above video on <a href="<?php echo $abeRoutes['english']['factOpinion']; ?>" target="_blank">fact or opinion</a>.</p>
            <ul class="activity-ul">
                <li><span class="bold">A fact</span> <span class="italics">is a statement that can be proven to be true with evidence</span>.</li>
                <li><span class="bold">An opinion</span> <span class="italics">is a statement that people believe or feel to be true</span>.</li>
            </ul>
            <div class="activity-thumbnail">
                <img src="<?php echo $config['paths']['img']['content'] . '/fact-or-opinion-qs2.png'; ?>" alt="Fact or Opinion: Question Set 2">
            </div>
            <div class="activity-open">
                <p><a href="http://www.shsu.edu/txcae/Powerpoints/prepostest/fact1postest.html" target="_blank" class="btn btn-primary" role="button">Open</a></p>
            </div>
        </div>
        
        <div class="activity">
            <h3><a href="http://www.shsu.edu/txcae/Powerpoints/prepostest/factIIpostest.html" target="_blank" class="alt-link-color"><?php echo ++$activityCount . ". "; ?>Fact or Opinion: Question Set 3</a></h3>
            <p>Identify whether each sentence is fact or opinion. Click the star icon after completing the assignment to check your answers. You may want to review the above video on <a href="<?php echo $abeRoutes['english']['factOpinion']; ?>" target="_blank">fact or opinion</a>.</p>
            <ul class="activity-ul">
                <li><span class="bold">A fact</span> <span class="italics">is a statement that can be proven to be true with evidence</span>.</li>
                <li><span class="bold">An opinion</span> <span class="italics">is a statement that people believe or feel to be true</span>.</li>
            </ul>
            <div class="activity-thumbnail">
                <img src="<?php echo $config['paths']['img']['content'] . '/fact-or-opinion-qs3.png'; ?>" alt="Fact or Opinion: Question Set 3">
            </div>
            <div class="activity-open">
                <p><a href="http://www.shsu.edu/txcae/Powerpoints/prepostest/factIIpostest.html" target="_blank" class="btn btn-primary" role="button">Open</a></p>
            </div>
        </div>
        
        <div class="activity">
            <h3><a href="http://www.shsu.edu/txcae/Powerpoints/prepostest/fact3postest.html" target="_blank" class="alt-link-color"><?php echo ++$activityCount . ". "; ?>Fact or Opinion: Question Set 4</a></h3>
            <p>Identify whether each sentence is fact or opinion. Click the star icon after completing the assignment to check your answers. You may want to review the above video on <a href="<?php echo $abeRoutes['english']['factOpinion']; ?>" target="_blank">fact or opinion</a>.</p>
            <ul class="activity-ul">
                <li><span class="bold">A fact</span> <span class="italics">is a statement that can be proven to be true with evidence</span>.</li>
                <li><span class="bold">An opinion</span> <span class="italics">is a statement that people believe or feel to be true</span>.</li>
            </ul>
            <div class="activity-thumbnail">
                <img src="<?php echo $config['paths']['img']['content'] . '/fact-or-opinion-qs4.png'; ?>" alt="Fact or Opinion: Question Set 4">
            </div>
            <div class="activity-open">
                <p><a href="http://www.shsu.edu/txcae/Powerpoints/prepostest/fact3postest.html" target="_blank" class="btn btn-primary" role="button">Open</a></p>
            </div>
        </div>
        
        <div class="activity">
            <h3><a href="<?php echo $abeRoutes['english']['historicalContext']; ?>" class="alt-link-color"><?php echo ++$activityCount . ". "; ?>Historical Context</a></h3>
            <p>Learn to identify how writing can be affected by the historical period during which it was written. <span class="glyphicon glyphicon-headphones" aria-hidden="true"></span></p>
            <div class="activity-thumbnail">
                <img src="<?php echo $config['paths']['img']['content'] . '/historical-context.png'; ?>" alt="Historical Context">
            </div>
            <div class="activity-open">
                <p><a href="<?php echo $abeRoutes['english']['historicalContext']; ?>" class="btn btn-primary" role="button">Open</a></p>
            </div>
        </div>
        
        <div class="activity">
            <h3><a href="<?php echo $abeRoutes['english']['logicalConclusion']; ?>" class="alt-link-color"><?php echo ++$activityCount . ". "; ?>Identifying a Logical Conclusion</a></h3>
            <p>Learn to identify the conclusion in a piece of writing. This can help you determine whether you agree or disagree with the writer. <span class="glyphicon glyphicon-headphones" aria-hidden="true"></span></p>
            <div class="activity-thumbnail">
                <img src="<?php echo $config['paths']['img']['content'] . '/identifying-logical-conclusion.png'; ?>" alt="Identifying a Logical Conclusion">
            </div>
            <div class="activity-open">
                <p><a href="<?php echo $abeRoutes['english']['logicalConclusion']; ?>" class="btn btn-primary" role="button">Open</a></p>
            </div>
        </div>
        
        <div class="activity">
            <h3><a href="<?php echo $abeRoutes['english']['inference']; ?>" class="alt-link-color"><?php echo ++$activityCount . ". "; ?>Inference</a></h3>
            <p>Learn about making inferences while reading a piece of text. <span class="glyphicon glyphicon-headphones" aria-hidden="true"></span></p>
            <div class="activity-thumbnail">
                <img src="<?php echo $config['paths']['img']['content'] . '/inference.png'; ?>" alt="Inference">
            </div>
            <div class="activity-open">
                <p><a href="<?php echo $abeRoutes['english']['inference']; ?>" class="btn btn-primary" role="button">Open</a></p>
            </div>
        </div>
        
        <div class="activity">
            <h3><a href="<?php echo $abeRoutes['english']['inferencePractice']; ?>" class="alt-link-color"><?php echo ++$activityCount . ". "; ?>Inference Practice</a></h3>
            <p>Answer the questions by making inferences from each passage. <span class="glyphicon glyphicon-headphones" aria-hidden="true"></span> <span class="glyphicon glyphicon-flash" aria-hidden="true"></span></p>
            <div class="activity-thumbnail">
                <img src="<?php echo $config['paths']['img']['content'] . '/inference-practice.png'; ?>" alt="Inference Practice">
            </div>
            <div class="activity-open">
                <p><a href="<?php echo $abeRoutes['english']['inferencePractice']; ?>" class="btn btn-primary" role="button">Open</a></p>
            </div>
        </div>
        
        <div class="activity">
            <h3><a href="<?php echo $abeRoutes['english']['theme']; ?>" class="alt-link-color"><?php echo ++$activityCount . ". "; ?>Theme</a></h3>
            <p>Learn to identify the lesson or moral embedded in a piece of literature. <span class="glyphicon glyphicon-headphones" aria-hidden="true"></span></p>
            <div class="activity-thumbnail">
                <img src="<?php echo $config['paths']['img']['content'] . '/theme.png'; ?>" alt="Theme">
            </div>
            <div class="activity-open">
                <p><a href="<?php echo $abeRoutes['english']['theme']; ?>" class="btn btn-primary" role="button">Open</a></p>
            </div>
        </div>
        
        <div class="activity">
            <h3><a href="<?php echo $abeRoutes['english']['topicsMainIdeas']; ?>" class="alt-link-color"><?php echo ++$activityCount . ". "; ?>Topics &amp; Main Ideas</a></h3>
            <p>Learn to recognize the main subject of a text. Also, learn to identify the most important points it's trying to make. <span class="glyphicon glyphicon-headphones" aria-hidden="true"></span></p>
            <div class="activity-thumbnail">
                <img src="<?php echo $config['paths']['img']['content'] . '/topics-main-ideas.png'; ?>" alt="Theme">
            </div>
            <div class="activity-open">
                <p><a href="<?php echo $abeRoutes['english']['topicsMainIdeas']; ?>" class="btn btn-primary" role="button">Open</a></p>
            </div>
        </div>
        
        <hr>
        
        <div class="activity alt-link-color">
            <h4>Credits:</h4>
            <p><?php echo ++$refCount . ". "; ?><a href="http://www.mometrix.com/academy/authors-position/" target="_blank">Mometrix Test Preparation</a>.</p>
            <p><?php echo ++$refCount . ". "; ?><a href="http://www.studyzone.org/testprep/ela4/o/authorsviewpointl.cfm" target="_blank">Study Zone: Oswego City School District</a>.</p>
            <p><?php echo ++$refCount . ". "; ?><a href="http://www.shsu.edu/txcae/Powerpoints/prepostest/authorpovpostest.html" target="_blank">The Texas Center for Academic Excellence</a>.</p>
            <p><?php echo ++$refCount . ". "; ?><a href="http://www.mometrix.com/academy/determining-word-meanings/" target="_blank">Mometrix Test Preparation</a>.</p>
            <p><?php echo ++$refCount . ". "; ?><a href="http://www.softschools.com/quizzes/grammar/prefix/quiz304.html" target="_blank">softschools.com</a>.</p>
            <p><?php echo ++$refCount . ". "; ?><a href="http://www.softschools.com/quizzes/grammar/suffix/quiz305.html" target="_blank">softschools.com</a>.</p>
            <p><?php echo ++$refCount . ". "; ?><a href="http://www.mometrix.com/academy/fact-or-opinion/" target="_blank">Mometrix Test Preparation</a>.</p>
            <p><?php echo ++$refCount . ". "; ?><a href="http://www.softschools.com/quizzes/language_arts/fact_or_opinion/quiz1329.html" target="_blank">softschools.com</a>.</p>
            <p><?php echo ++$refCount . ". "; ?><a href="http://www.shsu.edu/txcae/Powerpoints/prepostest/fact1postest.html" target="_blank">The Texas Center for Academic Excellence</a>.</p>
            <p><?php echo ++$refCount . ". "; ?><a href="http://www.shsu.edu/txcae/Powerpoints/prepostest/factIIpostest.html" target="_blank">The Texas Center for Academic Excellence</a>.</p>
            <p><?php echo ++$refCount . ". "; ?><a href="http://www.shsu.edu/txcae/Powerpoints/prepostest/fact3postest.html" target="_blank">The Texas Center for Academic Excellence</a>.</p>
            <p><?php echo ++$refCount . ". "; ?><a href="http://www.mometrix.com/academy/historical-context/" target="_blank">Mometrix Test Preparation</a>.</p>
            <p><?php echo ++$refCount . ". "; ?><a href="http://www.mometrix.com/academy/identifying-a-logical-conclusion/" target="_blank">Mometrix Test Preparation</a>.</p>
            <p><?php echo ++$refCount . ". "; ?><a href="http://www.mometrix.com/academy/inference/" target="_blank">Mometrix Test Preparation</a>.</p>
            <p><?php echo ++$refCount . ". "; ?><a href="http://www.ereadingworksheets.com/reading-worksheets/online-inference-practice-1.htm" target="_blank">Ereading Worksheets</a>.</p>
            <p><?php echo ++$refCount . ". "; ?><a href="http://www.mometrix.com/academy/theme/" target="_blank">Mometrix Test Preparation</a>.</p>
            <p><?php echo ++$refCount . ". "; ?><a href="http://www.mometrix.com/academy/topics-and-main-ideas/" target="_blank">Mometrix Test Preparation</a>.</p>
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