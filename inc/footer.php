<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DevWeb Freelance</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
</head>
<footer class="bg-gray-900 text-white py-8">
    
    <div class="container mx-auto flex items-center justify-between">
    

        <!-- Mentions Légales -->
        <div>
            <button><a href="#" class="bg-gray-700 hover:bg-gray-600 text-white px-4 py-2 rounded-full focus:outline-none">Mentions Légales</a></button>
        </div>

        <!-- Copyright -->
        <div>
            &copy; 2024 J@B WEB. Tous droits réservés.
        </div>

        <!-- Back to Top Button -->
        <div>
            <!-- Corrected class to match selector in JavaScript -->
            <button class="scroll-to-top-button bg-gray-700 hover:bg-gray-600 text-white px-4 py-2 rounded-full focus:outline-none">
                Haut de page
            </button>
        </div>

    </div>
   
    <script>
        document.addEventListener("DOMContentLoaded", function() {
    // Récupération du bouton "Haut de page"
    var scrollToTopButton = document.querySelector(".scroll-to-top-button");

    // Ajout d'un événement de clic sur le bouton
    scrollToTopButton.addEventListener("click", function() {
        // Animation de défilement vers le haut de la page
        window.scrollTo({
            top: 0,
            behavior: "smooth"
        });
    });

    // Affichage ou masquage du bouton en fonction du défilement de la page
    window.addEventListener("scroll", function() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            scrollToTopButton.style.display = "block";
        } else {
            scrollToTopButton.style.display = "none";
        }
    });
});
    </script>
</footer>
