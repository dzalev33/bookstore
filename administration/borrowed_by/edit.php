<?php



echo "



    <!-- Page content -->
    <div id=\"page-content-wrapper\">
        <div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                
                    
                     <a href=\"#\" class=\"btn btn-success\" id=\"menu-toggle\">Menu</a>

                   
                    

                
                
<form class=\"form-horizontal\" name=\"myForm\" action=\"?page=borrowed_by&action=edit_exe\" method=\"post\">
<fieldset>";



$sql="SELECT * FROM borrowed_by
              				 INNER JOIN book ON book.`book_id` = borrowed_by.`book_id` 
												INNER JOIN members ON members.`member_id` = borrowed_by.`member_id`
            
                                                             WHERE borrowed_by.borrowed_by_id=".$_GET['id'];


$result=$connection->query($sql);

while ($row=$result->fetch_object()){


$members_ID=$row->member_id;
$dueDate=$row->Due_Date;
$returnDate=$row->Return_Date;
$memberName=$row->member_firstname;
$memberLastName=$row->member_lastname;
$BookTitle=$row->Title;
$borrowed_by_id=$row->borrowed_by_id;
$bookID=$row->book_id;

echo "



<!-- Select Basic -->
<div class=\"form-group\">
  <label class=\"col-md-4 control-label\" for=\"\">Member</label>
  <div class=\"col-md-4\">
    <select id=\"\" name=\"member_id\" class=\"form-control\">";
$sql_member="SELECT * FROM members";
$result_member=$connection->query($sql_member);

while($row_member=$result_member->fetch_object()){

    $selected="";
    $memberID=$row_member->member_id;
    $Name=$row_member->member_firstname;
    $LastName=$row_member->member_lastname;

    if ($memberID==$members_ID){$selected="selected";}
    if ($memberID!=$members_ID){$selected="";}

    echo "<option value=\"$memberID\" $selected>$Name $LastName </<option>";


} //End while for members




echo "	
    
    </select>
  </div>
</div>

<!-- Select Basic -->
<div class=\"form-group\">
  <label class=\"col-md-4 control-label\" for=\"\">Book</label>
  <div class=\"col-md-4\">
    <select id=\"\" name=\"book_id\" class=\"form-control\">";

//databese book connection

$sql_book="SELECT * FROM book";
$result_book=$connection->query($sql_book);

while ($row_book=$result_book->fetch_object()){


    $selected_book="";

    $bookID=$row_book->book_id;
    $bookTitle=$row_book->Title;

    if ($bookID==$bookID){$selected_book="selected";}
    if ($bookID!=$bookID){$selected_book="";}


    echo "<option value=\" $bookID\" $selected_book > $bookTitle</option> ";


}}

echo "
    </select>
  </div>
</div>

<!-- Text input-->
<div class=\"form-group\">
  <label class=\"col-md-4 control-label\" for=\"\">Due Date</label>  
  <div class=\"col-md-4\">
  <input id=\"\" name=\"Due_Date\" value=\"$dueDate\" type=\"text\" placeholder=\"\" class=\"form-control input-md\">
    
  </div>
</div>

<!-- Text input-->
<div class=\"form-group\">
  <label class=\"col-md-4 control-label\" for=\"textinpu\">Return Date</label>  
  <div class=\"col-md-4\">
                                      <input type=\"hidden\" name=\"id\" value=\"$borrowed_by_id\" />

  <input id=\"textinpu\" name=\"Return_Date\" value=\"$returnDate\" type=\"text\" placeholder=\"\" class=\"form-control input-md\">
    
  </div>
</div>



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



";
?>






