<?php
// Initialize the session
session_start();
require_once 'config.php';


// If session variable is not set it will redirect to login page
if(!isset($_SESSION['admin']) || empty($_SESSION['admin'])){
  header("location: login.php");
  exit;
}

if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])){

     //image1
     $file_name = $_FILES['slider1']['name'];
     $file_size = $_FILES['slider1']['size'];
     $file_temp = $_FILES['slider1']['tmp_name'];

     $permited  = array('jpg', 'jpeg', 'png', 'gif');
     $div = explode('.', $file_name);
     $file_ext = strtolower(end($div));
     $unique_image = "sld_".substr(md5(time()), 0, 7).substr(md5($file_temp), 0, 7).'.'.$file_ext;
     $slider1 = "sliders/".$unique_image;
    
    if ($file_size >1048567) {
         echo "<span class='error'>Image Size should be less then 1MB! </span>";
     } 
     elseif (in_array($file_ext, $permited) === false) {
     echo "<span class='error'>You can upload only:-".implode(', ', $permited)."</span>";
     } else{
         move_uploaded_file($file_temp, $slider1);
     }

          //image1
     $file_name = $_FILES['slider2']['name'];
     $file_size = $_FILES['slider2']['size'];
     $file_temp = $_FILES['slider2']['tmp_name'];

     $permited  = array('jpg', 'jpeg', 'png', 'gif');
     $div = explode('.', $file_name);
     $file_ext = strtolower(end($div));
     $unique_image = "sld_".substr(md5(time()), 0, 7).substr(md5($file_temp), 0, 7).'.'.$file_ext;
     $slider2 = "sliders/".$unique_image;
    
    if ($file_size >1048567) {
         echo "<span class='error'>Image Size should be less then 1MB! </span>";
     } 
     elseif (in_array($file_ext, $permited) === false) {
     echo "<span class='error'>You can upload only:-".implode(', ', $permited)."</span>";
     } else{
         move_uploaded_file($file_temp, $slider2);
     }

          //image1
     $file_name = $_FILES['slider3']['name'];
     $file_size = $_FILES['slider3']['size'];
     $file_temp = $_FILES['slider3']['tmp_name'];

     $permited  = array('jpg', 'jpeg', 'png', 'gif');
     $div = explode('.', $file_name);
     $file_ext = strtolower(end($div));
     $unique_image = "sld_".substr(md5(time()), 0, 7).substr(md5($file_temp), 0, 7).'.'.$file_ext;
     $slider3 = "sliders/".$unique_image;
    
    if ($file_size >1048567) {
         echo "<span class='error'>Image Size should be less then 1MB! </span>";
     } 
     elseif (in_array($file_ext, $permited) === false) {
     echo "<span class='error'>You can upload only:-".implode(', ', $permited)."</span>";
     } else{
         move_uploaded_file($file_temp, $slider3);
     }


    if(!empty($slider1) && !empty($slider2) && !empty($slider3)){
        
        // Prepare an insert statement
        $sql = "UPDATE slider SET slider1 = ?, slider2 = ?, slider3 = ? WHERE id = 1";
        
        $stmt = mysqli_prepare($link, $sql);
        if($stmt){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sss", $param_slider1, $param_slider2, $param_slider3);
            
            // Set parameters
            $param_slider1 = $slider1;
            $param_slider2 = $slider2;
            $param_slider3 = $slider3;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                $msg = "New Member Added Successfully";

                //header("location: login.php");
            } else{
               $msg = "Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Close connection
    mysqli_close($link);
}

$title = "Change Slider";
?>
<?php include 'header.php'; ?>

<body>

<?php include 'nav.php'; ?>
<div class="container">
        <div class="row">

<div class="col-md-12">

<?php include 'topbar.php'; ?>
            
<div class="page-header" style="margin-top: 65px;">
        <h1>Change Slider Image of Home Page</h1>
    </div>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <h4><b><?php echo (isset($msg)?$msg:""); ?></b></h4>
        </div>                        
        <div class="form-group">
            <label for="slider1" class="col-md-4 control-label">Slider1:</label>
            <div class="col-md-8">
                <input type="file" class="form-control" name="slider1" required>
            </div>
        </div>           
        <div class="form-group">
            <label for="slider2" class="col-md-4 control-label">Slider2:</label>
            <div class="col-md-8">
                <input type="file" class="form-control" name="slider2" required>
            </div>
        </div>           
        <div class="form-group">
            <label for="slider3" class="col-md-4 control-label">Slider3:</label>
            <div class="col-md-8">
                <input type="file" class="form-control" name="slider3" required>
            </div>
        </div>             

        <div class="form-group">
            <div class="col-md-8 col-md-offset-4">
                <button type="submit" name="submit" class="submission btn btn-default">Submit</button>
            </div>
        </div>
    </form>                           
</div></div></div>

<?php include 'footer.php'; ?>
    </body>
</html>