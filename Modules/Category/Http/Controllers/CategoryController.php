<?php

namespace Modules\Category\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Category\Entities\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        return view('category::index');
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('category::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        
        try{
            $category= new Category;
            $category->name=$request->name;
            
            $category->save();
            return redirect()->back()->with('message','Category added Successfuly');
        }
        catch (\Exception $e){
            return "Category Added failed";
        }
        
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show()
    {
        $show=Category::all();
        return view('category::category_show',compact('show'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        $edit=Category::find($id);
        return view('category::category_edit',compact('edit'));
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
            $category= Category::find($id);
            $category->name=$request->name;
            
            $category->save();
            return redirect('category_show');
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
        //
        try{
            $destroy=Category::find($id);
            $destroy->delete();
            return redirect()->back();
        }
        catch (\Exception $e){
            return "Failed";
        }
    }
    
}
