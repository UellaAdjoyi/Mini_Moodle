document.addEventListener("DOMContentLoaded", function () {
    console.log("JavaScript chargé !");

    //  base de données en mémoire pour tester
    let ueData = [
        { id: 1, code: "UE101", intitule: "Mathématiques" },
        { id: 2, code: "UE102", intitule: "Programmation" }
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
            ueItem.innerHTML = `
                <span>${ue.code} - ${ue.intitule}</span>
                <button class="btn btn-primary btn-sm update-ue" data-id="${ue.id}">Modifier</button>
                <button class="btn btn-danger btn-sm delete-ue" data-id="${ue.id}">Supprimer</button>
            `;
            ueList.appendChild(ueItem);
        });
    }

    // l'ajout d'UE
    document.getElementById("add-ue-form").addEventListener("submit", function (e) {
        e.preventDefault();
        let code = document.getElementById("ue-code").value;
        let intitule = document.getElementById("ue-title").value;

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
                <button class="btn btn-danger btn-sm delete-ue" data-id="${user.id}">Supprimer</button>
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
