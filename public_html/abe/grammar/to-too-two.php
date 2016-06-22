<?php 
$currentPage = "abe";
$pageTitle = "To, Too, or Two Activity | ABE Lab";
$pageDesc = "A fun grammar activity about using To, Too, and Two. Answer multiple choice questions on the Springfield Adult Learning Center's ABE Lab.";
require_once("config.php");
require_once(LIBRARY_PATH . "/contentPageFunctions.php");

ob_start();
?>

<!-- BEGIN page breadcrumbs -->

<ol class="breadcrumb">
    <li><a href="/">WebLearn</a></li>
    <li><a href="<?php echo $abeRoutes['abeHome']; ?>">ABE Lab</a></li>
    <li><a href="<?php echo $abeRoutes['english']['grammar']; ?>">Grammar</a></li>
    <li><a href="<?php echo $abeRoutes['english']['toTooTwo']; ?>">To, Too, Two</a></li>
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
      <h2>To, Too, Two</h2>
      <p>Can you correctly use the three forms of 'to,' 'too,' and 'two?' Watch this video tutorial first and then complete the practice activity below.</p>
      <div class="video-container">
         <div class="embed-video">
            <iframe src="https://www.youtube.com/embed/RZW-eCcAmnQ" frameborder="0" allowfullscreen></iframe>
         </div>
      </div>
      <div class="abeActivity">
         <div id="slickQuiz">
            <h2 class="quizName"></h2>
            <div class="quizArea">
               <div class="quizHeader">
                  <a class="button startQuiz bold" href="#">Start Activity!</a>
               </div>
            </div>
            <div class="quizResults">
               <h3 class="quizScore">
                  You Scored: <span></span>
               </h3>
               <br> <a href="<?php echo $abeRoutes['english']['toTooTwo']; ?>">Try Again</a>
            </div>
            <script>
               if (typeof jQuery == 'undefined') {
                   document.write(unescape("%3Cscript src='<?php echo $config['jQuery']['local']; ?>' type='text/javascript'%3E%3C/script%3E"));
               }
            </script>
            <script>
               // Quiz Config
               var quizJSON = {
                   "info": {
                       "name": "",
                       "main": "<p><b>To</b> &#8212;</p><p>Used for expressing a direction, a place, or a position.</p><p><i>Example: I traveled <b>to</b> Boston yesterday.</i></p><br><p><b>Too</b> &#8212; </p><p>Used as a synonym for 'also.' It may additionally be used to mean 'more than enough' or 'very.'</p><p><i>Example: I saw that movie, <b>too</b>.</i></p><p><i>Example: I wasn't <b>too</b> angry with him.</i></p><br><p><b>Two</b> &#8212; </p><p>A number.</p><p><i>Example: I have <b>two</b> jackets.</i></p>",
                       "results": "",
                       "level1": "",
                       "level2": "",
                       "level3": "",
                       "level4": "",
                       "level5": ""
                   },
                   "questions": [{ // Question 1 - Multiple Choice, Single True Answer
                       "q": "I would like some candy&nbsp;__________.",
                       "a": [{
                           "option": "to",
                           "correct": false
                       }, {
                           "option": "too",
                           "correct": true
                       }, {
                           "option": "two",
                           "correct": false
                       }],
                       "correct": "<p><span>That's right!</span>The correct answer is <em>Too</em>.</p>",
                       "incorrect": "<p><span>Oops...</span>The correct answer is actually <em>Too</em>.</p><p><em>Too</em> is a synonym for also.</p>"
                   }, { // Question 2 - Multiple Choice, Single True Answer
                       "q": "Are you going&nbsp;__________&nbsp;call the restaurant?",
                       "a": [{
                           "option": "to",
                           "correct": true
                       }, {
                           "option": "too",
                           "correct": false
                       }, {
                           "option": "two",
                           "correct": false
                       }],
                       "correct": "<p><span>That's right!</span>The correct answer is <em>To</em>.</p>",
                       "incorrect": "<p><span>Oops...</span>The correct answer is actually <em>To</em>.</p><p><em>To</em> is used for expressing a place.</p>"
                   }, { // Question 3 - Multiple Choice, Single True Answer
                       "q": "I only slept for&nbsp;__________&nbsp;hours last night.",
                       "a": [{
                           "option": "to",
                           "correct": false
                       }, {
                           "option": "too",
                           "correct": false
                       }, {
                           "option": "two",
                           "correct": true
                       }],
                       "correct": "<p><span>That's right!</span>The correct answer is <em>Two</em>.</p>",
                       "incorrect": "<p><span>Oops...</span>The correct answer is actually <em>Two</em>.</p><p><em>Two</em> is used for expressing a number.</p>"
                   }, { // Question 4 - Multiple Choice, Single True Answer
                       "q": "We certainly have a lot&nbsp;__________&nbsp;do before the mayor gets here.",
                       "a": [{
                           "option": "to",
                           "correct": true
                       }, {
                           "option": "too",
                           "correct": false
                       }, {
                           "option": "two",
                           "correct": false
                       }],
                       "correct": "<p><span>That's right!</span>The correct answer is <em>To</em>.</p>",
                       "incorrect": "<p><span>Oops...</span>The correct answer is actually <em>To</em>.</p><p><em>To</em> is used for expressing a direction, a place, or a position. In this case it shows the purpose of an action.</p>"
                   }, { // Question 5 - Multiple Choice, Single True Answer
                       "q": "We go&nbsp;__________&nbsp;school at STCC.",
                       "a": [{
                           "option": "to",
                           "correct": true
                       }, {
                           "option": "too",
                           "correct": false
                       }, {
                           "option": "two",
                           "correct": false
                       }],
                       "correct": "<p><span>That's right!</span>The correct answer is <em>To</em>.</p>",
                       "incorrect": "<p><span>Oops...</span>The correct answer is actually <em>To</em>.</p><p><em>To</em> is used for expressing a place.</p>"
                   }, { // Question 6 - Multiple Choice, Single True Answer
                       "q": "Fernando was&nbsp;__________&nbsp;tired to do his homework.",
                       "a": [{
                           "option": "to",
                           "correct": false
                       }, {
                           "option": "too",
                           "correct": true
                       }, {
                           "option": "two",
                           "correct": false
                       }],
                       "correct": "<p><span>That's right!</span>The correct answer is <em>Too</em>.</p>",
                       "incorrect": "<p><span>Oops...</span>The correct answer is actually <em>Too</em>.</p><p><em>Too</em> is used to mean 'more than enough.'</p>"
                   }, { // Question 7 - Multiple Choice, Single True Answer
                       "q": "Your uncle called and said he was going&nbsp;__________&nbsp;be a few minutes late.",
                       "a": [{
                           "option": "to",
                           "correct": true
                       }, {
                           "option": "too",
                           "correct": false
                       }, {
                           "option": "two",
                           "correct": false
                       }],
                       "correct": "<p><span>That's right!</span>The correct answer is <em>To</em>.</p>",
                       "incorrect": "<p><span>Oops...</span>The correct answer is actually <em>To</em>.</p><p><em>To</em> is used for expressing a direction, a place, or a position.</p>"
                   }, { // Question 8 - Multiple Choice, Single True Answer
                       "q": "A grilled cheese sandwich and rice costs&nbsp;__________&nbsp;dollars.",
                       "a": [{
                           "option": "to",
                           "correct": false
                       }, {
                           "option": "too",
                           "correct": false
                       }, {
                           "option": "two",
                           "correct": true
                       }],
                       "correct": "<p><span>That's right!</span>The correct answer is <em>Two</em>.</p>",
                       "incorrect": "<p><span>Oops...</span>The correct answer is actually <em>Two</em>.</p><p><em>Two</em> is used for expressing a number.</p>"
                   }, { // Question 9 - Multiple Choice, Single True Answer
                       "q": "We need&nbsp;__________&nbsp;volunteers to carry the lunches.",
                       "a": [{
                           "option": "to",
                           "correct": false
                       }, {
                           "option": "too",
                           "correct": false
                       }, {
                           "option": "two",
                           "correct": true
                       }],
                       "correct": "<p><span>That's right!</span>The correct answer is <em>Two</em>.</p>",
                       "incorrect": "<p><span>Oops...</span>The correct answer is actually <em>Two</em>.</p><p><em>Two</em> is used for expressing a number.</p>"
                   }, { // Question 10 - Multiple Choice, Single True Answer
                       "q": "Crystal ate&nbsp;__________&nbsp;much candy so now she's sick.",
                       "a": [{
                           "option": "to",
                           "correct": false
                       }, {
                           "option": "too",
                           "correct": true
                       }, {
                           "option": "two",
                           "correct": false
                       }],
                       "correct": "<p><span>That's right!</span>The correct answer is <em>Too</em>.</p>",
                       "incorrect": "<p><span>Oops...</span>The correct answer is actually <em>Too</em>.</p><p><em>Too</em> is used to mean 'more than enough.'</p>"
                   }, { // Question 11 - Multiple Choice, Single True Answer
                       "q": "Dan sent a letter&nbsp;__________&nbsp;his mother.",
                       "a": [{
                           "option": "to",
                           "correct": true
                       }, {
                           "option": "too",
                           "correct": false
                       }, {
                           "option": "two",
                           "correct": false
                       }],
                       "correct": "<p><span>That's right!</span>The correct answer is <em>To</em>.</p>",
                       "incorrect": "<p><span>Oops...</span>The correct answer is actually <em>To</em>.</p><p><em>To</em> is used for expressing a direction.</p>"
                   }, { // Question 12 - Multiple Choice, Single True Answer
                       "q": "I want to play basketball,&nbsp;__________.",
                       "a": [{
                           "option": "to",
                           "correct": false
                       }, {
                           "option": "too",
                           "correct": true
                       }, {
                           "option": "two",
                           "correct": false
                       }],
                       "correct": "<p><span>That's right!</span>The correct answer is <em>Too</em>.</p>",
                       "incorrect": "<p><span>Oops...</span>The correct answer is actually <em>Too</em>.</p><p><em>Too</em> is used as a synonym for 'also.'</p>"
                   }, { // Question 13 - Multiple Choice, Single True Answer
                       "q": "Your tire pressure is&nbsp;__________&nbsp;low.",
                       "a": [{
                           "option": "to",
                           "correct": false
                       }, {
                           "option": "too",
                           "correct": true
                       }, {
                           "option": "two",
                           "correct": false
                       }],
                       "correct": "<p><span>That's right!</span>The correct answer is <em>Too</em>.</p>",
                       "incorrect": "<p><span>Oops...</span>The correct answer is actually <em>Too</em>.</p><p><em>Too</em> is used to mean 'very.'</p>"
                   }, { // Question 14 - Multiple Choice, Single True Answer
                       "q": "Do you have the key&nbsp;__________&nbsp;that door?",
                       "a": [{
                           "option": "to",
                           "correct": true
                       }, {
                           "option": "too",
                           "correct": false
                       }, {
                           "option": "two",
                           "correct": false
                       }],
                       "correct": "<p><span>That's right!</span>The correct answer is <em>To</em>.</p>",
                       "incorrect": "<p><span>Oops...</span>The correct answer is actually <em>To</em>.</p><p><em>To</em> is used used for expressing a place.</p>"
                   }, { // Question 15 - Multiple Choice, Single True Answer
                       "q": "The remote takes&nbsp;__________&nbsp;batteries.",
                       "a": [{
                           "option": "to",
                           "correct": false
                       }, {
                           "option": "too",
                           "correct": false
                       }, {
                           "option": "two",
                           "correct": true
                       }],
                       "correct": "<p><span>That's right!</span>The correct answer is <em>Two</em>.</p>",
                       "incorrect": "<p><span>Oops...</span>The correct answer is actually <em>Two</em>.</p><p><em>Two</em> is used for expressing a number.</p>"
                   }, { // Question 16 - Multiple Choice, Single True Answer
                       "q": "Michael Jordan is a famous basketball player. LeBron James is a famous basketball player&nbsp;__________.",
                       "a": [{
                           "option": "to",
                           "correct": false
                       }, {
                           "option": "too",
                           "correct": true
                       }, {
                           "option": "two",
                           "correct": false
                       }],
                       "correct": "<p><span>That's right!</span>The correct answer is <em>Too</em>.</p>",
                       "incorrect": "<p><span>Oops...</span>The correct answer is actually <em>Too</em>.</p><p><em>Too</em> is used as a synonym for 'also.'</p>"
                   }, { // Question 17 - Multiple Choice, Single True Answer
                       "q": "My brother works a nine&nbsp;__________&nbsp;five job.",
                       "a": [{
                           "option": "to",
                           "correct": true
                       }, {
                           "option": "too",
                           "correct": false
                       }, {
                           "option": "two",
                           "correct": false
                       }],
                       "correct": "<p><span>That's right!</span>The correct answer is <em>To</em>.</p>",
                       "incorrect": "<p><span>Oops...</span>The correct answer is actually <em>To</em>.</p><p><em>To</em> is used for expressing a direction or a position. In this example, 9am to 5pm is a sequence of connected time.</p>"
                   }, { // Question 18 - Multiple Choice, Single True Answer
                       "q": "Due to the many health problems I've been having, I'm only taking&nbsp;__________&nbsp;classes this semester.",
                       "a": [{
                           "option": "to",
                           "correct": false
                       }, {
                           "option": "too",
                           "correct": false
                       }, {
                           "option": "two",
                           "correct": true
                       }],
                       "correct": "<p><span>That's right!</span>The correct answer is <em>Two</em>.</p>",
                       "incorrect": "<p><span>Oops...</span>The correct answer is actually <em>Two</em>.</p><p><em>Two</em> is used for expressing a number.</p>"
                   }, { // Question 19 - Multiple Choice, Single True Answer
                       "q": "I don't like&nbsp;__________&nbsp;drive after dark.",
                       "a": [{
                           "option": "to",
                           "correct": true
                       }, {
                           "option": "too",
                           "correct": false
                       }, {
                           "option": "two",
                           "correct": false
                       }],
                       "correct": "<p><span>That's right!</span>The correct answer is <em>To</em>.</p>",
                       "incorrect": "<p><span>Oops...</span>The correct answer is actually <em>To</em>.</p><p><em>To</em> is used for expressing a place or a position.</p>"
                   }, { // Question 20 - Multiple Choice, Single True Answer
                       "q": "I am running late for work,&nbsp;__________.",
                       "a": [{
                           "option": "to",
                           "correct": false
                       }, {
                           "option": "too",
                           "correct": true
                       }, {
                           "option": "two",
                           "correct": false
                       }],
                       "correct": "<p><span>That's right!</span>The correct answer is <em>Too</em>.</p>",
                       "incorrect": "<p><span>Oops...</span>The correct answer is actually <em>Too</em>.</p><p><em>Too</em> is used as a synonym for 'also.'</p>"
                   }, { // Question 21 - Multiple Choice, Single True Answer
                       "q": "Samantha has&nbsp;__________&nbsp;many cats!",
                       "a": [{
                           "option": "to",
                           "correct": false
                       }, {
                           "option": "too",
                           "correct": true
                       }, {
                           "option": "two",
                           "correct": false
                       }],
                       "correct": "<p><span>That's right!</span>The correct answer is <em>Too</em>.</p>",
                       "incorrect": "<p><span>Oops...</span>The correct answer is actually <em>Too</em>.</p><p><em>Too</em> is used to mean 'more than enough.'</p>"
                   }, { // Question 22 - Multiple Choice, Single True Answer
                       "q": "The fourth grade class wrote a letter&nbsp;__________&nbsp;the President of the United States.",
                       "a": [{
                           "option": "to",
                           "correct": true
                       }, {
                           "option": "too",
                           "correct": false
                       }, {
                           "option": "two",
                           "correct": false
                       }],
                       "correct": "<p><span>That's right!</span>The correct answer is <em>To</em>.</p>",
                       "incorrect": "<p><span>Oops...</span>The correct answer is actually <em>To</em>.</p><p><em>To</em> is used for expressing a direction or a place.</p>"
                   }, { // Question 23 - Multiple Choice, Single True Answer
                       "q": "__________&nbsp;many senators believe there is no alternative to war.",
                       "a": [{
                           "option": "to",
                           "correct": false
                       }, {
                           "option": "too",
                           "correct": true
                       }, {
                           "option": "two",
                           "correct": false
                       }],
                       "correct": "<p><span>That's right!</span>The correct answer is <em>Too</em>.</p>",
                       "incorrect": "<p><span>Oops...</span>The correct answer is actually <em>Too</em>.</p><p><em>Too</em> is used to mean 'more than enough.'</p>"
                   }, { // Question 24 - Multiple Choice, Single True Answer
                       "q": "The&nbsp;__________&nbsp;of you need to be seated while the bus is moving.",
                       "a": [{
                           "option": "to",
                           "correct": false
                       }, {
                           "option": "too",
                           "correct": false
                       }, {
                           "option": "two",
                           "correct": true
                       }],
                       "correct": "<p><span>That's right!</span>The correct answer is <em>Two</em>.</p>",
                       "incorrect": "<p><span>Oops...</span>The correct answer is actually <em>Two</em>.</p><p><em>Two</em> is used for expressing a number.</p>"
                   }, { // Question 25 - Multiple Choice, Single True Answer
                       "q": "I'm taking my business elsewhere because that car salesman is&nbsp;__________&nbsp;pushy.",
                       "a": [{
                           "option": "to",
                           "correct": false
                       }, {
                           "option": "too",
                           "correct": true
                       }, {
                           "option": "two",
                           "correct": false
                       }],
                       "correct": "<p><span>That's right!</span>The correct answer is <em>Too</em>.</p>",
                       "incorrect": "<p><span>Oops...</span>The correct answer is actually <em>Too</em>.</p><p><em>Too</em> is used to mean 'very.'</p>"
                   }]
               };
               
               $(function () {
                   $('#slickQuiz').slickQuiz();
               });
            </script>
         </div>
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