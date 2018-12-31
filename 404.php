<?php
// Initialize the session
session_start();

// If session variable is not set it will redirect to login page
if(!isset($_SESSION['admin']) || empty($_SESSION['admin'])){
  header("location: login.php");
  exit;
}
$title = "Error";
?>
<?php include 'header.php'; ?>

<body>

<?php include 'nav.php'; ?>

    <div class="page-header">
        <h1>404 error, the page you are looking for is not found.</h1>
    </div>
    <p><a href="members.php" class="btn btn-primary">Go To the Member Database</a></p>
<?php include 'footer.php'; ?>
    </body>
</html>