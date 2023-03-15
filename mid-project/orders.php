<?php
session_start();
if(isset($_SESSION['flag'])){
?>



<html>
    <head>
        <title>Menu</title>
    </head>
    <body>
    <center>
        <table  height=720 width=1080>
            <tr height=70>

                <td colspan="2"> 
                    <table width = "800">
                    <tr>
                        <td>
                            <img height="120" src="logo.png">
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
                    
                <ul>
                    <li> <a href="restaurentbrowsing.php">Menu</a></li>
                    <li> <a href="appwallet.php">Wallet</a></li>
                    <li> <a href="orders.php">Orders</a></li>
                    <li> <a href="withdrawmoney.php">Withdraw Money</a></li>
                    </ul>

                </td>




                <td>
                  
                     <fieldset>

                     <legend>ORDERS</legend>
                     <table  width="720">
                       
                     <tr>
                        <td> 1. <br> <img src="kacchi.png" height="100" width="150" > <br> Mutton Kacchi </td>
                        <td > Address : 
                        Rampura, Haji Mor
                    </td>
                    <td><a href="cancelorder.php">Cancel Order</a></td>
                     </tr>
                        
                     </table>
                     </fieldset>
                    
                       


                </td>













            </tr>


            <tr>
                <td colspan="2" align="center"><fieldset>
                    <legend>Help & Support</legend>
                    <a href="">Contact Us</a>  <br>
                    <a href="">Complain</a> <br>
                    <a href="">FAQ</a> <br>
            </fieldset></td>
            </tr>



            <tr height ="40" >
                <td colspan="2" align="center">Copyright © 2023</td>
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