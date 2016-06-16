<?php 
$currentPage = "abe";
$pageTitle = "ABE Lab | Heart &amp; Circulatory System";
$pageDesc = "Learn how the heart and circulatory system work on the Springfield Adult Learning Center's ABE Lab.";
require_once("config.php");
require_once(LIBRARY_PATH . "/contentPageFunctions.php");

ob_start();
?>

<!-- BEGIN page breadcrumbs -->

<ol class="breadcrumb">
    <li><a href="/">WebLearn</a></li>
    <li><a href="<?php echo $abeRoutes['abeHome']; ?>">ABE Lab</a></li>
    <li><a href="<?php echo $abeRoutes['science']['bodySystems']; ?>">Body Systems</a></li>
    <li><a href="<?php echo $abeRoutes['science']['heartCirculatorySys']; ?>">Heart &amp; Circulatory System</a></li>
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
      <h2>Heart &amp; Circulatory System</h2>
      <div class="embed-flash">
          <object id="flashObj" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,47,0">
              <param name="movie" value="http://c.brightcove.com/services/viewer/federated_f9?isVid=1&isUI=1" />
              <param name="bgcolor" value="#FFFFFF" />
              <param name="flashVars" value="videoId=2146978376001&playerID=1709592238001&playerKey=AQ~~,AAABjg7u0WE~,1M0n70-zc746ABCoBjqsbGI_EgtRkuwu&domain=embed&dynamicStreaming=true" />
              <param name="base" value="http://admin.brightcove.com" />
              <param name="seamlesstabbing" value="false" />
              <param name="allowFullScreen" value="true" />
              <param name="swLiveConnect" value="true" />
              <param name="allowScriptAccess" value="always" />
              <embed src="http://c.brightcove.com/services/viewer/federated_f9?isVid=1&isUI=1" flashVars="videoId=2146978376001&playerID=1709592238001&playerKey=AQ~~,AAABjg7u0WE~,1M0n70-zc746ABCoBjqsbGI_EgtRkuwu&domain=embed&dynamicStreaming=true" base="http://admin.brightcove.com" name="flashObj" seamlesstabbing="false" type="application/x-shockwave-flash" allowFullScreen="true" allowScriptAccess="always" swLiveConnect="true" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash">
          </object>
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