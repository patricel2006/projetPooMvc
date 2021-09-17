<?php include(VIEWS . '_partials/header.php'); ?>

<!-- verifier que l'utilisateur est connecté -->

<!-- <form action="<?= BASE_PATH . 'avis/add' ?>" method="post" enctype="multipart/form-data">
    <fieldset>
        <!--<input type="hidden" name="id" value="<?php //echo  $produit['id'] ?? 0; ?>">-->
        <div class="form-group">
            <label for="exampleInputPassword1" class="form-label mt-4">Commentaire</label>
            <input name="commentaire" type="textarea" value="<?php //echo $produit['nom'] ?? ''; ?>" class="form-control" id="exampleInputPassword1" placeholder="Commentaire">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1" class="form-label mt-2">Prénom</label>
            <input name="prenom" type="text" value="<?php //echo $produit['prix'] ?? ''; ?>" class="form-control" id="exampleInputPassword1" placeholder="Prénom">
        </div>



        <button type="submit" class="btn btn-light mt-2 mb-5">Valider</button>
    </fieldset>
</form>
 -->


<?php include(VIEWS . '_partials/footer.php'); ?>