

<?php include ('inc/head.php');?>
<body class="bg-gray-200">
<?php include ('inc/header.php');?>
<div id="contact" class="container mx-auto my-8 p-8 bg-gray-300 shadow-md rounded-md">
    <h2 class="text-2xl font-semibold mb-4">Contactez-nous</h2>
    <form id="contactForm" onsubmit="return validateForm()" class="space-y-4">
        <div class="flex flex-col">
            <label for="nom" class="text-m font-medium">Nom :</label>
            <input type="text" id="nom" name="nom" placeholder= "Tapez vôtre nom"required class="border p-2 rounded-md">
        </div>

        <div class="flex flex-col">
            <label for="prenom" class="text-m font-medium">Prénom :</label>
            <input type="text" id="prenom" name="prenom" placeholder= "Tapez vôtre prénom" required class="border p-2 rounded-md">
        </div>

        <div class="flex flex-col">
            <label for="email" class="text-m font-medium">Email :</label>
            <input type="email" id="email" name="email" placeholder= "Tapez vôtre E-mail"required class="border p-2 rounded-md">
        </div>

        <div class="flex flex-col">
            <label for="message" class="text-m font-medium">Message :</label>
            <textarea id="message" name="message" rows="4" placeholder= "Tapez vôtre message"required class="border p-2 rounded-md"></textarea>
        </div>

        <p id="errorMessage" class="error"></p>

        <button type="submit" class="bg-gray-700 text-white p-2 rounded-md hover:bg-gray-600 transition">Envoyer</button>
    </form>
</div>

<script>
      function validateForm() {
        // Récupérer les valeurs des champs
        var nom = document.getElementById("nom").value;
        var prenom = document.getElementById("prenom").value;
        var email = document.getElementById("email").value;
        var message = document.getElementById("message").value;

        // Vérifier si les champs sont vides
        if (nom === "" || prenom === "" || email === "" || message === "") {
            document.getElementById("errorMessage").innerHTML = "Tous les champs doivent être remplis.";
            return false;
        }

        // Vérifier si l'email est valide
        var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailRegex.test(email)) {
            document.getElementById("errorMessage").innerHTML = "Veuillez saisir une adresse e-mail valide.";
            return false;
        }

        // Réinitialiser le message d'erreur
        document.getElementById("errorMessage").innerHTML = "";

        // Vous pouvez ajouter ici le code pour envoyer le formulaire par e-mail (côté serveur)

        // Empêcher le formulaire de se soumettre normalement
        return false;
    }
</script>

</body>
<?php include ('inc/footer.php');?>
</html>
