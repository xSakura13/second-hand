<?php

global $post;

$gallery = get_field('preview_img', $post->ID);
$additional_posts = get_posts([
    'numberposts' => 4,
    'category'    => 0,
    'orderby'     => 'date',
    'order'       => 'DESC',
    'include'     => array(),
    'exclude'     => $post->ID,
    'meta_key'    => '',
    'meta_value'  =>'',
    'post_type'   => 'products',
    'suppress_filters' => true,
])

?>

<?php get_header() ?>

    <main>
        <div class="category_list">
            <div class="item_container">
                <div class="list_wrapper">
                    <a href="/" class="home">
                        <img src="<?php echo get_template_directory_uri();?>/assets/images/home.png" alt="home">
                    </a>
                    <img src="<?php echo get_template_directory_uri();?>/assets/images/next.png" alt="next">
                    <a href="/blog/" class="summer">
                        Блог
                    </a>
                    <img src="<?php echo get_template_directory_uri();?>/assets/images/next.png" alt="next">
                    <a href="" class="shoes">
                        <?php echo $post->post_title; ?>
                    </a>
                </div>
            </div>
        </div>
        <div class="title">
            <div class="item_container">
                <div class="title_wrapper">
                    <h1>
                        <?php echo $post->post_title; ?>
                    </h1>
                </div>
            </div>
        </div>
        <div class="card_content">
            <div class="item_container">
                <div class="content_wrapper">
                    <div class="card_left">
                        <div class="slider">
                            <div class="slider-for">
                                    <div class="cart">
                                        <img
                                            src="<?php echo $gallery; ?>"
                                            alt="<?php echo $post->post_title; ?>"
                                            title="<?php echo $post->post_title; ?>"
                                        >
                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="card_right">
                        <div class="info">
                            <p><?php echo $post->post_content; ?></p>
                        </div>
                    </div>
                    <div class="card_bottom">
                        <div class="title-card_bottom">
                            <img src="<?php echo get_template_directory_uri();?>/assets/images/Vector62.png" alt="" class="left">
                            <h3>
                                ТАКОЖ ВАС МОЖЕ ЗАЦІКАВИТИ
                            </h3>
                            <img src="<?php echo get_template_directory_uri();?>/assets/images/Vector62.png" alt="" class="left">
                        </div>
                        <div class="list_card">
                            <?php foreach ($additional_posts as $ad_post) {
                                $ad_product_thumb = get_field('gallary', $ad_post->ID)[0]['url']
                                ?>
                                <div class="p big">
                                    <div class="card_items">
                                        <div class="card_photo">
                                            <img src="<?php echo $ad_product_thumb;?>" alt="card_bg">
                                        </div>
                                        <div class="card_body">
                                            <div class="body_top" style="min-height: 28px">
                                                <?php if(!empty(wp_get_post_terms($ad_post->ID, 'products-category'))) { ?>
                                                    <span>
                                                        <?php print_r( wp_get_post_terms($ad_post->ID, 'products-category')[0]->name); ?>
                                                    </span>
                                                <?php } ?>
                                            </div>
                                            <div class="body_bottom">
                                                <p class="number" style="min-height: 96px">
                                                    <?php
                                                    if(mb_strlen($ad_post->post_title) > 27 ){
                                                        echo mb_substr($ad_post->post_title, 0,23) . '...';
                                                    } else {
                                                        echo $ad_post->post_title;
                                                    }
                                                    ?>
                                                </p>
                                                <div class="red_line"></div>
                                                <p class="clothes">
                                                    Собівартість одної речі <br>
                                                </p>
                                                <p class="price">
                                                    <?php echo get_field('price', $ad_post->ID); ?>
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-currency-dollar" viewBox="0 0 16 16">
                                                        <path d="M4 10.781c.148 1.667 1.513 2.85 3.591 3.003V15h1.043v-1.216c2.27-.179 3.678-1.438 3.678-3.3 0-1.59-.947-2.51-2.956-3.028l-.722-.187V3.467c1.122.11 1.879.714 2.07 1.616h1.47c-.166-1.6-1.54-2.748-3.54-2.875V1H7.591v1.233c-1.939.23-3.27 1.472-3.27 3.156 0 1.454.966 2.483 2.661 2.917l.61.162v4.031c-1.149-.17-1.94-.8-2.131-1.718H4zm3.391-3.836c-1.043-.263-1.6-.825-1.6-1.616 0-.944.704-1.641 1.8-1.828v3.495l-.2-.05zm1.591 1.872c1.287.323 1.852.859 1.852 1.769 0 1.097-.826 1.828-2.2 1.939V8.73l.348.086z"/>
                                                    </svg>
                                                </p>
                                                <a href="<?php echo get_post_permalink($ad_post->ID); ?>">
                                                    Вибрати
                                                    <svg width="53" height="11" viewBox="0 0 53 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M0 5.5H51.5M51.5 5.5L46.5 0.5M51.5 5.5L46.5 10.5" />
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="button_block">
                        <a href="/products/">
                            Усі товари
                            <svg width="53" height="11" viewBox="0 0 53 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0 5.5H51.5M51.5 5.5L46.5 0.5M51.5 5.5L46.5 10.5" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <a href="#" class="goUp">
            <svg class="arrow-top-2" viewBox="0 0 9 14">
                <path class="svg-arrow" d="M6.660,8.922 L6.660,8.922 L2.350,13.408 L0.503,11.486 L4.813,7.000 L0.503,2.515 L2.350,0.592 L8.507,7.000 L6.660,8.922 Z" />
            </svg>
        </a>
    </main>


    <script>
        document.querySelector('.input_post_title').value = '<?php echo $post->post_title; ?>';
        document.querySelector('.input_post_url').value = '<?php echo get_post_permalink($post->ID); ?>';
    </script>
<?php get_footer() ?>