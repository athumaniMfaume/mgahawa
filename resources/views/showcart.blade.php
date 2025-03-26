<!DOCTYPE html>
<html lang="en">

  <head>
    <base href="/public">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">

    <title>Klassy Cafe - Restaurant HTML Template</title>
<!--

TemplateMo 558 Klassy Cafe

https://templatemo.com/tm-558-klassy-cafe

-->
    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/templatemo-klassy-cafe.css">

    <link rel="stylesheet" href="assets/css/owl-carousel.css">

    <link rel="stylesheet" href="assets/css/lightbox.css">

    </head>

    <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->


    <!-- ***** Header Area Start ***** -->
       @include('header')
    <!-- ***** Header Area End ***** -->

    <!-- ***** Main Banner Area Start ***** -->
    <div id="top">
        <div class="container-fluid">
    <section class="section" >
    <div class="container">
        <div class="row">
            <div class="col-lg-4 offset-lg-4 text-center">
                @if ($data->isNotEmpty())  

<div class="section-heading">

    <h6>Food Order</h6>

</div>


    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Food</th>
                <th scope="col">Price</th>
                <th scope="col">Quantity</th>
                <th scope="col">Total Price</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <form action="{{ url('orderconfirm') }}" method="POST">
                @csrf

                @php $value = 0; @endphp

                @foreach ($data as $datas)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>
                            <input type="hidden" name="foodname[]" value="{{ $datas->food->title }}">
                            {{ $datas->food->title }}
                        </td>
                        <td>
                            <input type="hidden" name="price[]" value="{{ $datas->food->price }}">
                            {{ $datas->food->price }}$
                        </td>
                        <td>
                            <input type="hidden" name="quantity[]" value="{{ $datas->quantity }}">
                            {{ $datas->quantity }}
                        </td>
                        <td>{{ $datas->quantity * $datas->food->price }}</td>
                        <td>
                            <a class="badge badge-danger" href="{{ url('deletecart', $datas->id) }}">Delete</a>
                        </td>
                    </tr>
                    @php $value += $datas->quantity * $datas->food->price; @endphp
                @endforeach
            </tbody>
        </table>

        <h3 class="mb-2">Total cost ${{ $value }}</h3>

        <button id="order" type="button" class="btn btn-success mb-6">Order Now</button>

        <div id="appear" style="display: none">
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" name="name" class="form-control" placeholder="Name">
                @error('name')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="form-group">
                <label for="">Phone</label>
                <input type="number" name="phone" class="form-control" placeholder="Phone">
                @error('phone')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="form-group">
                <label for="">Address</label>
                <input type="text" name="address" class="form-control" placeholder="Address">
                @error('address')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="form-group">
                <input class="btn btn-primary" type="submit" value="Confirm Order">
                <button id="close" type="button" class="btn btn-danger">Close</button>
            </div>
        </div>
    </form>
@else
<br><br><br><br>
<div>
    <div class="section-heading">

    <h6>Food Order</h6>

     <br>
</div>
        <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Food</th>
                <th scope="col">Price</th>
                <th scope="col">Quantity</th>
                <th scope="col">Total Price</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <form action="{{ url('orderconfirm') }}" method="POST">
                @csrf

                @php $value = 0; @endphp

                @foreach ($data as $datas)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>
                            <input type="hidden" name="foodname[]" value="{{ $datas->food->title }}">
                            {{ $datas->food->title }}
                        </td>
                        <td>
                            <input type="hidden" name="price[]" value="{{ $datas->food->price }}">
                            {{ $datas->food->price }}$
                        </td>
                        <td>
                            <input type="hidden" name="quantity[]" value="{{ $datas->quantity }}">
                            {{ $datas->quantity }}
                        </td>
                        <td>{{ $datas->quantity * $datas->food->price }}</td>
                        <td>
                            <a class="badge badge-danger" href="{{ url('deletecart', $datas->id) }}">Delete</a>
                        </td>
                    </tr>
                    @php $value += $datas->quantity * $datas->food->price; @endphp
                @endforeach
            </tbody>
        </table>
         <h2>No cart available</h2>
         </div>

@endif
            </div>
        </div>
        
</div>
</div>
</div>

   
    </div>
  

    <!-- ***** Footer Start ***** -->
      @include('footer')

    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/accordions.js"></script>
    <script src="assets/js/datepicker.js"></script>
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/lightbox.js"></script>
    <script src="assets/js/isotope.js"></script>

    <!-- Global Init -->
    <script>
       $('#order').click(
        function(){
            $('#appear').show();
        }
       ) 

       $('#close').click(
        function(){
            $('#appear').hide();
        }
       )
    </script>



    <script src="assets/js/custom.js"></script>
    <script>

        $(function() {
            var selectedClass = "";
            $("p").click(function(){
            selectedClass = $(this).attr("data-rel");
            $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("."+selectedClass).fadeOut();
            setTimeout(function() {
              $("."+selectedClass).fadeIn();
              $("#portfolio").fadeTo(50, 1);
            }, 500);

            });
        });

    </script>
  </body>
</html>
