<?php
/*
Template Name: Don
*/

get_header();
?>



<div class="bg-beige text-bleu text-body sm:text-body_mobile">


    <div class="text-center relative overflow-hidden h-[19rem]">
        <img src="<?php echo wp_get_attachment_url(43); ?>" class="object-cover w-full h-full" style="object-position: 50% 69%;" alt="Bannière Dons">
        <div class="absolute top-0 left-0 w-full h-full opacity-60 bg-blanc z-10"></div>
        <div class="absolute font-dela-gothic-one top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 z-20 w-full">
            <h1 class="sm:text-h1_mobile text-h1 animBanner">
                Envie de soutenir l’association ?
            </h1>
            <h3 class='sm:text-h3_mobile text-h3 mt-8 mb-0 animBanner'>
                Faites un don !
            </h3>
        </div>
    </div>

    <div class="sm:mx-[4vw] md:mx-[10vw] mx-[8vw] mt-10">

        <h2 class='sm:text-h2_mobile text-h2 text-bleu mb-10 mt-0 font-dela-gothic-one'>Choisir le montant du don</h2>

        <div class="flex md:flex-col justify-between items-center mb-6">
            <p class="font-semibold ml-14 md:ml-0 md:mb-4 md:text-center max-w-lg">Faites un don directement avec le formulaire ci-dessous ou alors depuis le site d'Hello Asso en cliquant sur ce bouton</p>
            <iframe class="min-w-max" id="haWidget" allowtransparency="true" scrolling="no" src="https://www.helloasso.com/associations/le-futur-a-deja-commence/formulaires/1/widget-bouton" style="width: 10%; height: 70px; border: none;"></iframe>
        </div>
        <iframe class="overflow-hidden mb-10" id="haWidgetForm" allowtransparency="true" scrolling="y" src="https://www.helloasso.com/associations/le-futur-a-deja-commence/formulaires/1/widget" style="width: 100%; height: 1300px; border: none;"></iframe>

        <h2 class='sm:text-h2_mobile text-h2 text-bleu mb-16 md:mb-12 sm:mb-8 mt-0 font-dela-gothic-one'>Comment vos dons sont-ils utilisés ?</h2>

        <div class="flex md:flex-col gap-6 items-center mb-20 sm:mb-12">
            <div class="w-full h-60 overflow-hidden flex items-center md:justify-center">
                <?php echo wp_get_attachment_image(43, array(500, 300)); ?>
            </div>
            <div class="md:justify-items-center sm:mt-[-10px]">
                <h3 class="text-h3 font-bold mb-4 md:mb-3">Pour les évènements</h3>
                <p class="text-noir">Développer nos projets "2050 Look Up!" & "Fou2Food en 2050", louer des structures, du matériel, rémunérer les prestataires, achats de matières premières..</p>
            </div>
        </div>

        <div class="flex md:flex-col-reverse gap-6 items-center mb-20 sm:mb-12">
            <div class="md:justify-items-center sm:mt-[-10px]">
                <h3 class="text-h3 font-bold mb-4 md:mb-3">Pour les collaborations</h3>
                <p class="text-noir">Proposer des jobs étudiants, développer des outils de communication auprès des enseignants et partenaires.</p>
            </div>
            <div class="w-full h-60 overflow-hidden flex items-center justify-end md:justify-center">
                <?php echo wp_get_attachment_image(44, array(500, 300)); ?>
            </div>
        </div>

        <div class="flex md:flex-col gap-6 items-center mb-20 sm:mb-12">
            <div class="w-full h-60 overflow-hidden flex items-center md:justify-center">
                <?php echo wp_get_attachment_image(146, array(500, 300)); ?>
            </div>
            <div class="md:justify-items-center sm:mt-[-10px]">
                <h3 class="text-h3 font-bold mb-4 md:mb-3">Pour le développement</h3>
                <p class="text-noir">Élargir le rayonnement de l'association, mettre en place de nouveaux projets, développer notre notoriété. Disposer d'un bureau et d'un lieu de stockage.</p>
            </div>
        </div>

        <div class="flex md:flex-col-reverse gap-6 items-center mb-20 sm:mb-12">
            <div class="md:justify-items-center sm:mt-[-10px]">
                <h3 class="text-h3 font-bold mb-4 md:mb-3">Pour les investissements</h3>
                <p class="text-noir">Investir dans du matériel audiovisuel, des supports de communication et des équipements pour gérer les différents évènements.</p>
            </div>
            <div class="w-full h-60 overflow-hidden flex items-center justify-end md:justify-center">
                <?php echo wp_get_attachment_image(40, array(500, 300)); ?>
            </div>
        </div>

        <div class="flex md:flex-col gap-6 items-center mb-20 sm:mb-12">
            <div class="w-full h-60 overflow-hidden flex items-center md:justify-center">
                <?php echo wp_get_attachment_image(27, array(500, 300)); ?>
            </div>
            <div class="md:justify-items-center sm:mt-[-10px]">
                <h3 class="text-h3 font-bold mb-4 md:mb-3">Pour les enseignants</h3>
                <p class="text-noir">Acheter le matériel nécessaire pour la réalisation des ateliers (panneaux de bois, outils, Playmobil, matériel de dessin et de bricolage etc.) et le mettre à disposition des classes.</p>
            </div>
        </div>


    </div>

    <a href="<?php echo esc_url(home_url('/adhesion')); ?>">
        <div class="font-montserrat relative overflow-hidden h-[15em] mt-12 text-h5 font-bold">
            <img src="<?php echo wp_get_attachment_url(146); ?>" class="object-cover w-full h-full flex items-center" alt="bannière devenir membre">
            <div class="absolute top-0 left-0 w-full h-full opacity-70 bg-blanc z-10"></div>
            <div class="absolute font-dela-gothic-one top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 z-20 w-full flex flex-col items-center text-center text-bleu px-4">
                <p class="mb-0">Notre association vous intéresse ?</p>
                <p class="mb-6">Envie de proposer un projet ou d’y participer ?</p>
                <p>Vous pouvez devenir membre de notre association, remplissez ce formulaire →</p>
            </div>
        </div>
    </a>

</div>
<?php get_footer(); ?>