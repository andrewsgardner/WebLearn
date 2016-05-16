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
        
        <?php require_once(TEMPLATES_PATH . "/loadScripts.php"); ?>
    </body>
</html>