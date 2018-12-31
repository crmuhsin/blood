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
    $donquery = "SELECT * FROM `donation` WHERE `member` = $id";
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

    <div class="btn-group-justified" role="group" style="padding-top: 20px;">            
        <a href="members.php" class="btn btn-succes">Member Database</a>
        <a href="mregister.php" class="btn btn-succes">Register Member</a>
        <div class="btn-group" role="group">
            <button type="button" class="btn btn-succes dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Settings <span class="caret"></span>
            </button>

        <ul class="dropdown-menu">
            <li><a href="changeslider.php" class="btn btn-succes">Change Slider Image</a></li>
            <li><a href="updatenews.php" class="btn btn-succes">Update News and Announcement</a></li>
        </ul>
      </div>
    </div>
    
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
                    <tr>
                        <th>Name</th>
                        <th>Relation</th>
                        <th>Contact Number</th>
                    </tr>
                    <tr>
                        <td><?php echo $cnt1; ?></td>
                        <td><?php echo $cnt1r; ?></td>
                        <td><?php echo $cnt1p; ?></td>
                    </tr>
                </table>
            </div>
          </div>
          
          <?php include 'doninfo.php'; ?>

         
          </div>

        </div>
    </div>
</div>  
<?php include 'footer.php'; ?>
    </body>
</html>