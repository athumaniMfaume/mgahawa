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

        <div class="col-8 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <a class="badge badge-success mb-2" href="{{url('/viewchef')}}">View Chief</a>

                <form class="forms-sample" action="{{url('/postchef')}}" method="POST" enctype="multipart/form-data">
                  @csrf
                    <div class="form-group">
                    <label for="exampleInputName1">Name</label>
                    <input type="text" name="name" class="form-control" id="exampleInputName1" placeholder="name" >
                    @if($errors->has('name'))
                               <span class="text-danger">{{$errors->first('name')}}</span>

                            @endif
                </div>

                <div class="form-group">
                    <label for="exampleInputName1">Specialist</label>
                    <input type="text" name="specialist" class="form-control" id="exampleInputName1" placeholder="specialist" >
                    @if($errors->has('specialist'))
                               <span class="text-danger">{{$errors->first('specialist')}}</span>

                            @endif
                </div>



                  <div class="form-group">
                    <label>File upload</label>
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
