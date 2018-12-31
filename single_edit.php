<?php 
include 'config.php'; 
$id = $_POST["id"];
$action = $_POST["action"];

if(empty($id)||empty($action)){
	echo "<script>window.location='404.php';</script>";
}
if(!empty($action)) {
   switch($action){
	  case "saveldon":	

	  	 $lastdonation = date('Y/m/d', strtotime($_POST["lastdonation"]));
	  	
	  	function validateDate($date)
	  	{
	  	    $d = DateTime::createFromFormat('Y/m/d', $date);
	  	    return $d && $d->format('Y/m/d') === $date;
	  	}

	  	$place =$_POST["place"];

	  	if(empty($lastdonation)||empty($place)){
	  		echo "<h4>You have to fill both field.</h4>";
	  	}
	  	else if (validateDate($lastdonation)===false) {
	  		echo "<h4>Invalid Date.</h4>";
	  	}
	  	else {	
			$query ="INSERT INTO donation (member, lastdonation, place) VALUES ('$id', '$lastdonation', '$place')";
	    	$result = mysqli_query($link, $query);

		    if($result){ 	?>
				<h5>Data Updated Successfully. Click Refresh to see.</h5>
			<?php }
		}
	  break;

	  case "save_fname":	
	  	$fullname =trim($_POST["new_fname"]);   
		$query ="UPDATE members SET fullname = '$fullname' WHERE id = '$id' ";
	    $result = mysqli_query($link, $query);
	    if($result){ 	?>
			<span><?php echo $fullname; ?></span>
		<?php } else{ ?>
			<span>error</span>
		<?php 
		}
	  break;
	  
	  case "save_fsname":	
	  	$fathersname =trim($_POST["new_fsname"]);   
		$query ="UPDATE members SET fathersname = '$fathersname' WHERE id = '$id' ";
	    $result = mysqli_query($link, $query);
	    if($result){ 	?>
			<span><?php echo $fathersname; ?></span>
		<?php } else{ ?>
			<span>error</span>
		<?php 
		}
	  break;
	  	  
	  case "save_msname":	
	  	$mothersname =trim($_POST["new_msname"]);   
		$query ="UPDATE members SET mothersname = '$mothersname' WHERE id = '$id' ";
	    $result = mysqli_query($link, $query);
	    if($result){ 	?>
			<span><?php echo $mothersname; ?></span>
		<?php } else{ ?>
			<span>error</span>
		<?php 
		}
	  break;
	  	  
	  case "save_bday":	
  	  	$bday = date('Y/m/d', strtotime($_POST["new_bday"]));
		$query ="UPDATE members SET bday = '$bday' WHERE id = '$id' ";
	    $result = mysqli_query($link, $query);
	    if($result){ 	?>
			<span><?php echo date("j F, Y", strtotime($bday)); ?></span>
		<?php } else{ ?>
			<span>error</span>
		<?php 
		}
	  break;
	  	  
	  case "save_marital":	
	  	$marital =trim($_POST["new_marital"]);   
		$query ="UPDATE members SET marital = '$marital' WHERE id = '$id' ";
	    $result = mysqli_query($link, $query);
	    if($result){ 	?>
			<span><?php echo $marital; ?></span>
		<?php } else{ ?>
			<span>error</span>
		<?php 
		}
	  break;
	  	  
	  case "save_sname":	
	  	$spousename =trim($_POST["new_sname"]);   
		$query ="UPDATE members SET spousename = '$spousename' WHERE id = '$id' ";
	    $result = mysqli_query($link, $query);
	    if($result){ 	?>
			<span><?php echo $spousename; ?></span>
		<?php } else{ ?>
			<span>error</span>
		<?php 
		}
	  break;
	  
	  case "save_prf":	
	  	$profession =trim($_POST["new_prf"]);   
		$query ="UPDATE members SET profession = '$profession' WHERE id = '$id' ";
	    $result = mysqli_query($link, $query);
	    if($result){ 	?>
			<span><?php echo $profession; ?></span>
		<?php } else{ ?>
			<span>error</span>
		<?php 
		}
	  break;
	  
	  case "save_hsds":	
	  	$hsd =trim($_POST["new_hsds"]);   
		$query ="UPDATE members SET hsd = '$hsd' WHERE id = '$id' ";
	    $result = mysqli_query($link, $query);
	    if($result){ 	?>
			<span><?php echo $hsd; ?></span>
		<?php } else{ ?>
			<span>error</span>
		<?php 
		}
	  break;
	  
	  case "save_addr":	
	  	$address =trim($_POST["new_addr"]);   
		$query ="UPDATE members SET address = '$address' WHERE id = '$id' ";
	    $result = mysqli_query($link, $query);
	    if($result){ 	?>
			<span><?php echo $address; ?></span>
		<?php } else{ ?>
			<span>error</span>
		<?php 
		}
	  break;
	  
	  case "save_phno":	
	  	$phone =trim($_POST["new_phno"]);   
		$query ="UPDATE members SET phone = '$phone' WHERE id = '$id' ";
	    $result = mysqli_query($link, $query);
	    if($result){ 	?>
			<span><?php echo $phone; ?></span>
		<?php } else{ ?>
			<span>error</span>
		<?php 
		}
	  break;
	  
	  case "save_cnm":	
	  	$cnt1 =trim($_POST["new_cnm"]);   
		$query ="UPDATE members SET cnt1 = '$cnt1' WHERE id = '$id' ";
	    $result = mysqli_query($link, $query);
	    if($result){ 	?>
			<span><?php echo $cnt1; ?></span>
		<?php } else{ ?>
			<span>error</span>
		<?php 
		}
	  break;

	  case "save_cnp":	
	  	$cnt1p =trim($_POST["new_cnp"]);   
		$query ="UPDATE members SET cnt1p = '$cnt1p' WHERE id = '$id' ";
	    $result = mysqli_query($link, $query);
	    if($result){ 	?>
			<span><?php echo $cnt1p; ?></span>
		<?php } else{ ?>
			<span>error</span>
		<?php 
		}
	  break;

	}
}
?>
