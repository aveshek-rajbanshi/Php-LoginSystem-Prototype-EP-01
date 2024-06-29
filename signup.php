<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign-Up</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
   
<?php require '_nav.php' ?>
   <div id="header">Sign Up Form</div>
    <form action="/loginSystem/signup.php" method="POST">
        <div class="labelDataBox">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" autocomplete="off">
        </div>

        <div class="labelDataBox">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" autocomplete="off">
        </div>

        <div class="labelDataBox">
            <label for="cpassword">Comform Password</label>
            <input type="password" id="cpassword" name="cpassword" autocomplete="off">
        </div>
        <button id="signupBtn" type="submit" false>Submit</button>
    </form>
</body>
</html>