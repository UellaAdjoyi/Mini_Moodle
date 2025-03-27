<?php
include('../../pageParts/navbarAdmin.php')
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin home</title>
    <link rel="stylesheet" href="../../styles/adminpage.css">
    <link rel="stylesheet" href="/Projet_WE4A/bootstrap-5.0.2-dist/css/bootstrap.min.css">


</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-2" id="sidebar">
                <ul class="sidebar-nav">
                    <li class="nav-item active">
                        <a href="home_admin.php">
                            <i class=""></i> Tableau de Bord
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="">
                            <!-- <i class=""></i> -->Gestion des Utilisateurs
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="">
                            <!-- <i class=""></i> -->Gestion des Événements
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="">
                            <!-- <i class=""></i> -->Gestion des Articles
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="">
                            <i class=""></i> Paramètres
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="logout.php">
                            <!-- <i class=""></i> --> Déconnexion
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Contenu principal -->
            <div class="col-md-10" id="main-content">
                <h2>Bienvenue sur le tableau de bord</h2>

            </div>
        </div>
    </div>
    <script src="../../bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
    <script src="../../bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js"></script>
</body>
<?php
include('../../pageParts/footer.php')
?>

</html>