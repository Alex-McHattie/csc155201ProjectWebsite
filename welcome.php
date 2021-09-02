<html>
<head>

<!--  I honor Parkland's core values by affirming that I have
followed all academic integrity guidelines for this work.
JMCHATTIE1
CSC155201F -->

<title>Welcome Page</title>


<?php 
// php library loading first
require("library/commonHeaderFn.php");    
require("library/phpfunctions.php");
// local php functions go here 
// local php startup code goes here 
secure_test();   // from 14-mysite



// secure_startup();  // called on all 'secure' pages

if (isset($_POST['submit']))
{
    setcookie("prefName",$_POST['prefName'], time() + (60 * 3)); // 86400 = 1 day ALEX chose a few minutess vs 30 days
    $prefNamemsg = "cookie set";
}
else
{
    $prefNamemsg = "cookie not set";
}

?>
</head>
<body>
<?php header2() ?>

<form method='POST'>
<table border='1'> 
<!-- <table> -->
<tr>
<td colspan='3' >Enter your preferred name here: </td><td><input type=text name='prefName'></td>
</tr>
<tr>
<td colspan='2'><input type='submit' name='submit' value='Set Attributes'</td>
</td><td><?php echo $prefNamemsg;?></td>
</tr>
</table>
</form>

<?php footer() ?>
<!-- note Ken's ommission of ; after footer() -->
</body>
</html>
