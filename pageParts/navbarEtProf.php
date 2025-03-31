<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="../styles/navbarAdmin.css">
    <link rel="stylesheet" href="../bootstrap-5.0.2-dist/css/bootstrap.min.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg fixed-top ">
        <div class="container-fluid">
            <a class="navbar-brand" href="#" class="logo">
                <img id="logo" src="/Projet_WE4A/assets/images/utbm.png" alt="" width="100px">
            </a>
            <a class="nav-item" href="">Choix d'UE</a>
            <a class="nav-item" href="">Liste des UE</a>


            <div class="d-flex align-items-center ms-3">
                <!-- Notification  -->
                <a class="nav-item me-3" href="#" title="Notifications">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bell-fill" viewBox="0 0 16 16">
                        <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2m.995-14.901a1 1 0 1 0-1.99 0A5 5 0 0 0 3 6c0 1.098-.5 6-2 7h14c-1.5-1-2-5.902-2-7 0-2.42-1.72-4.44-4.005-4.901" />
                    </svg>
                </a>

                <!--Message -->
                <a class="nav-item me-3" href="#" title="Messages">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-fill" viewBox="0 0 16 16">
                        <path d="M8 15c4.418 0 8-3.134 8-7s-3.582-7-8-7-8 3.134-8 7c0 1.76.743 3.37 1.97 4.6-.097 1.016-.417 2.13-.771 2.966-.079.186.074.394.273.362 2.256-.37 3.597-.938 4.18-1.234A9 9 0 0 0 8 15" />
                    </svg>
                </a>

                <!-- Avatar Utilisateur -->
                <a href="#" role="button" id="user" class="d-flex align-items-center">
                    <span class="userbutton d-inline-block position-relative">
                        <span class="avatars d-flex justify-content-center align-items-center">
                            <span class="userinitials size-35 bg-secondary text-white rounded-circle" title="Utilisateur" aria-label="">
                                AA
                            </span>
                        </span>
                    </span>
                </a>
            </div>
        </div>

    </nav>

    <script src="../bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>