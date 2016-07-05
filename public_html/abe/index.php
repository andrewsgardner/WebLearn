<?php 
$currentPage = "abe";
$pageTitle = "ABE Lab | Springfield Adult Learning Center";
$pageDesc = "ABE Lab hosts English, math, science, social studies, and computer literacy distance learning activities for Adult Basic Education students.";
require_once("config.php");
require_once(LIBRARY_PATH . "/contentPageFunctions.php");

ob_start();
?>

<!-- BEGIN page breadcrumbs -->

<ol class="breadcrumb">
    <li><a href="/">WebLearn</a></li>
    <li><a href="<?php echo $abeRoutes['abeHome']; ?>">ABE Lab</a></li>
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
        <h1>ABE Lab</h1>
        <strong class="subheading text-muted">Springfield Adult Learning Center</strong>
    </div>
</div>

<div class="row media-gap">
    <div class="col-xs-12">
        <h2>English</h2>
        <p class="subject-desc">Choose an area of English to study from the options provided below.</p>
    </div>
    <div class="col-xs-12 col-md-4">
        
        <?php preMediaBlockCenter(); ?>
                    
                    <h4>Grammar</h4>
                    <p><a href="<?php echo $abeRoutes['english']['grammar']; ?>" class="btn btn-primary" role="button">Open</a></p>
                    
        <?php postMediaBlock(); ?>
        
    </div>
    <div class="col-xs-12 col-md-4">
        
        <?php preMediaBlockCenter(); ?>
                    
                    <h4>Punctuation</h4>
                    <p><a href="<?php echo $abeRoutes['english']['punctuation']; ?>" class="btn btn-primary" role="button">Open</a></p>
                    
        <?php postMediaBlock(); ?>
    
    </div>
    <div class="col-xs-12 col-md-4">
        
        <?php preMediaBlockCenter(); ?>
                    
                    <h4>Reading</h4>
                    <p><a href="<?php echo $abeRoutes['english']['reading']; ?>" class="btn btn-primary" role="button">Open</a></p>
                    
        <?php postMediaBlock(); ?>
        
    </div>
    <div class="col-xs-12 col-md-4">
        
        <?php preMediaBlockCenter(); ?>
                    
                    <h4>Writing</h4>
                    <p><a href="<?php echo $abeRoutes['english']['writing']; ?>" class="btn btn-primary" role="button">Open</a></p>
                    
        <?php postMediaBlock(); ?>
        
    </div>
</div>

<div class="row media-gap">
    <div class="col-xs-12">
        <h2>Math</h2>
        <p class="subject-desc">Choose an area of math to study from the options provided below.</p>
    </div>
    <div class="col-xs-12 col-md-4">
        
        <?php preMediaBlockCenter(); ?>
                    
                    <h4>Addition</h4>
                    <p><a href="<?php echo $abeRoutes['math']['addition']; ?>" class="btn btn-primary" role="button">Open</a></p>
                    
        <?php postMediaBlock(); ?>
        
    </div>
    <div class="col-xs-12 col-md-4">
        
        <?php preMediaBlockCenter(); ?>
                    
                    <h4>Decimals &amp; Percentages</h4>
                    <p><a href="<?php echo $abeRoutes['math']['decimalsPercentages']; ?>" class="btn btn-primary" role="button">Open</a></p>
                    
        <?php postMediaBlock(); ?>
        
    </div>
    <div class="col-xs-12 col-md-4">
        
        <?php preMediaBlockCenter(); ?>
                    
                    <h4>Division</h4>
                    <p><a href="<?php echo $abeRoutes['math']['division']; ?>" class="btn btn-primary" role="button">Open</a></p>
        
        <?php postMediaBlock(); ?>
        
    </div>
    <div class="col-xs-12 col-md-4">
        
        <?php preMediaBlockCenter(); ?>
                    
                    <h4>Even &amp; Odd Numbers</h4>
                    <p><a href="<?php echo $abeRoutes['math']['evenOddNums']; ?>" class="btn btn-primary" role="button">Open</a></p>
                    
        <?php postMediaBlock(); ?>
        
    </div>
    <div class="col-xs-12 col-md-4">
        
        <?php preMediaBlockCenter(); ?>
                    
                    <h4>Fractions</h4>
                    <p><a href="<?php echo $abeRoutes['math']['fractions']; ?>" class="btn btn-primary" role="button">Open</a></p>
                    
        <?php postMediaBlock(); ?>
        
    </div>
    <div class="col-xs-12 col-md-4">
        
        <?php preMediaBlockCenter(); ?>
                    
                    <h4>Measurement</h4>
                    <p><a href="<?php echo $abeRoutes['math']['measurement']; ?>" class="btn btn-primary" role="button">Open</a></p>
                    
        <?php postMediaBlock(); ?>
        
    </div>
    <div class="col-xs-12 col-md-4">
        
        <?php preMediaBlockCenter(); ?>
                    
                    <h4>Multiplication</h4>
                    <p><a href="<?php echo $abeRoutes['math']['multiplication']; ?>" class="btn btn-primary" role="button">Open</a></p>
                    
        <?php postMediaBlock(); ?>
        
    </div>
    <div class="col-xs-12 col-md-4">
        
        <?php preMediaBlockCenter(); ?>
                    
                    <h4>Number Sense</h4>
                    <p><a href="<?php echo $abeRoutes['math']['numberSense']; ?>" class="btn btn-primary" role="button">Open</a></p>
                    
        <?php postMediaBlock(); ?>
        
    </div>
    <div class="col-xs-12 col-md-4">
        
        <?php preMediaBlockCenter(); ?>
                    
                    <h4>Place Value</h4>
                    <p><a href="<?php echo $abeRoutes['math']['placeValue']; ?>" class="btn btn-primary" role="button">Open</a></p>
                    
        <?php postMediaBlock(); ?>
        
    </div>
    <div class="col-xs-12 col-md-4">
        
        <?php preMediaBlockCenter(); ?>
                    
                    <h4>Subtraction</h4>
                    <p><a href="<?php echo $abeRoutes['math']['subtraction']; ?>" class="btn btn-primary" role="button">Open</a></p>
                    
        <?php postMediaBlock(); ?>
        
    </div>
