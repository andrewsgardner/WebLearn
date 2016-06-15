<?php 
$currentPage = "abe";
$pageTitle = "ABE Lab | Metric Conversion Activity";
$pageDesc = "Learn how to convert between meters and kilometers on the Springfield Adult Learning Center's ABE Lab.";
require_once("config.php");
require_once(LIBRARY_PATH . "/contentPageFunctions.php");

ob_start();
?>

<!-- BEGIN page breadcrumbs -->

<ol class="breadcrumb">
    <li><a href="/">WebLearn</a></li>
    <li><a href="<?php echo $abeRoutes['abeHome']; ?>">ABE Lab</a></li>
    <li><a href="<?php echo $abeRoutes['math']['measurement']; ?>">Measurement</a></li>
    <li><a href="<?php echo $abeRoutes['math']['metersKilometers']; ?>">Meters &amp; Kilometers</a></li>
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
       <div class="custom-activity">
           <h2>Metric Conversion: Meters and Kilometers</h2>
           <p>The metric system is a popular set of units for measuring, length, mass, and time.</p>
           <p>In this activity we will learn how to convert between two different metric units of length; the meter (m), and the kilometer (km).</p>
           <h3>What is a Meter (m)?</h3>
           <ul class="activity-ul">
               <li class="italics">A unit of length in the Metric System.</li>
               <li class="italics">The symbol for meter is (m).</li>
               <li class="italics"><span class="bold">1 meter</span> is equal to <span class="bold">100 centimeters</span>.</li>
           </ul>
           <p>The length of a guitar is about 1 meter:</p>
           <div class="activity-thumbnail">
                <img src="<?php echo $config['paths']['img']['content'] . '/guitar.jpg'; ?>" alt="The length of a guitar is about 1 meter">
           </div>
           <h3>What is a Kilometer (km)?</h3>
           <ul class="activity-ul">
               <li class="italics">A unit of length in the Metric System.</li>
               <li class="italics">The symbol for kilometer is (km).</li>
               <li class="italics"><span class="bold">1 kilometer</span> is equal to <span class="bold">1,000 meters</span>.</li>
           </ul>
           <p>The total length of the George Washington Bridge in New York City is 1.45 km (1,450 m):</p>
           <div class="activity-thumbnail">
                <img src="<?php echo $config['paths']['img']['content'] . '/george-washington-bridge.jpg'; ?>" alt="The total length of the George Washington Bridge in New York City is 1.45 km">
           </div>
           <h3>Converting Meters into Kilometers</h3>
           <p>We know that 1,000 m = 1 km.</p>
           <p>Therefore, use <span class="underline">division</span> to convert meters into kilometers.</p>
           <p>Always divide the number of meters you're trying to convert by 1,000:</p>
           <p><em>m &divide; 1,000 = km</em></p>
           <p class="bold">Let's look at an example:</p>
           <p>9,140 meters converted into kilometers is <span class="underline">&nbsp;9.14 km&nbsp;</span></p>
           <p class="bold">Formula:</p>
           <p><em>m &divide; 1,000 = km</em></p>
           <div class="activity-thumbnail">
                <img src="<?php echo $config['paths']['img']['content'] . '/m-km.png'; ?>" alt="Formula for converting meters into kilometers">
           </div>
           <p class="bold">Calculations:</p>
           <p>9,140 m &divide; 1,000 = 9.14 km</p>
           <p class="bold">Result:</p>
           <p>9,140 m is equal to 9.14 km</p>
           <h3>Converting Kilometers into Meters</h3>
           <p>We know that 1 km = 1,000 m.</p>
           <p>Therefore, use <span class="underline">multiplication</span> to convert kilometers into meters.</p>
           <p>Always multiply the number of kilometers you're trying to convert by 1,000:</p>
           <p><em>km &times; 1,000 = m</em></p>
           <p class="bold">Let's look at an example:</p>
           <p>13.50 kilometers converted into meters is <span class="underline">&nbsp;13,500 m&nbsp;</span></p>
           <p class="bold">Formula:</p>
           <p><em>km &times; 1,000 = m</em></p>
           <div class="activity-thumbnail">
                <img src="<?php echo $config['paths']['img']['content'] . '/km-m.png'; ?>" alt="Formula for converting kilometers into meters">
           </div>
           <p class="bold">Calculations:</p>
           <p>13.50 km &times; 1,000 = 13,500 m</p>
           <p class="bold">Result:</p>
           <p>13.50 km is equal to 13,500 m</p>
           <h3>Activity</h3>
           <p>Click the 'start activity' button below to practice converting between meters and kilometers.</p>
           <p class="bold">Calculator Tips:</p>
           <ul class="activity-ul">
               <li class="italics">Use the decimal key when calculating numbers with decimal points.</li>
           </ul>
           <div class="activity-thumbnail">
                <img src="<?php echo $config['paths']['img']['content'] . '/decimal-btn.png'; ?>" alt="Calculator decimal button">
           </div>
           <ul class="activity-ul">
               <li class="italics">Use the clear key to erase the last number or operation entered.</li>
           </ul>
           <div class="activity-thumbnail">
                <img src="<?php echo $config['paths']['img']['content'] . '/clear-btn.png'; ?>" alt="Calculator clear button">
           </div>
           <div class="calc-container">
               <form name=WebCalc class=webcalc-form>
                    <fieldset>
                        <input class=webcalc-screen name=Input size=16>
                    </fieldset>
                    <fieldset>
                        <input type=button class=webcalc-general name=one value=1
                        onclick="WebCalc.Input.value+=&quot;1&quot;"> <input
                        type=button class=webcalc-general name=two value=2
                        onclick="WebCalc.Input.value+=&quot;2&quot;"> <input
                        type=button class=webcalc-general name=three value=3
                        onclick="WebCalc.Input.value+=&quot;3&quot;"> <input
                        type=button class=webcalc-general name=plus value=+
                        onclick="WebCalc.Input.value+=&quot; + &quot;"> <input
                        type=button class=webcalc-general name=divide value=&divide;
                        onclick="WebCalc.Input.value+=&quot; / &quot;">
                    </fieldset>
                    <fieldset>
                        <input type=button class=webcalc-general name=four value=4
                        onclick="WebCalc.Input.value+=&quot;4&quot;"> <input
                        type=button class=webcalc-general name=five value=5
                        onclick="WebCalc.Input.value+=&quot;5&quot;"> <input
                        type=button class=webcalc-general name=six value=6
                        onclick="WebCalc.Input.value+=&quot;6&quot;"> <input
                        type=button class=webcalc-general name=minus value=&minus;
                        onclick="WebCalc.Input.value+=&quot; - &quot;"> <input
                        type=button class=webcalc-general name=decimal value=.
                        onclick="WebCalc.Input.value+=&quot;.&quot;">
                    </fieldset>
                    <fieldset>
                        <input type=button class=webcalc-general name=seven value=7
                        onclick="WebCalc.Input.value+=&quot;7&quot;"> <input
                        type=button class=webcalc-general name=eight value=8
                        onclick="WebCalc.Input.value+=&quot;8&quot;"> <input
                        type=button class=webcalc-general name=nine value=9
                        onclick="WebCalc.Input.value+=&quot;9&quot;"> <input
                        type=button class=webcalc-general name=times value=&times;
                        onclick="WebCalc.Input.value+=&quot; * &quot;"> <input
                        type=button class=webcalc-general name=clear value=C
                        onclick="WebCalc.Input.value=&quot;&quot;">
                    </fieldset>
                    <fieldset>
                        <input type=button class=webcalc-general name=zero value=0
                        onclick="WebCalc.Input.value+=&quot;0&quot;"> <input
                        type=button class=webcalc-long name=equals value="="
                        onclick="WebCalc.Input.value=eval(WebCalc.Input.value)"><br>
                    </fieldset>
               </form>
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
                       <br> <a href="<?php echo $abeRoutes['math']['metersKilometers']; ?>">Try Again</a>
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
                                "main": "",
                                "results": "",
                                "level1": "",
                                "level2": "",
                                "level3": "",
                                "level4": "",
                                "level5": ""
                            },
                            "questions": [
                                { // Question 1 - Multiple Choice, Single True Answer
                                    "q": "2.15 kilometers converted into meters is&nbsp;__________.",
                                    "a": [
                                        {
                                            "option": "215,000 m",
                                            "correct": false
                                        },
                                        {
                                            "option": "250 m",
                                            "correct": false
                                        },
                                        {
                                            "option": "2,150 m",
                                            "correct": true
                                        }
                                    ],
                                    "correct": "<p><span>That's right!</span>The correct answer is <em>2,150 m</em>.</p>",
                                    "incorrect": "<p><span>Oops...</span>The correct answer is actually <em>2,150 m</em>.</p><p><i>2.15 km &times; 1,000 = 2,150 m</i></p>"
                                },
                                { // Question 2 - Multiple Choice, Single True Answer
                                    "q": "19,020 meters converted into kilometers is&nbsp;__________.",
                                    "a": [
                                        {
                                            "option": "19.02 km",
                                            "correct": true
                                        },
                                        {
                                            "option": "190.2 km",
                                            "correct": false
                                        },
                                        {
                                            "option": "19,020,000 km",
                                            "correct": false
                                        }
                                    ],
                                    "correct": "<p><span>That's right!</span>The correct answer is <em>19.02 km</em>.</p>",
                                    "incorrect": "<p><span>Oops...</span>The correct answer is actually <em>19.02 km</em>.</p><p><i>19,020 m &divide; 1,000 = 19.02 km</i></p>"
                                },
                                { // Question 3 - Multiple Choice, Single True Answer
                                    "q": "77.57 kilometers converted into meters is&nbsp;__________.",
                                    "a": [
                                        {
                                            "option": "77,570 m",
                                            "correct": true
                                        },
                                        {
                                            "option": "7,756.9 m",
                                            "correct": false
                                        },
                                        {
                                            "option": "770 m",
                                            "correct": false
                                        }
                                    ],
                                    "correct": "<p><span>That's right!</span>The correct answer is <em>77,570 m</em>.</p>",
                                    "incorrect": "<p><span>Oops...</span>The correct answer is actually <em>77,570 m</em>.</p><p><i>77.57 km &times; 1,000 = 77,570 m</i></p>"
                                },
                                { // Question 4 - Multiple Choice, Single True Answer
                                    "q": "4,420 meters converted into kilometers is&nbsp;__________.",
                                    "a": [
                                        {
                                            "option": "442 km",
                                            "correct": false
                                        },
                                        {
                                            "option": "4.42 km",
                                            "correct": true
                                        },
                                        {
                                            "option": "4,420,000 km",
                                            "correct": false
                                        }
                                    ],
                                    "correct": "<p><span>That's right!</span>The correct answer is <em>4.42 km</em>.</p>",
                                    "incorrect": "<p><span>Oops...</span>The correct answer is actually <em>4.42 km</em>.</p><p><i>4,420 m &divide; 1,000 = 4.42 km</i></p>"
                                },
                                { // Question 5 - Multiple Choice, Single True Answer
                                    "q": "82.73 kilometers converted into meters is&nbsp;__________.",
                                    "a": [
                                        {
                                            "option": "8,273 m",
                                            "correct": false
                                        },
                                        {
                                            "option": "28,730 m",
                                            "correct": false
                                        },
                                        {
                                            "option": "82,730 m",
                                            "correct": true
                                        }
                                    ],
                                    "correct": "<p><span>That's right!</span>The correct answer is <em>82,730 m</em>.</p>",
                                    "incorrect": "<p><span>Oops...</span>The correct answer is actually <em>82,730 m</em>.</p><p><i>82.73 km &times; 1,000 = 82,730 m</i></p>"
                                },
                                { // Question 6 - Multiple Choice, Single True Answer
                                    "q": "719,590 meters converted into kilometers is&nbsp;__________.",
                                    "a": [
                                        {
                                            "option": "791.59 km",
                                            "correct": false
                                        },
                                        {
                                            "option": "719.59 km",
                                            "correct": true
                                        },
                                        {
                                            "option": "7,195.9 km",
                                            "correct": false
                                        }
                                    ],
                                    "correct": "<p><span>That's right!</span>The correct answer is <em>719.59 km</em>.</p>",
                                    "incorrect": "<p><span>Oops...</span>The correct answer is actually <em>719.59 km</em>.</p><p><i>719,590 m &divide; 1,000 = 719.59 km</i></p>"
                                },
                                { // Question 7 - Multiple Choice, Single True Answer
                                    "q": "81.6 kilometers converted into meters is&nbsp;__________.",
                                    "a": [
                                        {
                                            "option": "81,600 m",
                                            "correct": true
                                        },
                                        {
                                            "option": "8,159.9 m",
                                            "correct": false
                                        },
                                        {
                                            "option": "86,100 m",
                                            "correct": false
                                        }
                                    ],
                                    "correct": "<p><span>That's right!</span>The correct answer is <em>81,600 m</em>.</p>",
                                    "incorrect": "<p><span>Oops...</span>The correct answer is actually <em>81,600 m</em>.</p><p><i>81.6 km &times; 1,000 = 81,600 m</i></p>"
                                },
                                { // Question 8 - Multiple Choice, Single True Answer
                                    "q": "7,480 meters converted into kilometers is&nbsp;__________.",
                                    "a": [
                                        {
                                            "option": "74.8 km",
                                            "correct": false
                                        },
                                        {
                                            "option": "7.48 km",
                                            "correct": true
                                        },
                                        {
                                            "option": "4.78 km",
                                            "correct": false
                                        }
                                    ],
                                    "correct": "<p><span>That's right!</span>The correct answer is <em>7.48 km</em>.</p>",
                                    "incorrect": "<p><span>Oops...</span>The correct answer is actually <em>7.48 km</em>.</p><p><i>7,480 m &divide; 1,000 = 7.48 km</i></p>"
                                },
                                { // Question 9 - Multiple Choice, Single True Answer
                                    "q": "6.84 kilometers converted into meters is&nbsp;__________.",
                                    "a": [
                                        {
                                            "option": "6,840 m",
                                            "correct": true
                                        },
                                        {
                                            "option": "8,640 m",
                                            "correct": false
                                        },
                                        {
                                            "option": "684 m",
                                            "correct": false
                                        }
                                    ],
                                    "correct": "<p><span>That's right!</span>The correct answer is <em>6,840 m</em>.</p>",
                                    "incorrect": "<p><span>Oops...</span>The correct answer is actually <em>6,840 m</em>.</p><p><i>6.84 km &times; 1,000 = 6,840 m</i></p>"
                                },
                                { // Question 10 - Multiple Choice, Single True Answer
                                    "q": "64,330 meters converted into kilometers is&nbsp;__________.",
                                    "a": [
                                        {
                                            "option": "643.3 km",
                                            "correct": false
                                        },
                                        {
                                            "option": "64.33 km",
                                            "correct": true
                                        },
                                        {
                                            "option": "46.33 km",
                                            "correct": false
                                        }
                                    ],
                                    "correct": "<p><span>That's right!</span>The correct answer is <em>64.33 km</em>.</p>",
                                    "incorrect": "<p><span>Oops...</span>The correct answer is actually <em>64.33 km</em>.</p><p><i>64,330 m &divide; 1,000 = 64.33 km</i></p>"
                                },
                                { // Question 11 - Multiple Choice, Single True Answer
                                    "q": "7.66 kilometers converted into meters is&nbsp;__________.",
                                    "a": [
                                        {
                                            "option": "7,066 m",
                                            "correct": false
                                        },
                                        {
                                            "option": "766 m",
                                            "correct": false
                                        },
                                        {
                                            "option": "7,660 m",
                                            "correct": true
                                        }
                                    ],
                                    "correct": "<p><span>That's right!</span>The correct answer is <em>7,660 m</em>.</p>",
                                    "incorrect": "<p><span>Oops...</span>The correct answer is actually <em>7,660 m</em>.</p><p><i>7.66 km &times; 1,000 = 7,660 m</i></p>"
                                },
                                { // Question 12 - Multiple Choice, Single True Answer
                                    "q": "315,980 meters converted into kilometers is&nbsp;__________.",
                                    "a": [
                                        {
                                            "option": "315.98 km",
                                            "correct": true
                                        },
                                        {
                                            "option": "3,159.8 km",
                                            "correct": false
                                        },
                                        {
                                            "option": "319.58 km",
                                            "correct": false
                                        }
                                    ],
                                    "correct": "<p><span>That's right!</span>The correct answer is <em>315.98 km</em>.</p>",
                                    "incorrect": "<p><span>Oops...</span>The correct answer is actually <em>315.98 km</em>.</p><p><i>315,980 m &divide; 1,000 = 315.98 km</i></p>"
                                },
                                { // Question 13 - Multiple Choice, Single True Answer
                                    "q": "38.42 kilometers converted into meters is&nbsp;__________.",
                                    "a": [
                                        {
                                            "option": "38,420 m",
                                            "correct": true
                                        },
                                        {
                                            "option": "83,420 m",
                                            "correct": false
                                        },
                                        {
                                            "option": "3,842 m",
                                            "correct": false
                                        }
                                    ],
                                    "correct": "<p><span>That's right!</span>The correct answer is <em>38,420 m</em>.</p>",
                                    "incorrect": "<p><span>Oops...</span>The correct answer is actually <em>38,420 m</em>.</p><p><i>38.42 km &times; 1,000 = 38,420 m</i></p>"
                                },
                                { // Question 14 - Multiple Choice, Single True Answer
                                    "q": "37,330 meters converted into kilometers is&nbsp;__________.",
                                    "a": [
                                        {
                                            "option": "373.3 km",
                                            "correct": false
                                        },
                                        {
                                            "option": "37 km",
                                            "correct": false
                                        },
                                        {
                                            "option": "37.33 km",
                                            "correct": true
                                        }
                                    ],
                                    "correct": "<p><span>That's right!</span>The correct answer is <em>37.33 km</em>.</p>",
                                    "incorrect": "<p><span>Oops...</span>The correct answer is actually <em>37.33 km</em>.</p><p><i>37,330 m &divide; 1,000 = 37.33 km</i></p>"
                                },
                                { // Question 15 - Multiple Choice, Single True Answer
                                    "q": "12.74 kilometers converted into meters is&nbsp;__________.",
                                    "a": [
                                        {
                                            "option": "1,274 m",
                                            "correct": false
                                        },
                                        {
                                            "option": "12,740 m",
                                            "correct": true
                                        },
                                        {
                                            "option": "21,740 m",
                                            "correct": false
                                        }
                                    ],
                                    "correct": "<p><span>That's right!</span>The correct answer is <em>12,740 m</em>.</p>",
                                    "incorrect": "<p><span>Oops...</span>The correct answer is actually <em>12,740 m</em>.</p><p><i>12.74 km &times; 1,000 = 12,740 m</i></p>"
                                },
                                { // Question 16 - Multiple Choice, Single True Answer
                                    "q": "77,590 meters converted into kilometers is&nbsp;__________.",
                                    "a": [
                                        {
                                            "option": "77.95 km",
                                            "correct": false
                                        },
                                        {
                                            "option": "775.9 km",
                                            "correct": false
                                        },
                                        {
                                            "option": "77.59 km",
                                            "correct": true
                                        }
                                    ],
                                    "correct": "<p><span>That's right!</span>The correct answer is <em>77.59 km</em>.</p>",
                                    "incorrect": "<p><span>Oops...</span>The correct answer is actually <em>77.59 km</em>.</p><p><i>77,590 m &divide; 1,000 = 77.59 km</i></p>"
                                },
                                { // Question 17 - Multiple Choice, Single True Answer
                                    "q": "30.85 kilometers converted into meters is&nbsp;__________.",
                                    "a": [
                                        {
                                            "option": "3,085 m",
                                            "correct": false
                                        },
                                        {
                                            "option": "3,850 m",
                                            "correct": false
                                        },
                                        {
                                            "option": "30,850 m",
                                            "correct": true
                                        }
                                    ],
                                    "correct": "<p><span>That's right!</span>The correct answer is <em>30,850 m</em>.</p>",
                                    "incorrect": "<p><span>Oops...</span>The correct answer is actually <em>30,850 m</em>.</p><p><i>30.85 km &times; 1,000 = 30,850 m</i></p>"
                                },
                                { // Question 18 - Multiple Choice, Single True Answer
                                    "q": "126,090 meters converted into kilometers is&nbsp;__________.",
                                    "a": [
                                        {
                                            "option": "126.09 km",
                                            "correct": true
                                        },
                                        {
                                            "option": "1,260.9 km",
                                            "correct": false
                                        },
                                        {
                                            "option": "1,090 km",
                                            "correct": false
                                        }
                                    ],
                                    "correct": "<p><span>That's right!</span>The correct answer is <em>126.09 km</em>.</p>",
                                    "incorrect": "<p><span>Oops...</span>The correct answer is actually <em>126.09 km</em>.</p><p><i>126,090 m &divide; 1,000 = 126.09 km</i></p>"
                                },
                                { // Question 19 - Multiple Choice, Single True Answer
                                    "q": "44.7 kilometers converted into meters is&nbsp;__________.",
                                    "a": [
                                        {
                                            "option": "44,700 m",
                                            "correct": true
                                        },
                                        {
                                            "option": "44,470 m",
                                            "correct": false
                                        },
                                        {
                                            "option": "4,470 m",
                                            "correct": false
                                        }
                                    ],
                                    "correct": "<p><span>That's right!</span>The correct answer is <em>44,700 m</em>.</p>",
                                    "incorrect": "<p><span>Oops...</span>The correct answer is actually <em>44,700 m</em>.</p><p><i>44.7 km &times; 1,000 = 44,700 m</i></p>"
                                },
                                { // Question 20 - Multiple Choice, Single True Answer
                                    "q": "42,880 meters converted into kilometers is&nbsp;__________.",
                                    "a": [
                                        {
                                            "option": "24.88 km",
                                            "correct": false
                                        },
                                        {
                                            "option": "42.88 km",
                                            "correct": true
                                        },
                                        {
                                            "option": "428.8 km",
                                            "correct": false
                                        }
                                    ],
                                    "correct": "<p><span>That's right!</span>The correct answer is <em>42.88 km</em>.</p>",
                                    "incorrect": "<p><span>Oops...</span>The correct answer is actually <em>42.88 km</em>.</p><p><i>42,880 &divide; 1,000 = 42.88 km</i></p>"
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