<?php include ('inc/header.php');?>
<body class="font-sans bg-zinc-800">


    <!-- Section de compétences -->
    <section class="py-16 bg-gray-300">
   
        <div class="container mx-auto text-center">
            <h2 class="text-2xl font-semibold">Mes Compétences</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8 mt-8">
                <!-- Ajoutez ici vos compétences sous forme de cartes -->
                <div class="bg-gray-100 p-5 rounded-lg shadow-2xl">
                    <h3 class="text-lg font-semibold">Développement Frontend</h3>
                    <p>HTML, CSS, JavaScript, React</p>
                </div>
                <div class="bg-gray-100 p-5 rounded-lg shadow-2xl">
                    <h3 class="text-lg font-semibold">Développement Backend</h3>
                    <p>PHP, SQL, NO SQL, LARAVEL</p>
                </div>
                <div class="bg-gray-100 p-5 rounded-lg shadow-2xl">
                    <h3 class="text-lg font-semibold">Design Web</h3>
                    <p>UI/UX, Figma</p>
                </div>
                <div class="bg-gray-100 p-5 rounded-lg shadow-2xl">
                    <h3 class="text-lg font-semibold">Responsive Design</h3>
                    <p>CSS Flexbox, Grid, TAILWIND</p>
                </div>
                <div class="bg-gray-100 p-5 rounded-lg shadow-2xl">
                    <h3 class="text-lg font-semibold">CMS</h3>
                    <p>Wordpress</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Section de portfolio -->
    <section class="bg-gray-300 py-16">
        <div class="container mx-auto text-center">
            <h2 class="text-2xl font-semibold">Portfolio</h2>
            <!-- Ajoutez ici vos projets sous forme de cartes -->
            
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 mt-8">
                <div class="bg-white p-4 rounded-lg shadow-2xl">
                    <h3 class="text-lg font-semibold"><a href="http://localhost/ateliee/" target="_blank">atliee.fr</a></h3> 
                        <a href="http://localhost/ateliee/" target="_blank">atliee.fr
                            <img src="asset/img/atliee.png" class="w-1/4 mx-auto rounded-lg" alt="Description de l'image">
                         </a>
              
                        <p>site vitrine "Création d' objets de décoration"</p>

                </div>
                <div class="bg-white p-4 rounded-lg shadow-2xl">
                <h3 class="text-lg font-semibold"><a href="http://http://localhost/ExamRestor/" target="_blank">leptitfut.fr</a></h3> 
                        <a href="http://localhost/ExamRestor/" target="_blank">leptitfut.fr
                            <img src="asset/img/ptitfut.jpg" class="w-1/4 mx-auto rounded-lg" alt="Description de l'image">
                         </a>
              
                        <p>site vitrine "Bar à bières, vins et spiritueux"</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow-2xl">
                    <h3 class="text-2xl font-semibold my-8">Vôtre Projet</h3>
                    <p>Le site Web dont vous avez toujours rêvé</p>
                </div>
            </div>
        </div>
    </section>
    <div class="flex justify-center items-center h-2/3 bg-gray-300">
    <div class="bg-white p-4 rounded-lg shadow-2xl w-full sm:w-1/2 md:w-1/2 lg:w-1/2 xl:w-1/3 text-center">
        <h3 class="text-lg font-semibold"><a href="https://github.com/Jeremie-AUBREJAT" target="_blank">Github</a></h3> 
        <a href="https://github.com/Jeremie-AUBREJAT" target="_blank">
            Github
            <img src="asset/img/github.jpg" class="w-1/4 mx-auto mt-2 rounded-lg" alt="Description de l'image">
        </a>
    </div>
</div>
    <!-- Section de contact -->
    <section class="py-16 bg-gray-300">
        <div class="container mx-auto text-center">
            <h2 class="text-2xl font-semibold">Contactez-moi</h2>
            <p class="mt-4">Prêt à démarrer un projet ensemble ?</p>
            <!-- Ajoutez ici un formulaire de contact ou vos informations de contact -->
        </div>
    </section>

    <!-- Pied de page -->
   <?php include ('inc/footer.php');?>

</body>

