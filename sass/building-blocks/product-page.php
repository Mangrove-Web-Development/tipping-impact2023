<?php
/**
 * Template Name: Contact Page Template
 *
 * Template for displaying a blank page.
 *
 * @package UnderStrap
 */
$footer = get_field('footer', 'option');
get_header(); ?>

<div class="main-content contact-page">
    <?php if( have_rows('top_section') ): ?>
    <?php while( have_rows('top_section') ): the_row(); ?>
    <section class="cnt-top-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="text-center pb-4"><?php echo the_sub_field('section_heading'); ?></h2>
                    <div class="desc-top wysiwyg-editor"><?php echo the_sub_field('description'); ?></div>
                </div>
                <?php if( have_rows('contact_list') ): ?>
                <?php while( have_rows('contact_list') ): the_row(); ?>
                <div class="col-md-3 py-1">
                    <a href="https://intercom.help/yardzen-helpcenter/en/">
                        <img src="/wp-content/uploads/2022/06/help.png">
                        <?php echo the_sub_field('search'); ?>
                    </a>
                </div>
                <div class="col-md-3 py-1">
                    <a href="mailto:<?php echo the_sub_field('email'); ?>">
                        <img src="/wp-content/uploads/2022/06/email.png">
                        <?php echo the_sub_field('email'); ?>
                    </a>
                </div>
                <div class="col-md-3 py-1">
                    <a href="tel:<?php echo the_sub_field('phone'); ?>">
                        <img src="/wp-content/uploads/2022/06/phone.png">
                        <?php echo the_sub_field('phone'); ?>
                    </a>
                </div>
                <div class="col-md-3 py-1">
                    <a href="">
                        <img src="/wp-content/uploads/2022/06/chat.png">
                        <?php echo the_sub_field('chat'); ?>
                    </a>
                </div>
                <?php endwhile; endif; ?>
            </div>
        </div>
    </section>
    <?php endwhile; endif; ?>
    <?php if( have_rows('calendar_section') ): ?>
    <?php while( have_rows('calendar_section') ): the_row(); ?>
    <section class="cnt-middle-section" style="background: url('<?php echo the_sub_field('section_bg'); ?>')">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="text-center pb-4"><?php echo the_sub_field('section_heading'); ?></h2>
                    <div class="desc-mid wysiwyg-editor"><?php echo the_sub_field('desc'); ?></div>
                </div>
            </div>
        </div>
    </section>
    <?php endwhile; endif; ?>
    <?php if( have_rows('bottom_section') ): ?>
    <?php while( have_rows('bottom_section') ): the_row(); ?>
    <section class="cnt-bottom-section py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-md-6"><?php echo the_sub_field('col_1'); ?></div>
                <div class="col-md-6"><?php echo the_sub_field('col_2'); ?>
                    <div class="social-icons">
                        <?php if( $footer['social_link']['url'] ) { ?>
                        <a href="<?php echo $footer['social_link']['url']; ?>" class="svg"><svg
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path
                                    d="M326.612 185.391c59.747 59.809 58.927 155.698.36 214.59-.11.12-.24.25-.36.37l-67.2 67.2c-59.27 59.27-155.699 59.262-214.96 0-59.27-59.26-59.27-155.7 0-214.96l37.106-37.106c9.84-9.84 26.786-3.3 27.294 10.606.648 17.722 3.826 35.527 9.69 52.721 1.986 5.822.567 12.262-3.783 16.612l-13.087 13.087c-28.026 28.026-28.905 73.66-1.155 101.96 28.024 28.579 74.086 28.749 102.325.51l67.2-67.19c28.191-28.191 28.073-73.757 0-101.83-3.701-3.694-7.429-6.564-10.341-8.569a16.037 16.037 0 0 1-6.947-12.606c-.396-10.567 3.348-21.456 11.698-29.806l21.054-21.055c5.521-5.521 14.182-6.199 20.584-1.731a152.482 152.482 0 0 1 20.522 17.197zM467.547 44.449c-59.261-59.262-155.69-59.27-214.96 0l-67.2 67.2c-.12.12-.25.25-.36.37-58.566 58.892-59.387 154.781.36 214.59a152.454 152.454 0 0 0 20.521 17.196c6.402 4.468 15.064 3.789 20.584-1.731l21.054-21.055c8.35-8.35 12.094-19.239 11.698-29.806a16.037 16.037 0 0 0-6.947-12.606c-2.912-2.005-6.64-4.875-10.341-8.569-28.073-28.073-28.191-73.639 0-101.83l67.2-67.19c28.239-28.239 74.3-28.069 102.325.51 27.75 28.3 26.872 73.934-1.155 101.96l-13.087 13.087c-4.35 4.35-5.769 10.79-3.783 16.612 5.864 17.194 9.042 34.999 9.69 52.721.509 13.906 17.454 20.446 27.294 10.606l37.106-37.106c59.271-59.259 59.271-155.699.001-214.959z" />
                            </svg></a>
                        <?php } ?>
                        <?php if( $footer['social_link']['instagram'] ) { ?>
                        <a href="<?php echo $footer['social_link']['instagram']; ?>" class="svg">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"/></svg>
                        </a>
                        <?php } ?>
                        <?php if( $footer['social_link']['pinterest'] ) { ?>
                        <a href="<?php echo $footer['social_link']['pinterest']; ?>" class="svg">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512"><path d="M496 256c0 137-111 248-248 248-25.6 0-50.2-3.9-73.4-11.1 10.1-16.5 25.2-43.5 30.8-65 3-11.6 15.4-59 15.4-59 8.1 15.4 31.7 28.5 56.8 28.5 74.8 0 128.7-68.8 128.7-154.3 0-81.9-66.9-143.2-152.9-143.2-107 0-163.9 71.8-163.9 150.1 0 36.4 19.4 81.7 50.3 96.1 4.7 2.2 7.2 1.2 8.3-3.3.8-3.4 5-20.3 6.9-28.1.6-2.5.3-4.7-1.7-7.1-10.1-12.5-18.3-35.3-18.3-56.6 0-54.7 41.4-107.6 112-107.6 60.9 0 103.6 41.5 103.6 100.9 0 67.1-33.9 113.6-78 113.6-24.3 0-42.6-20.1-36.7-44.8 7-29.5 20.5-61.3 20.5-82.6 0-19-10.2-34.9-31.4-34.9-24.9 0-44.9 25.7-44.9 60.2 0 22 7.4 36.8 7.4 36.8s-24.5 103.8-29 123.2c-5 21.4-3 51.6-.9 71.2C65.4 450.9 0 361.1 0 256 0 119 111 8 248 8s248 111 248 248z"/></svg>
                        </a>
                        <?php } ?>
                        <?php if( $footer['social_link']['linkedin'] ) { ?>
                        <a href="<?php echo $footer['social_link']['linkedin']; ?>" class="svg">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z"/></svg>
                        </a>
                        <?php } ?>
                        <?php if( $footer['social_link']['twitter'] ) { ?>
                        <a href="<?php echo $footer['social_link']['twitter']; ?>" class="svg">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"/></svg>
                        </a>
                        <?php } ?>
                        <?php if( $footer['social_link']['houzz'] ) { ?>
                        <a href="<?php echo $footer['social_link']['houzz']; ?>" class="svg">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M275.9 330.7H171.3V480H17V32h109.5v104.5l305.1 85.6V480H275.9z"/></svg>
                        </a>
                        <?php } ?>
                        <?php if( $footer['social_link']['facebook'] ) { ?>
                        <a href="<?php echo $footer['social_link']['facebook']; ?>" class="svg">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"/></svg>
                        </a>
                        <?php } ?>
                        <?php if( $footer['social_link']['tiktok'] ) { ?>
                        <a href="<?php echo $footer['social_link']['tiktok']; ?>" class="svg"><svg
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                <path
                                    d="M448,209.91a210.06,210.06,0,0,1-122.77-39.25V349.38A162.55,162.55,0,1,1,185,188.31V278.2a74.62,74.62,0,1,0,52.23,71.18V0l88,0a121.18,121.18,0,0,0,1.86,22.17h0A122.18,122.18,0,0,0,381,102.39a121.43,121.43,0,0,0,67,20.14Z" />
                            </svg></a>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php endwhile; endif; ?>
</div>

<?php get_footer();