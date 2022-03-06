<?php

get_header();
$latest_post = get_posts([
    'numberposts' => 1,
    'category'    => 0,
    'orderby'     => 'ID',
    'order'       => 'DESC',
    'include'     => array(),
    'exclude'     => array(),
    'meta_key'    => '',
    'meta_value'  =>'',
    'post_type'   => 'post',
    'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
])[0];


$args = [
    'post_type' => 'post',
    'post_status' => 'publish',
    'posts_per_page' => -1,
    'orderby' => 'ID',
    'order' => 'ASC',
];

$loop = new WP_Query( $args );

$posts = get_posts([
    'numberposts' => -1,
    'category'    => 0,
    'orderby'     => 'ID',
    'order'       => 'DESC',
    'include'     => array(),
    'exclude'     => array(),
    'meta_key'    => '',
    'meta_value'  =>'',
    'post_type'   => 'post',
    'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
]);

$posts = array_chunk($posts, 4);
?>

    <main>
        <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/index.css">
        <div class="title">
            <div class="container_blog">
                <div class="title_wrapper">
               <div class="red_l"></div>
                    <h1>
                      Блог
                    </h1>
               </div>
            </div>
          </div>
          <div class="list">
              <div class="container_blog">
                  <div class="card_list_wrapper">
                      <div class="wow bounceInLeft cards_right">
                              <div class="card_wrapper">
                                  <div class="card_big">
                                      <img src="<?php echo get_field('preview_img', $latest_post->ID) ?>" alt="Img">
                                      <div class="card_body">
                                          <div class="card_info">
                                              <div class="card_title">
                                                  <?php if(!empty(wp_get_post_categories($latest_post->ID))) { ?>
                                                      <span>
                                                      <?php echo wp_get_post_categories(
                                                          $latest_post->ID,
                                                          ['fields' => 'all']
                                                        )[0]->name; ?>
                                                    </span>
                                                  <?php } ?>
                                              </div>
                                              <p class="date">
                                                  <?php echo $latest_post->post_date; ?>
                                              </p>
                                              <h2 class="card_title_text">
                                                  <?php echo $latest_post->post_title; ?>
                                              </h2>
                                              <p class="card_text">
                                                  <?php echo $latest_post->post_content; ?>
                                              </p>
                                              <div class="all_cards">
                                                  <a href="<?php echo get_post_permalink($latest_post->ID); ?>">
                                                      Читати далі
                                                      <svg width="53" height="11" viewBox="0 0 53 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                          <path d="M0 5.5H51.5M51.5 5.5L46.5 0.5M51.5 5.5L46.5 10.5" />
                                                      </svg>
                                                  </a>
                                              </div>
                                          </div>
                                      </div>
                              </div>
                          </div>
                      </div>
                      <div class="wow bounceInRight cards_left">
                        <div class="slick-vertical">
                            <?php while ( $loop->have_posts() ) {
                                $loop->the_post();
                                ?>
                            <div class="card_mini">
                                <div class="card_mini_body">
                                    <div class="card_photo">
                                      <img src="<?php echo get_field('preview_img', get_the_ID()) ?>" alt="<?php echo get_the_title(); ?>">
                                    </div>
                                    <div class="card_mini_info">
                                          <div class="body_top">
                                                  <?php if(!empty(wp_get_post_categories(get_the_ID()))) { ?>
                                                      <span class="lifestyle leftUp">
                                                      <?php echo wp_get_post_categories(
                                                          get_the_ID(),
                                                          ['fields' => 'all']
                                                      )[0]->name; ?>
                                                    </span>
                                                  <?php } ?>
                                          </div>
                                          <div class="body_bottom">
                                              <p>
                                                  <?php echo get_the_title(); ?>
                                              </p>
                                              <a href="<?php echo get_permalink(); ?>">
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
                          <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                              <div class="carousel-inner ">
                                  <?php foreach ($posts as $key => $posts_block) { ?>
                                  <div class="carousel-item <?php if($key === 0) {echo 'active';} ?>">
                                      <div class="carousel_df">
                                        <?php foreach ($posts_block as $post) { ?>
                                            <div class="card_mini">
                                                <div class="card_mini_body">
                                                    <div class="card_photo">
                                                        <img src="<?php echo get_field('preview_img', $post->ID) ?>" alt="<?php echo $post->post_title; ?>">
                                                    </div>
                                                    <div class="card_mini_info">
                                                        <div class="body_top">
                                                            <?php if(!empty(wp_get_post_categories($post->ID))) { ?>
                                                                <span class="lifestyle leftUp">
                                                                  <?php echo wp_get_post_categories(
                                                                      $post->ID,
                                                                      ['fields' => 'all']
                                                                  )[0]->name; ?>
                                                                </span>
                                                            <?php } ?>
                                                        </div>
                                                        <div class="body_bottom">
                                                            <p>
                                                                <?php echo $post->post_title; ?>
                                                            </p>
                                                            <a href="<?php echo get_permalink($post->ID); ?>">
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
                                  <?php } ?>
                              </div>
                              <div class="controls_carousel d-flex">
                                <div class="carousel-indicators carousel-cstm">
                            <?php foreach ($posts as $key => $posts_block) { ?>
                                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="<?php echo $key; ?>" class="<?php if($key === 0) {echo 'active myActive';} ?>" aria-current="true" aria-label="Slide 1"></button>
                             <?php } ?>
                                </div>
                                <div class="buttons_carousel">
                                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Предыдущий</span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Следующий</span>
                                    </button>
                                </div>
                            </div>
                        </div>
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

<?php get_footer() ?>