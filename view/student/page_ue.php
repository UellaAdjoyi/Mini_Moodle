<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page UE</title>
    <link rel="stylesheet" href="../../styles/page_ue.css">
    <script src="../../ajax/ue.js" defer></script>
    <?php include("../../pageParts/link.php");?>
</head>

<body>
   <!-- include de la nav bar -->
   <?php include("../../pageParts/navbarEtud.php");?>
    <!-- debut de la page  -->
<br><br><br><br>
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