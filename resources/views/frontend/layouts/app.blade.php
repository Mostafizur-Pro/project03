<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>BAITS | @yield('title')</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="BAITS, BAITSBD, BANGLADESH ASSOCIATE OF IT SOLUTION, Dahua, UNIQUE VISION, HIKVISION, BOSCH, CCTV Camera Price in Bangladesh, CCTV Camera Company in Bangladesh, BANGLADESH CCTV COMPANY, CCTV Camera Impoter in Bangladesh,
                    , AVETEC, SAMSUNG, SUNCHEN, CCTV, CCTV Surveillance Systems, Fire Detection and Alarm Systems, Fire saftey and Fire Protection Solution,Access Control and Time Monitoring, Burglar Alarm System, Parking Management System, Web & Software, Education Management System, Archway Gate, Baggage Scanner, Handheld Metal Detector, Car GPS Tracking, IP Base Intercom & PABX System, FACE DETECTOR, IT SOLUTION, IT, INFORMATION TECHONOLOGY, CAMERA," name="keywords">
    <meta content="Bangladesh Associate of IT Solution (BAITS) is a leading Information Technology delivery organization. Our services include information technology and professional technology and consulting services for our national clients. We have successfully delivered outstanding products and results to our commercial clients since 2006." name="description">

    <!-- Favicons -->
    <link href="{{asset('public/frontend/img/favicon.png')}}" rel="icon">
    <link href="{{asset('public/frontend/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link href="{{asset('public/frontend/lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="{{asset('public/frontend/lib/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/lib/ionicons/css/ionicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/lib/lightbox/css/lightbox.min.css')}}" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="{{asset('public/frontend/css/style.css')}}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet"/>
    

    
    @yield('front_css')

</head>

<body>

<!--==========================
  Header
============================-->
<!-- #header -->

@include('frontend.layouts.include.navbar')

<!--==========================
  Intro Section
============================-->

@yield('frontcontant')

@include('frontend.layouts.include.client')


@include('frontend.layouts.include.testemonial')
@include('frontend.layouts.include.partner')
@include('frontend.layouts.include.contact')

        <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5d0f2a0a53d10a56bd7b6b03/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->


<!--==========================
  Footer
============================-->
<footer id="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-md-6 footer-info">
                    <h3>BAITS</h3>
                    <p>BAITS is a leading Information Technology delivery organization. Our services include information technology and consulting services for our national clients. We have successfully delivered outstanding products and results to our commercial clients since 2006. </p>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><i class="ion-ios-arrow-right"></i> <a href="{{URL::to('/')}}">Home</a></li>
                        <li><i class="ion-ios-arrow-right"></i> <a href="{{route('about')}}">About us</a></li>
                        <li><i class="ion-ios-arrow-right"></i> <a href="{{route('product')}}">Product</a></li>
                        <li><i class="ion-ios-arrow-right"></i> <a href="#contact">Contact</a></li>
                        <li><i class="ion-ios-arrow-right"></i> <a href="{{route('faq')}}#">FAQ</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 footer-contact">
                    <h4>Contact Us</h4>
                    <p style="font-size: 13px;">
                        <strong>Head Office:</strong>2A/12 Pallabi, Dhaka-1216<br>
                        <strong>Corporate Office:</strong>Flat # 4S, House # 43, Road # 3, Sector # 3, Uttara, Dhaka - 1230<br>
                        <strong>USA Office:</strong>745 2nd Avenue 40 Street NY-10016<br>
                        <strong>Factory:</strong>Sector# 1/C, Road # 3,House # 12, Kalwalpara,Mirpur-1, Dhaka-1216<br>
                        <strong>Phone:</strong> +88 01923 24 07 00<br>
                        <strong>Email:</strong> info@baitsbd.com<br>
                        <strong>Email:</strong> info.baits@gmail.com<br>
                    </p>

                    <div class="social-links">
                        <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                        <a href="https://www.facebook.com/baitsbd/" class="facebook"><i class="fa fa-facebook"></i></a>
                        <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                        <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
                        <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
                    </div>

                </div>

                <div class="col-lg-3 col-md-6 footer-newsletter">

                    <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fbaitsbd%2F&tabs=timeline&width=340&height=250&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=2534255743266633" width="320" height="250" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>

                </div>

            </div>
        </div>
    </div>



    <div class="container">
        <div class="copyright">
            &copy; Copyright <strong>BAITS</strong>. All Rights Reserved
        </div>
        <div class="credits">
            Designed by <a href="{{URL::to('/')}}">BAITS</a>
        </div>
    </div>
</footer><!-- #footer -->

<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
<!-- Uncomment below i you want to use a preloader -->
<!-- <div id="preloader"></div> -->

<!-- JavaScript Libraries -->
<script src="{{asset('public/frontend/lib/jquery/jquery.min.js')}}"></script>
<script src="{{asset('public/frontend/lib/jquery/jquery-migrate.min.js')}}"></script>
<script src="{{asset('public/frontend/lib/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('public/frontend/lib/easing/easing.min.js')}}"></script>
<script src="{{asset('public/frontend/lib/superfish/hoverIntent.js')}}"></script>
<script src="{{asset('public/frontend/lib/superfish/superfish.min.js')}}"></script>
<script src="{{asset('public/frontend/lib/wow/wow.min.js')}}"></script>
<script src="{{asset('public/frontend/lib/waypoints/waypoints.min.js')}}"></script>
<script src="{{asset('public/frontend/lib/counterup/counterup.min.js')}}"></script>
<script src="{{asset('public/frontend/lib/owlcarousel/owl.carousel.min.js')}}"></script>
<script src="{{asset('public/frontend/lib/isotope/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('public/frontend/lib/lightbox/js/lightbox.min.js')}}"></script>
<script src="{{asset('public/frontend/lib/touchSwipe/jquery.touchSwipe.min.js')}}"></script>

<!-- Template Main Javascript File -->
<script src="{{asset('public/frontend/js/main.js')}}"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>


<script>
        @if(Session::has('messege'))
    var type="{{Session::get('alert-type','info')}}"
    switch(type){
        case 'info':
            toastr.info("{{ Session::get('messege') }}");
            break;
        case 'success':
            toastr.success("{{ Session::get('messege') }}");
            break;
        case 'warning':
            toastr.warning("{{ Session::get('messege') }}");
            break;
        case 'error':
            toastr.error("{{ Session::get('messege') }}");
            break;
    }
    @endif
</script>

<script>
    $(document).ready(function(){
       $("#file").validate({
    rules: {
        fileupload: {
            required: true, 
            accept: "application/pdf,application/docx,application/doc"
        }
    } 
    });
</script>

</body>
</html>
