<footer class="bg-bleu text-blanc">
    <div class="flex sm:flex-col flex-row justify-between mx-auto max-w-7xl sm:px-4 md:px-6 px-8 pt-5 pb-5">
        <div class="sm:mb-4 mb-0 w-36 h-36">
            <?php echo wp_get_attachment_image(175, 'full'); ?>
        </div>
        <div>
            <nav class="sm:flex-none flex">
                <div class="flex sm:flex-col flex-row sm:gap-4 gap-20 mb-4"> <!-- Ajout de la classe mb-4 pour l'espace vertical -->
                    <div class="footer-menu-column mb-4"> <!-- Ajout de la classe mb-4 pour l'espace vertical -->
                        <h3 class="font-bold text-h3_mobile">Qui sommes-nous ?</h3>
                        <?php
                        wp_nav_menu(array(
                            'theme_location' => 'footer-menu',
                            'container_class' => 'footer-menu-column'
                        ));
                        ?>
                    </div>
                    <div class="footer-menu-column mb-4"> <!-- Ajout de la classe mb-4 pour l'espace vertical -->
                        <h3 class="font-bold text-h3_mobile">Programmes</h3>
                        <div>
                            <?php
                            wp_nav_menu(array(
                                'theme_location' => 'footer-menu2',
                                'container_class' => 'footer-menu-column'
                            ));
                            ?>
                        </div>
                    </div>
                    <div class="footer-menu-column mb-4"> <!-- Ajout de la classe mb-4 pour l'espace vertical -->
                        <h3 class="font-bold text-h3_mobile">Mentions légales</h3>
                        <div>
                            <?php
                            wp_nav_menu(array(
                                'theme_location' => 'footer-menu3',
                                'container_class' => 'footer-menu-column'
                            ));
                            ?>
                        </div>
                    </div>
                    <div class="footer-menu-column mb-4"> <!-- Ajout de la classe mb-4 pour l'espace vertical -->
                        <h3 class="font-bold text-h3_mobile">Adhésion</h3>
                        <div>
                            <?php
                            wp_nav_menu(array(
                                'theme_location' => 'footer-menu4',
                                'container_class' => 'footer-menu-column'
                            ));
                            ?>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <hr class="mobile-separator mx-4 my-2 sm:block hidden border-t-2 border-blanc">
    <div class="flex sm:flex-col flex-row justify-between mx-auto max-w-7xl sm:px-4 md:px-6 px-8 mt-4 pb-4">
        <div class="sm:mb-4 mb-0">
            <p>©2023 lefuturadejacommence.com</p>
        </div>
        <div class="sm:mb-4 mb-0">
            <p><span class="font-bold">Contact :</span> <a class="hover:text-blanc text-blanc" href="mailto:lefuturadejacommence@gmail.com">lefuturadejacommence@gmail.com</a></p>
        </div>
        <div class="flex">
            <a href="https://www.instagram.com"><img src="https://uxwing.com/wp-content/themes/uxwing/download/brands-and-social-media/instagram-white-icon.png" alt="Instagram" width="30" height="30" style="margin-right: 10px;"></a>

            <a href="https://www.facebook.com"><img src="https://cdn.discordapp.com/attachments/751139405846151202/1182611479447478302/facebook_1.png?ex=658553c4&is=6572dec4&hm=95f4f356e2a7f9bd601104523857d5d364fdfec7349f2dfeeaecd0644e94502b&" alt="Facebook" width="30" height="30"></a>
        </div>
    </div>
</footer>
<?php wp_footer() ?>
</body>

</html>