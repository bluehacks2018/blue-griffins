 <!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="materialize/css/materialize.min.css"  media="screen,projection"/>
      <script src="materialize/js/jquery-3.3.1.min.js"></script>
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <title>Post for Adoption</title>
    </head>

    <body>
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

<br>
    <div class="row valign-wrapper">
        <div class="col s6 offset-s3 valign">
          <div class="card blue-grey darken-1">
            <div class="card-content white-text">
              <span class="card-title">Post for Adoption</span>
             <div class="row">
    <form class="col s12 white">
      <div class="row">
   
        <div class="input-field col s5 offset-2">
          <input name="group1" type="radio" id="test1" />
          <label for="test1">Cat</label>
        </div>
         <div class="input-field col s6">
          <input name="group1" type="radio" id="test2" />
          <label for="test2">Dog</label>
        </div>
        

        <div class="input-field col s8 offset-s2">
          <input id="breed" type="text" class="validate">
          <label for="breed">Breed</label>
        </div>
        <div class="input-field col s8 offset-s2">
          <input id="loc" type="text" class="validate">
          <label for="loc">Condition</label>
        </div>
        <form action="#">
         <div class="file-field input-field col s8 offset-s2">
      <div class="btn">
        <span>File</span>
        <input type="file">
      </div>
      <div class="file-path-wrapper">
        <input class="file-path validate" type="text">
      </div>
    </div>

    </form>
        
        <div class="input-field col s5 offset-2">
          <input name="group2" type="radio" id="test3" />
          <label for="test3">For Adoption</label>
        </div>
         <div class="input-field col s6">
          <input name="group2" type="radio" id="test4" />
          <label for="test4">For Rescue</label>
        </div>
<div class="input-field col s6 offset-s4">
          <a class="waves-effect waves-light btn blue-grey lighten-5 blue-grey-text text-darken-1" id="signin" style="font-weight: bolder;">Submit</a>
        </div>
      </div>
     
    </form>
     
  </div>
            </div>
            
          </div>
        </div>
      </div>
    

<script>
  
  
</script>
    <!--Import jQuery before materialize.js-->
    
      <script type="text/javascript" src="materialize/js/materialize.min.js"></script>
       <script type="text/javascript" src="materialize/js/materialize.js"></script>
    </body>
  </html>