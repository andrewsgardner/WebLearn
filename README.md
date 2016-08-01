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
