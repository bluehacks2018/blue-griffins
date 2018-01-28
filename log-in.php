 
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="materialize/css/materialize.min.css"  media="screen,projection"/>

      <script src="materialize/js/jquery-3.3.1.min.js"></script>
      <link type="text/css" rel="stylesheet" href="materialize/material-icon/material-icon.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
     <title>Log in</title>

     <script>
   $(document).ready(function() {
    Materialize.updateTextFields();
  });
</script>
    <!--Import jQuery before materialize.js-->

   <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <script type="text/javascript" src="materialize/js/materialize.min.js"></script>
       <script type="text/javascript" src="materialize/js/materialize.js"></script>
    </head>

    <body>
     

 
		<nav>
    <div class="nav-wrapper blue-grey darken-1">
      <a href="Main-Page.php" class="brand-logo"> <img src="photos/keme.png" style="height: 100px; width: 150px;"> </a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="adopt.php">Adopt a Pet</a></li>
        <li><a href="rescue.php">Rescue Mission</a></li>
        <li><a href="post-for.php">Post for Adoption</a></li>
        <li><a href="log-in.php">Sign in</a></li>
        <li><a href="register.php">Register</a></li>
        
      </ul>
    </div>
  </nav>
        <form name="form1" action="" method="post">
        <br><br><br> 
        <center></center>
    <div class="container">

       <div class="row valign-wrapper">
        <div class="col s5 offset-s4 valign">
          <div class="card blue-grey darken-1">
            <div class="card-content white-text">
              
              <span class="card-title" style="font-weight: bolder; text-align: center;"><i class="material-icons" style="font-size: 30px;">people</i> Welcome</span>
              <div class="divider"></div>
                  <div class="row white-text">
                    <br>
    <div class="input-field col s12">


      <input name="email" type="text" class="validate">
      <label class="active white-text" for="email" style="font-size: 20px;" >Email</label>

      <input id="email" type="text" class="validate">
      <label class="active white-text" for="email" style="fo;nt-size: 18px;">Email</label>

    </div>
    <div class="input-field col s12">
      <input name="pword" type="text" class="validate">
      <label class="active white-text" for="pword" style="font-size: 20px;" >Password</label>

    </div>
    <div class="input-field col s6 offset-s4">
      <input class="btn btn-default submit " type="submit" name="log" value="Log-in">
    </div>
  </div>
            </div>
          </div>
        </div>
      </div>
    </div>
      </form> 

          
      
 <?php
 session_start();
  $con = mysqli_connect("localhost", "root","","adoptors");

  if (isset($_POST['log'])) {
    $login_user = $_POST['email'];
    $login_pword = $_POST['pword'];
    $con_user = mysqli_query($con,"SELECT * FROM registration WHERE email = '$login_user' AND password = '$login_pword'");
    $count = mysqli_num_rows($con_user);

  
  if ($count != 0) 
  {
    
    
   
        echo '<script>';
        echo 'alert("Logged In Successfully!");';
        $_SESSION["loginuser"] = $login_user;
        
        echo 'window.location.href = "Main-Page.php";';
        echo '</script>';

  }
  else
  {
      echo "<script> alert('Invalid Email!'); </script>";
      // $result = mysqli_query($conn, "SELECT * FROM db_acct ORDER BY name");
  }
}
?>

 
    </body>
  </html>