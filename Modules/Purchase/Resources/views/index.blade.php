@extends('master')

@section('homeContent')

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
            <div style="width:99% !important; margin-left:6%; margin-top:6%;">

                <div class="col-11 grid-margin">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title" align="center">PURCHASE PRODUCT</h4>
                            <form class="form-sample" method="POST" action="{{url('purchase-store')}}">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-sm-6 col-form-label">Product Name</label>
                                            <div class="col-sm-9">
                                                <select class="form-select" id="product" name="name" placeholder="">
                                                    <option selected>Open this select menu</option>
                                                    @foreach($product as $cat)
                                                    <option value="{{$cat->id}}">{{$cat->name}}</option>
                                                    @endforeach
                                                </select>
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
                                            <label class="col-sm-6 col-form-label">Price</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="price" class="form-control"
                                                    placeholder="Price">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-sm-6 col-form-label">Cost</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="cost" id="itemrate" class="form-control"
                                                    placeholder="Cost">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-sm-6 col-form-label">Total Cost</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="total_cost" id="itemprice" id="price" value=""
                                                    class="form-control" placeholder="Total Cost">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-sm-6 col-form-label">Purchase Quantity</label>
                                            <div class="col-sm-9">
                                                <input type="number" name="purchase_quantity" id="itemquantity"
                                                    value="1" class="form-control" placeholder="Purchase Quantity">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-sm-6 col-form-label">Invoice Quantity</label>
                                            <div class="col-sm-9">
                                                <input type="number" name="invoice_quantity" value="1"
                                                    class="form-control" placeholder="Invoice Quantity">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-sm-6 col-form-label">Expire Date</label>
                                            <div class="col-sm-9">
                                                <input type="date" name="expire_date" class="form-control"
                                                    placeholder="Expire Date">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-6 col-form-label"></label>
                                        <div class="col-sm-9">
                                            @foreach($invoice as $inv)
                                            <input type="hidden" name="purchase_id" value="{{$inv->id + 1 }}"
                                                class="form-control">
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-6 col-form-label"></label>
                                    <div class="col-sm-9">
                                        <input type="hidden" name="product_id" value="{{$product[0]->id}}"
                                            class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div align="center">
                            <button type="submit" class="btn btn-primary mr-2">Submit</button>
                            <button class="btn btn-dark">Cancel</button>



                        </div>
                        </form>

                        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

                        <script>
                        $(function() {
                            // jQuery methods go here...
                            $('#itemquantity').on("change", function() {
                                calculatePrice();
                            });
                            $('#itemrate').on("change", function() {
                                calculatePrice();
                            });

                            function calculatePrice() {
                                var quantity = $('#itemquantity').val();
                                var rate = $('#itemrate').val();
                                if (quantity != "" && rate != "") {
                                    var price = quantity * rate;
                                }
                                $('#itemprice').val(price.toFixed(2));
                            }
                            $("#product").select2({

                                maximumSelectionLength: 2,
                            });
                        });
                        </script>
                        <!-- Jquery End -->


                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

</div>
</div>
<!-- content-wrapper ends -->
<!-- partial:partials/_footer.html -->

<!-- partial -->
</div>
<!-- main-panel ends -->
</div>


@endsection