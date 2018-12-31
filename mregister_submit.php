<?php include 'topbar.php'; ?>
<?php echo $msg; ?>

<script src="js/jquery.validate.js"></script>
<script src="js/form-validation.js"></script>

<div class="page-header" style="margin-top: 65px;">
    <h3>Member/Donor Registration Form</h3>
</div>

<div class="col-sm-12">
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data" name="registration">
    <fieldset class="col-sm-6">

<style>
.error, .unmsg, .fnmsg, .fsnmsg, .msnmsg, .snmsg, .prnmsg, .nidmsg, .bcnmsg, .phnmsg, .cnnmsg, .cnrmsg, .cnpmsg {
    color: red;
}
.hidden {
     visibility:hidden;
}
</style>
        <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
            <label for="username" class="col-md-4 control-label">Username: <span style="color: red;">*</span></label>
            <div class="col-md-8">
                <input type="text" class="form-control" name="username" id="username" value="<?php echo $username; ?>">

                <span class="help-block">
                    <span class="unmsg hidden">Please Enter a Valid Username</span>
                    <strong><?php echo $username_err; ?></strong>
                </span>
            </div>
        </div>                            

        <div class="form-group">
            <label for="fullname" class="col-md-4 control-label">Full Name: <span style="color: red;">*</span></label>
            <div class="col-md-8">
                <input type="text" class="form-control" name="fullname" id="fullname">

                <span class="help-block">
                    <span class="fnmsg hidden">Please Enter a Valid Name</span>
                    <strong><?php echo $fullname_err; ?></strong>
                </span>
            </div>
        </div>   

        <div class="form-group">
            <label for="fathersname" class="col-md-4 control-label">Father's Name:</label>
            <div class="col-md-8">
                <input type="text" class="form-control" name="fathersname" id="fathersname">

                <span class="help-block">
                    <span class="fsnmsg hidden">Please Enter a Valid Name</span>
                    <strong><?php echo ""; ?></strong>
                </span>                
            </div>
        </div>    

        <div class="form-group">
            <label for="mothersname" class="col-md-4 control-label">Mother's Name:</label>
            <div class="col-md-8">
                <input type="text" class="form-control" name="mothersname">

                <span class="help-block">
                    <span class="msnmsg hidden">Please Enter a Valid Name</span>
                    <strong><?php echo ""; ?></strong>
                </span>
            </div>
        </div>

        <div class="form-group">
            <label for="gender" class="col-md-4 control-label">Gender: <span style="color: red;">*</span></label>
            <div class="col-md-8">
                <select name="gender" class="form-control">
                    <option value="">Select Gender</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>

                <span class="help-block">
                    <strong><?php echo $gender_err; ?></strong>
                </span>
            </div>
        </div>  

        <div class="form-group">
            <label for="marital" class="col-md-4 control-label">Marital Status: <span style="color: red;">*</span></label>
            <div class="col-md-8">
                <select name="marital" class="form-control" id="mar">
                    <option value="">Select</option>
                    <option value="married">Married</option>
                    <option value="notmarried">Not Married</option>
                </select>

                <span class="help-block">
                    <strong><?php echo $marital_err; ?></strong>
                </span>
            </div>
        </div> 

        <div class="form-group spouse">
            <label for="spousename" class="col-md-4 control-label ">Spouse Name:</label>
            <div class="col-md-8">
                <input type="text" class="form-control" name="spousename" id="spousename" value="">

                <span class="help-block">
                    <span class="snmsg hidden">Please Enter a Valid Name</span>
                    <strong><?php echo ""; ?></strong>
                </span>
            </div>
        </div>

        <div class="form-group form-inline">
            <label for="bday" class="col-md-4 control-label">Birthday: <span style="color: red;">*</span></label>
            <div class="col-md-8">

                <select name="year" class="form-control">
                <?php 
                echo "<option value=''>Year</option>"; 
                for($i = 2007; $i >= date('Y', strtotime('-70 years')); $i--){
                    echo "<option value='$i'>$i</option>";
                } 

                ?>
                </select>                            

                <select name="month" class="form-control">
                <?php 
                echo "<option value=''>Month</option>"; 
                for($i = 1; $i <= 12; $i++){
                    $i = str_pad($i, 2, 0, STR_PAD_LEFT);
                    echo "<option value='$i'>$i</option>";
                }
                ?>
                </select>

                <select name="day" class="form-control">
                <?php 
                echo "<option value=''>Day</option>"; 
                for($i = 1; $i <= 31; $i++){
                    $i = str_pad($i, 2, 0, STR_PAD_LEFT);
                    echo "<option value='$i'>$i</option>";
                }
                ?>
                </select>

                <span class="help-block">
                    <strong><?php echo $bday_err; ?></strong>
                </span>
            </div>
        </div>  

        <div class="form-group ">
            <label for="profession " class="col-md-4 control-label">Profession: <span style="color: red;">*</span></label>
            <div class="col-md-8">
                <input type="text" class="form-control" name="profession" id="profession">

                <span class="help-block">
                    <span class="prnmsg hidden">Please Enter a Valid Profession</span>
                    <strong><?php echo $profession_err; ?></strong>
                </span>
            </div>
        </div>

    </fieldset>

    <fieldset class="col-sm-6">

        <div class="form-group">
            <label for="bloodgroup" class="col-md-4 control-label">Blood Group: <span style="color: red;">*</span></label>
            <div class="col-md-8">
                <select name="bloodgroup" class="form-control">
                    <option value="">Select Blood Group</option>
                    <option value="A+">A+</option>
                    <option value="B+">B+</option>
                    <option value="O+">O+</option>
                    <option value="AB+">AB+</option>
                    <option value="A-">A-</option>
                    <option value="B-">B-</option>
                    <option value="O-">O-</option>
                    <option value="AB-">AB-</option>
                </select>

                <span class="help-block">
                    <strong><?php echo $bloodgroup_err; ?></strong>
                </span>
            </div>
        </div>

        <div class="form-group">
            <label for="hsd" class="col-md-4 control-label">Healthy/Sick Description: <span style="color: red;">*</span></label>
            <div class="col-md-8">
                <textarea class="form-control" name="hsd" cols="30" rows="3"></textarea>

                <span class="help-block">
                    <strong><?php echo $hsd_err; ?></strong>
                </span>
            </div>
        </div>  

        <div class="form-group form-inline">
            <label for="pde" class="col-md-8 control-label">Previously Donated Blood Ever? <span style="color: red;">*</span></label>
            <div class="col-md-4">

                <label><input type="radio" class="form-control" name="pde" value="yes">Yes</label>
                <label><input type="radio" class="form-control" name="pde" value="no" checked>No</label>

                <span class="help-block">
                    <strong><?php echo ""; ?></strong>
                </span>
            </div>
        </div>

        <div class="form-group form-inline">
            <label for="nidbc" class="col-md-8 control-label">NID or Birth Certificate: <span style="color: red;">*</span></label>
            <div class="col-md-4">
                <label><input type="radio" class="form-control ndbc" name="nidbc" value="nid">NID</label>
                <label><input type="radio" class="form-control ndbc" name="nidbc" value="bcn">BCN</label>

                <span class="help-block">
                    <strong><?php echo $nidbc_err; ?></strong>
                </span>
            </div>
        </div>

        <div class="form-group nationalr">
            <label for="national" class="col-md-4 control-label">NID:</label>
            <div class="col-md-8">
                <input type="text" class="form-control" name="national" id="national">

                <span class="help-block">
                    <span class="nidmsg hidden">NID either have 13 or 10 number.</span>
                    <strong><?php echo ""; ?></strong>
                </span>
            </div>
        </div>   

        <div class="form-group birthr">
            <label for="birth" class="col-md-4 control-label">BCN:</label>
            <div class="col-md-8">
                <input type="text" class="form-control" name="birth" id="birth">

                <span class="help-block">
                    <span class="bcnmsg hidden">Please Enter a Valid Birth Certificate No.</span>
                    <strong><?php echo ""; ?></strong>
                </span>
            </div>
        </div>            

        <div class="form-group">
            <label for="address" class="col-md-4 control-label">Address: <span style="color: red;">*</span></label>
            <div class="col-md-8">
                <textarea class="form-control" name="address" cols="30" rows="3"></textarea>

                <span class="help-block">
                    <strong><?php echo $address_err; ?></strong>
                </span>
            </div>
        </div>   

        <div class="form-group">
            <label for="phone" class="col-md-4 control-label">Phone: <span style="color: red;">*</span></label>
            <div class="col-md-8">
                <input type="text" class="form-control" name="phone" id="phone">

                <span class="help-block">
                    <span class="phnmsg hidden">Please Enter a Valid Phone No.</span>
                    <strong><?php echo $phone_err; ?></strong>
                </span>
            </div>
        </div>   

    </fieldset>

    <style>th {text-align: center; } </style>
        <div>
            <div class="col-md-2">
                <label class="control-label">Add Contact: <span style="color: red;">*</span></label>
                <!-- <a href="#" class="btn btn-info add"></a> -->
            </div>
            <div class="col-md-10">
                <table class="table cnttable">
                    <tr>
                        <th>Name</th>
                        <th>Relation</th>
                        <th>Contact Number</th>
                    </tr>
                    <tr>
                        <td><input type="text" class="form-control" name="cnt1" id="cnt1"></td>
                        <td><input type="text" class="form-control" name="cnt1r" id="cnt1r"></td>
                        <td><input type="text" class="form-control" name="cnt1p" id="cnt1p"></td>
                    </tr>
                    <tr>
                        <td><span class="cnnmsg hidden">Please Enter a Valid Name</span></td>
                        <td><span class="cnrmsg hidden">Please Enter Valid Character</span></td>
                        <td><span class="cnpmsg hidden">Please Enter a Valid Phone No.</span></td>
                    </tr>
                </table>
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-12">
                <button type="submit" name="confirm" class="btn btn-default">Submit</button>
            </div>
        </div>
</form>            