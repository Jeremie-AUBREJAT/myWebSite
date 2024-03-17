
document.addEventListener('DOMContentLoaded', function() {
    // Fonction pour vérifier si au moins une partie de l'élément est visible à l'écran
    function isElementPartiallyInViewport(el) {
      if (!el) return false; // Vérifier si l'élément existe
      var rect = el.getBoundingClientRect();
      var windowHeight = window.innerHeight || document.documentElement.clientHeight;
      var windowWidth = window.innerWidth || document.documentElement.clientWidth;
  
      return (
        rect.top <= windowHeight &&
        rect.bottom >= 0 &&
        rect.left <= windowWidth &&
        rect.right >= 0
      );
    }

    // Élément à surveiller
    var elementToWatch = document.getElementById('Right');
    var elementToWatch2 = document.getElementById('Left');


    // Ajouter la classe "moveRight" et supprimer la classe "invisible" dès que l'élément devient partiellement visible
    if (isElementPartiallyInViewport(elementToWatch)) {
      elementToWatch.classList.add('moveRight');
      elementToWatch.classList.remove('invisible');
      elementToWatch2.classList.add('moveLeft');
      elementToWatch2.classList.remove('invisible');

    }

    // Écouteur d'événement pour vérifier lorsque l'élément devient partiellement visible lors du défilement
    window.addEventListener('scroll', function() {
      if (isElementPartiallyInViewport(elementToWatch)) {
        elementToWatch.classList.add('moveRight');
        elementToWatch.classList.remove('invisible');
        elementToWatch2.classList.add('moveLeft');
        elementToWatch2.classList.remove('invisible');
      }
    });

    // Écouteur d'événement pour vérifier lorsque la fenêtre est redimensionnée
    window.addEventListener('resize', function() {
      if (isElementPartiallyInViewport(elementToWatch)) {
        elementToWatch.classList.add('moveRight');
        elementToWatch.classList.remove('invisible');
      }
    });
});





// //fonctionel
// document.addEventListener('DOMContentLoaded', function() {
//     // Fonction pour vérifier si au moins une partie de l'élément est visible à l'écran
//     function isElementPartiallyInViewport(el) {
//       if (!el) return false; // Vérifier si l'élément existe
//       var rect = el.getBoundingClientRect();
//       var windowHeight = window.innerHeight || document.documentElement.clientHeight;
//       var windowWidth = window.innerWidth || document.documentElement.clientWidth;
  
//       return (
//         rect.top <= windowHeight &&
//         rect.bottom >= 0 &&
//         rect.left <= windowWidth &&
//         rect.right >= 0
//       );
//     }
  
//     // Fonction pour ajouter une classe lorsque l'élément est partiellement visible
//     function addClassWhenVisible(element, className) {
//       if (isElementPartiallyInViewport(element)) {
//         element.classList.add(className);
//       } else {
//         element.classList.remove(className); // Enlever la classe si l'élément n'est pas visible
//       }
//     }
  
//     // Élément à surveiller
//     var elementToWatch = document.getElementById('Right');
  
//     // Ajouter une classe lorsque la page est chargée si l'élément est partiellement visible
//     addClassWhenVisible(elementToWatch, 'moveRight');
    
  
//     var scrollTimeout;
    
//     // Écouteur d'événement pour vérifier lorsque l'élément devient partiellement visible lors du défilement
//     window.addEventListener('scroll', function() {
//       clearTimeout(scrollTimeout);
//       scrollTimeout = setTimeout(function() {
//         addClassWhenVisible(elementToWatch, 'moveRight');
//       }, 100); // Délai de 100 millisecondes
//     });
  
//     // Écouteur d'événement pour vérifier lorsque la fenêtre est redimensionnée
//     window.addEventListener('resize', function() {
//       addClassWhenVisible(elementToWatch, 'moveRight');
//     });
//   });
  