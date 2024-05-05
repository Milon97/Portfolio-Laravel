<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="{{asset('public/frontEnd/assets/css/all.min.css')}}" />
    <link rel="stylesheet" href="{{asset('public/frontEnd/assets/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('public/frontEnd/assets/css/animate.min.css')}}" />
    
    @stack('css')
    <link rel="stylesheet" href="{{asset('public/frontEnd/assets/css/mobile-menu.css')}}" />
    <!-- toastr css -->
    <link rel="stylesheet" href="{{asset('public/backEnd/')}}/assets/css/toastr.min.css" />

    <link rel="stylesheet" href="{{asset('public/frontEnd/assets/css/lightgallery.css')}}" />
    <link rel="stylesheet" href="{{asset('public/frontEnd/assets/css/wsit-menu.css')}}" />
    <link rel="stylesheet" href="{{asset('public/frontEnd/assets/css/style.css')}}" />
    <link rel="stylesheet" href="{{asset('public/frontEnd/assets/css/responsive.css')}}" />
    <title>{{$generalsetting->name}}</title>
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset($generalsetting->favicon)}}" alt=" Favicon" />
    
    <meta name="author" content="" />
</head>
<body>

    <header class="main-header" id="navbar_top">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-sm-2">
                    <div class="logo wow zoomIn">
                        <a href="{{url('/')}}"><img src="{{asset($generalsetting->white_logo)}}" alt=""></a>
                    </div>
                </div>
                <!-- col-2 end -->
                <div class="col-lg-10 col-sm-10">
                    <div class="main-menu wow zoomIn">
                        <ul>
                            <li><a href="{{url('/')}}" class="active">Home</a></li>
                            <li><a href="#about">About</a></li>
                            <li><a href="#portfolio">Portfolio</a></li>
                            <li><a href="#blog">Blog</a></li>
                            <li><a href="#contact">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <!-- col-10 end  -->
            </div>
        </div>
    </header>
    <!-- hader end -->

   <!-- ====== -->
   @yield('content')

 
<script src="{{asset('public/frontEnd')}}/assets/js/jquery-3.6.0.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

<script src="{{asset('public/frontEnd')}}/assets/js/bootstrap.min.js"></script>
<script src="{{asset('public/frontEnd')}}/assets/js/typer.js"></script>
<script src="{{asset('public/frontEnd')}}/assets/js/jquery.barfiller.js"></script>
<script src="{{asset('public/frontEnd')}}/assets/js/jquery.sticky.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
<script src="{{asset('public/frontEnd')}}/assets/js/jquery.counterup.min.js"></script>

<script src="{{asset('public/frontEnd')}}/assets/js/imagesloaded.pkgd.min.js"></script>

<script src="{{asset('public/frontEnd/')}}/assets/js/lightgallery.min.js"></script>

<script src="{{asset('public/frontEnd')}}/assets/js/isotope.pkgd.min.js"></script>
<script src="{{asset('public/frontEnd')}}/assets/js/imagesloaded.pkgd.min.js"></script>

<script src="{{asset('public/frontEnd')}}/assets/js/wow.min.js"></script>
<script src="{{asset('public/frontEnd')}}/assets/js/script.js"></script>


<script>
  new WOW().init();
</script>

<script src="{{asset('public/backEnd/')}}/assets/js/toastr.min.js"></script>
{!! Toastr::message() !!} 
<script>
    jQuery(document).ready(function($){

        $('.counter').counterUp({
            delay: 10,
            time: 1000
        });
        // counter up end

        $('.skillsbar-1').barfiller();
        $('.skillsbar-2').barfiller();
        $('.skillsbar-3').barfiller();
        $('.skillsbar-4').barfiller();
        $('.skillsbar-5').barfiller();
        $('.skillsbar-6').barfiller();
        // skills bar end

        $("#sticker").sticky({topSpacing:0});
        // sidebar sticky
    });
</script>

<script>
        $('#portfolio').imagesLoaded(function () {
        var $grid = $('.grid').isotope({
            // options
        });
        $('.portfolio-isotop-btn').on('click', 'button', function () {
             $('button').removeClass("active");   
             $(this).addClass("active");   
            var filterValue = $(this).attr('data-filter');
            $grid.isotope({
                filter: filterValue
            });
        });
        var $grid = $('.portfolio-inner').isotope({
            // set itemSelector so .grid-sizer is not used in layout
            itemSelector: '.single-portfolio',
            percentPosition: true,
            masonry: {
                // use element for option
                columnWidth: '.single-portfolio'
            }
        })
    });
    // portfolio js end
    $('#lightgallery').lightGallery(); 
    </script>

</body>

</html>