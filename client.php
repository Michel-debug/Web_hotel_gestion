<?php


if (isset($_POST['nom']) and isset($_POST['prenom']) and isset($_POST['id'])) {
    // Connexion, sélection de la base de données
    $host="postgresql-zakarie.alwaysdata.net";
    $port="5432";
    $dbname="zakarie_95";
    $user="zakarie";
    $pasbd="douglass_95@";
    $conn=new PDO("pgsql:host=$host;port=$port;dbname=$dbname",$user,$pasbd);

    // Exécution de la requête SQL
    $query = 'SELECT * FROM "public"."client" WHERE id_client=\'' . $_POST['id'] . '\' AND nom=\'' . $_POST['nom'] . '\' AND prenom=\'' . $_POST['prenom'] . '\'';

    $result = $conn->query($query) or die('Échec de la requête : ' . pg_last_error());


  //  setcookie('mycookie','101');

    if($result->rowCount()>0) {
        $line=$result->fetchAll();
        foreach ($line as $col_value) {
            $s = $col_value;
            setcookie('mycookie', $col_value[6]);
        }
    }


    // Libère le résultat

    // Ferme la connexion


    if (intval($s) > 0) {
       Header("Location:Choix_chambre.php");

    } else {
            echo "<script>alert('faux,Veulliez réessayer')</script>";
            Header("Refresh:1;url=client.html");
    }
} else {
    echo "<script>alert('faux,Veulliez réessayer')</script>";
    Header("Refresh:1;url=client.html");
}
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha512-L7MWcK7FNPcwNqnLdZq86lTHYLdQqZaz5YcAgE+5cnGmlw8JT03QB2+oxL100UeB6RlzZLUxCGSS4/++mNZdxw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="/css/utils.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/login.css">
    <title>Login</title>
</head>
<body>
<header id="home" class="main-header">
    <div class="navbar">
        <h1 class="brand">
            <i class="fas fa-hotel"></i>
            <span>Domi</span> Hotel
        </h1>
        <nav>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#rooms">Rooms</a></li>
                <li><a href="blog.html">Blogs</a></li>
                <li><a href="#contact">Contact</a></li>
                <li><a href="client.html" style="color:red"><b>Connexion</b></a></li>
            </ul>
        </nav>
    </div>

    <div class="content">
        <form action="client.php" class="login-form" method="post">
            <h1 style="color:#007bff;font-weight: bold;">Log In</h1>

            <div class="txtb">
                <input type="text" style="border: #17a2b8 2px solid;border-radius: 10px" placeholder="nom_client" name="nom">
            </div>

            <div class="txtb">
                <input type="text" style="border: #17a2b8 2px solid;border-radius: 10px" placeholder="prenom_client" name="prenom">
            </div>
            <div class="txtb">
                <input type="text" style="border: #17a2b8 2px solid;border-radius: 10px" placeholder="id_client" name="id">
            </div>
            <a class="logbtn" value="Client" href="login.html" >serveur</a>
            <input type="submit" class="logbtn" value="Log In">
            <div class="bottom-text" >
                <b>Don't have account?</b> <a href="#">Sign up</a>
            </div>

        </form>

        <script type="text/javascript">
            $(".txtb input").on("focus", function(){
                $(this).addClass("focus");
            });

            $(".txtb input").on("blur", function(){
                if($(this).val() == "")
                    $(this).removeClass("focus");
            });
        </script>

    </div>
</header>


<footer class="footer bg-light">
    <div class="social">
        <a href="#"><i class="fab fa-facebook fa-2x"></i></a>
        <a href="#"><i class="fab fa-twitter fa-2x"></i></a>
        <a href="#"><i class="fab fa-youtube fa-2x"></i></a>
        <a href="#"><i class="fab fa-linkedin fa-2x"></i></a>
    </div>
    <p>Copyright &copy 2022 - Domi Hotel  Junjie Karim Zakaria</p>
</footer>
</body>
</html>


