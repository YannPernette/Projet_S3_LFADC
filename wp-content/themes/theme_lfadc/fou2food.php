<?php
/*
Template Name: Fou2Food
*/

get_header();
?>



<div class="bg-beige text-bleu text-body sm:text-body_mobile">

    <div class="text-center relative overflow-hidden h-[19rem]">
        <img src="<?php echo wp_get_attachment_url(43); ?>" class="object-cover w-full h-full flex items-center" alt="Bannière Fou2Food">
        <div class="absolute top-0 left-0 w-full h-full opacity-60 bg-blanc z-10"></div>
        <div class="absolute font-dela-gothic-one top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 z-20 w-full">
            <h1 class="sm:text-h1_mobile text-h1 animBanner">
                Un défi culinaire
            </h1>
            <h3 class='sm:text-h3_mobile text-h3 mt-8 mb-0 animBanner'>
                <?php the_title(); ?> en 2050
            </h3>
        </div>
    </div>

    <div class="sm:mx-[4vw] md:mx-[10vw] mx-[8vw] mt-10">

        <h2 class='sm:text-h2_mobile text-h2 text-bleu mb-16 mt-0 font-bold uppercase text-center'>Nouveauté ! Un défi culinaire (inter)national</h2>

        <div class="flex gap-6 justify-center items-center mt-10">
            <img src="<?php echo wp_get_attachment_url(182); ?>" alt="Logo des Maîtres Cuisiniers de France" class="w-28">
            <p class="max-w-xl">
                Le futur a déjà commencé et les Maîtres Cuisiniers de France vous proposent de participer au premier défi culinaire “Fou2Food en 2050”.
            </p>
        </div>

        <h2 class="sm:text-h2_mobile text-h2 font-dela-gothic-one text-center mt-20 mb-12">Un projet gourmand !</h2>

        <div class="grid grid-cols-2 gap-2 md:block mb-24 mx-[10vw] md:mx-0">
            <div class="h-fit flex md:mb-5 md:justify-center">
                <?php echo wp_get_attachment_image(18, array(400, 400)); ?>
            </div>

            <div class="px-4 md:mt-5 text-noir">
                <h3 class="sm:text-h3_mobile text-h3 text-bleu font-dela-gothic-one mb-8 md:mb-6 md:mt-10">En quelques mots</h3>
                <p class="mb-5 md:mb-3">Pour répondre à cette question nous invitons les étudiants et élèves à réfléchir et étudier les conditions de vie d’aujourd’hui à 2050, ainsi qu’aux conséquences sur les ressources et l’agriculture.</p>
                <p>Ainsi avec Fou2Food en 2050, les élèves nous invitent dans un voyage culinaire vers le futur en élaborant un menu.</p>
                <p class="mb-10">Cet espace s’ajoutera au sein du festival “2050 Look Up!” 2024.</p>
                <div class="flex justify-center">
                    <a class="bg-vert-clair hover:bg-vert-fonce transition-colors duration-500 px-8 py-4 md:px-14 border-0 rounded-xl" target="_blank" href="<?php echo esc_url(home_url('/')); ?>">
                        <p class="m-0 uppercase text-blanc text-[12px] font-bold text-center">Découvrez Fou2Food</p>
                    </a>
                </div>
            </div>
        </div>


        <h2 class='sm:text-h2_mobile text-h2 text-bleu mb-16 md:mb-12 sm:mb-8 mt-0 font-dela-gothic-one'>La cerise sur le gâteau !</h2>

        <div class="flex md:flex-col gap-6 items-center mb-20 sm:mb-12">
            <div class="w-full h-60 overflow-hidden flex items-center md:justify-center">
                <?php echo wp_get_attachment_image(19, array(500, 300)); ?>
            </div>
            <div class="md:justify-items-center sm:mt-[-10px]">
                <h3 class="text-h3 font-bold mb-4 md:mb-3">Réalisation des recettes sélectionnées par des grands cuisiners</h3>
                <p class="text-noir mb-2">Dans le cadre du pays de Montbéliard, capitale Française de la culture 2024.</p>
                <p class="text-noir mb-2">Des grands chefs cuisiniers se réuniront au printemps 2024 pour réaliser les menus sélectionnés : ce sera l’événement d’ouverture du festival “2050 Look Up!” 2024.</p>
                <p class="text-noir">Les menus sélectionnés lors de la délibération seront mis à l’honneur fin mai 2024 avec la réalisation par des grands chefs et des apprentis cuisiniers, au CFA de Bethoncourt.</p>
            </div>
        </div>

        <div class="flex md:flex-col-reverse gap-6 items-center mb-20 sm:mb-12">
            <div class="md:justify-items-center sm:mt-[-10px]">
                <h3 class="text-h3 font-bold mb-4 md:mb-3">Édition d’un livre de recettes</h3>
                <p class="text-noir">Une sélection de recettes sera répertoriée dans un livre édité pour l’occasion.</p>
            </div>
            <div class="w-full h-60 overflow-hidden flex items-center justify-end md:justify-center">
                <?php echo wp_get_attachment_image(23, array(500, 300)); ?>
            </div>
        </div>

        <div class="flex md:flex-col gap-6 items-center mb-28 sm:mb-12">
            <div class="w-full h-60 overflow-hidden flex items-center md:justify-center">
                <?php echo wp_get_attachment_image(36, array(500, 300)); ?>
            </div>
            <div class="md:justify-items-center sm:mt-[-10px]">
                <h3 class="text-h3 font-bold mb-4 md:mb-3">Obtention d'un diplôme de participation</h3>
                <p class="text-noir">Dans le but de remercier le travail et la contribution de chacun !</p>
            </div>
        </div>

    </div>

    <div class="text-center font-bold relative overflow-hidden h-[25rem]">
        <img src="<?php echo wp_get_attachment_url(146); ?>" class="object-cover w-full h-full flex items-center" alt="Site Fou2Food">
        <div class="absolute top-0 left-0 w-full h-full opacity-70 bg-blanc z-10"></div>
        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 z-20 w-full">
            <h3 class='sm:text-h3_mobile text-h3 mt-0 mb-0 sm:mx-4'>
                Vous pouvez participer au projet avec nous !
            </h3>
            <h3 class='sm:text-h3_mobile text-h3 mt-5 mb-0 sm:mx-4'>
                Rendez-vous sur le site dédié en cliquant sur le bouton ci-dessous
            </h3>
            <div class="flex justify-center mt-12 sm:mx-4">
                <a class="bg-orange hover:bg-orange-fonce transition-colors duration-500 px-10 py-5 border-0 rounded-xl" target="_blank" href="<?php echo esc_url(home_url('/')); ?>">
                    <p class="m-0 uppercase text-blanc text-[14px]">Redirection vers le site événementiel</p>
                </a>
            </div>
        </div>
    </div>

</div>

<?php get_footer(); ?>