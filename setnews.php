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
    if(!empty(trim($_POST['title']))){
        $title = trim($_POST['title']);
    }
    
    if(!empty(trim($_POST['description']))){
        $description = trim($_POST['description']);
    }

    if(!empty($title) && !empty($description)){
        
        // Prepare an insert statement
        $sql = "INSERT INTO news (title, description) VALUES (?, ?)";
        
        $stmt = mysqli_prepare($link, $sql);
        if($stmt){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ss", $param_title, $param_description);
            
            // Set parameters
            $param_title = $title;
            $param_description = $description;
            
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

$title = "Update News";
?>
<?php include 'header.php'; ?>

<body>

<?php include 'nav.php'; ?>
<div class="container">
        <div class="row">

<div class="col-md-12">

<?php include 'topbar.php'; ?>
           
<div class="page-header" style="margin-top: 65px;">
        <h1>Update News and Announcement</h1>
    </div>
    
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <h4><b><?php echo (isset($msg)?$msg:""); ?></b></h4>
        </div>                        
        <div class="form-group">
            <label for="title" class="col-md-4 control-label">News Title:</label>
            <div class="col-md-8">
                <input type="text" class="form-control" name="title" required>
            </div>
        </div>             

        <div class="form-group">
            <label for="description" class="col-md-4 control-label">Description:</label>
            <div class="col-md-8">
                <textarea class="form-control" name="description" cols="30" rows="3" required></textarea>
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