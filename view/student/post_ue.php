<?php
include('../../pageParts/navbarEtProf.php');
?>
<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="../../styles/navbarAdmin.css">
    <link rel="stylesheet" href="../../styles/post_ue.css">
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
        <h1>WE4A Développement Web </h1>
        <div class="messages">
            <div class="message fichier">
                <i class="fas fa-file-alt icon"></i>
                <span class="message-text">Voici un fichier important à télécharger.</span>
                <div class="date-heure">22/02/2005 20:00</div>
            </div>
            <div class="message texte">
                <i class="fas fa-sms"></i>
                <span class="message-text">Bonjour, j'espère que vous allez bien !</span>
                <div class="date-heure">22/02/2005 20:00</div>
            </div>
            <div class="message fichier">
                <i class="fas fa-file-alt icon"></i>
                <span class="message-text">Votre rapport PDF est disponible ici.</span>
                <div class="date-heure">22/02/2005 20:00</div>
            </div>
            <div class="message texte">
                <i class="fas fa-info-circle"></i>
                <span class="message-text">Pouvez-vous me répondre demain ?</span>
                <div class="date-heure">22/02/2005 20:00</div>
            </div>
            <div class="message texte">
                <i class="fas fa-exclamation-triangle"></i>
                <span class="message-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis repellat earum minima id iste consectetur commodi totam inventore. Ducimus vero sapiente nesciunt libero sed ea non eveniet reprehenderit consectetur error? Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iste odio accusamus magni ullam autem architecto, est rem cumque pariatur laboriosam dignissimos aut, eligendi et molestiae eos qui, soluta neque consectetur!</span>
                <div class="date-heure">22/02/2005 20:00</div>
            </div>
        </div>
    </div>
    <script src="/Projet_WE4A/bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js"></script>
    <script src="/Projet_WE4A/js/updateProfile.js"></script>

</body>

</html>