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

  <title>Update Profile| {{config('app.name')}}</title>



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


  <!-- vehicle section -->
  <section class="vehicle_section layout_padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
              {{-- Any error --}}
              <div class="row justify-content-center">
                <div class="col-md-10">
                  @if ($errors->any())
                      <div class="alert alert-danger">
                          <ul>
                              @foreach ($errors->all() as $error)
                                  <li>{{ $error }}</li>
                              @endforeach
                          </ul>
                      </div>
                  @endif
                </div>
              </div>
              {{-- Success massage --}}
              @if ($message = Session::get('success'))
                <div class="row justify-content-center">
                    <div class="col-md-5">
                        <div class="alert alert-success alert-block">
                            <h5 class="text-center"><strong>{{ $message }}</strong></h5>
                        </div>
                    </div>
                </div>
              @endif
              {{-- Error massage --}}
              @if ($message = Session::get('error'))
              <div class="row justify-content-center">
                  <div class="col-md-5">
                      <div class="alert alert-danger alert-block">
                          <h5 class="text-center"><strong>{{ $message }}</strong></h5>
                      </div>
                  </div>
              </div>
              @endif
              <div class="card text-center p-5">
                  <h3 class="text-center text-danger mb-5">Update Your Personal Info</h3>
                    <form class="border border-primary p-5" method="POST" action="{{route('user.update-profile_details', $user->id)}}">
                      @csrf
                      <div class="mb-3">
                        <input type="name" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$user->name}}" required>
                      </div>
                        <div class="mb-3">
                          <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$user->email}}" required>
                        </div>
                        <div class="mb-3">
                          <input type="date" name="date_of_birth" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Date of Birth" value="{{$user->date_of_birth}}" required>
                        </div>
                        <button class="btn btn-danger" type="submit">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
  </section>


  <!-- vehicle section -->


  <!-- footer section -->
  <@include('layouts.navber.front.footer')
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