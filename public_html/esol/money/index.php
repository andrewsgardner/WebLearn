<?php 
$currentPage = "esol";
$pageTitle = "Money | ESOL Lab";
$pageDesc = "Learn to identify different units of U.S. currency on the Springfield Adult Learning Center's ESOL Lab.";
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
    <li><a href="<?php echo $esolRoutes['specialTopics']['money']; ?>">Money</a></li>
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
        <h2>Money</h2>
        
        <?php preMediaBlock(); ?>
        
        <div class="activity">
            <h3><a href="<?php echo $esolRoutes['specialTopics']['amCurrencyFlashcards']; ?>" class="alt-link-color"><?php echo ++$activityCount . ". "; ?>American Currency Flashcards</a></h3>
            <p>Learn to identify different units of U.S. money. <span class="glyphicon glyphicon-headphones" aria-hidden="true"></span></p>
            <div class="activity-thumbnail">
                <img src="<?php echo $config['paths']['img']['content'] . '/american-currency-flashcards.jpg'; ?>" alt="American Currency Flashcards">
            </div>
            <div class="activity-open">
                <p><a href="<?php echo $esolRoutes['specialTopics']['amCurrencyFlashcards']; ?>" class="btn btn-primary" role="button">Open</a></p>
            </div>
        </div>
        
        <div class="activity">
            <h3><a href="http://www.learnamericanenglishonline.com/Red%20Level/R21_Money.html" target="_blank" class="alt-link-color"><?php echo ++$activityCount . ". "; ?>Talking About Money</a></h3>
            <p>Learn about different U.S. coins and bills. View the text boxes below each audio clip while you listen to them. <span class="glyphicon glyphicon-headphones" aria-hidden="true"></span></p>
            <div class="activity-thumbnail">
                <img src="<?php echo $config['paths']['img']['content'] . '/talking-about-money.png'; ?>" alt="Talking About Money">
            </div>
            <div class="activity-open">
                <p><a href="http://www.learnamericanenglishonline.com/Red%20Level/R21_Money.html" target="_blank" class="btn btn-primary" role="button">Open</a></p>
            </div>
        </div>
        
        
        <div class="credits alt-link-color">
            <h4>Credits:</h4>
            <p><?php echo ++$refCount . ". "; ?><a href="https://en.islcollective.com/resources/printables/worksheets_doc_docx/american_currency_flashcards/money-american-money/8457" target="_blank">Islcollective.com</a>.</p>
            <p><?php echo ++$refCount . ". "; ?><a href="http://www.learnamericanenglishonline.com/Red%20Level/R21_Money.html" target="_blank">Learn American English Online</a>.</p>
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