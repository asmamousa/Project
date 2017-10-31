<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">

    <title>Our Stories</title>
    <style type="text/css">
        .first_letter {
            color:red;
            position: absolute;
            top: 4780px;
            left: 510px;
        }
    </style>
    <!-- Loading third party fonts -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|" rel="stylesheet" type="text/css">
    <link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="fonts/iconmoon.css" rel="stylesheet" type="text/css">
    <!-- Loading main css file -->
    <link rel="stylesheet" href="style.css">

    <!--[if lt IE 9]>
    <script src="js/ie-support/html5.js"></script>
    <script src="js/ie-support/respond.js"></script>
    <![endif]-->

</head>


<body>

<?php
if(isset($_GET['nooo']))
{
    ?>
    <div class="first_letter" >
        <strong>You Didn't write a story yet</strong>
    </div>
    <?php
}
?>


<div id="site-content" style=" background-image: url('succo-rilassante-antistress-per-capelli-parrucchieri-brescia.jpg');">
    <header class="site-header" style="height: 100px; width: 100% ;opacity: .7;background-color: black;">
        <div class="container">
            <a  id="branding" class="pull-left" >
                <h4 style="color:  #9d9879 ; opacity: .9; background: transparent;">LetsHelpULose</h4>

            </a>
            <!-- Default snippet for navigation -->
            <div class="main-navigation pull-right">
                <button type="button" class="menu-toggle"><i class="fa fa-bars"></i></button>
                <ul class="menu">

                    <li class="menu-item"><a href="MonthsProfile.php">Back to My Profile</a></li>

                </ul> <!-- .menu -->
            </div> <!-- .main-navigation -->

            <div class="mobile-navigation"></div>
        </div>
    </header> <!-- .site-header -->


    <main class="main-content">

        <div class="content">
            <div class="container">

                <h1 class="entry-title">My Story</h1>
                <p>Looking for a little weight-loss motivation? Look no further! Check out these people and their amazing success stories. Whether they stuck to a new meal plan or trained for a marathon, they all reached their feel-great weight goals. Choose your own path and soon you'll be yelling "I did it!" too.</h3>
                    put button goes to write a story
                </p>

                <div class="recipes-list">
                    <article class="recipe" style="background-color: white; opacity: .9">
                        <figure class="recipe-image"><img src="male.png" alt="Food 1"></figure>
                        <div class="recipe-detail">
                            <h2 class="recipe-title"><a href="single.html"></a></h2>
                            <p><br>
                                <br>
                                I’ve lost 5 kilos in my first week. It's my 10th day and I have included salad with some protein<br>
                                (eg. egg/ lean                                  chicken) as you suggested. After 4 years of trying, the fat is finally coming off. It truly feels like magic!
                                Thank you so much.<br>
                                -Vanessa B.( Mar 2016 )
                            </p>

                        </div>
                    </article>
                    <article class="recipe" style="background-color: white; opacity: .9">
                        <figure class="recipe-image"><img src="male.png" alt="Food 2"></figure>
                        <div class="recipe-detail">

                            <p><br>
                                I purchased your 3 Week Diet program before Christmas and started it on January 21. I found the book to <br>be very informative and easy to read.I’ve lost 17 pounds in 12 days, I’m just concerned that I’m losing too much weight, too quickly. I will admit I haven’t followed the guide exactly. I’m not sticking perfectly to the listed foods and meal plans (but mostly) and doing very little exercise, but the weight keeps flying off.It clearly works and if I’d followed it exactly I think it would scare the living daylights out of me because of the amount that I’d lose   . So thanks again for the information. I’ve never purchased anything like this before because they are usually full of trash, but 3WD has been a pleasant surprise. Plus my girlfriend can't get enough of my new body!
                                <br>James R.( Nov 2016 )
                            </p>

                        </div>
                    </article>
                    <article class="recipe" style="background-color: white; opacity: .9">
                        <figure class="recipe-image"><img src="male.png" alt="Food 3"></figure>
                        <div class="recipe-detail">

                            <p><br>You don’t know me but my name is Elisa and I bought The 3 Week Diet one month ago. I want to share my<br> weight loss story with you, Brian.Since having my first child, I've been carrying around an extra 30 pounds. <br>I've tried many diets and couldn't make anything work. Your diet just made sense and showed me that everything I was doing before was wrong and a waste of my time.The 3 Week Diet plan was so refreshing and so simple to follow. I did everything you said and lost 23 pounds in the first three weeks. I’m now starting the diet again to lose 7 more pounds. You have changed my life, and I am incredibly thankful.
                                <br>Elisa G. ( May 2016 )
                            </p>

                        </div>
                    </article>
                    <article class="recipe" style="background-color: white; opacity: .9">
                        <figure class="recipe-image"><img src="male.png" alt="Food 4"></figure>
                        <div class="recipe-detail">

                            <p><br>
                                <br>
                                I cannot thank you enough for this site. I have a weight issue; and, I am looking forward to using the suggestions<br> on your site. I feel hopeful about a successful outcome; for the first time in approximately 10 years - of struggling with trying to lose weight.<br>

                                DesMona (August 2016)</p>

                        </div>
                    </article>
                    <article class="recipe" style="background-color: white; opacity: .9">
                        <figure class="recipe-image"><img src="male.png" alt="Food 5"></figure>
                        <div class="recipe-detail">

                            <p><br>I wanted to send you a message to thank you for your informative website and resources. It is incredibly<br> rare to find everything you offer for free. I feel that you provide information which is unbiased and to the point. It's realistic and helpful. You don't use a lot of graphics, which I appreciate because there is more information in words anyway. I have used this website for about 3 years now to help keep me on track, even if I am reviewing things I already know. I studied nutrition and wellness throughout college and employed that knowledge in my adult life. I appreciate that the programs you highlight are not quick gimmicks and are backed up by science. So thanks! Keep up the good work. I'll be sure to get you some more traffic as well by continuing to spread the word.

                                <br>Amy (April 2014)</p>

                        </div>
                    </article>
                    <article class="recipe" style="background-color: white; opacity: .9">
                        <figure class="recipe-image"><img src="male.png" alt="Food 5"></figure>
                        <div class="recipe-detail">

                            <p><br><br>

                                I would like to say that thanks to your site I successfully lost 16 kilos 6 months ago and have managed to keep to off. Your daily strict diet was the key to my success.


                                <br>
                                Debbie (March 2014)		</p>

                        </div>
                    </article>

                    <article class="recipe" style="background-color: white; opacity: .9">
                        <figure class="recipe-image"><img src="male.png" alt="Food 5"></figure>
                        <div class="recipe-detail">

                            <p><br><br>
                                <br>



                                I lost 20 lbs in three months thanks to your diet program you gave to me  ! Thanks so much!


                                <br>
                                Jason (August 2016) </p>

                        </div>
                    </article>

                    <article class="recipe" style="background-color: white; opacity: .9">
                        <figure class="recipe-image"><img src="male.png" alt="Food 5"></figure>
                        <div class="recipe-detail">

                            <p><br><br>
                                I just wanted to let you know how much your site has helped me over the past 6 months.. From late November<br> last year to present I have used this calculator to help me lose weight. In total so far I have lost 50 pounds, I went from a size 14 to now a size 6-8 .... I have gained so much more confidence in myself and believe in my self image a lot more! I am a totally happy, revived and strong person who doesn't hide away in the background anymore, thank you so much!! I would recommend this to absolutely anyone and everyone, the results are truly amazing.!

                                <br>
                                Saskia (June 2013)</p>

                        </div>
                    </article>

                    <article class="recipe" style="background-color: white; opacity: .9">
                        <figure class="recipe-image"><img src="male.png" alt="Food 5"></figure>
                        <div class="recipe-detail">

                            <p><br>
                                <br>

                                Dont worry too much about where you have to reach. Enjoy the journey, the destination will arrive by itself, sooner or later.Be creative, Creativity is the quality that you bring to any activity. It is an attitude, an inner approach -- how one looks at things.Never mind the 2 days that you did not do well - concentrate on the the day that you did. Persevere with confidence, that will be all that will really matter. Good Luck.!
                                <br>
                                mark (June 2013)</p>

                        </div>
                    </article>



                    <article class="recipe" style="background-color: white; opacity: .9">
                        <figure class="recipe-image"><img src="male.png" alt="Food 5"></figure>
                        <div class="recipe-detail">

                            <p><br><br>
                                <br>
                                <br>

                                105 lbs down. Started at 280. You can do it. Stick with it.
                                <br>
                                june (may 2015)</p>

                        </div>
                    </article>











                    <article class="recipe" style="background-color: white; opacity: .9">
                        <figure class="recipe-image"><img src="male.png" alt="Food 5"></figure>
                        <div class="recipe-detail">

                            <p><br> <br>
                                <br>
                                I started dieting at the beginning of June...just a few months ago. I've been using your calorie calculator to determine how much I should be eating. As of yesterday, I hit the 60 pound weight loss mark. Thanks very much for all the helpful information on your site!

                                <br>Jeremy (September 2013)

                            </p>

                        </div>
                    </article>
                    <article class="recipe" style="background-color: white; opacity: .9">
                        <figure class="recipe-image"><img src="male.png" alt="Food 5"></figure>
                        <div class="recipe-detail">

                            <p><br><br>
                                <br><br>
                                This site is amazing. I'm an Iranian boy and I'm 18. I lost 50kg (110 pounds) in 9 months. Yes it's possible if you use the calorie calculator. Special thanks to this site.

                                <br>
                                Emad (April 2014)

                            </p>

                        </div>
                    </article>
                    <article class="recipe" style="background-color: white; opacity: .9">
                        <figure class="recipe-image"><img src="male.png" alt="Food 5"></figure>
                        <div class="recipe-detail">

                            <p><br><br><br>
                                Your website is amazing! I appreciate how well put together and easy to follow it is. Thank you.

                                Jen (Nov 2016)</p>

                        </div>
                    </article>








                    <!-- php -->





                    <div class="container2" style="background-color:black ; opacity: .7; ">
                        <br>

                        <article class="recipe " style="background-color: white; opacity: .9">
                            <figure class="recipe-image"><img src="male.png" alt="Food 5"></figure>
                            <div class="recipe-detail">
                                <form action="addStory.php" method="post">
                                <div class="buttoninput recipe"> <input name="s1" id="s1" style="color: gray;" ;type ="text" class="buttoninput recipe" placeholder="write Your Story..."> </div>

                            </div>
                        </article>

                        <button class="buttoninput" style="color: gray"> Add Story </button>
                        </form>
                        <br>
                    </div>
                </div>
            </div>
        </div>

    </main>









    <!-- .main-content -->

    <footer class="buttoninput fullwidth-block" style="height: 100px; width: 100% ;opacity: .7;background-color: black">

        <br>

        <div class="colophon">
            <p>Copyright 2017 LetsHelpULose . All right reserved</p>
        </div>

    </footer>


</div>



<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/plugins.js"></script>
<script src="js/app.js"></script>

</body>

</html>