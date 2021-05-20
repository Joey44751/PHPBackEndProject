@extends('layout.theme')
@section('content')
<!-- page title -->
<div class="container mt-3">
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <h1>CONTACT</h1>
        </div>
        <div class="col-md-1"></div>
    </div>
</div>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8 balk">
   
            <div class="input-group input-group-sm mt-5 p-3 mb-3">
            <!-- User email adress -->
                    <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Email</span>
                    </div>
                    <input type="email" #email ng-model="ctcEmail" style="min-height:50px" class="form-control" name="ctcEmail" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
            </div>

            <!-- short description -->
            <div class="input-group mb-5 p-3">
                <div class="input-group-prepend">
                  <span class="input-group-text">Bericht</span>
                </div>
                <textarea class="form-control" #bericht style="min-height:250px"    ng-model="ctcDescr" name="ctcDescr" aria-label="With textarea"></textarea>
            </div>

            <!-- send button -->
            <div class="container mt-4">
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <div class="btn-group mt-0 mb-4 d-flex justify-content-right">
                            <a (click)="sendEmail(email.value,bericht.value)" type="button" class="btn btn-primary"> <span><i class="bi bi-reply-fill"></i></span> Bericht versturen</a>
                        </div>
                    </div>
                    <div class="col-md-2"></div>
                </div>
            </div>
            
        </div>
        <div class="col-md-2"></div>
</div>

@endsection