<html>
    <head>
        <title>Login</title>
    </head>
    <body>
    <center>
        <table height=720 width=1080>
            <tr height=70>
                <td >
                     <table width = "800">
                    <tr>
                        <td>
                            <img height="120" src="logo.png">
                        </td>
                        <td align="right">
                    <a href="publichome.php">Home</a>  <a href="login.php">| Login</a>   <a href="registration.php">| Registration</a>  
                    </td>    
                </tr>    
                </table>
                    
                </td>
            </tr>
            <tr>
                <td>      
                    <H2>LOGIN</H2>
                    
                <form method="POST" action="logincheck.php"  >
                            <fieldset>
                               
                             Username: <input type="text" name="username" value=""/> <br>
                              Password: <input type="password" name="password" value=""/> <br> 
                              <hr>
                              <input type="radio" name="rememberme" value=""/> Remember Me <br/>
                            <input type="submit" name="submit" value="Submit"/>
                            <a href="forgetpassword.php">Forgot Password?</a>  
            </fieldset>
        </form>
</td>
            </tr>

            <tr>
                <td align="center"> <a href="https://www.google.com"><img src="googlesignin.png" height ="50" width="300"></a></td>
            </tr>
            <tr>
                <td align="center"> <a href="https://www.facebook.com"><img src="fbsignin.png" height ="50" width="300"></a></td>
            </tr>

            <tr>
                <td align="center"><fieldset>
                    <legend>Help & Support</legend>
                    <a href="publichome.php">Contact Us</a>  <br>
                    <a href="publichome.php">Complain</a> <br>
                    <a href="publichome.php">FAQ</a> <br>
            </fieldset></td>
            </tr>

            
            <tr height =40>

                <td align="center">Copyright © 2023</td>
            </tr>
        </table>
    </center>
    </body>
</html>