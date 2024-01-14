<?php
/* Template Name: Association */
get_header();
?>

<div class="bg-beige text-bleu text-body sm:text-body_mobile overflow-x-hidden">

    <div class="sm:mx-[4vw] md:mx-[10vw] mx-[8vw] mt-10">

        <div class="w-full h-80 overflow-hidden flex items-center mb-20 sm:mb-10">
            <img src="<?php echo wp_get_attachment_url(146); ?>" alt="Bannière Association">
        </div>

        <h1 class="sm:text-h1_mobile text-h1 text-bleu mb-10 mt-0 font-dela-gothic-one">Qui sommes-nous ?</h1>

        <div class="flex md:flex-col mb-20 text-noir gap-24 justify-between">
            <div class="max-w-[50rem]">
                <p class="mb-3">L’association est née en mars 2023 de la volonté de mener des actions de médiation climatique. Les premières actions datent de 2021 et 2022, avec le projet “2050 Look UP!” à destination des scolaires et étudiants, une initiative portée par Daniel Gilbert, professeur en écologie. Basée dans le Doubs, l’activité se fait actuellement à l’échelle de la Franche-Comté, en Suisse et peut-être chez vous dès demain !</p>
                <p>L’association est administrée pour l’année 2023-2024 par les membres bénévoles : </p>
                <ul class="list-disc ml-4">
                    <li>Président : Daniel Gilbert </li>
                    <li>Vice-président : Philippe Binet</li>
                    <li>Secrétaire : Patrick Ferrandiz</li>
                    <li>Trésorière : Anne-Sophie Berthet </li>
                </ul>
                <p>Et autres membres fondateurs :</p>
                <ul class="list-disc ml-4">
                    <li>Mathias Bieber-Vagneux</li>
                    <li>Aurélie Carré</li>
                    <li>Anne Cheneau</li>
                    <li>Hélène Magnin-Feysot</li>
                </ul>
            </div>

            <figure class="w-full md:mx-auto">
                <img src="<?php echo wp_get_attachment_url(42); ?>" alt="Devenir Membre" class="w-72 min-w-full md:w-auto h-full sm:h-fit object-cover">
                <figcaption class="italic mt-3">Photo des membres de l’association 2023-2024</figcaption>
            </figure>
        </div>


        <h2 class="sm:text-h2_mobile text-h2 text-bleu mb-10 mt-0 font-dela-gothic-one">Nos missions</h2>

        <div class="grid grid-cols-2 md:flex md:flex-col gap-10 md:gap-0 mb-20">
            <div class="md:mx-auto md:mb-7">
                <img src="<?php echo wp_get_attachment_url(40); ?>" alt="Mission N°1" class="w-72 md:w-auto h-full sm:h-fit object-cover">
            </div>
            <div>
                <h3 class="text-h3 font-bold text-bleu mb-5">Proposer des solutions actives</h3>
                <p>Tout au long de l'année, l'association organise des évènements imaginés avec les jeunes et les moins jeunes en collaboration avec des acteurs locaux. Des expositions, des conférences, des spectacles... pour construire ensemble un futur désirable.</p>
            </div>
        </div>

        <div class="grid grid-cols-2 md:flex md:flex-col-reverse gap-10 md:gap-0 mb-20">
            <div>
                <h3 class="text-h3 font-bold text-bleu mb-5">Construire un avenir ensemble</h3>
                <p>Entre actions individuelles et décisions de l’État, il existe toute une série de possibilités à l'échelle des collectifs locaux. Écoles, universités, collectivités, associations, entreprises... et si la solution se trouvait aussi à un niveau intermédiaire ?</p>
            </div>
            <div class="justify-self-end md:mx-auto md:mb-7">
                <img src="<?php echo wp_get_attachment_url(44); ?>" alt="Mission N°2" class="w-72 md:w-auto h-full sm:h-fit object-cover">
            </div>
        </div>

        <div class="grid grid-cols-2 md:flex md:flex-col gap-10 md:gap-0 mb-20">
            <div class="md:mx-auto md:mb-7">
                <img src="<?php echo wp_get_attachment_url(45); ?>" alt="Mission N°3" class="w-72 md:w-auto h-full sm:h-fit object-cover">
            </div>
            <div>
                <h3 class="text-h3 font-bold text-bleu mb-5 md:mb-3">Proposer des activités ludiques et créatives</h3>
                <p>"Le futur a déjà commencé" propose des ateliers ludiques pour laisser libre cours à son imagination et proposer des solutions en adéquation avec les enjeux climatiques.</p>
            </div>
        </div>

    </div>

    <a href="<?php echo esc_url(home_url('/adhesion')); ?>">
        <div class="font-montserrat relative overflow-hidden h-[15em] mt-12 text-h5 font-bold">
            <img src="<?php echo wp_get_attachment_url(146); ?>" class="object-cover w-full h-full flex items-center" alt="bannière proposer un projet">
            <div class="absolute top-0 left-0 w-full h-full opacity-70 bg-blanc z-10"></div>
            <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 z-20 w-full flex flex-col items-center text-center text-bleu px-4">
                <p class="mb-0">Notre association vous intéresse ?</p>
                <p class="mb-6">Envie de proposer un projet ou d’y participer ?</p>
                <p>Vous pouvez devenir membre de notre association, remplissez ce formulaire →</p>
            </div>
        </div>
    </a>


</div>

<?php get_footer(); ?>