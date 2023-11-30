<?php wp_footer() ?>
<footer class="bg-bleu text-blanc">
    <div class="flex justify-between items-center mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div>
            <img src="chemin_vers_logo.png" alt="Logo du site">
        </div>
        <div>
            <nav>
                <ul class="space-x-4">
                <?php
                        wp_nav_menu ( array (
                        'theme_location' => 'footer-menu' 
                        ) ); ?>
                </ul>
            </nav>
        </div>
    </div>
    <div class="flex justify-between items-center mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div>
            <p>©2023 lefuturadejacommence.com</p>
        </div>
        <div>
            <p>Contact: <a href="mailto:lefuturadejacommence@gmail.com">lefuturadejacommence@gmail.com</a></p>
        </div>
        <div>
            <a href="https://www.instagram.com"><img src="chemin_vers_icone_instagram.png" alt="Instagram"></a>
            <a href="https://www.facebook.com"><img src="chemin_vers_icone_facebook.png" alt="Facebook"></a>
        </div>
    </div>
</footer>
</body>
</html>