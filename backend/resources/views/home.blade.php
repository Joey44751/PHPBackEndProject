@extends('layout.theme')
<link rel="stylesheet" href="assets/css/home.css">
@section('content')
<!-- Input locations to search by -->
<div class="container">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <!-- Search by city -->
            <div class="input-group input-group-sm mt-3 mb-1">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-m">Gemeente</span>
                </div>
                <input type="text" class="form-control" name="hmCity" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
            </div>
            <div class="btn-group mt-0 mb-4">
                <a href="#" class="btn btn-primary active" aria-current="page">toevoegen</a>
                <a class="btn btn-primary" onclick="Geolocation">zoek</a>
            </div>
            <!-- Use current location -->
            <div class="d-flex">

                <p>Gebruik huidige locatie: </p>

                <div class="ml-3 mb-3">
                    <select class="form-select" name="hmDist" aria-label="Default select example">
                        <option selected>Afstand van huidige locatie tot</option>
                        <option value="1">straal van 5km</option>
                        <option value="2">straal van 10km</option>
                        <option value="3">straal van 15km</option>
                        <option value="4">straal van 20km</option>
                        <option value="5">straal van 30km</option>
                        <option value="6">straal van 40km</option>
                        <option value="7">straal van 50km</option>
                        <option value="8">>50km</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="col-md-2"></div>
    </div>
</div>

<!-- Google maps witch search results / to be implemented -->
<div class="container">
    <div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <div class=" mt-2 mb-3" style="width: 100%; height: 500px;">
            {!! Mapper::render() !!}
        </div>
    </div>
    <div class="col-md-2"></div>
</div>
</div>

