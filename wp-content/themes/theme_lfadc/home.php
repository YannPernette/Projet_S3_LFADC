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

        <h2 class='sm:text-h2_mobile text-h2 text-bleu mb-10 mt-0 font-dela-gothic-one'>Nos évènements</h2>


        <div class="flex flex-wrap justify-center gap-10 mb-20">

            <?php $today = new DateTime(); // Get today's date
            $today = $today->format('Y-m-d'); // Format today's date

            $args = array(
                'post_type' => 'evenement',
                'posts_per_page' => 4, // Set the maximum number of posts
                'meta_key' => 'date-debut',
                'orderby' => 'meta_value',
                'order' => 'DESC',
                'meta_query' => array(
                    array(
                        'key' => 'date-debut',
                        'compare' => 'EXISTS', // only compare if the key exists
                    ),
                ),
            );

            $query = new WP_Query($args);
            ?>

            <?php if ($query->have_posts()) : ?>
                <?php while ($query->have_posts()) : $query->the_post(); ?>
                    <?php $date_debut = get_field('date-debut'); ?>

                    <article class="bg-vert-fonce text-blanc flex flex-row w-60 rounded-xl dropShadowEvenement transition-shadow duration-300">
                        <a href="<?php the_permalink(); ?>">

                            <div class="w-full h-28 overflow-hidden rounded-t-xl image-container transition-filter duration-500">
                                <div class="">
                                    <?php the_post_thumbnail(); ?>
                                </div>
                            </div>

                            <div class="p-4">
                                <div class="mb-3">
                                    <?php
                                    setlocale(LC_TIME, 'fr_FR', 'fra'); // Set locale to French

                                    $date_debut_formattee = DateTime::createFromFormat('Y-m-d', $date_debut);
                                    if ($date_debut_formattee !== false) {
                                        $date_debut_formattee = strftime('%e %B %Y', $date_debut_formattee->getTimestamp());
                                        $date_debut_formattee = iconv('ISO-8859-1', 'UTF-8', $date_debut_formattee);
                                    }
                                    $date_fin = get_field('date-fin');

                                    if ($date_debut_formattee === $date_fin || empty($date_fin)) {
                                        echo "<h5 class='text-center text-blanc hover:text-blanc mt-[7px] mb-5'>le <span class='font-bold'>$date_debut_formattee</span></h5>";
                                    } else {
                                        echo "<h5 class='text-center text-blanc hover:text-blanc leading-tight'>du <span class='font-bold'>$date_debut_formattee</span> au <span class='font-bold'>$date_fin</span></h5>";
                                    }
                                    ?>
                                    <p class="mt-3 flex items-center text-blanc hover:text-blanc gap-[6px] ml-[-3px] sm:h-8 h-5 line-clamp-1">
                                        <img class="invert w-5" src="<?php echo wp_get_attachment_url(181); ?>" alt="Map Pin">
                                        <?php the_field('lieu'); ?>
                                    </p>
                                    <p class="uppercase text-blanc hover:text-blanc">
                                        <?php the_field('type'); ?>
                                    </p>
                                </div>

                                <h3 class="sm:text-h5_mobile text-h5 text-blanc hover:text-blanc font-medium leading-tight sm:h-8 h-[44px] line-clamp-2"><?php the_title(); ?></h3>
                                <p class="underline underline-offset-2 text-blanc hover:text-blanc mt-3">Lire la suite</p>
                            </div>

                        </a>
                    </article>


                <?php endwhile; ?>
            <?php endif; ?>
            <?php wp_reset_postdata(); ?>

        </div>


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


    <a href="<?php echo esc_url(home_url('/evenement')); ?>">
        <div class="font-semibold relative overflow-hidden h-[13rem] md:h-[20rem]">
            <img src="<?php echo wp_get_attachment_url(146); ?>" class="object-cover w-full h-full flex items-center" alt="bannière plus d'événements">
            <div class="absolute top-0 left-0 w-full h-full opacity-70 bg-blanc z-10"></div>
            <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 z-20 w-full flex md:flex-col gap-10 md:gap-6 items-center justify-center">
                <h3 class="sm:text-h3_mobile text-h3 max-w-xl ml-4 text-bleu hover:text-bleu">
                    Découvrez tous nos événements qui ont déjà eu lieu en Franche-Comté et en Suisse
                </h3>
                <div class="flex mr-4">
                    <a class="bg-bleu hover:bg-orange-fonce transition-colors duration-500 px-14 py-5 border-0 rounded-xl" href="<?php echo esc_url(home_url('/evenement')); ?>">
                        <p class="m-0 uppercase text-blanc text-center font-bold">Tout voir</p>
                    </a>
                </div>
            </div>
        </div>
    </a>


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