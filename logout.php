<html>
<head>

<!--  I honor Parkland's core values by affirming that I have
followed all academic integrity guidelines for this work.
JMCHATTIE1
CSC155201F -->

<title>Goodbye Page</title>
<?php 
// php library loading first
require("library/commonHeaderFn.php"); // ALEX MOVED THIS UP HERE
require("library/phpfunctions.php");
session_start();

// local php functions go here 
// local php startup code goes here 
// require("library/commonHeaderFn.php"); COMMENTED OUT AND MOVED TO ABOVE

unset( $_SESSION['user'] );
header( "refresh:5;url=login.php");

?>
</head>
<body>
<?php header2() ?>
<center><h1> Thanks for visiting Alex's website! </h1></center>
<?php footer() ?>
</body>
</html>
