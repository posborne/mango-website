<?php 
$page_title = "Mango Movie Manager - About";
include("header.php"); 
?>

<div id="main">
<div id="navcontainer">
  <ul id="navlist">
    <li><a href="index.php">Home</a></li>
    <li id="active"><a href="about.php">About Mango</a></li>
    <li><a href="docs.php">Documentation</a></li>
    <li><a href="download.php">Download</a></li>
    <li><a href="contact.php">Contact</a></li>
  </ul>
</div>
<div id="content">
<h2>Overview</h2>
<p>Mango is an advanced, yet easy to use movie management application.  With
  Mango you can easily keep track and search through your personal movie
  collection without having to go through all of your movies one at a time
  trying to remember which ones you like or which movies Sean Connery acts in.  Mango
  runs on all major operating systems and has a minimal, sleek user interface that
  lets you manage your movies without getting in the way.</p>

<h2>How it Started</h2>
<p>Mango began as an assignment for COS313: Database Systems at <a href="http://bethel.edu/">
Bethel University</a>.  As the project progressed it became apparent that Mango was becoming
a pretty awesome piece of software and we decided to run with it and bring it to a form that
is usable by Average Joe.  Many thanks go to Kelly Lough for providing the name for the application.</p>

<h2>The Developers</h2>
<p>Right now the three developers on the project are the same three that were paired together that
fateful day in COS313.  At this point, all of us are able to work with Mango at any level without
too much difficulty.  Given here are the general roles we gave ourselves when first developing the
project:</p>
<ul>
    <li><a href="http://www.mathcs.bethel.edu/~ronkyl/">Kyle Ronning</a>: GUI Specialist (Netbeans Guru).</li>
    <li><a href="http://posborne.net/">Paul Osborne</a>: DAO master (Database Backend).</li>
    <li><a href="http://www.mathcs.bethel.edu/~varzac/">Zach Varberg</a>: Tweener (Business Objects and Controller).</li>
</ul>
<p>If you need to get ahold of any of us you can visit the <a href="contact.php">contacts page</a>.</p>
</div>
</div><!-- end body -->

<?php include("sidebar.php"); ?>

</div> <!-- end wrap -->

</body>
</html>
