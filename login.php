<html>
<head>

<!--  I honor Parkland's core values by affirming that I have
followed all academic integrity guidelines for this work.
JMCHATTIE1
CSC155201F -->


<title>Site Login</title>
<?php 
// php library loading first
require("library/phpfunctions.php");

session_start();

// local php functions go here 

/*    KEN MOVED THIS FUNCTION TO phpfunctionsphp IN 14-MYSITE
function getPost( $name )  #Ken's version 2 from Slide 7
{
COMMENT:  check to see if it been used, if it has, return it
    if ( isset($_POST[$name]) ) 
    {
        return htmlspecialchars($_POST[$name]);
    }
    return "";
}
*/


// local php startup code goes here 
if (isset($_POST['submit']))
{
    // this script is being reloaded
    if ($_POST['submit'] == 'Log In')
    {
        // log in attempt
        if ($_POST['username155'] == 'alex' &&
            $_POST['password155'] == '1234') 
        {
            $_SESSION['user'] = $_POST['username155'];
            header("Location: welcome.php");
        }
        else
        {
            echo 'Invalid username and/or password';
            echo "Hint: try 'alex' and '1234'";
        }
    }
    else if ($_POST['submit'] == 'Forgot your password?')
    {
            echo "Hint: try 'alex' and '1234'";
    }
    else if ($_POST['submit'] == 'Create New Account')
    {
            echo "OK: I created username: 'alex' and password:'1234' (-ha! -not really...)";
    }

}
else
{
    // no form information passed
}



?>
</head>
<body>

<h2>DO NOT USE A REAL PASSWORD! THIS IS A CLASS SITE!!!</h2>
<form method='POST'>
Username:
<input type='text' name='username155' value= '<?php echo getPost("username155");?>'> <br>
Password:
<input type='password' name='password155' value= '<?php echo getPost("password155");?>'>DO NOT USE A REAL PASSWORD<br>
<input type='submit' name='submit' value='Log In'>
<input type='submit' name='submit' value='Create New Account'>
<input type='submit' name='submit' value='Forgot your password?'>
</form>

<?php footer() ?>

</body>
</html>
