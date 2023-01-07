<?php
error_reporting(0);
$id_client = ($_POST["id_client"]);
$nom =($_POST["nom"]);
$prenom =($_POST["prenom"]);
$adresse =($_POST["adresse"]);
$telephone =($_POST["telephone"]);
$facture =($_POST["facture"]);
$no_chambre =($_POST["no_chambre"]);
$mail =($_POST["mail"]);
$date_debut=($_POST["date_debut"]);
$date_fin=($_POST["date_fin"]);
$host="postgresql-zakarie.alwaysdata.net";
$port="5432";
$dbname="zakarie_95";
$user="zakarie";
$pasbd="douglass_95@";
echo "<h1>etre en train d'analyser</h1>";
//$dbconn = pg_connect("host=postgresql-zakarie.alwaysdata.net dbname=zakarie_95 user=zakarie password=douglass_95@");

try{
    $conn=new PDO("pgsql:host=$host;port=$port;dbname=$dbname",$user,$pasbd);
    pg_set_client_encoding($conn,"utf8");
    $sql = "insert into client values ('$id_client','$nom','$prenom','$adresse','$telephone','$facture','$no_chambre','$mail')" ;

  //  $sql="select * from";
    if($result = $conn->query($sql)){
        $sql = "insert into  \"public\".\"Habite\" values ('$id_client','$date_debut','$date_fin','$no_chambre')" ;
        $result=$conn->query($sql);
        echo "<script>alert('ajouter avec succes')</script>";
        Header("Refresh:1;url=serveur.php");
    }else{
        echo "<script>alert('ajouter avec echec')</script>";
        Header("Refresh:1;url=serveur.php");
    };
    pg_free_result($result);
    pg_close($conn);
}catch (Exception $e) {
    die("<br>" . "Error!:" . $e->getMessage() . '<br>');
}
