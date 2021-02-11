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
                        <form id="LoginForm">
                            <input type="text" placeholder="Nom utilisateur">
                            <input type="text" placeholder="Mot de passe">
                            <a href="login.php"><button type="submit" class="btn">Se connecter</button></a>
                            <a href="">Mot de passe oublié</a>
                        </form>

                        <form id="RegForm">
                            <input type="text" placeholder="Nom utilisateur">
                            <input type="Adresse mail" placeholder="Adresse mail">
                            <input type="text" placeholder="Mot de passe">
                            <a href="signup.php"><button type="submit" class="btn">S'enregistrer</button></a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

   
<?php
    include_once 'footer.php';

?>