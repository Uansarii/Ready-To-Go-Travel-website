<html>

<head>
   @include('layouts.links')
   <link rel="stylesheet" href="{{asset('assets/css/pkg.css')}}">

</head>

<body>
    <!-- ======= Header ======= -->
    @include('layouts.header')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center justify-content-center" style="background-image: url(assets/img/packageDeet/fairymeadows.jpg);">
        <div class="container" data-aos="fade-up">

            <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
                <div class="col-xl-6 col-lg-8">
                    <h1>Fairy Meadows 5 Days – 4 Nights Tour Package</h1>

                </div>
            </div>

        </div>
    </section><!-- End Hero -->
    <!-- Begin content -->
    <main id="main">
        <div id="page_content_wrapper" class="hasbg withtopbar ">
            <div class="inner">

                <!-- Begin main content -->
                <div class="inner_wrapper">


                    <div class="sidebar_content ">

                        <div class="single_tour_attribute_wrapper themeborder sidebar">
                            <div class="one_fourth">
                                <div><img src="assets/img/packageDeet/days.png" width="50px" height="50px"></div>
                                <div class="tour_attribute_content">
                                    5&nbsp;days </div>
                            </div>

                            <div class="one_fourth">
                                <div><img src="assets/img/packageDeet/age-group.png" width="50px" height="50px"></div>
                                <div class="tour_attribute_content">
                                    Age 5+ </div>
                            </div>

                            <div class="one_fourth">
                                <div><img src="assets/img/packageDeet/schedule.png" width="50px" height="50px"></div>
                                <div class="tour_attribute_content">
                                    25 Dec to 29 Dec </div>
                            </div>

                            <div class="one_fourth last">
                                <div><img src="assets/img/packageDeet/available.png" width="50px" height="50px"></div>
                                <div class="tour_attribute_content">
                                    Availability 10 </div>
                            </div>

                        </div><br class="clear" />
                        <div class="single_tour_content">

                            <h4>Day-0</h4>
                            <p style="margin-left: 100px;">Arrival to Islamabad </p>
                            <h4>Day-1</h4>
                            <p style="margin-left: 100px;">Islamabad to Naran</p>
                            <h4>Day-2</h4>
                            <p style="margin-left: 100px;">Naran to Raikot Bridge and then to Fairy Meadows</p>
                            <h4>Day-3</h4>
                            <p style="margin-left: 100px;">Fairy Meadows / Nanga Parbat Base Camp</p>
                            <h4>Day-4</h4>
                            <p style="margin-left: 100px;">Fairy Meadows to Naran/Shogran</p>
                            <h4>Day-5</h4>
                            <p style="margin-left: 100px;">Naran/Shogran to Islamabad</p>
                            <p>&nbsp;</p>

                            <ul class="single_tour_departure_wrapper themeborder">
                                <li>
                                    <div class="single_tour_departure_title">Departure</div>
                                    <div class="single_tour_departure_content">Islamabad</div>
                                </li>

                                <li>
                                    <div class="single_tour_departure_title">Departure Time</div>
                                    <div class="single_tour_departure_content">05:00 AM</div>
                                </li>

                                <li>
                                    <div class="single_tour_departure_title">Return Time</div>
                                    <div class="single_tour_departure_content">06:00 PM</div>
                                </li>

                                <li>
                                    <div class="single_tour_departure_title">Included</div>
                                    <div class="single_tour_departure_content">
                                        <div class="one_half ">
                                            <span class="ti-check"></span>A-grade air conditioned transport
                                        </div>
                                        <div class="one_half last">
                                            <span class="ti-check"></span>A-class accommodation (2 persons sharing)
                                        </div>
                                        <div class="one_half ">
                                            <span class="ti-check"></span>Jeep drives, tolls, and tickets for attractions (if any)
                                        </div>
                                        <div class="one_half last">
                                            <span class="ti-check"></span>Breakfast, midday meal, and dinner
                                        </div>
                                        <div class="one_half ">
                                            <span class="ti-check"></span>Munchies, cookies
                                        </div>
                                        <div class="one_half last">
                                            <span class="ti-check"></span> Beverages, and mineral water
                                        </div>
                                        <div class="one_half ">
                                            <span class="ti-check"></span>Fuel expenses
                                        </div>
                                        <div class="one_half last">
                                            <span class="ti-check"></span>Basic first aid kit
                                        </div>
                                        <div class="one_half ">
                                            <span class="ti-check"></span>Tour supervisor
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="single_tour_departure_title">Not Included</div>
                                    <div class="single_tour_departure_content">
                                        <div class="one_half ">
                                            <span class="ti-close"></span>Horse Riding
                                        </div>
                                        <div class="one_half last">
                                            <span class="ti-close"></span>Personal shopping
                                        </div>
                                        <div class="one_half ">
                                            <span class="ti-close"></span>Sporting activities and rides
                                        </div>
                                        <div class="one_half last">
                                            <span class="ti-close"></span>Anything not mentioned in “Included”
                                        </div>
                                    </div>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ======= Cta Section ======= -->
            <br><br>
            <div class="container" data-aos="zoom-in">
                <div class="text-center">
                    <h3>Do not let go of a chance to have a wonderful holiday. </h3>
                    <button style="background-color:lightgreen; width: 200px; border-radius:20px; padding: 10px;"> <a href="{{route('bookings', ['place'=>'Fairy Meadows','price'=>23000,'d_date'=>'2022-12-17','r_date'=>'2022-12-22','is_customized'=>false])}}">Book Now</a></button>
                </div>

            </div>

    </main>
    <!-- ======= Footer ======= -->
   
    @include('layouts.footer')
    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</body>


</html>
