<?php
    error_reporting(0);
    $id_serveur = ($_POST["id_serveur"]);
    $telephone =($_POST["telephone"]);
    $host="postgresql-zakarie.alwaysdata.net";
    $port="5432";
    $dbname="zakarie_95";
    $user="zakarie";
    $pasbd="douglass_95@";
    echo "hello\n";
    //$dbconn = pg_connect("host=postgresql-zakarie.alwaysdata.net dbname=zakarie_95 user=zakarie password=douglass_95@");

    try{
        $conn=new PDO("pgsql:host=$host;port=$port;dbname=$dbname",$user,$pasbd);
        pg_set_client_encoding($conn,"utf8");
        $sql = "select * from service where id_service='$id_serveur' and telephone='$telephone'" ;
        $result = $conn->query($sql);
        if($result->rowCount()>0){
            header('Location:serveur.php');
            $all=$result->fetchAll();
            foreach ($all as $ligne){
                echo 'id_service: ',$ligne[0],' telephone:',$ligne[3],"\n";
            }
        }else{
            header('Location:login.html');
            echo "<script>alert(\"interdit d'entrer, repeter input votre information\")</script>";
        }
    }catch (Exception $e){
    die("<br>"."Error!:".$e->getMessage().'<br>');
}



