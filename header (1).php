<?php 
    function writeHeader($title, $description, $keywords){    
    GLOBAL $site;
    $activePage = basename($_SERVER['PHP_SELF'], ".php"); 
?>

<!DOCTYPE php>
<php lang="en">
	<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
		<meta name="keywords" content="">
        <meta name="author" content="">
        <meta property="og:description" content="" />
        <meta property="og:url" content="/" />
        <meta property="og:site_name" content="" />
        <title>SMCD</title>
        <!--  favicon -->
        <link rel="shortcut icon" href="">
        
		<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Outfit:wght@100..900&family=Saira:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

        <!-- font awesome -->
        <link rel="stylesheet" href="assets/fonts/font-awesome/css/font-awesome.min.css">
        <!-- magnafic popup -->
        <link rel="stylesheet" href="assets/magnific-popup/magnific-popup.css">
        <!-- swiper -->
        <link rel="stylesheet" href="assets/css/swiper.min.css">
        <!-- bootsnav menu -->
        <link rel="stylesheet" href="assets/css/bootsnav.css">
        <!-- Bootstrap -->
        <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <!-- Style CSS -->
        <link href="style.css" rel="stylesheet">
        <link href="custom.css" rel="stylesheet">
        <link href="index.css" rel="stylesheet">
        <!-- animate -->
        <link rel="stylesheet" href="assets/css/animate.css">
        <!-- RS5.0 Main Stylesheet -->
        <link rel="stylesheet" type="text/css" href="assets/revolution/css/settings.css">
        <!-- RS5.0 Layers and Navigation Styles -->
        <link rel="stylesheet" type="text/css" href="assets/revolution/css/layers.css">
        <link rel="stylesheet" type="text/css" href="assets/revolution/css/navigation.css">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.css">

    </head>
    
    <body>
     <!--header start-->
     <header>
        <!-- top bar -->
        <div class="top-bar">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-9">
                        <div class="panel-body">
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane fade in active" id="san-francisco">
                                    <ul class="top-bar-cta list-inline">
                                        <li>
                                            <i class="fa fa-phone-square"></i> For admissions call <a href="tel:+919912123453"><b> 9912123453 / </b> </a>
                                            <a href="tel:+918499962416"><b> 8499962416  </b> </a>
                                            
                                        </li>
                                        <li>
                                            <i class="fa fa-phone-square"></i>For any Queries <a href="tel:+919010455591"><b> 9010455591 </b> </a>
                                        </li>
                                        <li>
                                            <i class="fa fa-envelope-square"></i><a href="mailto: office1smec@stmarysgroup.com"> <b> office1smec@stmarysgroup.com </b> </a>
                                        </li> 
                                       
                                    </ul>
                                </div>
                                
                            </div>
                        </div>
                    </div> <!-- /.col-md-9-->
                    <div class="col-md-3">
                        <!-- <div class="">
                            <h6 class="text-white text-right pdt-20">Dist Code : YBG</h6>
                        </div> -->
                        <div class="">
                            <h6 class="text-white text-right pdt-20"> EAPCET/ICET/PGECET Code : SMCD</h6>
                        </div>
                      </div>
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div>


        
        <div class="top-bar-2 visible-lg">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="">
                            <div class="tab-content">
                                <a class="navbar-brand-top-bar-2" href="index.php">
                                    <img src="assets/img/smecd.jpg" class="logo logo-scrolled" alt="">
                                </a>
                            </div>
                        </div>
                    </div> 
                    <div class="col-md-4">

                        <!-- <h5 class="text-right pdt-50">EAMCET CODE : SMCD</h5> -->
                        
                      </div>
                </div>
            </div>
        </div>


        <!-- Start Navigation -->
        <nav class="navbar navbar-default navbar-sticky bootsnav">

            <!-- topbar visibilty toggole in mobile devices, you can remove this trigger if you dont want to show topbar in small devices -->
            <span class="tt-toggle-bar"><i class="fa fa-angle-down"></i></span>

            

            <div class="container">
            
                <!-- Start Header Navigation -->
                <div class="navbar-header hidden-lg">
                    <!-- <div class="navbar-header"> -->
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                        <i class="fa fa-bars"></i>
                    </button>
                    <h1><a class="navbar-brand" href="index.php"><img src="assets/img/smecd.jpg" class="logo logo-scrolled" alt=""></a></h1>
                    <!-- <p style="font-size:8px; margin-left: 20px"> Approved by AICTE,  Affliated to JNTUH,  Acredited by NAAC</p> -->
                </div>
                <!-- End Header Navigation -->

                 <!-- Collect the nav links, forms, and other content for toggling -->
                 <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav navbar-center" data-in="" data-out="">
                        <!-- <li><a href="index.php">Home</a></li> -->
                        <li><a href="index.php">Home</a></li>
                        <li class="dropdown">
                            <a href="about.php" class="dropdown-toggle" data-toggle="dropdown" >About</a>
                            <ul class="dropdown-menu">
                                <li class="dropdown">
                                    <a href="about.php" >About SMEC</a>
                                </li>
                               <li><a href="management.php">Management</a></li>
                               <li><a href="principal.php">Principal</a></li>
                               <li><a href="administrators.php">Administrators</a></li>
                               <li><a href="approvals.php">Approvals</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Academics</a>
                            <ul class="dropdown-menu">
                                <!-- <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Course Structure & Syllabus </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="cse.php" target="_blank">CSE</a></li>
                                        <li><a href="aiml.php">CSE - AIML</a></li>
                                        <li><a href="cs.php">CSE - CS</a></li>
                                        <li><a href="ds.php">CSE - AIDS</a></li>
                                        <li><a href="cse.php">CSE</a></li>
                                        <li><a href="ece.php">ECE</a></li>
                                        <li><a href="eee.php">EEE</a></li>
                                        <li><a href="mech.php">ME</a></li>
                                        <li><a href="civil.php">CE</a></li>
                                        <li><a href="diploma.php">Diploma CSE</a></li>
                                        <li><a href="diploma.php">Diploma ES</a></li>
                                        <li><a href="mba.php">MBA</a></li>
                                        <li><a href="sh.php">S & H</a></li>
                                    </ul>
                                </li> -->
                                <li class="">
                                    <a href="syllabus.php" >Academic Calendar</a>
                                    
                                </li>
                                <li class="">
                                    <a href="exam.php" >Examinations</a>
                                    
                                </li>
                                <li class="">
                                    <a href="events.php" >Events</a>
                                    
                                </li>
                                <li class="">
                                    <a href="gallery.php" >Gallery</a>
                                    
                                </li>
                                <li><a href="nptelvideos.php">NPTEL Videos</a></li>
                                <li><a href="facultyvideos.php">Faculty Videos</a></li>
                                
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Departments</a>
                            <ul class="dropdown-menu">
                                
                                <!--<li class="dropdown">-->
                                <!--    <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Under Graduate</a>-->
                                <!--    <ul class="dropdown-menu">-->
                                <!--        <li><a href="btech.php">B.Tech</a></li>-->
                                <!--        <li><a href="lateral.php">Lateral Entry</a></li>-->
                                <!--        <li><a href="cse.php">CSE</a></li>-->
                                <!--        <li><a href="aiml.php">CSE - AIML</a></li>-->
                                <!--        <li><a href="ds.php">CSE - AIDS</a></li>-->
                                <!--        <li><a href="diploma.php">Diploma CSE</a></li>-->
                                <!--        <li><a href="diploma.php">Diploma ES</a></li>-->
                                <!--    </ul>-->
                                <!--</li>-->
                            <!--    <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Post Graduate</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="mtech.php">M.Tech</a></li>
                                        <li><a href="mba-add.php">MBA</a></li>
                                    </ul>
                                </li> -->
                                <!-- <li><a href="">Post Graduate</a></li> -->
                                <!--<li><a href="diploma.php">Diploma</a></li>-->
                                <li><a href="cse.php">CSE</a></li>
                                        <li><a href="aiml.php">CSE (AI&ML)</a></li>
                                        <li><a href="aids.php">AI&DS</a></li>
                                        <li><a href="ds.php">CSE (DS)</a></li>
                                        <li><a href="cs.php">CSE (CS)</a></li>
                                        <li><a href="hs.php">H & S</a></li>
                                        <li><a href="diploma.php">Diploma CSE</a></li>
                                        <li><a href="diploma.php">Diploma ES</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Placements</a>
                            <ul class="dropdown-menu">
                                <li><a href="https://www.task.telangana.gov.in/" target="_blank">TASK</a></li>
                                <li><a href="crt.php">CRT</a></li>
                                <li><a href="cisco.php">CISCO Partnership</a></li>
                                <li><a href="placements.php">Placements</a></li>
                            </ul>
                        </li>
                        <li><a href="research.php">Research</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Campus Life</a>
                            <ul class="dropdown-menu">
                                <li><a href="library.php">Library</a></li>
                                <li><a href="transport.php">Transportation</a></li>
                                <li><a href="bank.php">Bank</a></li>
                                <li><a href="sports.php">Play Fields</a></li>
                                <li><a href="hostel.php">Hostel & Cafeteria</a></li>
                                <li><a href="facilities.php">Facilities</a></li>
                                <li><a href="ragging.php">Anti Ragging</a></li>
                            </ul>
                        </li>
                        
                        
                        
                        <li><a href="college-commitees.php">College Commitees</a></li>
                        
                        <!--<li><a href="application.php">B-Category Seats 2023-24</a></li>-->
                        
                        
                        <!--<li class="dropdown">-->
                        <!--    <a href="" class="dropdown-toggle" data-toggle="dropdown" >College Commitees</a>-->
                        <!--    <ul class="dropdown-menu">-->
                        <!--        <li><a href="anti-ragging.php">Anti Ragging</a></li>-->
                        <!--        <li><a href="assets/pdf/squad.pdf">Anti Ragging Squad</a></li>-->
                        <!--        <li><a href="scst.php">SC/ST Cell</a></li>-->
                        <!--        <li><a href="entrepreneurship.php">Entrepreneurship</a></li>-->
                        <!--        <li><a href="interaction.php">Industry Interaction Cell</a></li>-->
                        <!--        <li><a href="complaint.php">Internal Complaint Cell</a></li>-->
                        <!--        <li><a href="rti.php">RTI</a></li>-->
                        <!--        <li><a href="women.php">Womens Protection Cell</a></li>-->
                        <!--        <li><a href="quality.php">Internal Quality Assurance Cell</a></li>-->
                        <!--        <li><a href="grievance.php">Grievance Redressal</a></li>-->
                        <!--    </ul>-->
                        <!--</li>-->


                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" >NAAC</a>
                            <ul class="dropdown-menu">
                                <li><a href="naac.php" >SSR Cycle 2</a></li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" >AQAR</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="assets/naac/AQAR/2018-19.pdf" target="_blank">2018-19</a></li>
                                        <li><a href="assets/naac/AQAR/2019-18.pdf" target="_blank">2019-20</a></li>
                                        <li><a href="assets/naac/AQAR/2020-21.pdf" target="_blank">2020-21</a></li>
                                        <li><a href="assets/naac/AQAR/2021-22.pdf" target="_blank">2021-22</a></li>
                                      <li><a href="assets/naac/AQAR/2023-24.pdf" target="_blank">2023-24</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" >IQAC</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="assets/naac/IQAC/2020-21.pdf" target="_blank">2020-21</a></li>
                                        <li><a href="assets/naac/IQAC/2021-22.pdf" target="_blank">2021-22</a></li>
                                    </ul>
                                </li>
                                <!-- <li><a href="">Post Graduate</a></li> -->
                                <li><a href="naac-rti.php">RTI</a></li>
                            </ul>
                        </li>

                         <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" >AUTONOMUS</a>
                            <ul class="dropdown-menu">
                                <li><a href="Autonomous.php" >Governing Body</a></li>
                                
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" >AQAR</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="assets/naac/AQAR/2018-19.pdf" target="_blank">2018-19</a></li>
                                        <li><a href="assets/naac/AQAR/2019-18.pdf" target="_blank">2019-20</a></li>
                                        <li><a href="assets/naac/AQAR/2020-21.pdf" target="_blank">2020-21</a></li>
                                        <li><a href="assets/naac/AQAR/2021-22.pdf" target="_blank">2021-22</a></li>
                                      <li><a href="assets/naac/AQAR/2023-24.pdf" target="_blank">2023-24</a></li>
                                    </ul>
                                </li>

                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" >IQAC</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="assets/naac/IQAC/2020-21.pdf" target="_blank">2020-21</a></li>
                                        <li><a href="assets/naac/IQAC/2021-22.pdf" target="_blank">2021-22</a></li>
                                    </ul>
                                </li>

                                <!-- <li><a href="">Post Graduate</a></li> -->
                                <li><a href="naac-rti.php">RTI</a></li>
                            </ul>
                        </li>
                      
                      <!---------------------------- NIRF------------------------------------------------->
                         <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" >NIRF</a>
                           <ul class="dropdown-menu">
                             <li><a href="assets/nirf/2025.pdf" >NIRF-Overall</a></li>
                             
                           </ul>
                      </li>
                      
                        <!--<li><a href="https://forms.office.com/Pages/ResponsePage.aspx?id=jFYGAhUV_UmQ1Pba0HhFAAOQjKR5LLtKoQj2VO_TelZURFpTN1JYTDJYVlpROEtVVDRNWlhOU0JIMS4u" target="_blank" >Admissions Enquiry Form</a></li>-->
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div>
        </nav>
        <!-- End Navigation -->
        <div class="clearfix"></div>
    </header>
    <!--header end-->

    <?php
}


