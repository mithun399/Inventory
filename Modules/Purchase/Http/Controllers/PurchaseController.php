<?php

namespace Modules\Purchase\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Helpers\Helper;
use Modules\Purchase\Entities\Purchase;
use Modules\Purchase\Entities\PurchaseDetail;
use Modules\Product\Entities\Product;
use Illuminate\Support\Facades\DB;
class PurchaseController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $product=Product::all();
        $invoice=Purchase::all();
$purchase=PurchaseDetail::all();

        return view('purchase::index',compact('product','invoice','purchase'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('purchase::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
       
        $invoice=Helper::IDGenerator(new Purchase,'purchase_invoice', 5 , 'INV');
        $description=$request->description;
        $tcost=$request->total_cost;
        $price=$request->price;
        $cost=$request->cost;
        $purchase_quantity=$request->purchase_quantity;
        $invoice_quantity=$request->invoice_quantity;
        $purchase_id=$request->purchase_id;
        $product_id=$request->product_id;
        $expire_date=$request->expire_date;
        // $q=new Purchase;
        // $q->purchase_invoice=$invoice;
        // $q->description=$description;
        // $q->total_cost=$tcost;
        // $q->save();
        $data=array("purchase_invoice"=>$invoice,"description"=>$description,"total_cost"=>$tcost);
        $query=DB::table('purchases')->insert($data);

        if($query){
            $dat=array("purchase_id"=>$purchase_id,"product_id"=>$product_id,"price"=>$price,"purchase_quantity"=>$purchase_quantity,"invoice_quantity"=>$invoice_quantity,"expire_date"=>$expire_date);
            DB::table('purchase_details')->insert($dat);
        }

        DB::table('product_stocks')->where('product_id',$product_id)->increment('stock_quantity', $purchase_quantity);
        

        return redirect()->back()->with('message','Purchase Succesfull');
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('purchase::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('purchase::edit');
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
}
