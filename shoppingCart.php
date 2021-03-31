<html>
<head>

<!--  I honor Parkland's core values by affirming that I have
followed all academic integrity guidelines for this work.
JMCHATTIE1
CSC155201F -->

<title>Shopping Cart Page</title>
<?php 
// php library loading first
require("library/commonHeaderFn.php"); // ALEX MOVED THIS UP FROM BELOW
require("library/phpfunctions.php");
secure_test();

// local php functions go here 
// local php startup code goes here 
// require("library/commonHeaderFn.php"); COMMENT: ALEX MOVED THIS UP
?>
</head>
<body>
<?php header2() ?>

<h3>Check Out</h3>

<p>  <?php echo print_creatures('O', $_SESSION['okra']);?> </p>
<p>  <?php echo print_creatures('G', $_SESSION['godzillas']);?> </p>
<p>  <?php echo print_creatures('E', $_SESSION['elvises']);?> </p>
<p>  <?php echo print_creatures('F', $_SESSION['frenchfries']);?> </p>

<h3>Your Purchase:</h3>

<p>  <?php echo ( $_SESSION['okra']);?> okra pods</p>
<p>  <?php echo ( $_SESSION['godzillas']);?> godzilla costumes</p>
<p>  <?php echo ( $_SESSION['elvises']);?> Elvis outfits</p>
<p>  <?php echo ( $_SESSION['frenchfries']);?> french fries</p>

<?php footer() ?>
</body>
</html>
