
<?php

error_reporting(0);
$id_client = ($_POST["id_client"]);
$host="postgresql-zakarie.alwaysdata.net";
$port="5432";
$dbname="zakarie_95";
$user="zakarie";
$pasbd="douglass_95@";

//$dbconn = pg_connect("host=postgresql-zakarie.alwaysdata.net dbname=zakarie_95 user=zakarie password=douglass_95@");
echo "<h1>etre en train d'analyser</h1>";
try{
    $conn=new PDO("pgsql:host=$host;port=$port;dbname=$dbname",$user,$pasbd);
    pg_set_client_encoding($conn,"utf8");
    $sql = "delete from client where client.id_client='$id_client'" ;
    if($result = $conn->query($sql)){
        echo "<script>alert('supprimer avec succes')</script>";
        Header("Refresh:1;url=serveur.php");
    }else{
        Header("url=serveur.php");
    };
    pg_free_result($result);
    pg_close($conn);
}catch (Exception $e) {
    die("<br>" . "Error!:" . $e->getMessage() . '<br>');
}

