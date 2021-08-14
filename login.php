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
                        <div class="form-btn">
                            <span onclick="login()">Se connecter</span>
                            <span onclick="register()">S'enregistrer</span>
                            <hr id="Indicator">
                        </div>
                        <form  action="includes/login.inc.php" method="post" id="LoginForm">
                            <input type="text" placeholder="Nom utilisateur">
                            <input type="password" placeholder="Mot de passe">
                            <button type="submit" class="btn"> <a href="login.php">Se connecter</button>
                            <a href="">Mot de passe oublié</a>
                        </form>

                        <form action="includes/signup.inc.php" method="post" id="RegForm">
                            <input type="text" placeholder="Nom utilisateur">
                            <input type="email" placeholder="Email"><a href="signup.php">
                            <button type="submit" class="btn">S'enregistrer</button>
                        </form>
                    </div>                    
                </div>
            </div>
        </div>
    </div>

   
<?php
    include_once 'footer.php';

?>