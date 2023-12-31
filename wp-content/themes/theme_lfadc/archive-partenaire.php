<?php get_header(); ?>

<div class="bg-beige text-bleu text-body sm:text-body_mobile">

    <div class="text-center font-dela-gothic-one relative overflow-hidden h-[19rem]">
        <img src="http://localhost/LFADC/wp-content/uploads/2023/12/climat-scaled-1.webp" alt="Image de la bannière" class="object-cover w-full h-full" style="object-position: 50% 69%;">
        <div class="absolute top-0 left-0 w-full h-full opacity-60 bg-blanc z-10"></div>
        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 z-20 w-full">
            <h1 class="sm:text-h1_mobile text-h1">
                Les partenaires
            </h1>
        </div>
    </div>

    <div class="sm:mx-[4vw] md:mx-[10vw] mx-[20vw] mt-10">

        <h2 class='sm:text-h2_mobile text-h2 text-bleu mb-6 mt-0 font-dela-gothic-one'>Nous sommes fiers de travailler avec vous !</h2>

        <p class="text-noir">Nos partenaires sont les structures, institutions, financeurs, entreprises qui nous accompagnent pour nous aider à monter nos actions. Les aides peuvent être multiples, accueil pour organisation d’évènements, apport de matériel, participation à l’organisation d’évènements, financement d’une prestation, etc.</p>

        <div class="flex relative mt-20 mb-20 flex-wrap justify-center">
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>

                    <a href="<?php echo esc_url(get_post_meta(get_the_ID(), 'lien', true)); ?>" target="_blank">
                        <div class="relative flex w-40 h-40 p-6 justify-center shadow-border content-center bg-blanc text-transparent hover:text-blanc">
                            <div class="relative flex self-center"><?php the_post_thumbnail(); ?></div>
                            <p class="absolute z-10 top-3 inset-x-0 px-2 font-bold"><?php the_title(); ?></p>
                            <p class="absolute z-10 bottom-3 underline underline-offset-2 text-[14px]">Visiter le site</p>
                        </div>
                    </a>

                <?php endwhile; ?>
            <?php endif; ?>
        </div>

    </div>

    <div class="text-center font-dela-gothic-one relative overflow-hidden h-[19rem]">
        <img src="http://localhost/LFADC/wp-content/uploads/2023/12/climat-scaled-1.webp" alt="Image de la bannière" class="object-cover w-full h-full" style="object-position: 50% 69%;">
        <div class="absolute top-0 left-0 w-full h-full opacity-60 bg-blanc z-10"></div>
        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 z-20 w-full">
            <h1 class="sm:text-h1_mobile text-h1">
                Les partenaires
            </h1>
        </div>
    </div>

    <div class="sm:mx-[4vw] md:mx-[10vw] mx-[20vw] mt-10">

        <h2 class='sm:text-h2_mobile text-h2 text-bleu mb-6 mt-0 font-dela-gothic-one'>Merci !</h2>

        <div class="grid grid-cols-2 md:block items-center mb-20">
            <div class="flex justify-center md:mb-5">
                <?php echo wp_get_attachment_image(37, array(400, 400)); ?>
            </div>

            <div class="px-4 text-noir">
                <p class="mb-5">À l’architecte Luc Schuiten, qui nous a généreusement accordé le droit d’utiliser ses illustrations.</p>
                <p class="mb-10">« Le paysage urbain a un passé, un présent et un futur qui est parfaitement perceptible à l’observateur attentif. C’est ce que je tente de montrer dans mes tableaux en intégrant la 4ème dimension dans le champ d’un cadre limité à 2 dimensions. Par cette façon de procéder j’invite les gens à entrer dans mes œuvres pour mieux percevoir les mutations en cours et les vrais enjeux d’un monde nouveau à bâtir. »</p>
                <div class="flex justify-center">
                    <a class="bg-orange hover:bg-orange-fonce transition-colors duration-500 px-8 py-4 border-0 rounded-xl" target="_blank" href="http://www.vegetalcity.net/luc-schuiten/">
                        <p class="m-0 uppercase text-blanc text-[12px] font-bold">Zoom sur Luc Schuiten</p>
                    </a>
                </div>
            </div>
        </div>


        <h3 class='sm:text-h3_mobile text-h3 font-bold mt-10 mb-7'>Découvrez ses illustrations</h3>
        <div class="w-[75%] h-fit ml-32 md:ml-16 sm:ml-10 mb-28">
            <?php echo do_shortcode('[carousel_slide id="19"]'); ?>
        </div>




        <div class="grid grid-cols-2 md:flex md:flex-col-reverse items-center mb-20">
            <div class="px-4 md:mt-5 text-noir">
                <p class="mb-5">À <a class="underline underline-offset-2" target="_blank" href="https://institutmichelserres.fr/lequipe/">Olivier Hamant</a>, chercheur et directeur de <a class="underline underline-offset-2" target="_blank" href="https://institutmichelserres.fr">l’Institut Michel Serre</a>.</p>
                <p class="mb-10">« Olivier Hamant conduit des actions de formation sur la nouvelle relation de l’humanité à la nature, dans le cadre du collectif anthropocène de l’école normale supérieure de Lyon et de l’institut Michel Serres. »</p>
                <div class="flex justify-center">
                    <a class="bg-orange hover:bg-orange-fonce transition-colors duration-500 px-8 py-4 border-0 rounded-xl" target="_blank" href="https://www.inrae.fr/actualites/olivier-hamant">
                        <p class="m-0 uppercase text-blanc text-[12px] font-bold">Zoom sur Olivier Hamant</p>
                    </a>
                </div>
            </div>

            <div class="flex justify-center">
                <iframe class="sm:w-72 sm:h-40 md:w-72 md:h-60" width="560" height="315" src="https://www.youtube.com/embed/Mch1NbbtdBo?si=-7LsZv-CczHL79vu" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
        </div>

    </div>
    
</div>

    <?php get_footer(); ?>














    <!-- BORDURE DEFINIES DYNAMIQUEMENT SANS SUPERPOSITION -->
    <script>
        window.addEventListener('resize', adjustBorders);
        adjustBorders();

        function adjustBorders() {
            const elements = document.querySelectorAll('.shadow-border');
            elements.forEach(el => {
                el.style.borderRight = 'none';
                el.style.borderTop = '1.5px solid #00425A'; // Add top border to all elements
            });

            let firstRowTop = elements[0].getBoundingClientRect().top;
            let previousEl = elements[0];
            for (let i = 1; i < elements.length; i++) {
                const el = elements[i];
                const rect = el.getBoundingClientRect();
                if (rect.top !== firstRowTop) { // Not first row
                    el.style.borderTop = 'none'; // Remove top border
                }
                if (rect.top !== previousEl.getBoundingClientRect().top) { // New row
                    previousEl.style.borderRight = '1.5px solid #00425A'; // Add right border to last element of previous row
                }
                previousEl = el;
            }
            previousEl.style.borderRight = '1.5px solid #00425A'; // Add right border to last element
        }
    </script>



    <!-- <style>
    h2 {
    font-size: clamp(20px, 2vw, 40px);
  }
</style> -->