<!DOCTYPE html>
<html lang="en">

  <head>

    @include('user.css')

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

    <!-- Header -->
    @include('user.header')

                @if(session()->has('message'))
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert">x</button>

                    {{session()->get('message')}}
                </div>
                @endif


        <div style="padding:100px;"align="center">
            <table class="table table-dark" style="text-align: center">
                <tr>
                    <td>Ürün:</td>
                    <td>Adet:</td>
                    <td>Fiyat:</td>
                    <td>İşlem:</td>
                </tr>

        <form action="{{url('order')}}" method="POST">
            @csrf

@foreach($cart as $carts)
                <tr>
                    <td>
                        <input hidden type="text" name="productname[]" value="{{$carts->product_title}}">
                        {{$carts->product_title}}
                    </td>
                    <td>
                        <input hidden type="text" name="quantity[]" value="{{$carts->quantity}}">
                        {{$carts->quantity}}
                    </td>
                    <td>
                        <input hidden type="text" name="price[]" value="{{$carts->price}} $">
                        {{$carts->price}} $
                    </td>
                    <td><a class="btn btn-danger" href="{{url('delete', $carts->id)}}">Sil</a></td>
                </tr>
@endforeach
            </table>


            <button class="btn btn-success">Siparişi Onayla</button>
        </form>


        </div>
    

    
    @include('user.footer')

    @include('user.script')

  </body>

</html>