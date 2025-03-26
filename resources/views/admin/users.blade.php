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
                <h4 class="card-title">Users Table</h4>
                {{-- <p class="card-description"> Add class <code>.table-hover</code>
                </p> --}}
                <div class="table-responsive">
                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $datas)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$datas->name}}</td>
                            <td>{{$datas->email}}</td>

                            @if ($datas->usertype == '0')
                            <td><a class="badge badge-danger" href="{{url('/deleteuser',$datas->id)}}">delete</a></td>

                            @else
                            <td><a class="badge badge-success" >Not allowed</a></td>

                            @endif

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
