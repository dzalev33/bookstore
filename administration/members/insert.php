<?php
//$firstName="";
//$memberLastName="";
//    $memberEmail="";
//    $memberDOB="";
//    $memberTellNumber="";
//    $memberRegDate="";
//    $memberZipCode="";
//    $memberCountry="";
//    $memberCity="";
//        $memberstreet="";

$firstName='member_firstname';
$memberLastName='member_lastname';
$memberEmail='email';
$memberTellNumber='tell_number';
$memberDOB='DOB';
$memberRegDate='Registration_Date';
$memberZipCode='ZipCode';
$memberCountry='Country';
$memberCity='City';
$memberstreet='Street';

$oblectEdit= new Database();
$table_name="members";
$column_name=" `member_firstname`, `member_lastname`, `email`, `tell_number`, `DOB`, `Registration_Date`, `ZipCode`, `Country`, `City`, `Street` ";
$column_value=" '".$firstName."','".$memberLastName."','".$memberEmail."','".$memberTellNumber."','".$memberDOB."','".$memberRegDate."','".$memberZipCode."','".$memberCountry."','".$memberCity."','".$memberstreet."' ";

$oblectEdit->insert($table_name, $column_name, $column_value);

?>


    <!-- Page content -->
    <div id="page-content-wrapper">
        <div class="container-fluid">
            <div class="ro">
                <div class="col-lg-12">
                
                    
                     <a href="#" class="btn btn-success" id="menu-toggle">Menu</a>

                   
                    

                
                
<form class="form-horizontal" name="myForm" action="?page=members&action=insert" method="post"">
<fieldset>



<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for=""> Member name</label>
  <div class="col-md-4">
  <input id="" name="member_firstname" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="">Member Surname</label>
  <div class="col-md-4">
  <input id="" name="member_lastname" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="">Email</label>
  <div class="col-md-4">
  <input id="" name="email" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="">tell number</label>
  <div class="col-md-4">
  <input id="" name="tell_number" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="">Date of Birth</label>
  <div class="col-md-4">
  <input id="" name="DOB" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="">Registration_Date</label>
  <div class="col-md-4">
  <input id="" name="Registration_Date" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="">ZipCode</label>
  <div class="col-md-4">
  <input id="" name="ZipCode" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="">Country</label>
  <div class="col-md-4">
  <input id="" name="Country" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="">City</label>
  <div class="col-md-4">
  <input id="" name="City" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="">Street</label>
  <div class="col-md-4">
  <input id="" name="Street" type="text" placeholder="" class="form-control input-md">
    
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






