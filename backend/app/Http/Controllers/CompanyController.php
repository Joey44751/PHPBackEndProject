<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Http\controllers\CompanyController;
use Illuminate\Http\Request;


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
      
        $validate = request()->validate([
            'namePlayground' => 'required',
            'street' => 'required',
            'postal' => 'required',
            'size' => 'required',
            'price' => 'required',
        ]);

        $company = Company::firstOrCreate([
            'namePlayground' => $request->namePlayground,
            'street' => $request->street,
            'postal' => $request->postal,
            // 'size.name' => $request->size,
            // 'price.name' => $request->price,
            // 'adultEntry' => $request->adultEntry,
            // 'fnb'=> $request->fnb,
            // 'fnbNear'=> $request->fnbNear,
            // 'pickNick' =>$request->pickNick,
            // 'wc'=> $request->wc,
            // 'cityLs'=> $request->cityLs,
            // 'fieldLs'=> $request->fieldLs,
            // 'forestLs'=> $request->forestLs,
        ]);
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
