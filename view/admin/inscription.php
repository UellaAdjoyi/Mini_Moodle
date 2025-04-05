<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire d'inscription</title>

    <link rel="stylesheet" href="/Projet_WE4A/bootstrap-5.0.2-dist/css/bootstrap.min.css">
 

</head>
<body>
        <!-- Le bouton pour ouvrir la modale -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#signupModal">
    Inscription
    </button>

        <!-- La modale d'inscription -->
    <div class="modal fade" id="signupModal" tabindex="-1" aria-labelledby="signupModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="signupModalLabel">Inscription</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Formulaire d'inscription -->
                <form id="signupForm">
                <div class="mb-3">
                    <label for="name" class="form-label">Nom</label>
                    <input type="text" class="form-control" id="name" placeholder="Entrez votre nom" required>
                </div>
                <button type="submit" class="btn btn-primary">S'inscrire</button>
                </form>
            </div>
            </div>
        </div>
    </div>
</body>

<script src="../../bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js"></script>
<script src="../../js/inscription.js"></script>