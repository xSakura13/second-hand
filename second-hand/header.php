<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri();?>/assets/images/favicon.ico" type="image/x-icon">
    <title>British Second</title>
    <?php wp_head(); ?>
</head>
<body>
<header>
    <div class="navigation">
        <div class="container-header">
            <div class="row g-0 navigation-row">
                <div class=" d-flex justify-content-center logo">
                    <a href="/"><img src="<?php echo get_template_directory_uri();?>/assets/images/Logo.png" alt="">
                    </a>
                </div>
                <div class=" row-left-navigation">
                    <div class="row g-0 row-top">
                        <div class=" search_col">
                            <?php echo do_shortcode('[ivory-search id="307" title="Default Search Form"]')?>
                        </div>
                        <div class=" icon_social-logo">
                            <div class="img-social d-flex">
                                <a href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg"  fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                                        <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
                                    </svg>
                                </a>
                                <a href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                         viewBox="0 0 14 15">
                                        <path d="M 3.5 1 C 2.1250151 1 1 2.1250151 1 3.5 L 1 11.5 C 1 12.874985 2.1250151 14 3.5 14 L 11.5 14 C 12.874985 14 14 12.874985 14 11.5 L 14 3.5 C 14 2.1250151 12.874985 1 11.5 1 L 3.5 1 z M 3.5 2 L 11.5 2 C 12.335015 2 13 2.6649849 13 3.5 L 13 11.5 C 13 12.335015 12.335015 13 11.5 13 L 9.9042969 13 L 9.9042969 8.9667969 L 11.300781 8.9667969 L 11.509766 7.3574219 L 9.9042969 7.3574219 L 9.9042969 6.3320312 C 9.9042969 5.8660312 10.034031 5.5488281 10.707031 5.5488281 L 11.566406 5.5488281 L 11.566406 4.109375 C 11.417406 4.089375 10.907453 4.046875 10.314453 4.046875 C 9.0764531 4.046875 8.2304688 4.795875 8.2304688 6.171875 L 8.2304688 7.3574219 L 7 7.3535156 L 7 8.9628906 L 8.2304688 8.9667969 L 8.2304688 13 L 3.5 13 C 2.6649849 13 2 12.335015 2 11.5 L 2 3.5 C 2 2.6649849 2.6649849 2 3.5 2 z"></path>
                                    </svg>
                                </a>
                                <a href="#" id="search_media_click" class="search-media">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <div class=" d-flex contact-tel">
                            <div class="contact-img">
                                <img src="<?php echo get_template_directory_uri();?>/assets/images/Group.png" alt="">
                            </div>
                            <a href="tel:+ 38(097) 384-17-92">
                                (097) 384-17-92
                            </a>
                            <a href="tel:+ 38(063) 788-11-18">
                                (063) 788-11-18
                            </a>
                        </div>

                        <div class=" language-select">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                            </svg>
                            <select class="form-select">
                                <option value="1">RU</option>
                                <option value="2">UA</option>
                                <option value="3">EN</option>
                            </select>
                        </div>
                        <div class="burger-menu">
                            <a href="#" class="burger-menu_button">
                                <span class="burger-menu_lines"></span>
                            </a>
                            <?php wp_nav_menu( [
                                'theme_location'  => 'burger',
                                'container'       => null,
                                'menu_class'      => 'burger-menu_nav',
                                'menu_id'         => 'test',
                                ] );?>
                            <div class="burger-menu_overlay"></div>
                        </div>
                    </div>
                    <div class="row g-0 row-bottom">
                        <nav class="navbar navbar-expand-md">
                            <div class="fluid">
                                <div class="collapse navbar-collapse">
                                    <?php wp_nav_menu( [
                                        'theme_location'  => 'top',
                                        'container'       => null,
                                        'menu_class'      => 'navbar-nav',
                                        'echo'            => true,
                                        'fallback_cb'     => 'wp_page_menu',
                                    ] );?>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
            <form id="form_header" class="input_header_search" action="#">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="closedSvg bi bi-x-lg" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M13.854 2.146a.5.5 0 0 1 0 .708l-11 11a.5.5 0 0 1-.708-.708l11-11a.5.5 0 0 1 .708 0Z"/>
                    <path fill-rule="evenodd" d="M2.146 2.146a.5.5 0 0 0 0 .708l11 11a.5.5 0 0 0 .708-.708l-11-11a.5.5 0 0 0-.708 0Z"/>
                </svg>
                <?php echo do_shortcode('[ivory-search id="338" title="Default Search Form_copy"]')?>
               
            </form>
        </div>
    </div>
</header>