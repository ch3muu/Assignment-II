<!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <title> View Users </title>
    <link rel="stylesheet" href="style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400;500;700&family=Didact+Gothic&family=Edu+TAS+Beginner&family=Edu+VIC+WA+NT+Beginner:wght@400;500;700&family=Fredoka+One&display=swap" rel="stylesheet">
</head>
 <body>
    <div class="header">
      <p><h3>User's Details</h3></p>

<table>
<tr>
<th> User Id </th>
<th> Full Name </th>
<th> Email </th>
<th> Phone Number </th>
<th> Username </th>
<th> Password </th>

<th colspan="2" align="center"></th>
</tr>

<?php
require('configs/DbConn.php');
 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "Booking";
 $conn = mysqli_connect($servername, $username, $password ,$dbname);

$sql = "SELECT userId,Full_Name,email,phone_Number,User_Name,Password FROM Users";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while ($row= $result-> fetch_assoc()){
       echo "<tr><td>".$row["userId"]."</td><td>".$row["Full_Name"]."</td><td>".$row["email"]."/td><td>".$row["phone_Number"]."</td><td>".$row["User_Name"]."</td><td>".$row["Password"]."</td> <td> <a href="view_users.php?delete=<?php echo $userId['userId']; ?>">Delete</a></td></tr>";
           

        }
        echo "</table>";
      }
      else{
        echo "0 result";
      }

      ?>



 </body>
 </html>