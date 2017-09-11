<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">


    <!-- Tab Logo -->
    <link rel="icon" href="img/favicon.png">


    <title>Probus</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="build/styles.css?"<?= filemtime('build/styles.css') ?>”>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.2/css/swiper.min.css">
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">


<!-- NavigationBar -->
    <?php include 'navigation_bar.php';?>

    <?php include 'slider_top.php';?>

    <!-- Cover Content -->
    <section class="about_cover_section main_text_hero">
        <div class="container">
            <div class="row">
                <h2 class="#">Activities</h2>
                <p class="wow fadeInRight" data-wow-duration="0.4s" data-wow-delay=".4s">Probus is a leader in EPC (engineering, procurement, construction) and Maintenance Solutions in the energy sector, particularly Oil &amp; Gas, in the Gulf Region. We strive to always surpass our clients’ expectations and deliver the highest quality services in the region. (please mention infrastructural.</p>
            </div>
        </div>
    </section>


<!-- Our Activities + Gallery Section -->
    <?php include 'our_activities_section.php';?>




<section class="benefits_using_probus_s">
    <div class="container">
        <div class="row">
            <div class="responsive_portfolio">
            
                <div class="staff_panel_sm">
                    <div class="staff_small_p_text ">
                        <h4>Brownfield Services & Plant Maintenance</h4>
                        <p>Probus comes as an invaluable partner even to existing plants and oil production facilities. Our operational maintenance professionals deliver the most competent technical services in order to maintain existing structures. Probus’s brownfield servicing and upgrading is ideal to support production growth or to get the most out of existing wells on a plateau or a downturn. Our in- country presence not only meets regulations but also gives our on-the- ground service teams an unmatched responsiveness in terms of reliability as well as speed.</p>
                        <a href="#"><button class="default_button_all">Contact Us</button></a>
                    </div>
                </div>
            </div>    
        </div>
    </div>
</section>

<div class="seperator__pr"></div>
<!-- Gallery Section -->
<?php include 'gallery_all_pages.php';?>

<!-- last section on the activities page -->
<section class="clients_activities_page">
    <div class="container">
        <div class="row">
            <h1 class="wow fadeInLeft" data-wow-duration="0.4s" data-wow-delay=".2s">Key Clients</h1>
            <p class="wow fadeInLeft" data-wow-duration="0.4s" data-wow-delay=".3s">Over the years, Probus has worked with and thoroughly surpassed the expectations of numerous high-profile clients in UAE and Iraq. Probus is also pre-qualified as an EPC and maintenance contractor with ADNOC group companies.</p>
            <div class="col-md-12 col-sm-12 col-xs-12">
            <ul class="client_list wow fadeInLeft" data-wow-duration="0.4s" data-wow-delay=".4s">
              <li><img src="img/client/client1.png"></li>
              <li><img src="img/client/client2.png"></li>
              <li><img src="img/client/client4.png"></li>
              <li><img src="img/client/client3.png"></li>
            </ul>
            </div>
        </div>
    </div>
</section>





<!-- Footer all Pages -->    
    <?php include 'footer_all.php';?>

<!-- jQuery -->

    <script type="text/javascript" src="build/scripts.js"></script>
     <script type="text/javascript" src="http://www.jqueryscript.net/demo/Mouse-Direction-aware-jQuery-Hover-Effect-Plugin-Directional-Hover/dist/jquery.directional-hover.min.js"></script>
     <script type="text/javascript" src="http://www.jqueryscript.net/demo/jQuery-Plugin-For-Customizable-Terminal-Text-Effect-TypeIt/dist/typeit.min.js"></script>
     <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.2/js/swiper.min.js"></script>


         <script type="text/javascript">
            document.addEventListener('DOMContentLoaded', function(){

        $('.parent__link').directionalHover({
            overlay: 'mask__overlay',
            easing: "swing",
            speed: 350
        });

        $('.typeit').typeIt({
                 whatToType: "Activities",
                 typeSpeed: 100,
                 showCursor: false
            });

            var swiper = new Swiper('.swiper-container', {
                pagination: '.swiper-pagination',
                slidesPerView: 4,
                slidesPerColumn: 2,
                paginationClickable: true,
                spaceBetween: 30,
                breakpoints: {
                    1024: {
                        slidesPerView: 3,
                        slidesPerColumn: 2
                    },
                    768: {
                        slidesPerView: 3,
                        slidesPerColumn: 2
                    },
                    640: {
                        slidesPerView: 2,
                        slidesPerColumn: 2
                    },
                    500: {
                        slidesPerView: 1,
                    }
                }
            });

    });
    </script>
</body>

</html>
