<?php get_header(); ?>

<h1 class="font-antic-didone text-5xl text-center my-14">Les partenaires</h1>

<div class="flex mx-20 gap-32 mt-28 flex-wrap justify-center">
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>

            <article class="bg-[#FAFAFA] flex flex-row px-8 py-10 drop-shadow w-60 items-center justify-center">
                <!-- <a href="<?php the_permalink(); ?>"> -->
                    <div class="flex justify-center"><?php the_post_thumbnail('thumbnail'); ?></div>
                    <h2 class="text-xl my-8 text-center"><?php the_title(); ?></h2>
                    <p class="text-sm text-vert-fonce font-semibold hover:underline">découvrir le joueur</p>
                <!-- </a> -->
            </article>

        <?php endwhile; ?>
    <?php endif; ?>
</div>

<?php get_footer(); ?>