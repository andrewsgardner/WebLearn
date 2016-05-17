<?php require_once("config.php"); 

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
                        <li class="active"><a href="/">Getting Started<span class="sr-only">(current)</span></a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">ABE Lab <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">English</a></li>
                                <li><a href="#">Math</a></li>
                                <li><a href="#">Science</a></li>
                                <li><a href="#">Social Studies</a></li>
                                <li><a href="#">Technology</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">ESOL Lab <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Citizenship</a></li>
                                <li><a href="#">General ESOL</a></li>
                                <li><a href="#">Grammar</a></li>
                                <li><a href="#">Health</a></li>
                                <li><a href="#">MA Learner's Permit</a></li>
                                <li><a href="#">Money</a></li>
                                <li><a href="#">Parents</a></li>
                                <li><a href="#">Pronunciation</a></li>
                                <li><a href="#">Technology</a></li>
                                <li><a href="#">Vocabulary</a></li>
                                <li><a href="#">Workplace</a></li>
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
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
        
        <?php require_once(TEMPLATES_PATH . "/loadScripts.php"); ?>
    </body>
</html>