@extends('frontend.layout')

@section('content')
<!-- slider_area_start -->
<div class="slider_area">
    <div class="slider_active owl-carousel">
      <div
        style="background-image: url({{ asset('frontend/img/banner/banner.jpg') }})"
        class="single_slider d-flex align-items-center overlay"
      >
        <div class="container">
          <div class="row align-items-center">
            <div class="col-xl-12 col-md-12">
              <div class="slider_text text-center">
                <h3>Indonesia</h3>
                <p>Pixel perfect design with awesome contents</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div
        style="background-image: url({{ asset('frontend/img/banner/banner2.png') }})"
        class="single_slider d-flex align-items-center overlay"
      >
        <div class="container">
          <div class="row align-items-center">
            <div class="col-xl-12 col-md-12">
              <div class="slider_text text-center">
                <h3>Australia</h3>
                <p>Pixel perfect design with awesome contents</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div
        style="background-image: url({{ asset('frontend/img/banner/banner3.jpg') }})"
        class="single_slider d-flex align-items-center overlay"
      >
        <div class="container">
          <div class="row align-items-center">
            <div class="col-xl-12 col-md-12">
              <div class="slider_text text-center">
                <h3>Switzerland</h3>
                <p>Pixel perfect design with awesome contents</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- slider_area_end -->

  <!-- destination -->
  <div class="popular_places_area">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-6">
          <div class="section_title text-center mb_70">
            <h3>Popular Destination</h3>
            <p>
              Suffered alteration in some form, by injected humour or good day
              randomised booth anim 8-bit hella wolf moon beard words.
            </p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 col-md-6">
          <div class="single_place">
            <div class="thumb">
              <img src="img/place/1.png" alt="" />
              <a href="#" class="prise">$500</a>
            </div>
            <div class="place_info">
              <a href="destination_details.html"><h3>Lombok</h3></a>
              <p>Nusa Tenggara Barat</p>
              <div class="rating_days d-flex justify-content-between">
                <div class="days">
                  <i class="fa fa-clock-o"></i>
                  <a href="#">5N4D</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="single_place">
            <div class="thumb">
              <img src="img/place/2.png" alt="" />
              <a href="#" class="prise">$500</a>
            </div>
            <div class="place_info">
              <a href="destination_details.html"><h3>Kuta</h3></a>
              <p>Bali</p>
              <div class="rating_days d-flex justify-content-between">
                <div class="days">
                  <i class="fa fa-clock-o"></i>
                  <a href="#">4N3D</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="single_place">
            <div class="thumb">
              <img src="img/place/3.png" alt="" />
              <a href="#" class="prise">$500</a>
            </div>
            <div class="place_info">
              <a href="destination_details.html"><h3>London</h3></a>
              <p>United State of America</p>
              <div class="rating_days d-flex justify-content-between">
                <div class="days">
                  <i class="fa fa-clock-o"></i>
                  <a href="#">4N3D</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="single_place">
            <div class="thumb">
              <img src="img/place/4.png" alt="" />
              <a href="#" class="prise">$500</a>
            </div>
            <div class="place_info">
              <a href="destination_details.html"><h3>Miami Beach</h3></a>
              <p>United State of America</p>
              <div class="rating_days d-flex justify-content-between">
                <div class="days">
                  <i class="fa fa-clock-o"></i>
                  <a href="#">4N3D</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="single_place">
            <div class="thumb">
              <img src="img/place/5.png" alt="" />
              <a href="#" class="prise">$500</a>
            </div>
            <div class="place_info">
              <a href="destination_details.html"><h3>California</h3></a>
              <p>United State of America</p>
              <div class="rating_days d-flex justify-content-between">
                <div class="days">
                  <i class="fa fa-clock-o"></i>
                  <a href="#">4N3D</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="single_place">
            <div class="thumb">
              <img src="img/place/6.png" alt="" />
              <a href="#" class="prise">$500</a>
            </div>
            <div class="place_info">
              <a href="destination_details.html"
                ><h3>Saintmartine Iceland</h3></a
              >
              <p>United State of America</p>
              <div class="rating_days d-flex justify-content-between">
                <div class="days">
                  <i class="fa fa-clock-o"></i>
                  <a href="#">4N3D</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end -->

  <div class="travel_variation_area">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-6">
          <div class="single_travel text-center">
            <div class="icon">
              <img src="img/svg_icon/1.svg" alt="" />
            </div>
            <h3>Comfortable Journey</h3>
            <p>
              A wonderful serenity has taken to the possession of my entire
              soul.
            </p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="single_travel text-center">
            <div class="icon">
              <img src="img/svg_icon/2.svg" alt="" />
            </div>
            <h3>Luxuries Hotel</h3>
            <p>
              A wonderful serenity has taken to the possession of my entire
              soul.
            </p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="single_travel text-center">
            <div class="icon">
              <img src="img/svg_icon/3.svg" alt="" />
            </div>
            <h3>Travel Guide</h3>
            <p>
              A wonderful serenity has taken to the possession of my entire
              soul.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- testimonial_area  -->
  <div class="testimonial_area">
    <div class="container">
      <div class="row">
        <div class="col-xl-12">
          <div class="testmonial_active owl-carousel">
            <div class="single_carousel">
              <div class="row justify-content-center">
                <div class="col-lg-8">
                  <div class="single_testmonial text-center">
                    <div class="author_thumb">
                      <img src="img/testmonial/author.png" alt="" />
                    </div>
                    <p>
                      "Working in conjunction with humanitarian aid agencies,
                      we have supported programmes to help alleviate human
                      suffering.
                    </p>
                    <div class="testmonial_author">
                      <h3>- Micky Mouse</h3>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="single_carousel">
              <div class="row justify-content-center">
                <div class="col-lg-8">
                  <div class="single_testmonial text-center">
                    <div class="author_thumb">
                      <img src="img/testmonial/author.png" alt="" />
                    </div>
                    <p>
                      "Working in conjunction with humanitarian aid agencies,
                      we have supported programmes to help alleviate human
                      suffering.
                    </p>
                    <div class="testmonial_author">
                      <h3>- Tom Mouse</h3>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="single_carousel">
              <div class="row justify-content-center">
                <div class="col-lg-8">
                  <div class="single_testmonial text-center">
                    <div class="author_thumb">
                      <img src="img/testmonial/author.png" alt="" />
                    </div>
                    <p>
                      "Working in conjunction with humanitarian aid agencies,
                      we have supported programmes to help alleviate human
                      suffering.
                    </p>
                    <div class="testmonial_author">
                      <h3>- Jerry Mouse</h3>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /testimonial_area  -->
  @endsection