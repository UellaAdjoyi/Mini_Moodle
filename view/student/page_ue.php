<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page UE</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js" defer></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
</head>
<body>
    <header class="container my-3">
        <h1>UE : Nom de l'UE</h1>
        <button class="btn btn-primary float-end" id="createPostBtn" style="display: none;">Créer un nouveau post</button>
    </header>
    <main class="container">
        <div id="posts">
            <!-- Les posts seront insérés ici dynamiquement -->
        </div>
    </main>
    <footer>
        <?php
        include('../../pageParts/footer.php');
        ?>
    </footer>
</body>
</html>



