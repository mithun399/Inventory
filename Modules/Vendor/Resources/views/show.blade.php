@extends('master')

@section('homeContent')


        <!-- partial -->
        <div style="width:90% !important; margin-left:5%; margin-top:7%;">
        <div class="main-panel">
          <div class="content-wrapper">
          <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title" align="center">VENDOR DETAILS</h4>
                    
                    </p>
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <th> Vendor Name </th>
                            <th> Address </th>
                            <th> Phone Number </th>
                            <th> Edit </th>
                            <th> Delete </th>

                          </tr>
                        </thead>
                        <tbody>
     @foreach($show as $shows)
         <tr>
      
               <td>{{$shows->name}}</td>
               <td>{{$shows->address}}</td>
               <td>{{$shows->phone_no}}</td>
               <td><a class="btn btn-primary" href="{{url('edit',$shows->id)}}">Edit</a></td>
               <td><a class="btn btn-danger" onclick="return confirm('Are You Sure to Delte This?')" href="{{url('destroy',$shows->id)}}">Delete</a></td>

         </tr>
    @endforeach
                          
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block"></span>
              <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">  <a href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank"></a> </span>
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
  </div>

@endsection