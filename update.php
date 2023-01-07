<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Choix préférence de votre chambre</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha512-L7MWcK7FNPcwNqnLdZq86lTHYLdQqZaz5YcAgE+5cnGmlw8JT03QB2+oxL100UeB6RlzZLUxCGSS4/++mNZdxw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="/css/utils.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/login.css">
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
        <form action="update.php" method="post" class="table_form">
            <div >
                <label for="fenetre">ouverture des fenetres: </label>
                <input type="checkbox" name="fenetre"  value="false">eteindre
                <input type="checkbox" name="fenetre"  value="true">ouvrir
            </div>
            <div >
                <label for="television">numero chaine de television: : </label>
                <input type="text" name="television" id="television" >
            </div>
            <div >
                <label for="temperature">temperature de la chambre : </label>
                <input type="range" name="temperature" id="temperature"  min="0" max="100">
            </div>
            <div >
                <label for="couleur">couleur de la lumiere : </label>
                <input type="color" name="couleur" id="couleur" >
            </div>
            <div >
                <label for="musique">musique joue: </label>
                <input type="file" name="musique" id="musique" >
            </div>
            <div >
                <input type="submit" value="Update les donnees">
            </div>
        </form>
    </div>
    <div class="Table_cherche">
        <?php
        $host="postgresql-zakarie.alwaysdata.net";
        $port="5432";
        $dbname="zakarie_95";
        $user="zakarie";
        $pasbd="douglass_95@";
        $fenetre=$_POST["fenetre"];
        $television=$_POST["television"];
        $temperature=$_POST["temperature"];
        $couleur=$_POST["couleur"];
        $musique=$_POST["musique"];
        $no_chambre=$_COOKIE['mycookie'];
        $conn=new PDO("pgsql:host=$host;port=$port;dbname=$dbname",$user,$pasbd);
        $stat=$conn->query("update chambre set  television='$television',temperature='$temperature',fenetre='$fenetre',lumiere='$couleur' where no_chambre='$no_chambre'");
        if($stat){
            echo"<script>alert('mise a jour')</script>";
        }else{
            echo"<script>alert('echec !')</script>";
        }
        $stat=$conn->query("select * from chambre where no_chambre='$no_chambre'");
            echo"<table border='2' style='margin:0 auto;color:white;border: black solid 2px'> <tr> 
        <th>no_chambre</th>
        <th>localisation</th>
        <th>type_chambre</th>
        <th>prix_chambre</th>
        <th>prix_telephone</th>
        <th>fenetre</th>
        <th>television</th>
        <th>temperature</th>
        <th>lumiere</th>
        <th>blancherie</th>
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
             <td> $ligne[8]</td>
              <td> $ligne[9]</td>
            </tr>";
            }
            echo "</table>";
          //  Header("Location:Choix_chambre.php");
        ?>
    </div>
</header>
</body>
</html>