<?php
//envoyer le formulaire 
if (isset($_POST['submit'])) {   //variables+
    $name = htmlspecialchars(trim($_POST['nom']));
    $username = htmlspecialchars(trim($_POST['prenom']));
    $email = htmlspecialchars(trim($_POST['email']));
    $password = htmlspecialchars(trim($_POST['password']));
    $repeatpassword = htmlspecialchars(trim($_POST['repeatpassword']));
    //verifier si les champs sont pas vide
    if (!empty($name) &&!empty($username)   && !empty($email) && !empty($password) && !empty($repeatpassword)) {
        if ($password == $repeatpassword) {
            if (strlen($password) > 5) {
            
                $bdd = mysqli_connect('localhost', 'root', '', 'utilisateurs') or die('erreur');
                $password = password_hash($password, PASSWORD_BCRYPT, ['cost' => 15]);
                $request = "INSERT INTO utilisateurs(email, nom, prenom, password) VALUES('$email','$name','$username', '$password');";
                $query = mysqli_query($bdd, $request);
                die("inscription terminé. <a href= 'connexion.php'> connectez vous </a>.");
               
                 
            } else echo "mot de passe trop court";
        } else echo "mot de passe erroné";
    } else echo "veuillez saisir tous les champs";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet"> -->
    <title>inscription</title>
</head>

<body>
    <header>
    <?php
        include('header.php');

        ?>


        <h1>INSCRIPTION</h1>
    </header>
    <main>
        <div class="container">
            <form action="#" method="post">

                <label for="nom">nom :</label>
                <input type="text" id="nom" name="nom">

 
                <label for="prenom">prenom:</label>
                <input type="text" id="prenom" name="prenom">
                
                <label for="email">email:</label>
                <input type="email" id="email" name="email">
                
                <label for="password">Password:</label>
                <input type="password" id="password" name="password">

                <label for="repeatpasword">Confirm the password:</label>
                <input type="password" id="repeatpassword" name="repeatpassword">

                <div class="form-example">
                    <input type="submit" name="submit" value="valider!">
                </div>
            </form>
        </div>

    </main>


</body>

</html>