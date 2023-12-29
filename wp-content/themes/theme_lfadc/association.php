<?php
/* Template Name: Association */
get_header();
?>

<div class="bg-beige font-montserrat px-32">


    <div class="bg-vert-clair py-20 my-12 text-h5 font-bold flex justify-center">
    </div>

    <h2 class="text-h2 font-bold mb-8">Qui sommes-nous ?</h2>

    <div class="grid grid-cols-2 mb-32">

        <div>
            <p>L’association est née en mars 2023 de la volonté de mener des actions de médiation climatique.
                Les premières actions datent de 2021 et 2022, avec le projet “2050 Look UP!” à destination des scolaires et étudiants, une initiative portée par Daniel Gilbert, professeur en écologie. Basée dans le Doubs, l’activité se fait actuellement à l’échelle de la Franche-Comté, en Suisse et peut-être chez vous dès demain !</p>
            <p>L’association est administrée pour l’année 2023-2024 par les membres bénévoles : 
                Président : Daniel Gilbert 
                Vice-président : Philippe Binet
                Secrétaire : Patrick Ferrandiz
                Trésorière : Anne-Sophie Berthet 
                et autres membres fondateurs :
                Mathias Bieber-Vagneux
                Aurélie Carré
                Anne Cheneau
                Hélène Magnin-Feysot</p>
        </div>

        <div class="justify-self-end">
            <?php echo wp_get_attachment_image(42, array(400, 400)); ?>
            <figcaption class="italic">Photo des membres de l’association 2023-2024</figcaption>
        </div>

    </div>


    <h2 class="text-h2 font-bold mb-8">Nos missions</h2>

    <div class="grid grid-cols-2 mb-20">
        <div>
            <?php echo wp_get_attachment_image(44, array(500, 300)); ?>
        </div>
        <div>
            <h3 class="text-h3 font-bold text-bleu">Proposer des solutions actives</h3>
            <p>Tout au long de l'année, l'association organise des évènements imaginés avec les jeunes et les moins jeunes en collaboration avec des acteurs locaux. Des expositions, des conférences, des spectacles... pour construire ensemble un futur désirable.</p>
        </div>
    </div>

    <div class="grid grid-cols-2 mb-20">
        <div>
            <h3 class="text-h3 font-bold text-bleu">Construire un avenir ensemble</h3>
            <p>Entre actions individuelles et décisions de l’État, il existe toute une série de possibilités à l'échelle des collectifs locaux. Écoles, universités, collectivités, associations, entreprises... et si la solution se trouvait aussi à un niveau intermédiaire ?</p>
        </div>
        <div class="justify-self-end">
            <?php echo wp_get_attachment_image(43, array(500, 300)); ?>
        </div>
    </div>

    <div class="grid grid-cols-2 mb-20">
        <div>
            <?php echo wp_get_attachment_image(45, array(500, 300)); ?>
        </div>
        <div>
            <h3 class="text-h3 font-bold text-bleu">Proposer des activités ludiques et créatives</h3>
            <p>"Le futur a déjà commencé" propose des ateliers ludiques pour laisser libre cours à son imagination et proposer des solutions en adéquation avec les enjeux climatiques.</p>
        </div>
    </div>

</div>


<div class="bg-vert-clair py-20 my-12 text-h5 font-bold flex justify-center">
    <div class="text-bleu">
        <p class="mb-0">Notre association vous intéresse ?</p>
        <p class="mb-6">Envie de proposer un projet ou d’y participer ?</p>
        <p>Vous pouvez devenir membre de notre association, remplissez ce formulaire ici</p>
    </div>
</div>

</div>

<?php get_footer(); ?>