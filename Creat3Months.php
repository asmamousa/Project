<?php
session_start();
?>
<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <title>3 Months</title>

    <style type="text/css">
        .first {
            color:gray;
            position: absolute;
            top: 227px;
            left: 525px;
        }

        body {
            width:100% ; height: 700px;
            background-image:	url('succo-rilassante-antistress-per-capelli-parrucchieri-brescia.jpg');

            background-size: 100% 100%;
        }
        td,tr{

            align-items: center;

        }

    </style>

    <style type="text/css">
        .second {
            color:gray;
            position: absolute;
            top: 227px;
            left: 525px;
        }

        .third {
            color:black;
            position: absolute;
            top: 227px;
            left: 525px;
        }
    </style>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

    <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900'>
    <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Montserrat:400,700'>
    <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

    <link rel="stylesheet" href="css/style.css">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|" rel="stylesheet" type="text/css">
    <link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="fonts/iconmoon.css" rel="stylesheet" type="text/css">
    <!-- Loading main css file -->
    <link rel="stylesheet" href="style.css">

    <!--[if lt IE 9]>
    <script src="js/ie-support/html5.js"></script>
    <script src="js/ie-support/respond.js"></script>
    <![endif]-->
    <meta charset="UTF-8">
    <title>Sign Up Page</title>
    <meta charset="UTF-8">
    <title>Sign Up Page</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

    <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900'>
    <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Montserrat:400,700'>
    <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

    <link rel="stylesheet" href="css/style.css">

</head>


<body>
<?php
if(isset($_GET['hi1']))
{
    ?>
    <div class="first ">
        <strong>You did not fill out the required fields</strong>
    </div>
    <?php
}
?>

<?php
if(isset($_GET['bye2']))
{
    ?>
    <div class="second">
        <strong>This account's already exist</strong>
    </div>
    <?php
}
?>

<?php
if(isset($_GET['succ2']))
{
    ?>
    <div class="third">
        <p class="message"> You're almost done, Please <a href="pay.php">Pay</a></p>
    </div>
    <?php
}
?>

<?php
if(isset($_GET['ageno2']))
{
    ?>
    <div class="first">
        <strong>Age Should be between 18 and 40</strong>
    </div>
    <?php
}
?>




<header class="site-header" style="height: 100px; width: 100% ;opacity: .7;background-color: black;" >
    <div class="container" >
        <div id="branding" class="pull-left">

            <h1 class="site-title"><a href="index.html" style="align-content: center"></a></h1>
        </div>
    </div>
</header>

<div class="container container2" style="height: 500px ; width : 950px;background-color: white ">



    <br><br><br><br><br><br>

    <div class="form ">
        <div class="thumbnail"></div>

        <!-- REGISTRATION -->
        <br><br>

        <form  class="login-form" method="post" action="Register3mon.php" id="re">
            &emsp; &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;

            <div class="buttoninput"> <input type="text" placeholder="mobile phone(9 digits)" name="mob1" id="mob1" pattern="[0-9]{3}[0-9]{6}" /> </div>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;

            <div class="buttoninput"> <input type="password" placeholder="password" id="pass1" name="pass1"/> </div>
            &emsp; &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
            <div class="buttoninput">  <input type="text" placeholder="First Name(10 characters)" id="name1" name="name1" pattern="[A-z]{1,10}"/></div>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;

            <div class="buttoninput"> <input type="text" placeholder="Age (18-40)" id="age1" name="age1"/> </div>
            <br>
            &emsp; &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
            <div class="buttoninput"> <input type="text" placeholder="Height (140-190)" id="h1" name="h1" pattern="[1]{1}[4-8]{1}[0-9]{1}"/></div>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
            <div class="buttoninput"> <input type="text" placeholder="Weight (60-90)" id="w1" name="w1" pattern="[6-8]{1}[0-9]{1}"/></div>

            <br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; &emsp;&emsp;&emsp;&emsp;&emsp;&emsp; &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
            <button class="buttoninput" style=" color: darkgray">create</button>

        </form>
    </div>
</div>



<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

<script src="js/index.js"></script>

<footer class="site-footercontainer " style="height: 100px; width: 100% ;opacity: .7;background-color: black;">
    <div class="container ">

        <div class="subscribe">
            <form action="#">


            </form>
        </div>
        <br>
        <p align="center"><br>Copyright 2017 LetsHelpULose . All right reserved</p>


    </div>
</footer>
</body>
</html>