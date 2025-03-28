document.addEventListener("DOMContentLoaded", function () {
    console.log("JavaScript chargé !");

    // Simuler une base de données en mémoire pour tester
    let ueData = [
        { id: 1, code: "UE101", intitule: "Mathématiques" },
        { id: 2, code: "UE102", intitule: "Programmation" }
    ];

    // Références DOM
    const ueTab = document.getElementById("ue-tab");
    const userTab = document.getElementById("user-tab");
    const ueContent = document.getElementById("ue-content");
    const userContent = document.getElementById("user-content");
    const ueList = document.getElementById("ue-list");

    // Fonction de chargement des UE
    function loadUE() {
        ueList.innerHTML = ""; // Clear the list before adding the new items
        ueData.forEach(ue => {
            let ueItem = document.createElement("div");
            ueItem.classList.add("list-group-item", "d-flex", "justify-content-between", "align-items-center");
            ueItem.innerHTML = `
                <span>${ue.code} - ${ue.intitule}</span>
                <button class="btn btn-danger btn-sm delete-ue" data-id="${ue.id}">Supprimer</button>
            `;
            ueList.appendChild(ueItem);
        });
    }

    // Ajouter un événement pour l'ajout d'UE
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

    // Charger les UE au démarrage
    loadUE();

    // Afficher l'onglet UE par défaut
    ueTab.click();
});
