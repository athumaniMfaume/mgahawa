<x-app-layout>

</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public">
    @include('admin.admincss')
  </head>
  <body>
    <div class="container-scroller mt-2">
        @include('admin.navbar')

        <div class="col-8 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <a class="badge badge-success mb-2" href="{{url('/viewchef')}}">View Chef</a>

                <form class="forms-sample" action="{{url('/postupdatechef',$data->id)}}" method="POST" enctype="multipart/form-data">
                  @csrf
                    <div class="form-group">
                    <label for="exampleInputName1">Name</label>
                    <input type="text" name="name" value="{{$data->name}}" class="form-control" id="exampleInputName1" placeholder="Name" >
                    @if($errors->has('name'))
                               <span class="text-danger">{{$errors->first('name')}}</span>

                            @endif
                </div>

                <div class="form-group">
                    <label for="exampleInputName1">Specialist</label>
                    <input type="text" name="specialist" value="{{$data->specialist}}" class="form-control" id="exampleInputName1" placeholder="Specialist" >
                    @if($errors->has('specialist'))
                               <span class="text-danger">{{$errors->first('specialist')}}</span>

                            @endif
                </div>



                <div class="form-group">
                    <label for="">Old image</label>
                    <img src="/chefimage/{{$data->image}}" width="100" alt="">
                </div>

                  <div class="form-group">
                    <label>New image</label>
                    <input type="file" name="image" class="form-control file-upload-info" >
                    @if($errors->has('image'))
                               <span class="text-danger">{{$errors->first('image')}}</span>

                            @endif
                  </div>


                  <button type="submit" class="btn btn-primary mr-2">Submit</button>
                  <button class="btn btn-dark">Cancel</button>
                </form>
              </div>
            </div>







    </div>



    @include('admin.adminscript')
  </body>
</html>
