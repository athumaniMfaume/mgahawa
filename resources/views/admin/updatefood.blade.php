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
                <a class="badge badge-success mb-2" href="{{url('/foodtable')}}">View Food</a>

                <form class="forms-sample" action="{{url('/update',$data->id)}}" method="POST" enctype="multipart/form-data">
                  @csrf
                    <div class="form-group">
                    <label for="exampleInputName1">Title</label>
                    <input type="text" name="title" value="{{$data->title}}" class="form-control" id="exampleInputName1" placeholder="Title" >
                    @if($errors->has('title'))
                               <span class="text-danger">{{$errors->first('title')}}</span>

                            @endif
                </div>

                  <div class="form-group">
                    <label for="exampleInputName1">Price</label>
                    <input type="number" name="price" value="{{$data->price}}" class="form-control" id="exampleInputName1" placeholder="Price" >
                    @if($errors->has('price'))
                    <span class="text-danger">{{$errors->first('price')}}</span>

                 @endif
                </div>

                <div class="form-group">
                    <label for="">Old image</label>
                    <img src="/foodimage/{{$data->image}}" width="100" alt="">
                </div>

                  <div class="form-group">
                    <label>New image</label>
                    <input type="file" name="image" class="form-control file-upload-info" >
                    @if($errors->has('image'))
                               <span class="text-danger">{{$errors->first('image')}}</span>

                            @endif
                  </div>

                  <div class="form-group">
                    <label for="exampleTextarea1">Description</label>
                    <textarea class="form-control" name="description" id="exampleTextarea1" rows="4" >{{$data->description}}</textarea>
                    @if($errors->has('description'))
                    <span class="text-danger">{{$errors->first('description')}}</span>

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
