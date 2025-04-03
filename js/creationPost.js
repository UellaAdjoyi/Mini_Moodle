// Fonction pour gérer l'affichage des formulaires
function toggleForm(formType) {
    // Masquer tous les formulaires
    document.getElementById('messageForm').classList.remove('active');
    document.getElementById('fileForm').classList.remove('active');

    // Afficher le formulaire correspondant
    if (formType === 'message') {
        document.getElementById('messageForm').classList.add('active');
    } else if (formType === 'fichier') {
        document.getElementById('fileForm').classList.add('active');
    }
}