<?php 
    session_start();
?>
<html>
    <head>
        <title>Login</title>
    </head>
    <body>
    <center>
        <table height="600" width="700">
            <tr>
                <td>
                <fieldset>
                        <legend><h2>Login</h2></legend>
                    
                <form method="POST" action="http://localhost/mid%20lab%20exam/login%20check.php"> 
                              Username: <input type="text" name="username" value=""/> <br>
                              Password: <input type="password" name="password" value=""/> <br> 
                              <hr>
                              
                            <input type="submit" name="submit" value="Submit"/>

                            <a href="http://localhost/mid%20lab%20exam/registration.php">Registration</a>
                </form>
                </fieldset>
        </table>
    </center>
    </body>
</html>