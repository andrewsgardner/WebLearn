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
        <!-- BEGIN header
        <nav class="navbar navbar-fixed-top">
            <div class="container">
                <div class="container-fluid">
                    <div class="navbar-header">
                        
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        
                            <span class="sr-only"></span>
                        
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        
                        <a class="pull-left" href="/"><img src="#"></a>
                    </div>
                    
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="/">Home<span class="sr-only">(current)</span></a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">ABE Lab <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Math</a></li>
                                    <li><a href="#">Social Studies</a></li>
                                    <li><a href="#">Technology</a></li>
                                    <li><a href="#">English</a></li>
                                    <li><a href="#">Science</a></li>
                                </ul>
                            </li>
                        </ul>
                        
                        <form class="navbar-form navbar-right" role="search">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Search">
                            </div>
                            <button type="submit" class="btn btn-default">Submit</button>
                        </form>
                        
                    </div>
                </div>
            </div>
        </nav>
        END header -->

            <nav class="navbar navbar-default navbar-fixed-top">
                <div class="container-fluid">

                    <div class="navbar-header">

                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">

                            <span class="sr-only"></span>

                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        
                        <a class="navbar-brand" href="/">SALC WebLearn</a>
                    </div>
                    
                    <!-- change #bs-example-navbar-collapse-1 -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="/">Home <span class="sr-only">(current)</span></a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">ABE Lab <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <!-- <li role="separator" class="divider"></li> -->
                                    <li><a href="#">English</a></li>
                                    
                                    <li><a href="#">Math</a></li>
                                    
                                    <li><a href="#">Science</a></li>
                                    
                                    <li><a href="#">Social Studies</a></li>
                                    
                                    <li><a href="#">Technology</a></li>
                                </ul>
                            </li>
                        </ul>
                        
                        <form class="navbar-form navbar-right" role="search">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Search">
                            </div>
                            <button type="submit" class="btn btn-default">Submit</button>
                        </form>
                    </div>
                </div>
            </nav>

        
        <?php require_once(TEMPLATES_PATH . "/loadScripts.php"); ?>
    </body>
</html>