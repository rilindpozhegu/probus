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
    <section class="home_cover_section main_text_hero">
        <div class="container">
            <div class="row">
                <h2 class="#">Welcome</h2><p class="wow fadeInRight" data-wow-duration="0.4s" data-wow-delay=".4s">Welcome to Probus Engineering and Construction, a market leader providing services and bespoke solutions to the Oil and Gas Industries and Infrastructure sector. Located in Abu Dhabi and active within the Gulf Region, Probus prides itself on its client focus, delivery capability and inherent agility.</p>

                <!-- <p class="wow fadeInRight" data-wow-duration="0.4s" data-wow-delay=".4s">and scrambled it to<br> make a type specimen <span id="typed"></span></p> -->
            </div>
        </div>
    </section>

            <!-- <div id="titles_mor">
                <h3>Book.</h3>
                <h3>Notebook.</h3>
            </div>   -->

<div class="clearfix"></div>
    <!-- First Section homepage -->
    <section class="first_section_home">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <img src="img/home_double_i.png" class="img-responsive wow fadeInRight" data-wow-duration="0.4s" data-wow-delay=".2s">
                </div>
                <div class="col-md-7">
                    <img src="img/logo_two.png" class="wow fadeInUp" data-wow-duration="0.4s" data-wow-delay=".2s">
                    <p class="wow fadeInLeft" data-wow-duration="0.4s" data-wow-delay=".3s">Probus Engineering and Construction Pte Ltd (PEC), is a Company incorporated in Singapore with its Operations Head Office in Abu Dhabi. PEC was purchased in Feb 2017 by its new owner and, since then the Company has been operating under new leadership with the aim of expanding its Abu Dhabi footprint and re-entering Iraq.</p>
                    <p class="wow fadeInLeft" data-wow-duration="0.4s" data-wow-delay=".4s"> PEC is focused on the Oil and Gas OPEX market, working together with its Clients to deliver tailor-made EPC solutions for capacity/HSSE/other upgrades/modifications, both in the brownfield and greenfield environments as well as Maintenance (including SD/TR) based packages. PEC is a fully Iso certified Company with PQs across all Abu Dhabi OPCOs and with a track record of delivery in both Abu Dhabi and Iraq. PEC is diversifying into infrastructure and is following tenders in Abu Dhabi.</p>
                    <a href="activities.php"><button class="default_button_all wow fadeInUp" data-wow-duration="0.4s" data-wow-delay=".5s">Services</button></a>
                </div>
            </div>
        </div>
    </section>


<!-- Our Activities + Gallery Section -->
    <?php include 'our_activities_section.php';?>


<!-- Benefits Using Probus -->
    <?php include 'benefits_slick_section.php';?>

<!-- 
<section class="home_input_style">
</section>     -->

<!-- Footer all Pages -->    
    <?php include 'footer_all.php';?>

<!-- jQuery -->

    <script type="text/javascript" src="build/scripts.js"></script>
    <script type="text/javascript" src="http://www.jqueryscript.net/demo/Mouse-Direction-aware-jQuery-Hover-Effect-Plugin-Directional-Hover/dist/jquery.directional-hover.min.js"></script>
        <script type="text/javascript" src="http://www.jqueryscript.net/demo/jQuery-Plugin-For-Customizable-Terminal-Text-Effect-TypeIt/dist/typeit.min.js"></script>
        <script type="text/javascript" src="https://micku7zu.github.io/vanilla-tilt.js/src/vanilla-tilt.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.2/js/swiper.min.js"></script>

    <script type="text/javascript">
            document.addEventListener('DOMContentLoaded', function(){
        Typed.new("#typed", {
            stringsElement: document.getElementById('titles_mor'),
            typeSpeed: 30,
            backDelay: 1500,
            loop: true,
            contentType: 'html', // or text
            // defaults to null for infinite loop
            loopCount: null,
            callback: function(){ foo(); },
            resetCallback: function() { newTyped(); }
        });
        var resetElement = document.querySelector('.reset');
        if(resetElement) {
            resetElement.addEventListener('click', function() {
                document.getElementById('typed')._typed.reset();
            });
        }
        $('.parent__link').directionalHover({
            overlay: 'mask__overlay',
            easing: "swing",
            speed: 350
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
        $('.typeit').typeIt({
             whatToType: "WELCOME",
             typeSpeed: 100,
             showCursor: false
        });
    });
    function newTyped(){ /* A new typed object */ }
    function foo(){ console.log("Callback"); }
    </script>
</body>

</html>
