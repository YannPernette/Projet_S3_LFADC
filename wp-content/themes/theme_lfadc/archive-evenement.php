<?php get_header() ?>

<div class="bg-beige text-bleu text-body sm:text-body_mobile">

    <div class="text-center font-dela-gothic-one relative overflow-hidden h-[19rem]">
        <img src="http://localhost/LFADC/wp-content/uploads/2023/12/climat-scaled-1.webp" alt="Image de la bannière" class="object-cover w-full h-full" style="object-position: 50% 69%;">
        <div class="absolute top-0 left-0 w-full h-full opacity-60 bg-blanc z-10"></div>
        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 z-20 w-full">
            <h1 class="sm:text-h1_mobile text-h1">
                Nos évènements
            </h1>
            <h3 class='sm:text-h3_mobile text-h3 mt-8 mb-0'>
                Découvrez nos prochaines actions, et nos anciennes !
            </h3>
        </div>
    </div>

    <div class="sm:mx-[4vw] md:mx-[10vw] mx-[20vw] mt-10">

        <h2 class='sm:text-h2_mobile text-h2 text-bleu mb-10 mt-0 font-dela-gothic-one'>Évènements à venir</h2>

        <div class="flex flex-wrap justify-center gap-10 mb-20">

            <?php $today = new DateTime(); // Get today's date
            $today = $today->format('Y-m-d'); // Format today's date
            ?>

            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                    <?php $date_debut = get_field('date-debut');
                    if ($date_debut >= $today) : ?>

                        <article class="bg-vert-fonce text-blanc flex flex-row drop-shadow w-60 rounded-xl">
                            <a href="<?php the_permalink(); ?>">

                                <div class="w-full h-28 overflow-hidden rounded-t-xl">
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

                                        if ($date_debut_formattee === $date_fin) {
                                            echo "<h5 class='text-center mt-[7px] mb-5'>le <span class='font-bold'>$date_debut_formattee</span></h5>";
                                        } else {
                                            echo "<h5 class='text-center leading-tight'>du <span class='font-bold'>$date_debut_formattee</span> au <span class='font-bold'>$date_fin</span></h5>";
                                        }
                                        ?>
                                        <p class="mt-3 flex items-center gap-[6px] ml-[-3px] sm:h-8 h-5 line-clamp-1">
                                            <img class="invert w-5" src="http://localhost/lfadc/wp-content/uploads/2023/12/map-pin.svg" alt="Map Pin">
                                            <?php the_field('lieu'); ?>
                                        </p>
                                        <p class="uppercase">
                                            <?php the_field('type'); ?>
                                        </p>
                                    </div>

                                    <h3 class="sm:text-h5_mobile text-h5 font-medium leading-tight sm:h-8 h-[44px] line-clamp-2"><?php the_title(); ?></h3>
                                    <p class="underline underline-offset-2 mt-3">Lire la suite</p>
                                </div>

                            </a>
                        </article>


                    <?php endif; ?>
                <?php endwhile; ?>
            <?php endif; ?>
            <?php wp_reset_postdata(); ?>

        </div>


        <h2 class='sm:text-h2_mobile text-h2 text-bleu mb-10 mt-0 font-dela-gothic-one'>Évènements passés</h2>

        <div class="flex flex-wrap justify-center gap-10 mb-32">

            <?php $today = new DateTime(); // Get today's date
            $today = $today->format('Y-m-d'); // Format today's date
            ?>

            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                    <?php $date_debut = get_field('date-debut');
                    if ($date_debut < $today) : ?>

                        <article class="bg-vert-fonce text-blanc flex flex-row drop-shadow w-60 rounded-xl">
                            <a href="<?php the_permalink(); ?>">

                                <div class="w-full h-28 overflow-hidden rounded-t-xl">
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

                                        if ($date_debut_formattee === $date_fin) {
                                            echo "<h5 class='text-center mt-[7px] mb-5'>le <span class='font-bold'>$date_debut_formattee</span></h5>";
                                        } else {
                                            echo "<h5 class='text-center leading-tight'>du <span class='font-bold'>$date_debut_formattee</span> au <span class='font-bold'>$date_fin</span></h5>";
                                        }
                                        ?>
                                        <p class="mt-3 flex items-center gap-[6px] ml-[-3px] sm:h-8 h-5 line-clamp-1">
                                            <img class="invert w-5" src="http://localhost/lfadc/wp-content/uploads/2023/12/map-pin.svg" alt="Map Pin">
                                            <?php the_field('lieu'); ?>
                                        </p>
                                        <p class="uppercase">
                                            <?php the_field('type'); ?>
                                        </p>
                                    </div>

                                    <h3 class="sm:text-h5_mobile text-h5 font-medium leading-tight sm:h-8 h-[44px] line-clamp-2"><?php the_title(); ?></h3>
                                    <p class="underline underline-offset-2 mt-3">Lire la suite</p>
                                </div>

                            </a>
                        </article>


                    <?php endif; ?>
                <?php endwhile; ?>
            <?php endif; ?>
            <?php wp_reset_postdata(); ?>

        </div>


    </div>

</div>

<?php get_footer() ?>