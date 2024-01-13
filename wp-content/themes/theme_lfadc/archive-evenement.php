<?php get_header() ?>

<div class="bg-beige text-bleu text-body sm:text-body_mobile">

    <div class="text-center relative overflow-hidden h-[19rem]">
        <img src="<?php echo wp_get_attachment_url(43); ?>" class="object-cover w-full h-full" style="object-position: 50% 69%;" alt="groupe lfadc">
        <div class="absolute top-0 left-0 w-full h-full opacity-60 bg-blanc z-10"></div>
        <div class="absolute font-dela-gothic-one top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 z-20 w-full">
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

                        <article class="bg-vert-fonce text-blanc flex flex-row w-60 rounded-xl hover:dropShadowEvenement transition-shadow duration-300">
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

        <div class="flex flex-wrap justify-center gap-10 mb-10">

            <?php $today = new DateTime(); // Get today's date
            $today = $today->format('Y-m-d'); // Format today's date
            ?>

            <?php
            // $posts_per_page est une variable stockée en session
            session_start();

            // Initialiser $posts_per_page s'il n'est pas encore défini
            if (!isset($_SESSION['posts_per_page'])) {
                $_SESSION['posts_per_page'] = 3;
            }

            // Vérifier si le bouton a été cliqué
            if (isset($_POST['increment_button'])) {
                // Incrémenter $posts_per_page de 3
                $_SESSION['posts_per_page'] += 3;
            }

            // Récupérer la valeur actuelle de $posts_per_page
            $posts_per_page = $_SESSION['posts_per_page'];


            $args = array(
                'post_type' => 'evenement',
                'posts_per_page' => $posts_per_page, // Set the maximum number of posts
                'meta_query' => array(
                    array(
                        'key' => 'date-debut',
                        'value' => $today,
                        'compare' => '<',
                        'type' => 'DATE',
                    ),
                ),
            );

            $query = new WP_Query($args);
            ?>

            <?php if ($query->have_posts()) : ?>
                <?php while ($query->have_posts()) : $query->the_post(); ?>
                    <?php $date_debut = get_field('date-debut');
                    if ($date_debut < $today) : ?>

                        <article class="bg-vert-fonce text-blanc flex flex-row drop-shadow w-60 rounded-xl hover:dropShadowEvenement transition-shadow duration-300">
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


        <div class="flex justify-center mb-32">
            <form method="post" action="">
                <button type="submit" name="increment_button" class="bg-orange hover:bg-orange-fonce transition-colors duration-500 px-14 py-5 border-0 rounded-xl" onclick="document.getElementById('spinner').style.display = 'block';">
                    <p class="m-0 uppercase text-blanc font-bold">Voir plus</p>
                </button>
            </form>
        </div>

        <div id="spinner" class="hidden">
            <div role="status">
                <div class="w-screen h-screen fixed">
                    <svg aria-hidden="true" class="fixed w-screen h-1/2 top-[25%] left-[0%] text-bleu animate-spin dark:text-gray-600 fill-vert-clair" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor" />
                        <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentFill" />
                    </svg>
                    <span class="sr-only">Loading...</span>
                </div>
            </div>
        </div>


    </div>

</div>

<?php get_footer() ?>


<script>
    // Listen for the submit event on the form
    document.querySelector('form').addEventListener('submit', function() {
        // Save the scroll position in sessionStorage before the form is submitted
        sessionStorage.setItem('scrollPosition', window.scrollY || window.pageYOffset);
    });

    // When the page is loaded
    window.addEventListener('load', function() {
        // If there is a saved scroll position, scroll to that position
        if (sessionStorage.getItem('scrollPosition') !== null) {
            window.scrollTo(0, sessionStorage.getItem('scrollPosition'));
            sessionStorage.removeItem('scrollPosition'); // Remove the saved scroll position
        }
    });
</script>