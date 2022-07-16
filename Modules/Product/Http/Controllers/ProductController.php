<?php

namespace Modules\Product\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Product\Entities\Product;
use Modules\Product\Entities\ProductStock;
use Modules\Vendor\Entities\Vendor;
use Modules\Category\Entities\Category;
use Modules\Product\Entities\ProductMap;
use Modules\Product\Entities\SecondaryProduct;


use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $vendor= Vendor::all();
        $category= Category::all();
        
        $product=Product::all();
        
        return view('product::index',compact('vendor','category','product'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('product::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */

    public function store(Request $request)
    {
       //$product= new Product;
       
    //     $product->name=$request->name;
    //     $product->description=$request->description;
    //     $product->category_id=$request->category_id;
    //     $product->price=$request->price;
    //     $product->cost=$request->cost;
    //     $product->vendor_id=$request->vendor_id;
    //     $product->stock=$request->$stock;
    //     $product->UoM=$request->UoM;
    //     $product->save();
    //     return redirect()->back();

    $name = $request->input('name');
    $description=$request->input('description');
    $category_id=$request->input('category_id');
    $price=$request->input('price');
    $cost=$request->input('cost');
    $vendor_id=$request->input('vendor_id');
    $stock=$request->input('stock_quantity');
     $uom=$request->input('UoM');
     $product_id=$request['product_id'];
// $product_id=DB::table('product_stocks')
// ->join('products','product_stocks.product_id','=','products.id')

// ->select('products.*','product_stocks.id')
// ->get();
//dd($product_id);



    $data=array("name"=>$name,"description"=>$description,"category_id"=>$category_id,"price"=>$price,"cost"=>$cost,"vendor_id"=>$vendor_id,"UoM"=>$uom);
   $query= DB::table('products')->insert($data);

    if($query){
        
       $dat=array("product_id"=> $product_id,"stock_quantity"=>$stock,"UoM"=>$uom);
        DB::table('product_stocks')->insert($dat);
      
    }
       return redirect()->back();
       
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show()
    {
        $show=Product::all();
        return view('product::product_show',compact('show'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('product::edit');
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
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        //
    }


    public function secondary(){
        $product=Product::all();
        $secondary=ProductMap::all();
        return view('product::secondary_product',compact('product','secondary'));
    }

    public function secondarystore(Request $request)
    {
     

//     $name = $request->input('name');
//     $description=$request->input('description');
   
//     $price=$request->input('price');
//     $cost=$request->input('cost');
    
//     $stock=$request->input('stock_quantity');
//      $uom=$request->input('UoM');
//      $product_id=$request['product_id'];
//      $secondary=$request['secondary_product_id'];




//     $data=array("name"=>$name,"description"=>$description,"price"=>$price,"cost"=>$cost,"stock_quantity"=>$stock,"UoM"=>$uom);
//    $query= DB::table('secondary_products')->insert($data);
 
   $secondary=new SecondaryProduct();
   $secondary->name=$request->name;
   $secondary->description=$request->description;
   $secondary->price=$request->price;
   $secondary->cost=$request->cost;
   $secondary->stock_quantity=$request->stock_quantity;
   $secondary->UoM=$request->UoM;
   $secondary->save();
    
       return redirect()->back();
       
    }
    public function productMap(){
        $product=Product::all();
        $secondaryproduct=SecondaryProduct::all();
        return view('product::product_map',compact('secondaryproduct','product'));
    }
    public function productmapStore(Request $request){
        $productmap=new ProductMap();
        $productmap->name=implode(' ', $request->name);
        $productmap->description=$request->description;
        $productmap->price=$request->price;
        $productmap->cost=$request->cost;
        $productmap->stock_quantity=$request->stock_quantity;
        $productmap->uom=$request->uom;
        $productmap->product_id=$request->product_id;
        $productmap->save();
        return redirect()->back();
    }
}