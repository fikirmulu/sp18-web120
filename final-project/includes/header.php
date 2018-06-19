<?php include 'fp-config.php'?>
<!doctype html>
<html lang="en">
<head>
<title><?=$title?></title>  
    
<meta charset="UTF-8">
    
<meta name="viewport" content="width=device-width, initial-scale=1">

<meta name="robots" content="noindex,nofollow"/>
    
<link rel=”stylesheet” type=”text/css” href=”css/lightbox.css”/>
<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
   <script src="https://s3.amazonaws.com/menumaker/menumaker.min.js" type="text/javascript"></script>
   <script src="js/script.js"></script>
    <script src="js/lightbox.js"></script>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

   <link rel="stylesheet" href="css/nav.css"/> 
   <link rel="stylesheet" href="css/fp.css"/>
   <link rel="stylesheet" href="css/form.css"/>   
<link rel="stylesheet" href="css/gallery.css"/> 
    
    
</head>

<body>
    <div class="wrapper">
     
<header>       
<h1><a href="../index.php"><i class="logo fa <?=$logo?>"></i> Noblespirits Liqour Store </a></h1>
    
   <!--<ul class="socialmedia">
	 Add font awesome icons 
		<li><a href="https://www.facebook.com" target="_blank" class="fa fa-facebook"></a></li>
       <a href="http://twitter.com" target="_blank" class="fa fa-twitter"></a>
		<a href="#" class="fa fa-instagram"></a>  
	</ul>--> 
    
  <!--<nav id="cssmenu">-->
   <nav>     
<ul class="topnav" id="myTopnav">
    <?=makeLinks($nav1)?>  
  
     <!--<li><a href="index.php"><span>Home</span></a></li>
     <li><a href="about.php"><span>About</span></a></li> 
     <li><a href="gallery.php"><span>Gallery</span></a></li>
      <li><a href="map.php"><span>Map</span></a></li> 
     <li><a href="contact.php"><span>contact</span></a></li> -->
    
    <li class="icon"> <a href="javascript:void(0);" onclick="myFunction()">&#9776;</a> </li> 
  </ul>
</nav>   
 
</header>  

<section>
 <h2 class="pageID"><?=$pageID?></h2>
   