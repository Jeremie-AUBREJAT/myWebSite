document.addEventListener("DOMContentLoaded", function() {
    // Récupération du bouton "Haut de page"
    var scrollToTopButton = document.querySelector("#scroll-to-top-button");

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
function hideDivsOnSmallScreens() {
    var div1 = document.getElementById('div1');
    var div2 = document.getElementById('div2');

    // Check window width
    if (window.innerWidth < 640) {
        div1.classList.add('hidden');
        div2.classList.add('hidden');
    } else {
        div1.classList.remove('hidden');
        div2.classList.remove('hidden');
    }
}

// Initial check on page load
hideDivsOnSmallScreens();

// Attach the function to the window resize event
window.addEventListener('resize', hideDivsOnSmallScreens);


