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

    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="banner header-text">
      <div class="owl-banner owl-carousel">
        <div class="banner-item-01">
          <div class="text-content">
            <h4></h4>
            <h2></h2>
          </div>
        </div>
        <div class="banner-item-02">
          <div class="text-content">
            <h4></h4>
            <h2></h2>
          </div>
        </div>
        <div class="banner-item-03">
          <div class="text-content">
            <h4></h4>
            <h2></h2>
          </div>
        </div>
      </div>
    </div>
    <!-- Banner Ends Here -->


    @include('user.product')


    @include('user.aboutmini')


    <div class="call-to-action">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="inner-content">
              <div class="row">
                <div class="col-md-8">
                  <h4>Yaratıcı &amp; Eşsiz <em>Arrival</em>Merch</h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque corporis amet elite author nulla.</p>
                </div>
                <div class="col-md-4">
                  <a href="#" class="filled-button">Alışverişe Başla</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    
    @include('user.footer')

    @include('user.script')

  </body>

</html>
