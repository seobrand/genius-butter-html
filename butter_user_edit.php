<!DOCTYPE html>
<html>
<?php include("include/head.php"); ?>
<body>
<?php include("include/inner_header.php"); ?>
<!-- mid part is end here -->
<div class="container">
  <div class="col-md-12 panel panel-default margin-top" >
    <div class="col-md-12">
      <div class=" panel-body">
        <div class="pull-left">
          <label class="user-roll-lable-heading"> Genius Butter</label >
        </div>
        <div class="pull-right">
          <label class="user-roll-lable-heading home-icon padding-left-20px"> Welcome, Admin!</label >
        </div>
      </div>
    </div>
  </div>
</div>
<!-- login sections part is here -->
<div class="container">
  <div class="highlight col-lg-12">
    <!-- left part is start here -->
    <div class="col-md-6 pull-left">
      <div class="">
        <form>
          <fieldset>
          <legend class="text-danger font-class-open">Edit User</legend>
          <table class="table-responsive table-hover table-inner-form" >
            <tr>
              <td>Email Address:</td>
              <td class="padding-left-10px"><input type="text" class="text-box-form-inner" placeholder="rmcmillan@gmail.com"/></td>
            </tr>
            <tr>
              <td>First Name:</td>
              <td class="padding-left-10px"><input type="text" class="text-box-form-inner" placeholder="Richard"/></td>
            </tr>
            <tr>
              <td>Last Name:</td>
              <td class="padding-left-10px"><input type="text" class="text-box-form-inner" placeholder="McMillan"/>
              </td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td><textarea class="textarea-form-inner" placeholder="Comments go here" ></textarea></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td class="padding-left-10px"><button type="submit" class="btn color-red-btn pull-left padding-24px" >Submit</button></td>
            </tr>
          </table>
          </fieldset>
        </form>
      </div>
      <div class="clearfix"></div>
      <div class="panel-body">
        <table class="table-responsive table-hover  table-condensed table-striped" >
          <tr>
            <td class="user-color-2"><label class="user-roll-lable-heading text-info"> User Roles</label></td>
          </tr>
          <tr>
            <td class="user-color-1"><label class="user-roll-lable">Site Super Administrator</label></td>
          </tr>
          <tr>
            <td class="user-color-2"><label class="user-roll-lable">Genuius Butter Application User</label></td>
          </tr>
          <tr>
            <td class="user-color-1" ><label class="user-roll-lable">Contributing Developer</label></td>
          </tr>
          <tr>
            <td class="user-color-2"><label class="user-roll-lable-heading add_rules pull-left "> Add Roles: </label>
              <div class="select-box-div">
                <select class=" text-box-form-inner select-box">
                  <option>Select User Role</option>
                  <option>Admin user</option>
                  <option>Admin user</option>
                </select>
              </div>
              <div class="clearfix"></div>
              <div class="col-sm-1 user-role-btn-div">
                <button type="submit" class="btn color-red-btn padding-24px" >Assign</button>
              </div></td>
          </tr>
        </table>
      </div>
    </div>
    <div class="col-md-6 pull-right">
      <label class="text-danger pull-right" > <a href="" class="text-danger font-class-open font-class-size font-size">&laquo; Return to User Management</a> </label>
      <div class="clearfix"></div>
      <div class="left-inner-box">
        <table class="table-responsive table-inner-form">
          <tr>
            <td><label class="text-info user-roll-lable-heading pull-right">Created on:</label></td>
            <td class="text-left"><label class="user-roll-lable-heading">August 1, 2013 1:30am</label></td>
          </tr>
          <tr>
            <td><label class="text-info user-roll-lable-heading pull-right">Last Login:</label></td>
            <td class="text-left"><label class="user-roll-lable-heading ">August2, 2013 4:16pm</label></td>
          </tr>
          <tr>
            <td><label class="text-info user-roll-lable-heading pull-right">Email:</label></td>
            <td class="text-left"><label class="user-roll-lable-heading verified padding-left-20px">verified</label></td>
          </tr>
          <tr>
            <td><label class="text-info user-roll-lable-heading pull-right">Login Satus:</label></td>
            <td class="text-left"><label class="user-roll-lable-heading verified padding-left-20px"> Active</label></td>
          </tr>
          <tr>
            <td><label class="text-info user-roll-lable-heading pull-right">Last Lockout:</label></td>
            <td class="text-left"><label class="user-roll-lable-heading">N/A</label></td>
          </tr>
          <tr>
            <td></td>
            <td class="text-left"><a href="#" > <img src="images/email-varification.png" alt="email-varification" style=" border:0px" /></a></td>
          </tr>
          <tr>
            <td></td>
            <td class="text-left"><a href="#"> <img src="images/unlock.png" alt="email-varification" style="border:0px; " /></a></td>
          </tr>
          <tr>
            <td><label class="text-info user-roll-lable-heading pull-right">Password:</label></td>
            <td class="password_padding"><input type="password" class="text-box-form-inner" placeholder="****"/></td>
          </tr>
          <tr>
            <td></td>
            <td class="text-left"><button type="submit" class="btn color-red-btn padding-24px" >Reset Password</button></td>
          </tr>
        </table>
      </div>
    </div>
  </div>
  <!-- left is end here -->
</div>
<!-- mid part is end here -->
<?php include("include/inner_footer.php"); ?>
<?php include("include/all_js.php"); ?>
</body>
</html>
