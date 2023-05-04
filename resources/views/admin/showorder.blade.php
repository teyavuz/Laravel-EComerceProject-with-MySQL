<!DOCTYPE html>
<html lang="en">
  <head>
        @include('admin.css')
        <style type="text/css">
            .title
            {
                color:white; 
                padding-top: 25px; 
                font-size: 25px;
            }

            label
            {
                display: inline-block;
                width: 200px;
            }

            .inputtitle
            {
               color:black; 
            }
        </style>
  </head>
<body>
    @include('admin.sidebar')

    @include('admin.navbar')



    <div class="container-fluid page-body-wrapper">

        <div class="container" align="center" >

            <table class="table table-dark table-striped" style="text-align: center">
                <tr>
                    <td>Müşteri Adı:</td>
                    <td>Telefon Numarası:</td>
                    <td>Adres:</td>
                    <td>Ürün Adı:</td>
                    <td>Fiyat:</td>
                    <td>Adet:</td>
                    <td>Durumu:</td>
                    <td>Güncelle:</td>
                </tr>

                @foreach($order as $orders)

                <tr>
                    <td>{{$orders->name}}</td>
                    <td>{{$orders->phone}}</td>
                    <td>{{$orders->adress}}</td>
                    <td>{{$orders->product_name}}</td>
                    <td>{{$orders->price}}</td>
                    <td>{{$orders->quantity}}</td>
                    <td>{{$orders->status}}</td>
                    <td><a class="btn btn-info" href="{{url('updatestatus',$orders->id)}}">Teslim Edildi</a></td>
                </tr>
                @endforeach
            </table>

        </div>

    </div>




    @include('admin.script')

</body>
</html>