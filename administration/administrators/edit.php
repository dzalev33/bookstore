



    <!-- Page content -->
    <div id="page-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                
                    
                     <a href="#" class="btn btn-success" id="menu-toggle">Menu</a>


                
                 <form class="form-horizontal"  name="myForm" action="?page=administrators&action=edit_exe" method="post" onsubmit="return validationAdmin()">
<fieldset>
    <?php
$sql="SELECT * FROM administrators WHERE admin_id=".$_GET['id'];

$result=$connection->query($sql);
while($row=$result->fetch_object()) {
    $user = $row->user_name;
    $position = $row->position;
    $pass = $row->password;
    $firsName = $row->first_name;
    $lastName = $row->last_name;
    $admin_id = $row->admin_id;
    ?>



<!-- Position-->
<div class="form-group">
  <label class="col-md-4 control-label" for="position">Position</label>
  <div class="col-md-4">
  <input  name="position" type="text"  value="<?php echo $position ?>" class="form-control input-md">
    
  </div>
    </div>
  
  <!--Username-->
  <div class="form-group">
  <label class="col-md-4 control-label" for="position">Username</label>
  <div class="col-md-4">
  <input  name="user_name" type="text"  value="<?php echo $user ?>" class="form-control input-md">
    

</div>
  </div>
<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="password">Password</label>
  <div class="col-md-4">

<?php
    if ($user != $_SESSION['user_name']) echo "<button  name=\"reset\" class=\"form-control input-md\">Reset</button>";
    if ($user == $_SESSION['user_name']) echo "<input  name=\"password\" type=\"password\"  value=\"\"  class=\"form-control input-md\" required=\"\">";
?>

    
  </div>
</div>



<!-- First Name  input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="first_name">First Name</label>
  <div class="col-md-4">
  <input  name="first_name" type="text"  value="<?= $firsName  ?>" class="form-control input-md" required="" >
    
  </div>
</div>

<!-- Last Name  input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="last_name">Last Name</label>
  <div class="col-md-4">
  <input type="hidden" name="id" value="<?php echo $admin_id ?>" >
  <input  name="last_name" type="text"  value="<?php echo $lastName ?>" class="form-control input-md" >
    
  </div>
</div>
    <?php
}
    ?>


<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="btn"></label>
  <div class="col-md-4">
        <button  name="btn"  type="submit" value="EDIT" class="btn btn-block btn-success">Edit</button>
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








