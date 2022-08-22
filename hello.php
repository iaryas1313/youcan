<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>You Can</title>
    <link rel="stylesheet" href="css/st.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="back.js"></script>
</head>
<body>
        <div class="box4">
            <h2 class="right"><a href="logout.php"> Logout<span class="glyphicon glyphicon-log-out"></span></a></p></h2>
        </div><br><br>
        <div>
            <h1 style="text-align:center;">Hello <?php echo $_SESSION["fname"];?>! </h1>
            <img src="img/pro.svg" alt="pro" style="width:10%; margin-left:45%">
            <table class="container mt-5 " style="width:50%;border:solid 5px; border-color:black;text-align:center;height:300px;font-size:larger;background-color:white; ">   

                    <tr><td style="border: solid 2px black;">Phone number</td>
                        <td style="border: solid 2px black;">
                         <?php echo $_SESSION["phone"];?>
                    </td>
        
                </tr>
                    <tr> <td style="border: solid 2px black;">Email Id</td>
                         <td style="border: solid 2px black;">
                        <?php echo $_SESSION["email"];?>
                    </td></tr>
                    <tr style="border: solid 2px black;"><td style="border: solid 2px black;">Password</td>
                        <td>
                        <?php echo $_SESSION["password"];?>
                    </td></tr>
            
        </table>
        </div>
                   
              
</body>
</html>