@extends('vendor::layouts.master')

@section('content')



<html>
<head>
<style>
body {
  background-color: white;
}
</style>
</head>
  <body>
<a class="btn btn-primary" href="/category_show">GO Back</a>
<div class="container-scroller" style="padding:70px">
      <!-- partial:partials/_sidebar.html -->
     
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
          <div class="col-md-8 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title" align="center" style="color:#344767;">CATEGORY EDIT</h4>
                   
                    <form class="forms-sample" method="POST" action="{{url('category-update',$edit->id)}}" entype="multipart/form-data">
                      @csrf
                      <div class="form-group row">
                        <label  class="col-sm-3 col-form-label" style="color:#67748e">Name</label>
                        <div class="col-sm-9">
                          <input type="text" name="name" style="color:#67748e" value="{{$edit->name}}"  class="form-control"  placeholder="Vendor Name">
                        </div>
                      </div>
                     <br>
                     
                    <div align="center">
                      <button type="submit" class="btn btn-primary mr-2">Submit</button>
                      <button class="btn btn-dark">Cancel</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
              <div class="col">
      
    </div>
              
</div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
        
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="assets/vendors/chart.js/Chart.min.js"></script>
    <script src="assets/vendors/progressbar.js/progressbar.min.js"></script>
    <script src="assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
    <script src="assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/hoverable-collapse.js"></script>
    <script src="assets/js/misc.js"></script>
    <script src="assets/js/settings.js"></script>
    <script src="assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="assets/js/dashboard.js"></script>
    <!-- End custom js for this page -->
</body>
    </html>
@endsection