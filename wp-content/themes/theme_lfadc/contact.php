<?php
/*
Template Name: Contact
*/

get_header();
?>
<div class="bg-beige grid grid-rows-[1fr] text-bleu sm:text-body_mobile text-body">
    <div class="text-center font-dela-gothic-one relative overflow-hidden h-[19rem]">
        <img src="http://localhost/LFADC/wp-content/uploads/2023/12/climat-scaled-1.webp" alt="banner img" class="object-cover w-full h-full" style="object-position: 50% 69%;">
        <div class="absolute top-0 left-0 w-full h-full opacity-60 bg-blanc z-10"></div>
        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 z-20 w-full">
            <h1 class="sm:text-h1_mobile text-h1">
                <?php the_title(); ?>
            </h1>
            <h3 class='sm:text-h3_mobile text-h3 mt-8 mb-0'>
                Un souci ou une question ?
            </h3>
            <h3 class='sm:text-h3_mobile text-h3 mt-2 mb-0'>
                Une envie de proposer un projet ?
            </h3>
        </div>
    </div>

    <div class='sm:mx-[4vw] md:mx-[10vw] mx-[20vw] mt-10'>
        <div class="text-noir mb-10">
            <h2 class='sm:text-h2_mobile text-h2 text-bleu mb-6 mt-0 font-dela-gothic-one'>Voici comment nous contacter</h2>
            <p class="mb-0 font-montserrat">Vous avez une question précise, vous avez envie de discuter avec les membres de l’association pour aller plus loin, 
                vous avez un projet à nous proposer, envoyez-nous un mail à <a href="mailto:lefuturadejacommence@gmail.com">lefuturadejacommence@gmail.com</a></br>
                Vous pouvez également nous envoyer votre question par formulaire</p>
        </div>
        <div class='bg-blanc mb-10 p-4 md:px-3 lg:px-14 px-32 rounded-lg shadow-md'>
            <h2 class="sm:text-h2_mobile text-h2 text-center mb-16 mt-4 font-dela-gothic-one">Formulaire de contact</h2>
            <form class="font-montserrat" action="/contact.php">
                <div class="grid grid-cols-2 gap-5 my-4">
                    <div><label class="mb-2" for="lastname">Nom</label><input class="h-12" name="lastname" placeholder="Entrez votre nom" type="text"></div>
                    <div><label class="mb-2" for="surname">Prénom</label><input class="h-12" name="surname" placeholder="Entrez votre prénom" type="text"></div>
                </div>
                <div class="my-4"><label class="mb-2" for="mail">Email</label><input class="h-12" name="mail" placeholder="Entrez votre Email" type="email"></div>
                <div class="my-4"><label class="mb-2" for="object">Objet du message</label><input class="h-12" name="object" placeholder="Entrez votre sujet" type="text"></div>
                <div class="my-4"><label class="mb-2" for="content">Commentaire du Message</label><textarea name="content" id="" placeholder="Entrez votre message" rows="6"></textarea></div>
                <div class='flex my-4'><input class='self-start mr-1' type="checkbox" name="MentionLegal" value=""><label for="MentionLegal">En envoyant ce formulaire, j'accepte que les informations saisies soient utilisées aux fins de traitement ou de prise de contact avec la personne concernée. Il n’y a pas de transfert de ces données personnelles à des tiers.</label></div>
                <input class="!bg-orange hover:!bg-[#B85227] !w-full !text-blanc !border-none !rounded-lg !font-semibold mb-7 shadow-md" type="submit" value="ENVOYER" >
            </form>
        </div>
    </div>
</div>

<?php get_footer(); ?>