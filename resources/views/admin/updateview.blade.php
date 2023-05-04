<!DOCTYPE html>
<html lang="en">
  <head>
        <base href="/public">
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
            <div class="container" align="center">
                <h1 class="title" >Ürünü Güncelle</h1>

                @if(session()->has('message'))
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert">x</button>

                    {{session()->get('message')}}
                </div>
                @endif

        <form action="{{url('updateproduct', $data->id)}}" method="post" enctype="multipart/form-data">

                @csrf

                <div style="padding-top: 25px;">
                    <label>Ürün İsmi: </label>
                    <input value="{{$data->title}}" class="inputtitle" type="text" name="title" placeholder="Ürün adı girin" required="">
                </div>

                <div style="padding-top: 25px;">
                    <label>Ürün Fiyatı: </label>
                    <input value="{{$data->price}}" class="inputtitle" type="number" name="price" placeholder="Ürün fiyatı girin" required="">
                </div>

                <div style="padding-top: 25px;">
                    <label>Ürün Açıklaması: </label>
                    <input value="{{$data->description}}" class="inputtitle" type="text" name="des" placeholder="Ürün açıklaması girin" required="">
                </div>

                <div style="padding-top: 25px;">
                    <label>Ürün Miktarı: </label>
                    <input value="{{$data->quantity}}" class="inputtitle" type="text" name="quantity" placeholder="Ürün miktarı girin" required="">
                </div>

                <div style="padding-top: 25px;">
                    <label>Ürünün Mevcut Fotoğrafı: </label>
                    <img style="width:250px;" src="/productimage/{{$data->image}}">
                </div>

                <div style="padding-top: 25px;">
                    <label>Yeni Fotoğraf: </label>
                    <input type="file" name="file">
                </div>

                <div style="padding-top: 25px;">
                    <input class="btn btn-primary" type="submit">
                </div>
        </form>



            </div>
        </div>

        @include('admin.script')

  </body>
</html>