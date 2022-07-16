@extends('master')

@section('homeContent')


     
      <!-- partial -->
     
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
        <div style="align-items: center; margin-top: 7%;"
          <div class="col-md-7 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title" align="center">ADD VENDOR</h4>
                   
                    <form class="forms-sample" action="{{url('store')}}" method="POST" entype="multipart/form-data">
                      @csrf
                      <div class="form-group row">
                        <label  class="col-sm-3 col-form-label">Name</label>
                        <div class="col-sm-9">
                          <input type="text" name="name" class="form-control"  placeholder="Vendor Name">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label  class="col-sm-3 col-form-label">Address</label>
                        <div class="col-sm-9">
                          <input type="text" name="address" class="form-control" placeholder="Vendor Address">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label  class="col-sm-3 col-form-label">Phone Number</label>
                        <div class="col-sm-9">
                          <input type="text" name="phone_no" class="form-control"  placeholder="Vendor Phone Number">
                        </div>
                      </div>
                     
                    
                      <button type="submit" class="btn btn-primary mr-2">Submit</button>
                      <button class="btn btn-dark">Cancel</button>
                    </form>
                  </div>
                </div>
              </div>
              <div class="col">
      
    </div>
              
</div>
          </div>
          </div>
        
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
        
         
  
@endsection
