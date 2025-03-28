<?php
include('../../pageParts/navbarAdmin.php');
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catalogue</title>
    <link rel="stylesheet" href="../../styles/catalogue.css">
    <link rel="stylesheet" href="../../bootstrap-5.0.2-dist/css/bootstrap.min.css">
</head>

<body>
    <div class="col-md-9 offset-1" id="catalogue">
        <div class="container mt-5">

            <!-- Boutons pour changer d'onglet -->
            <div class="d-flex justify-content-center mb-4">
                <button id="ue-tab" class="btn btn-primary me-2">UE</button>
                <button id="user-tab" class="btn btn-secondary">Utilisateurs</button>
            </div>

            <!-- Contenu des UE -->
            <div id="ue-content">
                <h2 class="mt-4">Liste des UE</h2>
                <div id="ue-list" class="list-group mb-5">
                    <!--  UE  chargées via AJAX ici -->
                </div>

                <!--  ajouter une UE -->
                <button class="btn btn-success mt-3" data-bs-toggle="modal" data-bs-target="#addUeModal">
                    Ajouter une UE
                </button>

                <h3 class="mt-4">UE Assignées à l'utilisateur</h3>
                <ul id="assigned-ue-list" class="list-group">
                    <!-- Les UE assignées seront affichées ici -->
                </ul>
            </div>


            <!-- Contenu des Utilisateurs (masqué par défaut) -->
            <div id="user-content" style="display: none;">
                <h2 class="mt-4">Liste des Utilisateurs</h2>
                <div id="user-list" class="list-group">
                    <!-- Les utilisateurs seront chargés via AJAX ici -->
                </div>
            </div>

            <!-- ajout d'une UE -->
            <div class="modal fade" id="addUeModal" tabindex="-1">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Ajouter une UE</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>
                        <div class="modal-body">
                            <form id="add-ue-form">
                                <input type="text" id="ue-code" class="form-control mb-2" placeholder="Code UE" required>
                                <input type="text" id="ue-title" class="form-control mb-2" placeholder="Intitulé" required>
                                <button type="submit" class="btn btn-primary">Ajouter</button>
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <script src="../../bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js"></script>
    <script src="../../js/catalogue.js"></script>
</body>

</html>