</div>

<div class="row media-gap">
    <div class="col-xs-12">
        <h2>Science</h2>
        <p class="subject-desc">Choose an area of science to study from the options provided below.</p>
    </div>
    <div class="col-xs-12 col-md-4">
        
        <?php preMediaBlockCenter(); ?>
                    
                    <h4>Body Systems</h4>
                    <p><a href="<?php echo $abeRoutes['science']['bodySystems']; ?>" class="btn btn-primary" role="button">Open</a></p>
                    
        <?php postMediaBlock(); ?>
        
    </div>
    <div class="col-xs-12 col-md-4">
        
        <?php preMediaBlockCenter(); ?>
                    
                    <h4>Photosynthesis</h4>
                    <p><a href="<?php echo $abeRoutes['science']['photosynthesis']; ?>" class="btn btn-primary" role="button">Open</a></p>
                    
        <?php postMediaBlock(); ?>
        
    </div>
    <div class="col-xs-12 col-md-4">
        
        <?php preMediaBlockCenter(); ?>
                    
                    <h4>Scientific Method</h4>
                    <p><a href="<?php echo $abeRoutes['science']['scientificMethod']; ?>" class="btn btn-primary" role="button">Open</a></p>
                    
        <?php postMediaBlock(); ?>
        
    </div>
    <div class="col-xs-12 col-md-4">
        
        <?php preMediaBlockCenter(); ?>
                    
                    <h4>Scientific Terms</h4>
                    <p><a href="<?php echo $abeRoutes['science']['scientificTerms']; ?>" class="btn btn-primary" role="button">Open</a></p>
                    
        <?php postMediaBlock(); ?>
        
    </div>
</div>

<div class="row media-gap">
    <div class="col-xs-12">
        <h2>Social Studies</h2>
        <p class="subject-desc">Choose an area of social studies to study from the options provided below.</p>
    </div>
    <div class="col-xs-12 col-md-4">
        
        <?php preMediaBlockCenter(); ?>
                    
                    <h4>Civil Rights Movement</h4>
                    <p><a href="<?php echo $abeRoutes['socialStudies']['civilRights']; ?>" class="btn btn-primary" role="button">Open</a></p>
                    
        <?php postMediaBlock(); ?>
        
    </div>
    <div class="col-xs-12 col-md-4">
        
        <?php preMediaBlockCenter(); ?>
                    
                    <h4>Civil War</h4>
                    <p><a href="<?php echo $abeRoutes['socialStudies']['civilWar']; ?>" class="btn btn-primary" role="button">Open</a></p>
                    
        <?php postMediaBlock(); ?>
        
    </div>
    <div class="col-xs-12 col-md-4">
        
        <?php preMediaBlockCenter(); ?>
                    
                    <h4>Great Depression</h4>
                    <p><a href="<?php echo $abeRoutes['socialStudies']['greatDepression']; ?>" class="btn btn-primary" role="button">Open</a></p>
                    
        <?php postMediaBlock(); ?>
        
    </div>
    <div class="col-xs-12 col-md-4">
        
        <?php preMediaBlockCenter(); ?>
                    
                    <h4>Revolutionary War</h4>
                    <p><a href="<?php echo $abeRoutes['socialStudies']['revolutionaryWar']; ?>" class="btn btn-primary" role="button">Open</a></p>
                    
        <?php postMediaBlock(); ?>
        
    </div>
    <div class="col-xs-12 col-md-4">
        
        <?php preMediaBlockCenter(); ?>
                    
                    <h4>Separation of Powers</h4>
                    <p><a href="<?php echo $abeRoutes['socialStudies']['separationPowers']; ?>" class="btn btn-primary" role="button">Open</a></p>
                    
        <?php postMediaBlock(); ?>
        
    </div>
    <div class="col-xs-12 col-md-4">
        
        <?php preMediaBlockCenter(); ?>
                    
                    <h4>U.S. Presidents</h4>
                    <p><a href="<?php echo $abeRoutes['socialStudies']['usPresidents']; ?>" class="btn btn-primary" role="button">Open</a></p>
                    
        <?php postMediaBlock(); ?>
        
    </div>
