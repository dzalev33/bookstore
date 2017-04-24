<?php





// retrieve eventual CLI parameters
$cli = (isset($argc) && $argc > 1);
if ($cli) {
    if (isset($argv[1])) $_GET['file'] = $argv[1];
    if (isset($argv[2])) $_GET['dir'] = $argv[2];
    if (isset($argv[3])) $_GET['pics'] = $argv[3];
}



// set variables
$dir_dest = (isset($_GET['dir']) ? $_GET['dir'] : $settings['img_url']);
//$dir_dest = (isset($_GET['dir']) ? $_GET['dir'] : 'upload');
$dir_pics = (isset($_GET['pics']) ? $_GET['pics'] : $dir_dest);


// we have three forms on the test page, so we redirect accordingly
if ((isset($_POST['action']) ? $_POST['action'] : (isset($_GET['action']) ? $_GET['action'] : '')) == 'image') {

    // ---------- IMAGE UPLOAD ----------

    // we create an instance of the class, giving as argument the PHP object
    // corresponding to the file field from the form
    // All the uploads are accessible from the PHP object $_FILES
    $handle = new Upload($_FILES['my_field']);

    // then we check if the file has been uploaded properly
    // in its *temporary* location in the server (often, it is /tmp)
    if ($handle->uploaded) {

        $handle->Process($dir_dest);

        // we check if everything went OK
        if ($handle->processed) {
            // everything was fine !
            $info = getimagesize($handle->file_dst_pathname);
        }

        // we delete the temporary files
        $handle-> Clean();

    }

}



    // vnesuvanje vo baza
    $sql="INSERT INTO author (firstname, lastname, img_author)
    VALUES ('".$_POST['firstname']."','".$_POST['lastname']."','".$handle->file_dst_name."')";
	



//konekcija so baza
$connection->query($sql); 


//vrakanje na index strana za da ne se gledaat podatocite sto gi vnesuvame
header("Location:?page=author&message=insert&id=".$_POST['firstname']);exit();

?>
