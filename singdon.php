<script>
function callCrudAction(action,id) {
	var queryString;
	switch(action) {
		case "saveldon":
			queryString = 'action='+action+'&id='+id+'&lastdonation='+$("#lastdonation").val()+'&place='+$("#place").val();
		break;
    case "save_fname":
      queryString = 'action='+action+'&id='+id+'&new_fname='+ $("#fullname").val();
    break;
    case "save_fsname":
      queryString = 'action='+action+'&id='+id+'&new_fsname='+ $("#fathersname").val();
    break;
    case "save_msname":
      queryString = 'action='+action+'&id='+id+'&new_msname='+ $("#mothersname").val();
    break;
    case "save_bday":
      queryString = 'action='+action+'&id='+id+'&new_bday='+ $("#new_bday").val();
    break;
    case "save_marital":
      queryString = 'action='+action+'&id='+id+'&new_marital='+ $("#new_marital").val();
    break;
    case "save_sname":
      queryString = 'action='+action+'&id='+id+'&new_sname='+ $("#spousename").val();
    break;
    case "save_prf":
      queryString = 'action='+action+'&id='+id+'&new_prf='+ $("#profession").val();
    break;
    case "save_hsds":
      queryString = 'action='+action+'&id='+id+'&new_hsds='+ $("#new_hsds").val();
    break;
    case "save_addr":
      queryString = 'action='+action+'&id='+id+'&new_addr='+ $("#new_addr").val();
    break;    
    case "save_phno":
      queryString = 'action='+action+'&id='+id+'&new_phno='+ $("#phone").val();
    break;    
    case "save_cnm":
      queryString = 'action='+action+'&id='+id+'&new_cnm='+ $("#cnt1").val();
    break;    
    case "save_cnp":
      queryString = 'action='+action+'&id='+id+'&new_cnp='+ $("#cnt1p").val();
    break;
  }	 
	jQuery.ajax({
	url: "single_edit.php",
	data: queryString,
	type: "POST",
	success:function(data){
		switch(action) {
			case "saveldon":
				$("#succ").html(data);
			break;
      case "save_fname":
        $("#fname").html(data);
      break;
      case "save_fsname":
        $("#fsname").html(data);
      break;
      case "save_msname":
        $("#msname").html(data);
      break;
      case "save_bday":
        $("#bday").html(data);
      break;
      case "save_marital":
        $("#marital").html(data);
      break;
      case "save_sname":
        $("#sname").html(data);
      break;
      case "save_prf":
        $("#prf").html(data);
      break;      
      case "save_hsds":
        $("#hsds").html(data);
      break;
      case "save_addr":
        $("#addr").html(data);
      break;      
      case "save_phno":
        $("#phno").html(data);
      break;      
      case "save_cnm":
        $("#cnm").html(data);
      break;      
      case "save_cnp":
        $("#cnp").html(data);
      break;		
    }
	},
	error:function (data){}
	});
}
</script>

<div class="col-md-5">
    <h3>Update Donation Information</h3>
    <hr>
	<div id="succ"></div>

        <div class="form-group">
            <label for="lastdonation" class="col-md-5 control-label">Last Donation</label>
            <div class="col-md-7">
                <input type="date" class="form-control" name="lastdonation" id="lastdonation">

                <span class="help-block">
                    <strong><?php //echo $lastdonation_err; ?></strong>
                </span>
            </div>
        </div> 
      
        <div class="form-group">
            <label for="place" class="col-md-5 control-label">Place</label>
            <div class="col-md-7">
                <input type="text" class="form-control" name="place" id="place">

                <span class="help-block">
                    <strong><?php //echo $place_err; ?></strong>
                </span>
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-8 col-md-offset-4">
                <input type="submit" name="update" value ="Update" class="submission btn btn-default" onClick="callCrudAction('saveldon','<?php echo $id; ?>')">
                <a href="single.php?id=<?php echo $id; ?>" class="submission btn btn-default">Refresh</a>
            </div>
        </div>

        <hr>
        <div class="page-header"><h3>Donation History</h3></div>

          <div class="table-responsive">
            <table class="table table-hover">
              <thead>
                  <tr>
                      <th>#</th>
                      <th>Date</th>
                      <th>Place</th>
                  </tr>
              </thead>
              <tbody>
                  <?php  $id=0; while ($row = mysqli_fetch_array($donresult)): $id++; ?>
                  <tr>
                      <td><?php echo $id; ?></td>
                      <td><?php echo date("j F, Y", strtotime($row['lastdonation'])); ?></td>
                      <td><?php echo $row['place']; ?></td>
                  </tr>
                  <?php  endwhile; ?>

              </tbody>
            </table>  
          </div>

</div>
<link rel="stylesheet" href="css/jquery-ui.css">
<script src="js/jquery-ui.js"></script>
<script>
    $(function(){
         // Find any date inputs and override their functionality
         $('input[type="date"]').datepicker({  maxDate: '0'});
    });
</script>