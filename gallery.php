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
        <link rel="stylesheet" type="text/css" href="http://www.jqueryscript.net/demo/jQuery-Plugin-For-Customizable-Terminal-Text-Effect-TypeIt/dist/typeit.min.css">
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">


<!-- NavigationBar -->
    <?php include 'navigation_bar.php';?>

    <?php include 'slider_top.php';?>

    <!-- Cover Content -->
    <section class="projects_cover_section main_text_hero">
        <div class="container">
            <div class="row">
                <h3 class="wow fadeInLeft" data-wow-duration="0.4s" data-wow-delay=".2s">PROBUS</h3>
                <h2 class="typeit"></h2>
                <p class="wow fadeInRight" data-wow-duration="0.4s" data-wow-delay=".4s">Probus has carried out multiple projects in the MENA region – we invite you to take a look at some of our work below:</p>
            </div>
        </div>
    </section>


<!-- First Section With Tabs on Projects Page -->

<section class="tab_section_one_projects">
    <div class="container">
        <div class="row">
        <h1 class="wow fadeInUp" data-wow-duration="0.4s" data-wow-delay=".2s">Gallery</h1>
        <p class="wow fadeInUp" data-wow-duration="0.4s" data-wow-delay=".3s">Our success in the Oil & Gas industry given us a rich portfolio of <br>projects as well as references. You can find a gallery of them below:</p>
            <div class="clearfix"></div>
            <div class="tab-content">
                <div id="tab_ga_1" class="tab-pane fade in active">
                    <!-- Gallery Section -->
                    <?php include 'gallery_all_pages.php';?>
                </div>
                <div id="tab_ga_2" class="tab-pane fade">
                    <!-- Gallery Section -->
                    <?php include 'gallery_all_pages.php';?>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="home_input_style white_contact_form_style ccc_contact_from">
    <?php include 'contact_section_input.php';?>
</section>    

<!-- Footer all Pages -->    
    <?php include 'footer_all.php';?>

<!-- jQuery -->

    <script type="text/javascript" src="build/scripts.js"></script>
            <script type="text/javascript" src="http://www.jqueryscript.net/demo/jQuery-Plugin-For-Customizable-Terminal-Text-Effect-TypeIt/dist/typeit.min.js"></script>
            <script type="text/javascript" src="http://www.jqueryscript.net/demo/Mouse-Direction-aware-jQuery-Hover-Effect-Plugin-Directional-Hover/dist/jquery.directional-hover.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('.typeit').typeIt({
                 whatToType: "Gallery",
                 typeSpeed: 100,
                 showCursor: false
            });

            // 

            $('.parent__link').directionalHover({
                overlay: 'mask__overlay',
                easing: "swing",
                speed: 350
            });
        });
    </script>
</body>

</html>
