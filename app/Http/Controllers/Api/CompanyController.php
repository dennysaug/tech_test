<?php

namespace App\Http\Controllers\Api;

use App\Company;
use App\Contact;
use App\Http\Controllers\Controller;

class CompanyController extends Controller
{

    public function search($name = null)
    {

        if(isset($name) && !is_null($name)) {
            $contacts = Contact::where('name','like', "%{$name}%")->orderBy('name','asc')->get();
            $companies = Company::where('name','like', "%{$name}%")->orderBy('name','asc')->get();
        } else {
            return ['msg' => 'You need inform the name'];
        }

        return ['companies' => $companies, 'contacts' => $contacts];


    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Company::orderBy('id','desc')->get();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function show(Company $company)
    {
        return Company::with('contacts')->find($company);
    }
}
