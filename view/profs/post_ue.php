<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="../../styles/navbarAdmin.css">
    <link rel="stylesheet" href="../../styles/post_ue_prof.css">
    <link rel="stylesheet" href="../../bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/sf-pro-display" rel="stylesheet">
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
                <!-- ajouter un post -->
                <button class="btn btn-success btn-sm mr-3" onclick="window.location.href='creation_post.php';">Ajouter</button>
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
        <h1>WE4A Développement Web </h1>
        <div class="messages"> 
            <div class="message fichier">
                <i class="fas fa-file-alt icon"></i>
                <span class="message-text">Voici un fichier important à télécharger.</span>
                <div class="date-heure">22/02/2005 20:00</div> 
                <div class="button-container">
                    <button class="btn btn-warning btn-sm mr-2" onclick="window.location.href='modification.php';">Modifier</button>
                    <button class="btn btn-danger btn-sm" onclick="showPopup('warning')">Supprimer</button>
                </div>
            </div>
            <div class="message texte">
            <i class="fas fa-sms"></i>
                <span class="message-text">Bonjour, j'espère que vous allez bien !</span>
                <div class="date-heure">22/02/2005 20:00</div>
                <div class="button-container">
                    <button class="btn btn-warning btn-sm mr-2" onclick="window.location.href='modification.php';">Modifier</button>
                    <button class="btn btn-danger btn-sm" onclick="showPopup('warning')">Supprimer</button>
                </div>
            </div>
            <div class="message fichier">
                <i class="fas fa-file-alt icon"></i>
                <span class="message-text">Votre rapport PDF est disponible ici.</span>
                <div class="date-heure">22/02/2005 20:00</div>
                <div class="button-container">
                    <button class="btn btn-warning btn-sm mr-2" onclick="window.location.href='modification.php';">Modifier</button>
                    <button class="btn btn-danger btn-sm" onclick="showPopup('warning')">Supprimer</button>
                </div>
            </div>
            
            <div class="message texte">
                <i class="fas fa-info-circle"></i>
                <span class="message-text">Pouvez-vous me répondre demain ?</span>
                <div class="date-heure">22/02/2005 20:00</div>
                <div class="button-container">
                    <button class="btn btn-warning btn-sm mr-2" onclick="window.location.href='modification.php';">Modifier</button>
                    <button class="btn btn-danger btn-sm" onclick="showPopup('warning')">Supprimer</button>
                </div>
            </div>
            <div class="message texte">
                <i class="fas fa-exclamation-triangle"></i>
                <span class="message-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis repellat earum minima id iste consectetur commodi totam inventore. Ducimus vero sapiente nesciunt libero sed ea non eveniet reprehenderit consectetur error? Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iste odio accusamus magni ullam autem architecto, est rem cumque pariatur laboriosam dignissimos aut, eligendi et molestiae eos qui, soluta neque consectetur!</span>
                <div class="date-heure">22/02/2005 20:00</div>
                <div class="button-container">
                    <button class="btn btn-warning btn-sm mr-2">Modifier</button>
                    <button class="btn btn-danger btn-sm" onclick="showPopup('warning')">Supprimer</button>
                    <!-- <button class="btn" onclick="showPopup('warning')">Avertissement</button> -->
                </div>
                
            </div>
        </div>
    </div>
    
    <!-- Popup Warning -->
    <div class="popup-container warning" id="warning-popup">
        <div class="popup">
            <button class="close-btn" onclick="closePopup('warning')">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <line x1="18" y1="6" x2="6" y2="18"></line>
                    <line x1="6" y1="6" x2="18" y2="18"></line>
                </svg>
            </button>
            <div class="popup-icon">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z">
                    </path>
                    <line x1="12" y1="9" x2="12" y2="13"></line>
                    <line x1="12" y1="17" x2="12.01" y2="17"></line>
                </svg>
            </div>
            <h2>Confirmer la suppression</h2>
            <p>Êtes-vous sûr de vouloir supprimer cet élément ?</p>
            <div class="popup-buttons">
                <button class="popup-btn confirm" onclick="closePopup('warning')">J'ai vérifié</button>
            </div>
        </div>
    </div>
    <script src="/Projet_WE4A/bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js"></script>
    <script src="/Projet_WE4A/js/updateProfile.js"></script>
    <script src="../../js/post_ue_prof.js"></script>

</body>

</html>