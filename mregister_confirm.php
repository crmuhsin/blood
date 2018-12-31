<?php include 'topbar.php'; ?>

    
<div class="page-header">
    <h3>Review Information</h3>
</div>

<div class="col-sm-12">

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">
    <div class="col-md-6 form-horizontal" style="float: right;">
        
        <input type="file" class="form-control" name="avatar" style="width:140px; float: right;" accept="image/*" onchange="loadFile(event)">

        <img id="output" alt="Select an Image then Press Confirm Submission to finish Registration" style="width:140px;height: 140px;" class="form-control"/>
        <script>
          var loadFile = function(event) {
            var output = document.getElementById('output');
            output.src = URL.createObjectURL(event.target.files[0]);
          };
        </script>

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
                    <td><?php echo $_POST['cnt1']; ?></td>
                    <input type="hidden" value="<?php echo $_POST["cnt1"]; ?>" name="hcnt1"> 
                    <td><?php echo $_POST['cnt1r']; ?></td>
                    <input type="hidden" value="<?php echo $_POST["cnt1r"]; ?>" name="hcnt1r"> 
                    <td><?php echo $_POST['cnt1p']; ?></td>
                    <input type="hidden" value="<?php echo $_POST["cnt1p"]; ?>" name="hcnt1p"> 
                </tr>
            </table>
        </div>
        
    </div>
    <div class="col-md-6">
        <div class="table-responsive">

            <table class="table table-condensed table-bordered">
            
            <tr>
                <th>User Name</th>
                <td><?php echo $_POST["username"]; ?></td>
                <input type="hidden" value="<?php echo $_POST["username"]; ?>" name="husername">  
            </tr>
            <tr>
                <th>Name</th>
                <td><?php echo $_POST['fullname']; ?></td>
                <input type="hidden" value="<?php echo $_POST["fullname"]; ?>" name="hfullname">  
            </tr>
            <tr>
                <th>Father's Name</th>
                <td><?php echo $_POST['fathersname']; ?></td>
                <input type="hidden" value="<?php echo $_POST["fathersname"]; ?>" name="hfathersname">         
            </tr>
            <tr>
                <th>Mother's Name</th>
                <td><?php echo $_POST['mothersname']; ?></td>
                <input type="hidden" value="<?php echo $_POST["mothersname"]; ?>" name="hmothersname">         
            </tr>

            <tr>
                <th>Birthday</th>
                <td><?php echo $bday = $_POST['year']."-".$_POST['month']."-".$_POST['day']; ?></td>
                <input type="hidden" value="<?php echo $bday; ?>" name="hbday">         
            </tr>
            <tr>
                <th>Age</th>
                <td><?php echo $age = (date('Y') - date('Y', strtotime($bday))); ?></td>
                <input type="hidden" value="<?php echo $age; ?>" name="hage">         
            </tr>                        

            <tr>
                <th>Gender</th>
                <td><?php echo $_POST['gender']; ?></td>
                <input type="hidden" value="<?php echo $_POST["gender"]; ?>" name="hgender">         
            </tr>
            <tr>  
                      
            <tr>
                <th>Marital Status</th>
                <td><?php echo $_POST['marital']; ?></td>
                <input type="hidden" value="<?php echo $_POST["marital"]; ?>" name="hmarital">         
            </tr>

            <tr>
                <th>Spouse Name</th>
                <td><?php echo $_POST['spousename']; ?></td>
                <input type="hidden" value="<?php echo $_POST["spousename"]; ?>" name="hspousename">         
            </tr>

            <tr>
                <th>Profession</th>
                <td><?php echo $_POST['profession']; ?></td>
                <input type="hidden" value="<?php echo $_POST["profession"]; ?>" name="hprofession">         
            </tr>

            <tr>

              <th>Blood Group</th>
              <td><?php echo $_POST['bloodgroup']; ?></td>
            <input type="hidden" value="<?php echo $_POST["bloodgroup"]; ?>" name="hbloodgroup">         
            </tr>

            <tr>
              <th>Health Description</th>
              <td><?php echo $_POST['hsd']; ?></td>
              <input type="hidden" value="<?php echo $_POST["hsd"]; ?>" name="hhsd">         
            </tr>

            <tr>
                <th>Previously Donated?</th>
                <td><?php echo $_POST['pde']; ?></td>
                <input type="hidden" value="<?php echo $_POST["pde"]; ?>" name="hpde">         
            </tr>            

            <tr>
                <th>NID</th>
                <td><?php echo $_POST['national']; ?></td>
                <input type="hidden" value="<?php echo $_POST["national"]; ?>" name="hnational">         
            </tr>            

            <tr>
                <th>BCN</th>
                <td><?php echo $_POST['birth']; ?></td>
                <input type="hidden" value="<?php echo $_POST["birth"]; ?>" name="hbirth">         
            </tr>

            <tr>
              <th>Address</th>
              <td><?php echo $_POST['address']; ?></td>
              <input type="hidden" value="<?php echo $_POST["address"]; ?>" name="haddress">         
            </tr>  

            <tr>
              <th>Phone Number</th>
              <td><?php echo $_POST['phone']; ?></td>
            <input type="hidden" value="<?php echo $_POST["phone"]; ?>" name="hphone">        
            </tr>

        </table>



    </div>
</div>

    <button type="submit" name="submit" class="submission btn btn-primary">Confirm Submission</button>

</form>            
