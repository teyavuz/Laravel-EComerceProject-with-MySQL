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
            <div class="container" align="center">
                <h1 class="title" >Ürün Ekle</h1>

                @if(session()->has('message'))
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert">x</button>

                    {{session()->get('message')}}
                </div>
                @endif

        <form action="{{url('uploadproduct')}}" method="post" enctype="multipart/form-data">

                @csrf

                <div style="padding-top: 25px;">
                    <label>Ürün İsmi: </label>
                    <input class="inputtitle" type="text" name="title" placeholder="Ürün adı girin" required="">
                </div>

                <div style="padding-top: 25px;">
                    <label>Ürün Fiyatı: </label>
                    <input class="inputtitle" type="number" name="price" placeholder="Ürün fiyatı girin" required="">
                </div>

                <div style="padding-top: 25px;">
                    <label>Ürün Açıklaması: </label>
                    <input class="inputtitle" type="text" name="des" placeholder="Ürün açıklaması girin" required="">
                </div>

                <div style="padding-top: 25px;">
                    <label>Ürün Miktarı: </label>
                    <input class="inputtitle" type="text" name="quantity" placeholder="Ürün miktarı girin" required="">
                </div>

                <div style="padding-top: 25px;">
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