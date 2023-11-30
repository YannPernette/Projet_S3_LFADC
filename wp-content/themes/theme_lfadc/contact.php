<?php
/*
Template Name: Contact
*/

get_header();
?>
<div class="bg-beige">
    <div class="text-center">
        <h1>
            <?php the_title(); ?>
        </h1>
        <h3>
            Un souci ou une question ?
        </h3>
        <h3>
            Une envie de proposer un projet ?
        </h3>
    </div>
    <div>
        <h2>Voici comment nous contacter</h2>
        <p class="mb-0">Vous avez une question précise, vous avez envie de discuter avec les membres de l’association pour aller plus loin, 
            vous avez un projet à nous proposer, envoyez-nous un mail à <a href="mailto:lefuturadejacommence@gmail.com">lefuturadejacommence@gmail.com</a></p>
            Vous pouvez également nous envoyer votre question par formulaire
        <div>
            <h2 class="text-center">Formulaire de contact</h2>
            <form action="/contact.php">
                <div><label for="lastname">Nom</label><input name="lastname" placeholder="Entrez votre nom" type="text"></div>
                <div><label for="surname">Prénom</label><input name="surname" placeholder="Entrez votre prénom" type="text"></div>
                <div><label for="mail">Email</label><input name="mail" placeholder="Entrez votre Email" type="email"></div>
                <div><label for="object">Objet du message</label><input name="object" placeholder="Entrez votre sujet" type="text"></div>
                <div><label for="content">Commentaire du Message</label><input name="content" placeholder="Entrez votre message" type="text"></div>
                <div><input type="checkbox" name="MentionLegal" value=""><label for="MentionLegal">En envoyant ce formulaire, j'accepte que les informations saisies soient utilisées aux fins de traitement ou de prise de contact avec la personne concernée. Il n’y a pas de transfert de ces données personnelles à des tiers.</label></div>
                <input type="submit" value="Submit">
            </form>
        </div>
    </div>
</div>

<?php get_footer(); ?>