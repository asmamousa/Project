
<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">

    <title>Payment</title>
    <style type="text/css">
        .first {
            color:gray;
            position: absolute;
            top: 160px;
            left: 250px;
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
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">

    <title>Payment Verification</title>
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
    <style>
        body{

            background-image: url("succo-rilassante-antistress-per-capelli-parrucchieri-brescia.jpg");
            background-size: 100% 100%;
        }

    </style>
</head>


<body>

<?php
if(isset($_GET['UDFF']))
{
    ?>
    <div class="first ">
        <strong>You did not fill out the required fields</strong>
    </div>
    <?php
}
?>

<div class="container">

    <header class="site-header" style="height: 100px; width: 100% ;opacity: .7;background-color: black;" >
        <div class="container" >
            <div id="branding" class="pull-left">

                <h1 class="site-title"><a href="index.html" style="align-items: center">  &emsp;&emsp;&emsp;&emsp;&emsp; &emsp;&emsp;&emsp;&emsp;&emsp; &emsp;&emsp;&emsp;&emsp;&emsp; &emsp;&emsp;&emsp;&emsp;&emsp; &emsp;&emsp;&emsp;&emsp;&emsp; &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Payment </a></h1>
            </div>
            <!-- Default snippet for navigation -->
            <!-- .main-navigation -->

            <div class="mobile-navigation"></div>
        </div>
    </header> <!-- .site-header -->

    <div class="container container2" style="height: 100%; width : 950px;background-color: white ">

        <div id="site-content ">
            <main class="main-content">

                <div class="content">

                    <div class="contact-form" >
                        <div class="row" >
                            <div class="col-md-5">
                            <form method="post" action="reg32.php">

                                <input type="text" style="background-color: black; opacity: .1; color: white;" placeholder="credit card SIN" id="SIN" name="SIN">
                                <input type="password" style="background-color: black; opacity: .1; color: white;" placeholder="Password..." id="CP" name="CP">
                                <input type="text" style="background-color: black; opacity: .1; color: white;" placeholder="User BankName..." name="BN" id="BN">
                                <input type="submit" style="background-color: lightblue ; opacity: .2 ; color: black;" value="create account">
                            </form>
                            </div>
                          <!--  <div class="col-md-5">
                                <br>
                                <input type="submit" style="background-color: lightblue ; opacity: .2 ; color: black;" value="create account">
                                <br>
                                <br>
                                <br>
                                <input type="submit" style="background-color: lightblue ; opacity: .2 ; color: black;" value=" Back to home"> <a href="index.html"> </a>
                            </div> -->
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <footer class="site-footer " style="height:130px; width: 100% ;opacity: .7;background-color: black;">
        <p align="center"><br>Copyright 2017 LetsHelpULose . All right reserved</p>




    </footer>
</div>


</body>

</html>