<?php get_header() ?>

<div class="bg-beige text-bleu text-body sm:text-body_mobile">

    <div class="relative overflow-hidden h-[25rem] md:h-[30rem]">
        <img src="<?php echo wp_get_attachment_url(26); ?>" class="object-cover w-full h-full flex items-center" alt="Bannière Accueil">


        <div class="absolute top-0 right-0 w-[60%] md:w-full h-full">
            <div class="absolute top-0 right-0 w-[100%] h-full z-10 bg-blanc opacity-40"></div>
            <div class="absolute top-0 right-0 w-[100%] h-full z-10 backdrop-blur-[6px]"></div>

            <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 z-20 w-[85%]">
                <h1 class='sm:text-h1_mobile text-h1 text-bleu mb-10 mt-0 font-dela-gothic-one animBanner'>Comment ferez-vous face au futur en 2050 ?</h1>
                <p class="sm:text-h3_mobile text-h5 font-medium animBanner">Le Futur a Déjà Commencé est une association qui vise à mener des actions de médiations climatiques </p>
                <div class="flex justify-center mt-10 animBanner">
                    <a class="bg-orange hover:bg-orange-fonce transition-colors duration-500 px-10 py-5 border-0 rounded-xl" href="<?php echo esc_url(home_url('/association')); ?>">
                        <p class="m-0 uppercase text-blanc font-bold text-[14px]">Nous découvrir</p>
                    </a>
                </div>
            </div>
        </div>
    </div>


    <div class="sm:mx-[4vw] md:mx-[10vw] mx-[8vw] mt-10">

        <h2 class='sm:text-h2_mobile text-h2 text-bleu mb-16 mt-0 font-dela-gothic-one'>Nos évènements les plus récents</h2>


        <h2 class='sm:text-h2_mobile text-h2 text-bleu mb-8 mt-0 font-dela-gothic-one'>Nos objectifs</h2>

        <div class="grid grid-cols-4 gap-4 md:grid-cols-2 sm:flex sm:flex-col text-noir items-center justify-items-center mb-10 md:mb-4 sm:mb-0">
            <img src="<?php echo wp_get_attachment_url(44); ?>" alt="Objectif n°1" class="w-60 h-full sm:h-fit object-cover">
            <p class="sm:mb-6">Participez aux évènements et découvrez comment vivre différemment pour un avenir positif : s’alimenter, se déplacer, sortir, etc</p>
            <img src="<?php echo wp_get_attachment_url(27); ?>" alt="Objectif n°2" class="w-60 h-full sm:h-fit object-cover">
            <p class="sm:mb-6">Réfléchir ensemble pour comprendre comment s’adapter aux changements climatiques à travers des activités créatives et stimulantes</p>
        </div>

        <div class="grid grid-cols-4 gap-4 md:grid-cols-2 sm:flex sm:flex-col-reverse text-noir items-center justify-items-center mb-32 md:mb-14 sm:mb-10">
            <p>Rejoignez notre association et venez agir avec une équipe positive pour créer des projets de sensibilisation</p>
            <img src="<?php echo wp_get_attachment_url(146); ?>" alt="Objectif n°3" class="w-60 h-full sm:h-fit object-cover">
            <p class="sm:mb-6">Partagez les projets avec le plus grand nombre</p>
            <img src="<?php echo wp_get_attachment_url(43); ?>" alt="Objectif n°4" class="w-60 h-full sm:h-fit object-cover">
        </div>

        <div class="flex flex-col text-vert-clair justify-center mb-20 md:mb-14 sm:mb-10">
            <div class="font-semibold text-[90px] h-20 pl-20 md:pl-0">&ldquo;</div>
            <div class="sm:text-h5_mobile text-h5 flex flex-col items-center">
                <blockquote class="italic">Le futur a déjà commencé</blockquote>
                <p class="font-semibold">Citation provenant de la Déclaration d’Arc-et-Senans, avril 1972</p>
            </div>
            <div class="font-semibold text-[90px] h-20 flex justify-end pr-20 md:pr-0">&rdquo;</div>
        </div>

    </div>


    <div class="font-semibold relative overflow-hidden h-[13rem] md:h-[20rem]">
        <img src="<?php echo wp_get_attachment_url(146); ?>" class="object-cover w-full h-full flex items-center" alt="bannière plus d'événements">
        <div class="absolute top-0 left-0 w-full h-full opacity-70 bg-blanc z-10"></div>
        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 z-20 w-full flex md:flex-col gap-10 md:gap-6 items-center justify-center">
            <h3 class="sm:text-h3_mobile text-h3 max-w-xl ml-4">
                Découvrez tous nos événements qui ont déjà eu lieu en Franche-Comté et en Suisse
            </h3>
            <div class="flex mr-4">
                <a class="bg-bleu hover:bg-orange-fonce transition-colors duration-500 px-14 py-5 border-0 rounded-xl" href="<?php echo esc_url(home_url('/don')); ?>">
                    <p class="m-0 uppercase text-blanc text-center font-bold">Tout voir</p>
                </a>
            </div>
        </div>
    </div>


    <div class="my-20 sm:mx-[4vw] md:mx-[10vw] mx-[8vw]">
        <?php echo do_shortcode('[wrt_print_rt_wp_responsive_tabs tabset_id="1"]'); ?>
    </div>


    <div class="flex flex-col items-center bg-vert-clair">
        <h3 class="sm:text-h3_mobile text-h3 text-blanc text-center mt-16 mb-10 mx-4 font-dela-gothic-one">Participez aux financements de nos projets</h3>
        <div class="flex justify-center mb-16">
            <a class="bg-orange hover:bg-orange-fonce transition-colors duration-500 px-14 py-5 border-0 rounded-xl" href="<?php echo esc_url(home_url('/don')); ?>">
                <p class="m-0 uppercase text-blanc font-bold">Je fais un don</p>
            </a>
        </div>
    </div>

</div>


<?php get_footer() ?>