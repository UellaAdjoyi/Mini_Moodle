<?php
include('../../pageParts/navbarEtProf.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="../../styles/navbarAdmin.css">
    <link rel="stylesheet" href="../../styles/creationPost.css">
    <link rel="stylesheet" href="../../bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
</head>

<body>

    <!-- Modal de modification du profil -->
    <div class="modal fade" id="editProfileModal" tabindex="-1" aria-labelledby="editProfileModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editProfileModalLabel">Modifier mon profil</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
                </div>
                <div class="modal-body">
                    <form id="editProfileForm">
                        <div class="mb-3">
                            <label for="profileName" class="form-label">Nom</label>
                            <input type="text" class="form-control" id="profileName" required>
                        </div>
                        <div class="mb-3">
                            <label for="profileEmail" class="form-label">Email</label>
                            <input type="email" class="form-control" id="profileEmail" required>
                        </div>
                        <div class="mb-3">
                            <label for="profileAvatar" class="form-label">Changer l'avatar</label>
                            <input type="file" class="form-control" id="profileAvatar">
                        </div>
                        <button type="submit" class="btn btn-primary">Sauvegarder</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="rectangle">
        <div class="container mt-4">
            <!-- Conteneur des boutons de sélection -->
            <div class="btn-container">
                <button id="msgButton" class="btn btn-primary" onclick="toggleForm('message')">Message Texte</button>
                <button id="fileButton" class="btn btn-secondary" onclick="toggleForm('fichier')">Partager Fichier</button>
            </div>

            <!-- Formulaire Message Texte -->
            <div id="messageForm" class="form-container">
                <div class="form-title">Créer un Message Texte</div>
                <form>
                    <div class="radio-container">
                        <label>Est-ce un message important ?AIDEZ MOI A TROUVER LES TYPES DE MESSAGE !!!!</label><br>
                        <input type="radio" id="important" name="importance" value="important">
                        <label for="important">Important</label>
                        <input type="radio" id="notImportant" name="importance" value="notImportant" checked>
                        <label for="notImportant">Pas important</label>
                    </div>
                    <div class="form-group">
                        <label for="msgTitle">Titre du Message</label>
                        <input type="text" class="form-control" id="msgTitle" placeholder="Entrez le titre du message">
                    </div>
                    <div class="form-group">
                        <label for="msgContent">Contenu du Message</label>
                        <textarea class="form-control" id="msgContent" rows="4" placeholder="Entrez le contenu du message"></textarea>
                    </div>
                    <div class="button-container">
                        <button type="submit" class="btn btn-success">Pubier</button>
                        <button class="btn btn-danger"><a href="post_ue.php">Annuler</a></button>
                    </div>

                </form>
            </div>

            <!-- Formulaire Partage Fichier -->
            <div id="fileForm" class="form-container">
                <div class="form-title">Partager un Fichier</div>
                <form>
                    <div class="form-group">
                        <label for="fileTitle">Titre du Fichier</label>
                        <input type="text" class="form-control" id="fileTitle" placeholder="Entrez le titre du fichier">
                    </div>
                    <div class="form-group">
                        <label for="fileUpload">Choisir un Fichier</label>
                        <input type="file" class="form-control" id="fileUpload">
                    </div>
                    <div class="form-group">
                        <label for="fileUpload">Commentaire</label>
                        <textarea name="commentaire" class="form-control" id=""></textarea>
                    </div>
                    <div class="button-container">
                        <button type="submit" class="btn btn-success">Pubier</button>
                        <button class="btn btn-danger"><a href="post_ue.php">Annuler</a></button>
                    </div>
                </form>
            </div>
        </div>

    </div>

    <script src="/Projet_WE4A/bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js"></script>
    <script src="/Projet_WE4A/js/updateProfile.js"></script>
    <script src="/Projet_WE4A/js/creationPost.js"></script>
</body>

</html>