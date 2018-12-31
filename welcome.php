<?php
// Initialize the session
session_start();
require 'config.php';

// If session variable is not set it will redirect to login page
if(!isset($_SESSION['admin']) || empty($_SESSION['admin'])){
  header("location: login.php");
  exit;
}

if (isset($_POST['valueToSearch'])) {
    $valueToSearch = $_POST['valueToSearch'];
    $query = "SELECT * FROM (SELECT * FROM (SELECT m.id, m.username, m.bloodgroup, m.age, ldon.lastdonation, m.phone FROM members m LEFT OUTER JOIN (SELECT d.member, d.place, d.lastdonation FROM donation d INNER JOIN (SELECT member, max(lastdonation) AS maxld FROM donation GROUP BY member) dm ON d.member = dm.member AND d.lastdonation = dm.maxld) AS ldon ON m.id = ldon.member) AS avail  WHERE avail.lastdonation NOT BETWEEN NOW() - INTERVAL 10 DAY AND NOW()) AS mem WHERE mem.bloodgroup = '$valueToSearch'";
    $search_result = mysqli_query($link, $query);
} else{
    $query = "SELECT * FROM (SELECT m.id, m.username, m.bloodgroup, m.age, ldon.lastdonation, m.phone FROM members m LEFT OUTER JOIN (SELECT d.member, d.place, d.lastdonation FROM donation d INNER JOIN (SELECT member, max(lastdonation) AS maxld FROM donation GROUP BY member) dm ON d.member = dm.member AND d.lastdonation = dm.maxld) AS ldon ON m.id = ldon.member) AS avail  WHERE avail.lastdonation NOT BETWEEN NOW() - INTERVAL 10 DAY AND NOW()";
    $search_result = mysqli_query($link, $query);
}


$title =  "Welcome";
$slink = '<link href="css/font-awesome.min.css" type="text/css" rel="stylesheet">
    <link href="css/jquery.bdt.css" type="text/css" rel="stylesheet">';
?>

<?php include 'header.php'; ?>
<style>
    th, td {
    text-align: center;
}
</style>
<body>

<?php include 'nav.php'; ?>
<div class="container">
        <div class="row">


<div class="col-md-12">

<?php include 'topbar.php'; ?>
           
<div class="page-header" style="margin-top: 65px;">
        <h2>Hi, <b><?php echo $_SESSION['admin']; ?></b>. Welcome to our site.</h2><br>
        
    </div>


        <h2>Today's Available Donors</h2>        

                <form class="form-horizontal" role="form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <div class="col-md-3" style="float: right;">
                    <select name="valueToSearch" class="form-control" onchange='this.form.submit()'>
                        <option value="">Search by Blood Group</option>
                        <option value="A+">A+</option>
                        <option value="B+">B+</option>
                        <option value="O+">O+</option>
                        <option value="AB+">AB+</option>
                        <option value="A-">A-</option>
                        <option value="B-">B-</option>
                        <option value="O-">O-</option>
                        <option value="AB-">AB-</option>
                    </select>
                </div>
            </form>
            <div class="table-responsive">

            <table class="table table-bordered table-hover table-striped" id="bootstrap-table">
                <thead>
                <tr class="success">
                    
                    <th>User Name</th>
                    <th>Blood Group</th>
                    <th>Last Donation</th>
                    <th>Phone Number</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                <?php while ($row = mysqli_fetch_array($search_result)): ?>
                <tr class="warning">
                    <?php $mid = $row['id']; ?>
                    <td><?php echo $row['username']; ?></td>
                    <td><?php echo $row['bloodgroup']; ?></td>
                    <td><?php echo ($row['lastdonation']? $row['lastdonation'] :"--- ---"); ?></td>
                    <td><?php echo $row['phone']; ?></td>
                    <td>
                        <a href="single.php?id=<?php echo $mid; ?>" class="btn btn-default">
                            <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>
                        </a> 
                    </td>
                </tr>

                <?php endwhile; ?>
                </tbody>

            </table>
        </div>
            
        </div>
    </div>
</div>
<script src="js/jquery.sortelements.js" type="text/javascript"></script>
<script src="js/jquery.bdt.js" type="text/javascript"></script>

<script>
    $(document).ready( function () {
        $('#bootstrap-table').bdt({
            pageRowCount:10,
            arrowDown: 'fa-arrow-circle-down',
            arrowUp: 'fa-arrow-circle-up',
            searchFormClass:"pull-right search-form",
            pageFieldText:"Entries per Page:",
            searchFieldText:"Search",
            showSearchForm:1,
            showEntriesPerPageField:1,
            nextText:"Next",
            previousText:"Previous"
        });
    });
</script>


<?php include 'footer.php'; ?>
    </body>
</html>