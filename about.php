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

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">


<!-- NavigationBar -->
    <?php include 'navigation_bar.php';?>

    <?php include 'slider_top.php';?>

    <!-- Cover Content -->
    <section class="about_cover_section main_text_hero">
        <div class="container">
            <div class="row">
                <h3 class="wow fadeInLeft" data-wow-duration="0.4s" data-wow-delay=".2s">A LITTLE ABOUT</h3>
                <h2 class="typeit"></h2>
                <p class="wow fadeInRight" data-wow-duration="0.4s" data-wow-delay=".4s">Probus Engineering has made a name for itself in the Oil & Gas and Infrastructure sectors through goal-driven work and a standard for excellence. We believe that speed as well as quality of work are essential in helping our clients on a daily basis.</p>
            </div>
        </div>
    </section>


<!-- First Section About us page -->

<section class="first_section_about_u">
	<div class="container">
		<div class="row">
			<div class="col-md-4 wow fadeInRight" data-wow-duration="0.4s" data-wow-delay=".2s">
				<img src="img/about_first.png">
			</div>
			<div class="col-md-7">
				<h3 class="wow fadeInLeft" data-wow-duration="0.4s" data-wow-delay=".2s">OUR VISION</h3>
				<p class="wow fadeInLeft" data-wow-duration="0.4s" data-wow-delay=".3s">Our vision is to maintain our status as a leader in our industry, but to keep going above and beyond our clients’ expectations in delivering excellence.</p>
				<p class="wow fadeInLeft" data-wow-duration="0.4s" data-wow-delay=".4s">We plan on achieving this by treating every project according to its unique needs and specifications and constantly honing our expertise in engineering. We also aim to maintain and constantly improve on the quality as well as the responsiveness of our services.</p>
			</div>
		</div>
	</div>
</section>

<!-- Second section About us page -->

<section class="second_section_about_u">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img src="img/logo_three.png" class="wow fadeInUp" data-wow-duration="0.4s" data-wow-delay=".2s">
                <p class="wow fadeInUp" data-wow-duration="0.4s" data-wow-delay=".24s">Probus Engineering and Construction Pte Ltd (PEC), previously UnaE&C Pte Ltd, is a Company incorporated in Singapore with its Operations Head Office in Abu Dhabi.</p>
                <p class="wow fadeInUp" data-wow-duration="0.4s" data-wow-delay=".25s">UnaE&C Pte Ltd was purchased in Feb 2017 by its new owner and, since then the Company has been operating under new leadership with the aim of expanding its Abu Dhabi footprint and re-entering Iraq.</p>
                <p class="wow fadeInUp" data-wow-duration="0.4s" data-wow-delay=".26s">PEC is focused on the Oil and Gas OPEX market, working together with its Clients to deliver tailor-made EPC solutions for capacity/HSSE/other upgrades/modifications, both in the brownfield and greenfield environments as well as Maintenance (including SD/TR) based packages.</p>
                <p class="wow fadeInUp" data-wow-duration="0.4s" data-wow-delay=".27s">PEC is a fully Iso certified Company with PQs across all Abu Dhabi OPCOs and with a track record of delivery in both Abu Dhabi and Iraq.</p>
                <p class="wow fadeInUp" data-wow-duration="0.4s" data-wow-delay=".28s">PEC is diversifying into infrastructure and is following tenders in Abu Dhabi.</p>
            </div>
            <div class="col-md-5 col-md-offset-1 check_about_sm wow fadeInRight" data-wow-duration="0.4s" data-wow-delay=".2s">
                <div class="commitments__title">
                    <h3>Our commitments</h3>
                    <span></span>
                </div>
                <h5><i class="fa fa-check" aria-hidden="true"></i> Policies and Procedures.</h5>
                <h5><i class="fa fa-check" aria-hidden="true"></i> Safety Performance Reviews and KPIs.</h5>
                <h5><i class="fa fa-check" aria-hidden="true"></i> Steering Committees and Audits.</h5>
                <h5><i class="fa fa-check" aria-hidden="true"></i> Management Walkthroughs.</h5>
                <h5><i class="fa fa-check" aria-hidden="true"></i> HSSEQ Incentive Program.</h5>
                <h5><i class="fa fa-check" aria-hidden="true"></i> HSSEQ Monthly Campaigns.</h5>
            </div>
        </div>
    </div>
</section>


<!-- thin Section Two on homepage -->
<?php include 'subscripe_your_email.php';?>

<!-- last Section About Us page -->

<section class="our_locations_about_us">
    <div class="container">
        <div class="row row--flex">
        <h1 class="wow fadeInUp" data-wow-duration="0.4s" data-wow-delay=".2s">OUR LOCATIONS</h1>
        <p class="wow fadeInLeft" data-wow-duration="0.4s" data-wow-delay=".3s">With its headquarters in Abu Dhabi, Probus operates Engineering centres in India and Iraq in order to harness an international expertise as well as improve local responsiveness.</p>
            <div class="col-md-4 wow fadeInLeft card__hover" data-wow-duration="0.4s" data-wow-delay=".2s">
                <div class="location_card_about">
                    <div class="image" style="background-image: url('img/location1.png')"></div>
                    <div>
                        <h5>Engineering</h5>
                        <h3>DELHI, INDIA<br>&nbsp;</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-4 wow fadeInLeft card__hover" data-wow-duration="0.4s" data-wow-delay=".3s">
                <div class="location_card_about">
                    <div class="image" style="background-image: url('img/addtower.jpg')"></div>
                    <div>
                        <h5>Abu Dhabi Office – Engineering Office</h5>
                        <h3>ABU DHABI PLAZA TOWER, HAMDAN STREET ABU DHABI, UAE</h3>
                    </div>
                </div>
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
        <script type="text/javascript" src="http://www.jqueryscript.net/demo/jQuery-Plugin-For-Customizable-Terminal-Text-Effect-TypeIt/dist/typeit.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('.typeit').typeIt({
                 whatToType: "Probus",
                 typeSpeed: 100,
                 showCursor: false
            });
        });
    </script>
</body>

</html>
