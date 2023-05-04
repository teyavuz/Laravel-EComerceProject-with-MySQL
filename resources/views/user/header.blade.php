<header class="">
    <nav class="navbar navbar-expand-lg">
      <div class="container">
        <a class="navbar-brand" href="{{url('redirect')}}"><h2>Arrival <em>Merch</em></h2></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class=" navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <li>
                @if (Route::has('login'))
                
                      @auth
    
                      <a class="nav-link" href="{{url('redirect')}}">Anasayfa
                      @else
                      <a class="nav-link" href="{{url('/')}}">Anasayfa
                      @endif
                      @endauth
              
                <span class="sr-only">(current)</span>
              </a>
            </li> 
            <li class="nav-item">
              <a class="nav-link" href="{{url('/ourproducts')}}">Ürünlerimiz</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{'/whoweare'}}">Biz Kimiz?</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.html">İletişim</a>
            </li>

            <li>
            @if (Route::has('login'))
            
                  @auth

                  <li class="nav-item">
                    <a class="nav-link" href="{{url('/showcart')}}">
                      <i class="fa-solid fa-cart-shopping"></i>
                      Sepet[{{$count}}]</a>
                  </li>

                     <x-app-layout>

                     </x-app-layout>


                     
                  @else
                  <li class="nav-item"> <a href="{{ route('login') }}" class="nav-link" >Giriş</a> </li>

                      @if (Route::has('register'))
                      <li class="nav-item"> <a href="{{ route('register') }}" class="nav-link" ><b>Kayıt Ol</b></a> </li>
                      @endif
                  @endauth
          @endif

          </li>

          </ul>
        </div>
      </div>
    </nav>
  </header>