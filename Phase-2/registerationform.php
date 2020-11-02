
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="aboutus.css">
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>
<body >


  <div class="header">
    <h1>OFFICE PURCHSE ORDER SYSTEM</h1>
    <p>+1 (234) 5678900</p><p> Available 24/7</p>
    <div>
      <a href="https://www.facebook.com/" target="_blank"><img src="images/facebookheader.png" alt="facebook" class="hpsocialmediaicon"></a>
      <a href="https://www.instagram.com/" target="_blank"><img src="images/instagramheader.png" alt="instagram" class="hpsocialmediaicon"></a>
      <a href="https://www.youtube.com/" target="_blank"><img src="images/youtubeheader.png" alt="youtube" class="hpsocialmediaicon"></a>
        </div>
  </div>
  
  <div class="topnav">
    <a href="homepage.html" target="_blank">Home</a>
    <a href="#">Fourm</a>
    <a href="contactus.html" target="_blank">Contact us</a>
    <a href="aboutus.html" target="_blank">About us</a>
    <a href="help.html" style="float:right" target="_blank">Help</a>
    <a href="register.html" style="float:right" target="_blank">Register</a>
    <a href="loginpage.html" style="float:right" target="_blank">Login</a>
  </div>
  

<div class="rpmaindiv">
  <form action="" method="post">
    <div class="rpcontainer">
      <div class="lpimgcontainer">
        <img src="images/register-avatar.jpg" alt="Avatar" class="avatar">
      </div>

            <h2>Registration Form</h2>
            <label for="fname">First name:</label><br>
            <input class="rpinput-field" type="text" placeholder="First Name " name="fname"><br>
            <label for="lname">Last name:</label><br>
            <input class="rpinput-field" type="text" placeholder="Last Name " name="lname"><br>
            <label for="role">Role:</label><br>
            <input class="rpinput-field" type="text" placeholder="Student/STaff/Manager " name="role"><br>
            <label for="email">Email:</label><br>
            <input class="rpinput-field" type="text" placeholder="abc@mail.com" name="email"><br>
            <label for="number">Telephone number:</label><br>
            <input class="rpinput-field" type="text" placeholder="+1 (xxx) xxx xxxx" name="telnum"><br>
            <label for="address">Address:</label><br>
            <input class="rpinput-field" type="text" placeholder="Ex: PO BOX 34 DULUTH MN xxxxx-xxxx " name="address"><br>
            <label for="dept">Department:</label><br>
            <input class="rpinput-field" type="text" placeholder="Department" name="dept"><br><br>

      <button type="submit" >Register</button><br>
    </div>
  </form>
</div>

<div class="footer">
  <div class="leftfooter">
      <h2>UTA OPO SYSTEM</h2>
      <p>1225 W Mitchell St,</p>
      <p>Arlington,TX 76013, USA</p>
      <p>+1 (234) 567 8900</p>
      <p>mywebsite@email.com</p>
  </div>

  <div class="centerfooter">
      <br>
      <a href="homepage.html" target="_blank" class="footer-references">Home</a><br>
      <a href="help.html" class="footer-references">Fourm</a><br>
      <a href="contactus.html" target="_blank" class="footer-references">Contact us</a><br>
      <a href="aboutus.html" target="_blank" class="footer-references">About us</a><br>

  </div>
  <div class="rightfooter">
      <br>
      Follow as:<br>
      <a href="https://www.facebook.com/" target="_blank"><img src="images/facebookheader.png" alt="facebook" class="fpsocialmediaicon"></a>
      <a href="https://www.instagram.com/" target="_blank"><img src="images/instagramheader.png" alt="instagram" class="fpsocialmediaicon"></a>
      <a href="https://www.youtube.com/" target="_blank"><img src="images/youtubeheader.png" alt="youtube" class="fpsocialmediaicon"></a>
  </div>
  <div class="extremerightfooter">
      <br><br>
      <form action="loginpage.html" method="post">
          <button type="submit" >Login</button>
      </form>
  </div>
</div>

 <?php
         $to = "imtiyazaaresh.shaik@mavs.uta.edu";
         $subject = "This is subject";
        
         $message = "<b>This is HTML message.</b>";
         $message .= "<h1>Thanks you for registering to OPOS</h1>";
        
         $header = "From:abc@somedomain.com \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
        
         $retval = mail ($to,$subject,$message,$header);
        
         if( $retval == true ) {

         }else {
            echo "Message could not be sent...";
         }
      ?>

</body>
</html>


