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

//ALEX TRIES THIS from INSERT USER PAGE JUNE 20 FOR LAB 25 DB VER2:
$conn = getConn();
// NOPE- NO CHANGE IN showOrders page

// June 22 ALEX TRIES THIS DOLLAR SIGN POST TO SEE IF THAT GETS THE INFO INTO SHOWORDERS
/*
$_POST['username']
$_POST['godzillas']
$_POST['frenchfries']
$_POST['okra']
$_POST['elvises']
*/
// NOPE- ALEX TRIED A COUPLE WAYS TO GET THIS TO WORK, BUT JUST GOT ERROR MESSAGES

?>
</head>
<body>
<h3>You're now on the Checkout Page</h3>

<?php header2() ?>

<h2><em>Check out what's in your shopping cart!!!:</em></h2>


<p>  <?php echo print_creatures("<img src='library/images/godzillas.jpg' alt='Godzilla' width='50'>", $_SESSION['godzillas']);?> </p>
<p>  <?php echo print_creatures("<img src='library/images/frenchfries.jpg' alt='French fry' width='20'>", $_SESSION['frenchfries']);?> </p>
<p>  <?php echo print_creatures("<img src='library/images/okra.jpg' alt='okra' width='50'>", $_SESSION['okra']);?> </p>
<p>  <?php echo print_creatures("<img src='library/images/elvises.jpg' alt='Elvis' width='50'>", $_SESSION['elvises']);?> </p>
<br>


<h2><em>--and here are the totals of your items:</em></h2>

<?php
function insertNewRecord($conn)
{
// ALEX QUESTIONS WHETHER TO ADD THIS GLOBAL FROM LAB 18
// global $critter, $verb, $friendName, $anyObject, $anotherFriend, $vegitable, $footware, $eyeHole, $shoeBrand, $shoeTongue, $furnitureLeg, $airplaneWing;

  
    // prepare and bind
    $stmt = $conn->prepare("INSERT INTO orders (username, godzillaCount, fryCount, okraCount, elvisCount) VALUES (?, ?, ?, ?, ?)"); 
    $stmt->bind_param("siiii", $_SESSION['user'], $_SESSION['godzillas'], $_SESSION['frenchfries'], $_SESSION['okra'], $_SESSION['elvises']);


    $stmt->execute();

    // header("Location: logout.php");

}

insertNewRecord($conn);

?>

<p>  <?php echo ( $_SESSION['godzillas']);?> Godzilla costumes</p>
<p>  <?php echo ( $_SESSION['frenchfries']);?> French fries</p>
<p>  <?php echo ( $_SESSION['okra']);?> okra pods</p>
<p>  <?php echo ( $_SESSION['elvises']);?> Elvis outfits</p>

<?php footer() ?>
</body>
</html>
