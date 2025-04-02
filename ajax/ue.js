document.addEventListener("DOMContentLoaded", () => {
    const postsContainer = document.getElementById("posts");
    const createPostBtn = document.getElementById("createPostBtn");

    // Simuler un utilisateur (professeur ou étudiant)
    const userRole = "prof"; // "prof" ou "student"
    if (userRole === "prof") {
        createPostBtn.style.display = "block";
    }

    // Simuler des posts
    const posts = [
        { id: 1, type: "message", title: "Bienvenue à l'UE", content: "Ceci est un message d'accueil.", date: "2025-04-02" },
        { id: 2, type: "file-share", title: "Document 1", content: "Lien vers le fichier.", date: "2025-04-01" }
    ];

    // Afficher les posts
    posts.sort((a, b) => new Date(b.date) - new Date(a.date)); // Tri décroissant
    posts.forEach(post => {
        const postElement = document.createElement("div");
        postElement.classList.add("post", post.type);
        postElement.setAttribute("data-id", post.id);
        postElement.innerHTML = `
            <div class="post-header">
                <h4>${post.title}</h4>
                ${userRole === "prof" ? `
                <div class="post-actions">
                    <button class="btn btn-sm btn-warning" onclick="editPost(${post.id})">Modifier</button>
                    <button class="btn btn-sm btn-danger" onclick="deletePost(${post.id})">Effacer</button>
                </div>` : ""}
            </div>
            <p>${post.content}</p>
            <small>${new Date(post.date).toLocaleDateString()}</small>
        `;
        postsContainer.appendChild(postElement);
    });
});

// Effacement via AJAX avec effet
function deletePost(postId) {
    if (confirm("Êtes-vous sûr de vouloir effacer ce post ?")) {
        const postElement = document.querySelector(`.post[data-id="${postId}"]`);
        postElement.style.opacity = "0"; // Effet de fade-out
        setTimeout(() => {
            postElement.remove();
            alert(`Post avec ID ${postId} supprimé.`);
        }, 300);
    }
}

// Modification de post (rediriger vers une page de modification)
function editPost(postId) {
    window.location.href = `editPost.html?postId=${postId}`;
}
