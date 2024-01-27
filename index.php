<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dev Freelancer</title>
    <!-- Ajoutez le lien vers le fichier CSS Tailwind -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <!-- Ajoutez votre propre fichier CSS personnalisé ici si nécessaire -->
</head>
<?php include ('inc/header.php');?>
<body class="font-sans bg-zinc-800">
    <!-- Section de compétences -->
    <section class="py-16">
        <div class="container mx-auto text-center">
            <h2 class="text-2xl font-semibold">Mes Compétences</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8 mt-8">
                <!-- Ajoutez ici vos compétences sous forme de cartes -->
                <div class="bg-white p-4 rounded-lg shadow-md">
                    <h3 class="text-lg font-semibold">Développement Frontend</h3>
                    <p>HTML, CSS, JavaScript, React</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow-md">
                    <h3 class="text-lg font-semibold">Développement Backend</h3>
                    <p>PHP, SQL, NO SQL, LARAVEL</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow-md">
                    <h3 class="text-lg font-semibold">Design Web</h3>
                    <p>UI/UX, Figma</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow-md">
                    <h3 class="text-lg font-semibold">Responsive Design</h3>
                    <p>CSS Flexbox, Grid, TAILWIND</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Section de portfolio -->
    <section class="bg-gray-100 py-16">
        <div class="container mx-auto text-center">
            <h2 class="text-2xl font-semibold">Portfolio</h2>
            <!-- Ajoutez ici vos projets sous forme de cartes -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 mt-8">
                <div class="bg-white p-4 rounded-lg shadow-md">
                    <h3 class="text-lg font-semibold">Projet 1</h3>
                    <p>Description du projet.</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow-md">
                    <h3 class="text-lg font-semibold">Projet 2</h3>
                    <p>Description du projet.</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow-md">
                    <h3 class="text-lg font-semibold">Projet 3</h3>
                    <p>Description du projet.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Section de contact -->
    <section class="py-16">
        <div class="container mx-auto text-center">
            <h2 class="text-2xl font-semibold">Contactez-moi</h2>
            <p class="mt-4">Prêt à démarrer un projet ensemble ?</p>
            <!-- Ajoutez ici un formulaire de contact ou vos informations de contact -->
        </div>
    </section>

    <!-- Pied de page -->
   <?php include ('inc/footer.php');?>

</body>
</html>
