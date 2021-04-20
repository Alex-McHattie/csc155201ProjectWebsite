<html>
<head>

<!--  I honor Parkland's core values by affirming that I have
followed all academic integrity guidelines for this work.
JMCHATTIE1
CSC155201F -->

<title>The Elvis Outfit Page</title>
<?php 
// php library loading first
require("library/commonHeaderFn.php");  // ALEX MOVED THIS TO HERE
require("library/phpfunctions.php");
secure_test();

// local php functions go here 
// local php startup code goes here 

if (!isset($_SESSION['elvises']))
    $_SESSION['elvises']=0;

if (isset($_POST['submit']))
{  // did the page load itself?
    if ($_POST['submit'] == 'Buy One')
    $_SESSION['elvises']++;
    else if ($_POST['submit'] == 'Buy Seven')
    $_SESSION['elvises']+=7;
    else if ($_POST['submit'] == 'Drop All')
    $_SESSION['elvises']=0;
// ALEX FOUND THIS WORKED ON GODZILLA, SO HE PLUGS IT IN HERE TOO
    else if ($_POST['submit'] == 'Remove One')
    {
    if ($_SESSION['elvises'] > 0)
    {
        $_SESSION['elvises']--;
    }
    }  
}

?>

</head>
<body>
<h3> You've just reached the Elvis Outfit Procurement Page!!! </h3>
<p> Please click on the buttons below to select the number of Elvis outfits you would like: </p>
<form method='POST'>
<input type='submit' name='submit' value='Buy One'>
<input type='submit' name='submit' value='Buy Seven'>
<input type='submit' name='submit' value='Remove One'>
<input type='submit' name='submit' value='Drop All'>
</form>

<p> You have selected <?php echo $_SESSION['elvises'];?> Elvis outfits for your shopping cart </p>
<p> Your Elvis outfits: <?php echo print_creatures("<img src='library/images/elvises.jpg' alt='Elvis' width='50'>", $_SESSION['elvises']);?></p>


<?php header2() ?>
<?php footer() ?>
</body>
</html>
