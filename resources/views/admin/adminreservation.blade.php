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


    <div class="col-lg-10 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <a class="badge badge-success mb-2" href="{{url('/foodmenu')}}">Add Food</a>

            <div class="table-responsive">
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Message</th>

                  </tr>
                </thead>
                <tbody>
                    @foreach ($data as $datas)
                    <tr>
                        <td>{{$datas->id}}</td>
                        <td>{{$datas->name}}</td>
                        <td>{{$datas->email}}</td>
                        <td>{{$datas->phone}}</td>
                        <td>{{$datas->date}}</td>
                        <td>{{$datas->time}}</td>
                        <td>{{$datas->message}}</td>





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
