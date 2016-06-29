<?php 
$currentPage = "landing";
$pageTitle = "SALC WebLearn | Springfield Adult Learning Center";
$pageDesc = "WebLearn is a distance learning website for prospective Adult Basic Education or English for Speakers of Other Languages students at SALC.";
require_once("config.php");
require_once(LIBRARY_PATH . "/contentPageFunctions.php");

ob_start();
?>

<!-- BEGIN page breadcrumbs -->



<!-- END page breadcrumbs -->

<?php 
$pageBreadbrumbs = ob_get_contents();
ob_get_clean();

ob_start();
?>

<!-- BEGIN page content -->

<div class="row">
    <div class="col-xs-12">
        <h1>WebLearn</h1>
        <strong class="subheading text-muted">Springfield Adult Learning Center</strong>
        <div class="media-gap">
            <h2>About</h2>
            <p>WebLearn is a distance learning website maintained by the <a href="<?php echo $salcStcc; ?>" target="_blank">Springfield Adult Learning Center</a> (SALC). This resource empowers future students to get a head start on their education while still on our waitlist for Adult Basic Education services.</p>
        </div>
        <div class="media-gap">
            <h2>What is Distance Learning?</h2>
            <p>Distance learning is an education delivery process that's used when students and teachers are separated by space or time. Instruction is provided over the Internet to students who can't be present in a traditional classroom. Distance learning websites use video recordings, audio recordings, and web-based activities to present academic material. Please begin by reading our <a href="<?php echo $config['paths']['gettingStarted']; ?>">Getting Started</a> page.</p>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xs-12 col-md-6">
        
        <?php preMediaBlockCenter(); ?>
        
                    <h3>ABE Lab</h3>
                    <p>ABE Lab is a section on WebLearn for students waiting to enter <a href="http://hiset.ets.org/" target="_blank">High School Equivalency Test</a> (HiSET) preparation classes. It contains links to <?php echo $config['info']['abeLinkNum']; ?> learning activities that SALC instructors feel are important for students to review.</p>
                    <p><a href="<?php echo $abeRoutes['abeHome']; ?>" class="btn btn-primary" role="button">Start Here</a></p>
        
        <?php postMediaBlock(); ?>
        
    </div>
    <div class="col-xs-12 col-md-6">
        
        <?php preMediaBlockCenter(); ?>
        
                    <h3>ESOL Lab</h3>
                    <p>ESOL Lab is a section on WebLearn for students waiting to enter English for Speakers of Other Languages (ESOL) classes. It contains links to <?php echo $config['info']['esolLinkNum']; ?> learning activities for both future and current students to use.</p>
                    <p><a href="<?php echo $esolRoutes['esolHome']; ?>" class="btn btn-primary" role="button">Start Here</a></p>
        
        <?php postMediaBlock(); ?>
        
    </div>
</div>
<div class="row">
    <div class="col-xs-12">
        <div class="media-gap">
            <h2>Contact</h2>
            <p>Questions or comments about WebLearn can be directed to SALC's computer literacy instructor:</p>
            <address>
                <strong>Nathan Bench</strong><br>
                ESOL &amp; Computer Instructor<br>
                Springfield Adult Learning Center<br>
                <script>
                    document.write("<n uers=\"znvygb:aorapu@funznff.bet\" ery=\"absbyybj\">aorapu@funznff.bet</n>".replace(/[a-zA-Z]/g,
                    function (c) {
                        return String.fromCharCode((c <= "Z" ? 90 : 122) >= (c = c.charCodeAt(0) + 13) ? c : c - 26);
                    }));
                </script>
            </address>
        </div>
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