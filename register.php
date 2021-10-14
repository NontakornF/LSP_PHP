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
            <h2>Register</h2>
    </div>

    <form action="register_db.php" method="post">
        <div class="input-group">
            <label for="username">Username</label>
            <input type="username"name="username">
        </div>
        <div class="input-group">
            <label for="password_1">Password</label>
            <input type="password"name="password_1">
        </div>
        <div class="input-group">
            <label for="password_2">Confirm Password</label>
            <input type="password"name="password_2">
        </div>
        <div class="input-group">
            <label for="firstname">Firstname</label>
            <input type="firstname"name="f_name">
        </div>
        <div class="input-group">
            <label for="lastname">Lastname</label>
            <input type="lastname"name="l_name">
        </div>
        <div class="input-group">
            <input type="hidden" name="cp_id" value="1">
            <input type="hidden" name="status" id="" value="N">
            <input type="hidden" name="userGroup" value="Security">
            <button type="submit" name="reg_user" class="btn">Register</button>
        </div>
        <p>Already a mamber ? <a href="index.php">Sign in</a></p>
    </form>

    </body>
    </html>