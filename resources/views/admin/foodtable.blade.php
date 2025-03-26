<x-app-layout>

</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.admincss')
  </head>
  <body>
    <div class="container-scroller mt-2">
        @include('admin.navbar')


    <div class="col-lg-8 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <a class="badge badge-success mb-2" href="{{url('/foodmenu')}}">Add Food</a>

            @if (Session::has('success'))
                <div class="alert alert-success">
                  {{Session::get('success')}}
                </div>
                
            @endif

            <div class="table-responsive">
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Food</th>
                    <th>Price</th>
                    <th>Description</th>
                    <th>Image</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($data as $datas)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$datas->title}}</td>
                        <td>{{$datas->price}}</td>
                        <td>{{$datas->description}}</td>
                        <td>  <img src="/foodimage/{{$datas->image}}" alt=""> </td>
                        <td>
                            <a class="badge badge-danger" href="{{url('/deletefood',$datas->id)}}">delete</a>
                            <a class="badge badge-warning" href="{{url('/updatefood',$datas->id)}}">update</a>
                        </td>



                    </tr>
                    @endforeach



                </tbody>
              </table>

              {{$data->links()}}

            </div>
          </div>
        </div>
      </div>
  </div>
</div>


    @include('admin.adminscript');
  </body>
</html>
