<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Adward</title>



  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="{{asset('front-end/css/bootstrap.css')}}" />
  <!-- progress barstle -->
  <link rel="stylesheet" href="{{asset('front-end/css/css-circular-prog-bar.css')}}">
  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
  <!-- font wesome stylesheet -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
  <!-- Custom styles for this template -->
  <link href="{{asset('front-end/css/style.css')}}" rel="stylesheet" />
  <!-- responsive style -->
  <link href="{{asset('front-end/css/responsive.css')}}" rel="stylesheet" />




  <link rel="stylesheet" href="{{asset('front-end/css/css-circular-prog-bar.css')}}">


</head>

<body>
  <div class="top_container sub_pages">
    <!-- header section strats -->
    @include('layouts.navber.front.top-navber')
  </div>
  <!-- end header section -->


  <!-- teacher section -->
  <section class="teacher_section layout_padding-bottom">
    <div class="container">
      <h2 class="main-heading ">
        Our Teachers
      </h2>
      <p class="text-center">
        Ipsum available, but the majority h
      </p>
      <div class="teacher_container layout_padding2">
        <div class="card-deck">
          <div class="card">
            <img class="card-img-top" src="{{asset('front-end/images/teacher-1.jpg')}}" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Den Mark</h5>
            </div>
          </div>
          <div class="card">
            <img class="card-img-top" src="{{asset('front-end/images/teacher-2.jpg')}}" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Leena jorj</h5>
            </div>

          </div>
          <div class="card">
            <img class="card-img-top" src="{{asset('front-end/images/teacher-3.jpg')}}" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Magi Den</h5>

            </div>

          </div>

          <div class="card">
            <img class="card-img-top" src="{{asset('front-end/images/teacher-4.jpg')}}" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">jonson mark</h5>

            </div>

          </div>
        </div>
      </div>


      <div class="d-flex justify-content-center mt-3">
        <a href="" class="call_to-btn  ">

          <span>
            See More
          </span>
          <img src="{{asset('front-end/images/right-arrow.png')}}" alt="">
        </a>
      </div>
    </div>
  </section>

  <!-- teacher section -->


  <!-- footer section -->
  @include('layouts.navber.front.footer')
  <!-- footer section -->

  <script type="text/javascript" src="{{asset('front-end/js/jquery-3.4.1.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('front-end/js/bootstrap.js')}}"></script>
  <!-- progreesbar script -->

  </script>
  <script>
    // This example adds a marker to indicate the position of Bondi Beach in Sydney,
    // Australia.
    function initMap() {
      var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 11,
        center: {
          lat: 40.645037,
          lng: -73.880224
        },
      });

      var image = 'images/maps-and-flags.png';
      var beachMarker = new google.maps.Marker({
        position: {
          lat: 40.645037,
          lng: -73.880224
        },
        map: map,
        icon: image
      });
    }
  </script>
  <!-- google map js -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8eaHt9Dh5H57Zh0xVTqxVdBFCvFMqFjQ&callback=initMap">
  </script>
  <!-- end google map js -->
</body>

</html>