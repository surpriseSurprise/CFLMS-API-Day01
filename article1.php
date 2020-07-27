<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="CodeFactory" content="CodeFactoryCode Review 02: HTML, CSS">
  <title>Code Review 02</title>
  
   <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
   <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script> -->

  <link rel="stylesheet" href="css/style1.css">
  <link rel="stylesheet" href="css/media.css">
</head>

<body>

<div class="main">

	<header class="header">
            <img id="logo1" src="img/logo-newspaper-cf.png" alt="Logo">
            <a href="https://www.codefactory.wien/" target="_blank">
            <img id="banner1" src="img/banner-1.png" alt="Ad Banner">
            </a>
    </header>

    <div>
    	<nav class="topnav">
    		<ul>	
            <li><a href="index.html">Home</a></li>
     	 	<li><a href="tech.html">Tech</a></li>
     	 	<li><a href="culture.html">Culture</a></li>
     		<li><a href="">Video</a></li>
     		</ul>
    	</nav>
    </div>

    <div class="datecontainer">
          <p>Friday, 22.05.2020</p>
    </div>

    <div class="topnews">
        <h1>BBC News</h1>
    </div>

    <br>

    <div>
        <?php
        require_once '../RESTful.php';
        $url = 'http://feeds.bbci.co.uk/news/technology/rss.xml';
        $response = curl_get($url);
        $xml = simplexml_load_string($response);
        foreach ($xml->channel->item as $item) {
        echo '<a href="'.$item->link.'" target="_blank">'.$item->title.'</a><br>';
        }
        ?>
    </div>

<div>
    <nav class="botnav">
        <ul>	
          <li><a href="index.html">Home</a></li>
          <li><a href="tech.html">Tech</a></li>
          <li><a href="culture.html">Culture</a></li>
         <li><a href="">Video</a></li>
         </ul>
    </nav>
</div>

<footer class="footer">
    <img id="logo2" src="img/logo-newspaper-cf.png" alt="logo">
</footer>

<footer class="footerp">
    <p>Elke M. - CodeFactory 2020</p>
</footer>

</body>
</html>