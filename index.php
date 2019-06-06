<?php
require_once('startsession.php');
require_once('connectvars.php');
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
        <li><a href="index.php">Főoldal</a></li>
        <li><a href="rules.php">Szabályok</a></li>
        <li><a href="signup.php">Regisztráció</a></li>
        <li><a href="https://www.facebook.com/"target="_blank">Facebook</a></li>
        <li> 
          <form method="post" action="profile.php">
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
        
</div>
<div id="answer">
<h2>Igen!</h2>
</div>



</body>

</html>