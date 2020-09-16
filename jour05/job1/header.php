<?php

session_start();
if (isset($_POST['deconnexion'])) {
    session_destroy();
    header('location:connexion.php');
}
?>



<!-- si je suis connecté accueil  inscription et connexion s'affiche -->
<?php
 if (isset($_SESSION['email'])) {
    echo "<nav>
<<a href='index.php'> accueil</a>
<div class='form-example'>
        <input  type='submit' name='deconnexion' value='Déconnexion'></input>
        </div>
        </form>
</nav>";
} else {
    echo "<nav><a href='index.php'> accueil</a> 
 <a href='inscription.php'>inscription</a>
 <a href='connexion.php'>connexion</a>
 </nav>";
}

?>