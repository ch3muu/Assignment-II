<?php
 session_start();
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <title> Registration </title>
    <link rel="stylesheet" href="style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400;500;700&family=Didact+Gothic&family=Edu+TAS+Beginner&family=Edu+VIC+WA+NT+Beginner:wght@400;500;700&family=Fredoka+One&display=swap" rel="stylesheet">
</head>
 <body>
    <div class="header">
    <div class="container">
      <?php if(isset($_SESSION['message'])) : ?>
                    <h5 class="alert alert-success"><?= $_SESSION['message']; ?></h5>
                <?php 
                    unset($_SESSION['message']);
                    endif; 
                ?>
<div class="form-container">
                    <div class="form.btn">
                        <span>Kindly fill in your details below</span>
                    </div>
   
                    <form action="ProcessMethods.php" method="post" id="UserDetails">
                         <label for="userId"> ID : </label>
                        <input type= "text" id="userId" name="userId">
                        <br>
                        <br>
                        <br>
                        <label for="Full_Name"> Enter your full name: </label>
                        <input type="text" id="Full_Name" name="Full_Name">
                        <br>
                        <br>
                        <br>
                        <label for="email"> Enter your email: </label>
                        <input type="email" id="email" name="email">
                                                <br>
                        <br>
                        <br>
                        <label for="phone_Number"> Enter your phone number: </label>
                        <input type="text" id="phone_Number" name="phone_Number">
                        <br>
                        <br>
                        <br>
                        <label for="User_Name"> Enter your username: </label>
                        <input type="text" id="User_Name" name="User_Name">
                        <br>
                        <br>
                        <br>
                        <label for="Password"> Enter your password: </label>
                        <input type="password" id="Password" name="Password">
                        <br>
                        <br>
                        <br>
                        <button type="submit" class="btn" name="submit">Submit</button>

                    </form>
    }

                </div>
            </div>
        </div>
    </body>
    </html>
