<!DOCTYPE html>
<html lang="en">
  <head>
   <title>Movieku</title>
<meta charset="utf-8">
<link rel="shortcut icon" type="image/x-icon" href="css/images/favicon.ico">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
<link rel="stylesheet" href="css/colorbox.css" type="text/css" media="all">
<script src="js/jquery-1.8.0.min.js"></script>
<script src="js/jquery.colorbox-min.js"></script>
<!--[if lt IE 9]><script src="js/modernizr.custom.js"></script><![endif]-->
<script src="js/functions.js"></script>
  </head>
  <body>
   	<!-- wrapper -->
<div id="wrapper">
  <div class="light-bg">
    <!-- shell -->
    <div class="shell">
      <!-- header -->
      <div class="header">
        <h1 id="logo"><a href="#">Moviereviews</a></h1>
        <!-- navigation -->
        <nav id="navigation">
          <ul>
           <form action="search.php" method="get">
      <input type="text" name="search" placeholder="Type Title Here" required>
      <select name="channel" required>
        <option value="movie" selected="selected">Movie
        </option>
        <option value="tv">TV Show
        </option>
      </select>
      <button type="submit">CARI
      </button>
    </form>
          </ul>
        </nav>
        <!-- end of navigation -->
        <div class="cl">&nbsp;</div>
      </div>
      <!-- end of header -->
      <!-- main -->
      <div class="main">
        <!-- content -->
       
        <!-- sidebar -->
        <aside class="sidebar">
          <div class="widget">
            <h3 class="widgettitle">MENU</h3>
            <ul>
              <li>
        <a href="index.php">Home
        </a>
      </li>
      <li>
        <a href="popular.php">Popular Movies
        </a>
      </li>
      <li>
        <a href="now-playing.php">Now Playing Movies
        </a>
      </li>
      <li>
        <a href="upcoming.php">Upcoming Movies
        </a>
      </li>
      <li>
        <a href="tv-series.php">TV SERIES
        </a>
      </li>
            </ul>
          </div>
                    
        </aside>
        <!-- end of sidebar -->
           <!-- end of main -->
         <!-- end of shell -->
  </div>
</div>
<!-- end of wrapper -->
	