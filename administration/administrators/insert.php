
<?php

$message_position="";
$message_username="";
$message_pass="";
$message_firstName="";
$message_LastName="";

if(isset($_GET['message_position']) && $_GET['message_position']=='short_position')$message_position=" insert minimum  3 characters";

if(isset($_GET['message_username']) && $_GET['message_username']=='short_username')$message_username=" Vnesete username so najmalce 3";

if(isset($_GET['message_error']) && $_GET['message_error']=='short_password')$message_pass=" Vnesete password so najmalce 3";

if(isset($_GET['message_error']) && $_GET['message_error']=='short_first')$message_firstName=" Vnesete first Name so najmalce 3";

if(isset($_GET['message_error']) && $_GET['message_error']=='short_last')$message_LastName=" Vnesete Last name so najmalce 3";




?>



<!-- Page content -->
<div id="page-content-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">


                <a href="#" class="btn btn-success" id="menu-toggle">Menu</a>




                <form class="form-horizontal" name="myForm" action="?page=administrators&action=insert_exe" method="post">
                    <fieldset>



                        <!-- Position-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="position">Position</label>
                            <div class="col-md-4">
                                <input  name="position" type="text"  value="" class="form-control input-md" placeholder="position">
                                <span class="error"><?= $message_position; ?></span>

                            </div>
                        </div>

                        <!--Username-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="position">Username</label>
                            <div class="col-md-4">
                                <input  name="user_name" type="text"  value="" class="form-control input-md" placeholder="username">
                                <span class="error"><?= $message_username; ?></span>


                            </div>
                        </div>
                        <!-- Password input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="password">Password</label>
                            <div class="col-md-4">
                                <input  name="password" type="password"  value=""  class="form-control input-md" required="" placeholder="pass">
                                <span class="error"><?= $message_pass; ?></span>
                            </div>
                        </div>



                        <!-- First Name  input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="first_name">First Name</label>
                            <div class="col-md-4">
                                <input  name="first_name" type="text"  value="" class="form-control input-md" placeholder="firstName" >
                                <span class="error"><?= $message_firstName; ?></span>



                            </div>
                        </div>

                        <!-- Last Name  input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="last_name">Last Name</label>
                            <div class="col-md-4">
                                <input  name="last_name" type="text"  value="" class="form-control input-md" placeholder="last name">
                                <span class="error"><?= $message_LastName; ?></span>

                            </div>
                        </div>

                        <!-- Button -->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="btn"></label>
                            <div class="col-md-4">
                                <button  name="btn"  type="submit" value="save" class="btn btn-block btn-success">Save</button>
                            </div>
                        </div>

                    </fieldset>
                </form>




            </div>
        </div>
    </div>
</div>
</div>
</div>
<!--END PAGE -->


