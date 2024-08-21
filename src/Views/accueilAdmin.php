<?php
include_once __DIR__ . '/Includes/header.php';
?>
<script defer src="assets/js/scriptAdmin.js"></script>

<div>
    <div class="container mt-5">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Les menus</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Les reservations</button>
            </li>

        </ul>

        <!-- Tab panes -->
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                <p>Contenu de l'onglet Menu.</p>
                <a href="<?php echo HOME_URL . 'ajoutPlat'; ?>"> Ajouter </a>
                <div class="container mt-5">
                    <div class="row">
                        <div class="col-md-3">
                            <!-- Nav tabs verticales -->
                            <ul class="nav flex-column nav-pills" id="myTab" role="tablist" aria-orientation="vertical">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="entrees-tab" data-bs-toggle="tab" data-bs-target="#entrees" type="button" role="tab" aria-controls="entrees" aria-selected="true">Entrées</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="plats-tab" data-bs-toggle="tab" data-bs-target="#plats" type="button" role="tab" aria-controls="plats" aria-selected="false">Plats</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="desserts-tab" data-bs-toggle="tab" data-bs-target="#desserts" type="button" role="tab" aria-controls="desserts" aria-selected="false">Desserts</button>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-9">
                            <!-- Contenu des onglets -->
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="entrees" role="tabpanel" aria-labelledby="entrees-tab">
                                    <h3>Entrées</h3>

                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">Name</th>
                                                <th scope="col">Description</th>
                                                <th scope="col">isRobot</th>
                                                <th scope="col">Price</th>
                                                <th scope="col">Disponible</th>
                                            </tr>
                                        </thead>
                                        <?php foreach ($entrees as $entree)
                                        { ?>
                                            <tbody>
                                                <tr>
                                                    <td><?= $entree['title'] ?></td>
                                                    <td><?= $entree['description'] ?></td>
                                                    <td>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                            <label class="form-check-label" for="flexCheckDefault">
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td><?= $entree['price'] ?></td>
                                                    <td><input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                            <label class="form-check-label" for="flexCheckDefault">
                                                            </label>
                                                            <a href="">
                                                        <img src="assets/imgs/iconCrayon.png" alt="icone pen"></a>
                                                        <a class="supPlat" data-sup="<?= $entree['id_dish'] ?>"><img src="assets/imgs/iconBin.png" alt="icon bin"></a>

                                                        </td>
                                                </tr>


                                            <?php
                                        } ?>
                                            </tbody>
                                    </table>
                                </div>
                                <div class="tab-pane fade" id="plats" role="tabpanel" aria-labelledby="plats-tab">
                                    <h3>Plats</h3>
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">Name</th>
                                                <th scope="col">Description</th>
                                                <th scope="col">isRobot</th>
                                                <th scope="col">Price</th>
                                                <th scope="col">Disponible</th>
                                            </tr>
                                        </thead>
                                        <?php foreach ($plats as $plat)
                                        { ?>
                                            <tbody>
                                                <tr>
                                                    <td><?= $plat['title'] ?></td>
                                                    <td><?= $plat['description'] ?></td>
                                                    <td>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                            <label class="form-check-label" for="flexCheckDefault">
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td><?= $plat['price'] ?></td>
                                                    <td><input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                            <label class="form-check-label" for="flexCheckDefault">
                                                            </label>
                                                            <a href="">
                                                        <img src="assets/imgs/iconCrayon.png" alt="icone pen"></a>
                                                        <a class="supPlat" data-sup="<?= $plat['id_dish'] ?>"><img src="assets/imgs/iconBin.png" alt="icon bin"></a>

                                                        </td>
                                                </tr>


                                            <?php
                                        } ?>
                                            </tbody>
                                    </table>
                                </div>
                                </div>
                                <div class="tab-pane fade" id="desserts" role="tabpanel" aria-labelledby="desserts-tab">
                                    <h3>Desserts</h3>
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">Name</th>
                                                <th scope="col">Description</th>
                                                <th scope="col">isRobot</th>
                                                <th scope="col">Price</th>
                                                <th scope="col">Disponible</th>
                                            </tr>
                                        </thead>
                                        <?php foreach ($desserts as $dessert)
                                        { ?>
                                            <tbody>
                                                <tr>
                                                    <td><?= $dessert['title'] ?></td>
                                                    <td><?= $dessert['description'] ?></td>
                                                    <td>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                            <label class="form-check-label" for="flexCheckDefault">
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td><?= $dessert['price'] ?></td>
                                                    <td><input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                            <label class="form-check-label" for="flexCheckDefault">
                                                            </label>
                                                            <a href="">
                                                        <img src="assets/imgs/iconCrayon.png" alt="icone pen"></a>
                                                        <a class="supPlat" data-sup="<?= $dessert['id_dish'] ?>"><img src="assets/imgs/iconBin.png" alt="icon bin"></a>

                                                        </td>
                                                </tr>


                                            <?php
                                        } ?>
                                            </tbody>
                                    </table>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <p>Contenu de l'onglet resa.</p>
            </div>

        </div>
    </div>

</div>