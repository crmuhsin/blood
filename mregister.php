<?php
// Include config file
require_once 'config.php';
session_start();

// If session variable is not set it will redirect to login page
if(!isset($_SESSION['admin']) || empty($_SESSION['admin'])){
  header("location: login.php");
  exit;
}

// Define variables and initialize with empty values
$username = $fullname = $fathersname = $mothersname = $avatar = $gender = $marital = $spousename = $bday = $age = $profession = $bloodgroup = $hsd = $pde = $national = $birth = $address = $phone = $cnt1 = $cnt1r = $cnt1p = $msg = "";

$username_err = $fullname_err = $gender_err = $marital_err = $bday_err = $profession_err = $bloodgroup_err = $hsd_err = $nidbc_err = $address_err = $phone_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])){
 
    // Validate username
    if(empty(trim($_POST["husername"]))){
        $username_err = "Please enter a username.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM members WHERE username = ?";
        
        $stmt = mysqli_prepare($link, $sql);
        if($stmt){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = trim($_POST["husername"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $username_err = "This username is already taken.";
                } else{
                    $username = trim($_POST["husername"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Validate fullname
    if(empty(trim($_POST['hfullname']))){
        $fullname_err = "Please enter fullname.";
    } else{
        $fullname = trim($_POST['hfullname']);
    }

    // Validate birthday
    if(empty(trim($_POST['hbday']))){
        $bday_err = "Please enter the birthday.";
    } else{
        $bday = trim($_POST['hbday']);
    }
    // Validate gender
    if(empty(trim($_POST['hgender']))){
        $gender_err = "Please select a gender.";
    } else{
        $gender = trim($_POST['hgender']);
    }    

    // Validate marital status
    if(empty(trim($_POST['hmarital']))){
        $marital_err = "Please select marital status.";
    } else{
        $marital = trim($_POST['hmarital']);
    }    

    // Validate profession
    if(empty(trim($_POST['hprofession']))){
        $profession_err = "Please enter profession.";
    } else{
        $profession = trim($_POST['hprofession']);
    }

    // Validate bloodgroup
    if(empty(trim($_POST['hbloodgroup']))){
        $bloodgroup_err = "Please select a Blood Group.";
    } else{
        $bloodgroup = trim($_POST['hbloodgroup']);
    }

    // Validate address
    if(empty(trim($_POST['haddress']))){
        $address_err = "Please enter the address.";
    } else{
        $address = trim($_POST['haddress']);
    }     

    // Validate helath description
    if(empty(trim($_POST['hhsd']))){
        $hsd_err = "Please enter Health Description.";
    } else{
        $hsd = trim($_POST['hhsd']);
    }    

    // Validate NID or BCN
    if(empty(trim($_POST['hnational'])) && empty(trim($_POST['hbirth']))){
        $nidbc_err = "Please enter NID or Birth Certificate No.";
    } else if(!empty(trim($_POST['hnational'])) && empty(trim($_POST['hbirth']))){
        $national = trim($_POST['hnational']);
        $birth = "";
    } else if(!empty(trim($_POST['hbirth'])) && empty(trim($_POST['hnational']))){
        $birth = trim($_POST['hbirth']);
        $national = "";
    } else{
        $national = trim($_POST['hnational']);
        $birth = trim($_POST['hbirth']);
    }
    
    // Validate phone
    if(empty(trim($_POST['hphone']))){
        $phone_err = "Please enter the phone number.";
    } else{
        $phone = trim($_POST['hphone']);
    }

    // Validate fathersname
    if(!empty(trim($_POST['hfathersname']))){
        $fathersname = trim($_POST['hfathersname']);
    }
    // Validate mothersname
    if(!empty(trim($_POST['hmothersname']))){
        $mothersname = trim($_POST['hmothersname']);
    }

    // Validate spousename
    if(!empty(trim($_POST['hspousename']))){
        $spousename = trim($_POST['hspousename']);
    }  

    // Validate age
    if(!empty(trim($_POST['hage']))){
        $age = trim($_POST['hage']);
    }     
    // Validate pde
    if(!empty(trim($_POST['hpde']))){
        $pde = trim($_POST['hpde']);
    }     

    // Validate cnt1
    if(!empty(trim($_POST['hcnt1']))){
        $cnt1 = trim($_POST['hcnt1']);
    }     
    // Validate cnt1r
    if(!empty(trim($_POST['hcnt1r']))){
        $cnt1r = trim($_POST['hcnt1r']);
    }  
    // Validate cnt1p
    if(!empty(trim($_POST['hcnt1p']))){
        $cnt1p = trim($_POST['hcnt1p']);
    }      

    
     //image1
     $file_name = $_FILES['avatar']['name'];
     $file_size = $_FILES['avatar']['size'];
     $file_temp = $_FILES['avatar']['tmp_name'];

     $permited  = array('jpg', 'jpeg', 'png', 'gif');
     $div = explode('.', $file_name);
     $file_ext = strtolower(end($div));
     $unique_image = $username.substr(md5(time()), 0, 7).substr(md5($file_temp), 0, 7).'.'.$file_ext;
     $avatar = "avatars/".$unique_image;
    
    if ($file_size >300000) {
         echo "<span class='error'>Image Size should be less than 300KB! You have uploaded ".($file_size/1024)." KB </span>";
     } 
     elseif (in_array($file_ext, $permited) === false) {
     echo "<span class='error'>You can upload only:-".implode(', ', $permited)."</span>";
     } else{
         move_uploaded_file($file_temp, $avatar);
     }

    // Check input errors before inserting in database
    if(empty($username_err) && empty($fullname_err) && empty($gender_err) && 
        empty($marital_err) && empty($bday_err) && empty($profession_err) && 
        empty($bloodgroup_err) && empty($hsd_err) && empty($nidbc_err) && 
        empty($address_err) && empty($phone_err)){
        
        // Prepare an insert statement
        $sql = "INSERT INTO members (username, fullname, fathersname, mothersname, avatar, age, bday, gender, marital, spousename, profession, nid, bcn, bloodgroup, address, phone, cnt1, cnt1r, cnt1p, hsd, pde) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        
        $stmt = mysqli_prepare($link, $sql);
        if($stmt){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sssssssssssssssssssss", $param_username, $param_fullname, $param_fathersname, $param_mothersname, $param_avatar, $param_age, $param_bday, $param_gender, $param_marital, $param_spousename, $param_profession, $param_nid, $param_bcn, $param_bloodgroup, $param_address, $param_phone, $param_cnt1, $param_cnt1r, $param_cnt1p, $param_hsd, $param_pde); 
           
            // Set parameters
            $param_username = $username;
            $param_fullname = $fullname;
            $param_fathersname = $fathersname;
            $param_mothersname = $mothersname;
            $param_avatar = $avatar;
            $param_age = $age;
            $param_bday = $bday;
            $param_gender = $gender;
            $param_marital = $marital;
            $param_spousename = $spousename;
            $param_profession = $profession;
            $param_nid = $national;
            $param_bcn = $birth;
            $param_bloodgroup = $bloodgroup;
            $param_address = $address;
            $param_phone = $phone;
            $param_cnt1 = $cnt1;
            $param_cnt1r = $cnt1r;
            $param_cnt1p = $cnt1p;
            $param_hsd = $hsd;
            $param_pde = $pde;

            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                $msg = "<div class='alert alert-info' role='alert'>New Member Added Successfully</div>";

                //header("location: login.php");
            } else{
               $msg = "<div class='alert alert-danger' role='alert'>Something went wrong. Please try again later.</div>";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Close connection
    mysqli_close($link);
}
$title = "Registration";
?>
<style>
    
</style>
<?php include 'header.php'; ?>

<body>

<?php include 'nav.php'; ?>

<div class="container">
    <div class="row">

            <?php if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['confirm'])){ ?>

            <?php include 'mregister_confirm.php'; ?>

            <?php } else {     ?>

            <?php include 'mregister_submit.php'; ?>

            <?php } ?>
        </div>
    </div> 
</div>  
<?php include 'footer.php'; ?>
    </body>
</html>