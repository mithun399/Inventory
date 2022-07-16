<?php

namespace Modules\Vendor\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Vendor\Entities\Vendor;

class VendorController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        return view('vendor::index');
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create(Request $req)
    {
       
        // $vendor= new Vendor;
        //     $vendor->name=$req->name;
        //     $vendor->address=$req->address;
        //     $vendor->phone_no=$req->phone_no;
        //     $vendor->save();
          
        //     return redirect()->back()->with('message','Vendor added Successfuly');

     //   return view('vendor::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        //
        try{
            $vendor= new Vendor;
            $vendor->name=$request->name;
            $vendor->address=$request->address;
            $vendor->phone_no=$request->phone_no;
            $vendor->save();
            return redirect()->back()->with('message','Vendor added Successfuly');
        }
        catch (\Exception $e){
            return "Vendor Added failed";
        }
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show()
    {
        $show=Vendor::all();
        return view('vendor::show',compact('show'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        $edit=Vendor::find($id);
        return view('vendor::edit',compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        //
        try{
            $vendor= Vendor::find($id);
            $vendor->name=$request->name;
            $vendor->address=$request->address;
            $vendor->phone_no=$request->phone_no;
            $vendor->save();
            return redirect('show')->with('message','Vendor Edited Successfuly');
        }
        catch (\Exception $e){
            return "Vendor Added failed";
        }
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        try{
            $destroy=Vendor::find($id);
            $destroy->delete();
            return redirect()->back();
        }
        catch (\Exception $e){
            return "Failed";
        }
    }
}
