<?php get_header() ?>

<div class="bg-beige text-bleu text-body sm:text-body_mobile">

    <div class="sm:mx-[4vw] md:mx-[10vw] mx-[20vw] mt-10">

        <div class="w-full h-72 overflow-hidden mt-14">
            <div class="mt-[-13%]"><?php the_post_thumbnail(); ?></div>
        </div>

        <h1 class="sm:text-h2_mobile text-h2 mt-6 mb-10 uppercase font-bold text-center"><?php the_title(); ?></h1>

        <div class="evenement text-noir">
            <?php the_content(); ?>
        </div>

    </div>

    <div class="bg-vert-clair py-20 mt-12 text-h5 font-bold flex justify-center">
        <div class="text-bleu">
            <p class="mb-0">Notre association vous intéresse ?</p>
            <p class="mb-6">Envie de proposer un projet ou d’y participer ?</p>
            <p>Vous pouvez devenir membre de notre association, remplissez ce formulaire <span class="underline underline-offset-2">ici</span> &#8594;</p>
        </div>
    </div>

</div>

<?php get_footer() ?>