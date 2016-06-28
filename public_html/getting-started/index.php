<?php 
$currentPage = "getting_started";
$pageTitle = "Getting Started | SALC WebLearn";
$pageDesc = "A new user's guide to introduce students to the Springfield Adult Learning Center's WebLearn distance learning site.";
require_once("config.php");
require_once(LIBRARY_PATH . "/contentPageFunctions.php");

ob_start();
?>

<!-- BEGIN page breadcrumbs -->

<ol class="breadcrumb">
    <li><a href="/">WebLearn</a></li>
    <li><a href="<?php echo $gettingStarted; ?>">Getting Started</a></li>
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
        <h1>WebLearn</h1>
        <strong class="subheading text-muted">Springfield Adult Learning Center</strong>    
        <h2>Getting Started</h2>
        <p>This guide is intended as a reference for some of the built-in features on WebLearn. It's recommended that first time users review this page to learn how our website works. We suggest that students view WebLearn on a computer or tablet, as some activities are not compatible with smartphones.</p>
        <p>Like most websites, your mouse pointer will change its shape when placed over a clickable link. The mouse pointer will resemble a hand like this <span><img src="<?php echo $config['paths']['img']['content'] . '/link-hand.png'; ?>" id="cursor-icon" alt="Clickable Link Example Image"></span> when a link is present. Students who don't feel comfortable using the mouse should complete a mouse skills tutorial listed at the bottom of this page under our '<span class="bold">Resources</span>' section. <a href="#mouse-skills">Click here</a> to view the Resources section and then click on the '<span class="bold">Mouse Skills Tutorial</span>' button.</p>
        <h2>Home Page</h2>
        <p>The WebLearn <a href="/">home page</a> is the first page that displays after entering our website. Each red button is a clickable link that brings users to different parts of the site.</p>
        <ul class="activity-ul">
            <li class="italics">Click 'Start Here' under the listing for <a href="<?php echo $abeRoutes['abeHome']; ?>">ABE Lab</a> button if you're preparing to take the HiSET.</li>
            <li class="italics">Click 'Start Here' under the listing for <a href="<?php echo $esolRoutes['esolHome']; ?>">ESOL Lab</a> button if you're learning English.</li>
        </ul>
        <div class="gs-img">
            <img src="<?php echo $config['paths']['img']['content'] . '/gs-home-page.jpg'; ?>" alt="The WebLearn home page">
        </div>
        <h2>Breadcrumb Trail</h2>
        <p>The breadcrumb trail is displayed at the top of each page. It allows you to navigate between the WebLearn home page and the page you're currently viewing. Clicking each '<span class="bold">breadcrumb link</span>' will take you back to a previously viewed page.</p>
        <div class="gs-img">
            <img src="<?php echo $config['paths']['img']['content'] . '/gs-breadcrumbs.jpg'; ?>" alt="WebLearn Breadcrumb Trail">
        </div>
        <h2>Browse by Subject</h2>
        <p>Activities in WebLearn are organized and grouped together by academic subject. ABE Lab offers activities in English, Science, Social Studies, and Computer Literacy. Additionally, ESOL Lab offers activities in General ESOL, Special ESOL Topics, and Computer Literacy. To get started, click on the '<span class="bold">Open</span>' button under an Activities listing to view its contents.</p>
        <div class="gs-img">
            <img src="<?php echo $config['paths']['img']['content'] . '/gs-browse-by-subject.jpg'; ?>" alt="WebLearn Browse by Subject">
        </div>
        <h2>Activity Lists</h2>
        <p>Each topic has an activity list with links to learning resources. You can open an activity by clicking its title or red '<span class="bold">Open</span>' button. External links leading away from WebLearn will always open in a new browser tab or window.</p>
        <span class="activity-ul-top bold">Warning Icons:</span>
        <ul class="activity-ul">
            <li class="italics">Activities that require headphones or speakers will display this icon: <span class="glyphicon glyphicon-headphones" aria-hidden="true"></span></li>
            <li class="italics">Activities that require a device with <a href="https://get.adobe.com/flashplayer/" target="_blank">Adobe Flash Player</a> installed will display this icon: <span class="glyphicon glyphicon-flash" aria-hidden="true"></span></li>
        </ul>
        <div class="gs-img">
            <img src="<?php echo $config['paths']['img']['content'] . '/gs-activity-lists.jpg'; ?>" alt="WebLearn Activity Lists">
        </div>
        <h2>Public Computers</h2>
        <p>Students without a computer or Internet access can use WebLearn at their local public library. It may be necessary to first obtain a free library card. Public access computers or WiFi are available at the following local libraries. Visit their respective websites to find more specific information about operating hours and technology availability.</p>
        <div class="libraries">
            <h3 class="lib-title">Springfield City Library:</h3>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Branch</th>
                        <th>Contact</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Central Library</td>
                        <td>
                            <p class="italics">220 State Street<br>Springfield, MA</p>
                            <p><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span> <a href="tel:+14132636828">413-263-6828</a></p>
                            <span class="glyphicon glyphicon-globe" aria-hidden="true"></span> <a href="http://www.springfieldlibrary.org/library/about/central-library/" target="_blank">Website</a>
                        </td>
                    </tr>
                    <tr>
                        <td>Brightwood</td>
                        <td>
                            <p class="italics">359 Plainfield St.<br>Springfield, MA</p>
                            <p><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span> <a href="tel:+14132636805">413-263-6805</a></p>
                            <span class="glyphicon glyphicon-globe" aria-hidden="true"></span> <a href="http://www.springfieldlibrary.org/library/about/brightwood-branch/" target="_blank">Website</a>
                        </td>
                    </tr>
                    <tr>
                        <td>East Forest Park</td>
                        <td>
                            <p class="italics">122 Island Pond Rd.<br>Springfield, MA</p>
                            <p><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span> <a href="tel:+14132636836">413-263-6836</a></p>
                            <span class="glyphicon glyphicon-globe" aria-hidden="true"></span> <a href="http://www.springfieldlibrary.org/library/about/east-forest-park-branch/" target="_blank">Website</a>
                        </td>
                    </tr>
                    <tr>
                        <td>East Springfield</td>
                        <td>
                            <p class="italics">21 Osborne Ter.<br>Springfield, MA</p>
                            <p><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span> <a href="tel:+14132636840">413-263-6840</a></p>
                            <span class="glyphicon glyphicon-globe" aria-hidden="true"></span> <a href="http://www.springfieldlibrary.org/library/about/east-springfield-branch/" target="_blank">Website</a>
                        </td>
                    </tr>
                    <tr>
                        <td>Forest Park</td>
                        <td>
                            <p class="italics">380 Belmont Ave.<br>Springfield, MA</p>
                            <p><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span> <a href="tel:+14132636843">413-263-6843</a></p>
                            <span class="glyphicon glyphicon-globe" aria-hidden="true"></span> <a href="http://www.springfieldlibrary.org/library/about/forest-park-branch/" target="_blank">Website</a>
                        </td>
                    </tr>
                    <tr>
                        <td>Indian Orchard</td>
                        <td>
                            <p class="italics">44 Oak St.<br>Indian Orchard, MA</p>
                            <p><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span> <a href="tel:+14132636846">413-263-6846</a></p>
                            <span class="glyphicon glyphicon-globe" aria-hidden="true"></span> <a href="http://www.springfieldlibrary.org/library/about/indian-orchard-branch/" target="_blank">Website</a>
                        </td>
                    </tr>
                    <tr>
                        <td>Mason Square</td>
                        <td>
                            <p class="italics">765 State St.<br>Springfield, MA</p>
                            <p><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span> <a href="tel:+14132636853">413-263-6853</a></p>
                            <span class="glyphicon glyphicon-globe" aria-hidden="true"></span> <a href="http://www.springfieldlibrary.org/library/about/mason-square-branch/" target="_blank">Website</a>
                        </td>
                    </tr>
                    <tr>
                        <td>Sixteen Acres</td>
                        <td>
                            <p class="italics">1187 Parker St.<br>Springfield, MA</p>
                            <p><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span> <a href="tel:+14132636858">413-263-6858</a></p>
                            <span class="glyphicon glyphicon-globe" aria-hidden="true"></span> <a href="http://www.springfieldlibrary.org/library/about/sixteen-acres-branch/" target="_blank">Website</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="libraries">
            <h3 class="lib-title">Other Libraries:</h3>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Library</th>
                        <th>Contact</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Chicopee Public Library</td>
                        <td>
                            <p class="italics">449 Front St.<br>Chicopee, MA</p>
                            <p><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span> <a href="tel:+14135941800">413-594-1800</a></p>
                            <span class="glyphicon glyphicon-globe" aria-hidden="true"></span> <a href="http://www.chicopeepubliclibrary.org/" target="_blank">Website</a>
                        </td>
                    </tr>
                    <tr>
                        <td>Holyoke Public Library</td>
                        <td>
                            <p class="italics">250 Chestnut Street<br>Holyoke, MA</p>
                            <p><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span> <a href="tel:+14134208101">413-420-8101</a></p>
                            <span class="glyphicon glyphicon-globe" aria-hidden="true"></span> <a href="http://www.holyokelibrary.org/" target="_blank">Website</a>
                        </td>
                    </tr>
                    <tr>
                        <td>Hubbard Memorial<br>Library</td>
                        <td>
                            <p class="italics">24 Center St.<br>Ludlow, MA</p>
                            <p><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span> <a href="tel:+14135833408">413-583-3408</a></p>
                            <span class="glyphicon glyphicon-globe" aria-hidden="true"></span> <a href="http://www.hubbardlibrary.org/" target="_blank">Website</a>
                        </td>
                    </tr>
                    <tr>
                        <td>West Springfield<br>Public Library</td>
                        <td>
                            <p class="italics">511 Main St. West<br>Springfield, MA</p>
                            <p><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span> <a href="tel:+14137364561">413-736-4561</a></p>
                            <span class="glyphicon glyphicon-globe" aria-hidden="true"></span> <a href="http://www.wspl.org/books-more/computers/using-library-computers" target="_blank">Website</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <h2>Resources</h2>
        <ul class="activity-ul">
            <li class="italics gs-resource"><a href="<?php echo $mouseSkills; ?>" class="btn btn-primary btn-sm" id="mouse-skills" role="button">Mouse Skills Tutorial</a></li>
            <li class="italics gs-resource"><a href="<?php echo $weblearnFlyer; ?>" class="btn btn-primary btn-sm" role="button">WebLearn Flyer</a></li>
        </ul>
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