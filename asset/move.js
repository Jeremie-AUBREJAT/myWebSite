function isSmartphone() {
  return /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent);
}

window.onload = function() {
  if (!isSmartphone()) {
    var elementsToWatch = [
      { id: 'Right', id2: 'Left' },
      { id: 'Right2', id2: 'Left2' }
    ];

    elementsToWatch.forEach(function(item) {
      var elementToWatch = document.getElementById(item.id);
      var elementToWatch2 = document.getElementById(item.id2);

      function isElementPartiallyInViewport(el) {
        if (!el) return false;
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

      function updateElementVisibility(elementToWatch, elementToWatch2) {
        if (isElementPartiallyInViewport(elementToWatch)) {
          elementToWatch.classList.add('moveRight');
          elementToWatch.classList.remove('invisible');
          elementToWatch2.classList.add('moveLeft');
          elementToWatch2.classList.remove('invisible');
        }
      }

      updateElementVisibility(elementToWatch, elementToWatch2);

      window.addEventListener('scroll', function() {
        updateElementVisibility(elementToWatch, elementToWatch2);
      });

      window.addEventListener('resize', function() {
        updateElementVisibility(elementToWatch, elementToWatch2);
      });
    });
  }
};




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
  