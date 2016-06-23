<?php 
$currentPage = "esol";
$pageTitle = "Microsoft Word | ESOL Lab";
$pageDesc = "Distance learning activities about Microsoft Word for English for Speakers of Other Languages students.";
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
    <li><a href="<?php echo $esolRoutes['compLit']['word']; ?>">Microsoft Word</a></li>
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
        <h2>Microsoft Word</h2>
        
        <?php preMediaBlock(); ?>
        
        <div class="activity">
            <h3><a href="https://www.digitallearn.org/courses/microsoft-word" target="_blank" class="alt-link-color"><?php echo ++$activityCount . ". "; ?>Intro to Microsoft Word</a></h3>
            <p>DigitalLearn.org offers free self-paced tutorials in Microsoft Word. After selecting the above link, click on the "Start Course" button to begin the activity. <span class="glyphicon glyphicon-headphones" aria-hidden="true"></span> <span class="glyphicon glyphicon-flash" aria-hidden="true"></span></p>
            <span class="activity-ul-top bold">Sections:</span>
            <ul class="activity-ul">
                <li class="italics">Intro to Word</li>
                <li class="italics">Saving Your Work</li>
                <li class="italics">Formatting</li>
                <li class="italics">Cut, Copy, &amp; Paste</li>
                <li class="italics">Insert a Picture</li>
            </ul>
            <div class="activity-thumbnail">
                <img src="<?php echo $config['paths']['img']['content'] . '/intro-to-microsoft-word.png'; ?>" alt="Intro to Microsoft Word">
            </div>
            <div class="activity-open">
                <p><a href="https://www.digitallearn.org/courses/microsoft-word" target="_blank" class="btn btn-primary" role="button">Open</a></p>
            </div>
        </div>
        
        <div class="activity">
            <h3><a href="http://www.gcflearnfree.org/word2013" target="_blank" class="alt-link-color"><?php echo ++$activityCount . ". "; ?>Microsoft Word 2013 Tutorials</a></h3>
            <p>GCFLearnFree.org offers free self-paced tutorials in Microsoft Word 2013. After selecting the above link, begin with tutorial number four in the Word Basics section. <span class="glyphicon glyphicon-headphones" aria-hidden="true"></span> <span class="glyphicon glyphicon-flash" aria-hidden="true"></span></p>
            <div class="activity-thumbnail">
                <img src="<?php echo $config['paths']['img']['content'] . '/microsoft-word-2013-tutorials.png'; ?>" alt="Microsoft Word 2013 Tutorials">
            </div>
            <div class="activity-open">
                <p><a href="http://www.gcflearnfree.org/word2013" target="_blank" class="btn btn-primary" role="button">Open</a></p>
            </div>
        </div>
        
        <div class="activity">
            <h3><a href="<?php echo $esolRoutes['compLit']['introToWord']; ?>" class="alt-link-color"><?php echo ++$activityCount . ". "; ?>Introduction to Microsoft Word 2013</a></h3>
            <p>Learn how to perform basic tasks in Microsoft Word. <span class="glyphicon glyphicon-headphones" aria-hidden="true"></span></p>
            <span class="activity-ul-top bold">Topics Covered:</span>
            <ul class="activity-ul">
                <li class="italics">The Ribbon</li>
                <li class="italics">Enter Text / Select Text / Move Text</li>
                <li class="italics">The Spellchecker</li>
                <li class="italics">Fix Grammatical Mistakes</li>
                <li class="italics">Copy / Cut / Paste</li>
            </ul>
            <div class="activity-thumbnail">
                <img src="<?php echo $config['paths']['img']['content'] . '/intro-ms-word-2013.jpg'; ?>" alt="Introduction to Microsoft Word 2013">
            </div>
            <div class="activity-open">
                <p><a href="<?php echo $esolRoutes['compLit']['introToWord']; ?>" class="btn btn-primary" role="button">Open</a></p>
            </div>
        </div>
        
        <div class="activity">
            <h3><a href="<?php echo $esolRoutes['compLit']['savingPrinting']; ?>" class="alt-link-color"><?php echo ++$activityCount . ". "; ?>Saving &amp; Printing Documents</a></h3>
            <p>Learn how to save and print your work. <span class="glyphicon glyphicon-headphones" aria-hidden="true"></span></p>
            <span class="activity-ul-top bold">Topics Covered:</span>
            <ul class="activity-ul">
                <li class="italics">The Backstage View</li>
                <li class="italics">Save</li>
                <li class="italics">Print</li>
            </ul>
            <div class="activity-thumbnail">
                <img src="<?php echo $config['paths']['img']['content'] . '/saving-printing-documents.jpg'; ?>" alt="Saving &amp; Printing Documents">
            </div>
            <div class="activity-open">
                <p><a href="<?php echo $esolRoutes['compLit']['savingPrinting']; ?>" class="btn btn-primary" role="button">Open</a></p>
            </div>
        </div>
        
        <div class="activity">
            <h3><a href="<?php echo $esolRoutes['compLit']['formattingDocs']; ?>" class="alt-link-color"><?php echo ++$activityCount . ". "; ?>Formatting Documents</a></h3>
            <p>Learn how to make documents more visually appealing and easier to read. <span class="glyphicon glyphicon-headphones" aria-hidden="true"></span></p>
            <span class="activity-ul-top bold">Topics Covered:</span>
            <ul class="activity-ul">
                <li class="italics">Font Formatting</li>
                <li class="italics">Paragraph Alignment</li>
                <li class="italics">Styles</li>
                <li class="italics">Bullets &amp; Numbering</li>
                <li class="italics">Line Spacing</li>
            </ul>
            <div class="activity-thumbnail">
                <img src="<?php echo $config['paths']['img']['content'] . '/formatting-documents.jpg'; ?>" alt="Formatting Documents">
            </div>
            <div class="activity-open">
                <p><a href="<?php echo $esolRoutes['compLit']['formattingDocs']; ?>" class="btn btn-primary" role="button">Open</a></p>
            </div>
        </div>
        
        <div class="activity">
            <h3><a href="<?php echo $esolRoutes['compLit']['insertImgTables']; ?>" class="alt-link-color"><?php echo ++$activityCount . ". "; ?>Insert Images &amp; Tables</a></h3>
            <p>Learn how to add pictures and data tables to your document. <span class="glyphicon glyphicon-headphones" aria-hidden="true"></span></p>
            <span class="activity-ul-top bold">Topics Covered:</span>
            <ul class="activity-ul">
                <li class="italics">Insert a Picture</li>
                <li class="italics">Resize a Picture</li>
                <li class="italics">Move a Picture</li>
                <li class="italics">Picture Layout Options</li>
                <li class="italics">Insert a Table</li>
                <li class="italics">Format a Table</li>
            </ul>
            <div class="activity-thumbnail">
                <img src="<?php echo $config['paths']['img']['content'] . '/insert-images-tables.jpg'; ?>" alt="Insert Images &amp; Tables">
            </div>
            <div class="activity-open">
                <p><a href="<?php echo $esolRoutes['compLit']['insertImgTables']; ?>" class="btn btn-primary" role="button">Open</a></p>
            </div>
        </div>
        
        <div class="activity">
            <h3><a href="<?php echo $esolRoutes['compLit']['pageLayoutDesign']; ?>" class="alt-link-color"><?php echo ++$activityCount . ". "; ?>Page Layout &amp; Design</a></h3>
            <p>Learn how to change the page layout and general design of your document. <span class="glyphicon glyphicon-headphones" aria-hidden="true"></span></p>
            <span class="activity-ul-top bold">Topics Covered:</span>
            <ul class="activity-ul">
                <li class="italics">Design Tab</li>
                <li class="italics">Page Layout Tab</li>
                <li class="italics">View Tab</li>
                <li class="italics">Insert a Header</li>
                <li class="italics">Insert a Footer</li>
                <li class="italics">Margins</li>
                <li class="italics">Page Orientation</li>
                <li class="italics">Themes</li>
            </ul>
            <div class="activity-thumbnail">
                <img src="<?php echo $config['paths']['img']['content'] . '/page-layout-design.jpg'; ?>" alt="Page Layout &amp; Design">
            </div>
            <div class="activity-open">
                <p><a href="<?php echo $esolRoutes['compLit']['pageLayoutDesign']; ?>" class="btn btn-primary" role="button">Open</a></p>
            </div>
        </div>
        
        
        <div class="credits alt-link-color">
            <h4>Credits:</h4>
            <p><?php echo ++$refCount . ". "; ?><a href="https://www.digitallearn.org/courses" target="_blank">DigitalLearn.org</a>.</p>
            <p><?php echo ++$refCount . ". "; ?><a href="http://www.gcflearnfree.org/word2013" target="_blank">GCFLearnFree.org</a>.</p>
            <p><?php echo ++$refCount . ". "; ?><a href="https://support.office.com/en-us/article/Create-your-first-Word-2013-document-abfe7d91-98e5-422f-9033-6df5f5998b0a?ui=en-US&rs=en-US&ad=US" target="_blank">Microsoft: Create your first Word 2013 document</a>.</p>
            <p><?php echo ++$refCount . ". "; ?><a href="https://support.office.com/en-us/article/Create-your-first-Word-2013-document-abfe7d91-98e5-422f-9033-6df5f5998b0a?ui=en-US&rs=en-US&ad=US" target="_blank">Microsoft: Create your first Word 2013 document</a>.</p>
            <p><?php echo ++$refCount . ". "; ?><a href="https://support.office.com/en-us/article/Create-your-first-Word-2013-document-abfe7d91-98e5-422f-9033-6df5f5998b0a?ui=en-US&rs=en-US&ad=US" target="_blank">Microsoft: Create your first Word 2013 document</a>.</p>
            <p><?php echo ++$refCount . ". "; ?><a href="https://support.office.com/en-us/article/Create-your-first-Word-2013-document-abfe7d91-98e5-422f-9033-6df5f5998b0a?ui=en-US&rs=en-US&ad=US" target="_blank">Microsoft: Create your first Word 2013 document</a>.</p>
            <p><?php echo ++$refCount . ". "; ?><a href="https://support.office.com/en-us/article/Create-your-first-Word-2013-document-abfe7d91-98e5-422f-9033-6df5f5998b0a?ui=en-US&rs=en-US&ad=US" target="_blank">Microsoft: Create your first Word 2013 document</a>.</p>
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