<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Http\Requests\StoreCompanyRequest;
use App\Http\Requests\UpdateCompanyRequest;
use Illuminate\Support\Facades\Storage;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $companies = Company::paginate(perPage: config('pagination.count'));
        return view('admin.companies.index',get_defined_vars());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.companies.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCompanyRequest $request)
    {
        //
        $data = $request->validated();
        $image= $request->image;
        $imagename = time() . '-' . $image->getClientOriginalName();
        $image->storeAs('companies',$imagename,'public');
        $data['image'] = $imagename;
        Company::create($data);
        return to_route('admin.companies.index')->with('success',__('keyWords.create_successfully'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Company $company)
    {
        //
        return view('admin.companies.show',get_defined_vars());
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Company $company)
    {
        //
        return view('admin.companies.edit',get_defined_vars());
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCompanyRequest $request, Company $company)
    {
        //
        $data = $request->validated();
        if($request->hasFile('image')){
        Storage::delete("public/companies/$company->image");
        $image= $request->image;
        $imagename = time() . '-' . $image->getClientOriginalName();
        $image->storeAs('companies',$imagename,'public');
        $data['image'] = $imagename;
        }
        $company->update($data);
        return to_route('admin.companies.index')->with('success',__('keyWords.updated_successfully'));

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Company $company)
    {
        //
          $company->delete();
        return  to_route('admin.companies.index')->with('success',__('keyWords.deleted_successfully'));
    }
}
