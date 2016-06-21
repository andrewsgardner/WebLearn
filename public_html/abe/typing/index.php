<?php 
$currentPage = "abe";
$pageTitle = "ABE Lab | Typing";
$pageDesc = "Typing distance learning activities for Adult Basic Education students.";
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
    <li><a href="<?php echo $abeRoutes['compLit']['typing']; ?>">Typing</a></li>
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
        <h2>Typing</h2>
        
        <?php preMediaBlock(); ?>
        
        <div class="activity">
            <h3><a href="https://www.typing.com/" target="_blank" class="alt-link-color"><?php echo ++$activityCount . ". "; ?>Typing.com</a></h3>
            <p>Typing.com will teach you how to type without looking at the keyboard. This online keyboarding tutor includes lessons to increase the speed and accuracy of your typing. You can even work towards earning a free official typing certification. Make sure to <a href="https://www.typing.com/student/login" target="_blank">create a user account</a>, and to always log in every time you use Typing.com.</p>
            <div class="activity-thumbnail">
                <img src="<?php echo $config['paths']['img']['content'] . '/typing.png'; ?>" alt="Typing.com">
            </div>
            <div class="activity-open">
                <p><a href="https://www.typing.com/" target="_blank" class="btn btn-primary" role="button">Open</a></p>
            </div>
        </div>
        
        <div class="activity">
            <h3><a href="https://abeweb.mpls.k12.mn.us/type/FP01.html" target="_blank" class="alt-link-color"><?php echo ++$activityCount . ". "; ?>500 Most Common English Words</a></h3>
            <p>Practice typing the 500 most common English words.</p>
            <div class="activity-thumbnail">
                <img src="<?php echo $config['paths']['img']['content'] . '/500-most-common-english-words.png'; ?>" alt="500 Most Common English Words">
            </div>
            <div class="activity-open">
                <p><a href="https://abeweb.mpls.k12.mn.us/type/FP01.html" target="_blank" class="btn btn-primary" role="button">Open</a></p>
            </div>
        </div>
        
        <div class="activity">
            <h3><a href="https://abeweb.mpls.k12.mn.us/type/FP02.html" target="_blank" class="alt-link-color"><?php echo ++$activityCount . ". "; ?>100 Most Common English Verbs</a></h3>
            <p>Practice typing the 100 most common English verbs.</p>
            <div class="activity-thumbnail">
                <img src="<?php echo $config['paths']['img']['content'] . '/100-most-common-english-verbs.png'; ?>" alt="100 Most Common English Verbs">
            </div>
            <div class="activity-open">
                <p><a href="https://abeweb.mpls.k12.mn.us/type/FP02.html" target="_blank" class="btn btn-primary" role="button">Open</a></p>
            </div>
        </div>
        
        <div class="activity">
            <h3><a href="https://abeweb.mpls.k12.mn.us/type/08-Web-Addresses.html" target="_blank" class="alt-link-color"><?php echo ++$activityCount . ". "; ?>Web Addresses</a></h3>
            <p>Practice typing out common web addresses.</p>
            <div class="activity-thumbnail">
                <img src="<?php echo $config['paths']['img']['content'] . '/web-addresses.png'; ?>" alt="Web Addresses">
            </div>
            <div class="activity-open">
                <p><a href="https://abeweb.mpls.k12.mn.us/type/08-Web-Addresses.html" target="_blank" class="btn btn-primary" role="button">Open</a></p>
            </div>
        </div>
        
        <div class="activity">
            <h3><a href="https://abeweb.mpls.k12.mn.us/type/11-English-Pronouns.html" target="_blank" class="alt-link-color"><?php echo ++$activityCount . ". "; ?>English Pronouns</a></h3>
            <p>Practice typing out English pronouns.</p>
            <div class="activity-thumbnail">
                <img src="<?php echo $config['paths']['img']['content'] . '/english-pronouns.png'; ?>" alt="English Pronouns">
            </div>
            <div class="activity-open">
                <p><a href="https://abeweb.mpls.k12.mn.us/type/11-English-Pronouns.html" target="_blank" class="btn btn-primary" role="button">Open</a></p>
            </div>
        </div>
        
        <div class="activity">
            <h3><a href="https://abeweb.mpls.k12.mn.us/type/04-Computers-Internet.html" target="_blank" class="alt-link-color"><?php echo ++$activityCount . ". "; ?>Computer &amp; Internet Terms</a></h3>
            <p>Practice typing out computer and Internet-related terms.</p>
            <div class="activity-thumbnail">
                <img src="<?php echo $config['paths']['img']['content'] . '/computer-and-internet-terms.png'; ?>" alt="Computer &amp; Internet Terms">
            </div>
            <div class="activity-open">
                <p><a href="https://abeweb.mpls.k12.mn.us/type/04-Computers-Internet.html" target="_blank" class="btn btn-primary" role="button">Open</a></p>
            </div>
        </div>
        
        
        <div class="credits alt-link-color">
            <h4>Credits:</h4>
            <p><?php echo ++$refCount . ". "; ?><a href="https://www.typing.com/" target="_blank">Typing.com</a>.</p>
            <p><?php echo ++$refCount . ". "; ?><a href="https://abeweb.mpls.k12.mn.us/type/FP01.html" target="_blank">Minneapolis ABE Touch Typing Curriculum</a>.</p>
            <p><?php echo ++$refCount . ". "; ?><a href="https://abeweb.mpls.k12.mn.us/type/FP02.html" target="_blank">Minneapolis ABE Touch Typing Curriculum</a>.</p>
            <p><?php echo ++$refCount . ". "; ?><a href="https://abeweb.mpls.k12.mn.us/type/08-Web-Addresses.html" target="_blank">Minneapolis ABE Touch Typing Curriculum</a>.</p>
            <p><?php echo ++$refCount . ". "; ?><a href="https://abeweb.mpls.k12.mn.us/type/11-English-Pronouns.html" target="_blank">Minneapolis ABE Touch Typing Curriculum</a>.</p>
            <p><?php echo ++$refCount . ". "; ?><a href="https://abeweb.mpls.k12.mn.us/type/04-Computers-Internet.html" target="_blank">Minneapolis ABE Touch Typing Curriculum</a>.</p>
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