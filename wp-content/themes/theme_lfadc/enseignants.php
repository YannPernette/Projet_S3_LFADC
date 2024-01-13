<?php
/*
Template Name: Enseignants
*/

get_header();
?>

<div class="bg-beige text-bleu text-body sm:text-body_mobile">

    <div class="text-center font-dela-gothic-one relative overflow-hidden h-[19rem]">
        <div class="object-cover w-full h-full flex items-center">
            <?php echo wp_get_attachment_image(42, 'full'); ?>
        </div>
        <div class="absolute top-0 left-0 w-full h-full opacity-60 bg-blanc z-10"></div>
        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 z-20 w-full">
            <h1 class="sm:text-h1_mobile text-h1">
                <?php the_title(); ?>
            </h1>
            <h3 class='sm:text-h3_mobile text-h3 mt-8 mb-0'>
                Supports de présentation pour enseignants
            </h3>
        </div>
    </div>

    <div class="sm:mx-[4vw] md:mx-[10vw] mx-[8vw] mt-10">

        <div class="flex flex-col gap-2 text-center max-w-2xl mx-auto mb-24">
            <p>Vous êtes enseignant et vous souhaitez organiser des activités avec vos élèves ?</p>
            <p>Retrouvez tous nos supports de présenation de nos programmes principaux : <span class="font-bold">2050 Look Up</span> et <span class="font-bold">Fou 2 Food</span>, et un formulaire d’inscription pour proposer vos projets.</p>
        </div>


        <h2 class="sm:text-h2_mobile text-h2 text-bleu md:text-center mb-6 mt-0 font-dela-gothic-one">2050 Look UP</h2>

        <div class="grid grid-cols-2 md:flex md:flex-col gap-4 md:gap-10 items-center mb-10">
            <div>
                <h3 class="font-bold sm:text-h5_mobile text-h5 text-center max-w-sm mx-auto">Prenez connaissance du flyer de présentation du projet 2050 Look UP</h3>
                <div class="flex justify-center mt-8">
                    <a class="bg-orange hover:bg-orange-fonce transition-colors duration-500 px-12 py-5 border-0 rounded-xl" target="_blank" href="https://lefuturadejacommence.fr/wp-content/uploads/2023/09/FLYER-Presentation-du-projet.pdf">
                        <p class="m-0 uppercase text-blanc font-bold">Voir le PDF</p>
                    </a>
                </div>
            </div>

            <div class="">
                <h4 class="font-bold sm:text-h5_mobile text-h5 mb-4">On vous présente le projet ici !</h4>
                <div class="border-[3px] border-vert-clair rounded-xl p-5 text-noir">
                    <h5 class="sm:text-h5 text-h5 font-dela-gothic-one text-vert-clair mb-4">Bienvenue dans l'univers captivant de 2050 Look UP!</h5>
                    <p class="mb-2">Vous avez décidé de rejoindre le projet "2050 Look Up!" avec votre classe. Dans ce document vous trouverez toutes les explications et méthodes pour mettre en œuvre le projet. Tout au long de cette aventure, notre équipe sera à vos côtés pour répondre à vos questions, vous accompagner dans la réalisation des ateliers et à valoriser les réalisations des classes lors du festival.</p>
                    <p class="mb-2">La "Look UP attitude" est une approche positive qui encourage à lever les yeux vers l'horizon, à explorer de nouvelles idées et à imaginer des solutions pour construire un avenir serein.</p>
                    <blockquote class="italic tracking-wide">Extrait de la première version du document pédagogique pour les professeurs de l’événement 2050 Look UP</blockquote>
                </div>
            </div>
        </div>

        <div class="flex sm:flex-col gap-10 sm:gap-2 justify-center items-center mb-20">
            <p class="max-w-sm">Découvrez tous les documents pédagogiques complets sur le site dédié</p>
            <div class="flex justify-center">
                <a class="bg-vert-clair hover:bg-vert-fonce transition-colors duration-500 px-8 py-4 md:px-14 border-0 rounded-xl" target="_blank" href="https://www.inrae.fr/actualites/olivier-hamant">
                    <p class="m-0 uppercase text-blanc text-[12px] font-bold text-center">Aller sur 2050 LookUp!</p>
                </a>
            </div>
        </div>


        <h2 class="sm:text-h2_mobile text-h2 text-bleu md:text-center mb-6 mt-0 font-dela-gothic-one">Fou2Food</h2>

        <div class="grid grid-cols-2 md:flex md:flex-col-reverse gap-4 md:gap-10 items-center mb-10">
            <div class="">
                <h4 class="font-bold sm:text-h5_mobile text-h5 mb-4">On vous présente le projet ici !</h4>
                <div class="border-[3px] border-vert-clair rounded-xl p-5 text-noir">
                    <h5 class="sm:text-h5 text-h5 font-dela-gothic-one text-vert-clair mb-4">Un défi culinaire !</h5>
                    <p class="mb-2">L’association “Le futur a déjà commencé” et les Maitres Cuisiniers de France vous proposent de participer au premier défi culinaire “Fou2Food en 2050”.</p>
                    <p class="mb-2">Embarquez dans une aventure unique où le futur de l’alimentation et de l’argiculture régionale se rencontrent. Dans ce défi, nous vous invitons à adopter une approche ludique et pédagogique pour aborder l’avenir avec optimisme.</p>
                    <blockquote class="italic tracking-wide">Extrait du Flyer de présentation de l’événement Fou2Food</blockquote>
                </div>
            </div>
            <div>
                <h3 class="font-bold sm:text-h5_mobile text-h5 text-center max-w-sm mx-auto">Prenez connaissance du flyer de présentation du projet Fou2Food</h3>
                <div class="flex justify-center mt-8">
                    <a class="bg-orange hover:bg-orange-fonce transition-colors duration-500 px-12 py-5 border-0 rounded-xl" target="_blank" href="https://lefuturadejacommence.fr/wp-content/uploads/2023/09/Flyer-presentation-F2F.pdf">
                        <p class="m-0 uppercase text-blanc font-bold">Voir le PDF</p>
                    </a>
                </div>
            </div>
        </div>

        <div class="flex sm:flex-col gap-10 sm:gap-2 justify-center items-center mb-20">
            <p class="max-w-sm">Découvrez tous les documents pédagogiques complets sur le site dédié</p>
            <div class="flex justify-center">
                <a class="bg-vert-clair hover:bg-vert-fonce transition-colors duration-500 px-8 py-4 md:px-14 border-0 rounded-xl" target="_blank" href="https://www.inrae.fr/actualites/olivier-hamant">
                    <p class="m-0 uppercase text-blanc text-[12px] font-bold text-center">Aller sur Fou2Food</p>
                </a>
            </div>
        </div>

    </div>


    <div class="font-semibold relative overflow-hidden h-[13rem] md:h-[20rem]">
        <img src="<?php echo wp_get_attachment_url(146); ?>" class="object-cover w-full h-full flex items-center" alt="bannière plus d'événements">
        <div class="absolute top-0 left-0 w-full h-full opacity-70 bg-blanc z-10"></div>
        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 z-20 w-full flex md:flex-col gap-10 md:gap-6 items-center justify-center">
            <h3 class="sm:text-h3_mobile text-h3 max-w-lg ml-4">
                Pour en savoir plus sur les événements menés, lisez tous nos articles à ce propos
            </h3>
            <div class="flex mr-4">
                <a class="bg-bleu hover:bg-orange-fonce transition-colors duration-500 px-14 py-5 border-0 rounded-xl" href="<?php echo esc_url(home_url('/don')); ?>">
                    <p class="m-0 uppercase text-blanc text-center font-bold">Tout voir</p>
                </a>
            </div>
        </div>
    </div>


    <div class="sm:mx-[4vw] md:mx-[10vw] mx-[8vw] mt-20">

        <h2 class="sm:text-h2_mobile text-h2 text-bleu mb-8 mt-0 font-dela-gothic-one">Espace Projet</h2>

        <div class="flex md:flex-col-reverse gap-10 justify-center mb-10">
            <div class="w-[40rem] md:w-auto">
                <p class="mb-4 font-semibold">Envie de notre intervention pour présenter notre association à vos élèves ?</p>
                <p class="text-noir">Inscrivez vous via notre formulaire et découvrez entièrement le projet grâce à nos documents pédagogiques.</p>
            </div>

            <div class="w-80 md:w-72 sm:w-60 md:mt-10 md:flex md:mx-auto">
                <?php echo wp_get_attachment_image(87, array(400, 400)); ?>
            </div>
        </div>

        <p class="mb-32">INSERER FORMULAIRE DE KYKY</p>


    </div>

</div>

<?php get_footer(); ?>