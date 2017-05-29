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
    <link rel="stylesheet" type="text/css" href="build/styles.css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
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
                <h2 class="wow fadeInLeft" data-wow-duration="0.4s" data-wow-delay=".3s">PROJECTS</h2>
                <p class="wow fadeInRight" data-wow-duration="0.4s" data-wow-delay=".4s">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's<br> standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to<br> make a type specimen book.</p>
            </div>
        </div>
    </section>


<!-- First Section With Tabs on Projects Page -->

<section class="tab_section_one_projects">
    <div class="container">
        <div class="row">
        <h1 class="wow fadeInUp" data-wow-duration="0.4s" data-wow-delay=".2s">Gallery & Reports</h1>
        <p class="wow fadeInUp" data-wow-duration="0.4s" data-wow-delay=".3s">Lorem Ipsum is simply dummy text of the printing <br> and typesetting industry. Lorem Ipsum has been the<br> industry</p>
            <div class="tab_buttons_projec col-md-4 col-md-offset-4">
                <ul class="nav nav-pills nav-fill wow fadeInUp" data-wow-duration="0.4s" data-wow-delay=".2s">
                    <li class="active"><a data-toggle="tab" href="#tab_ga_1">Gallery</a></li>
                    <li><a data-toggle="tab" href="#tab_ga_2">Reports</a></li>
                 </ul>
            </div>  
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
</body>

</html>
