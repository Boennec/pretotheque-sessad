<?php

$partenaire=true;
include_once("header.php");
include_once("main.php");

if(!empty($_POST)){

    $query="UPDATE partenaires SET email=:email, nomFamilleEnfant=:nomFamilleEnfant, prenomEnfant=:prenomEnfant,
                                nomFamilleParent=:nomFamilleParent, nomFamilleLGO=:nomFamilleLGO, prenomLGO=:prenomLGO,
                                serviceLGO=:serviceLGO, structurePartenaire=:structurePartenaire, 
                                groupePartenaire=:groupePartenaire where id=:id";
    $pdostmt =$pdo->prepare($query);
    $pdostmt->execute([
        "email"=>$_POST["inputemail"],
        "nomFamilleEnfant"=>$_POST["inputnomFamilleEnfant"],
        "prenomEnfant"=>$_POST["inputprenomEnfant"],
        "nomFamilleParent"=>$_POST["inputnomFamilleParent"],
        "nomFamilleLGO"=>$_POST["inputnomFamilleLGO"],
        "prenomLGO"=>$_POST["inputprenomLGO"],
        "serviceLGO"=>$_POST["inputserviceLGO"],
        "structurePartenaire"=>$_POST["inputstructurePartenaire"],
        "groupePartenaire"=>$_POST["inputgroupePartenaire"],
        "id"=>$_POST["myid"]]);

    header("Location:partenaire.php");

}

if(!empty($_GET["id"])){
    
    $query="SELECT * from partenaires where id=:id";
    $pdostmt =$pdo->prepare($query);
    $pdostmt->execute(["id"=>$_GET["id"]]);
    
    
    
    while($row=$pdostmt->fetch(PDO::FETCH_ASSOC)):
?>

<h1 class="mt-5">Modifier un partenaire</h1>

<form class="row g-3" method="POST">
    <input type="hidden" name="myid" value=<?php echo $row["id"] ?>/>
  <div class="col-md-4">
    <label for="inputemail" class="form-label">Email</label>
    <input type="email" class="form-control" id="inputemail" name="inputemail" value="<?php echo $row["email"]  ?>">
  </div>
  <div class="col-12">
    <label for="inputnomFamilleEnfant" class="form-label">nom de famille enfant</label>
    <input type="text" class="form-control" id="inputnomFamilleEnfant" name="inputnomFamilleEnfant" value="<?php echo $row["nomFamilleEnfant"]  ?>">
  </div>
  <div class="col-12">
    <label for="inputprenomEnfant" class="form-label">prénom enfant</label>
    <input type="text" class="form-control" id="inputprenomEnfant" name="inputprenomEnfant" value="<?php echo $row["prenomEnfant"]  ?>" >
  </div>
  <div class="col-12">
    <label for="inputnomFamilleParent" class="form-label">nom de famille parent</label>
    <input type="text" class="form-control" id="inputnomFamilleParent" name="inputnomFamilleParent" value="<?php echo $row["nomFamilleParent"]  ?>">
  </div>
  
  <div class="col-12">
    <label for="inputnomFamilleLGO" class="form-label">nom de famille LGO</label>
    <input type="text" class="form-control" id="inputnomFamilleLGO" name="inputnomFamilleLGO" value="<?php echo $row["nomFamilleLGO"]  ?>">
  </div>
  
  <div class="col-12">
    <label for="inputprenomLGO" class="form-label">prenom LGO</label>
    <input type="text" class="form-control" id="inputprenomLGO" name="inputprenomLGO" value="<?php echo $row["prenomLGO"]  ?>">
  </div>
  
  <div class="col-12">
    <label for="inputserviceLGO" class="form-label">serviceLGO</label>
    <input type="text" class="form-control" id="inputserviceLGO" name="inputserviceLGO" value="<?php echo $row["serviceLGO"]  ?>">
  </div>
  
  <div class="col-12">
    <label for="inputstructurePartenaire" class="form-label">structure partenaire</label>
    <input type="text" class="form-control" id="inputstructurePartenaire" name="inputstructurePartenaire" value="<?php echo $row["structurePartenaire"]  ?>">
  </div>

  <div class="col-12">
    <label for="inputgroupePartenaire" class="form-label">groupe partenaire</label>
    <input type="text" class="form-control" id="inputgroupePartenaire" name="inputgroupePartenaire" value="<?php echo $row["groupePartenaire"]  ?>">
  </div>
  
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Modifier</button>
  </div>
</form>


</main>

<?php
    endwhile;
    $pdostmt->closeCursor();
    
}
?>

<?php
include_once("footer.php");
?>