<?php include(VIEWS . '_partials/header.php');

if (!empty($_SESSION['membre']) && $_SESSION['membre']['role'] == 'ROLE_ADMIN') :

?>

    <a class='btn btn-primary mb-2  mat-2' href="<?= BASE_PATH . 'categories/add'; ?>">ajouter</a>

    <table class="table table-dark">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nom</th>
                <th scope="row">Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($categories as $categorie) : ?>
                <tr>
                    <th scope="row"><?= $categorie['id'] ?></th>
                    <td><?= $categorie['nom'] ?></td>
                    <td>
                        <a href="<?php echo BASE_PATH . 'categories/add?id=' . $categorie['id'] ?>" class="btn btn-light">Modifier</a>
                        <a href="<?= BASE_PATH . 'categories/delete?id=' . $categorie['id'] ?>" class="btn btn-danger">Supprimer</a>
                    </td>

                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

<?php
else :
    echo '<h1>Vous n\'avez pas les autorisations pour cette page, <a href="' . BASE_PATH . '" >Retour à l\'acceuil</a></h1>';

endif;
?>

<?php include(VIEWS . '_partials/footer.php'); ?>