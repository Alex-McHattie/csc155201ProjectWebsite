<html>
<head>

<!--  I honor Parkland's core values by affirming that I have
followed all academic integrity guidelines for this work.
JMCHATTIE1
CSC155201F -->

<title>Lab 24 New User Page</title>
<?php 
// php library loading first
require("library/phpfunctions.php");
// secure_test();

// local php functions go here 
// local php startup code goes here 

$formerror = "&nbsp;";
$conn = getConn();

if (isset($_POST['submit']))
{
    if ($_POST['submit'] == 'Create New User')
    {
    echo 'creating new user';
    if (empty($_POST['username155']))
        {
            $formerror = 'USERNAME REQUIRED';
        }
        else if (empty($_POST['password155']))
        {
            $formerror = 'PASSWORD REQUIRED';
        }
        else if ( $_POST['password155'] != $_POST['password155confirm'])
        {
            $formerror = 'PASSWORDS DO NOT MATCH';
        }
        else if ( lookupUsername($conn, $_POST['username155']) != 0 )
        {
            $formerror = 'Username already exists';
        }
        else
        {
            echo 'time to create a new user!';
            // Right way to do it!
            // prepare and bind

            $stmt = $conn->prepare("INSERT INTO users (username, encrypted_password, email, usergroup) VALUES (?, ?, ?, ?)");
            $stmt->bind_param("ssss", $username, $encrypted_password, $email, $usergroup);
        
            // set parameters and execute
            $username = getPost('username155');
            $encrypted_password = password_hash($_POST['password155'], PASSWORD_DEFAULT);
            $email = getPost('email155');
            $usergroup = getPost('usergroup155');
        
            $stmt->execute();
            header("Location: login.php"); 

        }
    }
    else
    {
        // header("Location: welcome.php");
        // this is in Ken's code, but this really is not correct for the insertUser.php
        // whether or not the new user inserts the correct info or hits the cancel button, this should go back to the login page.
        header("Location: login.php");
    }
}

?>
</head>
<body>

<!-- this code is from Hour 24 slide 3 9:20 -->
<table align='center'> 
<form method='POST'>
<tr><td colspan='2' align='center'>This is a class testing site, please do not enter real passwords!</td></tr>
<tr><td align='right'>New Username:</td><td><input type='text' name='username155' 
                           value='<?php echo getPost("username155"); ?>'></td></tr>
<tr><td align='right'>New Password:</td><td><input type='password' name='password155' 
                           value='<?php echo getPost("password155"); ?>'></td></tr>
<tr><td align='right'>Confirm Password:</td><td><input type='password' name='password155confirm' 
                           value='<?php echo getPost("password155confirm");?>'></td></tr>
<tr><td align='right'>Email:</td><td><input type='text' name='email155' 
                           value='<?php echo getPost("email155");?>'></td></tr>
<tr><td align='right'>User Group:</td><td><select name='usergroup155'>
<option>user</option>
<option>admin</option>
</select>
</td></tr>
<tr><td colspan='2' align='center'><?php echo $formerror;?></td></tr>
<tr><td colspan='2' align='center'>
<input type='submit' name='submit' value='Create New User'>
<input type='submit' name='submit' value='Cancel'>
</td></tr>
</form>
</table>

<!-- <?php footer() ?> -->
</body>
</html>
