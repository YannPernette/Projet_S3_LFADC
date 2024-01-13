<?php get_header() ?>

<div class="bg-beige text-bleu text-body sm:text-body_mobile">

    <div class="relative">
        <div class="">
            <?php echo wp_get_attachment_image(48, 'full'); ?>
        </div>
        <div class="absolute top-0 left-[40%]">
            <h1 class='sm:text-h2_mobile text-h2 text-bleu mb-16 mt-0 font-dela-gothic-one'>Comment ferez-vous face au futur en 2050 ?</h1>
            <p>Le Futur a Déjà Commencé est une association qui vise à mener des actions de médiations climatiques </p>
            <div class="flex justify-center mt-12">
                <a class="bg-orange hover:bg-orange-fonce transition-colors duration-500 px-10 py-5 border-0 rounded-xl" target="_blank" href="https://www.inrae.fr/actualites/olivier-hamant">
                    <p class="m-0 uppercase text-blanc text-[14px]">Redirection vers le site événementiel</p>
                </a>
            </div>
        </div>
    </div>


    <div class="sm:mx-[4vw] md:mx-[10vw] mx-[8vw] mt-10">

        <h2 class='sm:text-h2_mobile text-h2 text-bleu mb-16 mt-0 font-dela-gothic-one'>Nos évènements les plus récents</h2>


        <h2 class='sm:text-h2_mobile text-h2 text-bleu mb-4 mt-0 font-dela-gothic-one'>Nos objectifs</h2>

        <div class="grid grid-cols-4 text-noir items-center justify-items-center">
            <div class="mx-2">
                <p>Participez aux évènements et découvrez comment vivre différemment pour un avenir positif : s’alimenter, se déplacer, sortir, etc</p>
            </div>
            <div class="w-[90%] h-[80%] overflow-hidden mx-2">
                <div class="mt-[-10%]"><?php echo wp_get_attachment_image(34, array(400, 400)); ?></div>
            </div>
            <div class="mx-2">
                <p>Réfléchir ensemble pour comprendre comment s’adapter aux changements climatiques à travers des activités créatives et stimulantes</p>
            </div>
            <div class="w-[90%] h-[80%] overflow-hidden mx-2">
                <div class="mt-[-10%]"><?php echo wp_get_attachment_image(34, array(400, 400)); ?></div>
            </div>
        </div>

        <div class="grid grid-cols-4 text-noir items-center justify-items-center mb-20">
            <div class="w-[90%] h-[80%] overflow-hidden mx-2">
                <div class="mt-[-10%]"><?php echo wp_get_attachment_image(34, array(400, 400)); ?></div>
            </div>
            <div class="mx-2">
                <p>Rejoignez notre association et venez agir avec une équipe positive pour créer des projets de sensibilisation</p>
            </div>
            <div class="w-[90%] h-[80%] overflow-hidden mx-2">
                <div class="mt-[-10%]"><?php echo wp_get_attachment_image(34, array(400, 400)); ?></div>
            </div>
            <div class="mx-2">
                <p>Partagez les projets avec le plus grand nombre</p>
            </div>
        </div>

        <div class="flex text-vert-clair justify-center gap-16 mb-20">
            <div class="font-semibold text-[90px] h-20 mt-[-55px] overflow-hidden">&ldquo;</div>
            <div class="sm:text-h5_mobile text-h5 flex flex-col items-center">
                <blockquote class="italic">Le futur a déjà commencé</blockquote>
                <p class="font-semibold">Citation provenant de la Déclaration d’Arc-et-Senans, avril 1972</p>
            </div>
            <div class="font-semibold text-[90px] h-20 mt-6 overflow-hidden">&rdquo;</div>
        </div>

    </div>

    <div class="text-center font-semibold relative overflow-hidden h-[10rem]">
        <div class="w-full"><?php echo wp_get_attachment_image(42, 'full'); ?></div>
        <div class="absolute top-0 left-0 w-full h-full opacity-60 bg-blanc z-10"></div>
        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 z-20 w-full flex mx-32 gap-10">
            <h3 class="sm:text-h3_mobile text-h3">
                Découvrez tous nos évènements qui ont déjà eu lieu en Franche-Comté et en Suisse
            </h3>
            <div class="flex justify-center mb-16">
                <a class="bg-bleu hover:bg-orange-fonce transition-colors duration-500 px-14 py-5 border-0 rounded-xl" href="<?php echo esc_url(home_url('/don')); ?>">
                    <p class="m-0 uppercase text-blanc font-bold">Tout voir</p>
                </a>
            </div>
        </div>
    </div>


    <div class="my-20 sm:mx-[4vw] md:mx-[10vw] mx-[8vw]">
        <?php echo do_shortcode('[wrt_print_rt_wp_responsive_tabs tabset_id="1"]'); ?>
    </div>


    <div class="flex flex-col items-center bg-vert-clair">
        <h3 class="sm:text-h3_mobile text-h3 text-blanc mt-16 mb-10 font-dela-gothic-one">Participez aux financements de nos projets</h3>
        <div class="flex justify-center mb-16">
            <a class="bg-orange hover:bg-orange-fonce transition-colors duration-500 px-14 py-5 border-0 rounded-xl" href="<?php echo esc_url(home_url('/don')); ?>">
                <p class="m-0 uppercase text-blanc font-bold">Je fais un don</p>
            </a>
        </div>
    </div>

</div>


<?php get_footer() ?>