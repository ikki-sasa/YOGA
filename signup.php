<?php
    include_once 'header.php';

?>
    <div class="account-page">
        <div class="container">
            <div class="row">
                <div class="col-2">
                    <img src="img/yoga-day.jpg"  alt="yoga-day">
                </div>
                <div class="col-2">
                    <div class="form-container">
                        <!-- <div class="form-btn">
                            <span onclick="login()">Se connecter</span>
                            <span onclick="register()">S'enregistrer</span>
                            <hr id="Indicator">
                        </div> -->
                        <!-- <form  action="includes/login.inc.php" id="LoginForm" method="post">
                            <input type="text" placeholder="Nom utilisateur">
                            <input type="text" placeholder="Mot de passe">
                            <a href="login.php"><button type="submit" class="btn">Se connecter</button></a>
                            <a href="">Mot de passe oublié</a>
                        </form> -->
                        <h5>S'enregistrer</h5>
                        <form  action="includes/signup.inc.php" id="LoginForm" method="post">
                            <input type="text" name="uid" placeholder="Nom utilisateur">
                            <input type="text" name="email" placeholder="Adresse mail">
                            <input type="text" name="uid" placeholder="Nom d'utilisateur">
                            <input type="password" name="pwd" placeholder="Mot de passe">
                            <input type="password" name="pwdrepeat" placeholder="Saisisez à nouveau le mot de passe">
                            <a href="signup.php"><button type="submit" name="submit" class="btn">S'enregistrer</button></a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
    if (isset($_GET["error"])) {
        if($_GET["error"] == "emptyinput") {
            echo "<p>Fill in all fields !</p>";
        }
        else if($_GET["error"] == "invaliduid") {
            echo "<p>Chosse a proper username !</p>";
        }
        else if($_GET["error"] == "invalidemail") {
            echo "<p>Chosse a proper email!</p>";
        }
        else if($_GET["error"] == "passwordsdontmatch") {
            echo "<p>passwords dont match!</p>";
        }
        else if($_GET["error"] == "stmtfailed") {
            echo "<p>Something went wrong, try again!</p>";
        }
        else if($_GET["error"] == "usernametaken") {
            echo "<p>Username already taken!</p>";
        }
        else if($_GET["error"] == "none") {
            echo "<p>You have signed up!</p>";
        }
    }
    ?>
   
<?php
    include_once 'footer.php';

?>