<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>You Can</title>
    <link rel="stylesheet" href="css/st.css">
    <script type="text/javascript" src="back.js"></script>
</head>
<body>
    <div class="box box1">
        <h1>LOGIN</h1>
        <form method="post" action="login.php">
            <input type="email" placeholder="Enter Email" name="email" id="email" required><br><br>
            <input type="password" placeholder="Enter Password" name="psw" id="psw" maxlength="8" required><br><br>
            <input type="submit" class="button" name="logbtn" value="Login"><br>
            <p>New User? <a href="index.php">Sign Up</a>.</p>   

        </form>
    </div>
</body>
</html>