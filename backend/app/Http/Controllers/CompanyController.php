<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Http\controllers\CompanyController;
use Illuminate\Http\Request;
use Spatie\Geocoder\Facades\Geocoder;


class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     //  
    }

    public function detail($id) {
        $company = Company::where('id', $id)->firstOrFail();
        return view('playground',compact('company'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $client = new \GuzzleHttp\Client();
        $geocoder = new \Spatie\Geocoder\Geocoder($client);
        $geocoder->setApiKey(config('geocoder.key'));
        $geocoder->setCountry(config('geocoder.country'));
        $result = $geocoder->getCoordinatesForAddress($request->street, $request->postal);

        $validate = request()->validate([
            'namePlayground' => 'required',
            'street' => 'required',
            'postal' => 'required',
            'size' => 'required',
            'price' => 'required',
        ]);

        $timestamp = now()->timestamp;
        $filename= request('playgroundPic')->getClientOriginalName();
        $company = Company::firstOrCreate(
            ['namePlayground' => $request->namePlayground],
            ['street' => $request->street,
            'postal' => $request->postal,
            'website' => $request->website,
            'description' => $request->descr,
            'size_id' => $request->size,
            'price_id' => $request->price,
            'adultEntry' => $request->adultEntry,
            'fnb'=> $request->fnb,
            'fnbNear'=> $request->fnbNear,
            'pickNick' =>$request->pickNick,
            'wc'=> $request->wc,
            'cityLs'=> $request->cityLs,
            'fieldLs'=> $request->fieldLs,
            'forestLs'=> $request->forestLs,
            'baby'=> $request->baby,
            'todler'=> $request->todler,
            'child'=> $request->child,
            'teen'=> $request->teen,
            'rateOne'=> $request->hmRate,
            'rateTwo'=> $request->hmRateTwo,
            'rateThree'=> $request->hmRateThree,
            'rateFour'=> $request->hmRateFour,
            'rateFive'=> $request->hmRateFive,
            'playgroundPic'=>$timestamp.'_'.$filename,
            'long'=>$result["lat"],
            'lat'=>$result["lng"],            
        ]);

        $request->playgroundPic->move(public_path('storage'),$timestamp.'_'.$filename);

        if ($company->wasRecentlyCreated){
            toast('Speeltuin succesvol toegevoegd, bedankt voor uw bijdrage!','success')->autoClose(5000)->position('middle');
            return view('addPlayground');
            } else {
            toast('Deze speeltuin is reeds toegevoegd.','warning')->autoClose(5000)->position('middle');
            return view('addPlayground');
        };
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
