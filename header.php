<?php echo '<?xml version="1.0" encoding="utf-8" ?>'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<?php
if ($page_title) {
  echo "<title>$page_title</title>";
} else {
  echo "<title>Mango Movie Manager</title>";
}
?>
    <link rel="stylesheet" type="text/css" href="style.css" media="screen" />
    <link rel="shortcut icon" href="mango.png" type="image/x-icon" />
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
    <meta name="author" content="Paul Osborne" />
    <meta name="description" content="Mango is a cross-platform database movie management application implemented in Java" />
    <meta name="keywords" content="movie managment, mango, mango movie manager, the mango project, mango project" />
</head>
<body>
<div id="wrap">
<div id="header">
<!--    <h1 id="mango_title">Mango Movie Manager</h1> -->
<img src="mangotitle.png" alt="Mango Movie Manager" />
</div>