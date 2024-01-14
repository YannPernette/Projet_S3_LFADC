<?php
/*
Template Name: 404
*/

get_header();
?>

<div class="relative h-screen">
    <!-- Coin supérieur gauche -->
    <div class="absolute top-0 left-0 mt-32 ml-72">
        <a href="<?php echo esc_url(home_url('/')); ?>"class="hidden sm:block">
            <?php echo wp_get_attachment_image(31, 'full', false); ?>
        </a>
    </div>

    <!-- Coin inférieur gauche -->
    <div class="absolute bottom-0 left-0 mb-44 ml-72">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="hidden sm:block">
            <?php echo wp_get_attachment_image(29, 'full'); ?>
        </a>
    </div>

    <!-- Coin supérieur droit -->
    <div class="absolute top-0 right-0 mt-40 mr-64">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="hidden sm:block">
            <?php echo wp_get_attachment_image(30, 'full'); ?>
        </a>
    </div>

    <!-- Coin inférieur droit -->
    <div class="absolute bottom-0 right-0 mb-36 mr-80">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="hidden sm:block">
            <?php echo wp_get_attachment_image(28, 'full'); ?>
        </a>
    </div>

    <div class="flex items-center justify-center h-screen">
        <div class="text-center">
            <p class="font-montserrat font-bold text-bleu text-[200px]">404</p>
            <p class="font-montserrat font-bold text-bleu text-[40px] -mt-20">Page non trouvée</p>
            <div class="mt-14">
                <a class="bg-orange text-blanc py-2 px-4 rounded" href="<?php echo esc_url(home_url('/')); ?>">Retour à l'accueil</a>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
