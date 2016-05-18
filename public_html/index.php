<?php $currentPage = "landing"; require_once("config.php"); 

$meta = array(
    "pageTitle" => "",
    "pageDesc" => ""
);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <?php require_once(TEMPLATES_PATH . "/metadata.php"); ?>
    </head>
    <body>
        <?php require_once(TEMPLATES_PATH . "/header.php"); ?>
        
        <!--
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#primary-navbar" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/"><img src="/img/layout/weblearn-logo.png" alt="SALC WebLearn Logo"></a>
                </div>

                <div class="collapse navbar-collapse" id="primary-navbar">
                    
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="/getting-started/">Getting Started<span class="sr-only">(current)</span></a></li>
                        <li class="dropdown">
                            <a href="/abe/" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">ABE Lab <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="/abe/english/">English</a></li>
                                <li><a href="/abe/math/">Math</a></li>
                                <li><a href="/abe/science/">Science</a></li>
                                <li><a href="/abe/social-studies/">Social Studies</a></li>
                                <li><a href="/abe/technology/">Technology</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="/esol/" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">ESOL Lab <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="/esol/citizenship/">Citizenship</a></li>
                                <li><a href="/esol/general-esol/">General ESOL</a></li>
                                <li><a href="/esol/grammar/">Grammar</a></li>
                                <li><a href="/esol/health/">Health</a></li>
                                <li><a href="/esol/learners-permit/">MA Learner's Permit</a></li>
                                <li><a href="/esol/money/">Money</a></li>
                                <li><a href="/esol/parents/">Parents</a></li>
                                <li><a href="/esol/pronunciation/">Pronunciation</a></li>
                                <li><a href="/esol/technology/">Technology</a></li>
                                <li><a href="/esol/vocabulary/">Vocabulary</a></li>
                                <li><a href="/esol/workplace/">Workplace</a></li>
                            </ul>
                        </li>
                    </ul>
                    <div class="col-md-3 col-sm-3 navbar-right">
                    <form class="navbar-form navbar-right" role="search">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search">
                        <div class="input-group-btn">
                            <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                        </div>
                    </div>
                    </form>
                    </div>
                </div>
            </div>
        </nav>
        -->
        
        <?php require_once(TEMPLATES_PATH . "/loadScripts.php"); ?>
    </body>
</html>