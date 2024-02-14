<?php
/**
 * Plugin Name: Slider Plugin by Stelian Kasabov
 * Description: A simple slider plugin that rotates divs every 5 seconds.
 * Version: 1.0
 * Author: Stelian Kasabov
 */

function my_slider_plugin_scripts() {
    wp_enqueue_script('my-slider-script', plugin_dir_url(__FILE__) . 'slider.js', array('jquery'), '1.0', true);
}
add_action('wp_enqueue_scripts', 'my_slider_plugin_scripts');

function my_slider_shortcode() {
    $slider_html = '
    <div id="services" class="section">
        <div class="block content-1170 center-relative">
            <div class="section-title-holder left">
                <div class="section-num">
                    <span>01</span>
                </div>
                <h2 class="entry-title">Services</h2>
            </div>
            <div class="section-content-holder right">
                <div class="content-wrapper">
                    <script>
                        var slider1_speed = "500";
                        var slider1_auto = "false";
                        var slider1_hover = "true";
                    </script>
                    <div class="image-slider-wrapper relative service slider1">
                        <a id="slider1_next" class="image_slider_next" href ="#"></a>

                        <ul id="slider1" class="image-slider slides">
                            <li>
                                <div class="service-holder ">
                                    <img src="http://localhost/softuni/wp-content/themes/softuni/demo-images/icon_01.png" alt="">
                                    <div class="service-content-holder">
                                        <div class="service-title">BRANDING</div>
                                        <div class="service-content">
                                            Donecos arem ipsum sit amet consectetur adipisicing elit sed eiusmod tempor incididunt ut donecos dolore ipsum temporest.<br />
                                        </div>
                                    </div>
                                </div>
                                <div class="service-holder ">
                                    <img src="http://localhost/softuni/wp-content/themes/softuni/demo-images/icon_02.png" alt="">
                                    <div class="service-content-holder">
                                        <div class="service-title">MOBILE APPS</div>
                                        <div class="service-content">
                                            Disum lorem sit amet consectetur adipisicing elit sed eiusmod tempor incididunt ut donecos dolore ipsum temporest.<br />
                                        </div>
                                    </div>
                                </div>
                                <div class="service-holder ">
                                    <img src="http://localhost/softuni/wp-content/themes/softuni/demo-images/icon_03.png" alt="">
                                    <div class="service-content-holder">
                                        <div class="service-title">WEB</div>
                                        <div class="service-content">
                                            Polor sit amet consectetur adipisicing elit sed eiusmod tempor incididunt ut dolore magna labore eiusmod.<br />
                                        </div>
                                    </div>
                                </div>
                                <div class="service-holder ">
                                    <img src="http://localhost/softuni/wp-content/themes/softuni/demo-images/icon_04.png" alt="">
                                    <div class="service-content-holder">
                                        <div class="service-title">GRAPHIC</div>
                                        <div class="service-content">
                                            Cadipisicing elit sed eiusmod tempor incididunt ut labore lorem ipsum dolor sit amet consectetur lorem ipsum dolor sit amet.<br />
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="service-holder ">
                                    <img src="http://localhost/softuni/wp-content/themes/softuni/demo-images/icon_03.png" alt="">
                                    <div class="service-content-holder">
                                        <div class="service-title">SERVICES</div>
                                        <div class="service-content">
                                            Donecos arem ipsum sit amet consectetur adipisicing elit sed eiusmod tempor incididunt ut donecos dolore ipsum temporest.<br />
                                        </div>
                                    </div>
                                </div>
                                <div class="service-holder ">
                                    <img src="http://localhost/softuni/wp-content/themes/softuni/demo-images/icon_04.png" alt="">
                                    <div class="service-content-holder">
                                        <div class="service-title">PSD</div>
                                        <div class="service-content">
                                            Disum lorem sit amet consectetur adipisicing elit sed eiusmod tempor incididunt ut donecos dolore ipsum temporest.<br />
                                        </div>
                                    </div>
                                </div>
                                <div class="service-holder ">
                                    <img src="http://localhost/softuni/wp-content/themes/softuni/demo-images/icon_02.png" alt="">
                                    <div class="service-content-holder">
                                        <div class="service-title">HTML</div>
                                        <div class="service-content">
                                            Polor sit amet consectetur adipisicing elit sed eiusmod tempor incididunt ut dolore magna labore eiusmod.<br />
                                        </div>
                                    </div>
                                </div>
                                <div class="service-holder ">
                                    <img src="http://localhost/softuni/wp-content/themes/softuni/demo-images/icon_01.png" alt="">
                                    <div class="service-content-holder">
                                        <div class="service-title">PHP</div>
                                        <div class="service-content">
                                            Cadipisicing elit sed eiusmod tempor incididunt ut labore lorem ipsum dolor sit amet consectetur lorem ipsum dolor sit amet.<br />
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <div class = "clear"></div>
                    </div>

                </div>
            </div>
            <div class="clear"></div>
        </div>
    </div>
    ';

    return $slider_html;
}
add_shortcode('my_slider', 'my_slider_shortcode');


