@extends('layouts.rentcar')
@section('title','About Us')
@section('content')

<section class="page-header aboutus_page">
  <div class="container">
    <div class="page-header_wrap">
      <div class="page-heading">
      
      </div>
      <ul class="coustom-breadcrumb">
        <li><a href="home">Kezdőoldal</a></li>
        <li><a href="#">Rólam </a></li>
      </ul>
    </div>
  </div>
  <div class="dark-overlay"></div>
</section>
<div class="container">
    <div class="row">
        <h2>Ez az én autós oldalam</h2>
        <hr />
        <div class="row pt-md">
            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 team">
                <div class="img-box">
                    <img class="img-responsive" alt="Responsive Team Profiles" src="http://www.prepbootstrap.com/Content/images/template/people/person1.jpg" />
                    <ul class="text-center">
                        <a href="#">
                            <li><i class="fa fa-facebook"></i></li>
                        </a>
                        <a href="#">
                            <li><i class="fa fa-twitter"></i></li>
                        </a>
                        <a href="#">
                            <li><i class="fa fa-linkedin"></i></li>
                        </a>
                    </ul>
                </div>
                <h1>Hoffmann Márk</h1>
                <h2>Tanuló/laravel-tanulása</h2>
                <hr />
                <p class="text-justify">Egy autós weboldalat próbálok csinálni helyel közel, amennyire sikerül</p>
            </div>
        </div>
    </div>
</div>



@endsection

