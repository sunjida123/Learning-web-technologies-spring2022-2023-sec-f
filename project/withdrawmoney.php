<?php
session_start();

if(isset($_COOKIE['flag'])){
?>



<html>
    <head>
        <title>Withdraw Money</title>
    </head>
    <body>
    <center>
        <table  height=720 width=1080>
            <tr height=70>

                <td colspan="2"> 
                    <table width = "800">
                    <tr>
                        <td>
                            
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
                    

                     <?php
                        if (trim($_SESSION['role'])=="admin")
                    {
                        ?>
                         <li> <a href="appwallet.php">App Wallet</a></li>
                        <li> <a href="withdrawmoney.php">withdraw Money</a></li>
                        
                        <li> <a href="logout.php"> Logout</a></li> 
                    <?php
                    }
                    else if (trim($_SESSION['role'])=="vendor")
                    {
                        ?>

                        <li> <a href="appwallet.php">App Wallet</a></li>
                        <li> <a href="withdrawmoney.php">withdraw Money</a></li>
                        
                        <li> <a href="logout.php"> Logout</a></li>

                        <?php
                    }
                    else if (trim($_SESSION['role'])=="customer")
                    {
                        ?>
                         <li> <a href="appwallet.php">App Wallet</a></li>
                        
                        <li> <a href="restaurentbrowsing.php">Restaurent Browsing</a></li>
                        <li> <a href="orders.php">Orders</a></li>
                        <li> <a href="logout.php"> Logout</a></li>
                        <?php
                    }
                    else if (trim($_SESSION['role'])=="deliveryman")
                    {
                        ?>
                         <li> <a href="appwallet.php">App Wallet</a></li>
                        <li> <a href="withdrawmoney.php">withdraw Money</a></li>
                        
                        <li> <a href="logout.php"> Logout</a></li>
                        <?php
                    }

                    ?>
                    </ul>

                </td>




                <td>
                    <form action="POST" method="">
                    <h2>Balance : 155000 Taka</h2> <br>
                       <a href="withdrawmethod.php">Withdraw</a>
                       


                </td>













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