<?php
/*
Template Name: Contact
*/

get_header();
?>
<div>
    <div>
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
        <h2></h2>
        <p></p>
        <p></p>
        <div>
            <h2></h2>
            <form action="/contact.php">
                <div><label for=""></label><input type="text"></div>
                <div><label for=""></label><input type="text"></div>
                <div><label for=""></label><input type="text"></div>
                <div><label for=""></label><input type="text"></div>
                <div><label for=""></label><input type="text"></div>
                <div><input type="checkbox" name="" value=""><label for=""></label></div>
                <input type="submit" value="Submit">
            </form>
        </div>
    </div>
</div>

<?php get_footer(); ?>