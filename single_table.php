<style>
.error, .unmsg, .fnmsg, .fsnmsg, .msnmsg, .snmsg, .prnmsg, .nidmsg, .bcnmsg, .phnmsg, .cnnmsg, .cnrmsg, .cnpmsg {
    color: red;
}
.hidden {
     visibility:hidden;
}
</style>
<script src="js/jquery.validate.js"></script>
<script src="js/form-validation.js"></script>


<div class="table-responsive">
<table class="table table-bordered edit-table">

<tr>
    <th>User Name</th>
    <td><?php echo $username; ?></td>
    <td></td>
</tr>

<tr>
    <th>Name:</th>
    <td >   
        <!-- edit fields -->
        <span id="fname"><?php echo $fullname; ?></span>
        <div class="edit_field" id="field1">
            <input type="text" class="form-control" name="new_fname" id="fullname" value="<?php echo $fullname; ?>" />
            <input type="submit" value="Update" class="btn btn-success" id="submit1" onClick="callCrudAction('save_fname','<?php echo $id; ?>')" />
            <a href="#" class="edit btn btn-success">Cancel</a>
            <br><span class="fnmsg hidden">Please Enter a Valid Name</span>
        </div>
        <!--//edit fields-->
        
    </td>
    <td><a href="#field1" class="gradient-button edit"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a></td>
</tr>

<tr>
    <th>Father's Name:</th>
    <td >   
        <!-- edit fields -->
        <span id="fsname"><?php echo $fathersname; ?></span>
        <div class="edit_field" id="field2">
            <input type="text" class="form-control" name="new_fsname" id="fathersname" value="<?php echo $fathersname; ?>" />
            <input type="submit" value="Update" class="btn btn-success" id="submit2"  onClick="callCrudAction('save_fsname','<?php echo $id; ?>')"/>
            <a href="#" class="edit btn btn-success">Cancel</a>
            <br><span class="fsnmsg hidden">Please Enter a Valid Name</span>
        </div>
        <!--//edit fields-->
        
    </td>
    <td><a href="#field2" class="gradient-button edit"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a></td>
</tr>

<tr>
    <th>Mother's Name</th>
    <td >   
        <!-- edit fields -->
        <span id="msname"><?php echo $mothersname; ?></span>
        <div class="edit_field" id="field3">
            <input type="text" class="form-control" name="new_msname" id="mothersname" value="<?php echo $mothersname; ?>" />
            <input type="submit" value="Update" class="btn btn-success" id="submit3"  onClick="callCrudAction('save_msname','<?php echo $id; ?>')"/>
            <a href="#" class="edit btn btn-success">Cancel</a>
            <br><span class="msnmsg hidden">Please Enter a Valid Name</span>
          </div>
        </div>
        <!--//edit fields-->
        
    </td>
    <td><a href="#field3" class="gradient-button edit"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a></td>
</tr>
<tr>
  <th>Age</th>
  <td><?php echo $age; ?></td>
  <td></td>
</tr>

<tr>
  <th>Birthday</th>
  <td>        <!-- edit fields -->
        <span id="bday"><?php echo date("j F, Y", strtotime($bday)); ?></span>
        <div class="edit_field" id="field4">
            <input type="date" class="form-control" name="new_bday" id="new_bday">
            <input type="submit" value="Update" class="btn btn-success" id="submit4"  onClick="callCrudAction('save_bday','<?php echo $id; ?>')"/>
            <a href="#" class="edit btn btn-success">Cancel</a>
          </div>
        </div>
        <!--//edit fields-->
        
    </td>
    <td><a href="#field4" class="gradient-button edit"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a></td>
</tr>

<tr>                         
  <th>Gender</th>
  <td><?php echo $gender; ?></td>
  <td></td>
</tr>

<tr>                         
  <th>Marital Status</th>
    <td >   
        <!-- edit fields -->
        <span id="marital"><?php echo $marital; ?></span>
        <div class="edit_field" id="field5">
                <select name="new_marital" class="form-control" id="new_marital"><?php if ($marital == "married") { ?>
                    <option value="married" selected>Married</option>
                    <option value="notmarried">Not Married</option>
                <?php } else {?>
                    <option value="married">Married</option>
                    <option value="notmarried" selected>Not Married</option>
                <?php } ?>
                </select>
            <input type="submit" value="Update" class="btn btn-success" id="submit5"  onClick="callCrudAction('save_marital','<?php echo $id; ?>')"/>
            <a href="#" class="edit btn btn-success">Cancel</a>
          </div>
        </div>
        <!--//edit fields-->
        
    </td>
    <td><a href="#field5" class="gradient-button edit"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a></td></tr>
