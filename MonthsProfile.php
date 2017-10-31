<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>



    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">

    <title>My Profile</title>
    <style type="text/css">
        .first_letter {
            color:white;
            position: absolute;
            top: 1145px;
            left: 500px;
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
    <style>
        th, td {
            padding: 5px;
            text-align: center;
        }
    </style>

    <script>
        function fun()
        {
            var x = parseInt(document.getElementById('w').value);
            var y =  parseInt(document.getElementById('h').value);
            y=y/100;
            y=y*y;

            var z =(x/y)+1;
            document.getElementById('bmi').value=z;
        }
    </script>


    <title>W3.CSS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <style>
        .mySlides {display:none}
        .w3-left, .w3-right, .w3-badge {cursor:pointer}
        .w3-badge {height:13px;width:13px;padding:0}
    </style>
</head>


<body class="homepage" style="background-image: url('about1.jpg');
	background-size: 100% 100%;
			" >

<?php
if(isset($_GET['wewe']))
{
    ?>
    <div class="first_letter ">
        <strong>You did not fill out the required fields</strong>
    </div>
    <?php
}
?>



<?php
if(isset($_GET['finished']))
{
    ?>
    <div class="first_letter ">
        <strong>You're Diet Program has finished, Hope we HelpedULose =D</strong>
    </div>
    <?php
}
?>







<header class="site-header" style="height: 100px; width: 100% ;opacity: .7;background-color: black;" >
    <div class="container"  >
        <div id="branding" class="pull-left">
            LetsHelpULose
            <!-- Default snippet for navigation -->
            <h1 class="site-title"><a href="index.html" style="align-content: center"></a></h1>
            <button type="button" class="menu-toggle"><i class="fa fa-bars"></i></button>
            <!-- .menu -->
        </div> <!-- .main-navigation -->

        <div class="mobile-navigation"></div>
    </div>
    </div>

</header> <!-- .site-header -->
<div id="site-content" style="height: 100%;">
    <main class="main-content">


        <div class="container">

            <div class="row">
                <div class="Columnin2 container2" style="background-color:white; ">
                    <ul class="person-detail"><br>
                        <p> Welcome <strong>
                            <?php

                    $id=$_SESSION['user'];
                    $db_server = 'localhost';
                    $db_user_name = 'anm';
                    $db_password = '123456';
                    $db_name = 'db1';

                    @ $db = mysqli_connect($db_server,$db_user_name,$db_password,$db_name) or die("unable to connect to database");
                    $query="select Name from paidaccuser where mobileNum='$id'";
                    $result=mysqli_query($db,$query) or die("error");
                    while($row = mysqli_fetch_assoc($result)) {
                        $fromID = $row['Name'];
                    }


                    echo $fromID   ?>
                        </strong>
                        </p>
                        <li><span class="icon"></span>Your Height  <strong><?php

                                $id=$_SESSION['user'];
                                $db_server = 'localhost';
                                $db_user_name = 'anm';
                                $db_password = '123456';
                                $db_name = 'db1';

                                @ $db = mysqli_connect($db_server,$db_user_name,$db_password,$db_name) or die("unable to connect to database");
                                $query="select Height from paidaccuser where mobileNum='$id'";
                                $result=mysqli_query($db,$query) or die("error");
                                while($row = mysqli_fetch_assoc($result)) {
                                    $fromID = $row['Height'];
                                }


                                echo $fromID   ?></strong></li><br>
                        <li><span class="icon"></span>Your Weight <strong><?php

                                $id=$_SESSION['user'];
                                $db_server = 'localhost';
                                $db_user_name = 'anm';
                                $db_password = '123456';
                                $db_name = 'db1';

                                @ $db = mysqli_connect($db_server,$db_user_name,$db_password,$db_name) or die("unable to connect to database");
                                $query="select weight from paidaccuser where mobileNum='$id'";
                                $result=mysqli_query($db,$query) or die("error");
                                while($row = mysqli_fetch_assoc($result)) {
                                    $fromID = $row['weight'];
                                }


                                echo $fromID   ?></strong></li><br>
                        <li><span class="icon"></span>Find your BMI percentage <strong><a href="BMI page" class="button ">
                        </a></strong></li>



                    </ul>
                    <form name="TESTING">

                        <table>
                            <tr>

                                <td>weight</td>
                                <td>height</td>
                            </tr>

                            <tr>
                                <td>
                                    <input type="number" name="weight" id="w" class="buttoninput">
                                </td>
                                <td>
                                    <input type="number" name="height" id="h" class="buttoninput">

                                </td>

                            </tr>
                            <tr>
                                <td>
                                    <input type="number" name="bmi" id="bmi" class="buttoninput">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="button"  class="buttoninput" value="submit" onclick="fun()"/>

                                </td>
                            </tr>


                        </table>

                        <br>
                        <br>
                        <br>


                    </form>
                    <p class="category-content">
                        BMI Categories:<br>
                        Underweight = <18.5<br>
                        Normal weight = 18.5–24.9<br>
                        Overweight = 25–29.9<br>
                        Obesity = BMI of 30 or greater
                    </p>

                </div>


                <div class="columnin" style="height: 700px;">
                    <p align="center"><h3 style="color: gray"> &emsp;Health Tips AND  Workout Videos </h3> </p>
                    <div class="containervideo">

                        <video width="280" height="280" controls>

                            <source src="<?php

                            $id=$_SESSION['user'];
                            $db_server = 'localhost';
                            $db_user_name = 'anm';
                            $db_password = '123456';
                            $db_name = 'db1';

                            @ $db = mysqli_connect($db_server,$db_user_name,$db_password,$db_name) or die("unable to connect to database");


                            $query="select idForDiet from paidaccuser where mobileNum='$id'";
                            $result=mysqli_query($db,$query) or die("error");
                            while($row = mysqli_fetch_assoc($result)) {
                                $IDDDD = $row['idForDiet'];
                            }


                            $query="select vweek1 from paiddiet where id='$IDDDD'";
                            $result=mysqli_query($db,$query) or die("error");
                            while($row = mysqli_fetch_assoc($result)) {
                                $fromID = $row['vweek1'];
                            }


                            echo $fromID



                            ?>"

                                    type="video/mp4">
                            <source src="<?php

                            $id=$_SESSION['user'];
                            $db_server = 'localhost';
                            $db_user_name = 'anm';
                            $db_password = '123456';
                            $db_name = 'db1';

                            @ $db = mysqli_connect($db_server,$db_user_name,$db_password,$db_name) or die("unable to connect to database");


                            $query="select idForDiet from paidaccuser where mobileNum='$id'";
                            $result=mysqli_query($db,$query) or die("error");
                            while($row = mysqli_fetch_assoc($result)) {
                                $IDDDD = $row['idForDiet'];
                            }


                            $query="select vweek1 from paiddiet where id='$IDDDD'";
                            $result=mysqli_query($db,$query) or die("error");
                            while($row = mysqli_fetch_assoc($result)) {
                                $fromID = $row['vweek1'];
                            }


                            echo $fromID



                            ?>"




                                    type="video/ogg">
                            Your browser does not support HTML5 video.

                        </video>


                        <video width="280" height="280" controls>
                            <source src="<?php

                            $id=$_SESSION['user'];
                            $db_server = 'localhost';
                            $db_user_name = 'anm';
                            $db_password = '123456';
                            $db_name = 'db1';

                            @ $db = mysqli_connect($db_server,$db_user_name,$db_password,$db_name) or die("unable to connect to database");


                            $query="select idForDiet from paidaccuser where mobileNum='$id'";
                            $result=mysqli_query($db,$query) or die("error");
                            while($row = mysqli_fetch_assoc($result)) {
                                $IDDDD = $row['idForDiet'];
                            }


                            $query="select vweek2 from paiddiet where id='$IDDDD'";
                            $result=mysqli_query($db,$query) or die("error");
                            while($row = mysqli_fetch_assoc($result)) {
                                $fromID = $row['vweek2'];
                            }


                            echo $fromID



                            ?>" type="video/mp4">
                            <source src="<?php

                            $id=$_SESSION['user'];
                            $db_server = 'localhost';
                            $db_user_name = 'anm';
                            $db_password = '123456';
                            $db_name = 'db1';

                            @ $db = mysqli_connect($db_server,$db_user_name,$db_password,$db_name) or die("unable to connect to database");


                            $query="select idForDiet from paidaccuser where mobileNum='$id'";
                            $result=mysqli_query($db,$query) or die("error");
                            while($row = mysqli_fetch_assoc($result)) {
                                $IDDDD = $row['idForDiet'];
                            }


                            $query="select vweek2 from paiddiet where id='$IDDDD'";
                            $result=mysqli_query($db,$query) or die("error");
                            while($row = mysqli_fetch_assoc($result)) {
                                $fromID = $row['vweek2'];
                            }


                            echo $fromID



                            ?>" type="video/ogg">
                            Your browser does not support HTML5 video.
                        </video>
                        <br> <br>




                    </div>
                </div>
            </div>

            <br>


            <div class="container2" style="background-color: #F39C12 ; ">


                <table style="width:100%">
                    <tr style="color: #FAD7A0; opacity: .9;">
                        <th>Week 1</th>
                        <th>Week 2</th>
                        <th>Week 3</th>
                        <th>Week 4</th>

                    </tr>

                    <tr>
                        <td>



                            <!-- Trigger/Open The Modal -->
                            <button id="myBtn1" class="buttoninput" style="background-color: white; color: gray ;opacity: .9;">show diet</button>

                            <!-- The Modal -->
                            <div id="myModal1" class="modal">

                                <!-- Modal content -->
                                <div id="m1" class="modal-content">
                                    <span class="close1">&#215;</span>
                                    <?php

                                    $id=$_SESSION['user'];
                                    $db_server = 'localhost';
                                    $db_user_name = 'anm';
                                    $db_password = '123456';
                                    $db_name = 'db1';

                                    @ $db = mysqli_connect($db_server,$db_user_name,$db_password,$db_name) or die("unable to connect to database");
                                    $query="select idForDiet from paidaccuser where mobileNum='$id'";
                                    $result=mysqli_query($db,$query) or die("error");
                                    while($row = mysqli_fetch_assoc($result)) {
                                        $IDdiet = $row['idForDiet'];
                                    }

                                    $query22="select week1 from paiddiet where id='$IDdiet'";
                                    $result22=mysqli_query($db,$query22) or die("error");
                                    while($row = mysqli_fetch_assoc($result22)) {
                                        $diet1 = $row['week1'];
                                    }


                                    echo $diet1   ?>

                                </div>
                                <script>
                                    // Get the modal
                                    var modal1 = document.getElementById('myModal1');

                                    // Get the button that opens the modal
                                    var btn1 = document.getElementById("myBtn1");

                                    // Get the <span> element that closes the modal
                                    var span1 = document.getElementsByClassName("close1")[0];

                                    // When the user clicks the button, open the modal
                                    btn1.onclick = function() {
                                        modal1.style.display = "block";
                                    }

                                    // When the user clicks on <span> (x), close the modal
                                    span1.onclick = function() {
                                        modal1.style.display = "none";
                                    }

                                    // When the user clicks anywhere outside of the modal, close it
                                    window.onclick = function(event) {
                                        if (event.target == modal1) {
                                            modal1.style.display = "none";
                                        }
                                    }
                                </script>
                            </div>
                        </td>
                        <td>



                            <!-- Trigger/Open The Modal -->
                            <button id="myBtn2" class="buttoninput" style="background-color: white; color: gray ;opacity: .9;">show diet</button>

                            <!-- The Modal -->
                            <div id="myModal2" class="modal">

                                <!-- Modal content -->
                                <div id="m2" class="modal-content">
                                    <span class="close2">&#215;</span>
                                    <?php

                                    $id=$_SESSION['user'];
                                    $db_server = 'localhost';
                                    $db_user_name = 'anm';
                                    $db_password = '123456';
                                    $db_name = 'db1';

                                    @ $db = mysqli_connect($db_server,$db_user_name,$db_password,$db_name) or die("unable to connect to database");
                                    $query="select idForDiet from paidaccuser where mobileNum='$id'";
                                    $result=mysqli_query($db,$query) or die("error");
                                    while($row = mysqli_fetch_assoc($result)) {
                                        $IDdiet = $row['idForDiet'];
                                    }

                                    $query22="select week2 from paiddiet where id='$IDdiet'";
                                    $result22=mysqli_query($db,$query22) or die("error");
                                    while($row = mysqli_fetch_assoc($result22)) {
                                        $diet1 = $row['week2'];
                                    }


                                    echo $diet1   ?>
                                </div>
                                <script>
                                    // Get the modal
                                    var modal2 = document.getElementById('myModal2');

                                    // Get the button that opens the modal
                                    var btn2 = document.getElementById("myBtn2");

                                    // Get the <span> element that closes the modal
                                    var span2 = document.getElementsByClassName("close2")[0];

                                    // When the user clicks the button, open the modal
                                    btn2.onclick = function() {
                                        modal2.style.display = "block";
                                    }

                                    // When the user clicks on <span> (x), close the modal
                                    span2.onclick = function() {
                                        modal2.style.display = "none";
                                    }

                                    // When the user clicks anywhere outside of the modal, close it
                                    window.onclick = function(event) {
                                        if (event.target == modal2) {
                                            modal2.style.display = "none";
                                        }
                                    }
                                </script>
                            </div>
                        </td>


                        <td>


                            <!-- Trigger/Open The Modal -->
                            <button id="myBtn3" class="buttoninput" style="background-color: white; color: gray ;opacity: .9;">show diet</button>

                            <!-- The Modal -->
                            <div id="myModal3" class="modal">

                                <!-- Modal content -->
                                <div id="m3" class="modal-content">
                                    <span class="close3">&#215;</span>
                                    <?php

                                    $id=$_SESSION['user'];
                                    $db_server = 'localhost';
                                    $db_user_name = 'anm';
                                    $db_password = '123456';
                                    $db_name = 'db1';

                                    @ $db = mysqli_connect($db_server,$db_user_name,$db_password,$db_name) or die("unable to connect to database");
                                    $query="select idForDiet from paidaccuser where mobileNum='$id'";
                                    $result=mysqli_query($db,$query) or die("error");
                                    while($row = mysqli_fetch_assoc($result)) {
                                        $IDdiet = $row['idForDiet'];
                                    }

                                    $query22="select week3 from paiddiet where id='$IDdiet'";
                                    $result22=mysqli_query($db,$query22) or die("error");
                                    while($row = mysqli_fetch_assoc($result22)) {
                                        $diet1 = $row['week3'];
                                    }


                                    echo $diet1   ?>
                                </div>
                                <script>
                                    // Get the modal
                                    var modal3 = document.getElementById('myModal3');

                                    // Get the button that opens the modal
                                    var btn3 = document.getElementById("myBtn3");

                                    // Get the <span> element that closes the modal
                                    var span3 = document.getElementsByClassName("close3")[0];

                                    // When the user clicks the button, open the modal
                                    btn3.onclick = function() {
                                        modal3.style.display = "block";
                                    }

                                    // When the user clicks on <span> (x), close the modal
                                    span3.onclick = function() {
                                        modal3.style.display = "none";
                                    }

                                    // When the user clicks anywhere outside of the modal, close it
                                    window.onclick = function(event) {
                                        if (event.target == modal3) {
                                            modal3.style.display = "none";
                                        }
                                    }
                                </script>
                            </div>
                        </td>
                        <td>



                            <!-- Trigger/Open The Modal -->
                            <button id="myBtn4" class="buttoninput" style="background-color: white; color: gray ;opacity: .9;">show diet</button>

                            <!-- The Modal -->
                            <div id="myModal4" class="modal">

                                <!-- Modal content -->
                                <div id="m4" class="modal-content">
                                    <span class="close4">&#215;</span>
                                    <?php

                                    $id=$_SESSION['user'];
                                    $db_server = 'localhost';
                                    $db_user_name = 'anm';
                                    $db_password = '123456';
                                    $db_name = 'db1';

                                    @ $db = mysqli_connect($db_server,$db_user_name,$db_password,$db_name) or die("unable to connect to database");
                                    $query="select idForDiet from paidaccuser where mobileNum='$id'";
                                    $result=mysqli_query($db,$query) or die("error");
                                    while($row = mysqli_fetch_assoc($result)) {
                                        $IDdiet = $row['idForDiet'];
                                    }

                                    $query22="select week4 from paiddiet where id='$IDdiet'";
                                    $result22=mysqli_query($db,$query22) or die("error");
                                    while($row = mysqli_fetch_assoc($result22)) {
                                        $diet1 = $row['week4'];
                                    }


                                    echo $diet1   ?>
                                </div>
                                <script>
                                    // Get the modal
                                    var modal4 = document.getElementById('myModal4');

                                    // Get the button that opens the modal
                                    var btn4 = document.getElementById("myBtn4");

                                    // Get the <span> element that closes the modal
                                    var span4 = document.getElementsByClassName("close4")[0];

                                    // When the user clicks the button, open the modal
                                    btn4.onclick = function() {
                                        modal4.style.display = "block";
                                    }

                                    // When the user clicks on <span> (x), close the modal
                                    span4.onclick = function() {
                                        modal4.style.display = "none";
                                    }

                                    // When the user clicks anywhere outside of the modal, close it
                                    window.onclick = function(event) {
                                        if (event.target == modal4) {
                                            modal4.style.display = "none";
                                        }
                                    }
                                </script>
                            </div>
                        </td>
                        <td>










                    </tr>

                </table>


                <div  align="center" class="container2" style="background-color: white; opacity: .9; color: gray">

                    <form action="UpdateWeight.php" method="post">

                        <div class="buttoninput" style="; height: 50%; background-color: gainsboro " align="center"> <input class="buttoninput" style="background-color: white;color: black; width: 100%; height: 50%;" type="text" placeholder="Enter your weight" name="we" id="we"></div>
                        <br>

                        <button class="buttoninput" style=" opacity: .9 ; background-color: #FAD7A0; color: gray" >Update Weight </button>


                    </form>





                </div>
                <br>
            </div>

        </div>
        <br>

        <div class="category-content"></div>

    </main> <!-- .main-content -->




    <footer class="site-footer container" style="height: 140px; width: 100% ;opacity: .7;background-color: black;">
        <div class="container">
            <br>

            <nav class="main-navigation" style="align-items: center">

                <a href="logout.php">&emsp;&emsp;Log Out&emsp;&emsp;</a>
                &emsp;&emsp;&emsp;
                <a href="story.php">&emsp;&emsp;Add a Story &emsp;&emsp;</a>
                &emsp;&emsp;&emsp;
                <a href="deleteaccount1.php">&emsp;&emsp;Delete My Account&emsp;&emsp;</a>
                &emsp;&emsp;&emsp;

            </nav>
            <div class="subscribe">
                <form action="#">


                </form>
            </div>

            <br>
            <br>
            <p>Copyright 2017 LetsHelpULose . All right reserved</p>

        </div>
    </footer>

</div>



<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/plugins.js"></script>
<script src="js/app.js"></script>

</body>

</html>