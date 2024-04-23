<?php

$partenaire=true;
include_once("header.php");
include_once("main.php");


if(!empty($_POST["inputemail"]) &&!empty($_POST["inputnomFamilleEnfant"])
                                &&!empty($_POST["inputprenomEnfant"])
                                &&!empty($_POST["inputnomFamilleParent"])
                                &&!empty($_POST["inputnomFamilleLGO"])
                                &&!empty($_POST["inputprenomLGO"])
                                &&!empty($_POST["inputserviceLGO"])
                                &&!empty($_POST["inputstructurePartenaire"])
                                &&!empty($_POST["inputgroupePartenaire"]))
                               
                               {
        $query="INSERT INTO partenaires(email,
                                        nomFamilleEnfant,
                                        prenomEnfant,
                                        nomFamilleParent,
                                        nomFamilleLGO,
                                        prenomLGO,
                                        serviceLGO,
                                        structurePartenaire,
                                        groupePartenaire)

                            values (:email,
                                    :nomFamilleEnfant,
                                    :prenomEnfant,
                                    :nomFamilleParent,
                                    :nomFamilleLGO,
                                    :prenomLGO,
                                    :serviceLGO,
                                    :structurePartenaire,
                                    :groupePartenaire)";

        $pdostmt=$pdo->prepare($query);

        $pdostmt->execute([
                            "email"=>$_POST["inputemail"],
                            "nomFamilleEnfant"=>$_POST["inputnomFamilleEnfant"],
                            "prenomEnfant"=>$_POST["inputprenomEnfant"],
                            "nomFamilleParent"=>$_POST["inputnomFamilleParent"],
                            "nomFamilleLGO"=>$_POST["inputnomFamilleLGO"],
                            "prenomLGO"=>$_POST["inputprenomLGO"],
                            "serviceLGO"=>$_POST["inputserviceLGO"],
                            "structurePartenaire"=>$_POST["inputstructurePartenaire"],
                            "groupePartenaire"=>$_POST["inputgroupePartenaire"]]);

        $pdostmt->closeCursor();
        header("Location:partenaire.php");
 }

?>

<h1 class="mt-5">Ajouter un partenaire</h1>

<form class="row g-3" method="POST">
  <div class="col-md-4">
    <label for="inputemail" class="form-label">Email</label>
    <input type="email" class="form-control" id="inputemail" name="inputemail">
  </div>
  <div class="col-12">
    <label for="inputnomFamilleEnfant" class="form-label">nom de famille enfant</label>
    <input type="text" class="form-control" id="inputnomFamilleEnfant" name="inputnomFamilleEnfant">
  </div>
  <div class="col-12">
    <label for="inputprenomEnfant" class="form-label">prénom enfant</label>
    <input type="text" class="form-control" id="inputprenomEnfant" name="inputprenomEnfant">
  </div>
  <div class="col-12">
    <label for="inputnomFamilleParent" class="form-label">nom de famille parent</label>
    <input type="text" class="form-control" id="inputnomFamilleParent" name="inputnomFamilleParent">
  </div>
  
  <div class="col-12">
    <label for="inputnomFamilleLGO" class="form-label">nom de famille LGO</label>
    <input type="text" class="form-control" id="inputnomFamilleLGO" name="inputnomFamilleLGO">
  </div>
  
  <div class="col-12">
    <label for="inputprenomLGO" class="form-label">prenom LGO</label>
    <input type="text" class="form-control" id="inputprenomLGO" name="inputprenomLGO">
  </div>
  
  <div class="col-12">
    <label for="inputserviceLGO" class="form-label">serviceLGO</label>
    <input type="text" class="form-control" id="inputserviceLGO" name="inputserviceLGO">
  </div>
  
  <div class="col-12">
    <label for="inputstructurePartenaire" class="form-label">structure partenaire</label>
    <input type="text" class="form-control" id="inputstructurePartenaire" name="inputstructurePartenaire">
  </div>

  <div class="col-12">
    <label for="inputgroupePartenaire" class="form-label">groupe partenaire</label>
    <input type="text" class="form-control" id="inputgroupePartenaire" name="inputgroupePartenaire">
  </div>
  
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Ajouter</button>
  </div>
</form>


</main>

<?php

include_once("footer.php");

?>