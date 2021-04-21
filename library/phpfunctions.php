<!--  I honor Parkland's core values by affirming that I have
          followed all academic integrity guidelines for this work.
          jmchattie1
          csc155201f -->

<?php

function footer()
{
    echo "<center><strong>";
    echo "<a href='logout.php'>Log Out</a>";
    echo " &nbsp; | &nbsp; ";
    echo "<a href='welcome.php'>Home</a>";
    echo " &nbsp; | &nbsp; ";
    foreach (array("godzillas","frenchfries","okra","elvises") as $creature)
    {
        echo "<a href='" . $creature . ".php'>" . $creature . "</a>";
        echo "<img src= 'http://www.csit.parkland.edu/~jmchattie1/csc155201F/lab15_phpSite3/Lab12_phpSite/library/images/" . $creature . ".jpg'>";     
        echo " &nbsp; | &nbsp; ";
    }
    echo "<a href='shoppingCart.php'>Checkout</a>";
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

//  this function moved from login of an earlier site version
function getPost( $name )  #Ken's version 2 from Slide 7
{  
# check to see if it been used, if it has, return it
    if ( isset($_POST[$name]) ) 
    {
        return htmlspecialchars($_POST[$name]);
    }
    return "";
}

function print_creatures($letter, $times)
{
    for ($i=0;$i<$times;$i++)
    {
        echo $letter;
    }
}

?>
