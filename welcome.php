<html>
<head>

<!--  I honor Parkland's core values by affirming that I have
followed all academic integrity guidelines for this work.
JMCHATTIE1
CSC155201F -->

<title>Welcome Page</title>


<?php 
// php library loading first
// require("library/commonHeaderFn.php")   ALEX VESTIGE. MISS SEMI C REP BELOW.
require("library/commonHeaderFn.php");    //  ALEX MOVED THIS UP FROM BELOW
require("library/phpfunctions.php");
// local php functions go here 
// local php startup code goes here 
secure_test();   // from 14-mysite

// header:("Location: library/commonHeaderFn.php");
// require("library/commonHeaderFn.php");  COMMENT: THESE NEED TO BE TAKEN OUT

?>
</head>
<body>
<?php header2() ?>
<h1> Welcome to Alex's Lab14 website!!! </h1>
<?php footer() ?>

<?php echo $_SESSION['user'];?> 
</body>
</html>
