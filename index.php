<?php

session_start();

$db = mysqli_connect( "localhost", "root", "up18235", "db", "3306",);

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
       // header("location: action.php");
     }else {
          $_SESSION['message'] = "A két jelszó nem egyezik meg!";

     }

}
?>

<!DOCTYPE html>
<html>
<head>
<link type="text/css" rel="stylesheet" href="2.css" />
<script src="jquery.min.js"></script>
<script>
console.log("fecó nem túl okos")
$(document).ready(function(){
  // Add smooth scrolling to all links
  $("a").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
});

//function time(){
//return Date()
//}

</script>

</head>

<body>
<div class="menü" id="menü">
    <ul>
        <li><a href="1.php">Főoldal</a></li>
        <li><a href="Szabályok.php">Szabályok</a></li>
        <li><a href="https://www.facebook.com/"target="_blank">Facebook</a></li>
        <li> 
          <form method="post" action="action.php">
              Felhasználónév:<br>
              <input type="text" name="fh" >
            
        </li>
        <li>
            
              Jelszó:<br>
              <input type="password" name="pw" >
            
        </li>
        <li>
             <br>
             <input type="submit" value="Bejelentkezés"><br>
             <input type="checkbox" name="" value="remember"> Jegyezd meg a jelszavam
           </form> 
        </li>
      </ul>
</div>



<div class="question">
    <h1>Pókerezünk bástyáim?</h1>
        <a href="#answer" class="gomb" <span> A válaszért ide kattintson! </span> </a>
        
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
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
      
</div>


<div id="answer">
<h2>Igen!</h2>
</div>



</body>

</html>