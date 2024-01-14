<?php
/*
Template Name: 404
*/

get_header();
?>

    <div class="flex items-center justify-center h-screen">
        <div class="text-center">
            <p class="font-montserrat font-bold text-bleu text-[200px]">404</p>
            <p class="font-montserrat font-bold text-bleu text-[40px] -mt-20">Page non trouvée</p>
            <div class="mt-32">
                <a class="bg-orange hover:bg-orange-fonce transition-colors duration-500 text-h3 text-blanc hover:text-blanc py-6 px-10 rounded-xl uppercase font-bold" href="<?php echo esc_url(home_url('/')); ?>">Retour à l'accueil</a>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
