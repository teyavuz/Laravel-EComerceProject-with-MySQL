<!DOCTYPE html>
<html lang="en">
  <head>
        @include('admin.css')
  </head>
  <body>


        @include('admin.sidebar')

        @include('admin.navbar')

        <div class="container-fluid page-body-wrapper">
            <div class="container" align="center">
                @if(session()->has('message'))
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert">x</button>

                    {{session()->get('message')}}
                </div>
                @endif
                <table style="margin-top: 5%; padding-bottom:50px">
                    <tr style="background-color: grey; align-items:center; opacity:75%">
                        <td style="padding:20px">Ürün İsmi</td>

                        <td style="padding:20px">Açıklaması</td>

                        <td style="padding:20px">Adedi</td>

                        <td style="padding:20px">Fiyatı</td>

                        <td style="padding:20px">Fotoğrafı</td>

                        <td style="padding:20px">Güncelle</td>

                        <td style="padding:20px">Sil</td>
                    </tr>
                    
                    @foreach ($data as $product)
                    
                    <tr style="background-color: rgba(0, 0, 0, 0.2); align-items:center; ">
                        <td>{{$product->title}}</td>

                        <td>{{$product->description}}</td>

                        <td>{{$product->quantity}}</td>

                        <td>{{$product->price}}</td>

                        <td>
                            <img style="width:200px;" src="/productimage/{{$product->image}}">
                        </td>

                        <td><a class="btn btn-secondary" href="{{url('updateview',$product->id)}}">Güncelle</a></td>
                        <td><a class="btn btn-danger" onclick="return confirm('Emin misin?')" href="{{url('deleteproduct',$product->id)}}">Sil</a></td>
                    </tr>

                    @endforeach

                </table>
            </div>
        </div>

        @include('admin.script')

  </body>
</html>