<!--  I honor Parkland's core values by affirming that I have 
followed all academic integrity guidelines for this work.
JMCHATTIE1
CSC155201F -->

<?php

function footer()
{
    echo "<center><strong>";
    echo "<a href='logout.php'>Log Out</a>";
    echo " &nbsp; | &nbsp; ";
    echo "<a href='welcome.php'>Home</a>";
    echo " &nbsp; | &nbsp; ";
    foreach (array("godzillas","okra","elvises","frenchfries" ) as $creature)
    {
        echo "<a href='" . $creature . ".php'>" . $creature . "</a>";
        echo " &nbsp; | &nbsp; ";
    }
    echo "<a href='shoppingCart.php'>Checkout</a>";
//    echo " &nbsp; | &nbsp; ";

/* VESTAGES FROM 12-MYSITE AND LAB 06
    echo "<a href='http://www.csit.parkland.edu/~kurban/csc155201F'>Ken's Class Code Page</a>";
    echo " &nbsp; | &nbsp; ";

    echo "<a href='http://www.csit.parkland.edu/~kurban'>Ken's Code</a>";
*/
    echo "</strong></center>";
}


// should be called by every 'secure' page in the website
function secure_test()
{
    session_start();

    if (!isset($_SESSION['user']))
    {
        header("Location: login.php");
    }
}

//  this function moved from login 25:00
function getPost( $name )  #Ken's version 2 from Slide 7
{  
# check to see if it been used, if it has, return it
    if ( isset($_POST[$name]) ) 
    {
        return htmlspecialchars($_POST[$name]);
    }
    return "";
}

//  ALEX NOTE THIS FUNCTION BLOCK SHOULD BE REMOVED
/*
function print_goblin($times)
{
    for ($i=0;$i<$times;$i++)
    {
        echo "G";
    }
}
*/

function print_creatures($letter, $times)
{
    for ($i=0;$i<$times;$i++)
    {
        echo $letter;
    }
}


?>
