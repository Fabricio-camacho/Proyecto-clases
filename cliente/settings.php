<?php
session_start();

if(!$_SESSION['user_email'])
{

    header("Location: ../index.php");
}

?>
<?php
include("db_conection.php");
if(isset($_POST['user_save']))
{
 $user_id=$_POST['user_id'];
 $user_firstname=$_POST['user_firstname'];
 $user_lastname=$_POST['user_lastname'];
 $user_address=$_POST['user_address'];
 $user_password=$_POST['user_password'];



$update_profile="UPDATE users SET user_password='$user_password',
 user_firstname='$user_firstname',
 user_lastname='$user_lastname',
user_address='$user_address' WHERE user_id='$user_id'";
    if(mysqli_query($dbcon,$update_profile))
    {
	echo "<script>alert('Cuenta actualizada correctamente!')</script>";
        echo"<script>window.open('index.php','_self')</script>";
    }else{
	echo "<script>alert('Error!')</script>";

	}

}

?>
