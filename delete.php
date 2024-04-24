<?php


include_once("main.php");

if(!empty($_GET["id"])){
    $query = "DELETE FROM partenaires where id=:id";
    $objstmt = $pdo->prepare($query);
    $objstmt->execute(["id"=>$_GET["id"]]);
    $objstmt->closeCursor();
    header("Location:partenaire.php");

    


}

?>