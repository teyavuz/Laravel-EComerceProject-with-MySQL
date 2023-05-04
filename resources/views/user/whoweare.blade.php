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

        <!-- Page Content -->
        <div class="page-heading about-heading header-text">
            <div class="container">
              <div class="row">
                <div class="col-md-12">
                  <div class="text-content">
                    <h4>Biz Kimiz</h4>
                    <h2>HAKKIMIZDA</h2>
                  </div>
                </div>
              </div>
            </div>
          </div>
      
      
          @include('user.aboutmini')
      
          
          <div class="team-members">
            <div class="container">
              <div class="row">
                <div class="col-md-12">
                  <div class="section-heading">
                    <h2>Takımımız</h2>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="team-member">
                    <div class="thumb-container">
                      <img src="assets/images/team_01.jpg" alt="">
                      <div class="hover-effect">
                        <div class="hover-content">
                          <ul class="social-icons">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-behance"></i></a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="down-content">
                      <h4>Taha Emre Yavuz</h4>
                      <span>CO-Founder</span>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing itaque corporis nulla.</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="team-member">
                    <div class="thumb-container">
                      <img src="assets/images/team_02.jpg" alt="">
                      <div class="hover-effect">
                        <div class="hover-content">
                          <ul class="social-icons">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-behance"></i></a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="down-content">
                      <h4>Yasin Çetin</h4>
                      <span>Product Expert</span>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing itaque corporis nulla.</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="team-member">
                    <div class="thumb-container">
                      <img src="assets/images/team_03.jpg" alt="">
                      <div class="hover-effect">
                        <div class="hover-content">
                          <ul class="social-icons">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-behance"></i></a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="down-content">
                      <h4>Okan Bayülgen</h4>
                      <span>Chief Marketing</span>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing itaque corporis nulla.</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="team-member">
                    <div class="thumb-container">
                      <img src="assets/images/team_04.jpg" alt="">
                      <div class="hover-effect">
                        <div class="hover-content">
                          <ul class="social-icons">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-behance"></i></a></li>
                          </ul>
                        </div>
                      </div>
                    </div>


                    <div class="down-content">
                      <h4>Kerime Kerimoğlu</h4>
                      <span>General Manager</span>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing itaque corporis nulla.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
      
      
          <div class="services">
            <div class="container">
              <div class="row">
                <div class="col-md-4">
                  <div class="service-item">
                    <div class="icon">
                      <i class="fa fa-gear"></i>
                    </div>
                    <div class="down-content">
                      <h4>Product Management</h4>
                      <p>Lorem ipsum dolor sit amet, consectetur an adipisicing elit. Itaque, corporis nulla at quia quaerat.</p>
                      <a href="#" class="filled-button">Read More</a>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="service-item">
                    <div class="icon">
                      <i class="fa fa-gear"></i>
                    </div>
                    <div class="down-content">
                      <h4>Customer Relations</h4>
                      <p>Lorem ipsum dolor sit amet, consectetur an adipisicing elit. Itaque, corporis nulla at quia quaerat.</p>
                      <a href="#" class="filled-button">Details</a>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="service-item">
                    <div class="icon">
                      <i class="fa fa-gear"></i>
                    </div>
                    <div class="down-content">
                      <h4>Global Collection</h4>
                      <p>Lorem ipsum dolor sit amet, consectetur an adipisicing elit. Itaque, corporis nulla at quia quaerat.</p>
                      <a href="#" class="filled-button">Read More</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
      
      
          <div class="happy-clients">
            <div class="container">
              <div class="row">
                <div class="col-md-12">
                  <div class="section-heading">
                    <h2>Happy Partners</h2>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="owl-clients owl-carousel">
                    <div class="client-item">
                      <img src="assets/images/client-01.png" alt="1">
                    </div>
                    
                    <div class="client-item">
                      <img src="assets/images/client-02.png" alt="2">
                    </div>
                    
                    <div class="client-item">
                      <img src="assets/images/client-03.png" alt="3">
                    </div>
                    
                    <div class="client-item">
                      <img src="assets/images/client-04.png" alt="4">
                    </div>
                    
                    <div class="client-item">
                      <img src="assets/images/client-05.png" alt="5">
                    </div>

                  </div>
                </div>
              </div>
            </div>
          </div>
    

    

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