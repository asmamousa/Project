<?php
session_start();
?>
<html>

<head>
    <title>deletion verification </title>

    <style>
        .styleyy{
            position: absolute;
            top:150px;
            left:500px;
            color:rebeccapurple;
            font-family: monospace, serif;

        }

    </style>
    <style type="text/css">
        .first {
            color:red;
            position: absolute;
            top: 827px;
            left: 550px;
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
            color:red;
            position: absolute;
            top: 827px;
            left: 580px;
        }

        .third {
            color:black;
            position: absolute;
            top: 827px;
            left: 510px;
        }
    </style>

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


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

    <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900'>
    <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Montserrat:400,700'>
    <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

    <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900'>
    <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Montserrat:400,700'>
    <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

    <link rel="stylesheet" href="css/style.css">
</head>


<body>

<?php
if(isset($_GET['no']))
{
    ?>
    <div class="second_letter ">
        <strong>You Didn't fill the required information</strong>
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


    <h1> &emsp;&emsp;&emsp;&emsp;&emsp;&emsp; &emsp;&emsp;We're Sad To See You Leave</h1>
    <br><br><br>
    <div class="form">
        <form action="deleteaccount.php" method="post">
            &emsp; &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
            <input  type="text" placeholder="Your mobile-phone" id="wD" name="wD" class="buttoninput"  style="color: black;">
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
            <input type="password" placeholder="Your Password" id="pD" name="pD" class="buttoninput" style="color: black;">
            <br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;

            <input type="submit" value="Confirm Delete" class="buttoninput" style="color: black;">
        </form>
    </div>
</div>

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
