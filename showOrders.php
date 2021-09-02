<html>
<head>


<!--  I honor Parkland's core values by affirming that I have
followed all academic integrity guidelines for this work.
JMCHATTIE1
CSC155201F -->


<title>Lab 25 Admin Orders Page</title>


<!-- ALEX IS USING HIS LAB 21 22 ENHANCED 
showMadLibDataPHP AS SCAFFOLDING FOR THIS PAGE -->

<!-- FROM MADLIB -->
<style>
form {
    margin: 0;
    padding: 0;
}
</style>


<?php 

// FROM MADLIB
$row = [];


// php library loading first
require("library/phpfunctions.php");
secure_test('admin');
$conn = getConn();


// APPROPRIATED FROM ALEXS MADLIB
// local php functions go here
function printTable($result)
{
    $rowcount = 0;
    if ($result->num_rows > 0) 
    {
        global $row;
        echo "<table cellspacing='0' align='center'>";

        // header row
        echo "<tr>";
        echo "<th>" . "id" . "</th>";
        echo "<th> &nbsp; </th> ";
        echo "<th>" . "Date and Time" . "</th>";
        echo "<th> &nbsp; </th> ";
        echo "<th>" . "User Name" . "</th>";
        echo "<th> &nbsp; </th> ";
        echo "<th>" . "Godzilla Costumes" . "</th>";
        echo "<th> &nbsp; </th> ";
        echo "<th>" . "French Fries" . "</th>";
        echo "<th> &nbsp; </th> ";
        echo "<th>" . "Okra Pods" . "</th>";
        echo "<th> &nbsp; </th> ";
        echo "<th>" . "Elvis Outfits" . "</th>";

        echo "</tr>";

        // output data of each row
        while($row = $result->fetch_assoc()) {
            $rowcount++;

            if ($rowcount % 2 == 0) // even 
                echo "<tr bgcolor='antiquewhite'>";
            else
                echo "<tr bgcolor='lightpink'>";

            // THIS PUTS THE ID NOS IN THE BOXES 
            //echo "<td>" . $row["id"] . "</td>"; 
            echo "<td style='vertical-align:top'>" . $row["id"] . "</td>";
            echo "<td> &nbsp; </td> ";
            echo "<td style='text-align:center'>" . $row["datetimeStamp"] . "</td>";
            echo "<td> &nbsp; </td> ";
            echo "<td style='text-align:center'>" . $row["username"] . "</td>";
            echo "<td> &nbsp; </td> ";
            echo "<td style='text-align:center'>" . $row["godzillaCount"] . "</td>";
            echo "<td> &nbsp; </td> ";
            echo "<td style='text-align:center'>" . $row["fryCount"] . "</td>";
            echo "<td> &nbsp; </td> ";
            echo "<td style='text-align:center'>" . $row["okraCount"] . "</td>";
            echo "<td> &nbsp; </td> ";
            echo "<td style='text-align:center'>" . $row["elvisCount"] . "</td>";            


            // echo "<td>" . madLibVersion($row) . "</td>";
            // echo "<td style='vertical-align:bottom'>" . madLibVersion($row) . "</td>";

            echo "</tr>";
        }

        echo "</table>";
    } 
    else 
    {
        echo "0 results";
    }

}

function getColumn($column)  # scrubs output
{
global $row;
return htmlspecialchars($row[$column]);  
}



function madLibVersion($row)
{
    $username=getColumn("username");
    

// echo "
return "
<p>" . $username . "</p>
<!-- ALEX WONDERS IF THIS PUTS THE NAMES IN ALPHABETICAL ORDER INSTEAD OF ID ORDER -->

";

}

// Create connection object
$user = "jmchattie1";  
$conn = mysqli_connect("localhost",$user,$user,$user);

if (mysqli_connect_errno()) {
  echo "<b>Failed to connect to MySQL: " . mysqli_connect_error() . "</b>";
  // consider loaded an error page here
}


// SHOULD ALEX PUT AN ORDER BY ID CLAUSE IN HERE???
$sql = "SELECT * FROM orders";
// $sql = "SELECT * FROM madLib WHERE deleted_on is NULL;"; 
// $sql = "SELECT * FROM madLib";
$result = $conn->query($sql);

// END OF MADLIB APPROPRIATION IN   HEAD


// local php startup code goes here 
?>
</head>
<body>
<p> Welcome to my Lab 25 website! </p>
This page is only for administrators!!!

<!-- ADDED THIS BODY SCRIPT FROM MADLIB LAB 21 22 ENHANCED -->
<?php printTable($result); ?>


<?php footer(); ?>
</body>
</html>
