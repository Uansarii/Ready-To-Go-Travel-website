<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
   
    @include('layouts.links')
    
</head>

<body>
    <!-- ======= Header ======= -->
    @include('layouts.adminheader')
    <!-- Table -->
    <!-- ============================================================== -->
    <br><br><br>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <div class="d-md-flex">
                        <div>
                            <h4 class="card-title">Table for the Admin</h4>
                            <h5 class="card-subtitle" style="color:#3b5733">Overview of Customer Reservations.</h5>
                        </div>
                    </div>
                    <!-- title -->
                </div>
                <div class="table-responsive">
                    <table class="table v-middle">
                        <thead>
                            <tr class="bg-light">
                                <th class="border-top-0">CNIC</th>
                                <th class="border-top-0">First Name</th>
                                <th class="border-top-0">Last Name</th>
                                <th class="border-top-0">Phone Number</th>
                                <th class="border-top-0">Email</th>
                                <th class="border-top-0">Destination</th>
                                <th class="border-top-0">Date</th>
                                <th class="border-top-0">Date</th>
                                <th class="border-top-0">Price</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($trips as $trip)
                                
                           
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="">
                                            <h4 class="m-b-0 font-16">{{$trip->cnic}}</h4>
                                        </div>
                                    </div>
                                </td>
                                <td>{{$trip->firstname}}</td>
                                <td>{{$trip->lastname}}</td>
                                <td>{{$trip->phoneno}}</td>
                                <td>{{$trip->email}}</td>
                                <td>{{$trip->dest}}</td>
                                <td>{{$trip->d_date}}</td>
                                <td>{{$trip->r_date}}</td>
                                <td>
                                    <h5 class="m-b-0">PKR {{$trip->price}}</h5>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <!-- ======= Footer ======= -->
    @include('layouts.footer')

    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
</body>

</html>
