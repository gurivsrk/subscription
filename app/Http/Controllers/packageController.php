<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\package;
use App\Http\Requests\StorepackageRequest;
use App\Http\Requests\UpdatepackageRequest;

class packageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $packageUpdate = '';
        $packages = package::select('id','package_name','price','pack_validity','any_offer','featured')->get();
        return view('pages.package',compact('packages'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorepackageRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorepackageRequest $request)
    {
        $description =  json_encode($request->post('features'));
       
        $data = $request->all();
        $data['description']  = $description;
 
        package::create($data);
 
        return redirect()->back()->with('success','Successfully Added');
    }

      /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\package  $package
     * @return \Illuminate\Http\Response
     */
    public function edit(package $package)
    {
       
        $packageUpdate = 'edit-package';
        $packages = package::select('id','package_name','price','pack_validity','any_offer','description','featured')->get();
        return view('pages.package',compact('package','packages','packageUpdate'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatepackageRequest  $request
     * @param  \App\Models\package  $package
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, package $package)
    {
        $description =  json_encode($request->post('features'));
        $data = $request->all();
        $data['description']  = $description;
        $package->update($data);

        return redirect()->back()->with('update','Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\package  $package
     * @return \Illuminate\Http\Response
     */
    public function destroy(package $package)
    {
        $package->delete();
        return redirect('vsrk-admin/package')->with('success','Successfully Deleted');
    }
}
