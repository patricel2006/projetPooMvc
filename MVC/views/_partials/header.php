<!doctype html>
<html lang="en">

<head>
    <title><?= CONFIG['app']['name'] ?></title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/5.1.1/cyborg/bootstrap.min.css" integrity="sha512-lClzayU/EqX2Du6vlZ1CDtYxqI311AxmlqlUH6oqJvSb8bcZ+04JsCnZWzh9lEOUsER0vzz2r69nRBnT1+ZJ2w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body style='background-image: none;'>

    <nav class="navbar navbar-expand-sm navbar-dark bg-dark ps-3 pe-2">
        <a class="navbar-brand" href="<?= BASE_PATH ?>"><?= CONFIG['app']['name'] ?></a>
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation"></button>
        <div class="ms-2 collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav me-auto">


                <?php if (!empty($_SESSION['panier'])) : ?>
                    <li>
                        <a href="<?= BASE_PATH . 'panier/list' ?>" class="btn btn-light">Voir le panier</a>
                    </li>
                <?php endif; ?>

            </ul>
            <form class="d-flex">
                <input class="form-control me-sm-2" type="text" placeholder="Search">
                <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
            </form>
            <?php if (!empty($_SESSION['membre'])) : ?>
                <div class="nav-item  dropdown ms-5 me-5 pe-5">
                    <a class="nav-link  dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-2x"></i></a>
                    <div class="dropdown-menu dropdown-menu-left" aria-labelledby="dropdownId">
                        <?php if (!empty($_SESSION['membre']) && $_SESSION['membre']['role'] == 'ROLE_ADMIN') : ?>
                            <a class="dropdown-item" href="<?= BASE_PATH . 'produits/list' ?>">Gestion des produits</a>
                            <a class="dropdown-item" href="<?= BASE_PATH . 'categories/list' ?>">Gestion des catégories</a>
                            <a class="dropdown-item" href="<?= BASE_PATH . 'produits/recap' ?>">Gestion des commandes</a>
                        <?php else : ?>
                            <a class="dropdown-item" href="">Profil</a>
                            <a class="dropdown-item" href="">Vos commandes</a>

                        <?php endif;
                        if (!empty($_SESSION['membre'])) : ?>
                            <div class="dropdown-divider"></div>
                            <a class="btn btn-success ms-2" href="<?= BASE_PATH . 'user/connexion?action=deconnexion' ?>">Déconnexion</a>
                        <?php endif; ?>


                    </div>
                </div>
            <?php endif; ?>
            <?php if (empty($_SESSION['membre'])) : ?>
                <a class="btn btn-info ms-2" href="<?= BASE_PATH . 'user/inscription' ?>">Inscription</a>
                <a class="btn btn-success ms-2" href="<?= BASE_PATH . 'user/connexion' ?>">Connexion</a>
            <?php endif; ?>
        </div>
    </nav>

    <div class="container mt-3">

        <div class="row">
            <div class="col">

                <?php if (isset($_SESSION['messages'])) : ?>
                    <?php foreach ($_SESSION['messages'] as $type => $messages) : ?>
                        <?php foreach ($messages as $message) : ?>
                            <div class="alert alert-<?= $type ?>"><?= $message ?></div>
                        <?php endforeach; ?>
                    <?php endforeach; ?>
                    <?php unset($_SESSION['messages']); ?>
                <?php endif; ?>