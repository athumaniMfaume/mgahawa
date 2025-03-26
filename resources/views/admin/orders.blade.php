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


        <div class="col-lg-8 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Customer's Order</h4>
               
                <form action="{{url('/search')}}" method="GET">
                    @csrf
                    <div class="form-group">
                        <input type="text" name="search" class="form-control mb-2">
                        <input type="submit" value="Search" class="btn btn-success">
                    </div>
                    
                </form>
                <div class="table-responsive">
                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Foodame</th>
                        <th>Price</th>
                        <th>quantity</th>
                        <th>total price</th>
                        <th>name</th>
                        <th>phone</th>
                        <th>address</th>
                        
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $datas)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$datas->foodname}}</td>
                            <td>{{$datas->price}}</td>
                            <td>{{$datas->quantity}}</td>
                            <td>{{$datas->quantity * $datas->price}} </td>
                            <td>{{$datas->name}}</td>
                            <td>{{$datas->phone}}</td>
                            <td>{{$datas->address}}</td>

                            
                            <td><a class="badge badge-danger" href="">delete</a></td>
          

                        </tr>
                        @endforeach



                    </tbody>
                  </table>

                </div>
              </div>
            </div>
          </div>




    </div>

    @include('admin.adminscript');
  </body>
</html>
