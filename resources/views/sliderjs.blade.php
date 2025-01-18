 <!-- Revolution Slider Main JS Files -->
 <script type="text/javascript" src="https://slimhamdi.net/salimo/demos/js/plugins/revolution/js/jquery.themepunch.tools.min.js"></script>
 <script type="text/javascript" src="https://slimhamdi.net/salimo/demos/js/plugins/revolution/js/jquery.themepunch.revolution.min.js"></script>

 <!-- Revolution Slider Extensions -->

 <script type="text/javascript" src="https://slimhamdi.net/salimo/demos/js/plugins/revolution/js/extensions/revolution.extension.actions.min.js"></script>
 <script type="text/javascript" src="https://slimhamdi.net/salimo/demos/js/plugins/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
 <script type="text/javascript" src="https://slimhamdi.net/salimo/demos/js/plugins/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
 <script type="text/javascript" src="https://slimhamdi.net/salimo/demos/js/plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
 <script type="text/javascript" src="https://slimhamdi.net/salimo/demos/js/plugins/revolution/js/extensions/revolution.extension.migration.min.js"></script>
 <script type="text/javascript" src="https://slimhamdi.net/salimo/demos/js/plugins/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
 <script type="text/javascript" src="https://slimhamdi.net/salimo/demos/js/plugins/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
 <script type="text/javascript" src="https://slimhamdi.net/salimo/demos/js/plugins/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
 <script type="text/javascript" src="https://slimhamdi.net/salimo/demos/js/plugins/revolution/js/extensions/revolution.extension.video.min.js"></script>


     <!-- Revolution Slider Initialization Starts -->
     <script type="text/javascript">
        (function(){
            "use strict";
            var tpj = jQuery;
            var revapi4;
            tpj(document).ready(function() {
                if (tpj("#rev_slider").revolution == undefined) {
                    revslider_showDoubleJqueryError("#rev_slider");
                } else {
                    revapi4 = tpj("#rev_slider").show().revolution({
                        sliderType: "standard",
                        jsFileLocation: "js/plugins/revolution/js/",
                        dottedOverlay: "none",
                        sliderLayout:"fullscreen",
                        delay: 9000,
                        navigation: {
                            keyboardNavigation: "off",
                            keyboard_direction: "horizontal",
                            mouseScrollNavigation: "off",
                            onHoverStop: "off",
                            touch: {
                                touchenabled: "on",
                                swipe_threshold: 75,
                                swipe_min_touches: 1,
                                swipe_direction: "horizontal",
                                drag_block_vertical: false
                            },
                            arrows: {
                                style: "zeus",
                                enable: false,
                                hide_onmobile: true,
                                hide_under: 600,
                                hide_onleave: true,
                                hide_delay: 200,
                                hide_delay_mobile: 1200,
                                tmp: '<div class="tp-title-wrap">  	<div class="tp-arr-imgholder"></div> </div>',
                                left: {
                                    h_align: "left",
                                    v_align: "center",
                                    h_offset: 90,
                                    v_offset: 0
                                },
                                right: {
                                    h_align: "right",
                                    v_align: "center",
                                    h_offset: 90,
                                    v_offset: 0
                                }
                            },
                            bullets: {
                                enable: false,
                                hide_onmobile: true,
                                hide_under: 600,
                                style: "metis",
                                hide_onleave: true,
                                hide_delay: 200,
                                hide_delay_mobile: 1200,
                                direction: "horizontal",
                                h_align: "center",
                                v_align: "bottom",
                                h_offset: 0,
                                v_offset: 30,
                                space: 5,
                                tmp: '<span class="tp-bullet-img-wrap">  <span class="tp-bullet-image"></span></span>'
                            }
                        },
                        viewPort: {
                            enable: true,
                            outof: "pause",
                            visible_area: "80%"
                        },
                        responsiveLevels: [1240, 1024, 778, 480],
                        gridwidth: [1240, 1024, 778, 480],
                        gridheight: [600, 600, 500, 400],
                        lazyType: "none",
                        parallax: {
                            type: "mouse",
                            origo: "slidercenter",
                            speed: 2000,
                            levels: [2, 3, 4, 5, 6, 7, 12, 16, 10, 50],
                        },
                        shadow: 0,
                        spinner: "off",
                        stopLoop: "off",
                        stopAfterLoops: -1,
                        stopAtSlide: -1,
                        shuffle: "off",
                        hideThumbsOnMobile: "off",
                        autoHeight: "off",
                        hideSliderAtLimit: 0,
                        hideCaptionAtLimit: 0,
                        hideAllCaptionAtLilmit: 0,
                        debugMode: false,
                        fallbacks: {
                            simplifyAll: "off",
                            nextSlideOnWindowFocus: "off",
                            disableFocusListener: false,
                        }
                    });
                }
            });



        })(jQuery);
        </script>
        <!-- Revolution Slider Initialization Ends -->