function writeFooter() {
	GLOBAL $site;
$activePage = basename($_SERVER['PHP_SELF'], ".php");
?>


    <!-- Footer Section -->
    <footer class="footer">
    <footer class="footer">
           
		   <div class="primary-footer section-padding">
			   <div class="container">
				   <div class="row">

	   
					   <div class="col-md-2 col-sm-6">
						   <div class="widget widget-meta mt-5">
							   <h3 class="widget-title">Quick Links</h3>
							   <ul class="useful-link">
								   <li><a href="about.php">About</a></li>
                                   <li><a href="about.php#seats" >Admissions</a></li>
                                   <li><a href="form-grievance.php" >Grievance Redressal</a></li>
                                   <li><a href="placements.php">Placements</a></li>
                                   <li><a href="research.php" >Research</a></li>
								   <li><a href="anti-ragging.php">Anti Ragging</a></li>
								   
							   </ul>
						   </div>
					   </div> <!-- /.col-md-3 -->
	   
					   <div class="col-md-5 col-sm-6 ">
						   <div class="widget widget-newsletter clearfix mt-5">
							   <h3 class="widget-title">Address</h3>
								<h4>St.Mary's Engineering College</h4>
								<p ><i class="fa fa-map-marker" aria-hidden="true"></i> Near Ramoji Film City, Behind Mount Opera, Deshmukhi(V), Pochampally(M), Yadadri Bhongir(Dt), Greater Hyderabad - 508 284.	</p>
                                <p> <i class="fa fa-phone"></i> <a href="tel:+919912123453"><b> 9912123453 &nbsp; / &nbsp; </b> </a>
                                 <a href="tel:+918499962416"><b>  8499962416 &nbsp;  &nbsp; </b> </a> 
                                 
						   </div>
                       </div> <!-- /.col-md-4 -->

                       <div class="col-md-5">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d30469.43952037143!2d78.72867300000001!3d17.330985!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x766af268c77ffb50!2sSt.Mary&#39;s%20Engineering%20College(Smec)!5e0!3m2!1sen!2sin!4v1593938941235!5m2!1sen!2sin" width="450" height="200" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

                            <div class="">
                                <p class="mt-30"> Follow us on  <a href="https://www.facebook.com/smecbhofficial/" target="_blank">  &nbsp;  <i style="margin-top:10px" class="fa fa-facebook"></i> &nbsp; Facebook </a> </p>
                                   
                            </div>
                       </div>
				   </div> <!-- /.row -->
			   </div>
		   </div> <!-- /.footer-top -->
	   
		   <div class="copyright-wrapper">
			   <div class="footer-bottom col-lg-12">
				   <div class="container">
					 <div class="copyright col-lg-12 text-center">© Copyright <a href="http://smecd.com">St.Mary's Engineeirng College</div>
				   </div>
				 </div>
		   </div> <!-- /.footer-bottom -->
	   </footer>
       </footer>
       <!-- End Footer Section -->


       <script src="assets/js/jquery-2.1.3.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/bootsnav.js"></script>
        <script src="assets/js/jquery.inview.min.js"></script>
        <script src="assets/js/imagesloaded.js"></script>
        <script src="assets/js/masonry.pkgd.min.js"></script>
        <script src="assets/js/jquery.stellar.min.js"></script>
        <script src="assets/js/jquery.countTo.js"></script>
        <script src="assets/magnific-popup/jquery.magnific-popup.js"></script>
        <!-- <script src="assets/js/swiper.jquery.min.js"></script> -->
        <script src="assets/js/ajaxchimp.js"></script>
        <script src="assets/js/ajaxchimp-config.js"></script>
        <script src="assets/js/script.js"></script>

        <script src="assets/js/gallery.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.js"></script>
        <script src="script.js"></script>
		


        <!-- RS5.0 Core JS Files -->
        <script src="assets/revolution/js/jquery.themepunch.tools.min.js"></script>
        <script src="assets/revolution/js/jquery.themepunch.revolution.min.js"></script>

        <!-- probiz slider activator -->
        <script src="assets/js/slider-activator/probiz-slider.js"></script>

        <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems! The following part can be removed on Server for On Demand Loading) -->

        <script type="text/javascript" src="assets/revolution/js/extensions/revolution.extension.video.min.js"></script>
        <script type="text/javascript" src="assets/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
        <script type="text/javascript" src="assets/revolution/js/extensions/revolution.extension.actions.min.js"></script>
        <script type="text/javascript" src="assets/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
        <script type="text/javascript" src="assets/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
        <script type="text/javascript" src="assets/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
        <script type="text/javascript" src="assets/revolution/js/extensions/revolution.extension.migration.min.js"></script>
        <script type="text/javascript" src="assets/revolution/js/extensions/revolution.extension.parallax.min.js"></script>


        </body>
</php>
	
<?php
}