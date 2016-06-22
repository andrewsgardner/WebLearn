<?php 
$currentPage = "abe";
$pageTitle = "Your vs. You're Activity | ABE Lab";
$pageDesc = "A fun grammar activity about using Your and You're. Answer multiple choice questions on the Springfield Adult Learning Center's ABE Lab.";
require_once("config.php");
require_once(LIBRARY_PATH . "/contentPageFunctions.php");

ob_start();
?>

<!-- BEGIN page breadcrumbs -->

<ol class="breadcrumb">
    <li><a href="/">WebLearn</a></li>
    <li><a href="<?php echo $abeRoutes['abeHome']; ?>">ABE Lab</a></li>
    <li><a href="<?php echo $abeRoutes['english']['grammar']; ?>">Grammar</a></li>
    <li><a href="<?php echo $abeRoutes['english']['yourYoure']; ?>">Your vs. You're</a></li>
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
      <h2>Your vs. You're</h2>
      <p>Can you correctly use the two forms of 'your' and 'you're?' Watch this video tutorial first and then complete the practice activity below.</p>
      <div class="video-container">
         <div class="embed-video">
            <iframe src="https://www.youtube.com/embed/KRxod7diTkU" frameborder="0" allowfullscreen></iframe>
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
               <br> <a
                  href="<?php echo $abeRoutes['english']['yourYoure']; ?>">Try Again</a>
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
                        "name":    "",
                        "main":    "<p><b>Your</b> &#8212;</p><p>Used to show possession. It means that something belongs to or is related to 'you.'</p><p><i>Example: Can I borrow <b>your</b> car tomorrow?</i></p><p><i>Example: It's <b>your</b> turn to mow the lawn.</i></p><br><p><b>You're</b> &#8212;</p><p>Is a contraction of the two words: 'you' and 'are.' A contraction is a shorthanded form of group of words. Try substituting 'you are' in each sentence to see if it makes sense.</p><p><i>Example: Please close the door after <b>you're</b> done moving in.</i></p><p><i>Example: <b>You're</b> very good at playing chess.</i></p>",
                        "results": "",
                        "level1":  "",
                        "level2":  "",
                        "level3":  "",
                        "level4":  "",
                        "level5":  ""
                    },
                    "questions": [
                        { // Question 1 - Multiple Choice, Single True Answer
                            "q": "__________&nbsp;a student at Springfield Technical Community College, aren't you?",
                            "a": [
                                {"option": "your",      "correct": false},
                                {"option": "you're",     "correct": true}
                            ],
                            "correct": "<p><span>That's right!</span>The correct answer is <em>You're</em>.</p>",
                            "incorrect": "<p><span>Oops...</span>The correct answer is actually <em>You're</em>.</p><p><em>You're</em> is a contraction of the two words: 'you' and 'are.'</p>"
                        },
                        { // Question 2 - Multiple Choice, Single True Answer
                            "q": "It's now a quarter after nine, which means that&nbsp;__________&nbsp;late for class.",
                            "a": [
                                {"option": "your",      "correct": false},
                                {"option": "you're",     "correct": true}
                            ],
                            "correct": "<p><span>That's right!</span>The correct answer is <em>You're</em>.</p>",
                            "incorrect": "<p><span>Oops...</span>The correct answer is actually <em>You're</em>.</p><p><em>You're</em> is a contraction of the two words: 'you' and 'are.'</p>"
                        },
                        { // Question 3 - Multiple Choice, Single True Answer
                            "q": "I haven't seen&nbsp;__________&nbsp;sweatshirt lately.",
                            "a": [
                                {"option": "your",      "correct": true},
                                {"option": "you're",     "correct": false}
                            ],
                            "correct": "<p><span>That's right!</span>The correct answer is <em>Your</em>.</p>",
                            "incorrect": "<p><span>Oops...</span>The correct answer is actually <em>Your</em>.</p><p><em>Your</em> is used to show possession. It means that the sweatshirt belongs to 'you.'</p>"
                        },
                        { // Question 4 - Multiple Choice, Single True Answer
                            "q": "__________&nbsp;still not happy with the outcome, are you?",
                            "a": [
                                {"option": "your",      "correct": false},
                                {"option": "you're",     "correct": true}
                            ],
                            "correct": "<p><span>That's right!</span>The correct answer is <em>You're</em>.</p>",
                            "incorrect": "<p><span>Oops...</span>The correct answer is actually <em>You're</em>.</p><p><em>You're</em> is a contraction of the two words: 'you' and 'are.'</p>"
                        },
                        { // Question 5 - Multiple Choice, Single True Answer
                            "q": "Excuse me,&nbsp;__________&nbsp;music is too loud. Can your turn it down?",
                            "a": [
                                {"option": "your",      "correct": true},
                                {"option": "you're",     "correct": false}
                            ],
                            "correct": "<p><span>That's right!</span>The correct answer is <em>Your</em>.</p>",
                            "incorrect": "<p><span>Oops...</span>The correct answer is actually <em>Your</em>.</p><p><em>Your</em> is used to show possession. It means that the music is related to 'you.'</p>"
                        },
                        { // Question 6 - Multiple Choice, Single True Answer
                            "q": "I don't like it when&nbsp;__________&nbsp;left out of the group.",
                            "a": [
                                {"option": "your",      "correct": false},
                                {"option": "you're",     "correct": true}
                            ],
                            "correct": "<p><span>That's right!</span>The correct answer is <em>You're</em>.</p>",
                            "incorrect": "<p><span>Oops...</span>The correct answer is actually <em>You're</em>.</p><p><em>You're</em> is a contraction of the two words: 'you' and 'are.'</p>"
                        },
                        { // Question 7 - Multiple Choice, Single True Answer
                            "q": "How do you like&nbsp;__________&nbsp;eggs cooked?",
                            "a": [
                                {"option": "your",      "correct": true},
                                {"option": "you're",     "correct": false}
                            ],
                            "correct": "<p><span>That's right!</span>The correct answer is <em>Your</em>.</p>",
                            "incorrect": "<p><span>Oops...</span>The correct answer is actually <em>Your</em>.</p><p><em>Your</em> is used to show possession. It means that the eggs are related to 'you.'</p>"
                        },
                        { // Question 8 - Multiple Choice, Single True Answer
                            "q": "I sure hope&nbsp;__________&nbsp;going to visit me next year when I move to California.",
                            "a": [
                                {"option": "your",      "correct": false},
                                {"option": "you're",     "correct": true}
                            ],
                            "correct": "<p><span>That's right!</span>The correct answer is <em>You're</em>.</p>",
                            "incorrect": "<p><span>Oops...</span>The correct answer is actually <em>You're</em>.</p><p><em>You're</em> is a contraction of the two words: 'you' and 'are.'</p>"
                        },
                        { // Question 9 - Multiple Choice, Single True Answer
                            "q": "Give me&nbsp;__________&nbsp;cell phone number so I can call you on the road.",
                            "a": [
                                {"option": "your",      "correct": true},
                                {"option": "you're",     "correct": false}
                            ],
                            "correct": "<p><span>That's right!</span>The correct answer is <em>Your</em>.</p>",
                            "incorrect": "<p><span>Oops...</span>The correct answer is actually <em>Your</em>.</p><p><em>Your</em> is used to show possession. It means that the cell phone number belongs to 'you.'</p>"
                        },
                        { // Question 10 - Multiple Choice, Single True Answer
                            "q": "You must keep&nbsp;__________&nbsp;hands clean while performing surgery.",
                            "a": [
                                {"option": "your",      "correct": true},
                                {"option": "you're",     "correct": false}
                            ],
                            "correct": "<p><span>That's right!</span>The correct answer is <em>Your</em>.</p>",
                            "incorrect": "<p><span>Oops...</span>The correct answer is actually <em>Your</em>.</p><p><em>Your</em> is used to show possession. It means that the hands belong to 'you.'</p>"
                        },
                        { // Question 11 - Multiple Choice, Single True Answer
                            "q": "I know that&nbsp;__________&nbsp;not going to give up.",
                            "a": [
                                {"option": "your",      "correct": false},
                                {"option": "you're",     "correct": true}
                            ],
                            "correct": "<p><span>That's right!</span>The correct answer is <em>You're</em>.</p>",
                            "incorrect": "<p><span>Oops...</span>The correct answer is actually <em>You're</em>.</p><p><em>You're</em> is a contraction of the two words: 'you' and 'are.'</p>"
                        },
                        { // Question 12 - Multiple Choice, Single True Answer
                            "q": "I admire&nbsp;__________&nbsp;strength during these hard times.",
                            "a": [
                                {"option": "your",      "correct": true},
                                {"option": "you're",     "correct": false}
                            ],
                            "correct": "<p><span>That's right!</span>The correct answer is <em>Your</em>.</p>",
                            "incorrect": "<p><span>Oops...</span>The correct answer is actually <em>Your</em>.</p><p><em>Your</em> is used to show possession. It means that the strength is related to 'you.'</p>"
                        },
                        { // Question 13 - Multiple Choice, Single True Answer
                            "q": "What is&nbsp;__________&nbsp;favorite baseball team?",
                            "a": [
                                {"option": "your",      "correct": true},
                                {"option": "you're",     "correct": false}
                            ],
                            "correct": "<p><span>That's right!</span>The correct answer is <em>Your</em>.</p>",
                            "incorrect": "<p><span>Oops...</span>The correct answer is actually <em>Your</em>.</p><p><em>Your</em> is used to show possession. It means that the favorite belongs to 'you.'</p>"
                        },
                        { // Question 14 - Multiple Choice, Single True Answer
                            "q": "__________&nbsp;not qualified to practice law anymore in Massachusetts.",
                            "a": [
                                {"option": "your",      "correct": false},
                                {"option": "you're",     "correct": true}
                            ],
                            "correct": "<p><span>That's right!</span>The correct answer is <em>You're</em>.</p>",
                            "incorrect": "<p><span>Oops...</span>The correct answer is actually <em>You're</em>.</p><p><em>You're</em> is a contraction of the two words: 'you' and 'are.'</p>"
                        },
                        { // Question 15 - Multiple Choice, Single True Answer
                            "q": "Please make sure that&nbsp;__________&nbsp;seat backs and tray tables are in the upright position before we land the plane.",
                            "a": [
                                {"option": "your",      "correct": true},
                                {"option": "you're",     "correct": false}
                            ],
                            "correct": "<p><span>That's right!</span>The correct answer is <em>Your</em>.</p>",
                            "incorrect": "<p><span>Oops...</span>The correct answer is actually <em>Your</em>.</p><p><em>Your</em> is used to show possession. It means that the seat backs and tray tables are related to 'you.'</p>"
                        }
                    ]
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