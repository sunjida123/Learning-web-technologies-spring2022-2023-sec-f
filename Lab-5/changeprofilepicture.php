<?php
session_start();
if(isset($_SESSION['flag'])){
    $_SESSION['pp']="profilepicture.png";
?>

<?php 
if(isset($_POST['submit']))
{
    //$file = $_FILES['file'];
    $filename = $_FILES['file']['name'];

   $tempname = $_FILES['file']['tmp_name'];
    
    move_uploaded_file($tempname,$filename);
    $_SESSION['pp']=$filename;
    //header('location: changeprofilepicture.php?success'); 
}
?>


<html>
    <head>
        <title>Change Profile Picture</title>
    </head>
    <body>
    <center>
        <table border ="1" height=400 width=800>
            <tr height=70>

                <td colspan="2"> 
                    <table width = "800">
                    <tr>
                        <td>
                           <h2>X_Company</h2>
                        </td>
                        <td align="right">
                        Logged in as <a href="viewprofile.php"> <?php echo $_SESSION['name'] ?></a> |
                                    <a href="logout.php">Logout</a>
                    </td>    
                </tr>    
                </table>
                </td>
            </tr>
            <tr>



                <td width="300">
                    <h3>    Account </h3>
                    <hr>
                    <ul>
                        <li> <a href="dashboard.php"> Dashboard</a></li>
                        <li> <a href="viewprofile.php"> View Profile</a></li>
                        <li> <a href="editprofile.php"> Edit Profile</a></li>
                        <li> <a href="changeprofilepicture.php"> Change Profile Picture</a></li>
                        <li> <a href="changepassword.php"> Change Password</a></li>
                        <li> <a href="logout.php"> Logout</a></li>
                    </ul>

                </td>

                <td>
                <form action="" method="POST" enctype="multipart/form-data">
                      <fieldset>
                        <legend>PROFILE PICTURE</legend>
                        <img height="250" width="250" src="<?php echo $_SESSION['pp'];?>"> <br>
                        <input type="file" name="file" value=""/> <br>
                        <hr>
                        <input type="submit" name="submit" value="Submit"/>
                            
                      </fieldset>
                </form>
                </td>


            </tr>
            <tr height ="40" >
                <td colspan="2" align="center">Copyright © 2017 </td>
            </tr>
        </table>
    </center>
    </body>
</html>

<?php
}else{
    header('location: login.php'); 
}
?>