<div class="container mt-5">

    <!-- Filter for the search results -->
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div>

                <p class="mr-5 mb-3">Filteren: </p>
                <!--age 0 - 3-->
                <input type="checkbox" class="radio_age" value="" name="hmbaby" id="age1">
                <label class="label_age" for="age1"> <img src="assets/img/age03.png" class="radioimg"> </label>

                <!--age 3 - 6-->
                <input type="checkbox" class="radio_age" value="" name="hmTodler" id="age2">
                <label class="label_age" for="age2"> <img src="assets/img/age36.png" class="radioimg"> </label>

                <!--age 6 - 9-->
                <input type="checkbox" class="radio_age" value="" name="hmChild" id="age3">
                <label class="label_age" for="age3"> <img src="assets/img/age69.png" class="radioimg"> </label>

                <!--age 9 - 12-->
                <input type="checkbox" class="radio_age" value="" name="hmTeen" id="age4">
                <label class="label_age" for="age4"> <img src="assets/img/age912.png" class="radioimg"> </label>

                <!--small-->
                <input type="checkbox" class="radio_item" value="" name="hmSmall" id="radio1">
                <label class="label_item" for="radio1"> <img src="assets/img/sizeS.png" class="radioimg"> </label>

                <!--medium-->
                <input type="checkbox" class="radio_item" value="" name="hmMedium" id="radio2">
                <label class="label_item" for="radio2"> <img src="assets/img/sizeM.png" class="radioimg"> </label>

                <!--large-->
                <input type="checkbox" class="radio_item" value="" name="hmLarge" id="radio3">
                <label class="label_item" for="radio3"> <img src="assets/img/sizeL.png" class="radioimg"> </label>

                <!--extra large-->
                <input type="checkbox" class="radio_item" value="" name="hmXl"id="radio4">
                <label class="label_item" for="radio4"> <img src="assets/img/sizeXl.png" class="radioimg"> </label>

                <!--Free-->
                <input type="checkbox" class="radio_price" value="" name="hmFree" id="price1">
                <label class="label_price" for="price1"> <img src="assets/img/free.png" class="radioimg"> </label>

                <!--cheap-->
                <input type="checkbox" class="radio_price" value="" name="hmCheap" id="price2">
                <label class="label_price" for="price2"> <img src="assets/img/priceCheap.png" class="radioimg"> </label>

                <!--normal-->
                <input type="checkbox" class="radio_price" value="" name="hmNormal" id="price3">
                <label class="label_price" for="price3"> <img src="assets/img/priceNormal.png" class="radioimg">
                </label>

                <!--expensive-->
                <input type="checkbox" class="radio_price" value="" name="hmExpensive" id="price4">
                <label class="label_price" for="price4"> <img src="assets/img/priceExpensive.png" class="radioimg">
                </label>

                <!--Adults have to pay-->
                <input type="checkbox" class="radio_price" value="" name="hmAdultEntry" id="price5">
                <label class="label_price" for="price5"> <img src="assets/img/priceAdult.png" class="radioimg"> </label>

                <!-- Food and beverage -->
                <input type="checkbox" class="radio_price" value="" name="hmFnb" id="fnb">
                <label class="label_price" for="fnb"> <img src="assets/img/fnb.png" class="radioimg"> </label>

                <!-- Food and beverage near -->
                <input type="checkbox" class="radio_price" value="" name="hmFnbNear" id="fnbNear">
                <label class="label_price" for="fnbNear"> <img src="assets/img/fnbNear.png" class="radioimg"> </label>

                <!-- Picknick allowed-->
                <input type="checkbox" class="radio_price" value="" name="hmPickNick" id="pickNick">
                <label class="label_price" for="pickNick"> <img src="assets/img/fnbPickNick.png" class="radioimg">
                </label>

                <!-- Toilet present -->
                <input type="checkbox" class="radio_price" value="" name="hmWc" id="wc">
                <label class="label_price" for="wc"> <img src="assets/img/wc.png" class="radioimg"></label>

                <!-- Verified -->
                <input type="checkbox" class="radio_price" value="" name="hmVerf" id="verf">
                <label class="label_price" for="verf"> <img src="assets/img/verf.png" class="radioimg"></label>

                <p>Rating</p>
               <!--rating-->
               <input type="checkbox" class="radio_age hmRateOne" value="" name="hmRate" id="hmRate">
               <label class="label_age" for="hmRate"> <img src="assets/img/rate.png" class="icon" title="rating"> </label>
                <!-- second star -->
               <input type="checkbox" class="radio_age" value="" name="hmRateTwo" id="hmRateTwo">
               <label class="label_age" for="hmRateTwo"> <img src="assets/img/rate.png" class="icon" title="rating"> </label>
                <!-- third star -->
               <input type="checkbox" class="radio_age" value="" name="hmRateThree" id="hmRateThree">
               <label class="label_age" for="hmRateThree"> <img src="assets/img/rate.png" class="icon" title="rating"> </label>
                <!-- fourth star -->
               <input type="checkbox" class="radio_age" value="" name="hmRateFour" id="hmRateFour">
               <label class="label_age" for="hmRateFour"> <img src="assets/img/rate.png" class="icon" title="rating"> </label>
                <!-- fifth star -->
               <input type="checkbox" class="radio_age" value="" name="hmRateFive" id="hmRateFive">
               <label class="label_age" for="hmRateFive"> <img src="assets/img/rate.png" class="icon" title="rating"> </label>

                <br>

                <!-- explantory text -->
                <div id="check03">
                    <p class="info">kinderen van 0-3 jaar / </p>
                </div>
                <div id="check36">
                    <p class="info"> kinderen van 3-6 jaar / </p>
                </div>
                <div id="check69">
                    <p class="info"> kinderen van 6-9 jaar / </p>
                </div>
                <div id="check912">
                    <p class="info"> kinderen van 9-12 jaar / </p>
                </div> <br>
                <div id="checksmall">
                    <p class="info">minder dan 5 speeltoestellen</p>
                </div>
                <div id="checkmedium">
                    <p class="info">tussen 5 en 15 speeltoestellen</p>
                </div>
                <div id="checklarge">
                    <p class="info">tussen 15 en 25 speeltoestellen</p>
                </div>
                <div id="checkxlarge">
                    <p class="info">meer dan 25 speeltoestellen</p>
                </div> <br>
                <div id="checkfree">
                    <p class="info"> Gratis / </p>
                </div>
                <div id="checkcheap">
                    <p class="info"> minder dan €5 /kind / </p>
                </div>
                <div id="checknormal">
                    <p class="info"> tussen €5-€10 /kind / </p>
                </div>
                <div id="checkexpensive">
                    <p class="info"> meer dan €10 /kind / </p>
                </div>
                <div id="checkAdult">
                    <p class="info"> Volwassenen betalend / </p>
                </div> <br>
                <div id="checkfnb">
                    <p class="info"> Eten en drinken ter plaatse / </p>
                </div>
                <div id="checkfnbNear">
                    <p class="info"> / eten en drinken dichtbij locatie / </p>
                </div>
                <div id="checkPickNick">
                    <p class="info"> / picknick toegelaten </p>
                </div> <br>
                <div id="checkWc">
                    <p class="info"> / WC aanwezig </p>
                </div>
               
                
            </div>
            <div class="btn-group mt-0 mb-4">
                <a href="#" class="btn btn-primary active" aria-current="page">filters toepassen</a>
            </div>
            <hr class="mt-0 mb-5">
        </div>
        <div class="col-md-2"></div>
    </div>
    
    <!-- Search results -->
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="card mb-3">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="../../assets/img/vb2.jpg" alt="..." class="img-thumbnail">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <div>
                            <h5 class="card-title">Naam speeltuin </h5>
                            </div>
                            <div>
                                <img src="../../assets/img/age36.png" title="" class="icon">
                                <img src="../../assets/img/age69.png" class="icon">
                                <img src="../../assets/img/sizeM.png" title="" class="icon">
                                <img src="../../assets/img/priceExpensive.png" class="icon">
                                <img src="../../assets/img/priceAdult.png" class="icon">
                                <img src="../../assets/img/wc.png" class="icon">
                            </div>
                            <div class="d-flex justify-content-left mt-2">
                                <img src="../../assets/img/from.png" title="" class="bi mr-1">
                                <p>5km</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-2"></div>
    </div>
</div>
@endsection