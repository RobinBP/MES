        </div>
        <footer>
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <a class="navbar-brand" href="#"><?php bloginfo('name') ?></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <?php wp_nav_menu(['theme_location' => 'footer', 
	                'container' => false,
	                'menu_class' => 'navbar-nav mr-auto
	                ']) ?>
            </nav>
        </footer>
        <?php wp_footer() ?>
        
    </body>
</html>