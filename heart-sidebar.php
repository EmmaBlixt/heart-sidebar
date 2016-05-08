<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
<link href='https://fonts.googleapis.com/css?family=IM+Fell+DW+Pica+SC|Quicksand' rel='stylesheet' type='text/css'>
</head>
<body>

  <div class="sidebar">  

<div class="heart-left"></div>
<div class="heart-right"></div>

    <div class="description">
     <div class="title"><a href="/">Hello world</a></div>
<?php



$info = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.";

// insert read more after 120 characters in the info
$info = strip_tags($info);
if (strlen($info) > 120) {

    // truncate string
    $stringCut = substr($info, 0, 120);

    // make sure it ends in a word so assassinate doesn't become ass...
    $info = substr($stringCut, 0, strrpos($stringCut, ' ')).'... <a class="read-more" href="/about">Read more..</a>'; 
}

?>
    <p><?php echo $info; ?></p>

 <!-- Links -->  
 <div class="links">
    <a href="/#" title="Contact">
    <img src="img/contact.png"></a>
    
    <a href="/#" title="Gallery">
    <img src="img/gallery.png"/></a>
    
    <a href="/#" title="Projects">
    	<img src="img/projects.png"/></a>
    
    <a href="/#" title="Favorites">
    	<img src="img/favorites.png"/></a>
    
    <a href="/#" title="Achievements">
    	<img src="img/achievements.png"/></a>
    
    </div> 
    <!-- Bottom of the heart -->
        <div class="triangle-down"></div>
            
        </div>

        
        </div>
  </body>   
  </html>