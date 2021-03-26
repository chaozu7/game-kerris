<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/scss/style.css">
    <title>lorem-ipsum</title>
</head>

<body>
    <header>
        <div class="logo">
            <div class="logo__box">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/logo.svg" alt="logo" title="logo">
            </div>
        </div>
    </header>
    <section class="hero">
        <div class="header-left">
            <div class="header-left__boxes">
                <div class="header-left__text">
                    <div class="title">
                        <h1>
                            Lorem ipsum dolor sit amet
                        </h1>
                        <p>
                            <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</span>
                            Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis
                            nostrud exercitation ullamco.
                        </p>
                        <button>
                            Learn more
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/arrow.svg">
                        </button>

                    </div>
                </div>
            </div>
            <div class="headlines">
                <div class="header-left__text">
                    <h2> How it works?</h2>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/yellow_dot.svg">
                </div>
            </div>
        </div>

        <div class="header-right">
            <div class="bcg">

            </div>
        </div>
    </section>
    <div class="bcg__lines">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/lines.svg">
    </div>
    <div class="bcg__circles">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/ovals.svg">
    </div>

    <main>
        <section class="features">
            <div class="features__block">
                <div class="features__block-head">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/block.svg">
                    <div class="block-head__title block-head__title--1">
                        <h3>Block the cheaters</h3>
                    </div>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip ex ea commodo consequat.</p>
            </div>
            <div class="features__block">
                <div class="features__block-head">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/find.svg">
                    <div class="block-head__title block-head__title--2">
                        <h3>Block the cheaters</h3>
                    </div>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip ex ea commodo consequat.</p>
            </div>
            </div>
        </section>
    </main>
    <footer class="footer">
        <div class="copy">
            <p>Copyrights © 2019 by Kerris Group.
                All rights reserved.</p>
        </div>
        <div class="footer__image">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/ovals.svg">
        </div>
    </footer>
</body>

</html>