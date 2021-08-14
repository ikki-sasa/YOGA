<?php
    include_once 'header.php';

?>
<?php
if (isset($_SESSION["useruid"])) {
                                    echo'<p>Bonjour est bienvenue " . $_SESSION["useruid"] . "</p>';
                                    // echo'<li><a href="includes/logout.inc.php">Log out</a></li>';
                                }
                                // else {
                                //     echo'<li><a href="signup.php">Sign up</a></li>';
                                //     echo'<li><a href="login.php">Log in</a></li>';
                                // }
?>
 

 
