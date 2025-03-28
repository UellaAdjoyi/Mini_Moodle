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
            <div class="col-md-2" id="sidebar" class="bg-light p-3">
                <ul class="nav flex-column">
                    <!-- Dashboard -->
                    <li class="nav-item">
                        <a class="nav-link active" href="home_admin.php">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-activity" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M6 2a.5.5 0 0 1 .47.33L10 12.036l1.53-4.208A.5.5 0 0 1 12 7.5h3.5a.5.5 0 0 1 0 1h-3.15l-1.88 5.17a.5.5 0 0 1-.94 0L6 3.964 4.47 8.171A.5.5 0 0 1 4 8.5H.5a.5.5 0 0 1 0-1h3.15l1.88-5.17A.5.5 0 0 1 6 2" />
                            </svg>
                            Tableau de Bord
                        </a>
                    </li>

                    <!-- Gestion des utilisateurs -->
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                                <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5.784 6A2.24 2.24 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.3 6.3 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5" />
                            </svg>
                            Gestion des utilisateurs
                        </a>
                    </li>

                    <!-- Catalogue -->
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clipboard2-data-fill" viewBox="0 0 16 16">
                                <path d="M10 .5a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5.5.5 0 0 1-.5.5.5.5 0 0 0-.5.5V2a.5.5 0 0 0 .5.5h5A.5.5 0 0 0 11 2v-.5a.5.5 0 0 0-.5-.5.5.5 0 0 1-.5-.5" />
                                <path d="M4.085 1H3.5A1.5 1.5 0 0 0 2 2.5v12A1.5 1.5 0 0 0 3.5 16h9a1.5 1.5 0 0 0 1.5-1.5v-12A1.5 1.5 0 0 0 12.5 1h-.585q.084.236.085.5V2a1.5 1.5 0 0 1-1.5 1.5h-5A1.5 1.5 0 0 1 4 2v-.5q.001-.264.085-.5M10 7a1 1 0 1 1 2 0v5a1 1 0 1 1-2 0zm-6 4a1 1 0 1 1 2 0v1a1 1 0 1 1-2 0zm4-3a1 1 0 0 1 1 1v3a1 1 0 1 1-2 0V9a1 1 0 0 1 1-1" />
                            </svg>
                            Catalogue
                        </a>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0z" />
                                <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708z" />
                            </svg>
                            Déconnexion
                        </a>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0z" />
                                <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708z" />
                            </svg>
                            Déconnexion
                        </a>
                    </li>

                    <!-- Déconnexion -->
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0z" />
                                <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708z" />
                            </svg>
                            Déconnexion
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-md-10" id="main-content">
                <h1>Bienvenue sur le tableau de bord</h1>
                <div class="row" id="content">
                    <div class="col-3 d-flex">
                        <div class="card flex-fill">
                            <div class="card-body py-4">
                                <div class="d-flex align-items-start">
                                    <div class="flex-grow-1">
                                        <h3 class="mb-2">1500</h3>
                                        <p class="mb-2">Etudiants</p>
                                    </div>
                                    <div class="d-inline-block ms-3">
                                        <div class="stat">
                                            <i class="align-middle text-success" data-lucide="dollar-sign"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-3 d-flex">
                        <div class="card flex-fill">
                            <div class="card-body py-4">
                                <div class="d-flex align-items-start">
                                    <div class="flex-grow-1">
                                        <h3 class="mb-2">300</h3>
                                        <p class="mb-2">Professeurs</p>
                                    </div>
                                    <div class="d-inline-block ms-3">
                                        <div class="stat">
                                            <i class="align-middle text-success" data-lucide="dollar-sign"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-3 d-flex">
                        <div class="card flex-fill">
                            <div class="card-body py-4">
                                <div class="d-flex align-items-start">
                                    <div class="flex-grow-1">
                                        <h3 class="mb-2">5</h3>
                                        <p class="mb-2">Admins</p>
                                    </div>
                                    <div class="d-inline-block ms-3">
                                        <div class="stat">
                                            <i class="align-middle text-success" data-lucide="dollar-sign"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-3 d-flex">
                        <div class="card flex-fill">
                            <div class="card-body py-4">
                                <div class="d-flex align-items-start">
                                    <div class="flex-grow-1">
                                        <h3 class="mb-2">0</h3>
                                        <p class="mb-2">ProfAdmins</p>
                                    </div>
                                    <div class="d-inline-block ms-3">
                                        <div class="stat">
                                            <i class="align-middle text-success" data-lucide="dollar-sign"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-6 d-flex">
                        <div class="card flex-fill">
                            <div class="card-body py-4">
                                <div class="d-flex align-items-start">
                                    <div class="flex-grow-1">
                                        <re1 class="mb-2">Titre1</re1>
                                        <p class="mb-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, officia esse. Unde soluta quibusdam numquam dolorem reiciendis iusto praesentium sunt harum et molestias distinctio aliquid reprehenderit saepe non, libero earum?</p>
                                    </div>
                                    <div class="d-inline-block ms-3">
                                        <div class="stat">
                                            <i class="align-middle text-success" data-lucide="dollar-sign"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-6 d-flex">
                        <div class="card flex-fill">
                            <div class="card-body py-4">
                                <div class="d-flex align-items-start">
                                    <div class="flex-grow-1">
                                        <re2 class="mb-2">Titre2</re2>
                                        <p class="mb-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus sed est harum numquam perspiciatis. Incidunt quas animi nihil! Tenetur eos nostrum labore neque blanditiis fugiat amet itaque tempore possimus laborum.</p>
                                    </div>
                                    <div class="d-inline-block ms-3">
                                        <div class="stat">
                                            <i class="align-middle text-success" data-lucide="dollar-sign"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-12 d-flex">
                        <div class="card flex-fill">
                            <div class="card-body py-4">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur praesentium officia et doloremque tempore. Quia, labore ad, placeat reiciendis delectus voluptas ipsam nobis neque ut dolores commodi architecto saepe tenetur!
                                    Vel magni quod ratione dicta illo beatae atque adipisci cupiditate repudiandae libero quis, rerum quidem, sapiente soluta consectetur nulla culpa repellat dignissimos optio nisi vero repellendus. Ipsam iste incidunt delectus.
                                    Culpa, repellat pariatur ut voluptatibus libero qui est adipisci illum quo, quod, quidem sunt? Et porro exercitationem, quisquam at nostrum voluptatem id saepe illo eos odio quasi! Obcaecati, recusandae minus.
                                    A aliquid explicabo rem, deserunt est harum amet. Hic, aut qui. Nihil quibusdam unde soluta aliquam libero nostrum quis, ipsum cupiditate obcaecati officiis corporis ipsam quos numquam dignissimos quae natus.
                                    Perspiciatis eaque tenetur sapiente autem corrupti assumenda porro ratione! Repellendus aspernatur debitis fugit et. Porro sint ab beatae architecto! Aut fuga saepe eligendi laborum? Qui soluta beatae culpa maiores ducimus.
                                    Cumque ea in tempora, voluptatibus ratione id quia harum eaque, quae incidunt quo nemo, recusandae unde. Quam iste ratione eum repudiandae velit necessitatibus dolor at corporis, illum animi itaque asperiores.</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
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