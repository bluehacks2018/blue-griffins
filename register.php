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

		<nav>
    <div class="nav-wrapper blue-grey darken-1">
      <a href="#" class="brand-logo">Logo</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="Sign-in.html">Sign in</a></li>
        <li><a href="Register.html">Register   </a></li>
        
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
      <input id="lname" type="text" class="validate">
      <label class="active white-text" for="lname" style="font-size: 20px;">Last Name</label>
    </div>
    <div class="input-field col s6">
      <input id="fname" type="text" class="validate">
      <label class="active white-text" for="fname" style="font-size: 20px;">Password</label>
    </div>
    <div class="input-field col s12">
      <input id="email" type="text" class="validate">
      <label class="active white-text" for="email" style="font-size: 20px;">Email</label>
    </div>
    <div class="input-field col s6">
      <input id="pword" type="text" class="validate">
      <label class="active white-text" for="pword" style="font-size: 20px;">Password</label>
    </div>
    <div class="input-field col s6">
      <input id="conpword" type="text" class="validate">
      <label class="active white-text" for="conpword" style="font-size: 20px;">Confirm Password</label>
    </div>
    <div class="input-field col s8 offset-s5">
      <a class="waves-effect waves-light btn blue-grey lighten-5 blue-grey-text text-darken-1" id="register" style="font-weight: bolder;">Register</a>
    </div>
  </div>
            </div>
          </div>
        </div>
      </div>
    </div>
       

          
      
        
          

 <script>
   $(document).ready(function() {
    Materialize.updateTextFields();
  });
</script>
		<!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="js/app.js"></script>
      <script type="text/javascript" src="jquery-3.2.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
  </html>