
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
    <title>serveur</title>
</head>
<body>
<header id="home" class="formeservice">
    <div class="navbar">
        <h1 class="brand">
            <i class="fas fa-hotel"></i>
            <span>Domi</span> Hotel
        </h1>
        <nav>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="index.html">About</a></li>
                <li><a href="index.html">Rooms</a></li>
                <li><a href="blog.html">Blogs</a></li>
                <li><a href="index.html">Contact</a></li>
                <li><a href="index.html" style="color:green"><b>Déconnexion</b></a></li>
            </ul>
        </nav>
    </div>
    <div class="Table_creer">
        <form method="post" action="ajouter.php" class="table_form">
            <p style="color:black; font-weight: bold; font-size: ">Attribuer un chambre à un client</p>
            <div>id_client:<input type="text" style="border: #17a2b8 2px solid;border-radius: 10px;display: inline"  name="id_client"></div>
            <div>nom:<input type="text" style="border: #17a2b8 2px solid;border-radius: 10px" " name="nom"></div>
            <div>prenom:<input type="text" style="border: #17a2b8 2px solid;border-radius: 10px"  name="prenom"></div>
            <div>adresse:<input type="text" style="border: #17a2b8 2px solid;border-radius: 10px" name="adresse"></div>
            <div>telephone:<input type="text" style="border: #17a2b8 2px solid;border-radius: 10px" name="telephone"></div>
            <div>facture:<input type="text" style="border: #17a2b8 2px solid;border-radius: 10px" name="facture"></div>
            <div>no_chambre:<input type="text" style="border: #17a2b8 2px solid;border-radius: 10px"  name="no_chambre"></div>
            <div>mail:<input type="text" style="border: #17a2b8 2px solid;border-radius: 10px" name="mail"></div>
            <div>date_debut:<input type="text" style="border: #17a2b8 2px solid;border-radius: 10px" name="date_debut"></div>
            <div>date_fin:<input type="text" style="border: #17a2b8 2px solid;border-radius: 10px" name="date_fin"></div>
            <input type="submit" class="logbtn" value="Ajouter un client">
        </form>
        <form method="post" action="supprimer.php"  class="table_form">

            <div>supprime un client:<input type="text" style="border: #17a2b8 2px solid;border-radius: 10px;" placeholder="input id_client" name="id_client"></div>
            <input type="submit" class="logbtn" value="Supprimer un client">
        </form>

    </div>
    <div class="Table_cherche">
    <?php
    $host="postgresql-zakarie.alwaysdata.net";
    $port="5432";
    $dbname="zakarie_95";
    $user="zakarie";
    $pasbd="douglass_95@";
    $conn=new PDO("pgsql:host=$host;port=$port;dbname=$dbname",$user,$pasbd);
    $stat=$conn->query("select * from client");
    if($stat->rowCount()>0){
        echo"<table border='2' style='margin:0 auto;color:white;border: black solid 2px'> <tr> <th>id_client</th> 
        <th>nom</th>
        <th>prenom</th>
        <th>adresse</th>
        <th>telephone</th>
        <th>facture</th>
        <th>no_chambre</th>
        <th>mail</th>
        </tr>";
        $all=$stat->fetchAll();
        foreach ($all as $ligne){
            echo"<tr> <td> $ligne[0]</td>
            <td> $ligne[1]</td>
            <td> $ligne[2]</td>
            <td> $ligne[3]</td>
            <td> $ligne[4]</td>
            <td> $ligne[5]</td>
            <td> $ligne[6]</td>
            <td> $ligne[7]</td>
            </tr>";
        }
        echo "</table>";
    }

?>
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