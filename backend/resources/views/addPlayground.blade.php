@extends('layout.theme')
<link rel="stylesheet" href="assets/css/addPlayground.css">
@section('content')
{{-- !-- page title --> --}}
<div class="container mt-3">
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <h1>SPEELTUIN TOEVOEGEN</h1>
        </div>
        <div class="col-md-1"></div>
    </div>
</div>

@if ($errors->any())
<div class="container mt-4">
    <div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-10">
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    </div>
    <div class="col-md-1"></div>
    </div>
</div>
@endif

<!-- add playground form field -->
<form method="post" action="/addPg" enctype="multipart/form-data">
@csrf
<div class="container mt-5"></div>
    <div class="row">
        <div class="col-md-3"></div>
            <div class="col-md-6 balk p-4">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                    <div class="input-group input-group-sm mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text"  id="inputGroup-sizing-m">Naam speeltuin</span>
                        </div>
                        <input type="text" class="form-control" name="namePlayground" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                    </div>
                </div>
                </div>
            </div>
            <!-- Playground Location -->
                <div class="container">
                    <hr>
                     <div class="row">
                        <div class="col-md-6 mt-2">
                            <h3> <span><i class="bi bi-geo"></i></span> Locatie van de speeltuin</h3>
                            <br>

                            <!-- use current location -->
                            <div class="form-check">
                                <input type="checkbox" name="currentLocation" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label"  for="exampleCheck1"><h4>Gebruik huidige locatie</h4></label>
                              </div>
                              <br>

                            <div class="input-group input-group-sm mb-3">
                                <!-- street -->
                                <div class="input-group-prepend">
                                    <span class="input-group-text"  id="inputGroup-sizing-sm">Straat + nr</span>
                                </div>
                                <input type="text" class="form-control" name="street" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                            </div>

                            <div class="input-group input-group-sm mb-3">
                                <!-- city -->
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroup-sizing-sm">Stad</span>
                                </div>
                                <input type="text" name="city" #city class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                            </div>

                            <div class="input-group input-group-sm mb-3">
                                <!-- Postal code -->
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroup-sizing-sm">Postcode</span>
                                </div>
                                <input type="text" name="postal" #zip_code class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                            </div>

                            <div class="input-group input-group-sm mb-3">
                                <!-- number -->
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroup-sizing-sm">website</span>
                                </div>
                                <input type="text" #number name="website" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                            </div>

                        </div>
                        <!-- placeholder image, interactive google maps to be added -->
                        <div class="col-md-6 mt-2 mb-3" style="width: 100%; height: 300px;">
                            {!! Mapper::render() !!}
                        </div>
                    </div>

                    <!-- Playground information -->
                    <hr>
                    <div class="row">
                        <div class="col-md-6 mt-2">
                            <h3> <span><i class="bi bi-info-circle"></i></span> Informatie over de speeltuin</h3>
                        </div>
                        <div class="col-md-6 mt-2"></div>
                    </div>

                    <!-- short description -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                  <span class="input-group-text">Korte omschrijving</span>
                                </div>
                                <textarea class="form-control" #extra name="descr" aria-label="With textarea"></textarea>
                              </div>
                        </div>
                    </div>
                    <!-- information selection -->
                    <div class="row">
                        <!-- slect size of playground -->
                        <div class="col-md-4 mt-2">
                            <br>
                            <h4>Grote van de speeltuin</h4>
                          
                            <!--small-->
                            <input type="radio" class="radio_item" value="1" name="size" id="radio1">
                            <label class="label_item" for="radio1"> <img src="assets/img/sizeS.png" class="radioimg" > </label>

                            <!--medium-->
                            <input type="radio" class="radio_item" value="2" name="size" id="radio2">
                            <label class="label_item" for="radio2"> <img src="assets/img/sizeM.png" class="radioimg" > </label>

                             <!--large-->
                             <input type="radio" class="radio_item" value="3" name="size" id="radio3">
                             <label class="label_item" for="radio3"> <img src="assets/img/sizeL.png" class="radioimg" > </label>
 
                             <!--extra large-->
                             <input type="radio" class="radio_item" value="4" name="size" id="radio4">
                             <label class="label_item" for="radio4"> <img src="assets/img/sizeXl.png" class="radioimg" > </label>

                            <br>
                            <!-- explantory text -->
                            <div id="checksmall"><p class="info">minder dan 5 speeltoestellen</p></div>
                            <div id="checkmedium"><p class="info">tussen 5 en 15 speeltoestellen</p></div> 
                            <div id="checklarge"><p class="info">tussen 15 en 25 speeltoestellen</p></div> 
                            <div id="checkxlarge"><p class="info">meer dan 25 speeltoestellen</p></div>  

                        </div>
                        <!-- select playground fit for ages -->
                        <div class="col-md-4 mt-2">
                            <br>
                            <h4>Voor leeftijd</h4>
                          
                            <!--age 0 - 3-->
                            <input type="checkbox" class="radio_age" value="1" name="baby" id="age1">
                            <label class="label_age" for="age1"> <img src="assets/img/age03.png" class="radioimg" > </label>

                            <!--age 3 - 6-->
                            <input type="checkbox" class="radio_age" value="1" name="todler" id="age2">
                            <label class="label_age" for="age2"> <img src="assets/img/age36.png" class="radioimg" > </label>

                             <!--age 6 - 9-->
                             <input type="checkbox" class="radio_age" value="1" name="child" id="age3">
                             <label class="label_age" for="age3"> <img src="assets/img/age69.png" class="radioimg" > </label>
 
                             <!--age 9 - 12-->
                             <input type="checkbox" class="radio_age" value="1" name="teen" id="age4">
                             <label class="label_age" for="age4"> <img src="assets/img/age912.png" class="radioimg" > </label>

                            <br>
                            <!-- explantory text -->
                            <div id="check03"><p class="info">kinderen van 0-3 jaar / </p></div>
                            <div id="check36"><p class="info"> kinderen van 3-6 jaar / </p></div> 
                            <div id="check69"><p class="info"> kinderen van 6-9 jaar / </p></div> 
                            <div id="check912"><p class="info"> kinderen van 9-12 jaar / </p></div>  
                            
                        </div>
                        <!-- select entry price of playground -->
                        <div class="col-md-4 mt-2">
                            <br>
                            <h4>Entreegeld</h4>
                          
                            <!--Free-->
                            <input type="radio" class="radio_price" value="1" name="price" id="price1">
                            <label class="label_price" for="price1"> <img src="assets/img/free.png" class="radioimg" > </label>

                            <!--cheap-->
                            <input type="radio" class="radio_price" value="2" name="price" id="price2">
                            <label class="label_price" for="price2"> <img src="assets/img/priceCheap.png" class="radioimg" > </label>

                             <!--normal-->
                             <input type="radio" class="radio_price" value="3" name="price" id="price3">
                             <label class="label_price" for="price3"> <img src="assets/img/priceNormal.png" class="radioimg" > </label>
 
                             <!--expensive-->
                             <input type="radio" class="radio_price" value="4" name="price" id="price4">
                             <label class="label_price" for="price4"> <img src="assets/img/priceExpensive.png" class="radioimg" > </label>

                            <!--Adults have to pay-->
                            <input type="checkbox" class="radio_price" value="" name="adultEntry" id="price5">
                            <label class="label_price" for="price5"> <img src="assets/img/priceAdult.png" class="radioimg" > </label>

                            <br>
                            <!-- explantory text -->
                            <div id="checkfree"><p class="info">Gratis</p></div>
                            <div id="checkcheap"><p class="info">minder dan €5 /kind</p></div> 
                            <div id="checknormal"><p class="info">tussen €5-€10 /kind </p></div> 
                            <div id="checkexpensive"><p class="info">meer dan €10 /kind</p></div>
                            <div id="checkAdult"><p class="info">Volwassenen betalend</p></div>  
                            
                        </div>
                    
                    </div>
                    <!-- general information -->
                    <div class="row">
                        <div class="col-md-5">
                            <h4>Algemene informatie</h4>

                            <!-- Food and beverage -->
                            <input type="checkbox" class="radio_price" value="1" name="fnb" id="fnb">
                            <label class="label_price" for="fnb"> <img src="assets/img/fnb.png" class="radioimg" > </label>

                            <!-- Food and beverage near -->
                            <input type="checkbox" class="radio_price" value="1" name="fnbNear" id="fnbNear">
                            <label class="label_price" for="fnbNear"> <img src="assets/img/fnbNear.png" class="radioimg" > </label>

                            <!-- Picknick allowed-->
                            <input type="checkbox" class="radio_price" value="1" name="pickNick" id="pickNick">
                            <label class="label_price" for="pickNick"> <img src="assets/img/fnbPickNick.png" class="radioimg" > </label>

                            <!-- Toilet present -->
                            <input type="checkbox" class="radio_price" value="1" name="wc" id="wc">
                            <label class="label_price" for="wc"> <img src="assets/img/wc.png" class="radioimg" > </label>

                            <!-- City enviroment -->
                            <input type="checkbox" class="radio_price" value="1" name="cityLs" id="city">
                            <label class="label_price" for="city"> <img src="assets/img/lsCity.png" class="radioimg" > </label>

                             <!-- Field enviroment -->
                             <input type="checkbox" class="radio_price" value="1" name="fieldLs" id="field">
                             <label class="label_price" for="field"> <img src="assets/img/lsField.png" class="radioimg" > </label>

                              <!-- Forest enviroment -->
                            <input type="checkbox" class="radio_price" value="1" name="forestLs" id="forest">
                            <label class="label_price" for="forest"> <img src="assets/img/lsForest.png" class="radioimg" > </label>

                            <br>

                            <!-- explantory text for general information-->
                            <div id="checkfnb"><p class="info">Eten en drinken ter plaatse </p></div>
                            <div id="checkfnbNear"><p class="info"> / eten en drinken dichtbij locatie </p></div> 
                            <div id="checkPickNick"><p class="info"> / picknick toegelaten </p></div> 
                            <div id="checkWc"><p class="info"> / WC aanwezig </p></div> <br>
                            <div id="checkCity"><p class="info"> / In een stedelijke omgeving </p></div> 
                            <div id="checkField"><p class="info"> / In een landelijke omgeving </p></div>  
                            <div id="checkForest"><p class="info"> / In een bosrijke omgeving </p></div>   

                        </div>
                        <div class="col-md-7">
                            <h4>Rating</h4>
                            <!--rating-->
                            <input type="checkbox" class="radio_age hmRateOne" value="1" name="hmRate" id="hmRate">
                            <label class="label_age" for="hmRate"> <img src="assets/img/rate.png" class="icon" title="rating"> </label>
                             <!-- second star -->
                            <input type="checkbox" class="radio_age" value="1" name="hmRateTwo" id="hmRateTwo">
                            <label class="label_age" for="hmRateTwo"> <img src="assets/img/rate.png" class="icon" title="rating"> </label>
                             <!-- third star -->
                            <input type="checkbox" class="radio_age" value="1" name="hmRateThree" id="hmRateThree">
                            <label class="label_age" for="hmRateThree"> <img src="assets/img/rate.png" class="icon" title="rating"> </label>
                             <!-- fourth star -->
                            <input type="checkbox" class="radio_age" value="1" name="hmRateFour" id="hmRateFour">
                            <label class="label_age" for="hmRateFour"> <img src="assets/img/rate.png" class="icon" title="rating"> </label>
                             <!-- fifth star -->
                            <input type="checkbox" class="radio_age" value="1" name="hmRateFive" id="hmRateFive">
                            <label class="label_age" for="hmRateFive"> <img src="assets/img/rate.png" class="icon" title="rating"> </label>
                        
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6">
                            <!-- Add menu -->
                            <h3 class=""> Voeg menu toe</h3>
                                        <form>
                                        <div class="form-group">
                                                <div class="custom-file">
                                                <input type="file" name="files[]" multiple class="custom-file-input form-control" id="customFile">
                                                <label class="custom-file-label" for="customFile">Kies bestand</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <button type="button" name="upload" value="upload" id="upload" class="btn btn-block btn-dark"><i
                                                    class="fa fa-fw fa-upload"></i> Upload</button>
                                        </div>
                                    </form>
                        </div>
                        <!-- add plan of playground -->
                        <div class="col-md-6">
                            <h3 class="">  Voeg plan toe</h3>
                                        <form>
                                        <div class="form-group">
                                                <div class="custom-file">
                                                <input type="file" name="files[]" multiple class="custom-file-input form-control" id="customFile">
                                                <label class="custom-file-label" for="customFile">Kies bestand</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <button type="button" name="upload" value="upload" id="upload" class="btn btn-block btn-dark"><i
                                                    class="fa fa-fw fa-upload"></i> Upload</button>
                                        </div>
                                    </form>
                        </div>
                    </div>
                    <hr>
                    <!-- Add pictures of playground -->
                    <div class="row">
                        <div class="col-md-12">
                                <h3 class=""> Voeg foto's toe</h3>
                                        <form>
                                        <div class="form-group">
                                                <div class="custom-file">
                                                <input type="file" name="files[]" multiple class="custom-file-input form-control" id="customFile">
                                                <label class="custom-file-label" for="customFile">Kies bestand</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <button type="button" name="upload" value="upload" id="upload" class="btn btn-block btn-dark"><i
                                                    class="fa fa-fw fa-upload"></i> Upload</button>
                                        </div>
                                    </form>
                        </div>
                    </div>
                 </div>
        <div class="col-md-3"></div>
    </div>
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                  <div class="btn-group mt-0 mb-4 d-flex justify-content-right">
                   <button type="submit" class="btn"><span><i class="bi bi-plus-circle"></i></span> Voeg speeltuin toe</a></button>
                </div>
                <!-- Use current location -->
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
</form>
@endsection