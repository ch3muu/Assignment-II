<?php
session_start();
?>
<!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <title> Login Form </title>
    <link rel="stylesheet" href="style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400;500;700&family=Didact+Gothic&family=Edu+TAS+Beginner&family=Edu+VIC+WA+NT+Beginner:wght@400;500;700&family=Fredoka+One&display=swap" rel="stylesheet">
</head>
 <body>
   <div class="account-page">
    <div class="container">
        <div class="row">
            
                <div class="form-container">
                <?php if(isset($_SESSION['message'])) : ?>
                    <h5 class="alert alert-success"><?= $_SESSION['message']; ?></h5>
                <?php 
                    unset($_SESSION['message']);
                    endif; 
                ?>
                    <div class="form.btn">
                        <span><h1>Login</h1></span>
                    </div>
                    <form action="Autologin.php" method="post" id="Loginform">
                         <label for="User_Name"> Username: </label>
                        <input type= "text" id="User_Name" name="User_Name">
                        <label for="pass"> Enter password: </label>
                        <input type="Password" id="Password" name="Password">
                        <br>
                        <br>
                        <button type="submit" class="btn" name="submit">Login</button>
                        <a href="">Forgot password</a>
                    </form>


                </div>
            </div>
        </div>
    </div>
</div>


<script>
    var Loginform=document.getElementById("Loginform")

    value
</script>  


 </body>
 </html>