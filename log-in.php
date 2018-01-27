 <!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="materialize/css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
     
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
        
        <br> <br> 
        

        <div class="row">
        <div class="col s12 m6">
          <div class="card blue-grey darken-1">
            <div class="card-content white-text">
              <span class="card-title">Welcome</span>
              
              <form class="">
                  <div class="row">
    <div class="input-field col s6">
      <input id="first_name2" type="text" class="validate">
      <label class="active" for="first_name2">Email</label>
    </div>
    <div class="input-field col s6">
      <input id="first_name2" type="text" class="validate">
      <label class="active" for="first_name2">Password</label>
    </div>
  </div>
              </form>

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
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
  </html>