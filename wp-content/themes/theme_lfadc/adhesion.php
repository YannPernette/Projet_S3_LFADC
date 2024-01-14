<?php
/*
Template Name: Adhésion
*/

get_header();
?>

<div class="bg-beige text-bleu text-body sm:text-body_mobile overflow-x-hidden">

    <div class="text-center relative overflow-hidden h-[19rem]">
        <img src="<?php echo wp_get_attachment_url(42); ?>" class="object-cover w-full h-full flex items-center" alt="groupe lfadc">
        <div class="absolute top-0 left-0 w-full h-full opacity-60 bg-blanc z-10"></div>
        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 z-20 w-[35rem] md:max-w-[35rem] sm:w-80">
            <h1 class="sm:text-h1_mobile font-dela-gothic-one text-h1">
                Envie de devenir membre de notre association ?
            </h1>
        </div>
    </div>

    <div class="sm:mx-[4vw] md:mx-[10vw] mx-[8vw] mt-10">

        <h2 class='sm:text-h2_mobile text-h2 text-bleu mb-20 sm:mb-12 mt-0 font-dela-gothic-one text-center'>Espace Adhésion</h2>

        <div class="flex md:block items-end gap-10 justify-between mb-16 md:mb-10">
            <div class="w-[40rem] md:w-auto">
                <h3 class='sm:text-h3_mobile text-h3 text-bleu mb-5 mt-0 font-dela-gothic-one'>Adhésion à la Loop Up attitude !</h3>
                <p class="text-noir mb-3">Un projet pour tous, y compris vous !</p>
                <p class="text-noir">Rejoignez-nous et participez à nos différents événements, échangez des idées et faites partie d’un groupe dynamique et positif, adapté à vos envies, vos disponibilités et vos compétences.</p>
            </div>
            <div class="w-80 sm:w-60 md:mt-10 md:flex md:mx-auto">
                <?php echo wp_get_attachment_image(87, array(400, 400)); ?>
            </div>
        </div>

        <div class="mx-auto w-[60%] border-t border-solid border-2 border-vert-clair"></div>

        <div class="max-w-[50rem] mt-20 mb-20">
            <h3 class='sm:text-h3_mobile text-h3 text-vert-clair mb-5 mt-0 font-dela-gothic-one'>Vous souhaitez devenir membre ?</h3>
            <p class="text-noir mb-3">Pensez à vous inscrire via notre formulaire et devenez un membre à part entière de notre association pour seulement 10€ de frais d’adhésion.</p>
            <p class="text-noir">En tant que membre vous pourrez :</p>
            <ul class="text-noir list-disc ml-4">
                <li>Être au courant de nos futurs projets à l’avance</li>
                <li>Proposer des articles pour notre site</li>
                <li>Participer activement à l’organisation des évènements</li>
            </ul>
        </div>

        <div class="flex md:flex-col justify-between items-center mb-6">
            <p class="font-semibold ml-14 md:ml-0 md:mb-4 md:text-center max-w-lg">Inscrivez-vous directement avec le formulaire ci-dessous ou alors depuis le site d'Hello Asso en cliquant sur ce bouton</p>
            <iframe class="min-w-max" id="haWidget" allowtransparency="true" scrolling="no" src="https://www.helloasso.com/associations/le-futur-a-deja-commence/adhesions/adhesion-a-l-association/widget-bouton" style="width: 10%; height: 70px; border: none;"></iframe>
        </div>
        <iframe class="overflow-hidden mb-20" id="haWidgetForm" allowtransparency="true" scrolling="auto" src="https://www.helloasso.com/associations/le-futur-a-deja-commence/adhesions/adhesion-a-l-association/widget" style="width: 100%; height: 800px; border: none;"></iframe>

        <div class="flex sm:block justify-between gap-10 overflow-hidden mb-20 sm:mb-10">

            <div class="max-w-[45rem]">
                <div class="text-noir mb-16 sm:mb-10">
                    <h3 class='sm:text-h3_mobile text-h3 text-vert-clair mb-5 mt-0 font-dela-gothic-one'>Qu’est-ce que signifie être un membre actif pour nous ?</h3>
                    <p class="mb-3">Adhérez à l’association et donnez-nous un coup de main lors de nos événements (montage, animation…).</p>
                    <p>Participez à des moments d’échange, intégrez un groupe actif et positif en fonction de vos envies, de vos compétences et de vos disponibilités.</p>
                </div>
                <div class="text-noir mb-16 sm:mb-10">
                    <h3 class='sm:text-h3_mobile text-h3 text-vert-clair mb-5 mt-0 font-dela-gothic-one'>Faire des dons, à quelle fréquence ?</h3>
                    <p class="mb-3">En plus de votre adhésion, soutenez-nous en faisant un don annuel ou ponctuel pour contribuer au développement de nos projets et offrir encore plus d’actions engagées.</p>
                </div>
                <div class="text-noir mb-16">
                    <h3 class='sm:text-h3_mobile text-h3 text-vert-clair mb-5 mt-0 font-dela-gothic-one'>Être mécène ?</h3>
                    <p>Vous avez une idée ou un projet que vous souhaitez réaliser ensemble ?</p>
                    <p>Contactez-nous pour explorer les possibilités de mécénat et concrétiser cette initiative !</p>
                </div>
            </div>

            <div class="max-w-[30%] sm:max-w-none sm:mt-[-1.5rem]">
                <img src="<?php echo wp_get_attachment_url(74); ?>" alt="Devenir Membre" class="h-full sm:h-fit object-cover">
            </div>

        </div>

        <div class="flex md:block gap-20 mb-32 sm:mb-20">
            <div class="text-noir max-w-xl md:mb-10">
                <p class="mb-3">En soutenant notre association, vous participez activement à la réalisation de projets ambitieux visant à sensibiliser et agir pour l’environnement dans notre région. Votre collaboration financière permet de pérenniser nos actions, d’étendre notre rayonnement et de faire une réelle différence pour un avenir plus durable.</p>
                <p>Ensemble, nous construisons un avenir meilleur, préservons notre planète et encourageons un véritable changement positif. Rejoignez-nous dans cette aventure éco-responsable et contribuez à faire de la Franche-Comté un territoire engagé pour le climat !</p>
            </div>
            <div class="text-vert-clair">
                <h5 class='sm:text-h5_mobile text-h5 mb-5 md:mb-3 mt-0 font-dela-gothic-one'>Respect de la vie privée</h5>
                <p>Vous bénéficiez d’un droit d’accès, de rectification, d’opposition et de suppression des données qui vous concernent conformément au RGPD. Vous pouvez exercer ce droit directement en nous contactant à <a class="underlineAnimation text-orange-fonce" target="_blank" href="mailto:lefuturadejacommence@gmail.com">lefuturadejacommence@gmail.com</a>.</p>
            </div>
        </div>



    </div>

</div>

<?php get_footer() ?>