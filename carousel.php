<style type="text/css">
    .carousel{ margin-top: 20px;}
    .carousel .item{ height: 500px;}
    .carousel .item img{ margin: 0 auto; height: 100%; width: 100%}
</style>
<div class="jumbotron">
    <div class="container">
<div class="row">
  <div class="col-md-12">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Wrapper for slides -->
    <div class="carousel-inner">

<?php 
    $query = "SELECT * FROM slider";
    $lresult = mysqli_query($link, $query);
    while ($row = mysqli_fetch_array($lresult)):

      $sl1 = $row['slider1'];
      $sl2 = $row['slider2'];
      $sl3 = $row['slider3'];
    endwhile; 
?>
      <div class="item active">
        <img src="<?php echo $sl1; ?>" alt="Los Angeles">
      </div>

      <div class="item">
        <img src="<?php echo $sl2; ?>" alt="Chicago">
      </div>
    
      <div class="item">
        <img src="<?php echo $sl3; ?>" alt="New York">
      </div>


  
    </div>
  </div>
  </div>
</div></div>
</div>