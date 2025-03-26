<x-app-layout>

</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.admincss')
  </head>
  <body>
    <div class="container-scroller">
      @include('admin.navbar')
      <div class="container-fluid page-body-wrapper">
               <div class="main-panel">
          <div class="content-wrapper">

            <div class="row">
              <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-9">
                        
                        <div class="d-flex align-items-center align-self-start">
                          <h3 class="mb-0">
                            {{$chef->count()}} </a></h3>
                          <p class="text-success ml-2 mb-0 font-weight-medium"></p>
                        </div> 
                      </div>
                      <div class="col-3">
                        <div class="icon icon-box-success ">
                          <a href="{{url('/viewchef')}}" class="text-decoration-none text-success">
                          <span class="mdi mdi-account-multiple icon-item"></span></a>
                        </div>
                      </div>
                    </div>
                    <h6 class="text-muted font-weight-normal">Total chefs</h6>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-9">
                        <div class="d-flex align-items-center align-self-start">
                          <h3 class="mb-0">
                            {{$food->count()}} </h3>
                          <p class="text-success ml-2 mb-0 font-weight-medium"></p>
                        </div>
                      </div>
                      <div class="col-3">
                        <div class="icon icon-box-success">
                          <a href="{{url('/foodtable')}}" class="text-decoration-none text-success">
                          <span class="mdi mdi-food icon-item"></span></a>
                        </div>
                      </div>
                    </div>
                    <h6 class="text-muted font-weight-normal">Total food</h6>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-9">
                        <div class="d-flex align-items-center align-self-start">
                          <h3 class="mb-0">
                            {{$order->count()}} </h3>
                          <p class="text-danger ml-2 mb-0 font-weight-medium"></p>
                        </div>
                      </div>
                      <div class="col-3">
                        <div class="icon icon-box-danger">
                          <a href="{{url('/orders')}}" class="text-decoration-none text-danger">
                          <span class="mdi mdi-chart-bar icon-item"></span></a>
                        </div>
                      </div>
                    </div>
                    <h6 class="text-muted font-weight-normal">Total order</h6>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-9">
                        <div class="d-flex align-items-center align-self-start">
                          <h3 class="mb-0">
                           {{$reservation->count()}} </h3>
                          <p class="text-success ml-2 mb-0 font-weight-medium"></p>
                        </div>
                      </div>
                      <div class="col-3">
                        <div class="icon icon-box-danger ">
                           <a href="{{url('/viewreservation')}}" class="text-decoration-none text-danger">
                          <span class="mdi mdi-chart-bar icon-item"></span></a>
                        </div>
                      </div>
                    </div>
                    <h6 class="text-muted font-weight-normal">Total reservation</h6>
                  </div>
                </div>
              </div>
            </div>
 
       
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © bootstrapdash.com 2020</span>
              <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Bootstrap admin templates</a> from Bootstrapdash.com</span>
            </div>
          </footer>
          <!-- partial -->
        </div>

      </div>

    </div>
 
    @include('admin.adminscript');
  </body>
</html>
