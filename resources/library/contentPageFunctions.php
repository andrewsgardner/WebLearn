<?php 
require_once(realpath(dirname(__FILE__) . "/../config.php"));

function renderContentPageLayout($contentFile, $variables = array()) {
    
    $contentPath = TEMPLATES_PATH . "/" . $contentFile;
    
    if (count($variables) > 0) {
        
        foreach ($variables as $key => $value) {
            
            if (strlen($key) > 0) {
                
                ${$key} = $value;
                
            }
            
        }
        
    }
    
    if (file_exists($contentPath)) {
        
        /* DOCTYPE */
        echo "<!DOCTYPE html>\n";
        /* BEGIN html */
        echo "<html lang=\"en\">\n";
        require_once(TEMPLATES_PATH . "/metadata.php");
        /* BEGIN body */
        echo "\t<body>\n";
        require_once(TEMPLATES_PATH . "/header.php");
        
        require_once($contentPath);
        
        require_once(TEMPLATES_PATH . "/footer.php");
        require_once(TEMPLATES_PATH . "/loadScripts.php");
        echo "</body>\n";
        /* END body */
        echo "</html>";
        /* END html */
        
    } else {
        
        /* fallback if template not found */
        echo "</p>Sorry! That page cannot be found.</p>";
        
    }
    
}
?>