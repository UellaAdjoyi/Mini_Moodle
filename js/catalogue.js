document.addEventListener("DOMContentLoaded", function () {
    console.log("JavaScript chargé !");

    //  base de données en mémoire pour tester
    let ueData = [
        { id: 1, code: "UE101", intitule: "Mathématiques", image: null },
        { id: 2, code: "UE102", intitule: "Programmation", image: null }
    ];

    let userData = [
        { id: 1, nom: "ADH", prenoms: "Mathématiques" },
    ];

    // Références DOM
    const ueTab = document.getElementById("ue-tab");
    const userTab = document.getElementById("user-tab");
    const ueContent = document.getElementById("ue-content");
    const userContent = document.getElementById("user-content");
    const ueList = document.getElementById("ue-list");
    const userList = document.getElementById("user-list");

    // Fonction de chargement des UE
    function loadUE() {
        ueList.innerHTML = "";
        ueData.forEach(ue => {
            let ueItem = document.createElement("div");
            ueItem.classList.add("list-group-item", "d-flex", "justify-content-between", "align-items-center");

            // Vérifier si l'image est fournie, sinon utiliser une image par défaut
            let imageUrl = ue.image ? ue.image : "/Projet_WE4A/assets/images/ue.png";

            ueItem.innerHTML = `
                <div class="d-flex align-items-center">
                    <img src="${imageUrl}" alt="UE Image" class="ue-img me-2">
                    <span>${ue.code} - ${ue.intitule}</span>
                </div>
                <div>
                    <button class="btn btn-primary btn-sm update-ue" data-id="${ue.id}">Modifier</button>
                    <button class="btn btn-danger btn-sm delete-ue" data-id="${ue.id}">Effacer</button>
                </div>
            `;

            ueList.appendChild(ueItem);
        });

    }



    // l'ajout d'UE
    document.getElementById("add-ue-form").addEventListener("submit", function (e) {
        e.preventDefault();
        let code = document.getElementById("ue-code").value;
        let intitule = document.getElementById("ue-title").value;
        let ueImageInput = document.getElementById("ue-image");
        let ueImage = ueImageInput.files[0]; // Récupérer le fichier image
        let defaultImage = "../assets/images/ue.png";

        // Vérifier si une image est sélectionnée
        let imagePath = ueImage ? URL.createObjectURL(ueImage) : defaultImage;

        if (code && intitule) {
            // Ajouter une nouvelle UE
            let newUE = { id: Date.now(), code: code, intitule: intitule };
            ueData.push(newUE);
            loadUE(); // Rafraîchir la liste
            alert("UE ajoutée !");
            document.getElementById("ue-code").value = "";
            document.getElementById("ue-title").value = "";
        } else {
            alert("Veuillez remplir tous les champs.");
        }
    });

    // Supprimer une UE avec confirmation
    ueList.addEventListener("click", function (e) {
        if (e.target.classList.contains("delete-ue")) {
            let ueId = e.target.getAttribute("data-id");
            if (confirm("Voulez-vous vraiment supprimer cette UE ?")) {
                // Supprimer l'UE de l'array
                ueData = ueData.filter(ue => ue.id !== parseInt(ueId));
                loadUE(); // Rafraîchir la liste
                alert("UE supprimée !");
            }
        }
    });


    //Modification d'une Ue
    function editUE(ueId) {
        let ue = ueData.find(item => item.id == ueId);
        if (!ue) return;

        // Affichage du formulaire avec les valeurs actuelles
        document.getElementById("ueId").value = ue.id;
        document.getElementById("ueCode").value = ue.code;
        document.getElementById("ueIntitule").value = ue.intitule;
        document.getElementById("ueImage").value = ue.image || "";

        let modal = new bootstrap.Modal(document.getElementById("editUEModal"));
        modal.show();
    }
    document.getElementById("saveUEChanges").addEventListener("click", () => {
        if (confirm("Voulez-vous sauvegarder vos modifications ?")) {
            let ueId = document.getElementById("ueId").value;
            let ue = ueData.find(item => item.id == ueId);
            if (!ue) return;

            // Mettre à jour les valeurs
            ue.code = document.getElementById("ueCode").value;
            ue.intitule = document.getElementById("ueIntitule").value;
            ue.image = document.getElementById("ueImage").value;

            // Mettre à jour l'affichage
            loadUE();
            let modal = bootstrap.Modal.getInstance(document.getElementById("editUEModal"));
            modal.hide();
        }
    });

    ueList.addEventListener("click", (event) => {
        if (event.target.classList.contains("update-ue")) {
            let ueId = event.target.getAttribute("data-id");
            editUE(ueId);
        }
    })


    // Gestion des onglets
    ueTab.addEventListener("click", function () {
        ueContent.style.display = "block";
        userContent.style.display = "none";
        ueTab.classList.add("active");
        userTab.classList.remove("active");
    });

    userTab.addEventListener("click", function () {
        ueContent.style.display = "none";
        userContent.style.display = "block";
        userTab.classList.add("active");
        ueTab.classList.remove("active");
    });


    //Users
    function loadUser() {
        userList.innerHTML = "";
        userData.forEach(user => {
            let userItem = document.createElement("div");
            userItem.classList.add("list-group-item", "d-flex", "justify-content-between", "align-items-center");
            userItem.innerHTML = `
                <span>${user.nom}  ${user.prenoms}</span>
                <button class="btn btn-primary btn-sm update-ue" data-id="${user.id}">Modifier</button>
                <button class="btn btn-danger btn-sm delete-ue" data-id="${user.id}">Effacer</button>
            `;
            userList.appendChild(userItem);
        });
    }

    // Charger les UE au démarrage
    loadUE();
    loadUser();

    // Afficher l'onglet UE par défaut
    ueTab.click();
});


