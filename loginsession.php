<?php
/**
 * Created by PhpStorm.
 * User: Asma
 * Date: 4/18/2017
 * Time: 6:38 PM
*/
session_start();
$db_server = 'localhost';
$db_user_name = 'anm';
$db_password = '123456';
$db_name = 'db1';
$_SESSION['count']=0;

if (isset($_POST['mob']) and isset($_POST['pass'])) {
    $mob = $_POST['mob'];
    $pass = $_POST['pass'];
    if (empty($mob) || empty($pass)) {

        header('location:login.php?no=true');
        exit;
    }


    @ $db = mysqli_connect($db_server,$db_user_name,$db_password,$db_name) or die("unable to connect to database");



    $raw_results = mysqli_query($db,"SELECT * FROM paidaccuser
            WHERE (`mobileNum` LIKE '%".$mob."%')") ;

    if(mysqli_num_rows($raw_results) > 0){

        $query="select * from paidaccuser where mobileNum='$mob' and pass='$pass'";
        $result=mysqli_query($db,$query) or die("error");
        $row=mysqli_fetch_array($result);

        if(($row['mobileNum']==$mob)and ($row['pass']==$pass)){

            $_SESSION['user']=$row['mobileNum'];
            header('location:MonthsProfile.php');

        }
        else{

            header('location:login.php?show=true');

        }

    }


    else {


        $raw_results = mysqli_query($db,"SELECT * FROM freeaccuser
            WHERE (`mobileNum` LIKE '%".$mob."%')") ;

        if(mysqli_num_rows($raw_results) > 0) {
            $query2 = "select * from freeaccuser where mobileNum='$mob' and password='$pass'";
            $result2 = mysqli_query($db, $query2) or die("error");
            $row2 = mysqli_fetch_array($result2);

            if (($row2['mobileNum'] == $mob) and ($row2['password'] == $pass)) {

                $_SESSION['user']=$row2['mobileNum'];
                header('location:FreeProfile.php');

            } else {

                header('location:login.php?show=true');
            }


        }
        else {
            header('location:login.php?yes=true');

        }

    }

}

?>
