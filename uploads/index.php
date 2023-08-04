<html>
    <head>
        <title>Online Voting system - Home</title>
        <link rel="stylesheet" href="css/stylesheet.css">
    </head>
    <body>
        
            <center>
            <div id="headerSection">
            <h1>Online Voting System</h1>  
            </div>
            <hr>

            <div id="loginSection">
                <h2>Login</h2>
                <form action="api/login.php" method="POST">
                    <input type="number" name="mob" placeholder="Enter mobile" required><br><br>
                    <input type="password" name="pass" placeholder="Enter password" required><br><br>
                    <select name="role" style="width: 15%; border: 2px solid black">
                        <option value="1">Voter</option>
                        <option value="2">Group</option>
                    </select><br><br>     
                    <input type="number" name="otp" placeholder="Enter OTP" required><br><br>        
                    <button id="loginbtn" type="submit">Login</button><br><br>     
                    New user? <a href="routes/register.php">Register here</a>
                </form>
            </div>

            </center> 
 
        </body>
</html>