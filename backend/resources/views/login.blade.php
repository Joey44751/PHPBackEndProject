@extends('layout.layout')
@section('content')
<!DOCTYPE html>
<html>

<head>
  <title>The Parent App</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700,800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
  <!-- Top logo -->
  <div class="container">
    <div class="row">
      <div class="col-md-2"></div>
      <div class="col-md-8 mt-5 text-center">
        <img src="../../assets/img/tpalogo.png" class="homeLogo" alt="">
      </div>
      <div class="col-md-2"></div>
    </div>
  </div>

  <!-- Login field -->
  <div class="container mt-5">
    <div class="col-sm-8 ml-auto mr-auto">
      <!-- Sign in / sign up tab -->
      <ul class="nav nav-pills nav-fill mb-1" id="pills-tab" role="tablist">
        <li class="nav-item"> <a class="nav-link active" id="pills-signin-tab" data-toggle="pill" href="#pills-signin"
            role="tab" aria-controls="pills-signin" aria-selected="true">Sign In</a> </li>
        <li class="nav-item"> <a class="nav-link" id="pills-signup-tab" data-toggle="pill" href="#pills-signup"
            role="tab" aria-controls="pills-signup" aria-selected="false">Sign Up</a> </li>
      </ul>
      <!-- Sign in form -->
      <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-signin" role="tabpanel" aria-labelledby="pills-signin-tab">
          <div class="col-sm-12 border border shadow rounded pt-2">
            <form id="singninFrom" method="POST" action="{{ route('login')}}">
              @csrf
              <div class="form-group">
                <label class="font-weight-bold">Email <span class="text-danger">*</span></label>
                <input type="email" #emailLogin name="email" id="email" class="form-control"
                  placeholder="Enter valid email" required>
              </div>
              <div class="form-group">
                <label class="font-weight-bold">Password <span class="text-danger">*</span></label>
                <input type="password" #passwordLogin name="password" id="password" class="form-control"
                  placeholder="***********" required>
              </div>
              <!-- Forgot password  -->
              <div class="form-group">
                <div class="row">
                  <div class="col">
                    <label><input type="checkbox" name="condition" id="condition"> Remember me</label>
                  </div>
                  <div class="col text-right"> <a href="javascript:;" data-toggle="modal"
                      data-target="#forgotPass">Forgot Password?</a> </div>
                </div>
              </div>
              <div class="form-group">
                <input type="submit"  name="submit"
                  value="Sign In" class="btn btn-block btn-primary">
              </div>
              @foreach($errors->all() as $error)
                  <li>{{$error}}</li>  
              @endforeach   
            </form>
              <!-- Continue with google button -->
              <div class="container mb-2">
                <div class="row mt-5">
                  <div class="col-md-2"></div>
                  <div class="col-md-8">
                    <div class="formGroup text-center">
<!--                       <button type="button" class="btn googleBtn">
                        <i class="fab fa-google-plus-g"></i>
                        Continue with Google
                      </button> -->
                    </div>
                  </div>
                  <div class="col-md-2"></div>
                </div>
              </div>
          </div>
        </div>
        <!-- Sign up form tab -->
        <div class="tab-pane fade" id="pills-signup" role="tabpanel" aria-labelledby="pills-signup-tab">
          <div class="col-sm-12 border border shadow rounded pt-2">
            <form id="singnupFrom" method='POST' action="{{ route('register')}}">
            @csrf
              <!-- Choose username and set phone number -->
              <div class="form-group">
                <label class="font-weight-bold">Email <span class="text-danger">*</span></label>
                <input type="email" #registerEmail name="email" id="signupemail" class="form-control"
                  placeholder="Enter valid email" required>
              </div>
               <div class="form-group">
                <label class="font-weight-bold">Name <span class="text-danger">*</span></label>
                <input type="text" name="name" id="name" class="form-control"
                  placeholder="Enter your name" required>
                <div class="text-danger"></div>
              </div> 
<!--               <div class="form-group">
                <label class="font-weight-bold">Phone #</label>
                <input type="text" name="signupphone" id="signupphone" class="form-control"
                  placeholder="(000)-(0000000)">
              </div> -->
              <!-- Set new password -->
              <div class="form-group">
                <label class="font-weight-bold">Password <span class="text-danger">*</span></label>
                <input type="password" #registerPass name="password" id="signuppassword" class="form-control"
                  placeholder="***********" pattern="^\S{8,}$"
                  onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Must have at least 8 characters' : ''); if(this.checkValidity()) form.signupcpassword.pattern = this.value;"
                  required>
              </div>
              <div class="form-group">
                <label class="font-weight-bold">Confirm Password <span class="text-danger">*</span></label>
                <input type="password" #registerPass2 name="password_confirmation" id="signupcpassword" class="form-control"
                  pattern="^\S{6,}$"
                  onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Please enter the same Password as above' : '');"
                  placeholder="***********" required>
              </div>
              <!-- Agree with terms and conditions -->
              <div class="form-group">
                <label><input type="checkbox" name="signupcondition" id="signupcondition" required> I agree with the <a
                    href="javascript:;">Terms &amp; Conditions</a> for Registration.</label>
              </div>
              <div class="form-group">
                <input type="submit" 
                  name="signupsubmit" value="Sign Up" class="btn btn-block btn-primary">
              </div>
              @foreach($errors->all() as $error)
                  <li>{{$error}}</li>  
              @endforeach   
            </form>
              <!-- Continue with google button -->
              <div class="container mb-2">
                <div class="row mt-5">
                  <div class="col-md-2"></div>
                  <div class="col-md-8">
                    <div class="formGroup text-center">
<!--                       <button type="button" class="btn googleBtn">
                        <i class="fab fa-google-plus-g"></i>
                        Continue with Google
                      </button> -->
                    </div>
                  </div>
                  <div class="col-md-2"></div>
                </div>
              </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="forgotPass" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <form id="forgotpassForm" method="POST" action="{{route('password.email')}}" >
        @csrf
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Forgot Password</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span
                  aria-hidden="true">&times;</span> </button>
            </div>
            <div class="modal-body">
              <div class="form-group">
                <label>Email <span class="text-danger">*</span></label>
                <input type="email" #forgotEmail name="email" id="forgotemail" class="form-control"
                  placeholder="Enter your valid email..." required>
              </div>
              <div class="form-group">
              </div>
            </div>
            <div class="modal-footer">
              <button type="submit" name="forgotPass" class="btn btn-primary"><i class="fa fa-envelope"></i> Send Request</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div> 


  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
</body>

</html>
@endsection