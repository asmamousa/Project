<?php
/**
 * Created by PhpStorm.
 * User: Asma
 * Date: 4/30/2017
 * Time: 3:57 AM
 */

session_start();
$db_server = 'localhost';
$db_user_name = 'anm';
$db_password = '123456';
$db_name = 'db1';
$id=$_SESSION['user'];


if (isset($_POST) ) {
    $s1 = $_POST['s1'];
    if (empty($s1)) {

        header('location:story.php?nooo=true');
        exit;
    }
else{
    @ $db = mysqli_connect($db_server,$db_user_name,$db_password,$db_name) or die("unable to connect to database");

    $sq2 = "INSERT INTO `ourstories` (`mobileNum`,`Story`) 
            VALUES ('$id','$s1')";

    if ($db->query($sq2) === TRUE) {

        header('location:story.php');

    } else {
        echo "Error: " . $sq2 . "<br>" . $db->error;
    }
}

}

?>