<?php 
$currentPage = "esol";
$pageTitle = "ESOL Lab | Springfield Adult Learning Center";
$pageDesc = "ESOL Lab hosts distance learning activities for English for Speakers of Other Languages students at the Springfield Adult Learning Center.";
require_once("config.php");
require_once(LIBRARY_PATH . "/contentPageFunctions.php");

ob_start();
?>

<!-- BEGIN page breadcrumbs -->

<ol class="breadcrumb">
    <li><a href="/">WebLearn</a></li>
    <li><a href="<?php echo $esolRoutes['esolHome']; ?>">ESOL Lab</a></li>
</ol>

<!-- END page breadcrumbs -->

<?php 
$pageBreadbrumbs = ob_get_contents();
ob_get_clean();

ob_start();
?>

<!-- BEGIN page content -->
    
<div class="row">
    <div class="col-xs-12">
        <h1>ESOL Lab</h1>
        <strong class="subheading text-muted">Springfield Adult Learning Center</strong>
    </div>
</div>

<div class="row media-gap">
    <div class="col-xs-12">
        <h2>General ESOL</h2>
        <p class="subject-desc">Choose a general ESOL activity from the options provided below.</p>
    </div>
    <div class="col-xs-12 col-md-4">
        
        <?php preMediaBlockCenter(); ?>
                    
                    <h4>General ESOL</h4>
                    <p><a href="<?php echo $esolRoutes['generalEsol']['genEsolDir']; ?>" class="btn btn-primary" role="button">Open</a></p>
                    
        <?php postMediaBlock(); ?>
        
    </div>
</div>

<div class="row media-gap">
    <div class="col-xs-12">
        <h2>Special Topics</h2>
        <p class="subject-desc">Choose an ESOL special topics activity from the options provided below.</p>
    </div>
    <div class="col-xs-12 col-md-4">
        
        <?php preMediaBlockCenter(); ?>
                    
                    <h4>Citizenship</h4>
                    <p><a href="<?php echo $esolRoutes['specialTopics']['citizenship']; ?>" class="btn btn-primary" role="button">Open</a></p>
                    
        <?php postMediaBlock(); ?>
        
    </div>
    <div class="col-xs-12 col-md-4">
        
        <?php preMediaBlockCenter(); ?>
                    
                    <h4>Grammar</h4>
                    <p><a href="<?php echo $esolRoutes['specialTopics']['grammar']; ?>" class="btn btn-primary" role="button">Open</a></p>
                    
        <?php postMediaBlock(); ?>
        
    </div>
    <div class="col-xs-12 col-md-4">
        
        <?php preMediaBlockCenter(); ?>
                    
                    <h4>Health</h4>
                    <p><a href="<?php echo $esolRoutes['specialTopics']['health']; ?>" class="btn btn-primary" role="button">Open</a></p>
                    
        <?php postMediaBlock(); ?>
        
    </div>
    <div class="col-xs-12 col-md-4">
        
        <?php preMediaBlockCenter(); ?>
                    
                    <h4>MA Learner's Permit</h4>
                    <p><a href="<?php echo $esolRoutes['specialTopics']['learnersPermit']; ?>" class="btn btn-primary" role="button">Open</a></p>
                    
        <?php postMediaBlock(); ?>
        
    </div>
    <div class="col-xs-12 col-md-4">
        
        <?php preMediaBlockCenter(); ?>
                    
                    <h4>Money</h4>
                    <p><a href="<?php echo $esolRoutes['specialTopics']['money']; ?>" class="btn btn-primary" role="button">Open</a></p>
                    
        <?php postMediaBlock(); ?>
        
    </div>
    <div class="col-xs-12 col-md-4">
        
        <?php preMediaBlockCenter(); ?>
                    
                    <h4>Parents</h4>
                    <p><a href="<?php echo $esolRoutes['specialTopics']['parents']; ?>" class="btn btn-primary" role="button">Open</a></p>
                    
        <?php postMediaBlock(); ?>
        
    </div>
    <div class="col-xs-12 col-md-4">
        
        <?php preMediaBlockCenter(); ?>
                    
                    <h4>Pronunciation</h4>
                    <p><a href="<?php echo $esolRoutes['specialTopics']['pronunciation']; ?>" class="btn btn-primary" role="button">Open</a></p>
                    
        <?php postMediaBlock(); ?>
        
    </div>
    <div class="col-xs-12 col-md-4">
        
        <?php preMediaBlockCenter(); ?>
                    
                    <h4>Vocabulary</h4>
                    <p><a href="<?php echo $esolRoutes['specialTopics']['vocabulary']; ?>" class="btn btn-primary" role="button">Open</a></p>
                    
        <?php postMediaBlock(); ?>
        
    </div>
    <div class="col-xs-12 col-md-4">
        
        <?php preMediaBlockCenter(); ?>
                    
                    <h4>Workplace</h4>
                    <p><a href="<?php echo $esolRoutes['specialTopics']['workplace']; ?>" class="btn btn-primary" role="button">Open</a></p>
                    
        <?php postMediaBlock(); ?>
        
    </div>
