<?php




echo "



    <!-- Page content -->
    <div id=\"page-content-wrapper\">
        <div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                
                    
                     <a href=\"#\" class=\"btn btn-success\" id=\"menu-toggle\">Menu</a>

                   
                    

                
                
<form class=\"form-horizontal\"   action=\"?page=author_book&action=insert_exe\" method=\"post\">
<fieldset>



<!-- Text input-->
<div class=\"form-group\">
  <label class=\"col-md-4 control-label\" for=\"selectbasic\">Author</label>
  <div class=\"col-md-4\">
    <select name=\"author_id\" class=\"form-control\"> ";

$sql_author="SELECT * FROM author";
$result_author=$connection->query($sql_author);

while ($row_author=$result_author->fetch_object()){

    //get value from database table author
    $authorName=$row_author->firstname;
    $authorLastname=$row_author->lastname;
    $author_id=$row_author->author_id;

    echo "<option value=\"$author_id\">$authorName - $authorLastname</option>";

}//end while author
echo " 
    </select>
  </div>
</div>


    
    
    <div class=\"form-group\">
  <label class=\"col-md-4 control-label\" for=\"\">Book</label>
  <div class=\"col-md-4\">
    <select name=\"book_id\" class=\"form-control\">";

$sql_book="SELECT * FROM book";
$result_book=$connection->query($sql_book);

while ($row_book=$result_book->fetch_object()){


    //get value from database table book
    $BookTitle=$row_book->Title;
    $bookId=$row_book->book_id;

    echo "<option value=\"$bookId\">$BookTitle</option>";

}//end while book
echo "
</select>
    </select>
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






