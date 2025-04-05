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
                <button id="ue-tab" class="btn btn-primary me-2">UEs</button>
                <button id="user-tab" class="btn btn-secondary">Utilisateurs</button>
            </div>

            <!-- Contenu des UE -->
            <div id="ue-content">
                <h2 class="mt-4">Liste des UEs</h2>
                <div> <!--  ajouter une UE -->
                    <button class="btn btn-success mt-3" data-bs-toggle="modal" data-bs-target="#addUeModal">
                        Créer
                    </button>
                </div>
                <div id="ue-list" class="list-group mb-5">
                    <!--  UE  chargées via AJAX ici -->
                </div>
                <h3 class="mt-4">UEs Assignées à l'utilisateur</h3>
                <ul id="assigned-ue-list" class="list-group">
                    <!-- Les UE assignées seront affichées ici -->
                </ul>
            </div>


            <!-- Contenu des Utilisateurs (masqué par défaut) -->
            <div id="user-content" style="display: none;">
                <h2 class="mt-4">Liste des Utilisateurs</h2>
                <div>
                    <button class="btn btn-success mt-3" data-bs-toggle="modal" data-bs-target="#signupModal">Créer</button>
                </div>
                    <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#signupModal">Inscription
                    </button></div> -->
                <div id="user-list" class="list-group">
                    <!-- Les utilisateurs seront chargés via AJAX ici -->
                </div>
                <!--  ajouter un user -->

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
                                <input type="file" id="ue-image" class="form-control mb-2" accept="image/*">
                                <button type="submit" class="btn btn-primary">Ajouter</button>
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!--modification d"UES -->
            <div class="modal fade" id="editUEModal" tabindex="-1">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Modifier l'UE</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>
                        <div class="modal-body">
                            <input type="hidden" id="ueId">
                            <div class="mb-3">
                                <label for="ueCode" class="form-label">Code UE</label>
                                <input type="text" id="ueCode" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="ueIntitule" class="form-label">Intitulé</label>
                                <input type="text" id="ueIntitule" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="ueImage" class="form-label">Image URL</label>
                                <input type="text" id="ueImage" class="form-control">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                            <button type="button" class="btn btn-primary" id="saveUEChanges">Enregistrer</button>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>

        <!-- Le bouton pour ouvrir la modale -->
 

        <!-- La modale d'inscription -->
    <div class="modal fade" id="signupModal" tabindex="-1" aria-labelledby="signupModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title " id="signupModalLabel">Inscription</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Formulaire d'inscription -->
                    <form id="signupForm">
                    <div class="input-group  mb-3">
                        <span class="input-group-text">
                        </span>
                        <input type="text" class="form-control" placeholder="Name ">
                    </div>  
                    <div class="input-group  mb-3">
                        <span class="input-group-text">
                        
                        </span>
                        <input type="text" class="form-control" placeholder="E-Mail ">
                    </div>  
                    <div class="input-group  mb-3">
                        <span class="input-group-text">
                        </span>
                        <input type="Pasword" class="form-control" placeholder="Password ">
                    </div> 
                    <div class="input-group mb-3 ">
                        <span class="input-group-text"></span>
                        <select class="form-select"  id="role" name="role" >

                            <option value="" selected disabled>-- Role--</option>
                            <option value="etudiant">Etudiant</option>
                            <option value="admin">Administrateur</option>
                            <option value="prof">Professeur</option>
                            <option value="prof_admin">professeur_Admin</option>

                        </select>
                    </div> 
                    <div class="mb-3">
                         <div id="selectionAffichee" class="alert alert-info" style="display: none;">
                            <strong>UEs sélectionnés :</strong>
                            <div id="listeSelection" class="d-flex flex-wrap"></div>
                        </div>

                        <!-- Liste déroulante HTML visible avec Bootstrap -->
                        <label for="liste" class="form-label">Liste des UEs :</label>
                        <select class="form-select" id="liste" size="3" onchange="gererSelection()">
                            <option value="UE101">UE101</option>
                            <option value="UE102">UE102</option>
                            <option value="UE103">UE103</option>
                            <option value="UE104">UE104</option>
                            <option value="UE105">UE105</option>
                            <option value="UE106">UE106</option>
                        </select>
                    </div>
                   
                    <div class="d-grid ">
                        <button type="button" class="btn btn-secondary mb-3" data-bs-dismiss="modal">Annuler</button>
                        <button type="button" class="btn btn-primary mb-3" id="saveUserChanges">Enregistrer</button>
                    </div> 
                       
                    </form>
                </div>
            </div>
        </div>
    </div>


    <script src="../../bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js"></script>
    <script src="../../js/catalogue.js"></script>
    <script src="../../js/inscription.js"></script>

</body>

</html>
<?php
include('../../pageParts/footer.php');
?>