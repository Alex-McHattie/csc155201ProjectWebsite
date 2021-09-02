<html>
<head>


<!--  I honor Parkland's core values by affirming that I have
followed all academic integrity guidelines for this work.
JMCHATTIE1
CSC155201F -->


<title>Lab 25 Admin Users Page</title>


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
        echo "<th>" . "User Names" . "</th>";
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

            echo "<td>" . madLibVersion($row) . "</td>";
            // echo "<td style='vertical-align:bottom'>" . madLibVersion($row) . "</td>";

            // data manipulation buttons
            // NOT NEEDED FOR LAB 25 USER LIST DISPLAY SO ALEX REMOVED THEM
            /*
            echo "<td style='vertical-align:top'>";
            editImage($row["id"]);
            echo "</td>";

            echo "<td style='vertical-align:top'>";
            deleteConfirmButton($row["id"], $row["critter"]);
            echo "</td>";
            */

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
$sql = "SELECT id, username FROM users";
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
