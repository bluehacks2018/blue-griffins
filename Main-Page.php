 <!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="materialize/css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <title>Home</title>
    </head>

    <body>
<nav>
    <div class="nav-wrapper blue-grey darken-1">
      <a href="#" class="brand-logo">Logo</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
      	<li><a href="adopt.php">Adopt a Pet</a></li>
      	<li><a href="log-in.php">Rescue Mission</a></li>
        <li><a href="log-in.php">Sign in</a></li>
        <li><a href="register.php">Register</a></li>
        
      </ul>
    </div>
  </nav>
    
    <br>
    <div class="carousel">
    <a class="carousel-item" href="#one!"><img src="photos/1.jpg"></a>
    <a class="carousel-item" href="#two!"><img src="photos/2.jpg"></a>
    <a class="carousel-item" href="#three!"><img src="photos/3.jpg"></a>
  </div>
      
      <br>
          
<script>
  
  $(document).ready(function(){
      $('.carousel').carousel();
    });
        
  $('.carousel').carousel('next');
$('.carousel').carousel('next', 1); // Move next n times.

// Previous slide
$('.carousel').carousel('prev');
$('.carousel').carousel('prev', 2); // Move prev n times.

// Set to nth slide
$('.carousel').carousel('set', 3);

// Destroy carousel
$('.carousel').carousel('destroy');
      
</script>
    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="materialize/js/app.js"></script>
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <script type="text/javascript" src="materialize/js/materialize.min.js"></script>
    </body>
  </html>