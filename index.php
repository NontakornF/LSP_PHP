<?php include('server.php'); ?>
<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Register page</title>

        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        
        <div class="header">
            <h2>Login</h2>
    </div>

    <form action="cklogin.php" method="post">
        
        <div class="input-group">
            <label for="username">Username</label>
            <input type="text"name="username" required>
        </div>
        <div class="input-group">
            <label for="password_1">Password</label>
            <input type="password"name="password" required>
        </div>
        <div class="input-group">
            <button type="submin" name="login_user" class="btn">Login</button>
        </div>
        <p>Not yet a member ? <a href="register.php">Sign Up</a></p>
    </form>


  
    </body>
    </html>





    
      
   