<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>You Can</title>
    <link rel="stylesheet" href="css/st.css">
    <body>  
    <div class="box">
        <h1>REGISTRATION</h1>
        <marquee>Please fill the form to create an account</marquee><br><br>
            <form method="post" action="signup.php" >
                    <input type="text" required placeholder="Your First name" name="name" id="name"><br><br>
                        <input type="text" required placeholder="Your Phone number" name="phone" id="phone" ><br><br>
                        <input type="email"required placeholder="Your Email" name="email" id="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"><br><br>
                        <input type="password"required placeholder="Create Password" name="pass" id="pass" maxlength="8">
                        <br><br>
                        <button type="submit" class="button" name="btn" id="btn">Submit</button>
                        <p>Already have an account? <a href="loginp.php">Login</a>.</p><i class="bi-alarm"></i>
                        <div id="msg"></div>
            </form>
    </div>
    </body>
<html>