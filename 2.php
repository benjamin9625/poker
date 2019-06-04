<?php

session_start();

$db = mysqli_connect( "localhost", "root", "up18235", "authentication", "3306",);

if (isset($_POST['register_button'] )){

     $username = mysqli_real_escape_string($db, $_POST['username']);
     $email = mysqli_real_escape_string($db, $_POST['email']);
     $password = mysqli_real_escape_string($db, $_POST['password']);
     $password2 = mysqli_real_escape_string($db, $_POST['password2']);

     if ($password == $password2) {

        $password = md5 ($password);
        $sql = "INSERT INTO user (username, email, password) VALUES('$username' , '$email' , '$password') ";
        mysqli_query($db, $sql);
        $_SESSION['message'] = "Bejelentkeztél!";
        $_SESSION['username'] = $username;
        header("location: 2.php");
     }else {
          $_SESSION['message'] = "A két jelszó nem egyezik meg!";
    
     }

}
?>



<!DOCTYPE html>
<html>
<head>

</head>
<body>

<form action="2.php" method="post">
   <table>
      <tr>
      <th colspan="2">Registration</th>
      </tr>
      <tr>
         <td>Username:</td>
         <td><input type="text" name="username" class="textinput"></td>
      </tr>
      <tr>
         <td>Email:</td>
         <td><input type="text" name="email" class="textinput"></td>
      </tr>
      <tr>
         <td>Password:</td>
         <td><input type="password" name="password" class="textinput"></td>
      </tr>
      <tr>
         <td>Password again:</td>
         <td><input type="password" name="password2" class="textinput"></td>
      </tr>
      <tr>
         <td colspan="2"><input type="submit" name="register_button" value="Register"></td>
      </tr>

   </table>

</form>

</body>
</html>