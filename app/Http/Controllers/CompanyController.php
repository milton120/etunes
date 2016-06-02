<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Company;

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
        $companies=Company::all();
        return view('company.index',['companies'=>$companies]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('company.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $this->validate($request, [
        'companyName' => 'required',
        'contactNumber'=>'required',
        'address' => 'required',
        'companyEmail' => 'required|unique:company,companyEmail',
        'companyCountry' =>'required',
        ]);

        $company = new Company;
        $company->companyName = $request->get('companyName');
        $company->contactNumber = $request->get('contactNumber');
        $company->companyEmail = $request->get('companyEmail');
        $company->address = $request->get('address');
        $company->companyCountry = $request->get('companyCountry');

        $company->save();

        return redirect('/company');
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
    public function edit($companyId)
    {
        //
        $company = Company::find($companyId);
        return view('company.edit',['company'=>$company]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $companyId)
    {
        //

        $this->validate($request, [
        'companyName' => 'required',
        'contactNumber'=>'required',
        'address' => 'required',
        'companyEmail' => 'required|unique:company,companyEmail,'.$companyId.',companyId',
        'companyCountry' =>'required',
        ]);

        $company = Company::find($companyId);
        $company->companyName = $request->get('companyName');
        $company->contactNumber = $request->get('contactNumber');
        $company->companyEmail = $request->get('companyEmail');
        $company->address = $request->get('address');
        $company->companyCountry = $request->get('companyCountry');

        $company->save();

        return redirect('/company');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($companyId)
    {
        //
        $company = Company::find($companyId);
        $company->delete();

        return redirect('/company');
    }
}
