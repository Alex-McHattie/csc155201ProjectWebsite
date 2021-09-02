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

    if ($_SESSION['group'] == 'admin')
    {
        echo "<center><strong>";
        echo " &nbsp; | &nbsp; ";
        echo "<a href='showUsers.php'>Show Users</a>";
        echo " &nbsp; | &nbsp; ";
        echo "<a href='showOrders.php'>Show Orders</a>";
        echo " &nbsp; | &nbsp; ";
        echo "</strong></center>";        
    }


}

// should be called by every 'secure' page in the website
function secure_test($group='user')
{
    session_start();

    if (!isset($_SESSION['user']))
    {
        header("Location: login.php");
    }
    // insert slide 6 code for lab 25
    // test and compare group to user

    if ( $group != 'user' && $_SESSION['group'] != $group )
    {
        // return to welcome
        header("Location: welcome.php");
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

function getConn()
{
    // Create connection object
    $user = "jmchattie1";  
    $conn = mysqli_connect("localhost",$user,$user,$user);
    // Check connection
    if (mysqli_connect_errno()) {
    echo "<b>Failed to connect to MySQL: " . mysqli_connect_error() . "</b>";
    }
    return $conn;
}


function lookupUsername($conn, $username) {
    // echo "looking up $username";
    $stmt = $conn->prepare("SELECT * FROM users WHERE username=?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();
    $num_rows = mysqli_num_rows($result);

    if ($num_rows == 0) {
        // not found 
        // echo 'not found';
        return 0;
    }
    else if ($num_rows > 1) {
        // too many results ... exit!  
        // echo 'too many found';
        header("Location: goodbye.php");
    }
    else {
        // one result, return the row 
        // echo 'one found';
        return $result->fetch_assoc();
    }
}


?>
