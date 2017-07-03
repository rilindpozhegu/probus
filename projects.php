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
                <p class="wow fadeInRight" data-wow-duration="0.4s" data-wow-delay=".4s">Abu Dhabi National Oil Company (ADNOC) Pre-Qualified EPC/Maintenance Contractor with a track record of delivery in the UAE and An Iraq.</p>
            </div>
        </div>
    </section>


<!-- First Section With Tabs on Projects Page -->

<section class="tab_section_one_projects">
    <div class="container">
        <div class="row">
        <h1 class="wow fadeInUp" data-wow-duration="0.4s" data-wow-delay=".2s">Our Projects</h1>
        <p class="wow fadeInUp" data-wow-duration="0.4s" data-wow-delay=".3s">Lorem Ipsum is simply dummy text of the printing <br> and typesetting industry. Lorem Ipsum has been the<br> industry</p>
            <div class="tab_buttons_projec col-md-4 col-md-offset-4">
                <ul class="nav nav-pills nav-fill wow fadeInUp" data-wow-duration="0.4s" data-wow-delay=".2s">
                    <li class="active"><a data-toggle="tab" href="#home">Within UAE</a></li>
                    <li><a data-toggle="tab" href="#menu1">Outside UAE</a></li>
                 </ul>
            </div>  
            <div class="clearfix"></div>

            <div class="our_projects_details">
                <div class="col-md-4 small_padding-lr">
                    <div class="image_details_a">
                        <img src="img/gallery/img1.png" alt="Project" class="image img-responsive" >
                        <div class="overlay">
                            <button class="button_details_projects"  data-toggle="modal" data-target="#myModal">Read More <i class="fa fa-angle-right" aria-hidden="true"></i></button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 small_padding-lr">
                    <div class="image_details_a">
                        <img src="img/gallery/img1.png" alt="Project" class="image img-responsive" >
                        <div class="overlay">
                            <button class="button_details_projects"  data-toggle="modal" data-target="#myModal">Read More <i class="fa fa-angle-right" aria-hidden="true"></i></button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 small_padding-lr">
                    <div class="image_details_a">
                        <img src="img/gallery/img1.png" alt="Project" class="image img-responsive" >
                        <div class="overlay">
                            <button class="button_details_projects"  data-toggle="modal" data-target="#myModal">Read More <i class="fa fa-angle-right" aria-hidden="true"></i></button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 small_padding-lr">
                    <div class="image_details_a">
                        <img src="img/gallery/img1.png" alt="Project" class="image img-responsive" >
                        <div class="overlay">
                            <button class="button_details_projects"  data-toggle="modal" data-target="#myModal">Read More <i class="fa fa-angle-right" aria-hidden="true"></i></button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 small_padding-lr">
                    <div class="image_details_a">
                        <img src="img/gallery/img1.png" alt="Project" class="image img-responsive" >
                        <div class="overlay">
                            <button class="button_details_projects"  data-toggle="modal" data-target="#myModal">Read More <i class="fa fa-angle-right" aria-hidden="true"></i></button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 small_padding-lr">
                    <div class="image_details_a">
                        <img src="img/gallery/img1.png" alt="Project" class="image img-responsive" >
                        <div class="overlay">
                            <button class="button_details_projects"  data-toggle="modal" data-target="#myModal">Read More <i class="fa fa-angle-right" aria-hidden="true"></i></button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>



<!-- Modals for each Image -->

  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg" style="margin-top: 6%;">
    
      <!-- Modal content-->
      <div class="modal-content modal_style_details">
        <div class="modal-body">
            <div class="col-md-6 no_padding">
                <img src="img/about_first.png">
            </div>
            <div class="col-md-6 modal_text_details">
            <button type="button" data-dismiss="modal"><i class="fa fa-times" aria-hidden="true"></i></button>
                <img src="img/client/client3.png" class="clients_logo_popup">
                <h2>Project Name</h2>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                <p> It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with des</p>
            </div>
        </div>
        <div class="modal-footer">
        </div>
      </div>
      
    </div>
  </div>


<section class="home_input_style">
    <?php include 'contact_section_input.php';?>
</section>    


<!-- Footer all Pages -->    
    <?php include 'footer_all.php';?>

<!-- jQuery -->

    <script type="text/javascript" src="build/scripts.js"></script>
</body>

</html>
