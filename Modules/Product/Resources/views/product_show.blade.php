@extends('master')

@section('homeContent')

        <!-- partial -->

        <div style="width:90% !important; margin-left:5%; margin-top:7%;">
        <div class="main-panel">
          <div class="content-wrapper">
          <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title" align="center">PRODUCT DETAILS</h4>
                    
                    </p>
                    <div class="table-responsive">
                      <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th> Product Name </th>
                            <th> Description </th>
                            <th> Price </th>
                            <th> Cost </th>
                            

                          </tr>
                        </thead>
                        <tbody>
                        @foreach($show as $shows)
    <tr>
      
      <td>{{$shows->name}}</td>
      <td class="col-md-2">{{$shows->description}}</td>
      <td>{{$shows->price}}</td>
      <td>{{$shows->cost}}</td>

      
      
    </tr>
    @endforeach
                          
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
          </div>
        </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
        

@endsection