<?php
/*
Template Name: 2050 LookUp!
*/

get_header();
?>



<div class="bg-beige text-bleu text-body sm:text-body_mobile">


    <div class="text-center font-dela-gothic-one relative overflow-hidden h-[19rem]">
        <img src="http://localhost/LFADC/wp-content/uploads/2023/12/climat-scaled-1.webp" alt="Image de la bannière" class="object-cover w-full h-full" style="object-position: 50% 69%;">
        <div class="absolute top-0 left-0 w-full h-full opacity-60 bg-blanc z-10"></div>
        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 z-20 w-full">
            <h1 class="sm:text-h1_mobile text-h1">
                Imaginons notre futur ensemble
            </h1>
            <h3 class='sm:text-h3_mobile text-h3 mt-8 mb-0'>
                <?php the_title(); ?>
            </h3>
        </div>
    </div>

    <div class="sm:mx-[4vw] md:mx-[10vw] mx-[20vw] mt-10">

        <h2 class='sm:text-h2_mobile text-h2 text-bleu mb-16 mt-0 font-bold uppercase text-center'>Bienvenue dans l'univers captivant de 2050 LookUp!</h2>

        <div class="grid grid-cols-2 md:block items-center mb-20">
            <div class="flex justify-center md:mb-5">
                <?php echo wp_get_attachment_image(33, array(400, 400)); ?>
            </div>

            <div class="px-4 md:mt-5 text-noir">
                <h3 class="sm:text-h3_mobile text-h3 font-bold mb-10">Les origines</h3>
                <p class="mb-5">Ce projet original et novateur, porté par Daniel Gilbert, a vu le jour en 2022. </p>
                <p class="mb-5">Il a imaginé un festival unique en son genre, fait de briques et de brocs, d’humour et d’eau fraîche, pour réfléchir ensemble à nos vies en 2050.</p>
                <p class="mb-10">En seulement deux éditions, le festival a rassemblé plus d’une centaine d’élèves et enseignants volontaires de Franche-Comté, partageant le même intérêt pour demain.</p>
                <div class="flex justify-center">
                    <a class="bg-vert-clair hover:bg-vert-fonce transition-colors duration-500 px-8 py-4 border-0 rounded-xl" target="_blank" href="https://www.inrae.fr/actualites/olivier-hamant">
                        <p class="m-0 uppercase text-blanc text-[12px] font-bold">Découvrez 2050 LookUp!</p>
                    </a>
                </div>
            </div>
        </div>

        <h2 class='sm:text-h2_mobile text-h2 text-bleu mb-6 mt-0 font-bold text-center'>Inspirer un avenir durable</h2>

        <p class="text-center text-noir">2050 Look UP! est une invitation à réfléchir à notre impact sur l’environnement et à façonner ensemble notre avenir. Grâce à une approche ludique, le projet encourage la créativité et l’innovation tout en offrant une forme d’apprentissage pédagogique qui séduit un large public. Les participants sont invités à laisser libre cours à leur imagination pour répondre à la question cruciale : “Comment vivrons-nous en 2050 ?”</p>

        <div class="flex gap-6 mt-20 mb-10">
            <div class="w-[60%] h-[20%]">
            <?php echo wp_get_attachment_image(34, array(400, 400)); ?>
            </div>
            <div class="w-[60%] h-[20%]">
            <?php echo wp_get_attachment_image(35, array(400, 400)); ?>
            </div>
            <div class="w-[60%] h-[20%]">
            <?php echo wp_get_attachment_image(36, array(400, 400)); ?>
            </div>
            <div class="w-[60%] h-[20%]">
            <?php echo wp_get_attachment_image(37, array(400, 400)); ?>
            </div>
        </div>

        <div class="text-center text-noir mb-20">
            <p class="mb-5">" Il est très aisé de s'intégrer dans le projet 2050 Look Up !, tant il accorde de place à notre liberté pédagogique. "</p>
            <p>Arthur Gay</p>
            <p>Professeur de technologie - collège Victor Hugo de Besançon</p>
        </div>

    </div>

    <div class="text-center font-bold relative overflow-hidden h-[19rem]">
        <img src="http://localhost/LFADC/wp-content/uploads/2023/12/climat-scaled-1.webp" alt="Image de la bannière" class="object-cover w-full h-full" style="object-position: 50% 69%;">
        <div class="absolute top-0 left-0 w-full h-full opacity-60 bg-blanc z-10"></div>
        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 z-20 w-full">
            <h3 class='sm:text-h3_mobile text-h3 mt-8 mb-0'>
                Vous pouvez participer au projet avec nous !
            </h3>
            <h3 class='sm:text-h3_mobile text-h3 mt-5 mb-0'>
                Rendez-vous sur le site dédié en cliquant sur le bouton ci-dessous
            </h3>
            <div class="flex justify-center mt-12">
                <a class="bg-orange hover:bg-orange-fonce transition-colors duration-500 px-10 py-5 border-0 rounded-xl" target="_blank" href="https://www.inrae.fr/actualites/olivier-hamant">
                    <p class="m-0 uppercase text-blanc text-[14px]">Redirection vers le site événementiel</p>
                </a>
            </div>
        </div>
    </div>

</div>