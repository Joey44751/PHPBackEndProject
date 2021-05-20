@extends('layout.theme')
@section('content')
    <!-- header photo carrousel -->
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="assets/img/top.jpg" class="d-block w-100" alt="cover">
          </div>
          <div class="carousel-item">
            <img src="assets/img/vb2.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="assets/img/vb.jpg" class="d-block w-100" alt="...">
          </div>
        </div>
        <!-- carrousel buttons -->
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </a>
    </div>
    
        <!-- name of playground, rating and verification -->
        <div class="container mt-3" *ngFor="let playground of playgrounds$ | async">
            <div class="row pt-2">
                <div class="col-md-2 "></div>
                <div class="col-md-4"><h2>playground.name</h2></div>
                <div class="col-md-2 cnt">
                    <img src="assets/img/rate.png" class="icon" title="rating">
                    <img src="assets/img/rate.png" class="icon" title="rating">
                    <img src="assets/img/rateHalf.png" class="icon" title="rating">
                </div>
                <!-- title block icons -->
                <div class="col-md-2 cnt">
                    <img src="assets/img/addByUser.png" class="icon" title="toegevoegd door">
                    <img src="assets/img/verf.png" class="icon" title="geverifieerd">
                </div>
                <div class="col-md-2 mb-2"></div>
            </div>
        </div> 
        <!-- end of container -->
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-4 p-4 cnt">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <h3>Info</h3>
                                <hr>
                                <!-- info icons -->
                                <div class="float-left"><img src="assets/img/age36.png" class="icon medium" media='all' title="voor leeftijd van 3-6 jaar"></div>
                                <div class="float-left"><img src="assets/img/age69.png" class="icon medium" media='all' title="voor leeftijd van 6-9jaar"></div>
                                <div class="float-left"><img src="assets/img/sizeM.png" class="icon medium" media='all' title="grote van de speeltuin"></div>
                                <div class="float-left"><img src="assets/img/priceNormal.png" class="icon medium" media='all' title="Normale prijsklasse"></div>
                                <div class="float-left"><img src="assets/img/fnb.png" class="icon medium" media='all' title="mogelijkheid tot eten en drinken aanwezig"></div>
                                <div class="float-left"><img src="assets/img/wc.png" class="icon medium" media='all' title="WC aanwezig"></div>
                                <div class="float-left"><p><img src="assets/img/from.png" class="icon medium" media='all' title="Afstand vanaf huidige locatie"> 2km</p></div>
                            </div>
                        </div>
                        <!-- Space underneath info icons -->
                        <div class="row">
                            <div class="col-md-12 mt-5">
                                <p><i class="bi bi-eye-fill" title="online bekijken"></i> | <i class="bi bi-file-earmark-arrow-down-fill" title="download"></i> Menu</p>
                                <p><i class="bi bi-eye-fill" title="online bekijken"></i> | <i class="bi bi-file-earmark-arrow-down-fill" title="download"></i> Overzicht van de speeltuin</p>
                                <p><i class="bi bi-globe"title="website"></i> | www.webadresvandepartner.be</p>
                                <p id="verf" onclick="erik()"><span><i class="bi bi-person-check-fill"></i></span> | verifieer deze speeltuin</p>
                            </div>
                        </div>
                    </div>
                </div>
            <div class="col-md-4 cnt p-4">
                <!-- discription and actions for playground -->
                <h3>Korte omschrijving</h3>
                <hr>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                <!-- action buttons -->
                <div class="btn-group">
                    <!-- save icon - heart -->
                    <a href="#" class="btn button" title="Save" aria-current="page"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
                    </svg></a>
                    <!-- Directions -->
                    <a href="#" class="btn button" title="directions" ><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-90deg-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M14.854 4.854a.5.5 0 0 0 0-.708l-4-4a.5.5 0 0 0-.708.708L13.293 4H3.5A2.5 2.5 0 0 0 1 6.5v8a.5.5 0 0 0 1 0v-8A1.5 1.5 0 0 1 3.5 5h9.793l-3.147 3.146a.5.5 0 0 0 .708.708l4-4z"/>
                    </svg></a>
                      <!-- Print icon -->
                    <a onclick="window.print()" class="btn button" title="print" aria-current="page"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-printer-fill" viewBox="0 0 16 16">
                        <path d="M5 1a2 2 0 0 0-2 2v1h10V3a2 2 0 0 0-2-2H5zm6 8H5a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1z"/>
                        <path d="M0 7a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2h-1v-2a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v2H2a2 2 0 0 1-2-2V7zm2.5 1a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1z"/>
                      </svg></a>
                    <!-- share icon -->
                    <a href="#" class="btn button" title="Share" ><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" title="Share" fill="currentColor" class="bi bi-share-fill" viewBox="0 0 16 16">
                        <path d="M11 2.5a2.5 2.5 0 1 1 .603 1.628l-6.718 3.12a2.499 2.499 0 0 1 0 1.504l6.718 3.12a2.5 2.5 0 1 1-.488.876l-6.718-3.12a2.5 2.5 0 1 1 0-3.256l6.718-3.12A2.5 2.5 0 0 1 11 2.5z"/>
                      </svg></a>
                    <!-- export icon -->
                    <a class="btn button" title="export"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-bar-up" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M8 10a.5.5 0 0 0 .5-.5V3.707l2.146 2.147a.5.5 0 0 0 .708-.708l-3-3a.5.5 0 0 0-.708 0l-3 3a.5.5 0 1 0 .708.708L7.5 3.707V9.5a.5.5 0 0 0 .5.5zm-7 2.5a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 0 1h-13a.5.5 0 0 1-.5-.5z"/>
                      </svg></a>
                    <!-- Add playground button -->
                      <a routerLink="/addplayground" class="btn button nav-link" title="voeg speeltuin toe" ><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-square-fill" viewBox="0 0 16 16">
                        <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm6.5 4.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3a.5.5 0 0 1 1 0z"/>
                      </svg></a>
                  </div>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
    </div>
    <!-- zorgt dat alles hieronder niet afgedrukt wordt -->
    <div class="noprint">
    <!-- Add review -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <div class="container mt-5 bootdey">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8 bootstrap snippets">
                <h3>Reviews</h3>
                <br>
                <div class="container d-flex justify-content-center mt-200">
                    <div class="row">
                        <!-- choose number of stars -->
                        <div class="col-md-12">
                            <div class="stars">
                                <form action=""> 
                                    <input class="star star-5" value="oneStar" id="star-5" type="radio" name="star" /> <label class="star star-5" for="star-5"></label> 
                                    <input class="star star-4" value="twoStar" id="star-4" type="radio" name="star" /> <label class="star star-4" for="star-4"></label> 
                                    <input class="star star-3" value="threeStar" id="star-3" type="radio" name="star" /> <label class="star star-3" for="star-3"></label> 
                                    <input class="star star-2" value="fourStar" id="star-2" type="radio" name="star" /> <label class="star star-2" for="star-2"></label> 
                                    <input class="star star-1" value="fiveStar" id="star-1" type="radio" name="star" /> <label class="star star-1" for="star-1"></label> 
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel">
                    <!-- write review -->
                        <div class="panel-body">
                            <textarea class="form-control" name="PgReview" ng-model="PgReview" rows="2" placeholder="schrijf hier uw review"></textarea>
                            <div class="mar-top clearfix">
                        <!-- Submit button -->
                            <button class="btn" type="submit"><i></i> Submit</button>
                                <a class="btn btn-trans btn-icon fa fa-video-camera add-tooltip" href="#"></a>
                                <a class="btn btn-trans btn-icon fa fa-camera add-tooltip" href="#"></a>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="col-md-2"></div>
         </div>
    </div>
    
    <div class="container">
        <div class="row">
            
            <div class="col-md-2"></div>
            <div class="col-md-4">
                <hr>
                <!--Google map-->
                <div>
                    <google-map
                    height="300px"
                    width="100%"
                    [center]="center"
                ></google-map>
                </div>
                <!-- card with other playgrounds -->
            </div>
            <div class="col-md-4">
                <hr>
                <div class="card border-left-primary" *ngFor="let playground of playgrounds$ | async">
                    <div class="card-body">
                            <div>
                                <h3>playground.name</h3>
                                <img src="assets/img/rate.png" class="icon iconsm float-left" title="rating">
                                <img src="assets/img/rate.png" class="icon iconsm float-left" title="rating">
                                <img src="assets/img/rateHalf.png" class="icon iconsm float-left" title="rating">
                                <img src="assets/img/addByUser.png" class="icon iconsm float-left" title="toegevoegd door">
                                <img src="assets/img/verf.png" class="icon iconsm float-left" title="geverifieerd">
                                <img src="assets/img/age36.png" class="icon iconsm float-left" title="voor leeftijd van 3-6 jaar">
                                <img src="assets/img/age69.png" class="icon iconsm float-left" title="voor leeftijd van 6-9jaar">
                                <p><img src="assets/img/from.png" class="icon iconsm float-left" title="Afstand vanaf huidige locatie"> 2km</p>
                            </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
</div>
@endsection