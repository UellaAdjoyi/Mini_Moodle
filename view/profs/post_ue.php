<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="../../styles/post_ue_prof.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/sf-pro-display" rel="stylesheet">
    <?php include("../../pageParts/link.php");?>
</head>

<body>
    <!-- include de la nav bar -->
    <?php include("../../pageParts/navbarProf.php");?>
    <!-- debut de la page  -->
    <div class="rectangle">
        <h1>WE4A Développement Web </h1><br>
        <div class="row">
            <button class="btn btn-success col-md-2" onclick="window.location.href='creation_post.php';"><i class="fas fa-pen"></i> Créer un nouveau post</button>
        </div><br>
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
    <script src="../../js/post_ue_prof.js"></script>

</body>

</html>