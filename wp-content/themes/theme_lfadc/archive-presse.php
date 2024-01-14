<?php get_header() ?>

<div class="bg-beige text-bleu text-body sm:text-body_mobile">

    <div class="sm:mx-[4vw] md:mx-[10vw] mx-[8vw] mt-10">

        <h1 class='sm:text-h1_mobile text-h1 text-bleu mb-10 mt-0 font-dela-gothic-one text-center'>Espace Presse</h1>

        <h3 class='sm:text-h3_mobile text-h3 text-vert-clair mb-10 mt-0 font-dela-gothic-one'>Contact</h3>

        <a target="_blank" href="mailto:lefuturadejacommence@gmail.com">
            <div class="flex flex-col justify-center items-center mb-16 border-solid border-4 rounded-md border-vert-clair hover:bg-vert-clair hover:text-blanc transition-colors duration-300 text-vert-clair py-5 max-w-sm mx-auto">
                <h4 class="font-semibold text-center">Écrivez-nous !</h4>
                <p class="font-medium">lefuturadejacommence@gmail.com</p>
            </div>
        </a>


        <h2 class='sm:text-h2_mobile text-h2 text-bleu mb-10 mt-0 font-dela-gothic-one'>Retrouvez nos actualités dans la presse</h2>

        <div class="flex relative mb-20 sm:mx-2 flex-wrap gap-10 justify-center">

            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>

                    <?php $date = get_field('date'); ?>

                    <a href="<?php echo esc_url(get_post_meta(get_the_ID(), 'lien', true)); ?>" target="_blank">
                        <div class="w-80 bg-rose text-noir dropShadowEvenement py-3 px-5">

                            <div class="flex items-center justify-between mb-5">
                                <?php setlocale(LC_TIME, 'fr_FR', 'fra'); // Set locale to French

                                $date_formattee = DateTime::createFromFormat('Y-m-d', $date);
                                if ($date_formattee !== false) {
                                    $date_formattee = strftime('%e %B %Y', $date_formattee->getTimestamp());
                                    $date_formattee = iconv('ISO-8859-1', 'UTF-8', $date_formattee);
                                }

                                echo "<div class='font-medium'>$date_formattee</div>"; ?>
                                <div class="w-5"><?php echo wp_get_attachment_image(183, array(400, 400)); ?></div>
                            </div>

                            <div class="w-full h-40 overflow-hidden flex items-center justify-center mb-3">
                                <?php the_post_thumbnail(); ?>
                            </div>

                            <h3 class="sm:text-h5_mobile text-h5 font-medium leading-tight sm:h-8 h-[44px] line-clamp-2 text-bleu"><?php the_title(); ?></h3>
                            <h6 class="mt-3 leading-snug h-[130px] line-clamp-6 mb-5"><?php the_excerpt(); ?></h6>

                            <div class="flex justify-center bg-orange hover:bg-orange-fonce transition-colors duration-500 py-3 border-0 rounded-xl">
                                <p class="m-0 uppercase text-blanc text-[15px] font-bold text-center">Lire l'article en entier</p>
                            </div>

                        </div>
                    </a>

                <?php endwhile; ?>
            <?php endif; ?>

        </div>


    </div>
</div>

<?php get_footer() ?>