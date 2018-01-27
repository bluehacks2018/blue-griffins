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
      <title>Home</title>
    </head>

    <body>


  

<nav>
    <div class="nav-wrapper blue-grey darken-1">
      <a href="Main-Page.php" class="brand-logo"> <img src="photos/Untitled-2.png" style="height: 100px; width: 150px;"> </a>
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
    <div class="carousel">
    <a class="carousel-item" href="#one!"><img src="photos/dog1.jpg"></a>
    <a class="carousel-item" href="#two!"><img src="photos/dog2.jpg"></a>
    <a class="carousel-item" href="#three!"><img src="photos/dog3.jpg"></a>
    <a class="carousel-item" href="#four!"><img src="photos/dog4.jpg"></a>
    <a class="carousel-item" href="#five!"><img src="photos/dog5.jpg"></a>
  </div>
      
      <br>
          
<script>
  
  $(document).ready(function(){
      $('.carousel').carousel();
    });
        
  $('.carousel').carousel('next');
$('.carousel').carousel('next', 3); // Move next n times.

// Previous slide
$('.carousel').carousel('prev');
$('.carousel').carousel('prev', 4); // Move prev n times.

// Set to nth slide
$('.carousel').carousel('set', 4);

// Destroy carousel
$('.carousel').carousel('destroy');
      
</script>
<form  name="form1" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
</form>

<?php
$target_dir = "photos/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);

    if($check != false) {
        $uploadOk = 1;

    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
    if($uploadOk)
    {

}
move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
$conn=new mysqli("localhost", "root", "", "adoptors");
$sql="INSERT INTO dogandpussy(dogcat, status, availability, location, images) values('','','','','$target_file')";
if ($conn->query($sql)) {
# code...
echo "<img src='$target_file'>";
}
else{
  $conn->error;
}

    }
?> 
<?php
  $sql="SELECT * FROM dogandpussy";
  $result_set=mysql_query($sql);
  
  ?>







    <!--Import jQuery before materialize.js-->
    
      <script type="text/javascript" src="materialize/js/materialize.min.js"></script>
       <script type="text/javascript" src="materialize/js/materialize.js"></script>

       
    
    </body>
  </html>