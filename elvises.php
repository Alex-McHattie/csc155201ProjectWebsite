<html>
<head>

<!--  I honor Parkland's core values by affirming that I have
followed all academic integrity guidelines for this work.
JMCHATTIE1
CSC155201F -->

<title>Elvis Outfit Purchase Page</title>
<?php 
// php library loading first
require("library/commonHeaderFn.php");  // ALEX MOVED THIS TO HERE
require("library/phpfunctions.php");
secure_test();

// local php functions go here 
// local php startup code goes here 
// require("library/commonHeaderFn.php"); COMMENT: ALEX MOVED THIS UP

if (!isset($_SESSION['elvises']))
    $_SESSION['elvises']=0;

if (isset($_POST['submit']))
{  // did the page load itself?
    if ($_POST['submit'] == 'Buy One')
    $_SESSION['elvises']++;
    else if ($_POST['submit'] == 'Buy Ten')
    $_SESSION['elvises']+=10;
    else if ($_POST['submit'] == 'Drop All')
    $_SESSION['elvises']=0;
}


?>

</head>
<body>
<p> Welcome to the Elvis Outfit Purchase Page!!! </p>
<form method='POST'>
<input type='submit' name='submit' value='Buy One'>
<input type='submit' name='submit' value='Buy Ten'>
<input type='submit' name='submit' value='Drop All'>
</form>

<p> You have selected <?php echo $_SESSION['elvises'];?> Elvis outfits for your shopping cart </p>
<p> Your Elvis outfits: <?php echo print_creatures('E', $_SESSION['elvises']);?></p>


<?php header2() ?>
<?php footer() ?>
</body>
</html>