<?php if($spousename != "" || $marital == "married"){ ?>
<tr>                         
  <th>Spouse Name</th>
  <td>
        <!-- edit fields -->
        <span id="sname"><?php echo $spousename; ?></span>
        <div class="edit_field" id="field6">
            <input type="text" class="form-control" name="new_sname" id="spousename" value="<?php echo $spousename; ?>" />
            <input type="submit" value="Update" class="btn btn-success" id="submit6"  onClick="callCrudAction('save_sname','<?php echo $id; ?>')"/>
            <a href="#" class="edit btn btn-success">Cancel</a>
            <br><span class="snmsg hidden">Please Enter a Valid Name</span>
          </div>
        </div>
        <!--//edit fields-->
        
    </td>
    <td><a href="#field6" class="gradient-button edit"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a></td>
</tr>
<?php }?>
<tr>
    <th>Profession</th>
  <td>
        <!-- edit fields -->
        <span id="prf"><?php echo $profession; ?></span>
        <div class="edit_field" id="field7">
            <input type="text" class="form-control" name="new_prf" id="profession" value="<?php echo $profession; ?>" />
            <input type="submit" value="Update" class="btn btn-success" id="submit7"  onClick="callCrudAction('save_prf','<?php echo $id; ?>')"/>
            <a href="#" class="edit btn btn-success">Cancel</a>
            <br><span class="prnmsg hidden">Please Enter a Valid Profession</span>
          </div>
        </div>
        <!--//edit fields-->
        
    </td>
    <td><a href="#field7" class="gradient-button edit"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a></td>
</tr>               
<tr>
    <th>NID</th>
    <td><?php echo $national; ?></td>
    <td></td>
</tr>                
<tr>
    <th>BCN</th>
    <td><?php echo $birth; ?></td>
    <td></td>
</tr>

<tr>
    <th>Blood Group</th>
    <td class="warning"><?php echo $bloodgroup; ?></td>
    <td></td>
</tr>                
<tr>
    <th>Health Description</th>
    <td class="warning">
        <!-- edit fields -->
        <span id="hsds"><?php echo $hsd; ?></span>
        <div class="edit_field" id="field8">
            <input type="text" class="form-control" name="new_hsds" id="new_hsds" value="<?php echo $hsd; ?>" />
            <input type="submit" value="Update" class="btn btn-success" id="submit8"  onClick="callCrudAction('save_hsds','<?php echo $id; ?>')"/>
            <a href="#" class="edit btn btn-success">Cancel</a>
          </div>
        </div>
        <!--//edit fields-->
        
    </td>
    <td><a href="#field8" class="gradient-button edit"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a></td>
</tr>    

<tr>
    <th>Address</th>
    <td>
      <!-- edit fields -->
      <span id="addr"><?php echo $address; ?></span>
      <div class="edit_field" id="field9">
          <input type="text" class="form-control" name="new_addr" id="new_addr" value="<?php echo $address; ?>" />
          <input type="submit" value="Update" class="btn btn-success" id="submit9"  onClick="callCrudAction('save_addr','<?php echo $id; ?>')"/>
          <a href="#" class="edit btn btn-success">Cancel</a>
        </div>
      </div>
      <!--//edit fields-->
          
    </td>
    <td><a href="#field9" class="gradient-button edit"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a></td>
</tr> 

<tr>
    <th>Phone Number</th>
    <td>
      <!-- edit fields -->
      <span id="phno"><?php echo $phone; ?></span>
      <div class="edit_field" id="field10">
          <input type="text" class="form-control" name="new_phno" id="phone" value="<?php echo $phone; ?>" />
          <input type="submit" value="Update" class="btn btn-success" id="submit10"  onClick="callCrudAction('save_phno','<?php echo $id; ?>')"/>
          <a href="#" class="edit btn btn-success">Cancel</a>
          <br><span class="phnmsg hidden">Please Enter a Valid Phone No.</span>
        </div>
      </div>
      <!--//edit fields-->
          
    </td>
    <td><a href="#field10" class="gradient-button edit"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a></td>
</table>
</div>