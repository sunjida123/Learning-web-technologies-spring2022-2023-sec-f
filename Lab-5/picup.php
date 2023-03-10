<?php 
if(isset($_POST['submit']))
{
    //$file = $_FILES['file'];
    $filename = $_FILES['file']['name'];

   $tempname = $_FILES['file']['tmp_name'];
    
    move_uploaded_file($tempname,$filename);
    //header('location: changeprofilepicture.php?success'); 
}
?>


                        
<html>
    <body>
        
    <form action="" method="POST" enctype="multipart/form-data">
    <fieldset>


            <legend>PROFILE PICTURE</legend>
            
            <input type="file" name="file" value=""/> <br>
            
            <input type="submit" name="submit" value="submit"/>
    </fieldset>


    </form>
    </body>
</html>
