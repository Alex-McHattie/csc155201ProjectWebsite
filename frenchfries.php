<html>
<head>

<!--  I honor Parkland's core values by affirming that I have
followed all academic integrity guidelines for this work.
JMCHATTIE1
CSC155201F -->

<title>The French Fries Page</title>
<?php 
// php library loading first
require("library/commonHeaderFn.php");  // ALEX MOVED THIS TO HERE
require("library/phpfunctions.php");
secure_test();

// local php functions go here 
// local php startup code goes here 

if (!isset($_SESSION['frenchfries']))
    $_SESSION['frenchfries']=0;

if (isset($_POST['submit']))
{  // did the page load itself?
    if ($_POST['submit'] == 'Buy One')
    $_SESSION['frenchfries']++;
    else if ($_POST['submit'] == 'Buy Three')
    $_SESSION['frenchfries']+=3;
    else if ($_POST['submit'] == 'Drop All')
    $_SESSION['frenchfries']=0;
// ALEX FOUND THIS WORKED ON GODZILLA, SO HE PLUGS IT IN HERE TOO
    else if ($_POST['submit'] == 'Remove One')
    {
    if ($_SESSION['frenchfries'] > 0)
    {
        $_SESSION['frenchfries']--;
    }
    }  
}

?>

</head>
<body>
<h3> You're now on the French Fries Procurement Page!!! </h3>
<p> Please click on the buttons below to select the number of French fries you would like: </p>
<form method='POST'>
<input type='submit' name='submit' value='Buy One'>
<input type='submit' name='submit' value='Buy Three'>
<input type='submit' name='submit' value='Remove One'>
<input type='submit' name='submit' value='Drop All'>
</form>

<p> You have selected <?php echo $_SESSION['frenchfries'];?> French fries for your shopping cart </p>
<p> Your French fries: <?php echo print_creatures("<img src='library/images/frenchfries.jpg' alt='French fry' width='20'>", $_SESSION['frenchfries']);?></p>


<?php header2() ?>
<?php footer() ?>
</body>
</html>
