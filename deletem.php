<?php
// Initialize the session
session_start();
require 'config.php';

// If session variable is not set it will redirect to login page
if(!isset($_SESSION['admin']) || empty($_SESSION['admin'])){
  header("location: login.php");
  exit;
}

	if (!isset($_GET['delid']) || $_GET['delid'] == NULL) {
	    echo "<script>window.location='members.php';</script>";
	} else{
	    $mid = $_GET['delid'];
		$query = "SELECT * FROM members WHERE id='$mid'";
		$getdata = mysqli_query($link, $query);
		if($getdata){
			while ($row = mysqli_fetch_array($getdata)):
				$dellink1=$row['avatar'];
				unlink($dellink1);

			endwhile;
		}

		$delquery= "DELETE FROM members WHERE id= '$mid'";
		$deldata = mysqli_query($link, $delquery);
		if ($deldata) {
			echo "<script>alert('Information Deleted Successfully.');</script>";
			echo "<script>window.location='members.php';</script>";
		} else{
			echo "<script>alert('Information not Deleted.');</script>";
			echo "<script>window.location='members.php';</script>";
		}
	}

?>