</div>

<div class="row media-gap">
    <div class="col-xs-12">
        <h2>Computer Literacy</h2>
        <p class="subject-desc">Choose an area of computer literacy to study from the options provided below.</p>
    </div>
    <div class="col-xs-12 col-md-4">
        
        <?php preMediaBlockCenter(); ?>
                    
                    <h4>Computer Fundamentals</h4>
                    <p><a href="<?php echo $abeRoutes['compLit']['compFundamentals']; ?>" class="btn btn-primary" role="button">Open</a></p>
                    
        <?php postMediaBlock(); ?>
        
    </div>
    <div class="col-xs-12 col-md-4">
        
        <?php preMediaBlockCenter(); ?>
                    
                    <h4>Email</h4>
                    <p><a href="<?php echo $abeRoutes['compLit']['email']; ?>" class="btn btn-primary" role="button">Open</a></p>
                    
        <?php postMediaBlock(); ?>
        
    </div>
    <div class="col-xs-12 col-md-4">
        
        <?php preMediaBlockCenter(); ?>
                    
                    <h4>Internet Browsing</h4>
                    <p><a href="<?php echo $abeRoutes['compLit']['internetBrowsing']; ?>" class="btn btn-primary" role="button">Open</a></p>
                    
        <?php postMediaBlock(); ?>
        
    </div>
    <div class="col-xs-12 col-md-4">
        
        <?php preMediaBlockCenter(); ?>
                    
                    <h4>Microsoft Excel</h4>
                    <p><a href="<?php echo $abeRoutes['compLit']['excel']; ?>" class="btn btn-primary" role="button">Open</a></p>
                    
        <?php postMediaBlock(); ?>
        
    </div>
    <div class="col-xs-12 col-md-4">
        
        <?php preMediaBlockCenter(); ?>
                    
                    <h4>Microsoft PowerPoint</h4>
                    <p><a href="<?php echo $abeRoutes['compLit']['powerPoint']; ?>" class="btn btn-primary" role="button">Open</a></p>
                    
        <?php postMediaBlock(); ?>
        
    </div>
    <div class="col-xs-12 col-md-4">
        
        <?php preMediaBlockCenter(); ?>
                    
                    <h4>Microsoft Word</h4>
                    <p><a href="<?php echo $abeRoutes['compLit']['word']; ?>" class="btn btn-primary" role="button">Open</a></p>
                    
        <?php postMediaBlock(); ?>
        
    </div>
    <div class="col-xs-12 col-md-4">
        
        <?php preMediaBlockCenter(); ?>
                    
                    <h4>Search Engines</h4>
                    <p><a href="<?php echo $abeRoutes['compLit']['searchEngines']; ?>" class="btn btn-primary" role="button">Open</a></p>
                    
        <?php postMediaBlock(); ?>
        
    </div>
    <div class="col-xs-12 col-md-4">
        
        <?php preMediaBlockCenter(); ?>
                    
                    <h4>Typing</h4>
                    <p><a href="<?php echo $abeRoutes['compLit']['typing']; ?>" class="btn btn-primary" role="button">Open</a></p>
                    
        <?php postMediaBlock(); ?>
        
    </div>
    <div class="col-xs-12 col-md-4">
        
        <?php preMediaBlockCenter(); ?>
                    
                    <h4>Windows 7</h4>
                    <p><a href="<?php echo $abeRoutes['compLit']['win7']; ?>" class="btn btn-primary" role="button">Open</a></p>
                    
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