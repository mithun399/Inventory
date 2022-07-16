@extends('master')

@section('homeContent')


<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col">

            </div>
            @if(session()->has('message'))
            <div class="alert alert-success">

                {{session()->get('message')}}
            </div>

            @endif
            <div style="width:95% !important; margin-left:5%; margin-top:6%;">
                <div class="col-11 grid-margin">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title" align="center">ADD PRODUCT</h4>
                            <form class="form-sample" action="{{url('product-store')}}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-sm-6 col-form-label">Name</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="name" class="form-control"
                                                    placeholder="Product Name">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-sm-6 col-form-label">Description</label>
                                            <div class="col-sm-9">
                                                <textarea class="form-control" name="description" rows="4"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-sm-6 col-form-label">Category</label>
                                            <div class="col-sm-9">
                                                <select class="form-select" id="category" name="category_id"
                                                    aria-label="Default select example">
                                                    <option selected>Open this select menu</option>
                                                    @foreach($category as $cat)
                                                    <option value="{{$cat->id}}">{{$cat->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-sm-6 col-form-label">Price</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="price" class="form-control"
                                                    placeholder="Product Price">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-sm-6 col-form-label">Cost</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="cost" class="form-control"
                                                    placeholder="Product Cost">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-sm-6 col-form-label">Vendor</label>
                                            <div class="col-sm-9">
                                                <select class="form-select" id="vendor" name="vendor_id"
                                                    aria-label="Default select example">
                                                    <option selected>Open this select menu</option>
                                                    @foreach($vendor as $ven)
                                                    <option value="{{$ven->id}}">{{$ven->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-sm-6 col-form-label">Stock Quantity</label>
                                            <div class="col-sm-9">
                                                <input type="number" name="stock_quantity" class="form-control"
                                                    placeholder="Stock Quantity">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-sm-6 col-form-label">Unit Of Measurement</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="UoM" class="form-control"
                                                    placeholder="Unit of Measurement">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-6 col-form-label"></label>
                                        <div class="col-sm-9">
                                            @foreach($product as $pro)
                                            <input type="hidden" name="product_id" class="form-control"
                                                value="{{$pro->id+1}}">
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                        </div>
                        
                        <div align="center">
                            <button type="submit" class="btn btn-primary mr-2">Submit</button>
                            <button class="btn btn-dark">Cancel</button>



                        </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- content-wrapper ends -->



    @endsection