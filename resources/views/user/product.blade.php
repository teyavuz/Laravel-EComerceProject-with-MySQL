                @if(session()->has('message'))
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert">x</button>

                    {{session()->get('message')}}
                </div>
                @endif
<div class="latest-products">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Envantere Yeni Eklenenler</h2>              
              <a href="products.html">Bütün ürünlere gözat- <i class="fa fa-angle-right"></i></a>

              <form action="{{url('search')}}" method="get" class="form-inline" style="float: right; padding=10px;">

                @csrf

                <input class="form-control" type="search" name="search" placeholder="Ara">
                <input type="submit" value="Ara" class="btn btn-success">
              </form>

            </div>
          </div>

          @foreach($data as $product)


          <div class="col-md-4">
            <div class="product-item">
              <a href="#"><img height="" width="" src="/productimage/{{$product->image}}" alt="{{$product->title}}"></a>
              <div class="down-content">
                <a href="#"><h4>{{$product->title}}</h4></a>
                <p>{{$product->description}}</p>
                <h4 style="color:black">$ {{$product->price}}</h4>
                <span>Quantity: {{$product->quantity}}</span>

                <form action="{{url('addcart',$product->id)}}" method="POST">
                  @csrf

                  <input type="number" value="1" min="1" name="quantify" class="form-control" style="width: 116px">
                  <input type="submit" name="" class="btn btn-primary" value="Sepete Ekle" style="color:black">

                </form>
              </div>
            </div>
          </div>

          @endforeach

          @if(method_exists($data,'link'))

          <div class="d-flex justify-content-center">

          {{!! $data->links() !!}}

          </div>
          @endif

        </div>
      </div>
    </div>