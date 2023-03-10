<?php
session_start();
if(isset($_SESSION['flag'])){
?>



<html>
    <head>
        <title>Dashboard</title>
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
                    <h3>    Account</h3>
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

                        <h2>Welcome <?php echo $_SESSION['name'] ?></h2>


                </td>


            </tr>
            <tr height ="40" >
                <td colspan="2" align="center">Copyright © 2017</td>
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
