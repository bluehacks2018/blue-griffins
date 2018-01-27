 <!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="materialize/css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
     
     <title>Register</title>
    </head>

    <body>
  <script>
    $(document).ready(function(){

        Materialize.updateTextFields();
    });
  </script>
    <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="materialize/js/materialize.min.js"></script>
       <script type="text/javascript" src="materialize/js/materialize.js"></script>




           
<form name="form1" action="" method="post">
    <nav>
    <div class="nav-wrapper blue-grey darken-1">
      <a href="Main-Page.php" class="brand-logo">Logo</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="adopt.php">Adopt a Pet</a></li>
        <li><a href="rescue.php">Rescue Mission</a></li>
        <li><a href="post-for.php">Post for Adoption</a></li>
        <li><a href="log-in.php">Sign in</a></li>
        <li><a href="register.php">Register</a></li>
        
      </ul>
    </div>
  </nav>
        
        <br><br><br> 
        <center></center>
    <div class="container">
       <div class="row valign-wrapper">
        <div class="col s9 offset-s2 valign">
          <div class="card blue-grey darken-1">
            <div class="card-content white-text">
              <span class="card-title" style="font-weight: bolder; text-align: center;">Register for an account</span>
              <div class="divider"></div>
                  <div class="row white-text">
                    <br>
    <div class="input-field col s6">
      <input name="lname" type="text" class="validate">
      <label class="active white-text" for="lname" style="font-size: 20px;">Last Name</label>
    </div>
    <div class="input-field col s6">
      <input name="fname" type="text" class="validate">
      <label class="active white-text" for="fname" style="font-size: 20px;">First Name</label>
    </div>
    <div class="input-field col s12">
      <input name="email" type="text" class="validate">
      <label class="active white-text" for="email" style="font-size: 20px;">Email</label>
    </div>
    <div class="input-field col s6">
      <input name="pword" type="text" class="validate">
      <label class="active white-text" for="pword" style="font-size: 20px;">Password</label>
    </div>
    <div class="input-field col s6">
      <input name="conpword" type="text" class="validate">
      <label class="active white-text" for="conpword" style="font-size: 20px;">Confirm Password</label>
    </div>
    <div class="input-field col s8 offset-s5">
      <a class="waves-effect waves-light btn blue-grey lighten-5 blue-grey-text text-darken-1" id="puta" style="font-weight: bolder;">Register</a>
       <input class="btn btn-default submit " type="submit" name="register" value="tae">
    </div>
  </div>
            </div>
          </div>
        </div>
      </div>
    </div>
       

          <?php 
    
    if(isset($_POST["register"]))
    {

      $lname=$_POST['lname'];
      $fname=$_POST['fname'];
      $email=$_POST['email'];
      $pword=$_POST['pword'];
      $conpword=$_POST['conpword'];
      $link=mysqli_connect("localhost","root","");
      mysqli_select_db($link,"adoptors");
      mysqli_query($link,"insert into registration values('$lname','$fname','$email','$pword','$conpword')");
      echo mysqli_error($link);
      ?>
      <div class="alert alert-success col-lg-6 col-lg-push-3">
        Registration successfully, You will get email when your account is approved
    </div>
  <?php
    }
  ?>
    </div>
x 
        
          


    </body>
  </html>