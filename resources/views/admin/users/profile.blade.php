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

  <title>Profile| {{config('app.name')}}</title>



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
                <div class="card text-center p-5">
                    <h4 class="text-primary">Hello, {{$user->name}}</h4>
                    <form method="POST" action="{{ route('logout') }}">
                      @csrf
                        <a class="btn btn-warning mt-5" href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();">Logout</a>
                    </form>
                    <hr>
                    {{-- Start change Password --}}
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
                              <div class="col-md-10">
                                  <div class="alert alert-success alert-block">
                                      <h5 class="text-center"><strong>{{ $message }}</strong></h5>
                                  </div>
                              </div>
                          </div>
                        @endif
                        {{-- Error massage --}}
                        @if ($message = Session::get('error'))
                        <div class="row justify-content-center">
                            <div class="col-md-10">
                                <div class="alert alert-danger alert-block">
                                    <h5 class="text-center"><strong>{{ $message }}</strong></h5>
                                </div>
                            </div>
                        </div>
                        @endif
                        <div class="card text-center p-5">
                            <h3 class="text-center text-danger mb-5">Change Your Password</h3>
                              <form class="border border-primary p-5" method="POST" action="{{route('user.change_password', $user->id)}}">
                                @csrf
                                  <div class="mb-3">
                                    <input type="password" name="old_password" class="form-control" id="exampleInputPassword1" placeholder="Old Password" required>
                                  </div>
                                  <div class="mb-3">
                                      <input type="password" name="new_password" class="form-control" id="exampleInputPassword1" placeholder="New Password" required>
                                  </div>
                                  <div class="mb-3">
                                      <input type="password" name="confirm_password" class="form-control" id="exampleInputPassword1" placeholder="Confirm Password" required>
                                  </div>
                                  <button class="btn btn-warning" type="submit">Change Password</button>
                              </form>
                          </div>
                      </div>
                    </div>
                    {{-- End password --}}
                    @if ($user->role->id == 3)    
                      <a href="" class="text-primary mt-5">See Your Result</a>
                      <a href="" class="text-info mt-2">See Your Attendance</a> 
                    @elseif($user->role->id == 2)
                      <a href="" class="text-primary mt-5">See Your Subjects</a>
                    @else
                    @endif
                    <a href="{{route('user.update-profile', $user->id)}}" class="text-danger mt-2">Do You Want to Update Your Information?</a>
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