<!DOCTYPE html>
<html lang="en">

<head>
    
    <!-- Vendor CSS Files -->
    @include('layouts.links')
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.bundle.min.js"></script>
    


    <!--
    <style type="text/css">
        body {
            margin-top: 20px;
            color: #6c7293;
        }
        
    </style>
-->
</head>

<body>

    <!-- ======= Header ======= -->
    @include('layouts.adminheader')

    <br><br>
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center justify-content-center" style="background-image: url(assets/img/faqimg.jpg);">
        <div class="container" data-aos="fade-up">

            <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
                <div class="col-xl-6 col-lg-8">
                    <h1>Here is what your customers think about you.</h1><br>
                    <br>
                    <form action="#">

                    </form>
                </div>
            </div>

        </div>
    </section><!-- End Hero -->
    <br><br><br>
    <main id="main">
        
            <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">
                <div class="mt-6 bg-white shadow-sm rounded-lg divide-y">
                    <div class="p-6 flex space-x-2" style="border: 3px solid black; padding: 20px; border-radius: 5px; background-color: #c3c7c5;" >
                        
                        @foreach ($reviews as $rv)
                            <div class="flex-1" style="border: 2px solid #3b5733; padding: 20px; border-radius: 10px; background-color: white;">
                                <div class="flex justify-between items-center">
                                    <div>
                                        <span class="text-gray-800"><i class="bi bi-chat-dots">&nbsp;&nbsp;</i>{{$rv->name}}</span>
                                        <small class="ml-2 text-sm text-gray-600">{{$rv->date}}</small>
                                    </div>
                                </div>
                                <p class="mt-4 text-lg text-gray-900">{{$rv->description}}</p>
                                <button class="btn btn-primary" style="background-color:red;border-color: red;"><a href="{{route('destroy_review',['id'=>$rv->id])}}">Delete</a></button>
                            </div>
                            <br>
                        @endforeach
                    </div>
                </div>
            </div>
        


    </main>

    <br><br>
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

</html>
