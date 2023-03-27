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
                    
                <form method="POST" action="login check.php"> 
                              Username: <input type="text" name="username" value=""/> <br>
                              Password: <input type="password" name="password" value=""/> <br> 
                              <hr>
                              
                            <input type="submit" name="submit" value="Submit"/>

                            <a href="registration.php">Registration</a>
                </form>
                </fieldset>
        </table>
    </center>
    </body>
</html>