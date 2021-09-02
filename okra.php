<html>
<head>

<!--  I honor Parkland's core values by affirming that I have
followed all academic integrity guidelines for this work.
JMCHATTIE1
CSC155201F -->

<title>The Okra Page</title>
<?php 
// php library loading first
require("library/commonHeaderFn.php");  // ALEX MOVED THIS TO HERE
require("library/phpfunctions.php");
secure_test();

// local php functions go here 
// local php startup code goes here 

if (!isset($_SESSION['okra']))
    $_SESSION['okra']=0;

if (isset($_POST['submit']))
{  // did the page load itself?
    if ($_POST['submit'] == 'Buy One')
    $_SESSION['okra']++;
    else if ($_POST['submit'] == 'Buy Ten')
    $_SESSION['okra']+=10;
    else if ($_POST['submit'] == 'Drop All')
    $_SESSION['okra']=0;
}

?>

</head>
<body>
<h3> You've arrived at the Okra Procurement Page!!! </h3>
<p> Please click on the buttons below to select the number of okra pods you would like: </p>
<form method='POST'>
<input type='submit' name='submit' value='Buy One'>
<input type='submit' name='submit' value='Buy Ten'>
<input type='submit' name='submit' value='Drop All'>
</form>

<p> You have selected <?php echo $_SESSION['okra'];?> okra pods for your shopping cart </p>
<p> Your okra pods: <?php echo print_creatures("<img src='library/images/okra.jpg' alt='okra' width='50'>", $_SESSION['okra']);?></p>


<?php header2() ?>
<?php footer() ?>
</body>
</html>
