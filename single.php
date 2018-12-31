<?php
// Initialize the session
session_start();
require 'config.php';

// If session variable is not set it will redirect to login page
if(!isset($_SESSION['admin']) || empty($_SESSION['admin'])){
  header("location: login.php");
  exit;
}
 
// Populate variables with server data
if (!isset($_GET['id']) || $_GET['id'] == 0) {
    header("location: 404.php");
    exit;
} else {
    $id = (int)($_GET['id']);
    $query = "SELECT * FROM `members` WHERE `id` = $id";
    $result = mysqli_query($link, $query);
    $donquery = "SELECT * FROM `donation` WHERE `member` = $id ORDER BY lastdonation DESC";
    $donresult = mysqli_query($link, $donquery);
}

if ($result->num_rows == 0) {
    header("location: 404.php");
    exit;
} else {
while ($row = mysqli_fetch_array($result)):
    $username = $row['username'];
    $fullname = $row['fullname'];
    $fathersname = $row['fathersname'];
    $mothersname = $row['mothersname'];
    $avatar = $row['avatar'];
    $age = $row['age'];
    $bday = $row['bday'];
    $gender = $row['gender'];
    $marital = $row['marital'];
    $spousename = $row['spousename'];
    $profession = $row['profession'];
    $national = $row['nid'];
    $birth = $row['bcn'];
    $bloodgroup = $row['bloodgroup'];
    $address = $row['address'];
    $phone = $row['phone'];
    $cnt1 = $row['cnt1'];
    $cnt1r = $row['cnt1r'];
    $cnt1p = $row['cnt1p'];
    $hsd = $row['hsd'];
    $pde = $row['pde'];
endwhile;
}
$title = 'Member - '.$username;
?> 


<?php include 'header.php'; ?>

<body>

<?php include 'nav.php'; ?>

<div class="container">

<?php include 'topbar.php'; ?>
    
    <div class="row"  style="margin-top: 20px;">

        <div class="col-md-10 col-md-offset-1">
            <div class="col-xs-6 col-md-3" style="float: left;">
                <img src="<?php echo (!empty($avatar)? $avatar : "ava.png"); ?>" alt="Image" width="140" height="140">
            </div>
            <div class="page-header">
                <h1>Member Info <br><small><?php echo ucfirst($fullname); ?></small>  </h1>
            </div>
        <hr>
        <div class="row">
          <div class="col-md-7">
            <h3>Personal Information</h3>
            <hr>
            <?php include 'single_table.php'; ?>

            <div class="col-md-12">
                <div class="page-header">
                    <h4>Other Contact</h4>
                </div>
                <table class="table">
                    <tr class="success">
                        <th style="width: 33%;">Name</th>
                        <th style="width: 33%;">Relation</th>
                        <th style="width: 34%;">Contact Number</th>
                    </tr>
                    <tr class="warning">
                        <td><span id="cnm"><?php echo $cnt1; ?></span><a href="#field11" class="gradient-button edit" style="float: right;"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a></td>

                        <td><?php echo $cnt1r; ?></td>
                        
                        <td><span id="cnp"><?php echo $cnt1p; ?></span><a href="#field12" class="gradient-button edit" style="float: right;"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a></td>
                    </tr>
                    <tr>
                        <td>        
                            <!-- edit fields -->
                            <div class="edit_field" id="field11">
                                <input type="text" class="form-control" name="new_cnm" id="cnt1" value="<?php echo $cnt1; ?>" />
                                <input type="submit" value="Update" class="btn btn-success" id="submit11" onClick="callCrudAction('save_cnm','<?php echo $id; ?>')"/>
                                <a href="#" class="edit btn btn-success">Cancel</a>
                                <br><span class="cnnmsg hidden">Please Enter a Valid Name</span>
                            </div>
                            <!--//edit fields-->
                        </td>
                        <td></td>
                        <td>       
                            <!-- edit fields -->
                            <div class="edit_field" id="field12">
                                <input type="text" class="form-control" name="new_cnp" id="cnt1p" value="<?php echo $cnt1p; ?>" />
                                <input type="submit" value="Update" class="btn btn-success" id="submit12" onClick="callCrudAction('save_cnp','<?php echo $id; ?>')"/>
                                <a href="#" class="edit btn btn-success">Cancel</a>
                                <br><span class="cnpmsg hidden">Please Enter a Valid Phone No.</span>
                            </div>
                            <!--//edit fields-->
                        </td>
                    </tr>
                </table>
            </div>
          </div>
          
          <?php include 'singdon.php'; ?>

         
          </div>

        </div>
    </div>
</div>  
<?php include 'footer.php'; ?>
    </body>
</html>