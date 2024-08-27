<?php
include_once __DIR__ . '/Includes/header.php';
?>

<main>
    <div>
        <h4>Ajouter un plat</h4>
    </div>
    <div class="centerFlex">
        <div class="containerFormulaire">
            <form id="formulaireDish" action="<?php echo HOME_URL . 'traiterFormulaireDish'; ?>" method="post">
            <input type="hidden" id="DishId" name="id" value="<?= isset($dish['id_dish']) ? $dish['id_dish'] : '' ?>">
    
            <!-- Champ Name -->
                <div>
                    <label for="name" class="form-label">Nom</label>
                    <input type="text" class="form-control" id="name" name="name" required value="<?= isset($dish['title']) ? $dish['title'] : '' ?>">
                </div>
                <!-- Champ Description -->
                <div>
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" id="description" name="description" rows="3"><?= isset($dish['description']) ? $dish['description'] : '' ?></textarea>
                </div>

                <!-- Checkbox isRobot -->
                <div class="form-check">
                    <input class="form-check-input grey" type="checkbox" id="isRobot" name="isRobot">
                    <label class="form-check-label" for="isRobot">
                        isRobot
                    </label>
                </div>

                <!-- Champ Price -->
                <div class="mb-3">
                    <label for="price" class="form-label">Prix</label>
                    <input type="number" class="form-control" id="price" name="price" required value="<?= isset($dish['price']) ? $dish['price'] : '' ?>">
                </div>

                <!-- Checkbox isAvailable -->
                <div class="form-check mb-3">
                    <input class="form-check-input grey" type="checkbox" id="isAvailable" name="isAvailable">
                    <label class="form-check-label" for="isAvailable">
                        Disponible
                    </label>
                </div>

                <!-- Menu déroulant Category -->
                <div>
                    <label for="type" class="form-label">Catégorie</label>
                    <select class="form-select" id="type" name="type">
                        <option value="1">Entrée</option>
                        <option value="2">Plat</option>
                        <option value="3">Dessert</option>
                    </select>
                </div>

                <!-- Bouton Submit -->
                <button type="submit" class="btn btn-primary">Enregistrer</button>
            </form>
        </div>

    </div>
</main>