</div>

<div class="row">
    <div class="col-xs-12">
        <h2>Computer Literacy</h2>
        <p class="subject-desc">Choose an area of computer literacy to study from the options provided below.</p>
    </div>
    <div class="col-xs-12 col-md-4">
        
        <?php preMediaBlockCenter(); ?>
                    
                    <h4>Computer Fundamentals</h4>
                    <p><a href="<?php echo $esolRoutes['compLit']['compFundamentals']; ?>" class="btn btn-primary" role="button">Open</a></p>
                    
        <?php postMediaBlock(); ?>
        
    </div>
    <div class="col-xs-12 col-md-4">
        
        <?php preMediaBlockCenter(); ?>
                    
                    <h4>Email</h4>
                    <p><a href="<?php echo $esolRoutes['compLit']['email']; ?>" class="btn btn-primary" role="button">Open</a></p>
                    
        <?php postMediaBlock(); ?>
        
    </div>
    <div class="col-xs-12 col-md-4">
        
        <?php preMediaBlockCenter(); ?>
                    
                    <h4>Internet Browsing</h4>
                    <p><a href="<?php echo $esolRoutes['compLit']['internetBrowsing']; ?>" class="btn btn-primary" role="button">Open</a></p>
                    
        <?php postMediaBlock(); ?>
        
    </div>
    <div class="col-xs-12 col-md-4">
        
        <?php preMediaBlockCenter(); ?>
                    
                    <h4>Microsoft Excel</h4>
                    <p><a href="<?php echo $esolRoutes['compLit']['excel']; ?>" class="btn btn-primary" role="button">Open</a></p>
                    
        <?php postMediaBlock(); ?>
        
    </div>
    <div class="col-xs-12 col-md-4">
        
        <?php preMediaBlockCenter(); ?>
                    
                    <h4>Microsoft PowerPoint</h4>
                    <p><a href="<?php echo $esolRoutes['compLit']['powerPoint']; ?>" class="btn btn-primary" role="button">Open</a></p>
                    
        <?php postMediaBlock(); ?>
        
    </div>
    <div class="col-xs-12 col-md-4">
        
        <?php preMediaBlockCenter(); ?>
                    
                    <h4>Microsoft Word</h4>
                    <p><a href="<?php echo $esolRoutes['compLit']['word']; ?>" class="btn btn-primary" role="button">Open</a></p>
                    
        <?php postMediaBlock(); ?>
        
    </div>
    <div class="col-xs-12 col-md-4">
        
        <?php preMediaBlockCenter(); ?>
                    
                    <h4>Search Engines</h4>
                    <p><a href="<?php echo $esolRoutes['compLit']['searchEngines']; ?>" class="btn btn-primary" role="button">Open</a></p>
                    
        <?php postMediaBlock(); ?>
        
    </div>
    <div class="col-xs-12 col-md-4">
        
        <?php preMediaBlockCenter(); ?>
                    
                    <h4>Typing</h4>
                    <p><a href="<?php echo $esolRoutes['compLit']['typing']; ?>" class="btn btn-primary" role="button">Open</a></p>
                    
        <?php postMediaBlock(); ?>
        
    </div>
    <div class="col-xs-12 col-md-4">
        
        <?php preMediaBlockCenter(); ?>
                    
                    <h4>Windows 7</h4>
                    <p><a href="<?php echo $esolRoutes['compLit']['win7']; ?>" class="btn btn-primary" role="button">Open</a></p>
                    
        <?php postMediaBlock(); ?>
        
    </div>
</div>

<!-- END page content -->

<?php 
$pageContent = ob_get_contents();
ob_get_clean();

$variables = array(
    "pageBreadbrumbs" => $pageBreadbrumbs,
    "pageContent" => $pageContent
);
renderContentPageLayout("/contentPage.php", $variables);
?>