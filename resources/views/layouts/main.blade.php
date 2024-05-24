<!doctype html>
<html lang="en">
<head prefix="og: http://ogp.me/ns#">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title> Curated, Opinionated Shanghai Living | SmartShanghai</title>

                <link rel="stylesheet" type="text/css" href="https://static.smartshanghai.com/css/smartshanghai.min.1716301693.css">
    <link rel="stylesheet" type="text/css" href="https://static.smartshanghai.com/css/smartshanghai_v8.min.1716301691.css">
    <link rel="icon" type="image/png" href="https://static.smartshanghai.com/img/favicon.png">
    <link rel="icon" type="image/x-icon" href="https://static.smartshanghai.com/img/favicon.ico">

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-35757037-1"></script>
    <script type="text/javascript" src="https://static.smartshanghai.com/js/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="https://static.smartshanghai.com/js/vendor.min.1716301698.js"></script>
    <script type="text/javascript" src="https://static.smartshanghai.com/js/javascripts.min.1709740003.js"></script>
    <script type="text/javascript" src="https://static.smartshanghai.com/js/public.min.1716301728.js"></script>
    <script type="text/javascript">
        document.addEventListener('DOMContentLoaded', function() {
            window.smsh.methods.setConfig({"debug":false,"user":{"id":336520,"username":"shangaiadmin","real_name":null,"email_address":"aiyanacampaign@gmail.com","jwt":"eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJ1c2VyX2lkIjozMzY1MjAsImV4cCI6MTcxOTE5MjkyNH0.2nP3ETm1XQXZf3rH2T0wRftntoaRBSPYIaZtlHhJmDA","language_id":1,"unread_messages_count":2},"apiBaseUrl":"https:\/\/www.smartshanghai.com\/api2","apiKey":"74697295525def9620013f39488d9ace93b3d666","googleAnalyticsKey":"UA-35757037-1"});
            window.smsh.methods.init();
            // window.huangfeitracking.methods.init();
        });
    </script>



    <script type="text/javascript">
        window.addEventListener('DOMContentLoaded', function () {
            const config = window.smsh.methods.getConfig();
            window.smsh.methods.initComponentsTabs();
            window.smsh.methods.initHorizontalSliders();
            window.smsh.methods.initHomepageHousingComponent('.housing-component');

            $('.category-tags-hero.homepage-mobile .return-button').on('click', function () {
                console.log('return-button');
                $('.category-tags-hero.homepage-mobile .first-pane.categories-list').show();
                $('.category-tags-hero.homepage-mobile .second-pane.categories-list').hide();
            });

            $('.job-sidebar-adv').stick_in_parent();



            //初始化smsh-components-tabs的slick
            $(".smsh-components-tabs").each(function(index, value) {
                const slidesDesktop = $(this).data('slidesdesktop');
                const slidesTablet = $(this).data('slidestablet');
                const slidesMobile = $(this).data('slidesmobile');

                const slider = $(this).find('.smsh-components-tabs-slider');
                if (slider) {
                    slider.not('.slick-initialized').slick({
                        infinite: false,
                        speed: 300,
                        // autoplaySpeed: 3000,
                        arrows: true,
                        dots: false,
                        slidesToShow: slidesDesktop,
                        slidesToScroll: slidesDesktop,
                        responsive: [
                            {
                                breakpoint: 1000,
                                settings: {
                                    slidesToShow: slidesTablet,
                                    slidesToScroll: slidesTablet,
                                },
                            },
                            {
                                breakpoint: 600,
                                settings: {
                                    slidesToShow: slidesMobile,
                                    slidesToScroll: slidesMobile,
                                    speed: 150,
                                },
                            },
                        ],
                    });
                }
            });


            // //页头
            $('.header-menu-2022-mobile').slick({
                infinite: false,
                arrows: false,
                speed: 800,
                slidesToScroll: 6,
                rows: 2,
                variableWidth: true,
                dots: false,
            });


            if (window.screen.width > 600) {

                $('.homepage_featured_articles_slider').not('.slick-initialized').slick({
                    infinite: false,
                    speed: 800,
                    autoplaySpeed: 5000,
                    variableWidth: true,
                    dots: false,
                    slidesToShow: 3,
                    slidesToScroll: 4,
                    arrows: true,
                    prevArrow: '.homepage-articles-list .left-arrow',
                    nextArrow: '.homepage-articles-list .right-arrow'
                });
            }

            $('.homepage-articles-list .right-arrow').on('click', function () {
                $('.homepage-articles-list .left-arrow').removeClass('hidden');
                $(this).addClass('hidden');
            });
            $('.homepage-articles-list .left-arrow').on('click', function () {
                $('.homepage-articles-list .right-arrow').removeClass('hidden');
                $(this).addClass('hidden');
            });

            //
            // $('.homepage_feed .feed').slick({
            //     infinite: false,
            //     speed: 800,
            //     dots: false,
            //     slidesToShow: 3,
            //     slidesToScroll: 2,
            //     arrows: true,
            //     prevArrow: '',
            //     nextArrow: '.homepage_feed .feed-right-arrow'
            // });


            //homepage_housing_jobs_bs_hero 的tab js

            mobileTab('#tabsBlock');

            function mobileTab(element) {
                let header = $(element).find('.tabs-block .header-block.info');
                let datasList = $(element).find('.tabs-datas-block li');
                let tabName;

                header.on('click', function () {

                    console.log('click');

                    if(!$(this).hasClass('active')) {
                        header.removeClass('active');
                        $(this).addClass('active');

                        datasList.removeClass('active');
                        tabName = $(this).data('tab-name');
                        $(element).find(`.tabs-datas-block li.` + tabName).addClass('active');
                    }
                })
            };
        });
    </script>
</head>
<body id="mobile-optimize">
@yield('content')
@include('layouts.templates_parts.footer')
</body>
</html>
