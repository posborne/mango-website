<?php 
$page_title = "Mango Movie Manager";
include("header.php"); 
?>

<div id="main">
<div id="navcontainer">
  <ul id="navlist">
    <li id="active"><a href="index.php">Home</a></li>
    <li><a href="about.php">About Mango</a></li>
    <li><a href="docs.php">Documentation</a></li>
    <li><a href="download.php">Download</a></li>
    <li><a href="contact.php">Contact</a></li>
  </ul>
</div>
<div id="content">
<h2>Overview</h2>
<p><span class="photobox" style="float:right"><a href="screenshot-main.png">
      <img src="thumbnail-main.png" alt="Mango main screen" style="border:none" /></a><br /></span>
  Mango is an advanced, yet easy to use movie management application.  With
  Mango you can easily keep track and search through your personal movie
  collection without having to go through all of your movies one at a time
  trying to remember which ones you like or which movies Sean Connery acts in.  Mango
  runs on all major operating systems and has a minimal, sleek user interface that
  lets you manage your movies without getting in the way.
</p>
<h2>Features</h2>
<p>Mango interfaces with its own, locally-hosted database and online web
servies like Amazon to provide a rich variety of useful features:</p>
<ul>
    <li>Mango is cross-platform so it runs on Windows, Mac, and Linux.  In fact, it
	will run on any computer that has Java Version 6.0 or higher installed.  Java
	is free and available at <a href="http://java.com/getjava/">java.sun.com</a>.</li>
    <li>Adding movies to Mango is easy.  Mango interfaces with Amazon's movie
        database.  Just enter the title or ASIN of your movie and let Mango do
        the rest!  Mango even downloads cover art for you movies!</li>
    <li>Finding the movie you want in Mango is easy.  In Mango you can easily filter
	the movies displayed in the main view table or you can create or execute an
	advanced search on the movie database.  If the data is in the database, there
	is a way to search for it.</li>
    <li>Organizing the movies you have put in Mango is easy.  Mango allows you to create
	sets of movies (collections that are not ordered and cannot have duplicates) and
	lists of movies (which are like playlists that can have duplicates and have a defined
	order).</li>
    <li>Track who has your movies and whose movies you have.  We know that at any given time
	friends, relatives, and all other manner of people might be borrowing your movies and
	Mango lets you keep track of all that.  Then when you want to watch some missing movie
	down the line you know who to hunt down.</li>
</ul>
<h2>Screenshots</h2>
<div style="text-align:center">
  <span class="photobox">
    <a href="screenshot-main.png">
    <img src="midsize-main.png" alt="Mango main screen" /></a><br />
    The Mango main screen lets you browse and sift through your movie collection in many
      different ways.
  </span>
  <span class="photobox">
    <a href="screenshot-addeditmovie.png">
    <img src="midsize-addeditmovie.png" alt="Mango Add/Edit Movie Dialog" /></a><br />
    Adding and editing the movies in your collection is a breeze with Mango
  </span>
  <span class="photobox">
    <a href="screenshot-amazonquery.png">
    <img src="screenshot-amazonquery.png" alt="Query Amazon from Mango" /></a><br />
    Adding movies is as easy as typing in the title.  Mango will automagically pull down all
      the information about your movie from Amazon's databases.
  </span>
  <span class="photobox">
    <a href="screenshot-savedsearch.png">
    <img src="midsize-savedsearch.png" alt="Advanced Search" /></a><br />
    Mango lets you create saved, advanced searches.  Enter the criteria once and after that
      accessing all your favorite Sean Connery movies is as easy as a single click.
  </span>
</div>

</div><!-- end body -->
</div>

<?php include("sidebar.php"); ?>


</div> <!-- end wrap -->

</body>
</html>
