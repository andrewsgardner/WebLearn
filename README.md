# WebLearn
WebLearn is a responsive distance learning website developed for the [Springfield Adult Learning Center](http://www.stcc.edu/adulteducationcenter/). It utilizes a mobile-first design via PHP, HTML5, CSS3, jQuery, SASS, Grunt, and Bootstrap. Encapsulated in WebLearn are two academic learning labs. ABE Lab is designed for students pursuing High School Equivalency Test preparation classes. ESOL Lab is a resource to help recent immigrants learn English.

## URL

[http://www.salcweblearn.org](http://www.salcweblearn.org)

## Installation
It will be useful to set up a test server on your localhost to preview changes before you make them live on the web server. I usually use [Vagrant](https://www.vagrantup.com/) for this purpose. However, whichever environment you choose should run the Apache web server and a stable version of PHP.

Make sure you've installed the following dependencies on your computer:
* [Ruby](http://rubyinstaller.org/) *
* [Node.js](https://nodejs.org/en/)
* [GIT](https://git-scm.com/)

###### * Mac's ship with a system version of Ruby pre-installed.

### Download the Project Files

1. Create a new directory on your local computer. Afterwards, cd into that location.
  
  ```
  mkdir salcweblearn.org
  cd salcweblearn.org
  ```
  
3. Clone WebLearn onto your server.
  
  ```
  git clone https://github.com/andrewsgardner/WebLearn.git .
  ```
  
  ###### Adding a period at the end prevents the name of the root folder in my repository from being cloned into your project (this may cause routing errors later).
  
### Download SASS

1. Install SASS using the command prompt with Ruby. *
   
   ```
   gem install sass
   ```

### Download Grunt

1. From within our root directory, salcweblearn.org, install the Grunt CLI. *
  
  ```
  npm install -g grunt-cli
  ```
  
2. Install the project dependencies. *
  
  ```
  npm install
  ```

3. Run ```grunt``` from the command line to listen for changes.

###### * Mac users may need to use sudo.

## Configuration
Create an .htaccess file in your test server's [/public_html/](https://github.com/andrewsgardner/WebLearn/tree/master/public_html) directory.

In .htaccess, point the PHP include path at the [/resources/](https://github.com/andrewsgardner/WebLearn/tree/master/resources) directory.

```
php_value include_path "/path/to/resources/directory/"
```

Remember that Linux uses forward slashes in URLs while Windows uses back slashes. Accordingly, please ensure that you only use forward slashes.

Depending on the server environment, you may need to set the ```allow_url_include``` parameter to **on** in php.ini.

## Features & Usage
The following section will briefly go over the code structure used in WebLearn.

### The config.php File

WebLearn generates content when pages are parsed by referencing backend libraries and directives.

The [config.php](https://github.com/andrewsgardner/WebLearn/blob/master/resources/config.php) file will be preprocessed before any page-specific HTML objects. This is the main configuration file that stores site-wide settings and variables. It also serves as a routing system for locating other important back-end, front-end, and external assets.

### Library & Templates Paths

```require_once``` statements are used in the front-end to locate the absolute paths to back-end resources.

For instance, the following code exists in [/salcweblearn.org/public_html/abe/index.php](https://github.com/andrewsgardner/WebLearn/blob/master/public_html/abe/index.php).

```
require_once(LIBRARY_PATH . "/contentPageFunctions.php");
```

Here, the path to [contentPageFunctions.php](https://github.com/andrewsgardner/WebLearn/blob/master/resources/library/contentPageFunctions.php) must be resolved before it can be required.

The LIBRARY_PATH constant will find the library directory where this file is located: [/salcweblearn.org/resources/library/](https://github.com/andrewsgardner/WebLearn/tree/master/resources/library).

```
// calculate absolute path to /resources/library/

defined("LIBRARY_PATH")
    or define("LIBRARY_PATH", realpath(dirname(__FILE__) . "/library"));
```

It traverses back to the project root and then locates the specified resource: **../../salcweblearn.org/resources/library/contentPageFunctions.php**.

The same technique is also used to render template files.

### Main Config Array

Frequently referenced settings and variables are stored in config.php's [Main Config Array](https://github.com/andrewsgardner/WebLearn/blob/master/resources/config.php#L18).

### Templating System

Each page on WebLearn is generated by referencing one of the two available template files: [contentPage.php](https://github.com/andrewsgardner/WebLearn/blob/master/resources/templates/contentPage.php) or [activityList.php](https://github.com/andrewsgardner/WebLearn/blob/master/resources/templates/activityList.php).

**The contentPage.php Template**

Use the ```contentPage.php``` template structure if:
* You're creating a page listing academic categories.
* You're creating a page containing academic content.
* You're creating a help page.

###### Most pages on WebLearn use contentPage.php.

Copy the template structure below to create a new page using ```contentPage.php```.

```
<?php
$currentPage = "#";
$pageTitle = "#";
$pageDesc = "#";
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
```

**The activityList.php Template**

Use the ```activityList.php``` template structure if:
* You're creating a page listing academic resources.

Copy the template structure below to create a new page using ```activityList.php```.

```
<?php
$currentPage = "#";
$pageTitle = "#";
$pageDesc = "#";
$activityCount = 0;
$refCount = 0;
require_once("config.php");
require_once(LIBRARY_PATH . "/activityListFunctions.php");
ob_start();
?>

<!-- BEGIN page breadcrumbs -->


<!-- END page breadcrumbs -->

<?php
$pageBreadbrumbs = ob_get_contents();
ob_get_clean();
ob_start();
?>

<!-- BEGIN activity items -->


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
```

**Page-Specific Code**

Place all page-specific HTML markup between the provided comments.

It will be captured using PHP output buffering and integrated into the layout.

**Using the Variables**

Variable     | Explanation
------------ | -------------
```$currentPage = "";``` | **Possible values include:**<br>```"abe"``` = The page exists in ABE Lab.<br>```"esol"``` = The page exists in ESOL Lab.<br>```"getting_started"``` = The page exists in the Getting Started directory.<br>*<sub>Used to highlight the directory name where a page exists.</sub>*
```$pageTitle = "";``` | Injects text into a page's HTML title tag.
```$pageDesc = "";```  | Injects text into a page's meta description tag.
```++$activityCount```  | Counts the number of activities on a page. Place within each new activity link.<br><sub>&lt;h3&gt;&lt;a href="#" target="_blank" class="alt-link-color"&gt;<b>&lt;?php echo ++$activityCount . ". "; ?&gt;</b>Activity Name...&lt;/a&gt;&lt;/h3&gt;</sub>
```++$refCount```       | Counts the number of references on a page. Place before each new reference link.<br><sub>&lt;p&gt;<b>&lt;?php echo ++$refCount . ". "; ?&gt;</b>&lt;a href="#" target="_blank"&gt;Credit Name...&lt;/a&gt;.&lt;/p&gt;</sub>

## Maintenance

Internal and external links are handled differently in WebLearn.

### Internal Links

Internal links are defined in config.php using two arrays: [$abeRoutes](https://github.com/andrewsgardner/WebLearn/blob/master/resources/config.php#L59) and [$esolRoutes](https://github.com/andrewsgardner/WebLearn/blob/master/resources/config.php#L154).

```$abeRoutes``` handles ABE Lab's internal links.

```
// abe lab internal routes

$abeRoutes = array(
    "abeHome" => "/abe/",
    "english" => array(
        "grammar" => "/abe/grammar/",
        ...
    ),
    ...
);
```

```$esolRoutes``` handles ESOL Lab's internal links.

When creating an internal link, echo routing data into your &lt;a&gt; tag's href attribute.

```
<a href="<?php echo $abeRoutes['english']['grammar']; ?>">Link Name...</a>
```

### External Links

External links are created with static HTML. Therefore, no special procedure is required to edit them.

### Cache Busting

WebLearn permits browsers to cache specific HTTP requests to optimize the performance of future site visits.

Stylesheets, JavaScripts, and image files are cacheable for 2 months.

Alternatively, PHP and HTML files aren't cacheable at all.

Therefore, whenever you alter the site's CSS or JS, a cache busting procedure must be carried out to prevent returning users from serving stale, outdated code.

A rudimentary versioning system is used to tackle this problem. The [$cacheVer](https://github.com/andrewsgardner/WebLearn/blob/master/resources/config.php#L15) variable in config.php injects itself into the file names of assets requiring cache busting.

```
// cache buster

$cacheVer = "v1.2";
```
