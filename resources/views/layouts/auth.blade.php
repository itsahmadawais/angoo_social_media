<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Angoo') }}</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Toastr -->
    <link href="{{asset('assets/plugins/toastr/build/toastr.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">

  </head>
  <body>

    <section id="login-signup">
      <div class="container h-100">
        <div class="row h-100">
          <div class="col-md-12 text-center my-auto">
            <div class="btn-group" role="group" aria-label="Basic example">
              <button type="button" class="btn btn-lg btn-login" data-bs-toggle="modal" data-bs-target="#login">Login</button>
              <button type="button" class="btn btn-lg btn-signup" data-bs-toggle="modal" data-bs-target="#signup">Signup</button>
            </div>
          </div>
        </div>
      </div>
      <!-- Login Modal -->
      <div class="modal fade" id="login" tabindex="-1" aria-labelledby="login" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content bg-op-null">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Log In</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form id="loginform" action="{{url('/authlogin')}}" method="POST">
                <div class="container">
                  <div class="row">
                    <div class="col-md-8 mx-auto">
                      <div class="mb-3">
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email" aria-describedby="emailHelp" required>
                        <div id="emailHelp" class="form-text d-none">We'll never share your email with anyone else.</div>
                      </div>
                      <div class="mb-3">
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                        <div id="emailHelp" class="form-text d-none">We'll never share your email with anyone else.</div>
                      </div>
                      <div class="mb-3 text-center">
                        <button id="login-btn" type="submit" class="btn btn-lg btn-primary">Log in</button>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
            </div>
        </div>
        </div>
      </div>
  
      <!-- Signup Modal -->
      <div class="modal fade" id="signup" tabindex="-1" aria-labelledby="signup" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content bg-op-null">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Sign Up</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form id="signupform" action="{{url('/authsignup')}}" method="POST">
                <div class="container">
                  <div class="row">
                    <div class="col-md-10 mx-auto">
                      <div class="mb-3">
                          <div class="row">
                            <div class="col">
                              <div class="">
                                <input type="text" class="form-control" id="first_name" name="first_name" placeholder="First Name" required/>
                              </div>
                            </div>
                            <div class="col">
                              <div class="">
                                <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last Name" required/>
                              </div>
                            </div>
                          </div>
                      </div>
                      <div class="mb-3">
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                        <div class="form-text d-none">We'll never share your email with anyone else.</div>
                      </div>
                      <div class="mb-3">
                        <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone" required>
                        <div class="form-text d-none">We'll never share your email with anyone else.</div>
                      </div>
                      <div class="mb-3">
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                        <div class="form-text d-none">We'll never share your email with anyone else.</div>
                      </div>
                      <div class="mb-3">
                        <p class="fw-bold">Date of Birth</p>
                        <div class="row">
                          <div class="col">
                            <select id="date" class="form-control">
                              <option>Date</option>
                              @for($i=1;$i<=31;$i++)
                                <option value="{{$i}}">{{$i}}</option>
                              @endfor
                            </select>
                          </div>
                          <div class="col">
                            <select id="month" class="form-control">
                              <option>Month</option>
                              <option value="1">Jan</option>
                              <option value="2">Feb</option>
                              <option value="3">Mar</option>
                              <option value="4">Apr</option>
                              <option value="5">May</option>
                              <option value="6">Jun</option>
                              <option value="7">Jul</option>
                              <option value="8">Aug</option>
                              <option value="9">Sep</option>
                              <option value="10">Oct</option>
                              <option value="11">Nov</option>
                              <option value="12">Dec</option>
                            </select>
                          </div>
                          <div class="col">
                            <select id="year" class="form-control">
                              <option>Year</option>
                              @for($year=1980; $year <= date('Y'); $year++)
                                <option value="{{$year}}">{{$year}}</option>
                              @endfor
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="mb-3">
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="gender_id" id="male" value="1" checked>
                          <label class="form-check-label" for="male">Male</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="gender_id" id="female" value="2">
                          <label class="form-check-label" for="female">Female</label>
                        </div>
                      </div>
                      <div class="mb-3 text-center">
                        <button id="signup-btn" type="submit" class="btn btn-lg btn-primary">Sign Up</button>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
            </div>
        </div>
      </div>
      
    </section>
    
    
    <footer id="footer">
      <div class="container pt-2 pb-2">
        <div class="row">
          <div class="col-md-8">
            <ul class="footer-menu">
              <li>About</li>
              <li>Contact Us</li>
              <li>Terms</li>
              <li>Privacy</li>
              <li>Careers</li>
              <li>Support</li>
            </ul>
          </div>
          <div class="col-md-4 text-end">
            <p class="">&copy; {{date('Y')." ".env('APP_NAME')}}</p>
          </div>
        </div>
      </div>
    </footer>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Toastr -->
    <script src="{{asset('assets/plugins/toastr/toastr.js')}}"></script>
    <!-- Custom Script -->
    <script src="{{asset('assets/js/script.js')}}"></script>
  </body>
</html>
