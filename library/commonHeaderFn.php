<!--  I honor Parkland's core values by affirming that I have 
followed all academic integrity guidelines for this work.
JMCHATTIE1
CSC155201F -->

<?php
/*
anti cache code from:
https://stackoverflow.com/questions/13640109/how-to-prevent-browser-cache-for-php-site
*/
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

function header2(){
// header model  https://www.w3schools.com/php/func_network_header.asp & slide 4 of Ken's asgnmt
if(isset($_COOKIE["prefName"]))
{
    $prefName = $_COOKIE["prefName"];
}
else
{
    $prefName = "friend";
}


echo "<h1>Welcome, $prefName!</h1><br>";
echo "<strong>This is Alex's CSC155201F Mock Emporium!</strong><br>";
echo "<b><em>--this is Alex, here:</em></b><br>";
// echo "<img src='library/images/avatar_copy_copy.png' alt='Alex avatar' width='462' height='698'>";
echo "<img src='library/images/avatar_w300xh453.png' alt='Alex avatar' width='300' height='453'><br>";

echo "<b><em>--and these are Alex's demo wares!:</em></b><br>";
echo "<b>Godzilla costumes*French fries*okra*Elvis outfits</b><br>";
echo "<img src='library/images/godzilla_w100h108.jpg' alt='Godzilla' width='100'>";
echo "<img src='library/images/bigfry_w100h151.jpg' alt='French fry' width='100'>";
echo "<img src='library/images/okra_w100h100.png' alt='okra' width='100'>";
echo " &nbsp; &nbsp; &nbsp; ";
echo "<img src='library/images/elvis_w100h112.jpg' alt='Elvis' width='100'>";
echo "<br>";
echo "<b><em>Please click on the item links below to acquire these wares!</em></b><br>";
echo "<br>";


}

?>
