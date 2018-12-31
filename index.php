<?php
// Initialize the session
session_start();
include 'config.php';


$title = "Welcome";
?>
<?php include 'header.php'; ?>

<body>

<?php include 'nav.php'; ?>
<?php include 'carousel.php'; ?>
<hr>
<div class="jumbotron">
<div class="container">
    <div class="row">
  <div class="col-md-12" style="text-align: left;">
                <?php 
                    $query = "SELECT * FROM news ORDER BY id DESC LIMIT 1";
                    $lresult = mysqli_query($link, $query);
                    while ($row = mysqli_fetch_array($lresult)):
                ?>

                <div class="panel panel-default">
                    <div class="panel-heading"><h5><?php echo $row['title']; ?></h5><small style="font-size: 70%;"><?php echo date("j F, Y", strtotime($row['created_at'])); ?></small></div>
                    <div class="panel-body">
                        <p><?php echo $row['description']; ?></p>
                    </div>
                </div>
                <?php endwhile; ?>
        </div>
    </div>
</div>
</div>
    
<?php include 'footer.php'; ?>
    </body>
</html>