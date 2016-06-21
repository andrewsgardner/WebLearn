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
        
        require_once($contentPath);
        
    } else {
        
        /* fallback if template not found */
        echo "<html><h1>Sorry! That page cannot be found.</h1></html>";
        
    }
    
}
?>