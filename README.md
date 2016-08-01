# WebLearn
WebLearn is a responsive distance learning website developed for the [Springfield Adult Learning Center](http://www.stcc.edu/adulteducationcenter/) (SALC). This design utilizes a versatile mobile-first design with PHP, HTML5, CSS3, jQuery, SASS, Grunt, and Bootstrap. Encapsulated in WebLearn are two academic learning labs. ABE Lab is designed for students pursuing High School Equivalency Test preparation classes. ESOL Lab is a resource to help recent immigrants at SALC learn English.

## URL

[http://www.salcweblearn.org](http://www.salcweblearn.org)

## Installation
It will be useful to set up a test server on your localhost to preview changes before you make them live on the web server. I usually use [Vagrant](https://www.vagrantup.com/) for this purpose. However, whichever environment you choose should run the Apache web server and a stable version of PHP.

Make sure you've installed the following prerequisites on your server:
* [Node.js](https://nodejs.org/en/)
* [SASS](http://sass-lang.com/)
* [GIT](https://git-scm.com/)

### Download the Project Files

1. Create a new directory on your local computer for the development environment.
  
  ```
  mkdir salcweblearn.org
  ```
  
2. Afterwards, cd into this location from the command line.
  
  ```
  cd salcweblearn.org
  ```
  
3. Clone WebLearn onto your server.
  
  ```
  git clone https://github.com/andrewsgardner/WebLearn.git .
  ```
  
  ###### Adding a period at the end prevents the name of the root folder in my repository from being cloned into your project (this may cause routing errors later).
  
### Download Grunt

1. From within our root directory, salcweblearn.org, install the Grunt CLI
  
  ```
  npm install -g grunt-cli
  ```
  
  ###### Note: Linux and Mac users may need to use sudo.
  
2. Install project dependencies.
  
  ```
  npm install
  ```

3. Run ```grunt``` from the command line to listen for changes.

## Configuration
Create an .htaccess file in the [/public_html/](https://github.com/andrewsgardner/WebLearn/tree/master/public_html) directory with your code editor. This will only be used for development purposes and shouldn't be committed to any repository.

In .htaccess, set the PHP include path to the URL of the [/resources/](https://github.com/andrewsgardner/WebLearn/tree/master/resources) directory like this:
```
php_value include_path "/path/to/resources/directory/"
```
Remember that Linux uses forward slashes in URLs while Windows uses back slashes. Accordingly, please ensure that your .htaccess file only uses forward slashes when setting the include path.

Depending on the server environment, you may also need to set the ```allow_url_include``` parameter to **on** in php.ini.

## Features & Usage
The following section will briefly go over the code structure used in WebLearn.

### The config.php File

WebLearn generates content when pages are parsed by referencing specific backend libraries and directives.

The [config.php](https://github.com/andrewsgardner/WebLearn/blob/master/resources/config.php) file, located at **/salcweblearn.org/resources/config.php**, will be preprocessed before any page-specific HTML objects. This is the main configuration file that stores site-wide settings and variables. It also serves as a routing system for locating other important back-end, front-end, and external assets.

### Library & Templates Paths

```require_once``` statements are used in the front-end to locate the absolute paths to specific back-end resources.

The following code exists in [/salcweblearn.org/public_html/abe/index.php](https://github.com/andrewsgardner/WebLearn/blob/master/public_html/abe/index.php).

```
require_once(LIBRARY_PATH . "/contentPageFunctions.php");
```

Here, the path to a file called [contentPageFunctions.php](https://github.com/andrewsgardner/WebLearn/blob/master/resources/library/contentPageFunctions.php) must be resolved before it can be required.

In config.php, the LIBRARY_PATH constant will calculate a path to the library directory where this file is located: [/salcweblearn.org/resources/library/](https://github.com/andrewsgardner/WebLearn/tree/master/resources/library).

```
// calculate absolute path to /resources/library/

defined("LIBRARY_PATH")
    or define("LIBRARY_PATH", realpath(dirname(__FILE__) . "/library"));
```

It first traverses back to the project root and then locates the specified resource: **../../salcweblearn.org/resources/library/contentPageFunctions.php**.

When the relative file path navigation markings are removed, we are left with an absolute path that can map anywhere on the site to **/salcweblearn.org/resources/library/contentPageFunctions.php**.

The same technique is also used to render template files.

### Main Config Array

Frequently referenced settings and variables are stored in the multidimensional [Main Config Array](https://github.com/andrewsgardner/WebLearn/blob/master/resources/config.php#L18).

### Templating System

Each page on WebLearn is generated by referencing one of the two available template structures: [contentPage.php](https://github.com/andrewsgardner/WebLearn/blob/master/resources/templates/contentPage.php) or [activityList.php](https://github.com/andrewsgardner/WebLearn/blob/master/resources/templates/activityList.php).

**Using contentPage.php**

```contentPage.php```, as its name suggests, is invoked on every page that presents descriptive information to users (with the exception of subject-specific pages that list academic activities).

You can reference ```contentPage.php``` in the front-end when creating a new page by using this template:

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

**Using activityList.php**

```activityList.php``` is invoked to generate pages that list the academic activities for each subject.

You can reference ```activityList.php``` in the front-end when creating a new activity list page by using this template:

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

**Page Specific Code**

Place all page specific HTML markup in between the provided comments. It will be captured using PHP output buffering and integrated into the page layout.

**Using the Variables**

Variable     | Explanation
------------ | -------------
```$currentPage = "#";``` | **Possible values include:**<br>```"abe"``` = The page exists in ABE Lab<br>```"esol"``` = The page exists in ESOL Lab<br>```"getting_started"``` = The page exists in the Getting Started directory.<br><br>*The section of WebLearn that a specific page exists in will be highlighted in the site header using this information.*
