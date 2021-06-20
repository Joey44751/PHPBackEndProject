@extends('layout.theme')
<link rel="stylesheet" href="assets/css/playground.css">
@section('content')
    <!-- header photo -->
    <div class="container">
        <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
        <div>
            <img src="{{url('storage/'.$company->playgroundPic)}}" class="img-fluid" width="100%" alt="">
            {{-- <img src="{{public_path('storage/'.$company->playgroundPic)}}" class="img-fluid" alt="{{$company->name}}"> --}}
        </div>
        </div>
        <div class="col-md-2"></div>
        </div>
    </div>
    
        <!-- name of playground, rating and verification -->
        <div class="container mt-3">
            <div class="row pt-2">
                <div class="col-md-2 "></div>
                <div class="col-md-4"><h2>{{$company->namePlayground}}</h2></div>
                <div class="col-md-2 cnt">
                    {{-- shows playground rating --}}
                    @if(($company->rateOne)==1)
                    <img src="../../assets/img/rate.png" title="Slecht" class="icon">
                    @endif
                    @if(($company->rateTwo)==1)
                    <img src="../../assets/img/rate.png" title="ok" class="icon">
                    @endif
                    @if(($company->rateThree)==1)
                    <img src="../../assets/img/rate.png" title="goed" class="icon">
                    @endif
                    @if(($company->rateFour)==1)
                    <img src="../../assets/img/rate.png" title="zeer goed" class="icon">
                    @endif
                    @if(($company->rateFive)==1)
                    <img src="../../assets/img/rate.png" title="uitstekend" class="icon">
                    @endif
                </div>
                <!-- title block icons -->
                <div class="col-md-2 cnt">
                   
                    <img src="../../assets/img/verf.png" class="icon" title="geverifieerd">
                    {{-- @php 
                    $update =new Carbon\Carbon($company->Updated_at)format('d-f-y');
                    }
        
                    @endphp --}}
                    <p class="lastup" >Laatste update: <br> {{$company->Updated_at}}</p>
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
                                 {{-- show icons concerning price of playground --}}
                                 @if(($company->price_id)==1)
                                 <img src="../../assets/img/free.png" title="inkom gratis" class="icon">
                                 @endif
                                 @if(($company->price_id)==2)
                                 <img src="../../assets/img/priceCheap.png" title="goedkope inkom" class="icon">
                                 @endif
                                 @if(($company->price_id)==3)
                                 <img src="../../assets/img/priceNormal.png" title="aanvaardbare inkomprijs" class="icon">
                                 @endif
                                 @if(($company->price_id)==4)
                                 <img src="../../assets/img/priceExpensive.png" title="dure inkomprijs" class="icon">
                                 @endif
                                 @if(($company->adultEntry))
                                 <img src="../../assets/img/priceAdult.png" title="volwassenen dienen ook te betalen" class="icon">
                                 @endif
                                 {{-- Show icons: playground for ages --}}
                                 @if(($company->baby)==1)
                                 <img src="../../assets/img/age36.png" title="voor kinderen van 0 tot 3 jaar" class="icon">
                                 @endif
                                 @if(($company->todler)==1)
                                 <img src="../../assets/img/age36.png" title="voor kinderen van 3 tot 6 jaar" class="icon">
                                 @endif
                                 @if(($company->child)==1)
                                 <img src="../../assets/img/age69.png" title="voor kinderen van 6 tot 9 jaar" class="icon">
                                 @endif
                                 @if(($company->teen)==1)
                                 <img src="../../assets/img/age912.png" title="voor kinderen van 9 tot 12 jaar" class="icon">
                                 @endif
                                 {{-- show icons concerning size of playground --}}
                                 @if(($company->size_id)==1)
                                 <img src="../../assets/img/sizeS.png" title="kleine speeltuin" class="icon">
                                 @endif
                                 @if(($company->size_id)==2)
                                 <img src="../../assets/img/sizeM.png" title="Speeltuin van een normale omvang" class="icon">
                                 @endif
                                 @if(($company->size_id)==3)
                                 <img src="../../assets/img/sizeL.png" title="grote speeltuin" class="icon">
                                 @endif
                                 @if(($company->size_id)==4)
                                 <img src="../../assets/img/sizeXl.png" title="zeer grote speeltuin" class="icon">
                                 @endif
                                 {{-- show icons for general information --}}
                                 @if(($company->fnb)==1)
                                 <img src="../../assets/img/fnb.png" title="Mogelijkheid voor eten en drinken ter plaatse" class="icon">
                                 @endif
                                 @if(($company->fnbNear)==1)
                                 <img src="../../assets/img/fnbNear.png" title="Mogelijkheid voor eten of drinken dicht bij locatie" class="icon">
                                 @endif
                                 @if(($company->pickNick)==1)
                                 <img src="../../assets/img/fnbPickNick.png" title="Picknick is toegestaan" class="icon">
                                 @endif
                                 @if(($company->wc)==1)
                                 <img src="../../assets/img/wc.png" title="wc aanwezig op locatie" class="icon">
                                 @endif
                                 @if(($company->cityLs)==1)
                                 <img src="../../assets/img/lsCity.png" title="stedlijke omgeving" class="icon">
                                 @endif
                                 @if(($company->fieldLs)==1)
                                 <img src="../../assets/img/lsField.png" title="landelijke omgeving" class="icon">
                                 @endif
                                 @if(($company->forestLs)==1)
                                 <img src="../../assets/img/lsForest.png" title="bosrijke omgeving" class="icon">
                                 @endif
                            </div>
                        </div>
                        <!-- Space underneath info icons -->
                        <div class="row">
                            <div class="col-md-12 mt-5">
                                <p><i class="bi bi-eye-fill" title="online bekijken"></i> | <i class="bi bi-file-earmark-arrow-down-fill" title="download"></i> Menu</p>
                                <p><i class="bi bi-eye-fill" title="online bekijken"></i> | <i class="bi bi-file-earmark-arrow-down-fill" title="download"></i> Overzicht van de speeltuin</p>
                                <p><i class="bi bi-globe"title="website"></i> | <a href="{{url($company->website)}}" style="text-decoration: none" target="_blank"> {{$company->website}}</a></p>
                               
                                <p id="verf" onclick="erik()"><span><i class="bi bi-person-check-fill"></i></span> | verifieer deze speeltuin</p>
                            </div>
                        </div>
                    </div>
                </div>
            <div class="col-md-4 cnt p-4">
                <!-- discription and actions for playground -->
                <h3>Korte omschrijving</h3>
                <hr>
                <p>{{$company->description}}</p>
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
                <div class="panel">
                    <!-- write review -->
                        <div class="panel-body">
                            <textarea class="form-control" name="PgReview" rows="2" placeholder="schrijf hier uw review"></textarea>

                        </div>
                    </div>
            </div>
            <div class="col-md-2"></div>
         </div>
    </div>
    
    {{-- <div class="container">
        <div class="row">
            
            <div class="col-md-2"></div>
            <div class="col-md-4">
                <hr>
                <!--Google map-->
                <div class="mt-2 mb-3" style="width: 100%; height: 300px;">
                    {!! Mapper::render() !!}
                </div>
                <!-- card with other playgrounds -->
            </div>
            <div class="col-md-4">
                <hr>
                <div class="card border-left-primary" *ngFor="let playground of playgrounds$ | async">
                    <div class="card-body">
                            <div>
                                <h3>playground name</h3>
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
    </div> --}}
</div>
@endsection