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
    <section class="about_cover_section main_text_hero">
        <div class="container">
            <div class="row">
                <h3>PROBUS</h3>
                <h2>ACTIVITIES</h2>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's<br> standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to<br> make a type specimen book.</p>
            </div>
        </div>
    </section>


<!-- Our Activities + Gallery Section -->
    <?php include 'our_activities_section.php';?>


<!-- Benefits Using Probus -->
    <?php include 'benefits_slick_section.php';?>

<!-- last section on the activities page -->
<section class="clients_activities_page">
    <div class="container">
        <div class="row">
            <h1>Key Clients</h1>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with des</p>
            <div class="col-md-12 col-sm-12 col-xs-12">
            <ul class="client_list">
              <li><img src="img/client/client1.png"></li>
              <li><img src="img/client/client2.png"></li>
              <li><img src="img/client/client4.png"></li>
              <li><img src="img/client/client3.png"></li>
            </ul>
            </div>
        </div>
    </div>
</section>


<section class="home_input_style">
    <?php include 'contact_section_input.php';?>
</section>



<!-- Footer all Pages -->    
    <?php include 'footer_all.php';?>

<!-- jQuery -->

    <script type="text/javascript" src="build/scripts.js"></script>
</body>

</html>
