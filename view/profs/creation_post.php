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
    <nav class="navbar navbar-expand-lg fixed-top ">
        <div class="container-fluid">
            <a class="navbar-brand" href="#" class="logo">
                <img id="logo" src="/Projet_WE4A/assets/images/utbm.png" alt="" width="100px">
            </a>
            <!-- Liens de navigation -->
            <div class="navbar-nav">
                <a class="nav-item nav-link" href="../index.php">Accueil</a>
                <a class="nav-item nav-link" href="#">Choix d'UE</a>
                <a class="nav-item nav-link" href="#">Liste des UE</a>
            </div>

            <!-- Partie droite : Notifications, Messages, Avatar -->
            <div class="d-flex align-items-center ms-auto">
                <!-- Notification -->
                <a class="nav-item me-3" href="#" title="Notifications">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-bell-fill" viewBox="0 0 16 16">
                        <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2m.995-14.901a1 1 0 1 0-1.99 0A5 5 0 0 0 3 6c0 1.098-.5 6-2 7h14c-1.5-1-2-5.902-2-7 0-2.42-1.72-4.44-4.005-4.901" />
                    </svg>
                </a>

                <!-- Message -->
                <a class="nav-item me-3" href="#" title="Messages">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-chat-fill" viewBox="0 0 16 16">
                        <path d="M8 15c4.418 0 8-3.134 8-7s-3.582-7-8-7-8 3.134-8 7c0 1.76.743 3.37 1.97 4.6-.097 1.016-.417 2.13-.771 2.966-.079.186.074.394.273.362 2.256-.37 3.597-.938 4.18-1.234A9 9 0 0 0 8 15" />
                    </svg>
                </a>

                <!-- Avatar Utilisateur + Menu Déroulant -->
                <div class="dropdown">
                    <a href="#" id="userDropdown" class="d-flex align-items-center dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <span class="userbutton d-inline-block position-relative">
                            <span class="avatars d-flex justify-content-center align-items-center">
                                <span class="userinitials size-35 bg-secondary text-white rounded-circle" title="Utilisateur" aria-label="">
                                    AA
                                </span>
                            </span>
                        </span>
                    </a>

                    <!-- Menu déroulant -->
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                        <li><a class="dropdown-item" href="#" id="editProfileBtn">Mon profil</a></li>
                        <li><a class="dropdown-item" href="#">Paramètres</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Déconnexion</a></li>
                    </ul>
                </div>
            </div>
        </div>

    </nav>

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
                    <button  class="btn btn-danger"><a href="post_ue.php">Annuler</a></button>
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
                    <button  class="btn btn-danger"><a href="post_ue.php">Annuler</a></button>
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