<?php



echo "
<!DOCTYPE html>
<html lang=\"en\">
<head>
<title>".$settings['title']."</title>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <link rel=\"stylesheet\" href=\"http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css\">
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js\"></script>
    <script src=\"http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js\"></script>
    <link href=\"".$settings['website_url']."administration/css/style.css\" rel=\"stylesheet\" type=\"text/css\">
                    <!--sidebar menu -->
    <link rel=\"stylesheet\" href=\"../css/sidebar.css\">
</head>
<body>

<div id=\"wrapper\">

    <!-- Sidebar -->
    <div id=\"sidebar-wrapper\">

        <ul class=\"sidebar-nav\">";
//menu list connect
echo "
       <!--insert administrators-->
           
           
        </ul>
    </div>";

echo "



    <!-- Page content -->
    <div id=\"page-content-wrapper\">
        <div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                
                    
                     <a href=\"#\" class=\"btn btn-success\" id=\"menu-toggle\">Menu</a>

                   
                    

                
                
<form class=\"form-horizontal\" name=\"myForm\" action=\"?page=members&action=edit_exe\" method=\"post\" onsubmit=\"return validationMember()\">
<fieldset>";
$sql="SELECT * FROM members
WHERE members.member_id=".$_GET['id'];
$result=$connection->query($sql);


while ($row=$result->fetch_object()) {
	$memberID = $row->member_id;
	$memberName = $row->member_firstname;
	$memberLastName = $row->member_lastname;
	$memberemail = $row->email;
	$memberTell_number = $row->tell_number;
	$memberDOB = $row->DOB;
	$memberReg_Date = $row->Registration_Date;
	$memberZipcode = $row->ZipCode;
	$memberCountry = $row->Country;
	$memberCity = $row->City;
	$memberStreet = $row->Street;

	echo "



<!-- Text input-->
<div class=\"form-group\">
  <label class=\"col-md-4 control-label\" for=\"\"> Member name</label>  
  <div class=\"col-md-4\">
  <input id=\"\" name=\"member_firstname\" value=\"$memberName\" type=\"text\" placeholder=\"\" class=\"form-control input-md\">
    
  </div>
</div>

<!-- Text input-->
<div class=\"form-group\">
  <label class=\"col-md-4 control-label\" for=\"\">Member Surname</label>  
  <div class=\"col-md-4\">
  <input id=\"\" name=\"member_lastname\" value=\"$memberLastName\" type=\"text\" placeholder=\"\" class=\"form-control input-md\">
    
  </div>
</div>

<!-- Text input-->
<div class=\"form-group\">
  <label class=\"col-md-4 control-label\" for=\"\">Email</label>  
  <div class=\"col-md-4\">
  <input id=\"\" name=\"email\" type=\"text\" placeholder=\"\" value=\"$memberemail\" class=\"form-control input-md\">
    
  </div>
</div>

<!-- Text input-->
<div class=\"form-group\">
  <label class=\"col-md-4 control-label\" for=\"\">tell number</label>  
  <div class=\"col-md-4\">
  <input id=\"\" name=\"tell_number\" type=\"text\" value=\"$memberTell_number\" placeholder=\"\" class=\"form-control input-md\">
    
  </div>
</div>

<!-- Text input-->
<div class=\"form-group\">
  <label class=\"col-md-4 control-label\" for=\"\">Date of Birth</label>  
  <div class=\"col-md-4\">
  <input id=\"\" name=\"DOB\" type=\"text\" placeholder=\"\" value=\"$memberDOB\" class=\"form-control input-md\">
    
  </div>
</div>

<!-- Text input-->
<div class=\"form-group\">
  <label class=\"col-md-4 control-label\" for=\"\">Registration_Date</label>  
  <div class=\"col-md-4\">
  <input id=\"\" name=\"Registration_Date\" type=\"text\" placeholder=\"\" value=\"$memberReg_Date\" class=\"form-control input-md\">
    
  </div>
</div>

<!-- Text input-->
<div class=\"form-group\">
  <label class=\"col-md-4 control-label\" for=\"\">ZipCode</label>  
  <div class=\"col-md-4\">
  <input id=\"\" name=\"ZipCode\" type=\"text\" placeholder=\"\"  value=\"$memberZipcode\"  class=\"form-control input-md\">
    
  </div>
</div>

<!-- Text input-->
<div class=\"form-group\">
  <label class=\"col-md-4 control-label\" for=\"\">Country</label>  
  <div class=\"col-md-4\">
  <input id=\"\" name=\"Country\" type=\"text\" placeholder=\"\" value=\"$memberCountry\" class=\"form-control input-md\">
    
  </div>
</div>

<!-- Text input-->
<div class=\"form-group\">
  <label class=\"col-md-4 control-label\" for=\"\">City</label>  
  <div class=\"col-md-4\">
  <input id=\"\" name=\"City\" type=\"text\" value=\"$memberCity\" placeholder=\"\" class=\"form-control input-md\">
    
  </div>
</div>

<!-- Text input-->
<div class=\"form-group\">
  <label class=\"col-md-4 control-label\" for=\"\">Street</label>  
  <div class=\"col-md-4\">
  <input type=\"hidden\" name=\"id\" value=\"$memberID\" />
  <input id=\"\" name=\"Street\" type=\"text\" value=\"$memberStreet\" placeholder=\"\" class=\"form-control input-md\">
    
  </div>
</div>
";
}
echo "




<!-- Button -->
<div class=\"form-group\">
  <label class=\"col-md-4 control-label\" for=\"btn\"></label>
  <div class=\"col-md-4\">
    <button  name=\"btn\"  type=\"submit\"value=\"save\" class=\"btn btn-block btn-success\">Save</button>
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

<!-- Menu toggle script -->
<script>
    $(\"#menu-toggle\").click( function (e){
        e.preventDefault();
        $(\"#wrapper\").toggleClass(\"menuDisplayed\");
    });
</script>

</body>
<script src=\"".$settings['website_url']."administration/js/validationMember.js\"></script>

</html>






";
?>






