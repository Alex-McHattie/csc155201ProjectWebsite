<html>
<head>

<!--  I honor Parkland's core values by affirming that I have
followed all academic integrity guidelines for this work.
JMCHATTIE1
CSC155201F -->

<title>Godzilla Costume Page</title>
<?php 
// php library loading first
require("library/commonHeaderFn.php");  // ALEX MOVED THIS TO HERE
require("library/phpfunctions.php");
secure_test();

// local php functions go here 
// local php startup code goes here 

if (!isset($_SESSION['godzillas']))
    $_SESSION['godzillas']=0;

if (isset($_POST['submit']))
{  // did the page load itself?
    if ($_POST['submit'] == 'Buy One')
    $_SESSION['godzillas']++;
    else if ($_POST['submit'] == 'Buy Ten')
    $_SESSION['godzillas']+=10;
    else if ($_POST['submit'] == 'Drop All')
    $_SESSION['godzillas']=0;
    // ALEX TRIES ADDING THIS IN FROM KEN'S 15-phpsite EXAMPLE
    else if ($_POST['submit'] == 'Remove One')
    {
    if ($_SESSION['godzillas'] > 0)
    {
        $_SESSION['godzillas']--;
    }
    }    
}

// ALEX TRIES THE HEADER FUNCTION HERE
// header2()  --IT DOESN'T WORK

?>

</head>
<body>
<h3> You are now on the Godzilla Costume Procurement Page!!! </h3>
<!-- <?php header2() ?>   -- THIS DOESN'T WORK HERE EITHER -->

<p> Please click on the buttons below to select the number of Godzilla costumes you would like: </p>
<form method='POST'>
<input type='submit' name='submit' value='Buy One'>
<input type='submit' name='submit' value='Buy Ten'>
<input type='submit' name='submit' value='Remove One'>
<input type='submit' name='submit' value='Drop All'>
</form>

<p> You have selected <?php echo $_SESSION['godzillas'];?> Godzilla costumes for your shopping cart </p>
<p> Your Godzilla costumes: <?php echo print_creatures("<img src='library/images/godzillas.jpg' alt='Godzilla' width='50'>", $_SESSION['godzillas']);?></p>

<!-- SEEMS ALEX CAN ONLY GET THIS HEADER TO WORK PROPERLY HERE -->
<?php header2() ?>
<?php footer() ?>
</body>
</html>
